$(document).ready(function () {

    /*
       Affichage des genres
    */
    function show_genres() {
        $.ajax({
            type : 'POST',
            url  : 'http://localhost/AStream/index.php/admin/load_genres',
            success :  function(text)
            {
                $("div#list-genres").html(text);
                delete_genre();
                modify_genre();
            }


        });
        return false;

    }

    /*
        Modification des catégories
     */
    function modify_genre(){
        $('form#form-genres').on('submit',function (e) {
            e.preventDefault(); // stop form from submitting

            var gn = $('#genre',this).val();
            var ne = $('#mdgn',this).val()
            console.log(gn+'  '+ne);


            //modifier une genre
            $.ajax({
                type : 'POST',
                url  : 'http://localhost/AStream/index.php/admin/modify_genre',
                data : {
                    old : gn,
                    new : ne
                },

                beforeSend: function()
                {
                    $("#gnresult").html('Moification en cours ...');
                },
                success :  function()
                {
                    $("#gnresult").html('le genre : '+gn+' est bien modifiée => '+ne);
                    show_genres();
                },
                error : function () {
                    $("#gnresult").html('le genre : '+ne+' est déja existe');
                }
            });
        });
    }


    /*
       Suppression des genres
    */
    function delete_genre(){
        $('form#form-genres').on('reset',function (e) {
            e.preventDefault(); // stop form from submitting

            var gn = $('#genre',this).val();
            //supprimer un genre
            $.ajax({
                type : 'POST',
                url  : 'http://localhost/AStream/index.php/admin/delete_genre',
                data : {
                    genre : gn
                },

                beforeSend: function()
                {
                    $("#gnresult").html('Suppression en cours ...');
                },
                success :  function()
                {
                    $("#gnresult").html('la genre : '+gn+' est bien supprimé');
                    show_genres();
                    modify_genre()

                },
                error : function () {
                    $("#gnresult").html('Il ya des vidéos relatives a ce genre');
                }
            });
        });
    }

    /*
        Ajout des catégories
     */
    /* validation */
    $("#form-ajouter-genre").validate({
        rules:
            {
                genres: {
                    required: true,
                    minlength: 4,
                    maxlength: 30
                },
            },
        messages:
            {
                genres :{
                    required: "entrer un genre",
                    minlength: "il faut que le genre > 4 characteres"
                }
            },
        submitHandler: submitFormtow
    });
    /* validation */

    function submitFormtow()
    {
        var dataa = $("#form-ajouter-genre").serialize();
        $.ajax({

            type : 'POST',
            url  : 'http://localhost/AStream/index.php/admin/add_genre',
            data :{
                genre : $('#genres').val()
            } ,


            beforeSend: function()
            {
                $("#gnresult").html('<span class="fa fa-plane"></span> &nbsp; sending ...');
            },
            success :  function()
            {
                $("#gnresult").html('le genre est ajouté');
                show_genres();
                delete_genre();
                modify_genre();
                $('#list-genres').show();
                $('#hide-gn').show();
                $('#show-gn').hide();


            },
            error : function () {
                $("#gnresult").html('le genre est déja existe');
            }
        });
        return false;
    }

    $('#hide-gn').hide();
    $('#show-gn').click(function () {
        show_genres();
        $('#list-genres').show();
        $('#hide-gn').show();
        $('#show-gn').hide();
    });

    // function to hide users
    $('#hide-gn').click(function () {
        $('#list-genres').hide();
        $('#show-gn').show();
        $('#hide-gn').hide();
    });
});