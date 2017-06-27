<!DOCTYPE html>
<html dir="ltr" lang="en-UK">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($meta_title) ? $meta_title : "13twelve | Front end web developer. Specialising in HTML, CSS and JavaScript."; ?></title>

    <?php if(isset($home)) { ?>
    <style><?php include "includes/_homecss.php"; ?></style>
    <?php } else { ?>
    <link href="/stylesheets/application.css" rel="stylesheet" />
    <?php } ?>

    <?php if(isset($meta_social_title)) { ?>
    <meta property="og:title" content="<?php echo $meta_social_title ?>" />
    <meta name="twitter:title" content="<?php echo $meta_social_title ?>" />
    <meta itemprop="name" content="<?php echo $meta_social_title ?>">
    <?php } ?>

    <?php if(isset($meta_description)) { ?>
    <meta name="description" content="<?php echo $meta_description ?>">
    <meta property="og:description" content="<?php echo $meta_description ?>" />
    <meta name="twitter:description" content="<?php echo $meta_description ?>" />
    <meta itemprop="description" content="<?php echo $meta_description ?>">
    <?php } ?>

    <?php if(isset($meta_url)) { ?>
    <meta property="og:url" content="<?php echo $meta_url ?>" />
    <link rel="canonical" href="<?php echo $meta_url ?>" />
    <meta name="twitter:url" content="<?php echo $meta_url ?>" />
    <?php } ?>

    <?php if(isset($meta_image)) { ?>
    <meta property="og:image" content="<?php echo $meta_image ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:image" content="<?php echo $meta_image ?>">
    <meta itemprop="image" content="<?php echo $meta_image ?>">
    <?php } ?>

    <meta name="copyright" content="(c) 2005 &ndash; <?php date_default_timezone_set('UTC'); echo date("Y"); ?> Mike Byrne, thirteentwelve.com" />

    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Mike Byrne" />
    <meta property="og:author" content="https://www.facebook.com/13twelve" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@13twelve" />
    <meta name="twitter:domain" content="thirteentwelve.com" />
    <meta name="twitter:creator" content="@13twelve" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <?php if(isset($third_party_css)) { echo $third_party_css; } ?>
  </head>
  <body>
    <div id="thirteentwelve">
      <header>
        <a href="/" class="logo" aria-label="thirteentwelve logo">
            <svg class="logo__text" width="422px" height="86px" aria-hidden="true">
                <use xlink:href="#logo" />
            </svg>
        </a>
      </header>
      <main id="content">
