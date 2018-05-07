$( document ).ready(function(){
    $("#logout_btn").click(function() {
        $.ajax({
            type : 'POST',
            url: 'http://localhost/AStream/index.php/login/do_logout',
        })
    });
});