<?php
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller as BaseController;
/**
 * 
 */
class HomeController extends BaseController
{
	
	public function Index(){
		return view('Customer.Home');
	}
	public function ListMotel(){
		return view('Customer.ListMotel');
	}
}
?>