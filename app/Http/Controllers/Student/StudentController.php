<?php

namespace App\Http\Controllers\Student;

use App\assignCourse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }
    public function index()
    {
        $acourse = DB::table('student_course_tbl')
            ->join('coursetbl', 'student_course_tbl.course_id', '=', 'coursetbl.id')
            ->select('student_course_tbl.student_id','student_course_tbl.course_id AS studentCID', 'coursetbl.id','coursetbl.courseName','coursetbl.courseCode')
            ->where('student_course_tbl.student_id',auth()->user('student')->id)
            ->orderBy('student_course_tbl.id', 'desc')
            ->get();
        return view('student.index')->with(['course'=> $acourse]);
    }

    public function getLecturer($id){
        $a12course = DB::table('student_course_tbl')
            ->join('assigncourse','student_course_tbl.course_id','=','assigncourse.course_id')
            ->join('users', 'assigncourse.staff_id', '=', 'users.id')
            ->join('coursetbl', 'assigncourse.course_id', '=', 'coursetbl.id')
            ->select('coursetbl.courseName','users.fname','users.lname','assigncourse.course_id AS cusID','users.id AS usID')
            ->where('assigncourse.course_id',$id)
            ->get();
            $snd = array();
            foreach ($a12course  as $curses ){
                $pp = array(
                    "cName" => $curses->courseName,
                    "lName"=>$curses->fname." ".$curses->lname,
                    "cId"=>$curses->cusID,
                    "uID"=>$curses->usID
                );
                array_push($snd, $pp);
            }
            return response()->json(array("result"=>$snd));
    }
}
