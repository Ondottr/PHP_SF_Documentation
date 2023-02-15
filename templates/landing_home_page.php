<?php declare( strict_types=1 );
/**
 * Created by PhpStorm.
 * User: ondottr
 * Date: 15/02/2023
 * Time: 7:16 pm
 */

namespace App\View;

use PHP_SF\System\Classes\Abstracts\AbstractView;

// @formatter:off
final class landing_home_page extends AbstractView { public function show(): void { ?>
  <!--@formatter:on-->

  <div class="hero">
    <h1 class="hero__title">PHP SF</h1>
    <p class="hero__description"><?= _t( 'Powerful and flexible web application framework' ) ?></p>
  </div>
  <div class="wrapper">
    <div class="installation">
      <h3 class="section__title"><?= _t( 'Installation' ) ?></h3>
      <p>
        <?= _t( 'To install the framework simply run the installation script from the project root directory and follow the instructions.' ) ?>
      </p>
      <div class="tab__container">
        <div class="nohighlight code">
            <code class="tab__pane active">
              $ ./install.sh
            </code>
          </div>
      </div>
    </div>
    <div class="feature">
      <div class="feature__item">
        <h3 class="section__title"><?= _t( 'Powerful & flexible' ) ?></h3>
        <p>
          <?= _t( 'PHP_SF offers a rich set of features for easily building robust and scalable web apps and APIs.' ) ?>
        </p>
      </div>
      <div class="feature__item">
        <h3 class="section__title"><?= _t( 'Easy installation' ) ?></h3>
        <p>
          <?= _t( 'Quickly set up your dev environment and start building your app with easy installation and detailed instructions.' ) ?>
        </p>
      </div>
      <div class="feature__item">
        <h3 class="section__title"><?= _t( 'Usage examples' ) ?></h3>
        <p>
          <?= _t( 'Get started with the framework and learn how to build your first web app with comprehensive usage examples included in the documentation.' ) ?>
        </p>
      </div>
      <div class="feature__item">
        <h3 class="section__title"><?= _t( 'API reference' ) ?></h3>
        <p>
          <?= _t( 'The documentation provides detailed information about all classes, methods and functions in the API reference.' ) ?>
        </p>
      </div>
      <div class="feature__item">
        <h3 class="section__title"><?= _t( 'Best practices' ) ?></h3>
        <p>
          <?= _t( 'The documentation also covers best practices for building secure, performant, and maintainable web applications.' ) ?>
        </p>
      </div>
      <div class="feature__item">
        <h3 class="section__title"><?= _t( 'Collaborative documentation' ) ?></h3>
        <p>
          <?= _t( 'This documentation is a collaborative effort, and welcomes community contributions. If you notice any errors or omissions, please submit a pull request.' ) ?>
        </p>
      </div>

    </div>
  </div>
  <div class="changelog">
    <div class="wrapper">
      <h3 class="section__title"><?= _t( 'Changelog' ) ?></h3>
      <div class="changelog__item">
        <div class="changelog__meta">
          <h4 class="changelog__title">
            <a href="<?= routeLink( 'change_log_page', [ 'version' => '1.14.2' ] ) ?>">v1.14.2</a>
          </h4>
          <small class="changelog__date">15-02-2023</small>
        </div>
        <div class="changelog__detail">
          <ul>
            <li>Route Middlewares refactored</li>
            <li>Design updates</li>
            <li>Fixed JavaScript code in `script` tags when Templates Cache is activated</li>
          </ul>
        </div>
      </div>
      <div class="changelog__item">
        <div class="changelog__meta">
          <h4 class="changelog__title">
            <a href="<?= routeLink( 'change_log_page', [ 'version' => '1.13.6' ] ) ?>">v1.13.6</a>
          </h4>
          <small class="changelog__date">7-02-2023</small>
        </div>
        <div class="changelog__detail">
          <ul>
            <li>AbstractEntity class refactored</li>
            <li>TemplatesCache class refactored</li>
            <li>Instead of filesystem cache, now the templates cached using CacheAdapter class</li>
          </ul>
        </div>
      </div>
      <div class="changelog__item">
        <div class="changelog__meta">
          <h4 class="changelog__title">
            <a href="<?= routeLink( 'changelog_page', [ 'version' => '1.13.2' ] ) ?>">v1.13.2</a>
          </h4>
          <small class="changelog__date">4-02-2023</small>
        </div>
        <div class="changelog__detail">
          <ul>
            <li>Added CacheAdapter classes for APCu, Redis and Memcached</li>
            <li>Added tests for all cache adapters</li>
            <li>replaced deprecated rc() and ra() functions usages to new ca()</li>
          </ul>
        </div>
      </div>
      <div class="changelog__callout">
        <a href="<?= routeLink( 'changelog_page' ) ?>" class="button--secondary">
          <?= _t( 'Checkout Full Log' ) ?>
        </a>
      </div>
    </div>
  </div>

  <!--@formatter:off-->
<?php } }