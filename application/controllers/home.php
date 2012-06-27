<?php 
class Home extends CI_Controller{
		public function index(){

			$this->load->helper('url');
			$this->load->helper('form');
			$FullName = array('name' => 'FullName',
			'id' => 'FullName',
			'class' => 'QuoteInput span5',
			'maxlength' => '100',
			'placeholder' => 'Full name');

			$BusinessName = array('name' => 'BusinessName',
			'id' => 'BusinessName',
			'class' => 'QuoteInput span5',
			'maxlength' => '100',
			'placeholder' => 'Business name');

			$Email = array('name' => 'Email',
			'id' => 'Email',
			'class' => 'QuoteInput span5',
			'maxlength' => '100',
			'placeholder' => 'Email');

			$ContactNumber = array('name' => 'ContactNumber',
			'id' => 'ContactNumber',
			'class' => 'QuoteInput span5',
			'maxlength' => '100',
			'placeholder' => 'Contact number');

			$QuoteButton = array('id' => 'QuoteButton',
			'class' => 'QuoteSubmit span5');
			
			$FormAttr = array('id' => 'QuoteForm');

			$attributes = array('id'=>'GetAquoteForm', 
								'QuoteForm' => $FormAttr,
								'FullName' => $FullName, 
								'BusinessName' => $BusinessName,
								'Email' => $Email,
								'ContactNumber' => $ContactNumber,
								'QuoteButton' => $QuoteButton);



			$this->load->view('templates/header', $attributes);
			$this->load->view('home');
			$this->load->view('templates/footer');
		}


	public function AskForQuote(){
		$this->load->library('email');

		$this->email->from('marion.serenio@gmail.com', 'marion');
		$this->email->to('peter.serenio@gmail.com');

		$this->email->subject('Ask for a quote');
		$this->email->message('test');
		$this->email->send();
		echo $this->email->print_debugger();
	}
}

 ?>