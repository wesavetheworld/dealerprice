<?php

class MessagesController extends Controller
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
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('sms','email', 'ticket'),
				'roles'=>array('SuperAdmin'),
			),
			array('deny',  // deny all users
				'roles'=>array('*'),
			),
		);
	}
        public function actionSms()
        {
                $model=new SmsForm;
		if(isset($_POST['SmsForm']))
		{
			$model->attributes=$_POST['SmsForm'];
			if($model->validate())
			{
                            CSmsSend::adminMsg($model);
                            Yii::app()->user->setFlash('sms','SMS has been sent successfully.');
                            $this->refresh();
			}
		}
		$this->render('sms',array('model'=>$model));
        }
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionEmail()
	{
		$model=new EmailForm;
		if(isset($_POST['EmailForm']))
		{
			$model->attributes=$_POST['EmailForm'];
			if($model->validate())
			{
                            CMailSend::adminMsg($model);
                            Yii::app()->user->setFlash('email','Email has been sent successfully.');
                            $this->refresh();
			}
		}
		$this->render('email',array('model'=>$model));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionTicket()
	{
		$model=new TicketForm;
		if(isset($_POST['TicketForm']))
		{
			$model->attributes=$_POST['TicketForm'];
			if($model->validate())
			{
                            CMailSend::adminMsg($model, true);
                            Yii::app()->user->setFlash('ticket','Email has been sent successfully. Support team will contact you soon...!');
                            $this->refresh();
			}
		}
		$this->render('ticket',array('model'=>$model));
	}


}
