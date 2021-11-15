<?php
/* Smarty version 3.1.39, created on 2021-11-15 16:27:00
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61927c44be2fd8_50807777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1636911183,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_61927c44be2fd8_50807777 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Carousel container">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://localhost/index.php?id_category=12&amp;controller=category">
            <figure>
              <img src="https://localhost/modules/ps_imageslider/images/3772e000d1e22bbb4f14d6304e777fb2fa32bbf2_1.jpg" alt="Dietetyka" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Dietetyka</h2>
                  <div class="caption-description"><h3>Kursy z dziedziny dietetyki</h3>
<p>Sprawdź naszą ofertę kursów z dietetyki!</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://localhost/index.php?id_category=4&amp;controller=category">
            <figure>
              <img src="https://localhost/modules/ps_imageslider/images/6315504cd8e56ccba3627b097ad9abe3d6e6556a_2.jpg" alt="Prawo i administracja" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Prawo i administracja</h2>
                  <div class="caption-description"><h3>Kursy z dziedziny prawa i administracji</h3>
<p>Sprawdź naszą ofertę kursów!</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://localhost/index.php?id_category=6&amp;controller=category">
            <figure>
              <img src="https://localhost/modules/ps_imageslider/images/31db6d1b653e3a85b1ade18028a3a95473225200_3.jpg" alt="Edukacja i terapia" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Edukacja i terapia</h2>
                  <div class="caption-description"><h3>Kursy z dziedziny edukacji i terapii</h3>
<p>Spradź naszą ofertę kursów!</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
