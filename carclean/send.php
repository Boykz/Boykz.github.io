<link href="css/style.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php

mail_utf8('ahun.nuritdin@mail.ru','Оповещание от компании  CC Group','bastau@bastau-innovation.kz', "Данные оставленные на сайте avatarmedia.kz","Пользователь под именем <b>".$_POST['name']."</b> </br>Oставил вам свой номер:\n<b>".$_POST['phone']); 

function mail_utf8($to, $from_user, $from_email,$subject = '(No subject)', $message = '') 
{ 
$from_user = "=?UTF-8?B?".base64_encode($from_user)."?="; 
$subject = "=?UTF-8?B?".base64_encode($subject)."?="; 

$headers = "From: $from_user <$from_email>\r\n". 
"MIME-Version: 1.0" . "\r\n" . 
'Content-type: text/html; charset="UTF-8"' . "\r\n"; 
return mail($to, $subject, $message, $headers); }
?>
	<div class="container-fluid">
	<div class="row">
		<div class="blok1out">
			<div class="blok1">
				<div class="container phcon">
					<div class="row">
						<div class="col-lg-4 col-xs-5">
							 <div class="navleft">
							 	<div id="bs-example-navbar-collapse-1">
						    	<a href="index.html#j4" class="navbtn">Главная</a>
						    	<a href="" class="navbtn">О нас</a>
						    	<a href="" class="navbtn">Услуги</a>
						    	<a href="" class="navbtn">Контакты</a>
						    </div>
						    </div>
						</div>
						<div class="col-lg-4 col-xs-2">
							<div class="logo">
								<img src="/images/logo.png" class="" />
							</div>
						</div>
						<div class="col-lg-4 col-xs-5">
							<div class="navright">
								<div class="col-lg-6 col-xs-6">
									<div class="number">
										<a href="tel:+7(707) 884 9697" class="nn">+7(707) 884 9697</a>
									</div>
								</div>
								<div class="col-lg-6 col-xs-6">
									<div class="call">
										<a href="" class="navbtn" data-toggle="modal" data-target="#exampleModal">Обратный звонок</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="blok1in">
				<div class="container">
					<div class="ok"><div class="check icon"></div></div>
					<h1>Спасибо! Ваша заявка принята.<br>
							Мы свяжемся с Вами в ближайшее время.</h1>
					<p class="verni">С уважением, Cleaning Центр CC
					</p>
					<p class="" style="padding-bottom: 70px"></p>
				</div>
					<div class="clear"></div>
				
			</div>
		</div>
	</div>
</div>			
<div class="clear"></div>
<div class="footer">
	<div class="container">
		<div class="col-lg-6 col-xs-6">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11629.758029149702!2d76.92972415!3d43.22124405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4eb3eb5eaef8aa6!2sAl-Farabi+Kazakh+National+University!5e0!3m2!1sen!2skz!4v1528552831886" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-lg-6 col-xs-6">
			<div class="acol">
				<div class="acolin1">
					<div class="footlogo">
						<img src="images/logo.png">
					</div>
				</div>
				<div class="acolin2">
					<div class="social">
						<a href=""><img src="images/fb.png"></a>
						<a href=""><img src="images/vk.png"></a>
						<a href=""><img src="images/ins.png"></a>
					</div>
				</div>
			</div>
			<div class="clear sk"></div>
			<div class="acol">
				<div class="acolin1">
					<div class="menu">
						<h4>Меню</h4>
						<ul>
							<li>Главная</li>
							<li>О нас</li>
							<li>Услуги</li>
							<li>Контакты</li>
							<li>Отзывы</li>
						</ul>
					</div>
				</div>
				<div class="acolin2">
					<div class="address">
						<h4>Адресс</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
				
<style type="text/css">
	.blok1in h1 {
    padding-top: 80px;
    text-align: center!important;
}
.verni {
    color: #ffd400!important;
    font-weight: 600;
    padding-top: 23px!important;
    padding-bottom: 45px;
    font-size: 23px;
    text-align: center!important;
}
.ok{
    border: 5px solid yellow;
    border-radius: 13px;
    text-align: center;
    margin: 0 auto;
    padding-top: 34px;
    margin-top: 132px;
    width: 110px;
    padding-left: 30px;
    padding-bottom: 64px;
}
.check.icon {
  color: yellow;
  position: absolute;
 width: 38px;
  height: 20px;
  border-bottom: solid 10px currentColor;
  border-left: solid 10px currentColor;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.footer{
	border-top:3px dotted yellow;
}
</style>

