<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BackendController;

class UserController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user=User::where('groups','1')->get();
        return view('User.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate(
            $request,
            [
                'name' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'image'=>'required|mimes:jpeg,jpg,png',
                're_password' => 'required|same:password',
                'phone'=>'required|numeric',
            ],
            [
                'name.required' => 'Tên không được để trống',
                're_password.required'=>'Nhập lại mật khẩu không được để trống',
                're_password.same' => 'Nhập lại mật khẩu không đúng',
                'password.required'=>'Mật khẩu không được để trống',
                'phone.required'=>'Số điện thoại không được để trống',
                'image.required'=>'Ảnh không được để trống',
                'image.mimes'=>'Không đúng định dạng file ảnh',
                'phone.numeric'=>'Số điện thoại là số',
                'phone.max'=>'Số điện thoại không vượt quá 11 sô',
                'email.required'=>'Xin nhập email',
                'email.email'=>'Xin nhập đúng định dạng email',
                'email.unique'=>'Email đã tồn tại'
            ]
        );
        $image='';
        if($request->has('image')){
            $file = $request->image;
            $file->move(base_path('/Uploads/image'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }
        if(User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $image,
            'groups'=>1,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'status' => $request->status,
        ])){
            return redirect()->route('backend.taikhoan')->with('success','Thêm mới  thành công');
        }else
        {
            return redirect()->back()->with('error','Thêm mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('User.edit',['user'=>User::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
         $this->validate(
            $request,
            [
                'name' => 'required|min:3|max:50',
                'email' => 'required|email',
                'image'=>'image',
                're_password' => 'same:password',
                'phone'=>'required|numeric',
            ],
            [
                'name.required' => 'Tên không được để trống',
                're_password.same' => 'Nhập lại mật khẩu không đúng',
                'phone.required'=>'Số điện thoại không được để trống',
                'image.image'=>'Không đúng định dạng file ảnh',
                'phone.numeric'=>'Số điện thoại là số',
                'email.required'=>'Xin nhập email',
                'email.email'=>'Xin nhập đúng định dạng email',
            ]
        );
         $image=User::find($id)->image;
         if($request->has('image')){
            $file = $request->image;
            $file->move(base_path('/Uploads/image'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();           
         }
         $password=User::find($id)->password;
         if ($request->has('password')) {
             $password=bcrypt($request->password);
         }
        if(User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $image,
            'groups'=>1,
            'password' => $password,
            'phone' => $request->phone,
            'status' => $request->status,
        ])){
            return redirect()->route('backend.taikhoan')->with('success','Cập nhật thành công');
        }else
        {
            return redirect()->back()->with('error','Cập nhật thất bại thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::destroy($id);
        return redirect()->route('backend.taikhoan')->with('success','Xóa thành công');
    }
}
