<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Carbon\Carbon;
use App\Models\Takejob;
use App\Models\Work;
use App\Models\User;
use App\Http\Controllers\BackendController;

class HomeController extends BackendController
{
    public function index()
    {
    	$tongviecdang = Work::where('status','!=','1')->count();
    	$tongvieccanpheduyet = Work::where('status','=','0')->count();
    	$new=Work::where('status',0)->get();
    	return view('Home.home',compact('new','tongviecdang','tongvieccanpheduyet'));
    }

    public function pheduyet($id)
    {
        $idthue = Work::find($id)->id_nguoithue;
        $user = User::find($idthue);
        $work =  Work::find($id);
        $data = ['name' => $work->name];
        $this->email = $user->email;
        Mail::send('Email.dangviec', $data, function ($message) {
            $message->from('lequochuysv@gmail.com', 'Freelance');
            $message->to($this->email)->subject('Đăng việc thành công trên Freelance');
        });
        Work::where('id',$id)->update(['status'=>1]);
        return redirect()->route('backend.home')->with('success','Phê duyệt thành công');
    } 
}