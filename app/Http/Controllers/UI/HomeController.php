<?php
namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller as BaseController;
/**
 * 
 */
class HomeController extends BaseController
{
	
	public function Index(){
		return view('UI.index');
	}
}
?>