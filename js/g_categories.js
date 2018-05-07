// document ready function
$(document).ready(function () {
    /*
        Affichage des catégories
     */
    function show_categories() {
        $.ajax({
            type : 'POST',
            url  : 'http://localhost/AStream/index.php/admin/load_categories',
            success :  function(text)
            {
                $("div#list-categories").html(text);
                delete_categorie();
                modify_categorie();
            }


        });
        return false;

    }

    /*
        Suppression des catégories
     */
    function delete_categorie(){
        $('form#form-categorie').on('reset',function (e) {
            e.preventDefault(); // stop form from submitting

            var cat = $('#categorie',this).val();
            //supprimer un utilisateur
            $.ajax({
                type : 'POST',
                url  : 'http://localhost/AStream/index.php/admin/delete_categorie',
                data : {
                    categorie : cat
                },

                beforeSend: function()
                {
                    $("#catresult").html('Suppression en cours ...');
                },
                success :  function()
                {
                    $("#catresult").html('la catégorie : '+cat+' est bien supprimé');
                    show_categories();
                    modify_categorie()
                }
            });
        });
    }
    /*
        Modification des catégories
     */
    function modify_categorie(){
        $('form#form-categorie').on('submit',function (e) {
            e.preventDefault(); // stop form from submitting

            var cat = $('#categorie',this).val();
            var ne = $('#mdcat',this).val();


            //modifier une catégorie
            $.ajax({
                type : 'POST',
                url  : 'http://localhost/AStream/index.php/admin/modify_categorie',
                data : {
                    old : cat,
                    new : ne
                },

                beforeSend: function()
                {
                    $("#catresult").html('Moification en cours ...');
                },
                success :  function()
                {
                    $("#catresult").html('la catégorie : '+cat+' est bien modifiée => '+ne);
                    show_categories();
                },
                error : function () {
                    $("#catresult").html('la catégorie : '+ne+' est déja existe');
                }
            });
        });
    }

    /*
        Ajout des catégories
     */
    /* validation */
    $("#form-ajouter-categorie").validate({
        rules:
            {
                categories: {
                    required: true,
                    minlength: 4,
                    maxlength: 30
                },
            },
        messages:
            {
                categories:{
                    required: "entrer une categorie",
                    minlength: "il faut que la catégorie > 4 characteres"
                }
            },
        submitHandler: submitFormtow
    });
    /* validation */

    function submitFormtow()
    {
        var dataa = $("#form-ajouter-categorie").serialize();
        $.ajax({

            type : 'POST',
            url  : 'http://localhost/AStream/index.php/admin/add_categorie',
            data :{
                categorie : $('#categories').val()
            } ,


            beforeSend: function()
            {
                $("#catresult").html('<span class="fa fa-plane"></span> &nbsp; sending ...');
            },
            success :  function()
            {
                $("#catresult").html('la catégorie est ajoutée');
                show_categories();
                delete_categorie();
                modify_categorie();
                $('#list-categories').show();
                $('#hide-ct').show();
                $('#show-ct').hide();

            },
            error : function () {
                $("#catresult").html('la catégorie est déja existe');
            }
        });
        return false;
    }

    $('#hide-ct').hide();
    $('#show-ct').click(function () {
        show_categories();
        $('#list-categories').show();
        $('#hide-ct').show();
        $('#show-ct').hide();
    });

    // function to hide users
    $('#hide-ct').click(function () {
        $('#list-categories').hide();
        $('#show-ct').show();
        $('#hide-ct').hide();
    });
});