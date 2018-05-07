$(document).ready(function () {
    // upload a file to the server
    function upload() {
        var file_data = $('#file').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);

        $.ajax({
            url: 'http://localhost/AStream/index.php/utilisateur/upload_video', // point to server-side PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'POST',
            beforeSend : function () {
                $("#agvidresult").html('envoi en cours');
            },
            success: function(){
                $("#agvidresult").html('la vidéo est enregistrée avec succés'); // display response from the PHP script, if any
            },
            error : function(text){
                $("#agvidresult").html('Erreur');
            }
        });
    }

    /*
        Add a video
     */
    /* validation */
    $("#form-ajouter-vid").validate({
        rules:
            {
                titre: {
                    required: true,
                    minlength: 4,
                    maxlength: 60
                },
                titre_original : {
                    required: true,
                    minlength: 4,
                    maxlength: 30
                },
                origine : {
                    required: true,
                    minlength: 4,
                    maxlength: 30
                },
                realisateur : {
                    required: true,
                    minlength: 4,
                    maxlength: 30
                },
                duree : {
                    required: true
                },
                date_sortie : {
                    required: true
                },
                annee_prod : {
                    required: true
                },
                note_presse : {
                    required: true
                },
                description : {
                    required: true,
                    minlength: 10
                },
                categorie : {
                    required: true

                }

            },
        submitHandler: add_video
    });
    /* validation */


    function add_video(){
        var data = $("#form-ajouter-vid").serialize();
        $.ajax({

            type : 'POST',
            url  : 'http://localhost/AStream/index.php/utilisateur/add_video_server',
            data : data ,
            beforeSend: function()
            {
                $("#agvidresult").html('okk');
            },
            success :  function()
            {
                $("#agvidresult").html('l\'upload est effectué avec succés' );
                upload();
            },
            error : function () {
                $("#agvidresult").html('erreur');
            }
        });
        return false;
    }

    // Getting the file name
    $('#file').change(function(e){
        $('#url').val(e.target.files[0].name);
    });

    /*
        Initial instructions
     */
    $('#file').hide();
    $('#url').hide();
    $('#form-vid-data').hide();
    $("#fromurl").on('click',function (e) {
        $('#url').show();
        $('#file').hide();
        $('#file').val('');
        $('#form-vid-data').show();
        $('#type').val('url');
    });

    $("#fromserver").on('click',function (e) {
        $('#file').show();
        $('#url').hide();
        $('#url').val('');
        $('#form-vid-data').show();
        $('#type').val('server');
    });
});