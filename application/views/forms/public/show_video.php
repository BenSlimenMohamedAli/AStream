<?php foreach ($info as $item){ ?>
    <section class="container pr-5 pt-1 pl-5 pb-2 mb-2">
        <?php if(strcmp($item->type,'url') == 0){ ?>
        <div class="plyr__video-embed" id="player">
            <iframe src="<?php echo $item->url;?>" allowfullscreen allowtransparency allow="autoplay"></iframe>
        </div>

        <?php }else{ ?>
            <video poster="/path/to/poster.jpg" style="width: 100%;" id="player" playsinline controls>
                <source src="<?php echo $item->url;?>" type="video/mp4">

                <!-- Captions are optional -->
                <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default>
            </video>
        <?php } ?>
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

        <a href="http://localhost/AStream/index.php/videos/view/<?php echo $item->titre; ?>">
            <li class="list-group-item d-flex justify-content-between align-items-center m-2">
                <span class="mr-1 tx-tow"><?php echo $item->titre; ?></span>
                <span class="mr-1 tx-ten"><?php echo $item->duree.' minutes'; ?></span>
                <span class="mr-1 tx-three"><?php echo $item->genre; ?></span>
                <span class="mr-1 tx-seven"><?php echo $item->realisateur; ?></span>
                <span class="badge bg-five badge-pill"><?php echo $item->note_presse; ?></span>
                <span class="badge bg-nine badge-pill"><?php echo $item->note_spectateurs; ?></span>
                <span class="badge bg-four badge-pill"><?php echo $item->nbr_vue; ?></span>
            </li>
        </a>
    </section>
<?php } ?>