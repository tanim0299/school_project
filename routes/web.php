<?php

use Illuminate\Support\Facades\Route;

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

// mujibcorner
Route::get('/mujib_corner', 'MujibConrerController@index');
Route::get('/time_line', 'MujibConrerController@time_line');
Route::get('/graphic_novel', 'MujibConrerController@graphic_novel');
Route::get('/recognition', 'MujibConrerController@recognition');
Route::get('/photo_archive', 'MujibConrerController@photo_archive');
Route::get('/speeches', 'MujibConrerController@speeches');


///principal_intro

Route::get('/addprincipalintro', 'admin\WebsiteController@addprincipalintro');
Route::post('/principalintro_store/{id}', 'admin\WebsiteController@principalintro_store');
Route::get('/addviceprincipalintro', 'admin\WebsiteController@addviceprincipalintro');
Route::post('/viceprincipalintro_store/{id}', 'admin\WebsiteController@viceprincipalintro_store');



Route::get('/', 'FrontendContoller@index');
Route::get('/Notices', 'FrontendContoller@Notices');
Route::get('/notice-view/{id}', 'FrontendContoller@noticeview');
Route::get('/message-from-head', 'FrontendContoller@Principlemessage');
Route::get('/vice-principal-message', 'FrontendContoller@vicePrinciplemessage');
Route::get('/About_institute', 'FrontendContoller@About_institute');
Route::get('/Mission_vission', 'FrontendContoller@Mission_vission');
Route::get('/History', 'FrontendContoller@History');
Route::get('/Citizen_charter', 'FrontendContoller@Citizen_charter');
Route::get('/Student_info_chart', 'FrontendContoller@Student_info_chart');
Route::get('/view_studentinfochart/{id}', 'FrontendContoller@view_studentinfochart');
Route::get('/Infrastructure', 'FrontendContoller@Infrastructure');
Route::get('/Yearly_working_plan', 'FrontendContoller@Yearly_working_plan');
Route::get('/view_yearlyworkingplan/{id}', 'FrontendContoller@view_yearlyworkingplan');
Route::get('/head_intro', 'FrontendContoller@head_intro');
Route::get('/vice_principal_intro', 'FrontendContoller@vice_principal_intro');



Route::get('/createadmin', 'HomeController@createadmin');
Route::post('/insertadmin', 'HomeController@insertadmin');
Route::get('/viewadmin', 'HomeController@viewadmin');
Route::get('/deleteadmin/{id}', 'HomeController@deleteadmin');
Route::get('/editadmin/{id}', 'HomeController@editadmin');
Route::post('/updateadmin/{id}', 'HomeController@updateadmin');




Route::get('/Contact_us', 'FrontendContoller@Contact_us');
Route::get('/Founder_Message', 'FrontendContoller@Founder_Message');
Route::get('/President_Message', 'FrontendContoller@President_Message');

Route::get('/Events', 'FrontendContoller@Events');
Route::get('/Events-view/{id}', 'FrontendContoller@Eventsview');

Route::get('/Guidline_teacher_staff', 'FrontendContoller@Guidline_teacher_staff');
Route::get('/Guidline-view/{id}', 'FrontendContoller@Guidlineview');


Route::get('/Library_Info', 'FrontendContoller@Library_Info');
Route::get('/Hostel_Info', 'FrontendContoller@Hostel_Info');
Route::get('/Photo_gallery', 'FrontendContoller@Photo_gallery');
Route::get('/Video_gallery', 'FrontendContoller@Video_gallery');

Route::get('/Teacher_info', 'FrontendContoller@Teacher_info');
Route::get('/Ex_Teacher_info', 'FrontendContoller@Ex_Teacher_info');
Route::get('/View_teacherinfo/{id}', 'FrontendContoller@View_teacherinfo');

Route::get('/Teacher_infos/{id}', 'FrontendContoller@Teacher_infos');


Route::get('/Staff_info', 'FrontendContoller@Staff_info');
Route::get('/Ex_Staff_info', 'FrontendContoller@Ex_Staff_info');
Route::get('/View_Staff_info/{id}', 'FrontendContoller@View_Staff_info');


Route::get('/Managing_comittee', 'FrontendContoller@Managing_comittee');
Route::get('/View_member/{id}', 'FrontendContoller@View_member');

