<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Commanding extends Controller {

	public function action_index()
	{
		$this->response->body(View::factory('commanding-index'));
  }

  /* public function action_submit() */
  /* { */
  /*   $input = $_POST['input']; */
  /*   $command = "ping -c 3 " . $input; */
  /*   $command_output = shell_exec($command); */
  /*   $this->response->body(View::factory('commanding')->bind('command_output', $command_output)->render()); */
  /* } */
} // End Welcome
