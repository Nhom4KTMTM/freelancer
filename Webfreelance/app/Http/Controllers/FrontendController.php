<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Work;
use App\Models\City;
use Illuminate\Http\Request;
use DB;
class FrontendController extends Controller
{
    public function index()
    {

    	// $worktotal = Work::query("SELECT linhvuc, count(linhvuc) as Total FROM `work` GROUP BY (linhvuc) ORDER BY Total DESC LIMIT 2");
    	$worktotal = Work::select(DB::raw('count(linhvuc) as total,linhvuc'))->groupBy('linhvuc')->orderBy('total','DESC')->take(8)->get();
    	$tt = array();
    	foreach ($worktotal as $value) {
    		$tt[] = $value->linhvuc;
    	}
    	$category = Category::WhereIn('id',$tt)->get();

    	return view('frontend.trangchu',compact('category'));
    }
    public function timviec(Request $request)
    {
        $categoryparent = Category::where('parent',0)->get();
        $city = City::all();
        if (!empty($request->all())) {
            $searchategory = $request->category;
            $searchCity = $request->city;
            $work = Work::where('linhvuc','like',"%$searchategory%")->where('city','like',"%$searchCity%")->paginate(8);
            return view('frontend.timviec',compact('work','categoryparent','city'));
        }
        $work = Work::paginate(8);
        return view('frontend.timviec',compact('work','categoryparent','city'));
    }
}
