 <div id="contents">
     <div id="newArrivals">
<div class="loginHeader">
                    <div class="loginLeftHeader">Login to your Account</div>
                </div>
                <div class="loginContents">
                    <div class="loginLeft" style="margin: 0 auto; float: none;">
                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'loginForm',
                            'enableAjaxValidation'=>true,
                                'htmlOptions'=>array(
                                    'onsubmit'=>"return false;",/* Disable normal form submit */
                                    'onkeypress'=>" if(event.keyCode == 13){ send(); } "),
                            )); ?>
                            <div><span>Email: </span>
                            <?php echo $form->textField($model,'email', array('id'=>'loginEmailId', 'placeholder'=>'Your Registered Email Address')); ?>
                            <?php echo $form->error($model,'email'); ?>
                            </div>
                            <div><span>Password:  </span>
                            <?php echo $form->passwordField($model,'password', array('id'=>'loginPwd', 'placeholder'=>'Password')); ?>
                            <?php echo $form->error($model,'password'); ?>
                            </div>
                            
                            <div><span>Remember me:  </span>
                            <?php echo $form->checkBox($model,'rememberMe'); ?>
                            <?php echo $form->error($model,'rememberMe'); ?>
                            </div>

                            <?php echo CHtml::submitButton('Login', array('id'=>'loginSubmit','class'=>'loginFormBtn', 'onclick'=>'send();')); ?>

                        <?php $this->endWidget(); ?>
                        <?=CHtml::link('Forgot Password?', array('/users/forget'), array('id'=>'forgotPwd'))?>
                    </div>
                </div>   
         <div style="clear:both;"></div>
     </div>
 </div>
<script type="text/javascript">
function send()
 {
   var data=$("#loginForm").serialize();

  $.ajax({
    type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("/site/login", array('ajax'=>'loginForm')); ?>',
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