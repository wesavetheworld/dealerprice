<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CSmsSend
 *
 * @author ATOZ
 */
class CSmsSend {
    //put your code here
    public function send($number, $msg){
        $ch = curl_init();
        $user="info@novelnutrientstore.com:228A553CG";
        $receipientno=$number;
        $senderID="TEST SMS";
        $msgtxt=$msg;
        curl_setopt($ch, CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
        $buffer = curl_exec($ch);
        curl_close($ch);
    }
    public function adminMsg($model){
        CSmsSend::send($model->phone, $model->message);
    }
}
