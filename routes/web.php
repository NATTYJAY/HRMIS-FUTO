<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/student', 'Admin\studentController@index')->name('student.dashboard');
    Route::get('student', 'Auth\AdminStudentController@showLoginForm')->name('admin.student');
    Route::post('student', 'Auth\AdminStudentController@login')->name('admin.student.submit');
    /*
     * Links */
    Route::get('/faculty', 'Admin\FacultyController@index');
    Route::post('/save', 'Admin\FacultyController@store')->name('admin.save');
    Route::get('/faculty', 'Admin\FacultyController@show');

    Route::get('department', 'Admin\DepartmentController@index');
    Route::post('/savedept', 'Admin\DepartmentController@store')->name('admin.depart.save');
    Route::get('/department', 'Admin\DepartmentController@show');

    Route::get('staff', 'Admin\StaffController@index');
    Route::post('/savestaff', 'Admin\StaffController@store')->name('admin.staff.save');
    Route::get('staff', 'Admin\StaffController@show');
    Route::get('staff/profile/{id}', 'Admin\StaffController@edit');
    Route::post('staff/download/{id}', 'Admin\StaffController@download')->name('file-download');

    Route::get('memo', 'Admin\StaffMemoController@index');
    Route::get('/memo', 'Admin\StaffMemoController@show');
    Route::post('/getstaffs/{id}', 'Admin\StaffMemoController@getstaff')->name('staffing');
    Route::post('/savememo', 'Admin\StaffMemoController@store')->name('admin.memo.save');
    Route::get('/viewMemo/{id}', 'Admin\StaffMemoController@view');
    //Route::get('/memo', 'Admin\StaffMemoController@display');viewMemo
    Route::get('/staffleave', 'Admin\StaffLeaveController@index');
    Route::get('/staffleave', 'Admin\StaffLeaveController@show');
    Route::get('/staffcompute/{id}', 'Admin\StaffLeaveController@compute_leave');
    Route::post('/storeLeave','Admin\StaffLeaveController@sendLeave');
    Route::post('/reject', 'Admin\StaffLeaveController@rejectLeave');
    //Route::get('/courses1', 'Admin\courseController@showDept');

    Route::get('/courses', 'Admin\courseController@addCourse');
    Route::post('/savecourse', 'Admin\courseController@store')->name('admin.course.save');

    Route::get('/edit/{id}','Admin\courseController@edit');

    Route::post('/updateCourse','Admin\courseController@updateCourse');
    Route::get('/salc', 'Admin\courseController@salcIndex');

    Route::get('/student', 'Admin\studentController@student_reg');
    Route::post('/saveStudent', 'Admin\studentController@store')->name('admin.student.save');
    Route::get('/courses/{id}', 'Admin\studentController@addCourses');
    Route::post('/saveStudentCourses', 'Admin\studentController@storeCourses')->name('admin.studentCourses.save');
    // Route::get('/courses/{id}', 'Admin\studentController@viewRegCourses');
    

    //Route::get('/salc', 'Admin\courseController@show');

    Route::post('/assignCourse','Admin\courseController@assignCourse');
    Route::post('/getLecturer/{id}', 'Admin\courseController@getLecturer');
    Route::post('/getCourses/{id}', 'Admin\courseController@getCourse');

//    Route::get('/courses', 'Admin\courseController@show');
    //Route::get('/staffcompute/{id}', 'Admin\StaffLeaveController@check');

    //Route::get('/memo', 'Admin\StaffMemoController@getstaff');

});

Route::prefix('student')->group(function () {
    Route::get('/', 'Student\StudentController@index')->name('student.dashboard');
    Route::get('login', 'Auth\StudentController@showLoginForm')->name('admin.student');
    Route::post('login', 'Auth\StudentController@login')->name('admin.student.submit');
    Route::post('/getLecturerC/{id}', 'Student\StudentController@getLecturer');
    Route::get('appraisal/{id}/{idr}', 'Student\StudentAppraisalController@index');

    Route::post('/sCompute', 'Student\StudentAppraisalController@computeAppraisal');

});

Route::get('/', 'HomeController@index');
Route::prefix('staff')->group(function () {
    Route::get('enroll', 'Staff\StaffEnrollment@index');
    Route::post('display', 'Staff\StaffEnrollment@highlight');

    Route::get('profile', 'Staff\StaffProfile@index');
    Route::get('leave', 'Staff\StaffLeave@index');
    Route::post('staffleave', 'Staff\StaffLeave@store')->name('staff.leave.save');
    Route::get('leave', 'Staff\StaffLeave@show');
    Route::get('memos', 'Staff\StaffProfile@show');

    Route::get('/viewMemo/{id}', 'Staff\StaffProfile@viewMemo');
//    Route::get('memos', 'Staff\StaffProfile@edit');


    Route::get('cappraisal', 'Staff\StaffProfile@capraise');



//    Route::get('enroll', 'Staff\StaffEnrollment@show');
});
