<?php

namespace App\Http\Controllers\Backend;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BackendController;
class CityController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $city=City::all();
        return view('City.index',compact('city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('City.create');
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
        $request->offsetUnset('_token');
       $this->validate($request,[
            'name'=>'required|max:50|unique:Category,name',
       ],
       [
            'name.required'=>'Tên thành phố không được để trống',
            'name.max'=>'Tên thành phố không vượt quá 50 kí tự',
            'name.unique'=>'Tên thành phố đã tồn tại'
       ]);
        if(City::create(
             $request->all()
        )){
           return redirect()->route('backend.thanhpho')->with('success','Thêm mới thành công');
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
        $city=City::find($id);
        return view('City.edit',compact('city'));
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
         $request->offsetUnset('_token');
        $this->validate($request,
            [
                'name'=>'required|max:50',
            ],
            [
                'name.required'=>'Tên danh mục không được để trống',
                'name.max'=>'Tên danh mục không vượt quá 50 kí tự'
            ]
        );
        if(City::where('id',$id)->update(
            $request->all()
        )){
           return redirect()->route('backend.thanhpho')->with('success','Cập nhật thành công');
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
          if(City::destroy($id)){
            return redirect()->route('backend.thanhpho')->with('success','Xóa thành công');
        }else
        {
            return redirect()->route('backend.thanhpho')->with('error','Xóa thất bại');
        }
    }
}
