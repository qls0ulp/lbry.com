<?php Response::setMetaDescription(__('LBRY is proud to sponsor VIT Vellore\'s DSC Devfest 2018')) ?>
<?php Response::setMetaTitle(__('LBRY Welcomes VIT Hackathon Participants')) ?>
<?php echo View::render('nav/_header', ['isDark' => true, 'isAbsolute' => true]) ?>
<main>
  <div class="cover cover-dark cover-center cover-full cover--dark-overlay" style="background-image: url(/img/devfest.jpg)">
    <div class="content content-dark text-center">
      <h1 class="cover-title cover-title-tile cover-item--outline">
        LBRY Welcomes Devfest Participants
      </h1>
      <h3 class="cover-item--outline">We're excited to meet the next generation of problem solvers!
      </h3>
      <div class="spacer1">
        <a href="#about" class="btn-primary btn-large">Tell Me More!</a>
      </div>
    </div>
  </div>
  <div class="cover cover-light" id="about">
    <div class="content content-light content-readable">
      <h3>Enter your email address to receive LBRY updates, news, and information for India LBRYians!</h3>
      <p>LBRY is proud to sponsor this year's Devfest Hackathon, and we're excited to work with VIT's Developer Student Clubs. As an open source project, our development and future relies on our communities around the world, and we're delighted to our community growing in India. Please enter your email below and we'll give you instructions to redeem the LBC as mentioned by our team.</p>
      <?php echo View::render('mail/_subscribeForm', [
        'tag' => 'vit',
        'submitLabel' => 'Sign me up',
        'hideDisclaimer' => true,
        'largeInput' => true,
        'btnClass' => 'btn-alt btn-large',
      ]) ?>
    </div>
  </div>
</main>
<?php echo View::render('nav/_footer') ?>
