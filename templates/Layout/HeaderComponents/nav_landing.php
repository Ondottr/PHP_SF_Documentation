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
final class nav_landing extends AbstractView { public function show(): void { ?>
  <!--@formatter:on-->

  <nav>
    <div class="logo"></div>
    <ul class="menu">
      <div class="menu__item toggle"><span></span></div>
      <li class="menu__item">
        <a href="<?= routeLink( 'docs_home_page' ) ?>" class="link link--dark">
          <img src="<?= asset( 'theme/images/books.png' ) ?>" alt="Documentation"> Documentation
        </a>
      </li>
      <li class="menu__item">
        <a href="https://github.com/Ondottr/PHP_SF_Platform" class="link link--dark" target="_blank">
          <img src="<?= asset( 'theme/images/github.svg' ) ?>" alt="Github"> Github
        </a>
      </li>
    </ul>
  </nav>

  <!--@formatter:off-->
<?php } }