Route::get('/Chairman_list', 'FrontendContoller@Chairman_list');
Route::get('/Principle_list', 'FrontendContoller@Principle_list');
Route::get('/Donars_list', 'FrontendContoller@Donars_list');
Route::get('/Ex_member_list', 'FrontendContoller@Ex_member_list');


Route::get('/Rules_regulation', 'FrontendContoller@Rules_regulation');
Route::get('/Academic_Calender', 'FrontendContoller@Academic_Calender');
Route::get('/Class_routine', 'FrontendContoller@Class_routine');
Route::get('/Online_Classroutine', 'FrontendContoller@Online_Classroutine');
Route::get('/Book_list', 'FrontendContoller@Book_list');
Route::get('/Uniform', 'FrontendContoller@Uniform');
Route::get('/Fees', 'FrontendContoller@Fees');
Route::get('/Holiday_list', 'FrontendContoller@Holiday_list');

Route::get('/Prospects', 'FrontendContoller@Prospects');
Route::get('/view_prospects/{id}', 'FrontendContoller@view_prospects');

Route::get('/Admission_Rules', 'FrontendContoller@Admission_Rules');
Route::get('/view_Admission_Rules/{id}', 'FrontendContoller@view_Admission_Rules');

Route::get('/Admission_Procedure', 'FrontendContoller@Admission_Procedure');
Route::get('/view_Admission_Procedure/{id}', 'FrontendContoller@view_Admission_Procedure');

Route::get('/Admission_Result', 'FrontendContoller@Admission_Result');
Route::get('/Admission_Question', 'FrontendContoller@Admission_Question');

Route::get('/Transfer_Procedure', 'FrontendContoller@Transfer_Procedure');
Route::get('/view_Transfer_Procedure/{id}', 'FrontendContoller@view_Transfer_Procedure');

Route::get('/Exam_rules', 'FrontendContoller@Exam_rules');
Route::get('/Exam_routine', 'FrontendContoller@Exam_routine');
Route::get('/Syllabas', 'FrontendContoller@Syllabas');
Route::get('/Lesson_plan', 'FrontendContoller@Lesson_plan');
Route::get('/Suggestion', 'FrontendContoller@Suggestion');
Route::get('/Magazine', 'FrontendContoller@Magazine');

Route::get('/Sports', 'FrontendContoller@Sports');
Route::get('/view_Sports/{id}', 'FrontendContoller@view_Sports');

Route::get('/Cultural_Activities', 'FrontendContoller@Cultural_Activities');
Route::get('/view_Cultural_Activities/{id}', 'FrontendContoller@view_Cultural_Activities');

Route::get('/Scouts', 'FrontendContoller@Scouts');
Route::get('/view_Scouts/{id}', 'FrontendContoller@view_Scouts');

Route::get('/Girls_Guide', 'FrontendContoller@Girls_Guide');

Route::get('/BNCC', 'FrontendContoller@BNCC');
Route::get('/view_BNCC/{id}', 'FrontendContoller@view_BNCC');


Route::get('/Red_Crescent', 'FrontendContoller@Red_Crescent');
Route::get('/view_Red_Crescent/{id}', 'FrontendContoller@view_Red_Crescent');


Route::get('/Student_Cafinet', 'FrontendContoller@Student_Cafinet');
Route::get('/view_Student_Cafinet/{id}', 'FrontendContoller@view_Student_Cafinet');


Route::get('/Debate', 'FrontendContoller@Debate');
Route::get('/view_Debate/{id}', 'FrontendContoller@view_Debate');



Route::get('/Language_Club', 'FrontendContoller@Language_Club');
Route::get('/view_Language_Club/{id}', 'FrontendContoller@view_Language_Club');


Route::get('/Study_Tour', 'FrontendContoller@Study_Tour');
Route::get('/view_Study_Tour/{id}', 'FrontendContoller@view_Study_Tour');


Route::get('/Science_Fair', 'FrontendContoller@Science_Fair');
Route::get('/view_Science_Fair/{id}', 'FrontendContoller@view_Science_Fair');


Route::get('/Computer_Club', 'FrontendContoller@Computer_Club');
Route::get('/view_Computer_Club/{id}', 'FrontendContoller@view_Computer_Club');




Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');


// Website Info.


Route::get('/addcontact', 'admin\WebsiteController@addcontact');
Route::get('/getcontact', 'admin\WebsiteController@getcontact');
Route::post('/contactupdate/{id}', 'admin\WebsiteController@contactupdate');


