// A $( document ).ready() block.
$( document ).ready(function() {
    $("#signup").hide();
});

$("#showsignup").click(function(){
    $("#login").hide();
    $("#signup").show();
});

$("#showlogin").click(function(){
    $("#login").show();
    $("#signup").hide();
});