<?php
include("template/header.php"); ?>
<div class="bg-index m-0 p-0 pt-5">
  <div class="col-12 col-md-8 m-0 p-0 mx-auto">
    <div id="realisations" class="pb-4"></div>
    <div class="col-12 mx-auto text-center line">
      <span class="size text-white position-relative pl-1 pr-1 bg-index" style="top: -28px">Mes Réalisations</span>
    </div>

    <div class="col-12 m-0 p-0 mb-5 row">

      <div class="col-md-3 col-11 mx-auto m-0 mb-2 p-0">
        <a href="" id="effecthover1" class="effecttext text-center col-11 text-center mx-auto m-0 p-0">
          <img id="effectimage1" onmouseover="cardAnimation(this.parentNode.id)" src="assets/img/easybuy.jpg" alt="" class="col-12 col-md-11 m-0 p-0" style="height: 300px;">
          <div id="effecttext1" onmouseout="removeCardAnimation(this.parentNode.id)" class="d-none col-12 col-md-11 m-0 p-0" style="height: 300px;">
            <div class="d-flex col-12 m-0 p-0" style="height: 300px;">
              <p class="my-auto mx-auto text-white"><i class="fas fa-search-plus fa-3x"></i></p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 col-11 mx-auto m-0 mb-2 p-0">
        <a href="" id="effecthover2" class="effecttext text-center col-11 text-center mx-auto m-0 p-0">
          <img id="effectimage2" onmouseover="cardAnimation(this.parentNode.id)" src="https://image.shutterstock.com/image-vector/no-image-available-sign-internet-600w-261719003.jpg" alt="" class="col-12 col-md-11 m-0 p-0" style="height: 300px;">
          <div id="effecttext2" onmouseout="removeCardAnimation(this.parentNode.id)" class="d-none col-12 col-md-11 m-0 p-0" style="height: 300px;">
            <div class="d-flex col-12 m-0 p-0" style="height: 300px;">
              <p class="my-auto mx-auto text-white"><i class="fas fa-search-plus fa-3x"></i></p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 col-11 mx-auto m-0 mb-2 p-0">
        <a href="" id="effecthover3" class="effecttext text-center col-11 text-center mx-auto m-0 p-0">
          <img id="effectimage3" onmouseover="cardAnimation(this.parentNode.id)" src="https://image.shutterstock.com/image-vector/no-image-available-sign-internet-600w-261719003.jpg" alt="" class="col-12 col-md-11 m-0 p-0" style="height: 300px;">
          <div id="effecttext3" onmouseout="removeCardAnimation(this.parentNode.id)" class="d-none col-12 col-md-11 m-0 p-0" style="height: 300px;">
            <div class="d-flex col-12 m-0 p-0" style="height: 300px;">
              <p class="my-auto mx-auto text-white"><i class="fas fa-search-plus fa-3x"></i></p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 col-11 mx-auto m-0 mb-2 p-0">
        <a href="" id="effecthover4" class="effecttext text-center col-11 text-center mx-auto m-0 p-0">
          <img id="effectimage4" onmouseover="cardAnimation(this.parentNode.id)" src="https://image.shutterstock.com/image-vector/no-image-available-sign-internet-600w-261719003.jpg" alt="" class="col-12 col-md-11 m-0 p-0" style="height: 300px;">
          <div id="effecttext4" onmouseout="removeCardAnimation(this.parentNode.id)" class="d-none col-12 col-md-11 m-0 p-0" style="height: 300px;">
            <div class="d-flex col-12 m-0 p-0" style="height: 300px;">
              <p class="my-auto mx-auto text-white"><i class="fas fa-search-plus fa-3x"></i></p>
            </div>
          </div>
        </a>
      </div>

    </div>






    <div id="about" class="pb-4"></div>
    <div class="col-12 mx-auto text-center line">
      <span class="size text-white position-relative pl-1 pr-1 bg-index" style="top: -28px">A Propos</span>
    </div>

    <div class="container-fluid pt-4">
      <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
          <div class="carousel-item col-md-3 active">
            <img class="img-fluid mx-auto d-block" src="assets/img/github.png" alt="slide 1" style="height: 100px">
          </div>
          <div class="carousel-item col-md-3">
            <img class="img-fluid mx-auto d-block" src="assets/img/php.png" alt="slide 2" style="height: 100px">
          </div>
          <div class="carousel-item col-md-3">
            <img class="img-fluid mx-auto d-block" src="assets/img/mysql.png" alt="slide 3" style="height: 100px">
          </div>
          <div class="carousel-item col-md-3">
            <img class="img-fluid mx-auto d-block" src="assets/img/html.png" alt="slide 4" style="height: 100px">
          </div>
          <div class="carousel-item col-md-3">
            <img class="img-fluid mx-auto d-block" src="assets/img/css.png" alt="slide 5" style="height: 100px">
          </div>
          <div class="carousel-item col-md-3">
            <img class="img-fluid mx-auto d-block" src="assets/img/bootstrap.png" alt="slide 6" style="height: 100px">
          </div>
          <div class="carousel-item col-md-3">
            <img class="img-fluid mx-auto d-block" src="assets/img/js.png" alt="slide 7" style="height: 100px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
          <i class="fa fa-chevron-left fa-lg text-muted"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
          <i class="fa fa-chevron-right fa-lg text-muted"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="mt-5">
      <p class="text-white">
        Après plusieurs études différentes (Méchanique automobile, maintenance électrique, Maintenance Balise GPS...) je me suis tourné vers de l'autodidacte Développement Web ainsi que le développement scripts pour des jeux vidéos.<br><br>
        Suite à ça souhaitant approfondir mes connaissances, je me suis inscrit chez Vitamine T afin de faire la formation Développeur Web / Application Mobile (Powered By Simplon.co).<br><br>
        Grâce à cette formation j'ai pu approfondir mes connaissances dans différentes technologies (HTML / CSS (Bootstrap4) / PHP / JavaScript / JSON …). Suite à cette formation j'ai développé des projets personnels afin de travailler ma logique ainsi que ma connaissances de ses langages.
      </p>
    </div>




    <div id="contact" class="pb-4"></div>
    <div class="col-12 mx-auto text-center line">
      <span class="size text-white position-relative pl-1 pr-1 bg-index" style="top: -28px">Me Contacter</span>
    </div>

    <form action="index.php#contact" method="post" class="col-11 mx-auto row">
      <div class="col-11 col-md-5 mx-auto m-0 p-0 colorwhite mt-2">
        <input class="effect-1 col-12 m-0 bg-form text-white" type="text" name="firstname" placeholder="Nom (Obligatoire)" required>
        <span class="focus-border"></span>
      </div>
      <div class="col-11 col-md-5 mx-auto m-0 p-0 colorwhite mt-2">
        <input class="effect-1 col-12 m-0 bg-form text-white" type="text" name="lastname" placeholder="Prénom (Obligatoire)" required>
        <span class="focus-border"></span>
      </div>
      <div class="col-11 col-md-5 mx-auto m-0 p-0 colorwhite mt-2">
        <input class="effect-1 col-12 m-0 bg-form text-white" type="tel" name="phone" placeholder="Téléphone">
        <span class="focus-border"></span>
      </div>
      <div class="col-11 col-md-5 mx-auto m-0 p-0 colorwhite mt-2">
        <input class="effect-1 col-12 m-0 bg-form text-white" type="email" name="mail" placeholder="E-mail (Obligatoire)" required>
        <span class="focus-border"></span>
      </div>
      <div class="col-11 mx-auto m-0 p-0 colorwhite mt-2">
        <textarea class="effect-1 col-12 m-0 bg-form text-white" name="message" placeholder="Sujet.. (Obligatoire)" cols="30" rows="5" required></textarea>
        <span class="focus-border"></span>
      </div>
      <div class="col-5 mx-auto m-0 mb-5 mt-2 p-0 d-flex">
        <input class="my-auto mx-auto btn btn-perso" type="submit" name="send" value="Envoyer">
      </div>
    </form>

    <a href="#top-page" class="position-fixed" style="bottom: 0px; right: 0px; background-color: #181A27; border-radius: 90px;">
      <svg width="85" height="85" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="line-arrow-up1" d="M48.9919 95L48.9919 5M48.9919 5L85 40.8475M48.9919 5L13.75 40.8475" stroke="rgba(55,137,97,1)" stroke-width="4.0px" stroke-linecap="round" style="animation-duration: 3s;"></path>
      </svg>
    </a>
  </div>
  <?php
  include("template/footer.php"); ?>