<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function validate(){
		if (isset($_POST['submit'])) {
			 if (empty($_POST['name'])||empty($_POST['user_id'])||
			    empty($_POST['new_title'])||empty($_POST['new_body'])) 
			    {
				echo"<div class='return'><h3 style='margin-left:10px'>Responses</h3><hr>
				<strong style='margin-left:10px'>Please select a user.</strong></div>";
			    }
			 else
			 {
			 echo"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
             $user_id=$_POST['user_id'];
			 $title=$_POST['new_title'];
			 $body=$_POST['new_body'];
			 $name=$_POST['name'];

             $request="
			      <script>
				
				 var req=$.post('https://jsonplaceholder.typicode.com/posts',{title:'$title',body:'$body'},function(data){
					 console.log(data)
				 }).done(function(){
					$('#secure').html('success');
				 }).fail(function(){
					 $('#secure').html('fail');
				 });

				  </script>
			    ";
				echo $request;
             if ($request==true) {
				 echo("<div class='return'><h3 style='margin-left:10px'>Responses</h3><hr>
				 <strong style='margin-left:10px' id='secure'>Sending progress</strong><br></div>");
			 }
			 else{
				 echo("<div class='return'><h3 style='margin-left:10px'>Responses</h3><hr>
				 <strong style='margin-left:10px'>Data seding failed...</label><br></div>");
			 }

				echo("<div class='return'><h3 style='margin-left:10px'>Responses</h3><hr>
				<strong style='margin-left:10px'>Name:$name</strong><br></div>");

			}
        }
    }
	public function index()
	{   echo("<style>
		.trapezoid{
			border-width:40px 0 40px 240px;
			background-color:grey;
			color:white;
			padding:10px;
			position:sticky;
			position:-webkit-sticky;
			top:0;
		}
		</style>
		<div class='trapezoid'>
		     <h1>JSON FAKE API</h1>
		 </div>");

		$this->load->view('welcome_message');
		$this->validate();
	}
    public function tests()
	{
		$this->load->library('unit_test');

		$test =" ";
		$expected_result="";
		$test_name ='testing page loading ';
		$this->unit->run($test,$expected_result,$test_name);

		echo $this->unit->report();
	}
}
