
// A $( document ).ready() block.
$( document ).ready(function() {

    function show_users() {
        $.ajax({
            type : 'POST',
            url  : 'http://localhost/AStream/index.php/admin/load_users',
            success :  function(text)
            {
                $("div#form-users").html(text);
                delete_user();
                modify_user();
            }


        });
        return false;

    }

    function modify_user(){
        $('form#form-modifier').on('submit',function (e) {
            e.preventDefault(); // stop form from submitting

            // initialize the id value
            var s = $(this).serializeArray();
            var u_id,u_mdp,u_nom,u_prenom,u_role;
            $.each(s, function () {
                switch(this.name){
                    case 'u_id' : u_id = this.value; break;
                    case 'u_mdp' : u_mdp = this.value; break;
                    case 'u_nom' : u_nom = this.value; break;
                    case 'u_prenom' : u_prenom = this.value; break;
                    case 'u_role' : u_role = this.value; break;
                }
            });
            //modifier un utilisateur
            $.ajax({
                type : 'POST',
                url  : 'http://localhost/AStream/index.php/admin/modify_user',
                data : {
                    u_id : u_id,
                    u_nom : u_nom,
                    u_prenom : u_prenom,
                    u_mdp : u_mdp,
                    u_role : u_role
                },

                beforeSend: function()
                {
                    $("#result").html('Modification en cours ...');
                },
                success :  function()
                {
                    $("#result").html('l\'utilisateur : '+u_id+' est bien Modifié');
                    show_users();
                },
                error : function () {
                    $("#result").html('le champ role ne peut pas étre autre que admin ou utilisateur');
                }
            });
        });
    }

    function delete_user(){
        $('form#form-modifier').on('reset',function (e) {
            e.preventDefault(); // stop form from submitting

            // initialize the id value
            var s = $(this).serializeArray();
            var u_id;
            $.each(s, function () {
                if(this.name == 'u_id'){
                    u_id = this.value;
                    console.log(u_id);
                }
            });
            //supprimer un utilisateur
            $.ajax({
                type : 'POST',
                url  : 'http://localhost/AStream/index.php/admin/delete_user',
                data : {
                    id : u_id
                },

                beforeSend: function()
                {
                    $("#result").html('Suppression en cours ...');
                },
                success :  function()
                {
                    $("#result").html('l\'utilisateur : '+u_id+' est bien supprimé');
                    show_users();
                }
            });
        });
    }

    /* validation */
    $("#form-ajouter").validate({
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
                }
            },
        messages:
            {
                nom: "Entrer un nom valid ",
                prenom: "Entrer un prenom valid ",
                mdp:{
                    required: "entrer mot de passe",
                    minlength: "il faut que le mot de passe > 4 characteres"
                }
            },
        submitHandler: submitForm
    });
    /* validation */

    function submitForm()
    {
        var data = $("#form-ajouter").serialize();

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
                $("#result").html('<span class="fa fa-plane"></span> &nbsp; sending ...');
            },
            success :  function(text)
            {
                $("#result").html('l\'utilisateur est ajouté');
                $('#hide-us').show();
                $('#show-us').hide();
                show_users();

            }
        });
        return false;
    }
    /* form submit */


    // default hides and shows
    $('#hide-us').hide();
    // function to show users
    $('#show-us').click(function () {
        show_users();
        $('#form-users').show();
        $('#hide-us').show();
        $('#show-us').hide();
    });

    // function to hide users
    $('#hide-us').click(function () {
        $('#form-users').hide();
        $('#show-us').show();
        $('#hide-us').hide();
    });


});