Route::get('/addmission_vision', 'admin\WebsiteController@addmission_vision');
Route::get('/getmission_vision', 'admin\WebsiteController@getmission_vision');
Route::post('/mission_visionupdate/{id}', 'admin\WebsiteController@mission_visionupdate');


Route::get('/addhistory', 'admin\WebsiteController@addhistory');
Route::get('/gethistory', 'admin\WebsiteController@gethistory');
Route::post('/historyupdate/{id}', 'admin\WebsiteController@historyupdate');


Route::get('/addabout', 'admin\WebsiteController@addabout');
Route::post('/aboutupdate/{id}', 'admin\WebsiteController@aboutupdate');


Route::get('/addlibraryinfo', 'admin\WebsiteController@addlibraryinfo');
Route::get('/getlibraryinfo', 'admin\WebsiteController@getlibraryinfo');
Route::post('/libraryinfoupdate/{id}', 'admin\WebsiteController@libraryinfoupdate');



Route::get('/addhostelinfo', 'admin\WebsiteController@addhostelinfo');
Route::get('/gethostelinfo', 'admin\WebsiteController@gethostelinfo');
Route::post('/hostelinfoupdate/{id}', 'admin\WebsiteController@hostelinfoupdate');



Route::get('/addinstituteinfo', 'admin\WebsiteController@addinstituteinfo');
Route::get('/getinstituteinfo', 'admin\WebsiteController@getinstituteinfo');
Route::post('/instituteinfoupdate/{id}', 'admin\WebsiteController@instituteinfoupdate');


Route::get('/adduseful_link', 'admin\WebsiteController@adduseful_link');
Route::post('/insertusefullink', 'admin\WebsiteController@insertusefullink');
Route::get('/deleteusefullink/{id}', 'admin\WebsiteController@deleteusefullink');
Route::get('/editusefullink/{id}', 'admin\WebsiteController@editusefullink');
Route::post('/usefullinkupdate/{id}', 'admin\WebsiteController@usefullinkupdate');


Route::get('/addcitizencharter', 'admin\WebsiteController@addcitizencharter');
Route::post('/citizencharterupdate/{id}', 'admin\WebsiteController@citizencharterupdate');


Route::get('/addstudentinfochart', 'admin\WebsiteController@addstudentinfochart');
Route::post('/insertstudentinfochart', 'admin\WebsiteController@insertstudentinfochart');
Route::get('/deletestudentinfo/{id}', 'admin\WebsiteController@deletestudentinfo');

Route::get('/addinfrastructure', 'admin\WebsiteController@addinfrastructure');
Route::get('/getinfrastructure', 'admin\WebsiteController@getinfrastructure');
Route::post('/infrastructureupdate/{id}', 'admin\WebsiteController@infrastructureupdate');

Route::get('/addyearlyworkingplan', 'admin\WebsiteController@addyearlyworkingplan');
Route::post('/insertyearlyworkingplan', 'admin\WebsiteController@insertyearlyworkingplan');
Route::get('/deleteyearlyworkingplan/{id}', 'admin\WebsiteController@deleteyearlyworkingplan');


Route::get('/addlistmember', 'admin\WebsiteController@addlistmember');
Route::post('/insert_list', 'admin\WebsiteController@insert_list');
Route::get('/deletetmember/{id}', 'admin\WebsiteController@deletetmember');
Route::get('/viewlistmember', 'admin\WebsiteController@viewlistmember');
Route::get('/edit_member/{id}', 'admin\WebsiteController@edit_member');
Route::post('/update_list/{id}', 'admin\WebsiteController@update_list');





// Photo Gallery

Route::get('/addphoto_gallery', 'admin\WebsiteController@addphoto_gallery');
Route::post('/insertphoto_gallery', 'admin\WebsiteController@insertphoto_gallery');
Route::get('/deletephotogallery/{id}', 'admin\WebsiteController@deletephotogallery');
Route::get('/editphotogallery/{id}', 'admin\WebsiteController@editphotogallery');
Route::post('/updatephoto_gallery/{id}', 'admin\WebsiteController@updatephoto_gallery');



// Video Gallery

Route::get('/addvideo_gallery', 'admin\WebsiteController@addvideo_gallery');
Route::get('/getvideo_gallery', 'admin\WebsiteController@getvideo_gallery');
Route::post('/insertvideo_gallery', 'admin\WebsiteController@insertvideo_gallery');
Route::get('/deletevideo_gallery/{id}', 'admin\WebsiteController@deletevideo_gallery');
Route::get('/editvideogallery/{id}', 'admin\WebsiteController@editvideogallery');
Route::post('/videogalleryupdate/{id}', 'admin\WebsiteController@videogalleryupdate');


