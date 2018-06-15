$(document).ready(function(){ 

$("#bs-example-navbar-collapse-1").on("click","a", function (event) { 

//отменяем стандартную обработку нажатия по ссылке 

event.preventDefault(); 



//забираем идентификатор бока с атрибута href 

var id = $(this).attr('href'), 


//узнаем высоту от начала страницы до блока на который ссылается якорь 

top = $(id).offset().top; 


//анимируем переход на расстояние - top за 1500 мс 

$('body,html').animate({scrollTop: top}, 1500); 

}); 

}); 


$('#rc-phone-icon').click(function(){ 
if($(this).hasClass('fa-times')){ 
$(this).removeClass('fa-times'); 
$(this).addClass('fa-phone'); 
$('#rc-phone-form').animate({width:'50px'}); 
setTimeout(function(){$('#rc-phone-form').addClass('closed');}, 600); 
} 
}); 
$('#rc-phone-form').click(function(){ 
if($(this).hasClass('closed')){ 
$('#rc-phone-icon').removeClass('fa-phone'); 
$('#rc-phone-icon').addClass('fa-times'); 
$('#rc-phone-form').animate({width:'605%'}).removeClass('closed'); 
setTimeout(function(){$('#rc-phone-form').addClass('opened');}, 600); 
} 
});


$(document).ready(function(){ 

$("#bs-example-navbar-collapse-2").on("click","a", function (event) { 

//отменяем стандартную обработку нажатия по ссылке 

event.preventDefault(); 



//забираем идентификатор бока с атрибута href 

var id = $(this).attr('href'), 


//узнаем высоту от начала страницы до блока на который ссылается якорь 

top = $(id).offset().top; 


//анимируем переход на расстояние - top за 1500 мс 

$('body,html').animate({scrollTop: top}, 1500); 

}); 

}); 


$('#rc-phone-icon').click(function(){ 
if($(this).hasClass('fa-times')){ 
$(this).removeClass('fa-times'); 
$(this).addClass('fa-phone'); 
$('#rc-phone-form').animate({width:'50px'}); 
setTimeout(function(){$('#rc-phone-form').addClass('closed');}, 600); 
} 
}); 
$('#rc-phone-form').click(function(){ 
if($(this).hasClass('closed')){ 
$('#rc-phone-icon').removeClass('fa-phone'); 
$('#rc-phone-icon').addClass('fa-times'); 
$('#rc-phone-form').animate({width:'605%'}).removeClass('closed'); 
setTimeout(function(){$('#rc-phone-form').addClass('opened');}, 600); 
} 
});