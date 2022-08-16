<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendContoller extends Controller
{

	public function index(){

		$noticeview = DB::table('notice')->orderBy('id','DESC')->limit(8)->get();
		$about      = DB::table('about_school')->first();
		return view('user.home', compact('noticeview','about'));
	}

	public function Notices(){
		$view = DB::table('notice')->orderBy('id','DESC')->get();
		return view('user.Notices', compact('view'));
	}

	public function noticeview($id){
		$data = DB::table('notice')->where('id',$id)->first();
		return view('user.notice_view', compact('data'));
	}



	public function Principlemessage(){
		$view = DB::table('principle_message')->first();
		return view('user.Principlemessage', compact('view'));
	}

	public function vicePrinciplemessage(){
		$view = DB::table('viceprinciple_message')->first();
		return view('user.vicePrinciplemessage', compact('view'));
	}


	public function About_institute(){
		$view = DB::table('about_school')->first();
		return view('user.About_institute', compact('view'));
	}


	public function Mission_vission(){
		$view = DB::table('mission_and_vision')->first();
		return view('user.Mission_vission', compact('view'));
	}


	public function History(){
		$view = DB::table('history')->first();
		return view('user.History', compact('view'));
	}



	public function Citizen_charter(){
		$view = DB::table('citizencharter')->first();
		return view('user.Citizen_charter', compact('view'));
	}


	public function Student_info_chart(){
		$view = DB::table('studentinfochart')->get();
		return view('user.Student_info_chart', compact('view'));
	}


	public function view_studentinfochart($id){
		$data = DB::table('studentinfochart')->where('id',$id)->first();
		return view('user.view_studentinfochart', compact('data'));
	}

	public function Infrastructure(){
		$view = DB::table('infrastructure')->first();
		return view('user.Infrastructure', compact('view'));
	}

	public function Yearly_working_plan(){
		$view = DB::table('yearlyworkingplan')->get();
		return view('user.Yearly_working_plan', compact('view'));
	}


	public function view_yearlyworkingplan($id){
		$data = DB::table('yearlyworkingplan')->where('id',$id)->first();
		return view('user.view_yearlyworkingplan', compact('data'));
	}




	public function Contact_us(){
		$view = DB::table('contact_us')->first();
		return view('user.Contact_us', compact('view'));
	}



	public function Founder_Message(){
		$view = DB::table('founder_message')->first();
		return view('user.Founder_Message', compact('view'));
	}

	public function President_Message(){
		$view = DB::table('presidant_message')->first();
		return view('user.President_Message', compact('view'));
	}

	

	public function Events(){
		$view = DB::table('event')->orderBy('id','DESC')->get();
		return view('user.Events', compact('view'));
	}

	public function Eventsview($id){
		$data = DB::table('event')->where('id',$id)->first();
		return view('user.Eventsview', compact('data'));
	}


	public function Library_Info(){
		$view = DB::table('library_information')->first();
		return view('user.Library_Info', compact('view'));
	}

	public function Hostel_Info(){
		$view = DB::table('hostelinformation')->first();
		return view('user.Hostel_Info', compact('view'));
	}

	public function Photo_gallery(){
		$view = DB::table('photo_gallery')->orderBy('id','DESC')->simplePaginate(10);
		return view('user.Photo_gallery', compact('view'));
	}

	public function Video_gallery(){
		$view = DB::table('video_gallery')->orderBy('id','DESC')->get();
		return view('user.Video_gallery', compact('view'));
	}


	public function Teacher_info(){
		$teacherview = DB::table('teacher_staff')
		->where('type',0)
		->where('status',NULL)
		->get();
		
// 		dd($teacherview);
		
		
		return view('user.Teacher_info', compact('teacherview'));
	}


	public function Ex_Teacher_info(){
		$teacherview = DB::table('teacher_staff')->where('type',0)->where('status',0)->simplePaginate(12);
		return view('user.Ex_Teacher_info', compact('teacherview'));
	}



	public function View_teacherinfo($id){
		$view = DB::table('teacher_staff')->where('id',$id)->first();
		return view('user.View_teacherinfo', compact('view'));
	}


	public function Staff_info(){
		$staffview = DB::table('teacher_staff')->where('type',1)->where('status',NULL)->simplePaginate(12);
		return view('user.Staff_info', compact('staffview'));
	}


	public function Ex_Staff_info(){
		$teacherview = DB::table('teacher_staff')->where('type',1)->where('status',1)->simplePaginate(12);
		return view('user.Ex_Staff_info', compact('teacherview'));
	}




	public function View_Staff_info($id){
		$view = DB::table('teacher_staff')->where('id',$id)->first();
		return view('user.View_Staff_info', compact('view'));
	}



	public function Managing_comittee(){
		$memberview = DB::table('lists')->where('type',0)->where('status',0)->simplePaginate(12);
		return view('user.Managing_comittee', compact('memberview'));
	}


	public function View_member($id){
		$view = DB::table('lists')->where('id',$id)->first();
		return view('user.View_member', compact('view'));
	}


	public function Chairman_list(){
		$memberview = DB::table('lists')->where('type',1)->where('status',0)->simplePaginate(12);
		return view('user.Chairman_list', compact('memberview'));
	}


	public function Principle_list(){
		$memberview = DB::table('lists')->where('type',2)->where('status',0)->simplePaginate(12);
		return view('user.Principle_list', compact('memberview'));
	}


	public function Donars_list(){
		$memberview = DB::table('lists')->where('type',3)->where('status',0)->simplePaginate(12);
		return view('user.Donars_list', compact('memberview'));
	}



	public function Ex_member_list(){
		$memberview = DB::table('lists')->where('type',4)->where('status',0)->simplePaginate(12);
		return view('user.Ex_member_list', compact('memberview'));
	}


	public function Guidline_teacher_staff(){
		$view = DB::table('guidlines')->orderBy('id','DESC')->get();
		return view('user.Guidline_teacher_staff', compact('view'));
	}

	public function Guidlineview($id){
		$data = DB::table('guidlines')->where('id',$id)->first();
		return view('user.Guidlineview', compact('data'));
	}


	public function Rules_regulation(){
		$data = DB::table('ruleregulation')->first();
		return view('user.Rules_regulation', compact('data'));
	}



	

	public function Academic_Calender(){
		$view = DB::table('academiccalender')->orderBy('id','DESC')->get();
		return view('user.Academic_Calender', compact('view'));
	}



	public function Class_routine(){
		$view = DB::table('classroutine')->orderBy('id','DESC')->get();
		return view('user.Class_routine', compact('view'));
	}


	public function Online_Classroutine(){
		$view = DB::table('onlineclassroutine')->orderBy('id','DESC')->get();
		return view('user.Online_Classroutine', compact('view'));
	}



	public function Book_list(){
		$view = DB::table('booklist')->orderBy('id','DESC')->get();
		return view('user.Book_list', compact('view'));
	}


	public function Uniform(){
		$view = DB::table('uniform')->first();
		return view('user.Uniform', compact('view'));
	}


	public function Fees(){
		$view = DB::table('fees')->first();
		return view('user.Fees', compact('view'));
	}


	public function Holiday_list(){
		$view = DB::table('holidaylist')->orderBy('id','DESC')->get();
		return view('user.Holiday_list', compact('view'));
	}



	public function Prospects(){
		$view = DB::table('prospects')->orderBy('id','DESC')->get();
		return view('user.Prospects', compact('view'));
	}


	public function view_prospects($id){
		$view = DB::table('prospects')->where('id',$id)->first();
		return view('user.view_prospects', compact('view'));
	}




	public function Admission_Rules(){
		$view = DB::table('admissionrules')->orderBy('id','DESC')->get();
		return view('user.Admission_Rules', compact('view'));
	}


	public function view_Admission_Rules($id){
		$view = DB::table('admissionrules')->where('id',$id)->first();
		return view('user.view_Admission_Rules', compact('view'));
	}


	public function Admission_Procedure(){
		$view = DB::table('admissionprocedure')->orderBy('id','DESC')->get();
		return view('user.Admission_Procedure', compact('view'));
	}


	public function view_Admission_Procedure($id){
		$view = DB::table('admissionprocedure')->where('id',$id)->first();
		return view('user.view_Admission_Procedure', compact('view'));
	}


	public function Admission_Result(){
		$view = DB::table('admissionresult')->orderBy('id','DESC')->get();
		return view('user.Admission_Result', compact('view'));
	}

	public function Admission_Question(){
		$view = DB::table('admissiontestquestion')->orderBy('id','DESC')->get();
		return view('user.Admission_Question', compact('view'));
	}




	public function Transfer_Procedure(){
		$view = DB::table('transferprocedure')->orderBy('id','DESC')->get();
		return view('user.Transfer_Procedure', compact('view'));
	}


	public function view_Transfer_Procedure($id){
		$view = DB::table('transferprocedure')->where('id',$id)->first();
		return view('user.view_Transfer_Procedure', compact('view'));
	}




	public function Exam_rules(){
		$view = DB::table('examrules')->first();
		return view('user.Exam_rules', compact('view'));
	}


	public function Exam_routine(){
		$view = DB::table('examroutine')->orderBy('id','DESC')->get();
		return view('user.Exam_routine', compact('view'));
	}



	public function Syllabas(){
		$view = DB::table('syllabas')
		->orderBy('syllabas.id','DESC')
		->leftjoin('add_class','add_class.id','syllabas.class_id')
		->select('syllabas.*','add_class.class_name')
		->get();
		return view('user.Syllabas', compact('view'));
	}



	public function Lesson_plan(){
		$view = DB::table('lessonplan')
		->orderBy('lessonplan.id','DESC')
		->leftjoin('add_class','add_class.id','lessonplan.class_id')
		->select('lessonplan.*','add_class.class_name')
		->get();
		return view('user.Lesson_plan', compact('view'));
	}



	public function Suggestion(){
		$view = DB::table('suggestion')
		->orderBy('suggestion.id','DESC')
		->leftjoin('add_class','add_class.id','suggestion.class_id')
		->select('suggestion.*','add_class.class_name')
		->get();
		return view('user.Suggestion', compact('view'));
	}



	public function Magazine(){
		$view = DB::table('magazine')->orderBy('id','DESC')->paginate(8);
		return view('user.Magazine', compact('view'));
	}



	public function Sports(){
		$view = DB::table('sports')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.Sports', compact('view'));
	}



	public function view_sports($id){
		$view = DB::table('sports')->where('id',$id)->first();
		return view('user.view_sports', compact('view'));
	}





	public function Cultural_Activities(){
		$view = DB::table('cultural')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.Cultural_Activities', compact('view'));
	}



	public function view_Cultural_Activities($id){
		$view = DB::table('cultural')->where('id',$id)->first();
		return view('user.view_Cultural_Activities', compact('view'));
	}




	public function Scouts(){
		$view = DB::table('scouts')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.Scouts', compact('view'));
	}



	public function view_Scouts($id){
		$view = DB::table('scouts')->where('id',$id)->first();
		return view('user.view_Scouts', compact('view'));
	}



	public function Girls_Guide(){
		$view = DB::table('girls_guide')->first();
		return view('user.Girls_Guide', compact('view'));
	}





	public function BNCC(){
		$view = DB::table('bncc')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.BNCC', compact('view'));
	}



	public function view_BNCC($id){
		$view = DB::table('bncc')->where('id',$id)->first();
		return view('user.view_BNCC', compact('view'));
	}




	public function Red_Crescent(){
		$view = DB::table('red_crescent')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.Red_Crescent', compact('view'));
	}



	public function view_Red_Crescent($id){
		$view = DB::table('red_crescent')->where('id',$id)->first();
		return view('user.view_Red_Crescent', compact('view'));
	}



	public function Student_Cafinet(){
		$view = DB::table('student_cafinet')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.Student_Cafinet', compact('view'));
	}



	public function view_Student_Cafinet($id){
		$view = DB::table('student_cafinet')->where('id',$id)->first();
		return view('user.view_Student_Cafinet', compact('view'));
	}



	public function Debate(){
		$view = DB::table('debate')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.Debate', compact('view'));
	}



	public function view_Debate($id){
		$view = DB::table('debate')->where('id',$id)->first();
		return view('user.view_Debate', compact('view'));
	}





	public function Language_Club(){
		$view = DB::table('language_club')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.Language_Club', compact('view'));
	}



	public function view_Language_Club($id){
		$view = DB::table('language_club')->where('id',$id)->first();
		return view('user.view_Language_Club', compact('view'));
	}



	public function Study_Tour(){
		$view = DB::table('study_tour')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.Study_Tour', compact('view'));
	}



	public function view_Study_Tour($id){
		$view = DB::table('study_tour')->where('id',$id)->first();
		return view('user.view_Study_Tour', compact('view'));
	}



	public function Science_Fair(){
		$view = DB::table('science_fair')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.Science_Fair', compact('view'));
	}



	public function view_Science_Fair($id){
		$view = DB::table('science_fair')->where('id',$id)->first();
		return view('user.view_Science_Fair', compact('view'));
	}




	public function Computer_Club(){
		$view = DB::table('computer_club')->orderBy('id','DESC')->simplePaginate(6);
		return view('user.Computer_Club', compact('view'));
	}



	public function view_Computer_Club($id){
		$view = DB::table('computer_club')->where('id',$id)->first();
		return view('user.view_Computer_Club', compact('view'));
	}
	
	
	
		public function Teacher_infos($id){
		$teacherview = DB::table('teacher_staff')
		->where('type',0)
		->where('status',NULL)
		->where('department_name',$id)
		->simplePaginate(12);
		
		return view('user.departmentwiseteacher', compact('teacherview'));
		
		}


		public function head_intro()
		{
			$view = DB::table('principal_intro')->first();
			return view('user.head_intro',compact('view'));
		}

		public function vice_principal_intro()
		{
			$view = DB::table('viceprincipal_intro')->first();
			return view('user.viceprincipal_intro',compact('view'));
		}

	

}



























