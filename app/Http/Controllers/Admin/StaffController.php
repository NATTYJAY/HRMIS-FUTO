<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\staff_academic;
use App\staff_work;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AppController;

class StaffController extends AppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$dept = $user->dept;
        return view('admin.staff.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

    public function download($id) {
        $doc_path = staff_academic::where('staff_id',$id)
                    ->get()
                    ->pluck('degree_img_path');
        $file = public_path().'/doc_images/'.$doc_path[0];
        $name = basename($file);
        return response()->download($file, $name);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new User;
        $staff->dept_id = $request->input('dept_id');
        $staff->fname = $request->input('fname');
        $staff->lname = $request->input('lname');
        $staff->email = $request->input('email');
        $staff['password'] = bcrypt('123456');
        $staff['staff_idNo'] = $this->getRandomUserName();
        if($staff->save()){
            return $this->successResponse('success_msg',  strtoupper($request->input('fname'))." ".strtoupper($request->input('lname'))."  ". 'successfully added');
        }else{
            return $this->errorResponse('error_msg', 'Department could not be added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dept = Department::orderBy('id', 'desc')->get();
        $staff = User::orderBy('id', 'desc')->get();


        return view('admin.staff.index')->with(['dept'=> $dept,'staff'=>$staff]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = User::where('id',$id)->get();
        $academic = staff_academic::where('staff_id',$id)->get();
        $work = staff_work::where('staff_id',$id)->get();
        return view('admin.staff.profile.index')->with(['staff'=>$staff,'academy'=>$academic,'work'=>$work]);
    }

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
