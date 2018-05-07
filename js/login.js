// A $( document ).ready() block.
$( document ).ready(function() {
    $("#signup").hide();

    /* validation */
    $("#register-form").validate({
        rules:
            {
                nom: {
                    required: true,
                    minlength: 4,
                    maxlength: 30
                },
                prenom: {
                    required: true,
                    minlength: 4,
                    maxlength: 30
                },
                mdp: {
                    required: true,
                    minlength: 4,
                    maxlength: 30
                },
                cmdp: {
                    required: true,
                    equalTo: '#mdp'
                }
            },
        messages:
            {
                nom: "Entrer un nom valid ",
                prenom: "Entrer un prenom valid ",
                mdp:{
                    required: "entrer mot de passe",
                    minlength: "il faut que le mot de passe > 4 characteres"
                },
                cmdp:{
                    required: "Réentrer votre mot de passe",
                    equalTo: "mot de passes n'ont pas equivalents"
                }
            },
        submitHandler: submitForm
    });
    /* validation */

    function submitForm()
    {
        var data = $("#register-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'http://localhost/AStream/index.php/login/do_signup',
            data : {
                nom : $('#nom').val(),
                prenom : $('#prenom').val(),
                mdp : $('#mdp').val()
            },

            beforeSend: function()
            {
                $("#btn-submit").html('<span class="fa fa-plane"></span> &nbsp; sending ...');
            },
            success :  function(text)
            {
                $("#btn-submit").html('S\'inscrire');
                $('#nom_ut').val(text);
                $("#login").show();
                $("#signup").hide();

            }
        });
        return false;
    }
    /* form submit */


    /* validation */
    $("#login-form").validate({
        rules:
            {
                nom_ut: {
                    required: true
                },
                mdpS: {
                    required: true
                }
            },
        messages:
            {
                nom_ut: "Entrer un nom valid ",
                mdpS:{
                    required: "entrer une mot de passe valide",
                }
            },
        submitHandler: submitFormOne
    });
    /* validation */

    function submitFormOne()
    {
        var data = $("#login-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'http://localhost/AStream/index.php/login/do_signin',
            data : {
                nom_ut : $('#nom_ut').val(),
                mdpS : $('#mdpS').val()
            },

            beforeSend: function()
            {
                $("#btn-submitOne").html('<span class="fa fa-plane"></span> &nbsp; sending ...');
            },
            success :  function(text)
            {
                if(text == 'true'){
                    $("#btn-submitOne").html('Se connecter');
                    $("#error").html('');
                    $("#success").html('compte vérifié');
                    location.href = "http://localhost/AStream/index.php/panel"
                }else {
                    $("#btn-submitOne").html('Se connecter');
                    $("#error").html('vérifier vos données');
                    $("#success").html('');
                }
            }
        });
        return false;
    }
    /* form submit */

});

$("#showsignup").click(function(){
    $("#login").hide();
    $("#signup").show();
});

$("#showlogin").click(function(){
    $("#login").show();
    $("#signup").hide();
});

