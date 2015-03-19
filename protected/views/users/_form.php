<a href="#" class="close-btn-signup popupCloseBtn"><img src="<?=Yii::app()->theme->baseUrl?>/images/close-btn.png" alt='Popup close'/></a>
                <div class="loginHeader">
                	<div class="loginLeftHeader">First Time Here? Lets Sign Up</div>
                    <div class="loginRightHeader">Already have an account ? <span><a href="#" class="show-popup-1 signUpLink">Sign in here</a></span></div>
                </div>
                <div class="signupContents">
                    <div class="loginLeft">
                        

<?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'signupForm',
                            'enableAjaxValidation'=>true,
                                'htmlOptions'=>array(
                                    'onsubmit'=>"return false;"),
                            )); ?>

	<div><span>Name: </span>
		<?php echo $form->textField($model,'name', array('id'=>'name', 'placeholder'=>'Your Name', 'autocomplete'=>"off")); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div><span>Email: </span>
		<?php echo $form->textField($model,'email', array('id'=>'signupEmailId', 'placeholder'=>'Enter Email Address')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div><span>Password: </span>
		<?php echo $form->passwordField($model,'password', array('id'=>'signupPwd', 'placeholder'=>'Enter Password', 'class'=>"signupPwds")); ?>
                <?php echo $form->passwordField($model,'password_repeat', array('id'=>'signupCnfPwd', 'placeholder'=>'Confirm Password', 'class'=>"signupPwds")); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<?php echo CHtml::submitButton('Login', array('id'=>'signupSubmit','class'=>'loginFormBtn', 'onclick'=>'registersend();')); ?>


<?php $this->endWidget(); ?>

                    </div>
                    <div class="loginMiddle">
                        <img src="<?=Yii::app()->theme->baseUrl?>/images/login-divider.png" alt="divider in page">
                    </div>
                    <div class="loginRight">
                        <p>You may</p>
                       <img src="<?=Yii::app()->theme->baseUrl?>/images/login-with-facebook.png" alt="Facebook login button" id="fb-login">
                        <img src="<?=Yii::app()->theme->baseUrl?>/images/login-with-google.png" alt="Google login button" id="g-login" class="g-signin">
                    </div>
                </div>   
<script type="text/javascript">
 
function registersend()
 {
   var data=$("#signupForm").serialize();

  $.ajax({
    type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("/users/create", array('ajax'=>'signupForm')); ?>',
    data:data,
    success:function(data){
        var res=$.parseJSON(data);
        if(res.status=='success')
            window.location=res.redirect;
        $.each(res, function(i, v){
            $('#'+i+'_em_').text(v).show();
        });
    },
    });
}
 
</script>
<script type="text/javascript">
 var cgoogle=false;
$(document).ready(function(){
        $('#fb-login').click(function(){
            FB.login(function(d){
                if(d.status == 'connected')
                FB.api('/me', function(response) {
                    $.post('<?=$this->createAbsoluteUrl('/site/socialuser')?>', {name: response.name, email:response.email, id:response.id, gender:response.gender,  type: 'Facebook'}, function(d){
                        d=$.parseJSON(d);
                        if(d.status=='success')
                        window.location=d.redirect;
                    });
                  });
            });
        });
        $('#g-login').click(function(){
            cgoogle=true;
            gapi.auth.signIn(); 
        });
});
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '<?=Yii::app()->params['facebook']?>',
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.1' // use version 2.1
  });
  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<script src="https://apis.google.com/js/client:platform.js"></script>
<script type='text/javascript'>
function signinCallback(authResult) {
    if(cgoogle)
  if (authResult['status']['signed_in']) {
	gapi.client.load('plus','v1', function(){
	 var request = gapi.client.plus.people.get({
	   'userId': 'me'
	 });
	 request.execute(function(resp) {
              $.post('<?=$this->createAbsoluteUrl('/site/socialuser')?>', {name: resp.displayName, email: resp.emails[0].value, id:resp.id, gender:resp.gender, type: 'Google'}, function(d){
                        d=$.parseJSON(d);
                        if(d.status=='success')
                        window.location=d.redirect;
                    });
	 });
	});
  } else
    console.log('Sign-in state: ' + authResult['error']);
}
</script>