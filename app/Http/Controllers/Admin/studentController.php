<?php

namespace App\Http\Controllers\Admin;


use App\Department;
use App\Http\Controllers\AppController;
use App\Student;
use App\studentCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class studentController extends AppController
{
    //

    public function student_reg(){
        $dept = Department::orderBy('id', 'desc')->get();
        $student = Student::orderBy('id', 'desc')->get();
        return view('admin.staff.student.index')->with(['dept'=> $dept,'student'=>$student]);
    }

    public function store(Request $request)
    {
        $regCheck = Student::where('email','=',$request->regNo)
                            ->get()
                            ->pluck('email');
        if($regCheck->count()){
            return $this->errorResponse('exist_msg', 'Student Already Applied.');
        }else{
            $student = new Student;
            $student->email = $request->regNo;
            $student->password = Hash::make($request->regNo);
            $student->dept_id = $request->dept_id;
            if($student->save()){
                return $this->successResponse('success_msg', 'Student successfully added');
            }else{
                return $this->errorResponse('error_msg', 'Student could not be added');
            }
        }
    }

    public function addCourses($id){
        $studentsCourses = DB::table('coursetbl')
            ->join('students', 'coursetbl.dept_id', '=', 'students.dept_id')
            ->select('coursetbl.courseName','coursetbl.id AS courseID','students.*')
            ->where('students.id','=', $id)
            ->get();
               $studentCus = DB::table('student_course_tbl')
            ->join('students', 'student_course_tbl.student_id', '=', 'students.id')
            ->join('coursetbl', 'student_course_tbl.course_id', '=', 'coursetbl.id')
            ->select('student_course_tbl.*','coursetbl.id AS courseID','coursetbl.courseName')
            ->where('students.id','=', $id)
            ->get();
        return view('admin.staff.student.courses')->with(['studentc'=>$studentsCourses,'studentCus'=>$studentCus]);
    }

    // public function viewRegCourses($id){
      
    //           return view('admin.staff.student.courses')->with([]);
    // }

    public function storeCourses(Request $request){
        foreach ($request->coursesStudents as $cs) {
            $regCheck = StudentCourses::where('student_id','=',$request->stuId)
                ->where('course_id','=',$cs)
                ->get();
            if($regCheck->count()){
                return $this->errorResponse('exist_msg', 'Course(s) Already Applied.');
            }else{
                $saveNow = StudentCourses::create([
                    'student_id' => $request->stuId,
                    'course_id' => $cs,
                ]);
            }
        }
        if($saveNow){
            return $this->successResponse('success_msg', 'Course(s) successfully added');
        }else{
            return $this->errorResponse('error_msg', 'Course(s) could not be added');
        }
    }
}