// Message

Route::get('/addprinciple_message', 'admin\WebsiteController@addprinciple_message');
Route::post('/principle_messageupdate/{id}', 'admin\WebsiteController@principle_messageupdate');

Route::get('/addviceprinciple_message', 'admin\WebsiteController@addviceprinciple_message');
Route::post('/viceprinciple_messageupdate/{id}', 'admin\WebsiteController@viceprinciple_messageupdate');

Route::get('/addfounder_message', 'admin\WebsiteController@addfounder_message');
Route::post('/founder_messageupdate/{id}', 'admin\WebsiteController@founder_messageupdate');

Route::get('/addpresidant_message', 'admin\WebsiteController@addpresidant_message');
Route::post('/presidant_messageupdate/{id}', 'admin\WebsiteController@presidant_messageupdate');


// Department

Route::get('/adddepartment', 'admin\WebsiteController@adddepartment');
Route::post('/insertdepartment', 'admin\WebsiteController@insertdepartment');
Route::get('/deletedepartment/{id}', 'admin\WebsiteController@deletedepartment');
Route::get('/editdepartment/{id}', 'admin\WebsiteController@editdepartment');
Route::post('/departmentupdate/{id}', 'admin\WebsiteController@departmentupdate');







// Class

Route::get('/add_class', 'admin\WebsiteController@add_class');
Route::post('/insertclass', 'admin\WebsiteController@insertclass');
Route::get('/deleteclass/{id}', 'admin\WebsiteController@deleteclass');
Route::get('/editclass/{id}', 'admin\WebsiteController@editclass');
Route::post('/classupdate/{id}', 'admin\WebsiteController@classupdate');


// Group

Route::get('/add_group', 'admin\WebsiteController@add_group');
Route::post('/insertgroup', 'admin\WebsiteController@insertgroup');
Route::get('/deletegroup/{id}', 'admin\WebsiteController@deletegroup');
Route::get('/editgroup/{id}', 'admin\WebsiteController@editgroup');
Route::post('/groupupdate/{id}', 'admin\WebsiteController@groupupdate');


// Section

Route::get('/add_section', 'admin\WebsiteController@add_section');
Route::post('/insertsection', 'admin\WebsiteController@insertsection');
Route::get('/deletesection/{id}', 'admin\WebsiteController@deletesection');
Route::get('/get/class/{class_id}', 'admin\WebsiteController@getclass');
Route::get('/editsection/{id}', 'admin\WebsiteController@editsection');
Route::post('/sectionupdate/{id}', 'admin\WebsiteController@sectionupdate');



// Notice

Route::get('/addnotice', 'admin\NoticeEventController@addnotice');
Route::post('/insertnotice', 'admin\NoticeEventController@insertnotice');
Route::get('/view_notice', 'admin\NoticeEventController@view_notice');
Route::get('/deletenotice/{id}', 'admin\NoticeEventController@deletenotice');
Route::get('/edit_notice/{id}', 'admin\NoticeEventController@edit_notice');
Route::post('/updatenotice/{id}', 'admin\NoticeEventController@updatenotice');


// Event


Route::get('/addevent', 'admin\NoticeEventController@addevent');
Route::post('/insertevent', 'admin\NoticeEventController@insertevent');
Route::get('/view_event', 'admin\NoticeEventController@view_event');
Route::get('/deleteevent/{id}', 'admin\NoticeEventController@deleteevent');
Route::get('/edit_event/{id}', 'admin\NoticeEventController@edit_event');
Route::post('/updateevent/{id}', 'admin\NoticeEventController@updateevent');


// Guidline

Route::get('/addguidline', 'admin\NoticeEventController@addguidline');
Route::post('/insertguidline', 'admin\NoticeEventController@insertguidline');
Route::get('/view_guidline', 'admin\NoticeEventController@view_guidline');
Route::get('/deleteguidline/{id}', 'admin\NoticeEventController@deleteguidline');
Route::get('/edit_guidline/{id}', 'admin\NoticeEventController@edit_guidline');
Route::post('/updateguidline/{id}', 'admin\NoticeEventController@updateguidline');


// Teacher Staff

