<!--Grid row-->
<div class="row wow animated fadeInDown">

    <!--Grid column-->
    <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">
            <div class="card-header bg-nine tx-eight"><div class="navbar-brand" id="aj-vid-titre">Ajouter un vidéo</div><span id="agvidresult" class="col-md-6"></span>
            </div>
            <!--Card content-->
            <div class="card-body">
                <form id="form-ajouter-vid"  enctype="multipart/form-data">
                    <!-- Grid column -->
                    <div class="row m-1">
                        <!-- Default input -->
                        <a id="fromurl" title="Ajouter un Vidéo par url" class="btn bg-three btn-md form-control hvr-bounce-out">Ajouter url</a>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="row m-1">
                        <!-- Default input -->
                        <a id="fromserver" title="Ajouter un Vidéo par upload" class="btn bg-three btn-md form-control hvr-bounce-out">Upload video</a>
                    </div>
                    <!-- Grid column -->
                    <div id="form-vid-data" class="row m-2 animated fadeInUp">
                        <!-- Grid row -->
                        <div class="col m-2">
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Titre </span>
                                <input type="text" id="titre" name="titre" class="form-control hvr-bounce-out text-center"/>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Titre original</span>
                                <input type="text" id="titre_original" name="titre_original" class="form-control hvr-bounce-out text-center"/>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Origine </span>
                                <input type="text" name="origine" id="origine" class="form-control hvr-bounce-out text-center" />
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Réalisateur </span>
                                <input type="text" name="realisateur" id="realisateur" class="form-control hvr-bounce-out text-center" />
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="col">
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Durée (Minutes) </span>
                                <input type="number" name="duree" id="duree" class="form-control hvr-bounce-out text-center" />
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Date de sortie </span>
                                <input type="date" name="date_sortie" id="date_sortie" title="date de sortie" class="form-control hvr-bounce-out text-center" />
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Année du production </span>
                                <input type="date" name="annee_prod" id="annee_prod" title="Année de prouction" class="form-control hvr-bounce-out text-center" />
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Description </span>
                                <textarea name="description" id="description" class="form-control text-center" ></textarea>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <button id="addVid" title="Ajouter un Vidéo" class="btn bg-five btn-md form-control hvr-bounce-out" type="submit"><i class="fa fa-video-camera"></i></button>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="col m-2">
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Note presse </span>
                                <input type="number" name="note_presse" id="note_presse" class="form-control hvr-bounce-out text-center" />
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Catégorie </span>
                                <select id="vid_categorie" name="vid_categorie" class="form-control text-center">
                                    <?php foreach ($categories as $item){ ?>
                                    <option><?php echo $item->categorie; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">Genre </span>
                                <select id="vid_genre" name="vid_genre" class="form-control text-center">
                                    <?php foreach ($genres as $item){ ?>
                                        <option><?php echo $item->genre; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <span class="tx-ten">URL </span>
                                <input type="text" id="url" name="url" class="form-control hvr-bounce-out text-center"/>
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <input type="hidden" id="type" name="type" class="form-control hvr-bounce-out"/>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <input type="file" name="file" id="file" placeholder="choisir une fichier" class="tx-four form-control-file hvr-bounce-out" />
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </form>
                <form id="form-ajouter-act">
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <input type="text"  placeholder="nom" class="form-control hvr-bounce-out"/>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <input type="text"  placeholder="prenom" class="form-control hvr-bounce-out"/>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <input type="text"  placeholder="mot de passe" class="form-control hvr-bounce-out" />
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <button title="Ajouter un utilisateur" class="btn bg-one btn-md form-control hvr-bounce-out" type="submit"><i class="fa fa-user-plus"></i></button>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <button title="Ajouter un utilisateur" class="btn bg-ten btn-md form-control hvr-bounce-out" type="submit">Terminer</button>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </form>

                <!-- Show users list here -->
                <div id="form-actors"></div>

            </div>

        </div>
        <!--/.Card-->

    </div>
    <!--Grid column-->

</div>
<!--Grid row-->


<!--Grid row-->
<div class="row wow animated fadeInDown">

    <!--Grid column-->
    <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">
            <div class="card-header bg-ten tx-eight"><div class="navbar-brand">Liste des vidéos</div>
            </div>
            <!--Card content-->
            <div class="card-body">
                <!-- Show video list here -->
                <div id="list-video"></div>
            </div>
        </div>
        <!--/.Card-->
    </div>
    <!--Grid column-->

</div>
<!--Grid row-->

