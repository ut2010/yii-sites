<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class DataForm extends CFormModel
{
	public $data1;
	public $data2;
	public $data3;
	public $data4;
	public $data5;
	public $data6;
	public $data7;
	public $data8;
	public $email;

	/**
	 * Declares the validation rules.
	 * The rules state that email and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			array('data1, data2, data3, data4, data5, data6, data7, data8, email', 'required'),
			array('email', 'email'),
		);
	}

	public function attributeLabels()
	{
		return array(
		);
	}

	public function newUser()
	{
		$salt="Simple salt string";
		$user = new User();

		$password = $this->generateRandomStr(10);
		$pass = md5(md5($password.$salt));

		$user = new User();
		$user -> email = $this->email;
		$user -> pass = $pass;
		$user -> active = 0;
		$user -> confirmation_line = $this->generateRandomStr();
		$user -> save();
		$id_user = $user->id;

		//sendEmail();

		$data = new Data();
		$data->id_user = $id_user;
		$data->data1 = $this->data1;
		$data->data2 = $this->data2;
		$data->data3 = $this->data3;
		$data->data4 = $this->data4;
		$data->data5 = $this->data5;
		$data->data6 = $this->data6;
		$data->data7 = $this->data7;
		$data->data8 = $this->data8;
		$data->save();

		$identity=new UserIdentity($this->email, $password);
		if($identity->authenticate())
    	Yii::app()->user->login($identity);
	}

	// Generate a random character string
	function generateRandomStr($length = 32, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890')
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
