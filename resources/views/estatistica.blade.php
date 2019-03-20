	@extends('layout')

	@section('title', 'estatistica')


	@section('content')
	<h1>Estatistica  </h1>

	<?php 

//	$this->get('test-conn', function(){
//	$users =DB::table('dbo.usuario')->where('nome','like', "%FERNANDA%")->get();
$users = DB::table('dbo.usuario')->get();
	echo '<hr>';

	//foreach ($users as $user) {
		
		var_dump($users);
	//}
	echo '<hr>';
	
//$users = DB::table('tabela')->get();
//$users =DB::table('dbo.usuario')->where('nome','NOME COMPLETO ')->first();
//$users =DB::table('dbo.usuario')->where('nome','like', "%FERNANDA%")->get();


//$name = DB::table('users')->where('name', 'John')->pluck('name'); -nao funcionou 
    ?>

	@endsection

