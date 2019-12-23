<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\AppController;

class DepartmentController extends AppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.department.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department;
        $department->fac_id = $request->input('fac_id');
        $department->dept_name = $request->input('dept_name');
        $department->dept_desc = $request->input('dept_desc');
        if($department->save()){
            return $this->successResponse('success_msg', 'Department successfully added');
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
        $fac = Faculty::orderBy('id', 'desc')->get();
        $dept = Department::orderBy('id', 'desc')->get();
        return view('admin.department.index',compact('fac','dept'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
