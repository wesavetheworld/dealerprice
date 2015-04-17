<?php

class PushnotificationController extends Controller
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
				'actions'=>array('notification'),
				'expression'=>'Yii::app()->user->role == "SuperAdmin"',
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionNotification()
	{
		$model=new NotificationForm;
		if(isset($_POST['NotificationForm']))
		{
			$model->attributes=$_POST['NotificationForm'];
			$ids = array();
			if($model->validate())
			{
				$temp=array('1'=> 7, '2'=>30, '3'=>90);
				if($model->send_to==0)
				{
					 $users=GcmUsers::model()->findAll();
					 if(isset($users))
					 foreach($users as $u)
					 array_push($ids, $u->gcm_id);
					 if(count($ids) > 0)
					 $this->sendMessageThroughGCM($ids, array("m" => $model->message));
				   Yii::app()->user->setFlash('users', "Successfully sent your notification."); 
				   
				}
				else if($model->send_to > 0 )
				{
					$users=GcmUsers::model()->findAll('joined between date_sub(now(),INTERVAL '.$temp[$model->send_to].' DAY) and now();');
					if(isset($users))
					foreach($users as $u)
					array_push($ids, $u->gcm_id);
					if(count($ids) > 0)
					$this->sendMessageThroughGCM($ids, array("m" => $model->message));
				   Yii::app()->user->setFlash('users', "Successfully sent your notification.");  
				}

			   $this->refresh();
			}
		}
		$this->render('notification',array('model'=>$model));
	}
	
		//Generic php function to send GCM push notification
   function sendMessageThroughGCM($registatoin_ids, $message) {
		//Google cloud messaging GCM-API url
        $url = 'https://android.googleapis.com/gcm/send';
        $fields = array(
            'registration_ids' => $registatoin_ids,
            'data' => $message,
        );
		// Update your Google Cloud Messaging API Key
		define("GOOGLE_API_KEY", "AIzaSyCdwE_3DzS2XjozpZgsk0uCdoHWhIOgmk8"); 		
        $headers = array(
            'Authorization: key=' . GOOGLE_API_KEY,
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);	
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);				
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
        return $result;
    }

}
