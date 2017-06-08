$(document).ready(function(){
    $("#done").click(function(){
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var fail = "";
        if(name.length < 3) fail = "Имя не меньше 3 символов";
        else if(email.split ('@'.length)-1 == 0 || email.split ('.'.length)-1 == 0 )
            fail = "Вы ввели некорректный email";
        else if(message.length < 20)
            fail = "Сообщение не меньше 20 символов";
        if(fail != ""){
            $('#message_show').html(fail+"<div class="clear"><br></div>");
            $('#message_show').show();
            return false;}
    });
});
