<?php declare( strict_types=1 );
/**
 * Created by PhpStorm.
 * User: ondottr
 * Date: 15/02/2023
 * Time: 7:16 pm
 */

namespace App\View\Layout;

use PHP_SF\System\Classes\Abstracts\AbstractView;

// @formatter:off
final class footer extends AbstractView { public function show(): void { ?>
  <!--@formatter:on-->

    <footer class="footer">
      <?= _t( '<b>PHP_SF</b> framework is a powerful and flexible web application framework written in PHP' ) ?>
    </footer>
    <script src="<?= asset( 'theme/highlight.min.js' ) ?>"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="<?= 'theme/scribbler.js' ?>"></script>

  </body>
  </html>
  <!--@formatter:off-->
<?php } }