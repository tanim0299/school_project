<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class WebsiteController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}




	
	public function addcontact(){

		$view = DB::table('contact_us')->first();
		return view('admin.websiteinfo.contact', compact('view'));

	}

	public function getcontact(){

		$view = DB::table('contact_us')->first();
		return response()->json($view);

	}


	public function contactupdate(Request $request,$id){

		$data = array();
		$data['Contact_Us'] = $request->Contact_Us;
		$data['map']        = $request->map;

		$view = DB::table('contact_us')->where('id',$id)->update($data);
	}




	public function addmission_vision(){

		$view = DB::table('mission_and_vision')->first();
		return view('admin.websiteinfo.mission_and_vision', compact('view'));

	}

	public function getmission_vision(){

		$view = DB::table('mission_and_vision')->first();
		return response()->json($view);

	}


	public function mission_visionupdate(Request $request,$id){

		$data = array();
		$data['description'] = $request->description;

		$view = DB::table('mission_and_vision')->where('id',$id)->update($data);
	}




	public function addhistory(){

		$view = DB::table('history')->first();
		return view('admin.websiteinfo.history', compact('view'));

	}

	public function gethistory(){

		$view = DB::table('history')->first();
		return response()->json($view);

	}


	public function historyupdate(Request $request,$id){

		$data = array();
		$data['description'] = $request->description;

		$view = DB::table('history')->where('id',$id)->update($data);
	}



	public function addabout(){

		$view = DB::table('about_school')->first();
		return view('admin.websiteinfo.about_school', compact('view'));

	}


	public function aboutupdate(Request $request,$id){

		$old_image=$request->old_image;
		$data = array();
		$data['About_Massage'] = $request->About_Massage;
		$image        = $request->file('image');

		if ($image) {

			unlink($old_image);
			$image_name= date('dmy_H_s_i');
			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('about_school')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('about_school')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

	}




	public function addlibraryinfo(){

		$view = DB::table('library_information')->first();
		return view('admin.websiteinfo.library_information', compact('view'));

	}

	public function getlibraryinfo(){

		$view = DB::table('library_information')->first();
		return response()->json($view);

	}


	public function libraryinfoupdate(Request $request,$id){

		$data = array();
		$data['library_information'] = $request->library_information;

		$view = DB::table('library_information')->where('id',$id)->update($data);
	}




	public function addhostelinfo(){

		$view = DB::table('hostelinformation')->first();
		return view('admin.websiteinfo.hostelinformation', compact('view'));

	}

	public function gethostelinfo(){

		$view = DB::table('hostelinformation')->first();
		return response()->json($view);

	}


	public function hostelinfoupdate(Request $request,$id){

		$data = array();
		$data['details'] = $request->details;

		$view = DB::table('hostelinformation')->where('id',$id)->update($data);
	}




	public function addinstituteinfo(){

		$view = DB::table('schoolinf')->first();
		return view('admin.websiteinfo.addinstituteinfo', compact('view'));

	}


	public function getinstituteinfo(){

		$view = DB::table('schoolinf')->first();
		return response()->json($view);

	}


	public function instituteinfoupdate(Request $request,$id){

		$data = array();
		$data['student']    = $request->student;
		$data['teacher']    = $request->teacher;
		$data['staff']      = $request->staff;
		$data['department'] = $request->department;

		$view = DB::table('schoolinf')->where('id',$id)->update($data);
	}


	public function adduseful_link(){

		$view = DB::table('usefull_link')->get();
		return view('admin.websiteinfo.adduseful_link', compact('view'));

	}



	public function insertusefullink(Request $request){

		$data = array();
		$data['title']    = $request->title;
		$data['url']      = $request->url;

		$view = DB::table('usefull_link')->insert($data);
	}


	public function deleteusefullink($id){

		DB::table('usefull_link')->where('id',$id)->delete();

	}



	public function editusefullink($id){

		$data = DB::table('usefull_link')->where('id',$id)->first();
		return view('admin.websiteinfo.editusefullink', compact('data'));

	}


	public function usefullinkupdate(Request $request,$id){

		$data = array();
		$data['title']    = $request->title;
		$data['url']      = $request->url;

		$view = DB::table('usefull_link')->where('id',$id)->update($data);
	}


	



	public function addphoto_gallery(){

		$view = DB::table('photo_gallery')->get();
		return view('admin.websiteinfo.addphoto_gallery', compact('view'));

	}



	public function insertphoto_gallery(Request $request){

		$data = array();
		$data['title']    = $request->title;
		$data['details']  = $request->details;
		$data['type']     = $request->type;
		$newsimage        = $request->file('image');

		if ($newsimage) {
			$image_one_name= hexdec(uniqid()).'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('photo_gallery')->insert($data);
		}
		else{
			DB::table('photo_gallery')->insert($data);
		}


		$notification=array(
			'messege'=>'Photo Added Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
		
	}



	public function deletephotogallery($id){

		$data = DB::table('photo_gallery')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('photo_gallery')->where('id',$id)->delete();

	}


	public function editphotogallery($id){

		$data = DB::table('photo_gallery')->where('id',$id)->first();
		return view('admin.websiteinfo.editphotogallery', compact('data'));

	}




	public function updatephoto_gallery(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['title']    = $request->title;
		$data['details']  = $request->details;
		$data['type']     = $request->type;
		$newsimage        = $request->file('image');

		if ($newsimage) {
// 			unlink($old_image);
            if(file_exists($old_image))
            {
                unlink($old_image);
            }
			$image_one_name= hexdec(uniqid()).'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('photo_gallery')->where('id',$id)->update($data);
		}
		else{
			DB::table('photo_gallery')->where('id',$id)->update($data);
		}


		$notification=array(
			'messege'=>'Photo Update Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
		
	}






	public function addvideo_gallery(){

		$view = DB::table('video_gallery')->get();
		return view('admin.websiteinfo.video_gallery', compact('view'));

	}


	public function getvideo_gallery(){

		$view = DB::table('video_gallery')->first();
		return response()->json($view);

	}


	public function insertvideo_gallery(Request $request){

		$data = array();
		$data['title']      = $request->title;
		$data['details']    = $request->details;
		$data['url']        = $request->url;

		DB::table('video_gallery')->insert($data);
	}



	public function deletevideo_gallery($id){

		DB::table('video_gallery')->where('id',$id)->delete();

	}



	public function editvideogallery($id){

		$data = DB::table('video_gallery')->where('id',$id)->first();
		return view('admin.websiteinfo.editvideogallery', compact('data'));

	}


	public function videogalleryupdate(Request $request,$id){

		$data = array();
		$data['title']      = $request->title;
		$data['details']    = $request->details;
		$data['url']        = $request->url;

		DB::table('video_gallery')->where('id',$id)->update($data);
	}




	public function addprinciple_message(){

		$view = DB::table('principle_message')->first();
		return view('admin.websiteinfo.principle_message', compact('view'));

	}


	public function principle_messageupdate(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['name']       = $request->name;
		$data['title']      = $request->title;
		$data['details']    = $request->details;
		$newsimage          = $request->file('image');

		if ($newsimage) {
		    

		  //  if($old_image)
		  //  {
		  //      unlink($old_image);
		  //  }
		  //  return  0;
			
			$image_one_name= uniqid().'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('principle_message')->where('id', $id)->update($data);
		}
		else{
			DB::table('principle_message')->where('id', $id)->update($data);
		}

		$notification=array(
			'messege'=>'Update Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
	}





	public function addviceprinciple_message(){

		$view = DB::table('viceprinciple_message')->first();
		return view('admin.websiteinfo.viceprinciple_message', compact('view'));

	}


	public function viceprinciple_messageupdate(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['name']       = $request->name;
		$data['title']      = $request->title;
		$data['details']    = $request->details;
		$newsimage          = $request->file('image');

		if ($newsimage) {
// 			unlink($old_image);
			$image_one_name= hexdec(uniqid()).'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('viceprinciple_message')->where('id', $id)->update($data);
		}
		else{
			DB::table('viceprinciple_message')->where('id', $id)->update($data);
		}

		$notification=array(
			'messege'=>'Update Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
	}



	public function addfounder_message(){

		$view = DB::table('founder_message')->first();
		return view('admin.websiteinfo.founder_message', compact('view'));

	}


	public function founder_messageupdate(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['name']       = $request->name;
		$data['title']      = $request->title;
		$data['details']    = $request->details;
		$newsimage          = $request->file('image');

		if ($newsimage) {
			if(file_exists($old_image))
			{
				unlink($old_image);
			}
			$image_one_name= hexdec(uniqid()).'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('founder_message')->where('id', $id)->update($data);
		}
		else{
			DB::table('founder_message')->where('id', $id)->update($data);
		}

		$notification=array(
			'messege'=>'Update Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
	}





	public function addpresidant_message(){

		$view = DB::table('presidant_message')->first();
		return view('admin.websiteinfo.presidant_message', compact('view'));

	}


	public function presidant_messageupdate(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['name']       = $request->name;
		$data['title']      = $request->title;
		$data['details']    = $request->details;
		$newsimage          = $request->file('image');

		if ($newsimage) {
		    if(file_exists($old_image))
		    {
		        unlink($old_image);
		    }
			
			$image_one_name= hexdec(uniqid()).'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('presidant_message')->where('id', $id)->update($data);
		}
		else{
			DB::table('presidant_message')->where('id', $id)->update($data);
		}

		$notification=array(
			'messege'=>'Update Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
	}



	public function add_class(){

		$view = DB::table('add_class')->get();
		return view('admin.websiteinfo.add_class', compact('view'));

	}


	public function insertclass(Request $request){

		$data = array();
		$data['class_name']      = $request->class_name;

		DB::table('add_class')->insert($data);
	}


	public function deleteclass($id){

		DB::table('add_class')->where('id',$id)->delete();

	}



	public function editclass($id){

		$data = DB::table('add_class')->where('id',$id)->first();
		return view('admin.websiteinfo.editclass', compact('data'));

	}


	public function classupdate(Request $request,$id){

		$data = array();
		$data['class_name']      = $request->class_name;

		DB::table('add_class')->where('id',$id)->update($data);
	}









	public function adddepartment(){

		$view = DB::table('add_department')->get();
		return view('admin.websiteinfo.add_department', compact('view'));

	}


	public function insertdepartment(Request $request){

		$data = array();
		$data['department_name']      = $request->department_name;

		DB::table('add_department')->insert($data);
	}


	public function deletedepartment($id){

		DB::table('add_department')->where('id',$id)->delete();

	}



	public function editdepartment($id){

		$data = DB::table('add_department')->where('id',$id)->first();
		return view('admin.websiteinfo.editdepartment', compact('data'));

	}


	public function departmentupdate(Request $request,$id){

		$data = array();
		$data['department_name']      = $request->department_name;

		DB::table('add_department')->where('id',$id)->update($data);
	}







	public function add_group(){

		$view = DB::table('add_group')
		->join('add_class','add_class.id','add_group.class_id')
		->select('add_group.*','add_class.class_name')
		->get();
		return view('admin.websiteinfo.add_group', compact('view'));

	}


	public function insertgroup(Request $request){

		$data = array();
		$data['class_id']        = $request->class_id;
		$data['group_name']      = $request->group_name;

		DB::table('add_group')->insert($data);
	}


	public function deletegroup($id){

		DB::table('add_group')->where('id',$id)->delete();

	}



	public function editgroup($id){

		$data = DB::table('add_group')->where('id',$id)->first();
		return view('admin.websiteinfo.editgroup', compact('data'));

	}


	public function groupupdate(Request $request,$id){

		$data = array();
		$data['class_id']        = $request->class_id;
		$data['group_name']      = $request->group_name;

		DB::table('add_group')->where('id',$id)->update($data);
	}



	public function add_section(){

		$view = DB::table('add_section')
		->join('add_class','add_class.id','add_section.class_id')
		->join('add_group','add_group.id','add_section.group_id')
		->select('add_section.*','add_class.class_name','add_group.group_name')
		->get();
		return view('admin.websiteinfo.add_section', compact('view'));

	}


	public function insertsection(Request $request){

		$data = array();
		$data['class_id']        = $request->class_id;
		$data['group_id']        = $request->group_id;
		$data['section_name']    = $request->section_name;

		DB::table('add_section')->insert($data);
	}


	public function deletesection($id){

		DB::table('add_section')->where('id',$id)->delete();

	}


	public function editsection($id){

		$data = DB::table('add_section')->where('id',$id)->first();
		return view('admin.websiteinfo.editsection', compact('data'));

	}



	public function sectionupdate(Request $request,$id){

		$data = array();
		$data['class_id']        = $request->class_id;
		$data['group_id']        = $request->group_id;
		$data['section_name']    = $request->section_name;

		DB::table('add_section')->where('id',$id)->update($data);
	}





	public function getclass($class_id)
	{
		$data = DB::table("add_group")->where("class_id",$class_id)->get();
		return json_encode($data);
	}


	public function settings(){

		$view = DB::table('settings')->first();
		return view('admin.websiteinfo.settings', compact('view'));

	}


	public function updatesetting(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['name']       = $request->name;
		$data['email']      = $request->email;
		$data['phone']      = $request->phone;
		$data['address']    = $request->address;
		$data['est']    	= $request->est;
		$data['meta']    	= $request->meta;
		$data['title']    	= $request->title;
		$data['description']= $request->description;
		$data['map']    	= $request->map;
		$data['facebook']   = $request->facebook;
		$data['vedio']   = $request->vedio;
		$newsimage          = $request->file('image');

		if ($newsimage) {
		    if(file_exists($old_image))
		    {
		        unlink($old_image);
		    }
			$image_one_name= hexdec(uniqid()).'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('settings')->where('id', $id)->update($data);
		}
		else{
			DB::table('settings')->where('id', $id)->update($data);
		}

		$notification=array(
			'messege'=>'Update Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
	}




	public function addcitizencharter(){

		$view = DB::table('citizencharter')->first();
		return view('admin.websiteinfo.citizencharter', compact('view'));

	}




	public function citizencharterupdate(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['title']      = $request->title;
		$image          = $request->file('image');

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
			$insert=DB::table('citizencharter')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('citizencharter')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


	}



	public function addstudentinfochart(){

		$view = DB::table('studentinfochart')->get();
		return view('admin.websiteinfo.studentinfochart', compact('view'));

	}



	public function insertstudentinfochart(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('studentinfochart')
			->insert($data);
			$notification=array(
				'messege'=>'Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('studentinfochart')
			->insert($data);
			$notification=array(
				'messege'=>'Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}






	public function deletestudentinfo($id){

		$data = DB::table('studentinfochart')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('studentinfochart')->where('id',$id)->delete();

	}




	public function addinfrastructure(){

		$view = DB::table('infrastructure')->first();
		return view('admin.websiteinfo.infrastructure', compact('view'));

	}

	public function getinfrastructure(){

		$view = DB::table('infrastructure')->first();
		return response()->json($view);

	}


	public function infrastructureupdate(Request $request,$id){

		$data = array();
		$data['details'] = $request->details;

		$view = DB::table('infrastructure')->where('id',$id)->update($data);
	}









	public function addyearlyworkingplan(){

		$view = DB::table('yearlyworkingplan')->get();
		return view('admin.websiteinfo.yearlyworkingplan', compact('view'));

	}



	public function insertyearlyworkingplan(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('yearlyworkingplan')
			->insert($data);
			$notification=array(
				'messege'=>'Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('yearlyworkingplan')
			->insert($data);
			$notification=array(
				'messege'=>'Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}




	public function deleteyearlyworkingplan($id){

		$data = DB::table('yearlyworkingplan')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('yearlyworkingplan')->where('id',$id)->delete();

	}



	public function addlistmember(){

		return view('admin.websiteinfo.lists');

	}


	public function insert_list(Request $request){

		$data = array();
		$data['name']               = $request->name;
		$data['designation']        = $request->designation;
		$data['father_name']        = $request->father_name;
		$data['mother_name']        = $request->mother_name;
		$data['mobile']             = $request->mobile;
		$data['email']              = $request->email;
		$data['duration']           = $request->duration;
		$data['profession']         = $request->profession;
		$data['address']            = $request->address;
		$data['type']               = $request->type;
		$data['status']             = $request->status;
		$newsimage                  = $request->file('image');

		if ($newsimage) {
			$image_one_name= hexdec(uniqid()).'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('lists')->insert($data);
		}
		else{
			DB::table('lists')->insert($data);
		}


		$notification=array(
			'messege'=>'Data Added Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
		

		
	}


	public function viewlistmember(){

		$view = DB::table('lists')->get();
		return view('admin.websiteinfo.viewlistmember', compact('view'));

	}


	public function deletetmember($id){

		$data = DB::table('lists')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('lists')->where('id',$id)->delete();

	}


	public function edit_member($id){

		$data = DB::table('lists')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_member', compact('data'));

	}



	public function update_list(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['name']               = $request->name;
		$data['designation']        = $request->designation;
		$data['father_name']        = $request->father_name;
		$data['mother_name']        = $request->mother_name;
		$data['mobile']             = $request->mobile;
		$data['email']              = $request->email;
		$data['duration']           = $request->duration;
		$data['profession']         = $request->profession;
		$data['address']            = $request->address;
		$data['type']               = $request->type;
		$data['status']             = $request->status;
		$newsimage                  = $request->file('image');

		if ($newsimage) {
			unlink($old_image);
			$image_one_name= hexdec(uniqid()).'.'.$newsimage->getClientOriginalExtension();
			Image::make($newsimage)->save('public/otherimage/'.$image_one_name,50);
			$data['image']='public/otherimage/'.$image_one_name;
			DB::table('lists')->where('id',$id)->update($data);
		}
		else{
			DB::table('lists')->where('id',$id)->update($data);
		}


		$notification=array(
			'messege'=>'Edit Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
		

		
	}



	public function addruleregulation(){

		$view = DB::table('ruleregulation')->first();
		return view('admin.websiteinfo.ruleregulation', compact('view'));

	}

	public function getrulesregulation(){

		$view = DB::table('ruleregulation')->first();
		return response()->json($view);

	}


	public function updateruleregulation(Request $request,$id){

		$data = array();
		$data['title'] = $request->title;
		$data['details']        = $request->details;

		$view = DB::table('ruleregulation')->where('id',$id)->update($data);
	}






	public function addacademiccalender(){
		$view = DB::table('academiccalender')
		->get();
		return view('admin.websiteinfo.academiccalender',compact('view'));
	}



	public function insertacademiccalender(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('academiccalender')
			->insert($data);
			$notification=array(
				'messege'=>'Calender Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('academiccalender')
			->insert($data);
			$notification=array(
				'messege'=>'Calender Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_academiccalender(){
		$view = DB::table('academiccalender')->get();
		return view('admin.websiteinfo.view_academiccalender', compact('view'));

	}





	public function deleteacademiccalender($id){

		$data = DB::table('academiccalender')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('academiccalender')->where('id',$id)->delete();

	}

	public function edit_academiccalender($id){

		$data = DB::table('academiccalender')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_academiccalender',compact('data'));

	}



	public function updateacademiccalender(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('academiccalender')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Calender Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('academiccalender')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Calender Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}







	public function addclassroutine(){
		$view = DB::table('classroutine')
		->leftjoin('add_class','add_class.id','classroutine.class_id')
		->select('classroutine.*','add_class.class_name')
		->get();
		return view('admin.websiteinfo.classroutine',compact('view'));
	}



	public function insertclassroutine(Request $request){

		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('classroutine')
			->insert($data);
			$notification=array(
				'messege'=>'Routine Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('classroutine')
			->insert($data);
			$notification=array(
				'messege'=>'Routine Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_classroutine(){
		$view = DB::table('classroutine')->get();
		return view('admin.websiteinfo.view_classroutine', compact('view'));

	}





	public function deleteclassroutine($id){

		$data = DB::table('classroutine')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('classroutine')->where('id',$id)->delete();

	}

	public function edit_classroutine($id){

		$data = DB::table('classroutine')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_classroutine',compact('data'));

	}



	public function updateclassroutine(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('classroutine')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Routine Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('classroutine')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Routine Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}








	public function addonlineclassroutine(){
		$view = DB::table('onlineclassroutine')
		->leftjoin('add_class','add_class.id','onlineclassroutine.class_id')
		->select('onlineclassroutine.*','add_class.class_name')
		->get();
		return view('admin.websiteinfo.onlineclassroutine',compact('view'));
	}



	public function insertonlineclassroutine(Request $request){

		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('onlineclassroutine')
			->insert($data);
			$notification=array(
				'messege'=>'Routine Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('onlineclassroutine')
			->insert($data);
			$notification=array(
				'messege'=>'Routine Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_onlineclassroutine(){
		$view = DB::table('onlineclassroutine')->get();
		return view('admin.websiteinfo.view_onlineclassroutine', compact('view'));

	}





	public function deleteonlineclassroutine($id){

		$data = DB::table('onlineclassroutine')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('onlineclassroutine')->where('id',$id)->delete();

	}

	public function edit_onlineclassroutine($id){

		$data = DB::table('onlineclassroutine')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_onlineclassroutine',compact('data'));

	}



	public function updateonlineclassroutine(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('onlineclassroutine')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Routine Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('onlineclassroutine')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Routine Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}






	public function addbooklist(){
		$view = DB::table('booklist')
		->leftjoin('add_class','add_class.id','booklist.class_id')
		->select('booklist.*','add_class.class_name')
		->get();
		return view('admin.websiteinfo.booklist',compact('view'));
	}



	public function insertbooklist(Request $request){

		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('booklist')
			->insert($data);
			$notification=array(
				'messege'=>'Routine Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('booklist')
			->insert($data);
			$notification=array(
				'messege'=>'Routine Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_booklist(){
		$view = DB::table('booklist')->get();
		return view('admin.websiteinfo.view_booklist', compact('view'));

	}





	public function deletebooklist($id){

		$data = DB::table('booklist')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('booklist')->where('id',$id)->delete();

	}

	public function edit_booklist($id){

		$data = DB::table('booklist')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_booklist',compact('data'));

	}



	public function updatebooklist(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('booklist')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Routine Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('booklist')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Routine Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}







	public function adduniform(){

		$view = DB::table('uniform')->first();
		return view('admin.websiteinfo.uniform', compact('view'));

	}


	public function updateuniform(Request $request,$id){

		$old_image=$request->old_image;
		$data = array();
		$data['title'] = $request->title;
		$data['details'] = $request->details;
		$image        = $request->file('image');

		if ($image) {

			unlink($old_image);
			$image_name= date('dmy_H_s_i');
			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('uniform')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('uniform')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

	}



	public function addfees(){

		$view = DB::table('fees')->first();
		return view('admin.websiteinfo.fees', compact('view'));

	}



	public function updatefees(Request $request,$id){

		$data = array();
		$data['details'] = $request->details;

		$insert=DB::table('fees')
		->where('id',$id)
		->update($data);
		$notification=array(
			'messege'=>'Update Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}












	public function addholidaylist(){
		$view = DB::table('holidaylist')
		->get();
		return view('admin.websiteinfo.addholidaylist',compact('view'));
	}



	public function insertholidaylist(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('holidaylist')
			->insert($data);
			$notification=array(
				'messege'=>'Holiday List Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('holidaylist')
			->insert($data);
			$notification=array(
				'messege'=>'Holiday List Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_holidaylist(){
		$view = DB::table('holidaylist')->get();
		return view('admin.websiteinfo.view_holidaylist', compact('view'));

	}





	public function deleteholidaylist($id){

		$data = DB::table('holidaylist')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('holidaylist')->where('id',$id)->delete();

	}

	public function edit_holidaylist($id){

		$data = DB::table('holidaylist')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_holidaylist',compact('data'));

	}



	public function updateholidaylist(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('holidaylist')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Holiday List Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('holidaylist')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Holiday List Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}







	public function addProspects(){
		$view = DB::table('prospects')
		->get();
		return view('admin.websiteinfo.Prospects',compact('view'));
	}



	public function insertProspects(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;

		$insert=DB::table('prospects')
		->insert($data);
		$notification=array(
			'messege'=>'Prospects Added Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 

		
	}





	public function view_Prospects(){
		$view = DB::table('prospects')->get();
		return view('admin.websiteinfo.view_Prospects', compact('view'));

	}





	public function deleteProspects($id){

		DB::table('prospects')->where('id',$id)->delete();

	}

	public function edit_Prospects($id){

		$data = DB::table('prospects')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_Prospects',compact('data'));

	}



	public function updateProspects(Request $request,$id){


		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		
		$insert=DB::table('prospects')->where('id', $id)->update($data);
		$notification=array(
			'messege'=>'Prospects Update Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 



		
	}









	public function addAdmissionrules(){
		$view = DB::table('admissionrules')
		->get();
		return view('admin.websiteinfo.Admissionrules',compact('view'));
	}



	public function insertAdmissionrules(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;

		$insert=DB::table('admissionrules')
		->insert($data);
		$notification=array(
			'messege'=>'Admissionrules Added Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 

		
	}





	public function view_Admissionrules(){
		$view = DB::table('admissionrules')->get();
		return view('admin.websiteinfo.view_Admissionrules', compact('view'));

	}





	public function deleteAdmissionrules($id){

		DB::table('admissionrules')->where('id',$id)->delete();

	}

	public function edit_Admissionrules($id){

		$data = DB::table('admissionrules')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_Admissionrules',compact('data'));

	}



	public function updateAdmissionrules(Request $request,$id){


		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		
		$insert=DB::table('admissionrules')->where('id', $id)->update($data);
		$notification=array(
			'messege'=>'Admissionrules Update Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 



		
	}









	public function addAdmissionprocedure(){
		$view = DB::table('admissionprocedure')
		->get();
		return view('admin.websiteinfo.Admissionprocedure',compact('view'));
	}



	public function insertAdmissionprocedure(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;

		$insert=DB::table('admissionprocedure')
		->insert($data);
		$notification=array(
			'messege'=>'Admissionprocedure Added Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 

		
	}





	public function view_Admissionprocedure(){
		$view = DB::table('admissionprocedure')->get();
		return view('admin.websiteinfo.view_Admissionprocedure', compact('view'));

	}





	public function deleteAdmissionprocedure($id){

		DB::table('admissionprocedure')->where('id',$id)->delete();

	}

	public function edit_Admissionprocedure($id){

		$data = DB::table('admissionprocedure')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_Admissionprocedure',compact('data'));

	}



	public function updateAdmissionprocedure(Request $request,$id){


		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		
		$insert=DB::table('admissionprocedure')->where('id', $id)->update($data);
		$notification=array(
			'messege'=>'Admissionprocedure Update Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 



		
	}





	public function addTransferprocedure(){
		$view = DB::table('transferprocedure')
		->get();
		return view('admin.websiteinfo.Transferprocedure',compact('view'));
	}



	public function insertTransferprocedure(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;

		$insert=DB::table('transferprocedure')
		->insert($data);
		$notification=array(
			'messege'=>'Transferprocedure Added Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 

		
	}





	public function view_Transferprocedure(){
		$view = DB::table('transferprocedure')->get();
		return view('admin.websiteinfo.view_Transferprocedure', compact('view'));

	}





	public function deleteTransferprocedure($id){

		DB::table('transferprocedure')->where('id',$id)->delete();

	}

	public function edit_Transferprocedure($id){

		$data = DB::table('transferprocedure')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_Transferprocedure',compact('data'));

	}



	public function updateTransferprocedure(Request $request,$id){


		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		
		$insert=DB::table('transferprocedure')->where('id', $id)->update($data);
		$notification=array(
			'messege'=>'Transferprocedure Update Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 



		
	}










	public function addAdmissionresult(){
		$view = DB::table('admissionresult')
		->get();
		return view('admin.websiteinfo.Admissionresult',compact('view'));
	}



	public function insertAdmissionresult(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('admissionresult')
			->insert($data);
			$notification=array(
				'messege'=>'Result Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('admissionresult')
			->insert($data);
			$notification=array(
				'messege'=>'Result Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_Admissionresult(){
		$view = DB::table('admissionresult')->get();
		return view('admin.websiteinfo.view_Admissionresult', compact('view'));

	}





	public function deleteAdmissionresult($id){

		$data = DB::table('admissionresult')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('admissionresult')->where('id',$id)->delete();

	}

	public function edit_Admissionresult($id){

		$data = DB::table('admissionresult')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_Admissionresult',compact('data'));

	}



	public function updateAdmissionresult(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('admissionresult')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Result Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('admissionresult')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Result Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}









	public function addAdmissiontestquestion(){
		$view = DB::table('admissiontestquestion')
		->get();
		return view('admin.websiteinfo.Admissiontestquestion',compact('view'));
	}



	public function insertAdmissiontestquestion(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('admissiontestquestion')
			->insert($data);
			$notification=array(
				'messege'=>'Result Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('admissiontestquestion')
			->insert($data);
			$notification=array(
				'messege'=>'Result Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_Admissiontestquestion(){
		$view = DB::table('admissiontestquestion')->get();
		return view('admin.websiteinfo.view_Admissiontestquestion', compact('view'));

	}





	public function deleteAdmissiontestquestion($id){

		$data = DB::table('admissiontestquestion')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('admissiontestquestion')->where('id',$id)->delete();

	}

	public function edit_Admissiontestquestion($id){

		$data = DB::table('admissiontestquestion')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_Admissiontestquestion',compact('data'));

	}



	public function updateAdmissiontestquestion(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('admissiontestquestion')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Result Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('admissiontestquestion')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Result Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}





	public function addexamrules(){

		$view = DB::table('examrules')->first();
		return view('admin.websiteinfo.examrules', compact('view'));

	}

	public function getexamrules(){

		$view = DB::table('examrules')->first();
		return response()->json($view);

	}


	public function examrulesupdate(Request $request,$id){

		$data = array();
		$data['details'] = $request->details;

		$view = DB::table('examrules')->where('id',$id)->update($data);
	}










	public function addexamroutine(){
		$view = DB::table('examroutine')
		->leftjoin('add_class','add_class.id','examroutine.class_id')
		->select('examroutine.*','add_class.class_name')
		->get();
		return view('admin.websiteinfo.examroutine',compact('view'));
	}



	public function insertexamroutine(Request $request){

		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('examroutine')
			->insert($data);
			$notification=array(
				'messege'=>'Routine Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('examroutine')
			->insert($data);
			$notification=array(
				'messege'=>'Routine Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_examroutine(){
		$view = DB::table('examroutine')->get();
		return view('admin.websiteinfo.view_examroutine', compact('view'));

	}





	public function deleteexamroutine($id){

		$data = DB::table('examroutine')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('examroutine')->where('id',$id)->delete();

	}

	public function edit_examroutine($id){

		$data = DB::table('examroutine')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_examroutine',compact('data'));

	}



	public function updateexamroutine(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('examroutine')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Routine Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('examroutine')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Routine Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}











	public function addsyllabas(){
		$view = DB::table('syllabas')
		->leftjoin('add_class','add_class.id','syllabas.class_id')
		->select('syllabas.*','add_class.class_name')
		->get();
		return view('admin.websiteinfo.syllabas',compact('view'));
	}



	public function insertsyllabas(Request $request){

		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('syllabas')
			->insert($data);
			$notification=array(
				'messege'=>'Syllabas Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('syllabas')
			->insert($data);
			$notification=array(
				'messege'=>'Syllabas Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_syllabas(){
		$view = DB::table('syllabas')->get();
		return view('admin.websiteinfo.view_syllabas', compact('view'));

	}





	public function deletesyllabas($id){

		$data = DB::table('syllabas')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('syllabas')->where('id',$id)->delete();

	}

	public function edit_syllabas($id){

		$data = DB::table('syllabas')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_syllabas',compact('data'));

	}



	public function updatesyllabas(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('syllabas')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Syllabas Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('syllabas')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'Syllabas Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}











	public function addlessonplan(){
		$view = DB::table('lessonplan')
		->leftjoin('add_class','add_class.id','lessonplan.class_id')
		->select('lessonplan.*','add_class.class_name')
		->get();
		return view('admin.websiteinfo.lessonplan',compact('view'));
	}



	public function insertlessonplan(Request $request){

		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('lessonplan')
			->insert($data);
			$notification=array(
				'messege'=>'lessonplan Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('lessonplan')
			->insert($data);
			$notification=array(
				'messege'=>'lessonplan Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_lessonplan(){
		$view = DB::table('lessonplan')->get();
		return view('admin.websiteinfo.view_lessonplan', compact('view'));

	}





	public function deletelessonplan($id){

		$data = DB::table('lessonplan')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('lessonplan')->where('id',$id)->delete();

	}

	public function edit_lessonplan($id){

		$data = DB::table('lessonplan')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_lessonplan',compact('data'));

	}



	public function updatelessonplan(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('lessonplan')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'lessonplan Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('lessonplan')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'lessonplan Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}









	public function addsuggestion(){
		$view = DB::table('suggestion')
		->leftjoin('add_class','add_class.id','suggestion.class_id')
		->select('suggestion.*','add_class.class_name')
		->get();
		return view('admin.websiteinfo.suggestion',compact('view'));
	}



	public function insertsuggestion(Request $request){

		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('suggestion')
			->insert($data);
			$notification=array(
				'messege'=>'suggestion Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('suggestion')
			->insert($data);
			$notification=array(
				'messege'=>'suggestion Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_suggestion(){
		$view = DB::table('suggestion')->get();
		return view('admin.websiteinfo.view_suggestion', compact('view'));

	}





	public function deletesuggestion($id){

		$data = DB::table('suggestion')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('suggestion')->where('id',$id)->delete();

	}

	public function edit_suggestion($id){

		$data = DB::table('suggestion')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_suggestion',compact('data'));

	}



	public function updatesuggestion(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['class_id']     = $request->class_id;
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('suggestion')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'suggestion Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('suggestion')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'suggestion Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}










	public function addmagazine(){
		$view = DB::table('magazine')
		->get();
		return view('admin.websiteinfo.magazine',compact('view'));
	}



	public function insertmagazine(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('magazine')
			->insert($data);
			$notification=array(
				'messege'=>'magazine Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('magazine')
			->insert($data);
			$notification=array(
				'messege'=>'magazine Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_magazine(){
		$view = DB::table('magazine')->get();
		return view('admin.websiteinfo.view_magazine', compact('view'));

	}





	public function deletemagazine($id){

		$data = DB::table('magazine')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('magazine')->where('id',$id)->delete();

	}

	public function edit_magazine($id){

		$data = DB::table('magazine')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_magazine',compact('data'));

	}



	public function updatemagazine(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
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
			$insert=DB::table('magazine')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'magazine Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('magazine')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'magazine Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}












	public function addsports(){
		$view = DB::table('sports')
		->get();
		return view('admin.websiteinfo.sports',compact('view'));
	}



	public function insertsports(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('sports')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('sports')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_sports(){
		$view = DB::table('sports')->get();
		return view('admin.websiteinfo.view_sports', compact('view'));

	}





	public function deletesports($id){

		$data = DB::table('sports')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('sports')->where('id',$id)->delete();

	}

	public function edit_sports($id){

		$data = DB::table('sports')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_sports',compact('data'));

	}



	public function updatesports(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('sports')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('sports')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}








	public function addcultural(){
		$view = DB::table('cultural')
		->get();
		return view('admin.websiteinfo.cultural',compact('view'));
	}



	public function insertcultural(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('cultural')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('cultural')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_cultural(){
		$view = DB::table('cultural')->get();
		return view('admin.websiteinfo.view_cultural', compact('view'));

	}





	public function deletecultural($id){

		$data = DB::table('cultural')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('cultural')->where('id',$id)->delete();

	}

	public function edit_cultural($id){

		$data = DB::table('cultural')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_cultural',compact('data'));

	}



	public function updatecultural(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('cultural')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('cultural')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}






	public function addscouts(){
		$view = DB::table('scouts')
		->get();
		return view('admin.websiteinfo.scouts',compact('view'));
	}



	public function insertscouts(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('scouts')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('scouts')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_scouts(){
		$view = DB::table('scouts')->get();
		return view('admin.websiteinfo.view_scouts', compact('view'));

	}





	public function deletescouts($id){

		$data = DB::table('scouts')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('scouts')->where('id',$id)->delete();

	}

	public function edit_scouts($id){

		$data = DB::table('scouts')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_scouts',compact('data'));

	}



	public function updatescouts(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('scouts')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('scouts')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}










	public function addBNCC(){
		$view = DB::table('bncc')
		->get();
		return view('admin.websiteinfo.BNCC',compact('view'));
	}



	public function insertBNCC(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('bncc')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('bncc')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_BNCC(){
		$view = DB::table('bncc')->get();
		return view('admin.websiteinfo.view_BNCC', compact('view'));

	}





	public function deleteBNCC($id){

		$data = DB::table('bncc')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('bncc')->where('id',$id)->delete();

	}

	public function edit_BNCC($id){

		$data = DB::table('bncc')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_BNCC',compact('data'));

	}



	public function updateBNCC(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('bncc')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('bncc')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}











	public function addred_crescent(){
		$view = DB::table('red_crescent')
		->get();
		return view('admin.websiteinfo.red_crescent',compact('view'));
	}



	public function insertred_crescent(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('red_crescent')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('red_crescent')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_red_crescent(){
		$view = DB::table('red_crescent')->get();
		return view('admin.websiteinfo.view_red_crescent', compact('view'));

	}





	public function deletered_crescent($id){

		$data = DB::table('red_crescent')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('red_crescent')->where('id',$id)->delete();

	}

	public function edit_red_crescent($id){

		$data = DB::table('red_crescent')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_red_crescent',compact('data'));

	}



	public function updatered_crescent(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('red_crescent')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('red_crescent')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}











	public function addstudent_cafinet(){
		$view = DB::table('student_cafinet')
		->get();
		return view('admin.websiteinfo.student_cafinet',compact('view'));
	}



	public function insertstudent_cafinet(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('student_cafinet')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('student_cafinet')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_student_cafinet(){
		$view = DB::table('student_cafinet')->get();
		return view('admin.websiteinfo.view_student_cafinet', compact('view'));

	}





	public function deletestudent_cafinet($id){

		$data = DB::table('student_cafinet')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('student_cafinet')->where('id',$id)->delete();

	}

	public function edit_student_cafinet($id){

		$data = DB::table('student_cafinet')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_student_cafinet',compact('data'));

	}



	public function updatestudent_cafinet(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('student_cafinet')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('student_cafinet')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}








	public function adddebate(){
		$view = DB::table('debate')
		->get();
		return view('admin.websiteinfo.debate',compact('view'));
	}



	public function insertdebate(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('debate')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('debate')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_debate(){
		$view = DB::table('debate')->get();
		return view('admin.websiteinfo.view_debate', compact('view'));

	}





	public function deletedebate($id){

		$data = DB::table('debate')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('debate')->where('id',$id)->delete();

	}

	public function edit_debate($id){

		$data = DB::table('debate')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_debate',compact('data'));

	}



	public function updatedebate(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('debate')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('debate')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}













	public function addlanguage_club(){
		$view = DB::table('language_club')
		->get();
		return view('admin.websiteinfo.language_club',compact('view'));
	}



	public function insertlanguage_club(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('language_club')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('language_club')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_language_club(){
		$view = DB::table('language_club')->get();
		return view('admin.websiteinfo.view_language_club', compact('view'));

	}





	public function deletelanguage_club($id){

		$data = DB::table('language_club')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('language_club')->where('id',$id)->delete();

	}

	public function edit_language_club($id){

		$data = DB::table('language_club')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_language_club',compact('data'));

	}



	public function updatelanguage_club(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('language_club')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('language_club')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}













	public function addstudy_tour(){
		$view = DB::table('study_tour')
		->get();
		return view('admin.websiteinfo.study_tour',compact('view'));
	}



	public function insertstudy_tour(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('study_tour')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('study_tour')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_study_tour(){
		$view = DB::table('study_tour')->get();
		return view('admin.websiteinfo.view_study_tour', compact('view'));

	}





	public function deletestudy_tour($id){

		$data = DB::table('study_tour')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('study_tour')->where('id',$id)->delete();

	}

	public function edit_study_tour($id){

		$data = DB::table('study_tour')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_study_tour',compact('data'));

	}



	public function updatestudy_tour(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('study_tour')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('study_tour')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}













	public function addscience_fair(){
		$view = DB::table('science_fair')
		->get();
		return view('admin.websiteinfo.science_fair',compact('view'));
	}



	public function insertscience_fair(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('science_fair')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('science_fair')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_science_fair(){
		$view = DB::table('science_fair')->get();
		return view('admin.websiteinfo.view_science_fair', compact('view'));

	}





	public function deletescience_fair($id){

		$data = DB::table('science_fair')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('science_fair')->where('id',$id)->delete();

	}

	public function edit_science_fair($id){

		$data = DB::table('science_fair')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_science_fair',compact('data'));

	}



	public function updatescience_fair(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('science_fair')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('science_fair')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}













	public function addcomputer_club(){
		$view = DB::table('computer_club')
		->get();
		return view('admin.websiteinfo.computer_club',compact('view'));
	}



	public function insertcomputer_club(Request $request){

		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
		$image                = $request->file('image');

		if ($image) {
			$image_name= date('dmy_H_s_i');

			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='public/otherimage/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('computer_club')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('computer_club')
			->insert($data);
			$notification=array(
				'messege'=>'News Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}

		
	}



	public function view_computer_club(){
		$view = DB::table('computer_club')->get();
		return view('admin.websiteinfo.view_computer_club', compact('view'));

	}





	public function deletecomputer_club($id){

		$data = DB::table('computer_club')->where('id',$id)->first();
		$image = $data->image;
		if($image){
			unlink($image);
		}

		DB::table('computer_club')->where('id',$id)->delete();

	}

	public function edit_computer_club($id){

		$data = DB::table('computer_club')->where('id',$id)->first();
		return view('admin.websiteinfo.edit_computer_club',compact('data'));

	}



	public function updatecomputer_club(Request $request,$id){

		$old_image = $request->old_image;
		$data = array();
		$data['date']         = $request->date;
		$data['title']        = $request->title;
		$data['details']      = $request->details;
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
			$insert=DB::table('computer_club')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}else{
			$insert=DB::table('computer_club')->where('id', $id)->update($data);
			$notification=array(
				'messege'=>'News Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification); 
		}


		
	}




	public function our_backup_database(){

        //ENTER THE RELEVANT INFO BELOW
		$mysqlHostName      = env('DB_HOST');
		$mysqlUserName      = env('DB_USERNAME');
		$mysqlPassword      = env('DB_PASSWORD');
		$DbName             = env('DB_DATABASE');
		$backup_name        = "mybackup.sql";
        $tables             = array("about_school","academiccalender","add_class","add_group","add_section","admissionprocedure","admissionresult","admissionrules","admissiontestquestion","booklist","citizencharter","classroutine","contact_us","event","examroutine","examrules","failed_jobs","fees","founder_message","guidlines","history","holidaylist","hostelinformation","infrastructure","lessonplan","library_information","lists","magazine","migrations","mission_and_vision","notice","onlineclassroutine","password_resets","photo_gallery","presidant_message","principle_message","prospects","ruleregulation","schoolinf","settings","studentinfochart","suggestion","syllabas","teacher_staff","transferprocedure","uniform","usefull_link","users","viceprinciple_message","video_gallery","yearlyworkingplan",'sports','cultural','scouts','girls_guide','bncc','red_crescent','student_cafinet','debate','language_club','study_tour','science_fair','computer_club'); //here your tables...

        $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $get_all_table_query = "SHOW TABLES";
        $statement = $connect->prepare($get_all_table_query);
        $statement->execute();
        $result = $statement->fetchAll();


        $output = '';
        foreach($tables as $table)
        {
        	$show_table_query = "SHOW CREATE TABLE " . $table . "";
        	$statement = $connect->prepare($show_table_query);
        	$statement->execute();
        	$show_table_result = $statement->fetchAll();

        	foreach($show_table_result as $show_table_row)
        	{
        		$output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
        	}
        	$select_query = "SELECT * FROM " . $table . "";
        	$statement = $connect->prepare($select_query);
        	$statement->execute();
        	$total_row = $statement->rowCount();

        	for($count=0; $count<$total_row; $count++)
        	{
        		$single_result = $statement->fetch(\PDO::FETCH_ASSOC);
        		$table_column_array = array_keys($single_result);
        		$table_value_array = array_values($single_result);
        		$output .= "\nINSERT INTO $table (";
        		$output .= "" . implode(", ", $table_column_array) . ") VALUES (";
        		$output .= "'" . implode("','", $table_value_array) . "');\n";
        	}
        }
        $file_name = $DbName.'__'. date('d_M_Y') . '.sql';
        $file_handle = fopen($file_name, 'w+');
        fwrite($file_handle, $output);
        fclose($file_handle);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file_name));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_name));
        ob_clean();
        flush();
        readfile($file_name);
        unlink($file_name);


    }








	public function addgirls_guide(){

		$view = DB::table('girls_guide')->first();
		return view('admin.websiteinfo.girls_guide', compact('view'));

	}

	public function getgirls_guide(){

		$view = DB::table('girls_guide')->first();
		return response()->json($view);

	}


	public function girls_guideupdate(Request $request,$id){

		$data = array();
		$data['details'] = $request->details;

		$view = DB::table('girls_guide')->where('id',$id)->update($data);
	}



	public function addphotos()
	{
		$data = DB::table('mujib_corner_photos')->get();
		$sl=1;
		return view('admin.mujibphotos.add_photos',compact('data','sl'));
	}

	public function addMujibPhoto(Request $request)
	{
		// return $request->all();
		$validated = $request->validate([
			'title'=>'required',
			'image'=>'required',
		]);

		$insert = DB::table('mujib_corner_photos')->insertGetId($request->except('_token','image'));
		
		$file = $request->file('image');
		if($file)
		{
			$image_name = $insert.'.'.$file->getClientOriginalExtension();

			$file->move(public_path().'/mujib100/pages/image',$image_name);

			DB::table('mujib_corner_photos')->where('id',$insert)->update(['image'=>$image_name]);
		}

		if($insert)
		{
			$notification=array(
				'messege'=>'Photo Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);
		}
		else
		{
			$notification=array(
				'messege'=>'Photo Added Unsuccessfull',
				'alert-type'=>'danger'
			);
			return Redirect()->back()->with($notification);
		}
	}

	public function editphoto($id)
	{
		$data = DB::table('mujib_corner_photos')->where('id',$id)->first();
		return view('admin.mujibphotos.edit_photos',compact('data'));
	}

	public function updateMujibPhoto(Request $request,$id)
	{
		// return $request->all();
		
		if(isset($request->type))
		{
			$update = DB::table('mujib_corner_photos')->where('id',$id)->update($request->except('_token','image'));
		}
		else
		{
			$update = DB::table('mujib_corner_photos')->where('id',$id)->update([
				'title'=>$request->title,
				'details'=>$request->details,
				'type'=>'0',
			]);
		}

		$file = $request->file('image');
		if($file)
		{
			$image = DB::table('mujib_corner_photos')->where('id',$id)->first();

			$path = public_path().'/mujib100/pages/image/'.$image->image;

			if(file_exists($path))
			{
				unlink($path);
			}

		}

		if($file)
		{
			$image_name = $id.'.'.$file->getClientOriginalExtension();

			$file->move(public_path().'/mujib100/pages/image',$image_name);

			DB::table('mujib_corner_photos')->where('id',$id)->update(['image'=>$image_name]);
		}

		if($update)
		{
			$notification=array(
				'messege'=>'Photo Update Successfull',
				'alert-type'=>'info'
			);
			return Redirect()->back()->with($notification);
		}
		else
		{
			$notification=array(
				'messege'=>'Photo Update Unsuccessfull',
				'alert-type'=>'danger'
			);
			return Redirect()->back()->with($notification);
		}

	}

	public function deletePhoto($id)
	{
		$image = DB::table('mujib_corner_photos')->where('id',$id)->first();

		$path = public_path().'/mujib100/pages/image/'.$image->image;

		if(file_exists($path))
		{
			unlink($path);
		}

		$delete = DB::table('mujib_corner_photos')->where('id',$id)->delete();

		if($delete)
		{
			$notification=array(
				'messege'=>'Photo Update Successfull',
				'alert-type'=>'info'
			);
			return Redirect()->back()->with($notification);
		}
		else
		{
			$notification=array(
				'messege'=>'Photo Update Unsuccessfull',
				'alert-type'=>'danger'
			);
			return Redirect()->back()->with($notification);
		}
	}



	public function addprincipalintro()
	{
		$view = DB::table('principal_intro')->first();
		return view('admin.principal_bio.principal_intro',compact('view'));
		// return 1;
	}

	public function principalintro_store(Request $request,$id)
	{
		// return $request->all();
		$old_image = $request->old_image;
		$data = array();
		$data['name']       = $request->name;
		$data['title']      = $request->title;
		$data['description']    = $request->description;
		$newimage          = $request->file('image');

		if ($newimage) {
		    

			 if(file_exists($old_image))
			 {
			     unlink($old_image);
			 }
			//  return  0;
			  
			  $image_one_name= uniqid().'.'.$newimage->getClientOriginalExtension();
			  Image::make($newimage)->save('public/otherimage/'.$image_one_name,50);
			  $data['image']='public/otherimage/'.$image_one_name;
			  DB::table('principal_intro')->where('id', $id)->update($data);
		  }
		  else{
			  DB::table('principal_intro')->where('id', $id)->update($data);
		  }
  
		  $notification=array(
			  'messege'=>'Update Successfull',
			  'alert-type'=>'info'
		  );
		  return Redirect()->back()->with($notification);
	}

	public function addviceprincipalintro()
	{
		$view = DB::table('viceprincipal_intro')->first();
		return view('admin.principal_bio.viceprincipal_intro',compact('view'));
	}
	public function viceprincipalintro_store(Request $request,$id)
	{
		$old_image = $request->old_image;
		$data = array();
		$data['name']       = $request->name;
		$data['title']      = $request->title;
		$data['description']    = $request->description;
		$newimage          = $request->file('image');

		if ($newimage) {
		    

			 if(file_exists($old_image))
			 {
			     unlink($old_image);
			 }
			//  return  0;
			  
			  $image_one_name= uniqid().'.'.$newimage->getClientOriginalExtension();
			  Image::make($newimage)->save('public/otherimage/'.$image_one_name,50);
			  $data['image']='public/otherimage/'.$image_one_name;
			  DB::table('viceprincipal_intro')->where('id', $id)->update($data);
		  }
		  else{
			  DB::table('viceprincipal_intro')->where('id', $id)->update($data);
		  }
  
		  $notification=array(
			  'messege'=>'Update Successfull',
			  'alert-type'=>'info'
		  );
		  return Redirect()->back()->with($notification);
	}








}
