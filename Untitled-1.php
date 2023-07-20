!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;0,900;1,700&display=swap" rel="stylesheet"/>
	<script src="myscripts.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); //porte d'entrée des fichiers css et js  ?>
  </head>
  <body>
    <section id="hero">
      <header>
        <nav>
          <img src="<?php echo get_template_directory_uri(); ?>/icones/logo_abaco.svg" alt="" class="logo" />

          <div class="categories">
            <a href="" id="stages_nav"> Stages</a>

            <a href="">Baptêmes</a>

            <a href="">Voyages</a>

            <a href="">Bons cadeau</a>

            <a href="">Infos</a>

            <a href="">Team building</a>
          </div>

          <div class="social_media">
            <img  src="<?php echo get_template_directory_uri(); ?>/icones/facebook.svg" alt="facebook" id="fb" />
    
            <img  src=" <?php echo get_template_directory_uri(); ?>/icones/instagram.svg" alt="instagram" id="ig" />
            <img src=" <?php echo get_template_directory_uri(); ?>/icones/youtube.svg" alt="youtube" id="yt"/>
          </div>
        </nav>
      </header>

      <div class="hero_box">
        <h1>à Bout d’Aile Comme un oiseau</h1>
        <h2>Une école de parapente dans les Hautes -Pyrenées</h2>
        <div class="icones-fixes">
          <div id="rs2">
            <img src="<?php echo get_template_directory_uri(); ?>/icones/search.svg" id="search" alt="" />
          </div>
          <div class="rs">
            <img src="<?php echo get_template_directory_uri(); ?>/icones/shopping-cart.svg" id="shop" class="rs" alt="" />
          </div>
          <div class="rs">
            <img src="<?php echo get_template_directory_uri(); ?>/icones/user.svg" id="user" class="rs"  alt="" />
          </div>
        </div>
        <div id="btn-hero"><a href=""> Découvrir</a></div>
        <h3>Hautes Pyrénées- Val D’Azun - Aucun - Argelès</h3>
      </div>
    </section>
    <section id="viniettes">
      <div id="v_box">
        <div>
          <img src="icones/viniettte-montagnes.svg" alt="" />
          <p>Une école locale</p>
        </div>
        <div>
          <img src="icones/viniette-reservation.svg" alt="" />
          <p>Réservation en ligne</p>
        </div>
        <div>
          <img src="icones/viniettte-groupes.svg" alt="" />
          <p>Forfaits des groupes</p>
        </div>
        <div>
          <img src="icones/viniettte-paiement.svg" alt="" />
          <p>Paiement sécurisé</p>
        </div>
      </div>
    </section>
    <section id="offre">
      <div class="titre">
        <div class="cross"></div>
        <h4>Notre offre</h4>
      </div>
      <div id="boxes_offre">
        <div class="box_offre">
          <img src="img/stages-offre.png" alt="" />
          <h5>Stages</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
            iaculis urna ac at integer. Rhoncus morbi ac at integer.
          </p>
          <a href="" class="btn_voir">Voir</a>
        </div>
        <div class="box_offre">
          <img src="img/baptemes-offre.png" alt="" />
          <h5>Baptêmes</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
            iaculis urna ac at integer. Rhoncus morbi ac at integer.
          </p>
          <a href="" class="btn_voir">Voir</a>
        </div>
        <div class="box_offre">
          <img src="img/voyages-offre.png" alt="" />
          <h5>Voyages</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
            iaculis urna ac at integer. Rhoncus morbi ac at integer.
          </p>
          <a href="" class="btn_voir">Voir</a>
        </div>
        <div class="box_offre">
          <img src="img/team-offre.png" alt="" />
          <h5>Groupes</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
            iaculis urna ac at integer. Rhoncus morbi ac at integer.
          </p>
          <a href="" class="btn_voir">Voir</a>
        </div>
      </div>
    </section>
    <section id="ecole">
      <div class="titre">
        <div class="cross"></div>
        <h4>Ecole ABACO</h4>

        <img src="icones/viniette_parapente.svg" alt="" />
      </div>
      <!-- <img src="icones/montagnes_fond.svg" alt="" class="form-fond" /> -->
      <div class="flexBoxcolumn">
        <div id="ecole_box">
          <div id="photo_box">
            <div id="rectangle_bleu"></div>
            <img src="img/ecole_image_bi.jpg" alt="" id="ecole_img" />
          </div>
          <div class="text_box">
            <h5>Notre histoire</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
              iaculis urna ac at integer. Lorem ipsum dolor sit amet
              consectetur. Rhoncus morbi mattis ut iaculis urna ac at integer.
              Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
              iaculis urna ac at integer. Lorem ipsum dolor sit amet
              consectetur. Rhoncus morbi mattis ut iaculis urna ac at integer.
            </p>
            <h5>équipe</h5>
            <p>
              Lorem ipsum dolor sit amet <strong> consectetur.</strong> Rhoncus
              morbi mattis ut iaculis urna ac at <strong> integer.</strong>
              Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
              iaculis urna ac at integer. Lorem ipsum dolor sit amet
              consectetur. Rhoncus morbi mattis ut iaculis urna ac at integer.
            </p>
          </div>
        </div>

        <div></div>
        <a href="" class="btn" id="btn-ecole">Découvir notre école</a>
      </div>
    </section>

    <section id="cadeau">
      <div class="titre">
        <div class="cross"></div>
        <img src="icones/viniette-gift.svg" alt="" />
        <h4>Envie de faire plaisir à vos proches?</h4>
      </div>
      <div class="flexBoxcolumn">
        <div class="cadeau-box">
          <div class="box-text">
            <h5>Offrir une carte cadeau !</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
              iaculis urna ac at integer.
            </p>
            <ul>
              <li>
                Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
                iaculis urna ac at integer.
              </li>
              <li>
                Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
                iaculis urna ac at integer.
              </li>
            </ul>
            <p>
              Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
              iaculis urna ac at integer.
            </p>
          </div>
          <div class="box-photo">
            <div id="cadeau1">
              <img src="img/cadeau1_bi.jpg" alt="" />
            </div>
            <div id="cadeau2">
              <img src="img/cadeau2_bi.jpg" alt="" />
            </div>
          </div>
        </div>
        <div>
          <a href="" class="btn" id="btn_cadeau">Acheter une carte cadeau</a>
        </div>
      </div>
    </section>
    <section id="avis">
      <div class="titre">
        <div class="cross"></div>
        <h4>Ils nous ont fait confiance</h4>
        <img src="icones/viniette-avis.svg" alt="" />
      </div>

      <!-- <div id="montagne_box">
        <img src="icones/montagnes_fond.svg" alt="" class="vector_montagnes" />

        <img src="icones/montagnes_fond.svg" alt="" class="vector_montagnes" />
      </div>-->

      <div class="container">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="slider_container">
          <div class="slides fade" style="display: block">
            <div class="review-item">
              <img src="img/avatar_avis1.png" alt="" class="avatar" />
              <span class="star-rating"
                >&#9733;&#9733;&#9733;&#9733;&#9733;</span
              ><span class="comment"
                >Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                amet sint. Velit officia cons</span
              >
              <span class="reviewer-info">John W. from Charlotte</span>
            </div>
            <div class="review-item">
              <img src="img/avatar_avis2.png" alt="" class="avatar" />
              <span class="star-rating">&#9733;&#9733;&#9733;&#9733;</span
              ><span class="comment"
                >Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                amet sint. Velit officia cons</span
              >
              <span class="reviewer-info"
                >By Richard S. from Kannapolis, NC</span
              >
            </div>
            <div class="review-item">
              <img src="img/avatar_avis3.png" alt="" class="avatar" />
              <span class="star-rating"
                >&#9733;&#9733;&#9733;&#9733;&#9733;</span
              >
              <span class="comment"
                >Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                amet sint. Velit officia cons</span
              >
              <span class="reviewer-info">By Mike from Kannapolis, NC</span>
            </div>
          </div>

          <div class="slides fade" style="display: none">
            <div class="review-item">
              <img src="img/avatar_avis5.png" alt="" class="avatar" />
              <span class="star-rating"
                >&#9733;&#9733;&#9733;&#9733;&#9733;
              </span>
              <span class="comment"
                >Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                amet sint. Velit officia cons</span
              >
              <span class="reviewer-info">By Second Page Reviewer, NC</span>
            </div>
            <div class="review-item">
              <img src="img/avatar_avis4.png" alt="" class="avatar" />
              <span class="star-rating">&#9733;&#9733;&#9733;&#9733;</span>
              <span class="comment"
                >Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                amet sint. Velit officia cons</span
              >
              <span class="reviewer-info">By Second Page Reviewer, NC</span>
            </div>
            <div class="review-item">
              <img src="img/avatar_avis6.png" alt="" class="avatar" />
              <span class="star-rating"
                >&#9733;&#9733;&#9733;&#9733;&#9733;</span
              >
              <span class="comment"
                >Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                amet sint. Velit officia cons</span
              >
              <span class="reviewer-info">By Second Page Reviewer, NC</span>
            </div>
          </div>
        </div>

        <div class="slider_dots">
          <span
            class="slider_dots--dot"
            id="1"
            onclick="dotPageChange(1)"
          ></span>
          <span
            class="slider_dots--dot"
            id="2"
            onclick="dotPageChange(2)"
          ></span>
        </div>
      </div>

      <!-- <img src="icones/arrow_left.svg" alt="" class="arrow" id="arrow_left" />
      <div class="hero_box">
        <div id="avis_total">
          <div class="avis_container">
            <img src="img/avatar_avis1.png" alt="" class="avatar" />
            <img src="" alt="" class="stars" />
            <p class="comment">
              Amet minim mollit non deserunt ullamco est sit aliqua dolor do
              amet sint. Velit officia consequat duis enim velit mollit.
            </p>
            <p class="name_avis">Elisa Grant</p>
          </div>
          <div class="avis_container">
            <img src="img/avatar_avis2.png" alt="" class="avatar" />
            <img src="" alt="" class="stars" />
            <p class="comment">
              met minim mollit non deserunt ullamco est sit aliqua dolor do amet
              sint. Velit officia consequat duis enim velit mollit.
            </p>
            <p class="name_avis">John Smith</p>
          </div>
          <div class="avis_container">
            <img src="img/avatar_avis3.png" alt="" class="avatar" />
            <img src="" alt="" class="stars" />
            <p class="comment">
              Amet minim mollit non deserunt ullamco est sit aliqua dolor do
              amet sint. Velit officia consequat duis enim velit mollit.
            </p>
            <p class="name_avis">Elisa Gran</p>
          </div>
        </div>

        <img src="icones/arrow_right.svg" alt="" class="arrow" id="arrow_right"
      </div> -->
      <div id="buttons">
        <a href="" id="btn_avis1" class="btn">Voir tous les témoinages</a>

        <a href="" id="btn_avis2" class="btn">Déposer un avis</a>
      </div>
    </section>
    <section id="paysages">
      <div class="titre">
        <div class="cross"></div>
        <img src="icones/viniette-paysages.svg" alt="" class="viniette" />
        <div>
          <h4>Découvrez les paysages des Hautes-Pyrénées</h4>
        </div>
      </div>
      <!-- <img src="icones/vector-paysages.svg" alt="" class="form-fond" /> -->

      <div class="flexBoxcolumn">
        <div class="cadeau-box">
          <div class="box-photo">
            <img src="img/payysage_bi.jpg" alt="" id="paysages_photo" />
          </div>
          <div class="box-text">
            <h6>Hautes-Pyrenées, val d’Azun</h6>
            <p>
              orem ipsum dolor sit amet <strong> consectetur. </strong> Rhoncus
              morbi mattis ut iaculis urna ac at integer. Rhoncus morbi mattis
              ut iaculis urna ac.
            </p>
            <h6>Paysages à couper la souffle !</h6>
            <p>
              orem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
              iaculis urna ac at integer. Lorem ipsum dolor sit amet
              consectetur. Rhoncus morbi mattis ut iaculis urna ac at integer.
              Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
              iaculis urna ac at integer. Lorem ipsum dolor sit amet
              consectetur. Rhoncus morbi mattis ut iaculis urna ac at integer.
            </p>
          </div>
        </div>
        <div class="btns">
          <a href="" id="btn_paysage1" class="btn">Voir les sites des vols</a>
          <a href="" id="btn_paysage2" class="btn">Voir la météo</a>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="titre">
        <div class="cross"></div>
        <h4>Trouvez nous et contacter</h4>

        <img src="icones/viniettte-contact.svg" alt="" class="viniette" />
      </div>

      <div class="flexBox">
        <img src="img/map-web.png" alt="" class="carte" />
        <div id="textBox_contact">
          <h6>
            ABACO <br />
            A BOUT D'AILE COMME UN OISEAU
          </h6>
          <div class="flexBox">
            <img src="icones/map-tag.svg" alt="" class="icones_contact" />
            <address>
              39 route d'Azun <br />
              65400 - AUCUN
            </address>
          </div>
          <div class="flexBox">
            <img src="icones/phone.svg" alt="" class="icones_contact" />
            <a href="tel:06 52 84 62 36"> <strong>06 52 84 62 36</strong> </a>
          </div>
          <div class="flexBox">
            <img src="icones/mail.svg" alt="" class="icones_contact" />
            <a href="mailto:abaco@gmail.com">
              <strong>abaco@gmail.com</strong></a
            >
          </div>
        </div>
      </div>
    </section>

    <section id="pilote">
      <div class="titre">
        <div class="cross"></div>
        <img src="icones/viniettte-pilote.svg" alt="" />
        <h4>vous aussi, devenez pilote de parapente !</h4>
      </div>
      <div class="flexBoxcolumn">
        <p id="paragraph1">
          <strong>Lorem ipsum dolor sit amet consectetur.</strong>
          <br />
          Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
          iaculis urna ac at integer. Lorem ipsum dolor sit amet consectetur.
          Rhoncus morbi mattis ut iaculis urna ac at integer.
        </p>

        <div class="flexBox" id="brevetFlex">
          <div class="brevet_box">
            <img src="img/brevet1.png" alt="" class="brevet_img" />
            <h5>Brevet 1</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
              iaculis urna ac at
            </p>
            <a href="" class="btn btn_voir">voir</a>
          </div>
          <div class="brevet_box" id="brevet2">
            <img src="img/brevet2.png" alt="" class="brevet_img" />
            <h5>Brevet 2</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
              iaculis urna ac at
            </p>
            <a href="" class="btn btn_voir">voir</a>
          </div>
          <div class="brevet_box">
            <img src="img/brevet3.png" alt="" class="brevet_img" />
            <h5>Brevet 3</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur. Rhoncus morbi mattis ut
              iaculis urna ac at
            </p>
            <a href="" class="btn btn_voir">voir</a>
          </div>
        </div>
      </div>
      <div class="montagnes">
        <!-- <img src="img/montanges_blanches2.svg" alt="" id="montagnes-fond" /> -->
      </div>
    </section>

    <div class="hero clipPath--mtn2--TB">
      <section id="footer">
        <!--
      -->
        <div class="titre">
          <img src="icones/logo_abaco.svg" alt="" class="logo" />
          <div>
            <h6>ABACO - A Bout D’aile Comme Un Oiseau</h6>

            <h2>Ecole de parapente dans les Hautes Pyrénées</h2>
          </div>
        </div>
        <div class="footer-menu">
          <ul>
            <h6>Infos utiles</h6>
            <li>Mon compte</li>
            <li>Calendrier</li>
            <li>Carte cadeau</li>
            <li>Hébergements</li>
            <li>Liens utiles</li>
            <li>Méteo</li>
            <li>FAQ</li>
          </ul>

          <ul>
            <h6>Activités</h6>
            <li>Stages</li>
            <li>Baptêmes</li>
            <li>Voyages</li>
            <li>Groupes</li>
            <li>Brevet</li>
          </ul>
          <ul>
            <h6>L’école</h6>
            <li>A propos</li>
            <li>Tarifs</li>
            <li>Avis clients</li>
            <li>Contact</li>
          </ul>
          <ul>
            <h6>Horaires</h6>
            <li>Du mardi au dimanche</li>
            <li>de 9h à 18h</li>
            <div class="flexBoxcolumn">
              <h6>Newseltter</h6>
              <label for="email"> Restons connecté</label>
              <input
                type="email"
                id="email"
                pattern=".+@globex\.com"
                size="30"
                placeholder="example@email.com"
              />
              <a href="" class="btn" id="btn-newsletter">Je m'inscris!</a>
            </div>
          </ul>
          <ul>
            <h6>Contact</h6>
            <li>
              <img
                src="icones/map-tag.svg"
                alt=""
                class="icon_contact"
                id="location"
              />39 route d'Azun 65400 - AUCUN
            </li>
            <li>
              <img
                src="icones/phone.svg"
                alt=""
                class="icon_contact"
                id="phone"
              />06 52 84 62 36
            </li>
            <li>
              <img
                src="icones/mail.svg"
                alt=""
                class="icon_contact"
                id="mail"
              />abaco@gmail.com
            </li>
          </ul>
        </div>
      </section>
    </div>
  </body>
</html>
