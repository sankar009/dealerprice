			<a id="popupCloseBtn" href="#" class="close-btn"><i class="fa fa-remove"></i></a>	
				<div class="loginHeader">
                    <div class="loginLeftHeader">Login to your Account</div>
                    <div class="loginRightHeader">New to Dealer Price? <span><a href="#" class="show-popup-signup-1 signUpLink">Signup Here</a></span></div>
                </div>
                <div class="loginContents">
                    <div class="loginLeft">
                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'loginForm',
                            'enableAjaxValidation'=>true,
                                'htmlOptions'=>array(
                                    'onsubmit'=>"return false;"),
                            )); ?>
                            <div><span>Email: </span>
                            <?php echo $form->textField($model,'email', array('id'=>'loginEmailId', 'placeholder'=>'Your Registered Email Address', 'required'=>'required')); ?>
                            <!--<?php echo $form->error($model,'email'); ?> -->
                            </div>
                            <div><span>Password:  </span>
                            <?php echo $form->passwordField($model,'password', array('id'=>'loginPwd', 'placeholder'=>'Password', 'required'=>'required')); ?>
                            <?php echo $form->error($model,'password'); ?>
                            </div>
                            
                            <div><span></span>
                            <?php echo $form->checkBox($model,'rememberMe'); ?>
                            <?php echo $form->error($model,'rememberMe'); ?> <p id="rememberMeP">Keep me signed in</p>
                            </div>

                            <?php echo CHtml::submitButton('Login', array('id'=>'loginSubmit','class'=>'loginFormBtn', 'onclick'=>'send();')); ?>

                        <?php $this->endWidget(); ?>
                        <?=CHtml::link('Forgot Password?', array('/users/forget'), array('id'=>'forgotPwd'))?>

                    </div>
                    <div class="loginMiddle">
                        <img src="<?=Yii::app()->theme->baseUrl?>/images/login-divider.png" alt="divider in page">
                    </div>
                    <div class="loginRight">
                        <p>You may</p>
                        <img src="<?=Yii::app()->theme->baseUrl?>/images/login-with-facebook.png" alt="Facebook login button" id="fb-login">
                        <img src="<?=Yii::app()->theme->baseUrl?>/images/login-with-google.png" alt="Google login button" id="g-login" class="g-signin">
                    </div>
					<div style='clear:both;'></div>
                </div>   
<script type="text/javascript">
function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }
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
        {
            if(getCookie('cpid') != '')
            {
                $.when( 
                $.post('<?=$this->createAbsoluteUrl('/site/addtocart')?>', {pid: getCookie('cpid'), ppid: getCookie('cppid'), pqty: getCookie('cpqty')})
                ).then(function(d){
                    d=$.parseJSON(d);
                    if($.trim(d.status) =='success')
                    {
                       $('#shoppingCart a').text(d.items == 1 ? '('+d.items+') Item' : '('+d.items+') Items');
                       $('#dcart a').text('('+d.items+')');
                 $.post('<?=$this->createAbsoluteUrl('/site/addwishlist')?>', {pid: getCookie('cpid')}, function(d){
                        d=$.parseJSON(d);
                        if($.trim(d.status) =='success')
                           $('#itmAddToWhishlist').html("<span class='removeWish'><i class='fa fa-times-circle'></i> from wishlist</span>");
                      location.reload(); 
                    });
                    }
                });

            }
            else
            window.location=res.redirect;
        }
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
                FB.api('/me?fields=name,email,id,gender', function(response) {
					console.log(response);
                    $.post('<?=$this->createAbsoluteUrl('/site/socialuser')?>', {name: response.name, email:response.email, id:response.id, gender:response.gender,  type: 'Facebook'}, function(d){
                        d=$.parseJSON(d);
                        if(d.status=='success')
                        window.location=d.redirect;
                    });
                  });
            }, { scope: 'email' });
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