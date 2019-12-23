<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Memo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AppController;

class StaffMemoController extends AppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('admin.staff.memo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getstaff($id)
    {
        $staff = User::where('dept_id','=',$id)->get();
        $snd = array();
        foreach ($staff as $staffs){
            $pp = array(
                "name" => $staffs->fname."--".$staffs->lname,
                "id"=>$staffs->id
            );
            array_push($snd, $pp);
        }
        return response()->json(array("result"=>$snd));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $memo = new Memo;
        $memo->staff_id = $request->input('staff_id');
        $memo->memo_title = $request->input('memo_title');
        $memo->memo_type = $request->input('memo_type');
        $memo->memo_body = $request->input('memo_body');
        $memo->sender = auth()->user('admin')->id;
        if($memo->save()){
            return $this->successResponse('success_msg', 'Memo Sent');
        }else{
            return $this->errorResponse('error_msg', 'Memo failed to send');
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
        $department = Department::orderBy('id', 'desc')->get();
        $memos = Memo::orderBy('id', 'desc')->get();
        return view('admin.staff.memo')->with(['dept'=> $department,'memos'=>$memos]);
    }

    public function view($id){
      $memo = Memo::find($id);
        return view('admin.staff.viewMemo')->with(['memo'=>$memo]);

    }

    public function shortstring($originalstr,$length){
        return $this->shortenstring($originalstr,$length);
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
