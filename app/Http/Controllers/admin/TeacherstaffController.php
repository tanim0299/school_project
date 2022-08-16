<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class TeacherstaffController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function teacher_staff(){
		return view('admin.teacher_staff.teacher_staff');

	}


	public function insert_teacherstaff(Request $request){

		$data = array();
		$data['name']               = $request->name;
		$data['designation']        = $request->designation;
		$data['department_name']    = 'all';
		$data['voter_id']           = $request->voter_id;
		$data['date_of_birth']      = $request->date_of_birth;
		$data['blood']              = $request->blood;
		$data['religion']           = $request->religion;
		$data['relationship']       = $request->relationship;
		$data['father_name']        = $request->father_name;
		$data['mother_name']        = $request->mother_name;
		$data['mobile']             = $request->mobile;
		$data['email']              = $request->email;
		$data['join_date']          = $request->join_date;
		$data['mpo_date']           = $request->mpo_date;
		$data['present_address']    = $request->present_address;
		$data['parmanent_address']  = $request->parmanent_address;
		$data['education']          = $request->education;
		$data['gender']             = $request->gender;
		$data['type']               = $request->type;
		$newsimage                      = $request->file('image');

		if ($newsimage) {
			$image_one_name= hexdec(uniqid()).'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('teacher_staff')->insert($data);
		}
		else{
			DB::table('teacher_staff')->insert($data);
		}


		$notification=array(
			'messege'=>'Data Added Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
		

		
	}



	public function view_teacher_staff(){

		$view = DB::table('teacher_staff')->get();
		return view('admin.teacher_staff.view_teacher_staff', compact('view'));

	}




	public function deleteteacher_staff($id){
        // dd($id);
		$data = DB::table('teacher_staff')->where('id',$id)->first();
		$image = $data->image;
		if(file_exists($image))
		{
			unlink($image);
		}
		DB::table('teacher_staff')->where('id',$id)->delete();

	}



	public function edit_teacherstaff($id){

		$view = DB::table('teacher_staff')->where('id',$id)->first();
		return view('admin.teacher_staff.edit_teacher_staff', compact('view'));

	}





	public function update_teacherstaff(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['name']               = $request->name;
		$data['designation']        = $request->designation;
		$data['department_name']    = 'all';
		$data['voter_id']           = $request->voter_id;
		$data['date_of_birth']      = $request->date_of_birth;
		$data['blood']              = $request->blood;
		$data['religion']           = $request->religion;
		$data['relationship']       = $request->relationship;
		$data['father_name']        = $request->father_name;
		$data['mother_name']        = $request->mother_name;
		$data['mobile']             = $request->mobile;
		$data['email']              = $request->email;
		$data['join_date']          = $request->join_date;
		$data['mpo_date']           = $request->mpo_date;
		$data['present_address']    = $request->present_address;
		$data['parmanent_address']  = $request->parmanent_address;
		$data['education']          = $request->education;
		$data['gender']             = $request->gender;
		$data['type']               = $request->type;
		$data['status']             = $request->status;
		
		$newsimage                  = $request->file('image');

		if ($newsimage) {
		    if(file_exists($old_image))
		    {
		       unlink($old_image); 
		    }
			
			$image_one_name= hexdec(uniqid()).'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('teacher_staff')->where('id',$id)->update($data);
		}
		else{
			DB::table('teacher_staff')->where('id',$id)->update($data);
		}


		$notification=array(
			'messege'=>'Edit Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
		

		
	}



	public function view_teacherstaff($id){

		$view = DB::table('teacher_staff')->where('id',$id)->first();
		return view('admin.teacher_staff.view_teacherstaff', compact('view'));

	}





}
