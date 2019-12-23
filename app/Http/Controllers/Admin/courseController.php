<?php

namespace App\Http\Controllers\Admin;

use App\assignCourse;
use App\Course;
use App\Department;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\DB;

class courseController extends AppController
{
    //
    function addCourse(){
        $dept = Department::orderBy('id', 'desc')->get();
        $course = Course::orderBy('id', 'desc')->get();
        return view('admin.staff.course.index')->with(['dept'=> $dept,'course'=> $course]);
    }

    public function store(Request $request)
    {
        $course = new Course;
        $course->courseCode = $request->courseCode;
        $course->courseName = $request->courseName;
        $course->credit_unit = $request->credit_unit;
        $course->semester = $request->semester;
        $course->dept_id = $request->dept_id;
        if($course->save()){
            return $this->successResponse('success_msg', 'Course successfully added');
        }else{
            return $this->errorResponse('error_msg', 'Course could not be added');
        }
    }

    public function edit($id){
        $course_id = Course::findOrFail($id);
        return $this->response($course_id);
    }


    public function updateCourse(Request $request)
    {
        $update = Course::where('id',$request->input('id'))
            ->update([
                'courseCode' => $request->input('courseCode'),
                'courseName'=>$request->input('courseName'),
                'credit_unit'=>$request->input('credit_unit'),
                'semester'=>$request->input('semester'),
                'dept_id'=>$request->input('dept_id'),
            ]);
        if($update){
            return $this->response(321);
        }else{
            return $this->response(311);
        }

    }

    public function salcIndex(){
        $dept = Department::orderBy('id', 'desc')->get();
        $assigned = DB::table('assigncourse')
            ->join('users', 'assigncourse.staff_id', '=', 'users.id')
            ->join('coursetbl', 'assigncourse.course_id', '=', 'coursetbl.id')
            ->select('assigncourse.staff_id','assigncourse.id', 'users.fname','users.lname', 'coursetbl.courseName','coursetbl.courseCode')
            ->orderBy('assigncourse.id', 'desc')
            ->get();
        return view('admin.staff.salc.index')->with(['assign'=>$assigned,'dept'=>$dept]);
    }

    public function getLecturer($id)
    {
        $lec = User::where('dept_id','=',$id)->get();
        $snd = array();
        foreach ($lec as $staffs){
            $pp = array(
                "name" => $staffs->fname."--".$staffs->lname,
                "id"=>$staffs->id
            );
            array_push($snd, $pp);
        }
        return response()->json(array("result"=>$snd));
    }

    public function getCourse($id)
    {
        $cus = Course::where('dept_id','=',$id)->get();
        $snd = array();
        foreach ($cus as $courses){
            $courseArray = array(
                "name" => $courses->coursecode."--".$courses->courseName,
                "id"=>$courses->id
            );
            array_push($snd, $courseArray);
        }
        return response()->json(array("result"=>$snd));
    }

    public function assignCourse(Request $request)
    {
        $check = assignCourse::where('staff_id','=',$request->staff_id)
                                ->where('dept_id','=',$request->dept_id)
                                ->where('course_id','=',$request->course_id)
                                ->get()->pluck('staff_id');
        if($check->count()){
            return $this->response(312);
        }else{
            $assign= new assignCourse;
            $assign->dept_id = $request->dept_id;
            $assign->staff_id = $request->staff_id;
            $assign->course_id = $request->course_id;
            $assign->clasSize = $request->classSize;
            if($assign->save()){
                return $this->response(321);
            }else{
                return $this->response(311);
            }
        }
    }


//    public function show()
//    {
//        $course = Course::orderBy('id', 'desc')->get();
//        return view('admin.staff.course.index')->with(['course'=> $course]);
//    }


}
