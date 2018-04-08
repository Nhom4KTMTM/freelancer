<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Work;

class Backendcontroller extends Controller
{
	public function __construct() {
    	$current = new Carbon();
    	Work::where('tg_hethan','<',$current)->update(['status' => 2]);    	
	}
}
