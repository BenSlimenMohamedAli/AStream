<!--Grid row-->
<div class="row wow animated fadeInRightBig">
    <!--Grid column-->
    <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">
            <div class="card-header bg-tow tx-eight"><div class="navbar-brand">Genres</div>
                <span id="gnresult" class="col-md-6"></span>
                <button class="btn btn-sm bg-five float-right" id="show-gn">liste des genres</button>
                <button class="btn btn-sm bg-five float-right" id="hide-gn">cacher la liste</button>
            </div>
            <!--Card content-->
            <div class="card-body">
                <form id="form-ajouter-genre" class="animated fadeInDownBig">
                    <!-- Grid row -->
                    <div class="row">

                        <div class="col">
                            <!-- Default input -->
                            <input type="text" class="form-control hvr-bounce-out" id="genres" placeholder="genre" name="genres" value=""/>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <button class="btn bg-four btn-md form-control hvr-bounce-out" title="Ajouter une catégorie"  type="submit"><i class="fa fa-plus"></i> </button>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->

                </form>


                <div id="list-genres"></div>


            </div>
        </div>
        <!--/.Card-->

    </div>
    <!--Grid column-->


</div>
<!--Grid row-->
