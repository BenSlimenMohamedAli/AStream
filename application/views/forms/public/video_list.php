<nav class="navbar navbar-dark bg-six">
    <div class="navbar-brand"><?php echo 'Catégorie : '.$cat; ?></div>
</nav>
<section class="container">

    <ul class="list-group m-4">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span class="mr-1 btn bg-tow btn-sm">Titre</span>
                <span class="mr-1 btn bg-ten btn-sm">Durée</span>
                <span class="mr-1 btn bg-three btn-sm">Genre</span>
                <span class="mr-1 btn bg-seven btn-sm">Réalisateur</span>
                <span class="badge bg-five badge-pill">Note presse</span>
                <span class="badge bg-nine badge-pill">Note spectateurs</span>
                <span class="badge bg-four badge-pill">Nombre des vues</span>
            </li>
    </ul>
    <ul class="list-group m-4">
        <?php foreach ($vids as $item){?>
            <a href="http://localhost/AStream/index.php/videos/view/<?php echo $item->titre; ?>">
                <li class="list-group-item d-flex justify-content-between align-items-center hvr-bounce-out mt-1">
                    <span class="mr-1 tx-tow"><?php echo $item->titre; ?></span>
                    <span class="mr-1 tx-ten"><?php echo $item->duree.' minutes'; ?></span>
                    <span class="mr-1 tx-three"><?php echo $item->genre; ?></span>
                    <span class="mr-1 tx-seven"><?php echo $item->realisateur; ?></span>
                    <span class="badge bg-five badge-pill"><?php echo $item->note_presse; ?></span>
                    <span class="badge bg-nine badge-pill"><?php echo $item->note_spectateurs; ?></span>
                    <span class="badge bg-four badge-pill"><?php echo $item->nbr_vue; ?></span>
                </li>
            </a>
        <?php } ?>
    </ul>
</section>