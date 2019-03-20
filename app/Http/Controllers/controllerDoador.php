<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class controllerDoador extends Controller
{
public function consulta()
{
  $doador = DB::table('dbo.doador')->where('doador','like',"%velasco%")->get();
	echo '<hr>';
	foreach ($doador as $Doador){
		//print_r($doador);
		print_r('O Doador é'. $doador .'apenas esse.<br/>');
	 	
	}

	echo '<hr>';
}
  
}
?>
