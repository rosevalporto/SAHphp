<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class controllerPaciente extends Controller
{
public function consulta()
{
  $paciente = DB::table('dbo.paciente')->where('paciente','like',"%viviane%")->get();
	echo '<hr>';
	foreach ($paciente as $paciente){
	print_r($paciente);
	//	print_r('O Doador é'. $paciente .'apenas esse.<br/>');
	 	
	}

	echo '<hr>';
}
  
}
?>


