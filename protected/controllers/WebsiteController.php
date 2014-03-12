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

	public function actionCreate() 
	{	 
	    $model=new Employee;
	 
	    /* Code for validation and redirect upon save. */
	 
	    // If not saved, render the create View:
	    $this->render('create',array(
	        'model'=>$model, // Model is passed to create.php View!
	    ));
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