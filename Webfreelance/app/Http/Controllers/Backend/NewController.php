<?php

namespace App\Http\Controllers\Backend;
use Mail;
use Carbon\Carbon;
use App\Models\Takejob;
use App\Models\Work;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BackendController;

class NewController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
            
    }

    public function tincanpheduyet()
    {
        $new=Work::where('status',0)->get();

         return view('news.tincanpheduyet',compact('new'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chitiettinpheduyet($id)
    {
        //
         $new=Work::find($id);

         return view('news.chitiettinpheduyet',compact('new'));
    }
    public function pheduyet($id)
    {
        Work::where('id',$id)->update(['status'=>1]);
        $idthue = Work::find($id)->id_nguoithue;
        $user = User::find($idthue);
        $work =  Work::find($id);
        $data = ['name' => $work->name];
        $this->email = $user->email;
        Mail::send('Email.dangviec', $data, function ($message) {
            $message->from('lequochuysv@gmail.com', 'Freelance');
            $message->to($this->email)->subject('Đăng việc thành công trên Freelance');
        });
        return redirect()->route('backend.tincanpheduyet')->with('success','Phê duyệt thành công');
    }
    public function downloadtinpheduyet($id)
    {
        //
        $customer=Work::find($id);
        $file_path = base_path('Uploads/document/'.$customer->tailieu);
        return response()->download($file_path);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tindangdang()
    {
         $new=Work::where('status',1)->get();
         return view('news.tindangdang',compact('new'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function chitiettindangdang($id)
    {
        //
        // dd('hello');
        $nguoinhan=Takejob::where('id_work',$id)->get();
        $new=Work::find($id);
        return view('news.chitiettindangdang',compact('new','nguoinhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function tinhethan()
    {
        //
         $new=Work::where('status',2)->get();
         return view('news.tinhethan',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function chitiettinhethan($id)
    {
        //
        $nguoinhan=Takejob::where('id_work',$id)->get();
        $new=Work::find($id);
        return view('news.chitiettinhethan',compact('new','nguoinhan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idthue = Work::find($id)->id_nguoithue;
        $user = User::find($idthue);
        $work =  Work::find($id);
        $data = ['name' => $work->name];
        $this->email = $user->email;
        Mail::send('Email.xoaviec', $data, function ($message) {
            $message->from('lequochuysv@gmail.com', 'Freelance');
            $message->to($this->email)->subject('Xóa việc đăng trên Freelance');
        });
        Work::destroy($id);
        return redirect()->route('backend.tincanpheduyet')->with('success','Xóa thành công');
    }
}
