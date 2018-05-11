<!--Grid row-->
<div class="row wow animated fadeInDown col-md-9">

    <!--Grid column-->
    <div class="col-md-12">

        <!--Card-->
        <div class="card">
            <div class="card-header bg-nine tx-eight"><div class="navbar-brand">Demande d'ajout d'une vidéo</div><span id="agvidresult" class="col-md-6"></span>
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
                    <div id="form-vid-data" class="row m-2">
                        <!-- Grid row -->
                        <div class="col m-2">
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <input type="text" id="titre" name="titre" placeholder="titre" class="form-control hvr-bounce-out"/>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <input type="text" id="titre_original" name="titre_original" placeholder="titre original" class="form-control hvr-bounce-out"/>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <input type="text" name="origine" id="origine" placeholder="origine" class="form-control hvr-bounce-out" />
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <input type="text" name="realisateur" id="realisateur" placeholder="realisateur" class="form-control hvr-bounce-out" />
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="col">
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <input type="number" name="duree" id="duree" placeholder="durée : minutes" class="form-control hvr-bounce-out" />
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <input type="date" name="date_sortie" id="date_sortie" title="date de sortie" class="form-control hvr-bounce-out" />
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <input type="date" name="annee_prod" id="annee_prod" title="Année de prouction" class="form-control hvr-bounce-out" />
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <textarea name="description" id="description" placeholder="description" class="form-control" ></textarea>
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
                                <input type="number" name="note_presse" id="note_presse" placeholder="note presse" class="form-control hvr-bounce-out" />
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <select id="vid_categorie" name="vid_categorie" class="form-control">
                                    <option>Choisir une catégorie</option>
                                    <?php foreach ($categories as $item){ ?>
                                        <option><?php echo $item->categorie; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <select id="vid_genre" name="vid_genre" class="form-control">
                                    <option>Choisir un genre</option>
                                    <?php foreach ($genres as $item){ ?>
                                        <option><?php echo $item->genre; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="row m-1">
                                <!-- Default input -->
                                <input type="text" id="url" name="url" placeholder="url du video" class="form-control hvr-bounce-out"/>
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

                <!-- Show users list here -->
                <div id="form-actors"></div>

            </div>

        </div>
        <!--/.Card-->

    </div>
    <!--Grid column-->

</div>
<!--Grid row-->
