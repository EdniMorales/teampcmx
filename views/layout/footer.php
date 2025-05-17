</div>
</main>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.3805587889183!2d-98.89948508468514!3d19.265809950984174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1f3231d3db91%3A0x75bd80c362b53ae5!2sTICDWEM!5e0!3m2!1ses-419!2smx!4v1629138357273!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<footer class="page-footer font-small unique-color-dark" style="background-color: #000000;">
  <div style="background-color: #2ecc71;">
    <div class="container">
      <div class="row py-4 d-flex align-items-center">
        <div class="col-md-6 col-lg-6 text-center text-white text-md-center mb-4 mb-md-0">
          <p class="txt-foot mb-0" id="animacion9">Llámanos estamos a tus ordenes!</p>
        </div>
        <div class="col-md-2 col-lg-2 text-center text-white text-md-center mb-4 mb-md-0">
          <h5 class="mb-0" id="animacion9">Todo el mundo debe conocer tu negocio</h5>
        </div>
        <div class="col-md-4 col-lg-4 text-md-center">
          <a href="https://www.facebook.com/teampcmx/" class="icono fa fa-facebook"></a>
          <a href="https://www.instagram.com/teampcmx/" class="icono fa fa-instagram"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center text-md-left mt-5">
    <div class="row mt-3">
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold text-light text-center">Team Pc Mx</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 0px;">
        <p class="text-light">Ofreciendo una solución global a Empresas,Pymes,Administraciones y Usuarios particulares.</p>
        <p class=""><img src="<?= base_url ?>assets/img/logo-elektra.png" class="text-center" width="100%" height="75px" alt=""></p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold text-light">EN Colaboracion con</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 0px;">
        <p class="text-center"><img src="<?= base_url ?>assets/img/images/movilpacklogo.png" class="text-center" width="90px" height="60px" alt=""></p>
        <p class="text-uppercase font-weight-bold text-light text-center">¡ACEPTAMOS PAGO CON TARJETAS!</p>
      </div>
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold text-light">Menu</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 0px;">
       
        <p><a href="<?= base_url ?>Soporte/index" class="text-white">Soporte Tecnico</a></p>
        <p><a href="<?= base_url ?>desarrollo/index" class="text-white">Paginas Web</a></p>
        <p><a href="<?= base_url ?>#contact" class="text-white">Envia un mensaje</a></p>
      </div>
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase font-weight-bold text-light">Contacto</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto " style="width: 00px;">
        <p class="text-light"><i class="fa fa-map-marker mr-2"></i><a href="https://goo.gl/maps/D6494QNjkHq7u3MZ8" class="text-white">Geo Pueblo Nuevo Chalco C.P 56600 Chalco de Díaz Covarrubias Centro, Estado de Mexico</a></p>
        <p class="text-light"><i class="fa fa-envelope mr-2"></i><a href="mailto:soporte@teampcmx.com" class="text-white">soporte@teampcmx.com</a></p>
        <p class="text-light"><i class="fa fa-mobile mr-2 mr-2" aria-hidden="true"></i><a href="tel:5518055852" class="text-white">(52) 55 1805 5852</a></p>
      </div>
    </div>
  </div>
  <div style="background-color:#2d3436">
    <div class="footer-copyright text-right py-3 container text-light">© <?= date('Y') ?> Derechos de:
      <a href="https://www.facebook.com/teampcmx/">TEAM PC MX</a>
    </div>
  </div>
</footer>
</div>
</div>
<script>
  $(document).ready(function() {
    $('.customer-logos1').slick({
      slidesToShow: 11,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('.customer-logos').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  });
</script>
<script src="<?= base_url ?>assets/js/script.js"></script>
</body>
</html>