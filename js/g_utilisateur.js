
// A $( document ).ready() block.
$( document ).ready(function() {

    function count_users() {
        $.ajax({
            type : 'POST',
            url  : 'http://localhost/AStream/index.php/admin/count_users',
            success :  function(text)
            {
                $("ul#pg_ut").html(text);
            },
            error : function () {
                $("ul#pg_ut").html('erreur');
            }


        });
        return false;

    }
    function show_users(page) {
        $.ajax({
            type : 'POST',
            url  : 'http://localhost/AStream/index.php/admin/load_users/'+page,
            success :  function(text)
            {
                $("div#form-users").html(text);

                var p = (page/4);
                $('ul#pg_ut').find('li[value="'+(p+1)+'"]').addClass('active').siblings().removeClass('active');
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
                    show_users(($('ul#pg_ut').find('li.active').attr('value') - 1) * 4);
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
                    count_users();
                    show_users(($('ul#pg_ut').find('li.active').attr('value') - 1) * 4);
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
                count_users();
                show_users(0);

            }
        });
        return false;
    }
    /* form submit */

    // function to show users
    $('#show-us').click(function () {
        $('#form-users').show();
        $('#hide-us').show();
        $('#show-us').hide();
        count_users();
        $('ul#pg_ut').show();
        show_users(0);
    });

    // function to hide users
    $('#hide-us').click(function () {
        $('#form-users').hide();
        $('#show-us').show();
        $('#hide-us').hide();
        $('ul#pg_ut').hide();
    }).hide();


    /*
        Pagination des utilisateurs
     */
    $('ul#pg_ut').click('li',function (e) {
        //this.id = 'newId';
        e.preventDefault();
        show_users(($(this).find('li[id="selected"]').attr('value') - 1) * 4);
    });


});



