<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\AppController;
use App\Staff_Leave;

class StaffLeave extends AppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('staffs.leave.index');
    }

    public function store(Request $request)
    {

        $leavecheck = Staff_Leave::where('staff_id','=',auth()->user('user')->id)
                                ->where('status', '=', 0)
                                ->get()->pluck('staff_id');
        if($leavecheck->count()){
            return $this->errorResponse('exist_msg', 'Leave Already Applied. Please wait for Response');
        }else{
            $StaffL = new Staff_Leave;
            $StaffL->staff_id = auth()->user('user')->id;
            $StaffL->leave_type = $request->input('leave_type');
            $StaffL->leave_applied_year = $request->input('leave_applied_year');

            $StaffL->leave_start_yr = mktime(0, 0, 0, date("m"),   date("d"),  $request->input('leave_start_yr'));
            $StaffL->leave_end_yr = $request->input('leave_end_yr');
            $StaffL->leave_reasons = $request->input('leave_reasons');
            $StaffL->status = 0;
            if($StaffL->save()){
                return $this->successResponse('success_msg', 'Leave Sent');
            }else{
                return $this->errorResponse('error_msg', 'Leave failed to send');
            }
        }


    }

    public function show()
    {
        $get_staff_leave = Staff_Leave::where('staff_id','=',auth()->user('user')->id)
                                        ->orderBy('id', 'desc')->get();
        return view('staffs.leave.index')->with(['leave_staff'=> $get_staff_leave]);

    }



    public function count_rejected_leave(){
        $counted = Staff_Leave::where('staff_id','=',auth()->user('user')->id)
            ->where('status',2)
            ->count();
        return $counted;
    }
    public function count_accepted_leave(){
        $counted = Staff_Leave::where('staff_id','=',auth()->user('user')->id)
            ->where('status',1)
            ->count();
        return $counted;
    }
    public function count_pending_leave(){
        $counted = Staff_Leave::where('staff_id','=',auth()->user('user')->id)
            ->where('status',0)
            ->count();
        return $counted;
    }

    public function count_total_leave(){
        $counted = $this->count_rejected_leave() + $this->count_accepted_leave() + $this->count_pending_leave();
        return $counted;
    }


}
