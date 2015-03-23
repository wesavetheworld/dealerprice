<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CMailSend
 *
 * @author ATOZ
 */
class CMailSend {
    //put your code here
    public function contact($model){
            $mail = new YiiMailer('contact', array('model' => $model));
            $mail->setFrom($model->email, $model->name);
            $mail->setSubject($model->subject);
            $mail->setTo(Yii::app()->params['adminEmail']);
           return $mail->send();
    }
    public function signup($model){
            $mail = new YiiMailer('signup', array('model' => $model));
            $mail->setFrom(Yii::app()->params['adminEmail'], Yii::app()->name);
            $mail->setSubject('User Registration');
            $mail->setTo($model->email);
           return $mail->send();
    }
    public function forget($model){
            $mail = new YiiMailer('forget', array('model' => $model));
            $mail->setFrom(Yii::app()->params['adminEmail'], Yii::app()->name);
            $mail->setSubject('Forget Password');
            $mail->setTo($model->email);
           return $mail->send();
    }
    public function adminMsg($model, $team=false){
        $mail = new YiiMailer('customemail', array('model' => $model));
        $mail->setFrom(Yii::app()->params['adminEmail'], Yii::app()->name);
        $mail->setSubject($model->subject);
        if($team)
        $mail->setTo(Yii::app()->params['supportEmail']); 
        else
        $mail->setTo($model->email);

        return $mail->send();
    }
}
