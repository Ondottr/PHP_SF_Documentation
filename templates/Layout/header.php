<?php declare( strict_types=1 );
/**
 * Created by PhpStorm.
 * User: ondottr
 * Date: 15/02/2023
 * Time: 7:16 pm
 */

namespace App\View\Layout;

use App\View\Layout\HeaderComponents\head_doc;
use App\View\Layout\HeaderComponents\head_landing;
use App\View\Layout\HeaderComponents\nav_doc;
use App\View\Layout\HeaderComponents\nav_landing;
use PHP_SF\System\Classes\Abstracts\AbstractView;
use PHP_SF\System\Router;

// @formatter:off
final class header extends AbstractView { public function show(): void { ?>
  <!--@formatter:on-->

  <!doctype html>
  <html lang="<?= env( 'DEFAULT_LOCALE' ) ?>">
  <?php if ( Router::$currentRoute->name === 'landing_home_page' ): ?>
    <?php $this->import( head_landing::class, htmlClassTagEnabled: false ) ?>
  <?php else: ?>
    <?php $this->import( head_doc::class, htmlClassTagEnabled: false ) ?>
  <?php endif ?>

  <body>
  <?php if ( Router::$currentRoute->name === 'landing_home_page' ): ?>
    <?php $this->import( nav_landing::class, htmlClassTagEnabled: false ) ?>
  <?php else: ?>
    <?php $this->import( nav_doc::class, htmlClassTagEnabled: false ) ?>
  <?php endif ?>


  <!--@formatter:off-->
<?php } }