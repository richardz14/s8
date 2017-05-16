
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends ci_controller{

		public function index(){
			$this->load->view("index");
		}


	}




?>