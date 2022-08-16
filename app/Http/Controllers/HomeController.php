<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class HomeController extends Controller
{

    public function logout () {
        auth()->logout();
        return redirect('/login');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    
       public function createadmin(){
           
           return view('admin.createadmin');
           
       }
    
 
    
    
    public function insertadmin(Request $request){
        
     $validatedData = $request->validate([
        'email' => 'required|unique:users',

    ]);

		$data = array();
		$data['name']          = $request->name;
		$data['email']         = $request->email;
		$data['password']      = Hash::make($request->password);

		$view = DB::table('users')->insert($data);
		$notification=array(
			'messege'=>'New Admin Created Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
		


    }
    
     
       public function viewadmin(){
           
           $data = DB::table("users")->get();
           return view('admin.viewadmin', compact('data'));
           
       }

       public function editadmin($id)
       {
            $data = DB::table('users')->where('id',$id)->first();
            return view('admin.editadmin',compact('data'));
       }
       public function updateadmin(Request $request,$id)
       {
            if($request->password == "null")
            {
                $update = DB::table('users')->where('id',$id)->update([
                    'name'=>$request->name,
                    'email'=>$request->email,
                ]);
                $success=array(
                    'messege'=>'Admin Edit Successfull',
                    'alert-type'=>'info'
                );
                $error=array(
                    'messege'=>'Admin Edit Unsuccessfull',
                    'alert-type'=>'danger'
                );
                if($update)
                {
                    return Redirect()->back()->with($success);
                }
                else
                {
                    return Redirect()->back()->with($error);
                }
            }
            else
            {
                $update = DB::table('users')->where('id',$id)->update([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                ]);
                $success=array(
                    'messege'=>'Admin Edit Successfull',
                    'alert-type'=>'info'
                );
                $error=array(
                    'messege'=>'Admin Edit Unsuccessfull',
                    'alert-type'=>'danger'
                );
                if($update)
                {
                    return Redirect()->back()->with($success);
                }
                else
                {
                    return Redirect()->back()->with($error);
                }
            }
       }
       
             public function deleteadmin($id){
           
           $data = DB::table("users")->where('id',$id)->delete();
          $notification=array(
			'messege'=>'Admin Delete Successfull',
			'alert-type'=>'info'
		);
		return Redirect()->back()->with($notification); 
		
        
           
       }
    
    
    
    
    
}
