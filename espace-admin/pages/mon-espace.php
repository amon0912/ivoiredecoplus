<?php
if (empty($_SESSION['id_user'])) {
    header('Location:index.php');
} else { ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 mb-3">
                <a class="lead text-decoration-none" href="?p=add-galerie">
                    <div class="card w-100 h-100 btn-outline-primary">
                        <div class="card-body">
                            <i class="fas fa-plus-circle fa-3x fa-fw"></i>
                            <p class="card-text">Ajoutez une image de galerie</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  -->
            <div class="col-md-4 mb-3">
                <a class="lead text-decoration-none" href="?p=show-deco">
                    <div class="card w-100 h-100 btn bg-warning">
                        <div class="card-body">
                            <i class="fas fa-braille fa-3x fa-fw"></i>
                            <p class="card-text">Liste des décos</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  -->
            <div class="col-md-4 mb-3">
                <a class="lead text-decoration-none" href="?p=add">
                    <div class="card w-100 h-100 btn-outline-info">
                        <div class="card-body">
                            <i class="fas fa-envelope fa-3x fa-fw"></i>
                            <p class="card-text">Messages</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  -->
            
        </div>
    </div>

<?php } ?>