<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BackendController;

class CategoryController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category=Category::all();
        return view('Category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=Category::where('parent',0)->get();
        return view('Category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $this->validate($request,[
            'name'=>'required|max:50|unique:Category,name',
            'image'=>'required|mimes:jpeg,jpg,png'
       ],
       [
            'name.required'=>'Danh mục không được để trống',
            'name.max'=>'Danh mục không vượt quá 50 kí tự',
            'name.unique'=>'Danh mục đã tồn tại',
            'image.required' => 'Hình ảnh không được để trống',
            'image.mimes' =>'Không đúng định dạng file ảnh'
       ]);
       $image='';
        if($request->has('image')){
            $file = $request->image;
            $file->move(base_path('/Uploads/image'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }
        if(Category::create([
            'name' =>$request->name,
            'image' =>$image,
            'parent'=>$request->parent,
            'status'=>$request->status
        ])){
           return redirect()->route('backend.danhmuc')->with('success','Thêm mới thành công');
        }else
        {
            return redirect()->back()->with('error','Thêm mới thất bại');
        }    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $category=Category::where('parent',0)->get();
        $cat=Category::find($id);
        return view('Category.edit',compact('category','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $this->validate($request,
            [
                'name'=>'required|max:50',
                'image'=>'mimes:jpeg,jpg,png'
            ],
            [
                'name.required'=>'Danh mục không được để trống',
                'name.max'=>'Danh mục không vượt quá 50 kí tự',
                'image.required' => 'Hình ảnh không được để trống',
                'image.mimes' =>'Không đúng định dạng file ảnh'
            ]
        );
        $image=Category::find($id)->image;
         if($request->has('image')){
            $file = $request->image;
            $file->move(base_path('/Uploads/image'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();           
         }
        if(Category::where('id',$id)->update([
            'name' =>$request->name,
            'image' =>$image,
            'parent'=>$request->parent,
            'status'=>$request->status
        ])){
           return redirect()->route('backend.danhmuc')->with('success','Cập nhật thành công');
        }else
        {
            return redirect()->back()->with('error','Cập nhật thất bại');
        } 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          if(Category::destroy($id)){
            return redirect()->route('backend.danhmuc')->with('success','Xóa thành công');
        }else
        {
            return redirect()->route('backend.danhmuc')->with('error','Xóa thất bại');
        }
    }
}
