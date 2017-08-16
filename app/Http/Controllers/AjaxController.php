<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use DB;
use Illuminate\Http\Request;

use App\Models\City;
use App\Models\District;


class AjaxController extends Controller
{
    public function viewChild()
    {
    	$cityList = City::all();
    	
        return view('ajax.view-child', compact([
        	'cityList'
        	]));
    }
    public function getChild(Request $request){
    	
    	$city_id = $request->city_id;

    	$districtList = District::where('city_id', $city_id)->get();  

    	return view('ajax.get-child', compact([
        	'districtList'
        	]));
    }
    public function getChildWard(Request $request){
    	
    	$district_id = $request->district_id;

    	$wardList = Ward::where('district_id', $district_id)->get();  

    	return view('ajax.get-child', compact([
        	'districtList'
        	]));
    }
}