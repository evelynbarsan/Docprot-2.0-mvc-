<?php
namespace Core;
	class ConfigController
	{
		
		public function __construct(){
			if(!empty( filter_input (INPUT_GET, "url", FILTER_DEFEUT))){
				echo "Acessar pagina interna";

			}else{
				echo "pagina inicial";
			}
		}
	}