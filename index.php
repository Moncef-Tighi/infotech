<html>
  <?php
    session_start();
      include("HTML/header.html");
      if (isset($_SESSION["username"])) {
        include("HTML/sidebar.html");
    }
  ?>

  <head>    
      <link rel="stylesheet" href="CSS/index.css" media="screen" type="text/css" />
      <script defer src="JavaScript/Slider.js"></script>
  </head>

  <body>
      
      <section id="main_image">
          <div class="center title">
              <p>Bienvenue sur le site web <b class="company">D'infoTech</b></p>
              <button>Consulter nos produits</button>
          </div>
      </section>
      <section id="meilleur_vente">
          <h2>Meilleures ventes : </h2>

          <article class="center box">
              <img id="best" src="img/best.jpg">
              <ul class="liste">
                  <li>Titre : 870 EVO SATA III</li>
                  <li>Vendeur : Samsung</li>
                  <li>Descritption : Internal Solid State Hard Drive, Upgrade PC or Laptop Memory and Storage</li>
                  <li class="price">Prix : $119 </li>
              </ul>
          </article>
      </section>

      <section id="avis">
          <article class="center box">

          <div class="slider">
          <div class="slide" style="transform: translateX(0%);">
            <div class="testimonial">
              <h5 class="testimonial__header">Livraison extrêmement rapide!</h5>
              <blockquote class="testimonial__text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Accusantium quas quisquam non? Quas voluptate nulla minima
                deleniti optio ullam nesciunt, numquam corporis et asperiores
                laboriosam sunt, praesentium suscipit blanditiis. Necessitatibus
                id alias reiciendis, perferendis facere pariatur dolore veniam
                autem esse non voluptatem saepe provident nihil molestiae.
              </blockquote>
              <address class="testimonial__author">
                <img src="img/user-1.jpg" alt="" class="testimonial__photo">
                <h6 class="testimonial__name">Aarav Lynn</h6>
                <p class="testimonial__location">San Francisco, USA</p>
              </address>
            </div>
          </div>

          <div class="slide" style="transform: translateX(100%);">
            <div class="testimonial">
              <h5 class="testimonial__header">
                Service client rapide et efficace
              </h5>
              <blockquote class="testimonial__text">
                Quisquam itaque deserunt ullam, quia ea repellendus provident,
                ducimus neque ipsam modi voluptatibus doloremque, corrupti
                laborum. Incidunt numquam perferendis veritatis neque repellendus.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo
                deserunt exercitationem deleniti.
              </blockquote>
              <address class="testimonial__author">
                <img src="img/user-2.jpg" alt="" class="testimonial__photo">
                <h6 class="testimonial__name">Miyah Miles</h6>
                <p class="testimonial__location">London, UK</p>
              </address>
            </div>
          </div>

          <div class="slide" style="transform: translateX(200%);">
            <div class="testimonial">
              <h5 class="testimonial__header">
                Merci pour les services
              </h5>
              <blockquote class="testimonial__text">
                Debitis, nihil sit minus suscipit magni aperiam vel tenetur
                incidunt commodi architecto numquam omnis nulla autem,
                necessitatibus blanditiis modi similique quidem. Odio aliquam
                culpa dicta beatae quod maiores ipsa minus consequatur error sunt,
                deleniti saepe aliquid quos inventore sequi. Necessitatibus id
                alias reiciendis, perferendis facere.
              </blockquote>
              <address class="testimonial__author">
                <img src="img/user-3.jpg" alt="" class="testimonial__photo">
                <h6 class="testimonial__name">Francisco Gomes</h6>
                <p class="testimonial__location">Lisbon, Portugal</p>
              </address>
            </div>
          </div>

          <button class="slider__btn slider__btn--left">←</button>
          <button class="slider__btn slider__btn--right">→</button>
          <div class="dots">
      </div>
        </div>

          </article>
      </section>



      <?php
          include("HTML/model-overlay.html");
          include("HTML/footer.html");
      ?>
  </body>
</html>