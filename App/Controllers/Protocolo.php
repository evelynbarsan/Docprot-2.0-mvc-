<?php
namespace App\Controllers

Class Protocolo
{
	public function index(){
		echo "Página Protócolo";
		$listarArtigos = new \App\Models\ListarProtocolo();
		$listarArtigos->listar()
	}
}
?>