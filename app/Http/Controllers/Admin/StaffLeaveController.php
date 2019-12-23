<?php

namespace App\Http\Controllers\Admin;

use App\Staff_Leave;
use App\staff_work;
use Illuminate\Http\Request;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\DB;

class StaffLeaveController extends AppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function futureCompute($initialDateValue){
        $this->intitialDate = $initialDateValue;
        $this->now = getdate(time());
        $this->then = getdate($this->intitialDate);
        $dateDifference = ($this->now["year"]-$this->then["year"]);
        if($dateDifference > 0){
            $this->incrementPoint = $dateDifference;
        }else if($dateDifference == 0){
            $this->incrementPoint = 1;
        }
        $this->backDate = $this->incrementPoint;
        $this->pastFix = 1;
    }

    private $intitialDate;
    private $now;
    private $then;
    private $duedate;
    private $incrementPoint;
    private $furtureDate;
    private $backDate;
    private $pastFix;
    public function Calculate($alertYear){

        if($this->backDate != 1){
            $PastTofuture = $this->intitialDate+(31536000*$this->pastFix);
            $this->furtureDate = $PastTofuture;
            $this->pastFix++;
            if ($this->backDate % $alertYear == 0){
                $this->duedate = $PastTofuture;
                $this->backDate--;
                return 1;
            }else{
                $this->backDate--;
                return 0;
            }
        }else if($this->backDate == 1){
            $future = $this->intitialDate+(31536000*$this->incrementPoint);
            $this->furtureDate = $future;
            if ($this->incrementPoint > 0 && ($this->incrementPoint % $alertYear) == 0){
                $this->duedate = $future;
                $this->incrementPoint++;
                return 1;
            }else{
                $this->incrementPoint++;
                return 0;
            }
        }
    }
    public function getDueDate(){
        $rawDueDate = getdate($this->duedate);
        $dateComponents = array();
        $dateComponents["year"] = $rawDueDate["year"];
        $dateComponents["month"] = $rawDueDate["month"];
        $dateComponents["day"] = $rawDueDate["mday"];
        $dateComponents["hours"] = $rawDueDate["hours"];
        $dateComponents["minutes"] = $rawDueDate["minutes"];
        $dateComponents["seconds"] = $rawDueDate["seconds"];
        return $dateComponents;
    }
    public function getFutureDate(){
        $rawDueDate = getdate($this->furtureDate);
        $dateComponents = array();
        $dateComponents["year"] = $rawDueDate["year"];
        $dateComponents["month"] = $rawDueDate["month"];
        $dateComponents["day"] = $rawDueDate["mday"];
        $dateComponents["hours"] = $rawDueDate["hours"];
        $dateComponents["minutes"] = $rawDueDate["minutes"];
        $dateComponents["seconds"] = $rawDueDate["seconds"];
        return $dateComponents;
    }

    public function index()
    {
        //
        return view('admin.staff.leave.index');
    }

    public function show()
    {
        $get_staff_leave = Staff_Leave::orderBy('id', 'desc')->get();
        return view('admin.staff.leave.index')->with(['leaves_staff'=> $get_staff_leave]);
    }

    public function compute_leave($id){
//
        $db3 = DB::table('leavetbl')
            ->join('staff_works', 'leavetbl.staff_id', '=', 'staff_works.staff_id')
            ->join('users', 'leavetbl.staff_id', '=', 'users.id')
            ->select('leavetbl.staff_id','leavetbl.id', 'staff_works.status AS staff_status','staff_works.PromotedYear', 'users.fname','users.lname')
            ->where('leavetbl.id','=', $id)
            ->get();
        foreach ($db3 as $gets){
            $lecDate = date('Y',$gets->PromotedYear);
            $iterateDate = (date('Y') - $lecDate ) + 3;
            $this->futureCompute($gets->PromotedYear);
            $results = [];
            $dueYears = [];
            $maxResult = 0;
            $years = [];
            $TempRankId = $this->get_rank($gets->staff_id);

            $numberOfIterations = $iterateDate;

            for ($x = 0; $x<$numberOfIterations ; $x++){
                $m = $this->Calculate(3);
                if ($m == 1){ //would have been promoted
                    $dueYears[$x] = $this->getDueDate()["year"]; // potential promoted year updated
                    $TempRankId = $TempRankId+1;
                    $result = $this->compute($TempRankId);
                    if ($result > $maxResult){
                        $maxResult = $result;
                    }
                    $results[$x] = $results;
                    //echo $this->compute($TempRankId)." :: ".$result." :: ".$maxResult."<br/>";

                }else if ($m == 0){ //Would not have been promoted
                    $result = $this->compute_old_rank($gets->staff_id);
                    if ($result > $maxResult){
                        $maxResult = $result;
                    }
                    $results[$x] = $results;
                    //echo $this->compute($TempRankId)." :: ".$result." :: ".$maxResult."<br/>";
                }

                $years[$x] = $this->getFutureDate()["year"];
            }
            $control = 0;
            for ($y=0; $y<count($results); $y++){
                if($results[$y] == $maxResult){
                    $control = $y;
                    break;
                }
            }
            //$staff_details = staff_work::find($id);
            $recommended_year = $years[$control];
            return view('admin.staff.leave.compute')->with(['recommended_year'=>$recommended_year,'id'=>$gets->id,'staff_id'=>$gets->staff_id,'status'=>$db3]);

        }
    }

    function number_staff($num){
        $number = staff_work::where('status', '=', $num)
            ->where('status_leave', '!=',1)
            ->count();
        return $number;
    }

    function compute($rank_id){
        //calculations here, and return results
        $n = 10;
        $ga =    $this->number_staff(1); // number of graduate assistance
        $al =    $this->number_staff(2); // number of assistance lecturer;
        $lec1 =  $this->number_staff(3);  // number of lec 1
        $lec2 =  $this->number_staff(4);
        $sl =    $this->number_staff(5);
        $assoc = $this->number_staff(6);
        $prof =  $this->number_staff(7);
        if($rank_id > 7){
            // Even the guy's rank is greater than the prof or assoc, still compute for the last rank
            $z6 = ($n)/75;
            $c = $prof/$z6;
        }else{
            switch ($rank_id) {
                case 1:
                    $z1 = (9*$n)/300;
                    $c = $ga/$z1;
                    break;
                case 2:
                    $z2 = (9*$n)/300;
                    $c = $al/$z2;
                    break;
                case 3:
                    $z3 = (9*$n)/300;
                    $c = $lec1/$z3;
                    break;
                case 4:
                    $z4 = (9*$n)/300;
                    $c = $lec2/$z4;
                    break;
                case 5:
                    $z5 = (7*$n)/300;
                    $c = $sl/$z5;
                    break;
                case 6:
                    $z6 = ($n)/75;
                    $c = $assoc/$z6;
                    break;
                case 7:
                    $z6 = ($n)/75;
                    $c = $prof/$z6;
                    break;
            }
        }

        return  $c; //As default
    }

    public function get_rank($id){
        $compute = staff_work::where('staff_id', '=', $id)
            ->get(); // select staff with the id,
        $TempRankId = $compute[0]->status; // The current rank of the staff
        return $TempRankId; // get the staff rank here
    }


    public function compute_old_rank($staff_id){
        $n = 10;
        $ga =    $this->number_staff(1); // number of graduate assistance
        $al =    $this->number_staff(2); // number of assistance lecturer;
        $lec1 =  $this->number_staff(3);  // number of lec 1
        $lec2 =  $this->number_staff(4);
        $sl =    $this->number_staff(5);
        $assoc = $this->number_staff(6);
        $prof =  $this->number_staff(7);
        $TempRankId = $this->get_rank($staff_id); //staff rank is gotten here
        switch ($TempRankId) {
            case 1:
                $z1 = (9*$n)/300;
                $c = $ga/$z1;
                break;
            case 2:
                $z2 = (9*$n)/300;
                $c = $al/$z2;
                break;
            case 3:
                $z3 = (9*$n)/300;
                $c = $lec1/$z3;
                break;
            case 4:
                $z4 = (9*$n)/300;
                $c = $lec2/$z4;
                break;
            case 5:
                $z5 = (7*$n)/300;
                $c = $sl/$z5;
                break;
            case 6:
                $z6 = ($n)/75;
                $c = $assoc/$z6;
                break;
            case 7:
                $z6 = ($n)/75;
                $c = $prof/$z6;
                break;
        }
        return $c;
    }

    public function sendLeave(Request $request)
    {
        $update = Staff_Leave::where('id',$request->input('id'))
            ->where('staff_id',$request->input('staff_id'))
            ->update([
            'leave_recommended_yr' => $request->input('leave_recommended_yr'),
            'status'=>1,
            'leaveActualYear'=>$request->input('leaveActualYear')
        ]);
        $update2 = staff_work::where('staff_id',$request->input('staff_id'))
            ->update([
                'status_leave'=>1
            ]);
        if($update && $update2){
            return $this->response(321);
        }else{
            return $this->response(311);
        }

    }

    public function rejectLeave(Request $request){
        if($request->isMethod('post')){
            $update = Staff_Leave::where('staff_id',$request->staff_id)
                                    ->where('id',$request->id)
                                    ->update([
                'status' => 2, // Reject Leave Here
            ]);
            if($update){
                return $this->response(321);
            }
        }
        return $this->response(322);
    }


}
