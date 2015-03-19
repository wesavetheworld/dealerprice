<?php

class ProductreviewsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('create'),
				'roles'=>array('*'),
			),
			array('deny',  // deny all users
				'roles'=>array('*'),
			),
		);
	}

	public function actionCreate($id)
	{
		$model=new ProductReviews;
                $id ? $model->product_id = $id : $model->product_id = null;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductReviews']))
		{
			$model->attributes=$_POST['ProductReviews'];
            if(!Yii::app()->user->isGuest)
              	$model->user_id = Yii::app()->user->id;
				$model->posted = time();
			if($model->save())
            {
				Yii::app()->user->setFlash('review','Thank you for your reviews.');
				$this->refresh();
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

}
