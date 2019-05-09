
//START Contact Form 7 + Popups - ОШИБКА ЗАПОЛНЕНИЯ + УСПЕШНОЕ ЗАПОЛНЕНИЕ ФОРМ
/*Попап окно если форма не верно заполнена*/
    jQuery(document).ready(function($) {
    	$(".wpcf7").on('wpcf7:invalid', function(event){
    	  // Your code here
    	//alert('ERROR');
    		SPU.show(1065);
    		//Скрытие поп окна автоматически, через 5,5 секeнд
    		setTimeout(function(){$('div#spu-1065,div#spu-bg-1065').fadeOut(600, 'swing', function(){
    		//
    		});},5500);  //5500 = 5,5 секунды
    	});
    });


/*Попап окно если форма заполнена верно и письмо успешно отправлено*/
    jQuery(document).ready(function($) {
    	$(".wpcf7").on('wpcf7:mailsent', function(event){
    		//alert('GOOD');
    		SPU.show(1068);
    		//Скрытие поп окна автоматически, через 5,5 секнд
    		setTimeout(function(){$('div#spu-1068,div#spu-bg-1068').fadeOut(600, 'swing', function(){
    		//
    	});},3500);  //3500 = 3,5 секунды
    });
    });
//END Contact Form 7 + Popups - ОШИБКА ЗАПОЛНЕНИЯ + УСПЕШНОЕ ЗАПОЛНЕНИЕ ФОРМ
// jQuery(document).ready(function($) {
// $(function() {
//     $.post('/wp-content/themes/UABS_SSU/functions.php', { width: screen.width, height:screen.height }, function(json) {
//         if(json.outcome == 'success') {
//             // do something with the knowledge possibly?
//             alert(screen.width);
//         } else {
//             alert('Unable to let PHP know what the screen resolution is!');
//         }
//     },'json');
// });
// });
