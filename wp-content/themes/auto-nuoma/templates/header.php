<header class="banner">
  <div class="navbar-wrap">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="logo-outer col-md-1">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="logo navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"></a>
            </div>
          </div>
          <div class="navigation-menu col-md-7">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav menuSlider">
                <li><a href=".banner">Pradžia</a></li>
                <li><a href=".wrap-pirkti-auto">Pirkti automobilį</a></li>
                <li><a href=".wrap-nuomuotis-auto">Nuomuotis automobilį</a></li>
                <li><a href=".footer-content-info">Kontaktai</a></li>
              </ul>
            </div>
          </div>
          <div class="social-icons-outer col-md-2">
            <ul class="social-icons">
              <li><a class="fa fa-facebook fa-lg" href="#"></a></li>
              <li><a class="fa fa-twitter fa-lg" href="#"></a></li>
              <li><a class="fa fa-instagram fa-lg" href="#"></a></li>
              <li><a class="fa fa-google-plus fa-lg" href="#"></a></li>
            </ul>
          </div>
          <div class="header-mobile-outer col-md-2">
            <a class="header-mobile fa fa-mobile fa-lg" href="#"> + 3706 00 00 000</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="header-text">
          <p>susirask sau </p>
          <p>tinkamą automobilį</p>
        </div>
        <div class="icon-text-info row">
          <div class="iti-wrap col-md-4 col-sm-4 col-xs-4">
            <i class="fa fa-key fa-5x" aria-hidden="true"></i><br>
            <span>automobiliai iš "pirmų rankų"</span>
          </div>
          <div class="iti-wrap col-md-4 col-sm-4 col-xs-4">
            <i class="fa fa-money fa-5x" aria-hidden="true"></i><br>
            <span>pirkimas galimas ir be užstato</span>
          </div>
          <div class="iti-wrap col-md-4 col-sm-4 col-xs-4">
            <i class="fa fa-wrench fa-5x" aria-hidden="true"></i><br>
            <span>automobiliai pilnai sutvarkyti bei paruošti naudojimui</span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
      </div>
    </div>
  </div>
</header>

