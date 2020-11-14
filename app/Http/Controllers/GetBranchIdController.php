<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;

class GetBranchIdController extends Controller
{

	public static function getBranchId(){
		return @Auth::user()->branch_id; 
	 }

}