<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class controllerDoacao extends Controller
{

public function consulta()
{
  $doacao = DB::table('dbo.doacao')->where('doacao','like',"%01331901%")->get();
	echo '<hr>';
	foreach ($doacao as $Doacao){
		print_r($doacao);
		//print_r('O Doador é'. $doador .'apenas esse.<br/>');
	 	
	}

	echo '<hr>';
}
  
}
?>

