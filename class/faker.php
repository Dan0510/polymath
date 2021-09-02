<?php

	class Faker {

		public function __construct(){

		}

		public function letterify($data){

			while(strpos($data,'?')){

				$letter = chr(rand(ord("a"), ord("z")));

				$data = preg_replace('/\?/', $letter, $data, 1);				
			}
		
			return $data;
		}

		public function numerify($data){

			while(strpos($data,'#')){

				$data = preg_replace('/#/', rand(0,9), $data, 1);				
			}


			return $data;
		}

		public function bothify($data){

			$data = $this->letterify($data);
			$data = $this->numerify($data);

			return $data;
		}
	}

?>