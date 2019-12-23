<?php

namespace App\Http\Controllers\Student;

use App\Appraisal;
use Illuminate\Http\Request;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\DB;

class StudentAppraisalController extends AppController
{
    //
    public function __construct()
    {
        $this->middleware('auth:student');
    }
    public function index($id,$idC){
        $a1 = DB::table('assigncourse')
            ->join('student_course_tbl','student_course_tbl.course_id','=','assigncourse.course_id')
            ->join('users', 'assigncourse.staff_id', '=', 'users.id')
            ->join('coursetbl', 'assigncourse.course_id', '=', 'coursetbl.id')
            ->select('coursetbl.courseName','users.fname','users.lname','assigncourse.course_id AS cusrID','assigncourse.staff_id AS usrID')
            ->where('assigncourse.staff_id',$id)
            ->where('assigncourse.course_id',$idC)
            ->get();
        foreach ($a1 as $v ){
            return view('student.questions')->with(['cusID'=>$v->cusrID,'uId'=>$v->usrID,'sID'=>auth()->user('student')->id]);
        }
    }

    public function computeAppraisal(Request $request){
        $check = Appraisal::where('student_id',auth()->user('student')->id)
                            ->where('staff_id',$request->lecturerID)
                            ->where('course_id',$request->courseID)
                            ->get()->pluck('id');
            if($check->count()){
                return $this->response(333);
            }else{
                $apraise = new Appraisal();
                $apraise->course_id = $request->courseID;
                $apraise->staff_id = $request->lecturerID;
                $apraise->student_id = $request->studentID;
                $apraise->totalScore = $request->totalScore;
                if($apraise->save()){
                    return $this->response(321);
                }else{
                    return $this->response(332);
                }
            }

    }
}