Route::get('/teacher_staff', 'admin\TeacherstaffController@teacher_staff');
Route::post('/insert_teacherstaff', 'admin\TeacherstaffController@insert_teacherstaff');
Route::get('/view_teacher_staff', 'admin\TeacherstaffController@view_teacher_staff');
Route::get('/deleteteacher_staff/{id}', 'admin\TeacherstaffController@deleteteacher_staff');
Route::get('/edit_teacherstaff/{id}', 'admin\TeacherstaffController@edit_teacherstaff');
Route::post('/update_teacherstaff/{id}', 'admin\TeacherstaffController@update_teacherstaff');
Route::get('/view_teacherstaff/{id}', 'admin\TeacherstaffController@view_teacherstaff');



// Settings


Route::get('/settings', 'admin\WebsiteController@settings');
Route::post('/updatesetting/{id}', 'admin\WebsiteController@updatesetting');




// Academic

Route::get('/addruleregulation', 'admin\WebsiteController@addruleregulation');
Route::get('/getrulesregulation', 'admin\WebsiteController@getrulesregulation');
Route::post('/updateruleregulation/{id}', 'admin\WebsiteController@updateruleregulation');

Route::get('/addacademiccalender', 'admin\WebsiteController@addacademiccalender');
Route::post('/insertacademiccalender', 'admin\WebsiteController@insertacademiccalender');
Route::get('/view_academiccalender', 'admin\WebsiteController@view_academiccalender');
Route::get('/deleteacademiccalender/{id}', 'admin\WebsiteController@deleteacademiccalender');
Route::get('/edit_academiccalender/{id}', 'admin\WebsiteController@edit_academiccalender');
Route::post('/updateacademiccalender/{id}', 'admin\WebsiteController@updateacademiccalender');

Route::get('/addclassroutine', 'admin\WebsiteController@addclassroutine');
Route::post('/insertclassroutine', 'admin\WebsiteController@insertclassroutine');
Route::get('/view_classroutine', 'admin\WebsiteController@view_classroutine');
Route::get('/deleteclassroutine/{id}', 'admin\WebsiteController@deleteclassroutine');
Route::get('/edit_classroutine/{id}', 'admin\WebsiteController@edit_classroutine');
Route::post('/updateclassroutine/{id}', 'admin\WebsiteController@updateclassroutine');


Route::get('/addonlineclassroutine', 'admin\WebsiteController@addonlineclassroutine');
Route::post('/insertonlineclassroutine', 'admin\WebsiteController@insertonlineclassroutine');
Route::get('/view_onlineclassroutine', 'admin\WebsiteController@view_onlineclassroutine');
Route::get('/deleteonlineclassroutine/{id}', 'admin\WebsiteController@deleteonlineclassroutine');
Route::get('/edit_onlineclassroutine/{id}', 'admin\WebsiteController@edit_onlineclassroutine');
Route::post('/updateonlineclassroutine/{id}', 'admin\WebsiteController@updateonlineclassroutine');


Route::get('/addbooklist', 'admin\WebsiteController@addbooklist');
Route::post('/insertbooklist', 'admin\WebsiteController@insertbooklist');
Route::get('/view_booklist', 'admin\WebsiteController@view_booklist');
Route::get('/deletebooklist/{id}', 'admin\WebsiteController@deletebooklist');
Route::get('/edit_booklist/{id}', 'admin\WebsiteController@edit_booklist');
Route::post('/updatebooklist/{id}', 'admin\WebsiteController@updatebooklist');


Route::get('/adduniform', 'admin\WebsiteController@adduniform');
Route::post('/updateuniform/{id}', 'admin\WebsiteController@updateuniform');

Route::get('/addfees', 'admin\WebsiteController@addfees');
Route::post('/updatefees/{id}', 'admin\WebsiteController@updatefees');


Route::get('/addholidaylist', 'admin\WebsiteController@addholidaylist');
Route::post('/insertholidaylist', 'admin\WebsiteController@insertholidaylist');
Route::get('/view_holidaylist', 'admin\WebsiteController@view_holidaylist');
Route::get('/deleteholidaylist/{id}', 'admin\WebsiteController@deleteholidaylist');
Route::get('/edit_holidaylist/{id}', 'admin\WebsiteController@edit_holidaylist');
Route::post('/updateholidaylist/{id}', 'admin\WebsiteController@updateholidaylist');


// Admission

