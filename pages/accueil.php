<!-- Slide image -->
<div class="container mt-3">
    <div id="my-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <!-- <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li> -->
            <!-- <li data-target="#my-carousel" data-slide-to="1"></li> -->
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/banner-1.gif" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/banner-2.gif" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/banner-3.gif" alt="">
            </div>
            <!-- <div class="carousel-item">
                <img class="d-block w-100" src="http://opencart.templatemela.com/OPCADD2/OPC047/image/cache/catalog/main-banner-2-1301x491.jpg" alt="">
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Card -->
    <?php include('inc/accueil/card.php') ?>

</div>
<!-- section jumbotron -->
<div class="container-fluid">
    <div class="row pt-5" style="background: #f4f4f5;">
        <div class="col-md-6">
            <div class="m-4 card__image rounded-0" style="border: #2c3749 25px solid; ">
                <img src="http://opencart.templatemela.com/OPCADD2/OPC047/image/catalog/category-2.jpg" class="img img-fluid rounded-0" style="width: 100%;" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="m-4 text-left">Bienvenue à ivoire-décoplus <br>leader de la décoration intérieure en cote d'ivoire.</h2>
            <div class="d-flex align-items-start justify-content-start">
                <!-- <div>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop text-dark" style="font-size: 70px;" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
                        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
                    </svg>
                </div> -->
                <div class="ml-4" style="text-align: justify; font-size:1.2em">
                    <!-- <h3>Lorem </h3> -->
                    <p>Pourquoi la décoration intérieure est importante? De nos jours avoir une maison bien décorée n'est pas chose facile diverses personnes ont diverses opinions sur la décoration. Certains trouvent que cela embellit une maison ; d’autres croient que c’est une perte de temps. Personnellement, nous croyons que la décoration d’une maison (ou
                        d’un appartement) est ce qui en fait un foyer. N'hésitez pas dès aujourd'hui, changez votre monde en affirmant vos valeurs chez vous.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- fin section jumbotron -->


<!-- section produit -->
<div class="container">
    <h2 class="mt-4 text-center text-uppercase">Mes produits </h2>
    <div class="text-center">
        <i class="fas fa-ellipsis-h fa-3x "></i>
    </div>
</div>
<!-- fin section produit -->

<!-- carrousel plus -->
<?php include("inc/accueil/carrousel-plus.php"); ?>
<!-- fin carrousel plus -->

<!-- section temoignage -->
<?php include("inc/accueil/temoignage.php"); ?>
<!-- fin section temoignage -->