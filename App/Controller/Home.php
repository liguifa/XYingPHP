<?php
class Home extends Controller
{
	public function index()
	{
		$user=users::Statement()->Select("*")->From("users")->Create()[0];
		$user->user_Username="123";
		$user->SaveChange();
		var_dump($users);
		$this->Show();
	}
}
?>