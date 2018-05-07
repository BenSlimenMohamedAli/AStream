<?php
$number = 0;
?>
<?php
foreach ($res as $item){ $number++;?>
    <form id="form-genres" class="animated fadeInDownBig">
        <!-- Grid row -->
        <div class="row">

            <div class="col">
                <!-- Default input -->
                <input type="text" class="form-control hvr-bounce-out tx-four" id="genre" name="genre" value="<?php echo $item->genre; ?>"/>
            </div>
            <!-- Grid column -->
            <div class="col">
                <!-- Default input -->
                <input type="text" class="form-control hvr-bounce-out" id="mdgn" placeholder="modifier" name="mdgn" />
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Default input -->
                <button class="btn bg-one btn-md form-control hvr-bounce-out" title="Supprimer un utilisateur" id="modifier" type="submit"><i class="fa fa-pencil"></i> </button>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Default input -->
                <button class="btn bg-six btn-md form-control hvr-bounce-out" title="Supprimer un utilisateur" id="supprimer" type="reset"><i class="fa fa-trash"></i> </button>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->

    </form>
<?php } ?>
<span class="badge badge-primary badge-pill"><?php echo $number ?></span>
