<?php
namespace Core;

Class ConfigController
{
	public function __construct()
	{
		if(!empty (filter_input(INPUT_GET, "url", FILTER_DEFAULT))){
			$url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
			echo "pagina interna";

		} else{
			echo "Pagina inicial";
		}
	}
	public function carregar(){
	
	}
}