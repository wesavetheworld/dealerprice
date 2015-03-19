<?php

class DefaultController extends Controller
{
    public $layout='//layouts/customer';   
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
				'actions'=>array('index', 'wishlist', 'personal', 'reviews', 'cards', 'subscriptions', 'newaddress', 'updateaddress', 'addresses', 'changepass', 'changemail', 'makedefault', 'removeaddress'),
				'roles'=>array('Customer'),
			),
			array('deny',  // deny all users
				'roles'=>array('*'),
			),
		);
	}
        
	public function actionIndex()
	{
            $this->pageTitle='Dealer Price - My Account';
            $this->render('index');
	}
    public function actionWishlist()
	{
            $this->pageTitle='Dealer Price - My Wishlist';
            $id=Yii::app()->user->id;
            $wish=  Wishlist::model()->with('product')->findAllByAttributes(array('user_id'=>$id));
            $this->render('wishlist', array('wishlist'=>$wish));
	}
    public function actionPersonal()
	{
		$this->pageTitle='Dealer Price - My Personal Details';
		if(isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['name']) && isset($_POST['phone_no']))
		{
			$user=  Users::model()->findByPk(Yii::app()->user->id);
			$user->name = $_POST['name'];
			$user->save();
			$profile=  Profiles::model()->findByAttributes(array('user_id'=>Yii::app()->user->id));
			if(isset($profile))
			{
				$profile->gender=$_POST['gender'];
				$profile->phone=$_POST['phone_no'];
				$profile->save(false);
			}
			else
			{
				$profile = new Profiles;
				$profile->user_id = Yii::app()->user->id;
				$profile->gender=$_POST['gender'];
				$profile->phone=$_POST['phone_no'];
				$profile->save(false);
			}
			echo CJSON::encode(array('status'=>'success'));
			Yii::app()->end();
		}
		$this->render('index');
	}
   
    public function actionChangepass()
	{
		$this->pageTitle='Dealer Price - My Account';
		if(isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['r_new_password']))
		{
			$user=  Users::model()->findByPk(Yii::app()->user->id);
			if($user->password==trim($_POST['old_password']) && trim($_POST['new_password']) == trim($_POST['r_new_password']))
			{
			$user->password = $_POST['new_password'];
			$user->provider = 'Own';
			$user->save();
			echo CJSON::encode(array('status'=>'success'));
			}
			else
			echo CJSON::encode(array('status'=>'failled'));
			Yii::app()->end();
		}
		$this->render('changePass');
	}
    public function actionChangemail()
	{
		 $this->pageTitle='Dealer Price - My Account';
		if(isset($_POST['email']) && isset($_POST['new_email']))
		{
			$user=  Users::model()->findByPk(Yii::app()->user->id);
			if($user->email==trim($_POST['email']) && trim($_POST['new_email']))
			{
			$user->email = $_POST['new_email'];
			$user->save();
			echo CJSON::encode(array('status'=>'success'));
			}
			else
			echo CJSON::encode(array('status'=>'failled'));
			Yii::app()->end();
		}
		$this->render('changeMail');
	}
}