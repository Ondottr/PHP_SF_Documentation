<?php declare( strict_types=1 );
/**
 * Created by PhpStorm.
 * User: ondottr
 * Date: 15/02/2023
 * Time: 7:16 pm
 */

namespace App\View\Layout\HeaderComponents;

use PHP_SF\System\Classes\Abstracts\AbstractView;

// @formatter:off
final class head_landing extends AbstractView { public function show(): void { ?>
  <!--@formatter:on-->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= APPLICATION_NAME ?></title>
    <meta name="description" content="Powerful and flexible web application framework written in PHP">

    <script type="text/javascript" src="<?= asset( 'js/app.js' ) ?>"></script>
    <script type="text/javascript" src="<?= asset( 'js/jquery-3.6.0.min.js' ) ?>"></script>
    <script type="text/javascript" src="<?= asset( 'js/bootstrap.min.js' ) ?>"></script>

    <?php if ( env( 'APP_ENV' ) !== 'prod' ): ?>
      <meta name="robots" content="noindex">
    <?php endif ?>

    <link href="<?= asset( 'theme/Nunito_Sans.css' ) ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset( 'theme/scribbler-landing.css' ) ?>">
    <link rel="author" href="<?= asset( 'theme/humans.txt' ) ?>">
  </head>

  <!--@formatter:off-->
<?php } }