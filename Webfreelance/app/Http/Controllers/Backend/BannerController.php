<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BackendController;

class BannerController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('Banner.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Banner.create');
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
                'link' => 'required',
                'thutu' => 'required|integer',
                'image'=>'required|mimes:jpeg,jpg,png',
            ],
            [
                'name.required' => 'Tên không được để trống',
                'link.required'=>'Đường dẫn không được để trống',
                'image.required'=>'Ảnh không được để trống',
                'image.mimes'=>'Không đúng định dạng file ảnh',
                'thutu.required' => 'Thứ tự không được để trống',
                'thutu.integer'=>'Thứ tự là số',
            ]
        );
        $image='';
        if($request->has('image')){
            $file = $request->image;
            $file->move(base_path('/Uploads/image'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }
        if(Slider::create([
            'name' => $request->name,
            'image' => $image,
            'link' => $request->link,
            'thutu' => $request->thutu,
            'status' => $request->status
        ])){
            return redirect()->route('backend.banner')->with('success','Thêm mới thành công');
        }else
        {
            return redirect()->back()->with('error','Thêm mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return vieW('Banner.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|min:3|max:50',
                'link' => 'required',
                'thutu' => 'required|integer',
                'image'=>'mimes:jpeg,jpg,png',
            ],
            [
                'name.required' => 'Tên không được để trống',
                'link.required'=>'Đường dẫn không được để trống',
                'image.mimes'=>'Không đúng định dạng file ảnh',
                'thutu.required' => 'Thứ tự không được để trống',
                'thutu.integer'=>'Thứ tự là số',
            ]
        );
         $image=Slider::find($id)->image;
         if($request->has('image')){
            $file = $request->image;
            $file->move(base_path('/Uploads/image'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();           
         }
          if(Slider::where('id',$id)->update([
            'name' => $request->name,
            'link' => $request->link,
            'image' => $image,
            'thutu' => $request->thutu,
            'status' => $request->status,
        ])){
            return redirect()->route('backend.banner')->with('success','Cập nhật thành công');
        }else
        {
            return redirect()->back()->with('error','Cập nhật thất bại thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Slider::destroy($id)){
            return redirect()->route('backend.banner')->with('success','Xóa thành công');
        }else
        {
            return redirect()->route('backend.banner')->with('error','Xóa thất bại');
        }
    }
}