Route::get('/addProspects', 'admin\WebsiteController@addProspects');
Route::post('/insertProspects', 'admin\WebsiteController@insertProspects');
Route::get('/view_Prospects', 'admin\WebsiteController@view_Prospects');
Route::get('/deleteProspects/{id}', 'admin\WebsiteController@deleteProspects');
Route::get('/edit_Prospects/{id}', 'admin\WebsiteController@edit_Prospects');
Route::post('/updateProspects/{id}', 'admin\WebsiteController@updateProspects');


Route::get('/addAdmissionrules', 'admin\WebsiteController@addAdmissionrules');
Route::post('/insertAdmissionrules', 'admin\WebsiteController@insertAdmissionrules');
Route::get('/view_Admissionrules', 'admin\WebsiteController@view_Admissionrules');
Route::get('/deleteAdmissionrules/{id}', 'admin\WebsiteController@deleteAdmissionrules');
Route::get('/edit_Admissionrules/{id}', 'admin\WebsiteController@edit_Admissionrules');
Route::post('/updateAdmissionrules/{id}', 'admin\WebsiteController@updateAdmissionrules');


Route::get('/addAdmissionprocedure', 'admin\WebsiteController@addAdmissionprocedure');
Route::post('/insertAdmissionprocedure', 'admin\WebsiteController@insertAdmissionprocedure');
Route::get('/view_Admissionprocedure', 'admin\WebsiteController@view_Admissionprocedure');
Route::get('/deleteAdmissionprocedure/{id}', 'admin\WebsiteController@deleteAdmissionprocedure');
Route::get('/edit_Admissionprocedure/{id}', 'admin\WebsiteController@edit_Admissionprocedure');
Route::post('/updateAdmissionprocedure/{id}', 'admin\WebsiteController@updateAdmissionprocedure');


Route::get('/addTransferprocedure', 'admin\WebsiteController@addTransferprocedure');
Route::post('/insertTransferprocedure', 'admin\WebsiteController@insertTransferprocedure');
Route::get('/view_Transferprocedure', 'admin\WebsiteController@view_Transferprocedure');
Route::get('/deleteTransferprocedure/{id}', 'admin\WebsiteController@deleteTransferprocedure');
Route::get('/edit_Transferprocedure/{id}', 'admin\WebsiteController@edit_Transferprocedure');
Route::post('/updateTransferprocedure/{id}', 'admin\WebsiteController@updateTransferprocedure');



Route::get('/addAdmissionresult', 'admin\WebsiteController@addAdmissionresult');
Route::post('/insertAdmissionresult', 'admin\WebsiteController@insertAdmissionresult');
Route::get('/view_Admissionresult', 'admin\WebsiteController@view_Admissionresult');
Route::get('/deleteAdmissionresult/{id}', 'admin\WebsiteController@deleteAdmissionresult');
Route::get('/edit_Admissionresult/{id}', 'admin\WebsiteController@edit_Admissionresult');
Route::post('/updateAdmissionresult/{id}', 'admin\WebsiteController@updateAdmissionresult');




Route::get('/addAdmissiontestquestion', 'admin\WebsiteController@addAdmissiontestquestion');
Route::post('/insertAdmissiontestquestion', 'admin\WebsiteController@insertAdmissiontestquestion');
Route::get('/view_Admissiontestquestion', 'admin\WebsiteController@view_Admissiontestquestion');
Route::get('/deleteAdmissiontestquestion/{id}', 'admin\WebsiteController@deleteAdmissiontestquestion');
Route::get('/edit_Admissiontestquestion/{id}', 'admin\WebsiteController@edit_Admissiontestquestion');
Route::post('/updateAdmissiontestquestion/{id}', 'admin\WebsiteController@updateAdmissiontestquestion');





Route::get('/addexamrules', 'admin\WebsiteController@addexamrules');
Route::get('/getexamrules', 'admin\WebsiteController@getexamrules');
Route::post('/examrulesupdate/{id}', 'admin\WebsiteController@examrulesupdate');



Route::get('/addexamroutine', 'admin\WebsiteController@addexamroutine');
Route::post('/insertexamroutine', 'admin\WebsiteController@insertexamroutine');
Route::get('/view_examroutine', 'admin\WebsiteController@view_examroutine');
Route::get('/deleteexamroutine/{id}', 'admin\WebsiteController@deleteexamroutine');
Route::get('/edit_examroutine/{id}', 'admin\WebsiteController@edit_examroutine');
Route::post('/updateexamroutine/{id}', 'admin\WebsiteController@updateexamroutine');



