<?php

namespace App\Http\Controllers\Staff;

use App\Department;
use App\staff_academic;
use App\staff_work;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\enrollment_request;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Storage;

class StaffEnrollment extends AppController
{
    public function index()
    {
        $staff = User::where('id',auth()->user('user')->id)->orderBy('id', 'desc')->firstOrFail();
        return view('staffs.enroll')->with(['staff'=>$staff]);
    }

    public function  work($request){
        $work = staff_work::where('staff_id','=',auth()->user('user')->id)->get()->pluck('staff_id');
        if($work->count()){
            $year = $request->promotion_yr;
            $yr = mktime(0,0, 0, 1, 1, $year);
            $update = staff_work::where('staff_id',auth()->user('user')->id)->update([
                'status' => $request->first_appointment,
                'rank'=>$request->level_rank,
                'date_assumption_duty'=>$request->data_assump,
                'step'=>$request->step,
                'date_confirm'=>$request->confirm_date,
                'status_first_appoint'=>$request->status_first_appointment,
                'PromotedYear'=>$yr
            ]);
            if($update){
                return $this->response(321);
            }
        }else{
            $year = $request->promotion_yr;
            $yr = mktime(0,0, 0, 1, 1, $year);
            $work_save = new staff_work();
            $work_save->staff_id = auth()->user('user')->id;
            $work_save->status = $request->first_appointment;
            $work_save->rank = $request->level_rank;
            $work_save->date_assumption_duty = $request->data_assump;
            $work_save->date_ractification = $request->date_racty;
            $work_save->step = $request->step;
            $work_save->date_confirm = $request->confirm_date;
            $work_save->status_first_appoint  = $request->status_first_appointment;
            $work_save->PromotedYear  = $yr;
            if($work_save->save()){
                return $this->response(322);
            }else{
                return $this->response(323);
            }
        }
    }

    public function academic($file_doc,$request){
        $academic = staff_academic::where('staff_id','=',auth()->user('user')->id)->get()->pluck('staff_id');
        $doc_name = time().$file_doc->getClientOriginalName();
        $file_moved = $file_doc->move('doc_images',$doc_name);

        if($academic->count()){
            $update = staff_academic::where('staff_id',auth()->user('user')->id)->update([
                'degree' => $request->degree,
                'school_attended'=>$request->school_attend,
                'starting_date'=>$request->start_degree_date,
                'ending_date'=>$request->end_degree_date,
                'field_study'=>$request->field_study,
                'specialization'=>$request->specialty,
                'degree_img_path'=>$doc_name
            ]);
                if($update){
                    return $this->work($request);
                }else{
                    return $this->response(325);
                }
        }else{
            $academic_save = new staff_academic();
            $academic_save->staff_id = auth()->user('user')->id;
            $academic_save->degree = $request->degree;
            $academic_save->school_attended = $request->school_attend;
            $academic_save->starting_date = $request->start_degree_date;
            $academic_save->ending_date = $request->end_degree_date;
            $academic_save->field_study = $request->field_study;
            $academic_save->specialization = $request->specialty;
            $academic_save->degree_img_path = $doc_name;
            if($file_moved){
                if($academic_save->save()){
                    return $this->work($request);
                }else{
                    return $this->response(326);
                }
            }else{
                return $this->response(327);
            }
        }
    }
    public function highlight(Request $request){
        $data = $request->getimage;
        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);
        $name = date('YmdHis');
        $filename="images/".$name.".jpg";
        $fileC = file_put_contents($filename, $data);
        $file_doc = $request->file('img');
        if ($fileC){
            if($request->hasFile('img')){
                $enroll =  User::find(auth()->user('user')->id);
                $enroll->img_path = $filename;
                $enroll->age = $request->age;
                $enroll->phone = $request->phone;
                $enroll->marital_status = $request->marital_status;
                $enroll->gender = $request->gender;
                $enroll->nationality = 'NIGERIA';
                if($enroll->save()){
                    return $this->academic($file_doc,$request);
                }else{
                    return $this->response(328);
                }
            }else{
                return $this->response(311);
            }
        }else{
            return $this->response(329);
        }
    }

}
