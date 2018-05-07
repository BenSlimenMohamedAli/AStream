<!--Grid row-->
<div class="row wow animated fadeInDown">

    <!--Grid column-->
    <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">
            <div class="card-header bg-tow tx-eight"><div class="navbar-brand">Utilisateurs</div><span id="result" class="col-md-6"></span>
                <button class="btn btn-sm bg-five float-right" id="show-us">liste des utilisateurs</button>
                <button class="btn btn-sm bg-five float-right" id="hide-us">cacher la liste</button>
            </div>
            <!--Card content-->
            <div class="card-body">
                <form id="form-ajouter">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <input type="text" id="nom" name="nom" placeholder="nom" class="form-control hvr-bounce-out"/>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <input type="text" id="prenom" name="prenom" placeholder="prenom" class="form-control hvr-bounce-out"/>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <input type="text" name="mdp" id="mdp" placeholder="mot de passe" class="form-control hvr-bounce-out" />
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <button title="Ajouter un utilisateur" class="btn bg-one btn-md form-control hvr-bounce-out" type="submit"><i class="fa fa-user-plus"></i></button>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </form>

                <!-- Show users list here -->
                <div id="form-users"></div>

            </div>

        </div>
        <!--/.Card-->

    </div>
    <!--Grid column-->

</div>
<!--Grid row-->
