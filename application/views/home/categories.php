<section class="container mb-4 mt-4 bg-eight p-xl-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

            <h4 class="mb-2 mb-sm-0 pt-1">
                <a class="tx-four" target="_blank">Chercher une vidéo</a>
            </h4>

            <form id="search-form" class="d-flex justify-content-center">
                <!-- Default input -->
                <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                <button class="btn bg-ten btn-sm my-0 p" type="submit">
                    <i class="fa fa-search"></i>
                </button>

            </form>

        </div>

    </div>
<!-- Heading -->

    <div class="row">
        <div class="col">
            <ul class="list-group tx-four text-center">
                <?php foreach ($categories as $item){ ?>
                    <li class="list-group-item hvr-bounce-out"><a href="http://localhost/AStream/index.php/categorie/view/<?php echo $item->categorie; ?>" class="tx-one"><span class="col-md-6"><?php echo $item->categorie; ?></span> <span class="badge bg-nine badge-pill">45</span></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col">

        </div>
    </div>

</section>