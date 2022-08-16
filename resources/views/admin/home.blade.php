@extends('admin.index')
@section('content')

@php
  $setting  = DB::table('settings')->first();
  $totaladmin = DB::table('users')->get();
  $totallink = DB::table('usefull_link')->get();
  $totalclass = DB::table('add_class')->get();
  $totalgroup = DB::table('add_group')->get();
  $totalsection = DB::table('add_section')->get();
  $totalnotices = DB::table('notice')->get();
  $totalevent = DB::table('event')->get();
  $totalteacher = DB::table('teacher_staff')->where('type',0)->get();
  $totalstaff = DB::table('teacher_staff')->where('type',1)->get();
  
  
  class BanglaConverter {
    public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

    public static function bn2en($number) {
        return str_replace(self::$bn, self::$en, $number);
    }

    public static function en2bn($number) {
        return str_replace(self::$en, self::$bn, $number);
    }
}

  
  
  @endphp

<!--===========app body start===========-->
<div class="app-body">
	<main class="main-content">
		<div class="container-fluid mt-4">


			<h3 class="font-weight-bold head"><span class="text-warning">{{ $setting->name }}</span></h3><br>


			<!--<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>-->
			<!--<lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_wldncgll.json"  background="transparent"  speed="1"  style="width: 40%;"  loop  autoplay></lottie-player>-->
			
		<div class="row">
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-danger border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body ">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class="icon-people f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">মোট অ্যাডমিন</h6>
                                        <p class="f12 mb-0">{{ BanglaConverter::en2bn(count($totaladmin)) }} জন</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                   
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-success border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class=" icon-badge f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">মোট গুরুত্বপূর্ণ লিংক</h6>
                                        <p class="f12 mb-0">{{ BanglaConverter::en2bn(count($totallink)) }} টি
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                 
                    
                    
                     <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-dark border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class=" icon-badge f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">মোট শ্রেণী সংখ্যা</h6>
                                        <p class="f12 mb-0">{{ BanglaConverter::en2bn(count($totalclass)) }} টি শ্রেণী
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                     <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-info border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class=" icon-badge f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">মোট গ্রুপ</h6>
                                        <p class="f12 mb-0">{{ BanglaConverter::en2bn(count($totalgroup)) }} টি গ্রুপ
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                     <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-warning border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class=" icon-badge f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">মোট বিভাগ</h6>
                                        <p class="f12 mb-0">{{ BanglaConverter::en2bn(count($totalsection)) }} টি বিভাগ
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                     <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-primary border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class=" icon-badge f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">মোট নোটিশ</h6>
                                        <p class="f12 mb-0">{{ BanglaConverter::en2bn(count($totalnotices)) }} টি নোটিশ
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                     <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-success border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class=" icon-badge f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">মোট ইভেন্ট</h6>
                                        <p class="f12 mb-0">{{ BanglaConverter::en2bn(count($totalevent)) }} টি ইভেন্ট
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-dark border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class=" icon-badge f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">মোট শিক্ষক</h6>
                                        <p class="f12 mb-0">{{ BanglaConverter::en2bn(count($totalteacher)) }} জন শিক্ষক
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                         <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card bg-info border-0 text-light pt-3 pb-3 h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-3">
                                        <i class=" icon-badge f30"></i>
                                    </div>
                                    <div class=" col-9">
                                        <h6 class="m-0 text-light">মোট কর্মচারী</h6>
                                        <p class="f12 mb-0">{{ BanglaConverter::en2bn(count($totalstaff)) }} জন কর্মচারী
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                
                









		</div>
	</main>
</div>





@endsection