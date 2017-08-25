
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends ci_controller{

		public function index(){
			$this->load->view("index");
		}

		public function blog(){
			$this->load->view("blog");
		}

		public function activities(){
			$this->load->view("activities");
		}

		public function kibana(){
			$this->load->view("kibana");
		}

		public function contact(){
			$this->load->view("contact");
		}

		public function about(){
			$this->load->view("about");
		}

		public function contact_form(){
			$this->load->view("contact_form");
		}

	}

?>