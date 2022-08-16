<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class NoticeEventController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}


	public function addnotice(){
		return view('admin.notice_event.addnotice');
	}



	public function insertnotice(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['description']  = $request->description;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('notice')
			->insert($data);
			$notification=array(
				'messege'=>'Notice Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('notice')
			->insert($data);
			$notification=array(
				'messege'=>'Notice Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_notice(){
		$view = DB::table('notice')->get();
		return view('admin.notice_event.viewnotice', compact('view'));

	}





	public function deletenotice($id)
	{

		$data = DB::table('notice')->where('id',$id)->first();
		$image = $data->image;
		if(file_exists($image)){
			unlink($image);
		}

		DB::table('notice')->where('id',$id)->delete();

	}

	public function edit_notice($id){

		$data = DB::table('notice')->where('id',$id)->first();
		return view('admin.notice_event.editnotice',compact('data'));

	}



	public function updatenotice(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['description']  = $request->description;
		$image                = $request->file('image');

		if ($image) {
		    if(file_exists($old_image))
		    {
			    unlink($old_image);
		    }
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('notice')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Notice Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('notice')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Notice Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}






	public function addevent(){
		return view('admin.notice_event.addevent');
	}



	public function insertevent(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['description']  = $request->description;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('event')
			->insert($data);
			$notification=array(
				'messege'=>'Event Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('event')
			->insert($data);
			$notification=array(
				'messege'=>'Event Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_event(){
		$view = DB::table('event')->get();
		return view('admin.notice_event.view_event', compact('view'));

	}





	public function deleteevent($id){

		$data = DB::table('event')->where('id',$id)->first();
		$image = $data->image;
		if(file_exists($image)){
			unlink($image);
		}

		DB::table('event')->where('id',$id)->delete();

	}

	public function edit_event($id){

		$data = DB::table('event')->where('id',$id)->first();
		return view('admin.notice_event.editevent',compact('data'));

	}



	public function updateevent(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['description']  = $request->description;
		$image                = $request->file('image');

		if ($image) {
			unlink($old_image);
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('event')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Event Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('event')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Event Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}





	public function addguidline(){
		return view('admin.notice_event.guidline');
	}



	public function insertguidline(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['description']  = $request->description;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimg/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('guidlines')
			->insert($data);
			$notification=array(
				'messege'=>'Guidline Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('guidlines')
			->insert($data);
			$notification=array(
				'messege'=>'Guidline Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_guidline(){
		$view = DB::table('guidlines')->get();
		return view('admin.notice_event.view_guidline', compact('view'));

	}





	public function deleteguidline($id){

		$data = DB::table('guidlines')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('guidlines')->where('id',$id)->delete();

	}

	public function edit_guidline($id){

		$data = DB::table('guidlines')->where('id',$id)->first();
		return view('admin.notice_event.editguidline',compact('data'));

	}



	public function updateguidline(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['description']  = $request->description;
		$image                = $request->file('image');

		if ($image) {
			unlink($old_image);
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimg/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('guidlines')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('guidlines')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}








}
