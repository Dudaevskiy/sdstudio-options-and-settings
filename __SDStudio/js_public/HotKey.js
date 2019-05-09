/*START Горячие клавиши для WordPress*/
document.onkeyup = function(e) {
    if (e.which == 77) {
        //Ctrl+Shift+1 переход на страницу входа в админ панель WordPress;
    } else if (e.ctrlKey  && e.shiftKey && e.which == 49) {
        window.open('/wp-admin','_blank');
        // window.location.href='/wp-admin';
        return false;
        //Ctrl+Shift+- переход на главную страницу сайта
    }
    else if (e.ctrlKey  && e.shiftKey && e.which == 50) {
        jQuery(document).ready(function($) {
                if ($("body").hasClass("admin-bar")){
                    var URL_EDIT_PAGE = $('li#wp-admin-bar-edit a').attr('href');
//                    console.log(ID_PAGE);
                    window.location.href=URL_EDIT_PAGE;
                }
            });

        return false;
    }
};
/*END Горячие клавиши для WordPress*/