<?php declare( strict_types=1 );
/**
 * Created by PhpStorm.
 * User: ondottr
 * Date: 15/02/2023
 * Time: 7:16 pm
 */

namespace App\View;

use App\View\Components\doc_home_page_side_navigation_component;
use PHP_SF\System\Classes\Abstracts\AbstractView;

// @formatter:off
final class docs_home_page extends AbstractView { public function show(): void { ?>
  <!--@formatter:on-->

  <div class="wrapper">

    <?php $this->import( doc_home_page_side_navigation_component::class, htmlClassTagEnabled: false ) ?>

    <article class="doc__content">
      <section class="js-section">
        <h3 class="section__title">Get Started</h3>
        <p>Learn how to configure settings for Scribbler, such as your syntax highlighting preference and the default saving folder location.</p>
        <h3 class="section__title">Installation</h3>
        <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $ scribbler  ——config
                  {
                    “encryption”: true,
                    “highlighting“: true,
                    “prettyTable”: false,
                    “font”: [“Helvetica”, “sans-serif”],
                    “folder”: “~/Desktop“
                  }
              </code>
            </pre>
        </div>
      </section>
      <section class="js-section">
        <h3 class="section__title">Configuration</h3>
        <p>Learn how to configure settings for Scribbler, such as your syntax highlighting preference and the default saving folder location.</p>
        <table id="customers">
          <tr>
            <th>Options</th>
            <th>Value</th>
            <th>Default</th>
          </tr>
          <tr>
            <td>encryption</td>
            <td>encrypt all notes before saving. If turned on, it requires password to open the file.</td>
            <td>false</td>
          </tr>
          <tr>
            <td>highlighting</td>
            <td>Show syntax highlight on markdown text.</td>
            <td>true</td>
          </tr>
          <tr>
            <td>prettyTable</td>
            <td>Render table with Scribbler’s pretty table style.</td>
            <td>true</td>
          </tr>
        </table>
        <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
        <hr />
      </section>
      <section class="js-section">
        <h3 class="section__title">Keybindings</h3>
        <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex per. At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed. Porro verear eu vix, ne usu tation vituperata.</p>
        <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
        <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
        <hr />
      </section>
      <section class="js-section">
        <h3 class="section__title">Issues</h3>
        <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex per. At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed. Porro verear eu vix, ne usu tation vituperata.</p>
        <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
      </section>
    </article>
  </div>

  <!--@formatter:off-->
<?php } }