Route::get('/addsyllabas', 'admin\WebsiteController@addsyllabas');
Route::post('/insertsyllabas', 'admin\WebsiteController@insertsyllabas');
Route::get('/view_syllabas', 'admin\WebsiteController@view_syllabas');
Route::get('/deletesyllabas/{id}', 'admin\WebsiteController@deletesyllabas');
Route::get('/edit_syllabas/{id}', 'admin\WebsiteController@edit_syllabas');
Route::post('/updatesyllabas/{id}', 'admin\WebsiteController@updatesyllabas');



Route::get('/addlessonplan', 'admin\WebsiteController@addlessonplan');
Route::post('/insertlessonplan', 'admin\WebsiteController@insertlessonplan');
Route::get('/view_lessonplan', 'admin\WebsiteController@view_lessonplan');
Route::get('/deletelessonplan/{id}', 'admin\WebsiteController@deletelessonplan');
Route::get('/edit_lessonplan/{id}', 'admin\WebsiteController@edit_lessonplan');
Route::post('/updatelessonplan/{id}', 'admin\WebsiteController@updatelessonplan');




Route::get('/addsuggestion', 'admin\WebsiteController@addsuggestion');
Route::post('/insertsuggestion', 'admin\WebsiteController@insertsuggestion');
Route::get('/view_suggestion', 'admin\WebsiteController@view_suggestion');
Route::get('/deletesuggestion/{id}', 'admin\WebsiteController@deletesuggestion');
Route::get('/edit_suggestion/{id}', 'admin\WebsiteController@edit_suggestion');
Route::post('/updatesuggestion/{id}', 'admin\WebsiteController@updatesuggestion');




Route::get('/addmagazine', 'admin\WebsiteController@addmagazine');
Route::post('/insertmagazine', 'admin\WebsiteController@insertmagazine');
Route::get('/view_magazine', 'admin\WebsiteController@view_magazine');
Route::get('/deletemagazine/{id}', 'admin\WebsiteController@deletemagazine');
Route::get('/edit_magazine/{id}', 'admin\WebsiteController@edit_magazine');
Route::post('/updatemagazine/{id}', 'admin\WebsiteController@updatemagazine');




Route::get('/addsports', 'admin\WebsiteController@addsports');
Route::post('/insertsports', 'admin\WebsiteController@insertsports');
Route::get('/view_sports', 'admin\WebsiteController@view_sports');
Route::get('/deletesports/{id}', 'admin\WebsiteController@deletesports');
Route::get('/edit_sports/{id}', 'admin\WebsiteController@edit_sports');
Route::post('/updatesports/{id}', 'admin\WebsiteController@updatesports');



Route::get('/addcultural', 'admin\WebsiteController@addcultural');
Route::post('/insertcultural', 'admin\WebsiteController@insertcultural');
Route::get('/view_cultural', 'admin\WebsiteController@view_cultural');
Route::get('/deletecultural/{id}', 'admin\WebsiteController@deletecultural');
Route::get('/edit_cultural/{id}', 'admin\WebsiteController@edit_cultural');
Route::post('/updatecultural/{id}', 'admin\WebsiteController@updatecultural');




Route::get('/addscouts', 'admin\WebsiteController@addscouts');
Route::post('/insertscouts', 'admin\WebsiteController@insertscouts');
Route::get('/view_scouts', 'admin\WebsiteController@view_scouts');
Route::get('/deletescouts/{id}', 'admin\WebsiteController@deletescouts');
Route::get('/edit_scouts/{id}', 'admin\WebsiteController@edit_scouts');
Route::post('/updatescouts/{id}', 'admin\WebsiteController@updatescouts');



Route::get('/addBNCC', 'admin\WebsiteController@addBNCC');
Route::post('/insertBNCC', 'admin\WebsiteController@insertBNCC');
Route::get('/view_BNCC', 'admin\WebsiteController@view_BNCC');
Route::get('/deleteBNCC/{id}', 'admin\WebsiteController@deleteBNCC');
Route::get('/edit_BNCC/{id}', 'admin\WebsiteController@edit_BNCC');
Route::post('/updateBNCC/{id}', 'admin\WebsiteController@updateBNCC');



Route::get('/addred_crescent', 'admin\WebsiteController@addred_crescent');
Route::post('/insertred_crescent', 'admin\WebsiteController@insertred_crescent');
Route::get('/view_red_crescent', 'admin\WebsiteController@view_red_crescent');
Route::get('/deletered_crescent/{id}', 'admin\WebsiteController@deletered_crescent');
Route::get('/edit_red_crescent/{id}', 'admin\WebsiteController@edit_red_crescent');
Route::post('/updatered_crescent/{id}', 'admin\WebsiteController@updatered_crescent');



