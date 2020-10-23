<div id="contact" class="container-fluid">
    <div class="mt-4 rounded-0">
        <img src="assets/images/CONTACT1.gif" style="height:100%; width: 100%;" alt="">
    </div>
    <div class="row mt-4 mb-5" style="background:no-repeat center url('https://picsum.photos/seed/picsum/1300/1000') fixed; ">
        <div class="col-md-3 d-flex justify-content-center align-items-center">
            <!-- <div class="row text-white">
                <div class="col-md-12 ">
                    <h2 class=" text-uppercase text-center">contact information</h2>
                    <p class=" text-center mt-5">
                        
                        <img src="assets/images/phone-call.svg" class=" img-fluid" style="height: 50%; width:50%" alt="">

                    </p>
                </div>
                <div class="col-md-12 mt-5 text-center font-weight-bold">
                    <p class="h2">+225 07 98 26 74</p>

                </div>
            </div> -->
        </div>

        <div class="col-md-5  mb-5 mt-5 border border-white rounded p-4 bg-white">
            <div id="msg"></div>
            <form id="form" method="post">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nom">Nom</label>
                        <input id="nom" class="form-control border-bottom border-top-0 border-left-0 border-right-0 rounded-0" type="text" name="nom">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prenom">Prénoms</label>
                        <input id="prenom" class="form-control border-bottom border-top-0 border-left-0 border-right-0 rounded-0" type="text" name="prenoms">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="form-group col-md-12">
                        <label for="email">Email</label>
                        <input id="email" class="form-control border-bottom border-top-0 border-left-0 border-right-0 rounded-0" type="email" name="email">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="form-group col-md-12">
                        <label for="tel">Contact</label>
                        <input id="tel" class="form-control border-bottom border-top-0 border-left-0 border-right-0 rounded-0" type="tel" name="tel">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="form-group col-md-12">
                        <label for="msg">Message</label>
                        <textarea id="msg" class="form-control border-bottom border-top-0 border-left-0 border-right-0 rounded-0" type="text" name="msg"></textarea>
                    </div>
                </div>
                <input type="submit" class="btn mt-3 btn-success" value="Envoyez">
            </form>
        </div>
        <div class="col-md-4 align-items-center justify-content-center d-flex">
            <!-- <div class="row text-white">
                <div class="col-md-12">
                    <p class="h4 "><i class=" fas fa-envelope fa-fw fa-3x" style="vertical-align: middle;"></i>
                        email@mail.com
                    </p>
                </div>
                <div class="col-md-12">
                    <p class="h4 "><i class=" fas fa-map-marker-alt fa-fw fa-3x" style="vertical-align: middle;"></i>
                        situation geographique
                    </p>
                </div>
                <div class="col-md-12 mb-2">
                    <p class="h4 "><i class=" fab fa-facebook fa-fw fa-3x" style="vertical-align: middle;"></i>
                        <a class=" text-decoration-none text-white" href="https://www.facebook.com/docdecodici/" target="_blank">
                            Page Facebook
                        </a>
                    </p>
                </div>
            </div> -->
        </div>

    </div>
    <div class="row mb-5">
        <div class="col-md-9">
            <h2>Situation géographique</h2>
            <iframe class=" rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2972659982483!2d-3.959839085735924!3d5.371557736972013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eccfe45ee9c1%3A0xa184855d868e6bfc!2sCarrefour%20Guiraud!5e0!3m2!1sfr!2sci!4v1603448562225!5m2!1sfr!2sci" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-md-3">
            <h2>Horaire</h2>
            <ul class="list-group">
                <li class="list-group-item <?= (date('w') == 6 || date('w') == 0)?'':'active'; ?>">Jours ouvrable: 9h - 16h</li>
                <li class="list-group-item <?= (date('w') == 6 || date('w') == 0)?'active':''; ?>">Week-end: 10h - 15h</li>
            </ul>

        </div>
    </div>
</div>