<?php

namespace App\Http\Controllers\Staff;

use App\Memo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StaffProfile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staffs.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function capraise()
    {
        //
        $a1 = DB::table('assigncourse')
            ->join('coursetbl', 'assigncourse.course_id', '=', 'coursetbl.id')
            ->join('appraisal','appraisal.course_id','coursetbl.id')
            ->select('assigncourse.clasSize','coursetbl.credit_unit')
//            ->join('assigncourse','appraisal.staff_id','=','assigncourse.staff_id')
//            ->join('coursetbl', 'appraisal.course_id', '=', 'coursetbl.id')
//            ->select('appraisal.totalScore','appraisal.course_id AS courseId','appraisal.staff_id AS lecID')
            ->where('assigncourse.staff_id',auth()->user('user')->id)
            ->get();
        return $a1;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $staff_id = auth()->user()->id;

        $memo = Memo::where('staff_id',$staff_id)->get();

       return view('staffs.memo')->with(['memos'=>$memo]);
    }

      public function viewMemo($id){
      $memo = Memo::find($id);
        return view('staffs.viewMemo')->with(['memo'=>$memo]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit()
//    {
//        $staff_id = auth()->user()->id;
//
//        $user = User::find($staff_id);
//
//        return view('staffs.memo')->with(['user'=>$user]);
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
