<?php
$number = 0;
?>
<?php
foreach ($res as $item){ $number++;?>
    <form id="form-modifier" class="animated fadeInDownBig">
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col">
                <!-- Default input -->
                <input readonly="readonly" type="text" class="form-control hvr-bounce-in tx-three" id="u_id" name="u_id" value="<?php echo $item->id ?>"/>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col">
                <!-- Default input -->
                <input type="text" id="u_nom" name="u_nom" class="form-control hvr-bounce-in tx-four" value="<?php echo $item->nom ?>"/>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Default input -->
                <input type="text" id="u_prenom" name="u_prenom" class="form-control hvr-bounce-in tx-four" value="<?php echo $item->prenom ?>"/>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Default input -->
                <input type="text" class="form-control hvr-bounce-in tx-five" id="u_role" name="u_role" value="<?php echo $item->role ?>"/>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Default input -->
                <input type="text" class="form-control hvr-bounce-in tx-six" id="u_mdp" name="u_mdp" value="<?php echo $item->mdp ?>"/>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Default input -->
                <button class="btn bg-four btn-md form-control hvr-bounce-out" title="Modifier un utilisateur" id="modifier" type="submit"><i class="fa fa-user-md"></i> </button>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Default input -->
                <button class="btn bg-six btn-md form-control hvr-bounce-out" title="Supprimer un utilisateur" id="supprimer" type="reset"><i class="fa fa-user-times"></i> </button>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->

    </form>
<?php } ?>
<span class="badge badge-primary badge-pill"><?php echo $number;?></span>
