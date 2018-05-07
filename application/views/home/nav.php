<!-- @ nav : Begin -->
<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-seven tx-eight p-1">
            <?php if($userdata['logged_in']){ ?>
            <!--Grid row-->
            <div class="row pt-2 mb-1 text-center d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-4 mb-1 hvr-push">
                    <h7 class="font-weight-bold">
                        <a><?php echo $userdata['user_nom']?></a>
                    </h7>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-1 hvr-push">
                    <h6 class=" font-weight-bold">
                        <a><?php echo $userdata['user_prenom']?></a>
                    </h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-1 hvr-push">
                    <h6 class=" font-weight-bold">
                        <a><?php echo $userdata['user_role']?></a>
                    </h6>
                </div>
                <!--Grid column-->


                <!--Grid row-->
                <?php }else{ ?>
                    <!--Grid column-->
                    <div class="text-center col-md-12 mb-1">
                        <h7 class="font-weight-bold">
                            <a>Il faut connecter</a>
                        </h7>
                    </div>
                    <!--Grid column-->
                <?php } ?>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-nine">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-user "></span>
            <form>
                <?php if($userdata['logged_in']){ ?>
                <button class="btn bg-ten btn-sm hvr-bounce-in" id="logout_btn" type="submit"><i class="fa fa-sign-out"></i> Déconnection</button>
                <?php } else {?>
                    <button class="btn bg-three btn-sm hvr-bounce-in" id="logout_in" type="submit"><i class="fa fa-sign-out"></i> <a class="tx-eight" href="http://localhost/AStream/index.php/login">Connection</a></button>
                <?php }?>
            </form>
        </button>
    </nav>
</div>
<!-- @ nav : End -->