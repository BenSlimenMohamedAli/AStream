$( document ).ready(function(){

    $("#logout_btn").on('click',function() {
        $.ajax({
            type : 'POST',
            url: 'http://localhost/AStream/index.php/login/do_logout'
        })
    });
});