Route::get('/addstudent_cafinet', 'admin\WebsiteController@addstudent_cafinet');
Route::post('/insertstudent_cafinet', 'admin\WebsiteController@insertstudent_cafinet');
Route::get('/view_student_cafinet', 'admin\WebsiteController@view_student_cafinet');
Route::get('/deletestudent_cafinet/{id}', 'admin\WebsiteController@deletestudent_cafinet');
Route::get('/edit_student_cafinet/{id}', 'admin\WebsiteController@edit_student_cafinet');
Route::post('/updatestudent_cafinet/{id}', 'admin\WebsiteController@updatestudent_cafinet');



Route::get('/adddebate', 'admin\WebsiteController@adddebate');
Route::post('/insertdebate', 'admin\WebsiteController@insertdebate');
Route::get('/view_debate', 'admin\WebsiteController@view_debate');
Route::get('/deletedebate/{id}', 'admin\WebsiteController@deletedebate');
Route::get('/edit_debate/{id}', 'admin\WebsiteController@edit_debate');
Route::post('/updatedebate/{id}', 'admin\WebsiteController@updatedebate');



Route::get('/addlanguage_club', 'admin\WebsiteController@addlanguage_club');
Route::post('/insertlanguage_club', 'admin\WebsiteController@insertlanguage_club');
Route::get('/view_language_club', 'admin\WebsiteController@view_language_club');
Route::get('/deletelanguage_club/{id}', 'admin\WebsiteController@deletelanguage_club');
Route::get('/edit_language_club/{id}', 'admin\WebsiteController@edit_language_club');
Route::post('/updatelanguage_club/{id}', 'admin\WebsiteController@updatelanguage_club');



Route::get('/addstudy_tour', 'admin\WebsiteController@addstudy_tour');
Route::post('/insertstudy_tour', 'admin\WebsiteController@insertstudy_tour');
Route::get('/view_study_tour', 'admin\WebsiteController@view_study_tour');
Route::get('/deletestudy_tour/{id}', 'admin\WebsiteController@deletestudy_tour');
Route::get('/edit_study_tour/{id}', 'admin\WebsiteController@edit_study_tour');
Route::post('/updatestudy_tour/{id}', 'admin\WebsiteController@updatestudy_tour');



Route::get('/addscience_fair', 'admin\WebsiteController@addscience_fair');
Route::post('/insertscience_fair', 'admin\WebsiteController@insertscience_fair');
Route::get('/view_science_fair', 'admin\WebsiteController@view_science_fair');
Route::get('/deletescience_fair/{id}', 'admin\WebsiteController@deletescience_fair');
Route::get('/edit_science_fair/{id}', 'admin\WebsiteController@edit_science_fair');
Route::post('/updatescience_fair/{id}', 'admin\WebsiteController@updatescience_fair');



Route::get('/addcomputer_club', 'admin\WebsiteController@addcomputer_club');
Route::post('/insertcomputer_club', 'admin\WebsiteController@insertcomputer_club');
Route::get('/view_computer_club', 'admin\WebsiteController@view_computer_club');
Route::get('/deletecomputer_club/{id}', 'admin\WebsiteController@deletecomputer_club');
Route::get('/edit_computer_club/{id}', 'admin\WebsiteController@edit_computer_club');
Route::post('/updatecomputer_club/{id}', 'admin\WebsiteController@updatecomputer_club');



Route::get('/addgirls_guide', 'admin\WebsiteController@addgirls_guide');
Route::get('/getgirls_guide', 'admin\WebsiteController@getgirls_guide');
Route::post('/girls_guideupdate/{id}', 'admin\WebsiteController@girls_guideupdate');




Route::get('/our_backup_database', 'admin\WebsiteController@our_backup_database');




Route::get('/addphotos', 'admin\WebsiteController@addphotos');
Route::post('/addMujibPhoto', 'admin\WebsiteController@addMujibPhoto');
Route::get('/editphoto/{id}', 'admin\WebsiteController@editphoto');
Route::post('/updateMujibPhoto/{id}', 'admin\WebsiteController@updateMujibPhoto');
Route::get('/deletePhoto/{id}', 'admin\WebsiteController@deletePhoto');




