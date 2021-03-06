<?php

class WebsiteController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionPage($alias)
	{
		echo "Page is $alias";
	}

	public function actionTest()
	{
		echo $this->createUrl('website/page', array('alias' => 'about'));
		echo '<br />';
		echo $this->createAbsoluteUrl('website/page',
		array('alias' => 'test'));
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