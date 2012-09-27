<?php

class UserController extends Controller
{
	public function actionEnter()
	{
		$this->render('enter');
	}

	public function actionForgot()
	{
		$this->render('forgot');
	}

	public function actionLogin()
	{
		$this->render('login');
	}

	public function actionLogout()
	{
		$this->render('logout');
	}

	public function actionRegister()
	{
		$this->render('register');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/

	//
// Генерация случайной строки
//

// Generate a random character string
	private function rand_str($length = 32, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890')
	{
	     // Length of character list
	     $chars_length = (strlen($chars) - 1);

	     // Start our string
	     $string = $chars{rand(0, $chars_length)};

	     // Generate random string
	     for ($i = 1; $i < $length; $i = strlen($string))
	     {
	         // Grab a random character from our list
	         $r = $chars{rand(0, $chars_length)};

	         // Make sure the same two characters don't appear next to each other
	         if ($r != $string{$i - 1}) $string .=  $r;
	     }

	     // Return the string
	     return $string;
	}
}