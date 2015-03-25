<?php

class DefaultController extends Controller
{
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
	
	public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index','crawler'),
				'roles'=>array('SuperAdmin'),
			),
			array('deny',  // deny all users
				'roles'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionCrawler(){
		//java -cp bin;C:\xampp\htdocs\compare\amazon AmazonAPI
		//exec("java AmazonAPI > /dev/null &", $PID);
		//exec( 'java AmazonAPI > /dev/null 2>&1 & echo $!' );
		//shell_exec("java AmazonAPI > /dev/null 2>/dev/null &");
		//print_r($PID);
		//exec('java AmazonAPI /dev/null &', $pid);
		//print_r($pid);
		//exec ("C://xampp//php//php test.php > /dev/null 2>/dev/null &", $output);
		$cmd = $cmd = 'java -jar '.Yii::app()->params['javaFilePath'];
		//pclose(popen("start /B " . $cmd, "r")); 
		if (substr(php_uname(), 0, 7) == "Windows"){
			 pclose(popen('start /B '.$cmd, "r")); 
		}
		else {
			 exec($cmd." > /dev/null &", $PID);
		}
		Yii::app()->user->setFlash('crawler','Background task is activated.');
		$this->redirect(array('/admin'));
	}
}