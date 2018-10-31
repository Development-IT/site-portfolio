// Дополнительная проверка обязательных полей: Имени, Телефона или Почты. 
$(document).ready(function() {
    var formname = document.getElementById('name');
    var formphone = document.getElementById('phone');
    var formemail = document.getElementById('email');
    formname.addEventListener("input", validation, false);
    formphone.addEventListener("input", validation, false);
    formemail.addEventListener("input", validation, false);
    function validation() {
         if ((!phone.value) && (!email.value)) {
            phone.setCustomValidity ('Оставьте контактный телефон или E-mail');
            
        }
        else {
          phone.setCustomValidity ('');
           
        }
    }
    validation()
});