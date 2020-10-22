<?php
include("config/db.php");
$q = $db->prepare("select * from deco order by id_deco desc");
$q->execute();
while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
    $d[] = $data;
}

// var_export($d);
?>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <?php
        foreach ($d as $key => $value) { ?>
            <div class="col-md-5 m-3">
                <div class="row shadow-sm  h-100 w-100">
                    <div class="col-md-7">
                        <div class="rounded-0 card__image" style="height: 100%; width:100%">
                            <img class="" style="width:100%; height:70%" src="assets/uploads/<?= $value['lien_image_deco'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h3> <?= $value['titre_deco'] ?> </h3>
                        <hr>
                        <p style="text-align:justify;">
                            <?= $value['description_deco'] ?>
                        </p>
                        <a style="background: #370d05;" class="btn text-decoration-none btn-dark " href="?p=contactez-nous">Nous contactez</a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- <div class="col-md-5">
            <div class="row shadow-sm  w-100 h-100">
                <div class="col-md-7">
                    <div class=" card__image rounded-0">
                        <img class="img-fluid img" style="width:100%" src="https://unsplash.it/400/300?image=41" />
                    </div>
                </div>
                <div class="col-md-5">
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <hr>
                    <p style="text-align:justify;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis maxime repellat 
                    </p>
                </div>
            </div>
        </div> -->


        <!-- <div class="col-md-6 h-100">
            <div class="row shadow-sm mb-2 mr-1">
                <div class="col-md-7">
                    <div class=" card__image">
                        <img class="img-fluid img" style="width:100%" src="https://unsplash.it/400/300?image=102" />
                    </div>
                </div>
                <div class="col-md-5">
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <hr>
                    <p style="text-align:justify;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis maxime repellat incidunt eligendi nam. Ex quidem magni laboriosam officia
                    </p>
                </div>
            </div>
        </div> -->
    </div>
</div>