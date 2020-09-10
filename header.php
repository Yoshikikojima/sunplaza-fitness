<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>"
    rel="stylesheet" type="text/css">
  <title>
    <?php wp_title( ' | ', true, 'right' ); ?>
    <?php bloginfo( 'name' ); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="SUNPLAZA FITNESS"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">ニュース</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">店舗情報・アクセス</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">施設案内</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">料金案内</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">トレーナー</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">体験申し込み</a>
          </li>
        </ul>
      </div>
    </nav>

  </header>
