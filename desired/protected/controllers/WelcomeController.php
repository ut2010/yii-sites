<?php

class WelcomeController extends Controller
{
	public $defaultAction = 'home';

	public function actionHome()
	{
		$model = new LoginForm();
		if(isset($_POST['LoginForm']))
		{
			$model->attributes = $_POST['LoginForm'];

			if($model->validate() && $model->login())
				$this->redirect('?r=site/index');
		}



		$modelData = new DataForm();
		if(isset($_POST['DataForm']))
		{
			$modelData->attributes = $_POST['DataForm'];

			if($modelData->validate())
			{
				$modelData->newUser();
				$this->redirect('?r=site/index');
			}
		}

	$this->render('home', array ('model'=>$model, 'modelData'=>$modelData));

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
}