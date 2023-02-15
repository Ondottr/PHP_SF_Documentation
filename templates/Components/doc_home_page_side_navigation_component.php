<?php declare( strict_types=1 );
/**
 * Created by PhpStorm.
 * User: ondottr
 * Date: 15/02/2023
 * Time: 9:49 pm
 */

namespace App\View\Components;

use PHP_SF\System\Classes\Abstracts\AbstractView;
use PHP_SF\System\Router;

// @formatter:off
final class doc_home_page_side_navigation_component extends AbstractView { public function show(): void { ?>
  <!--@formatter:on-->

  <?php $cr = Router::$currentRoute->name ?>

  <aside class="doc__nav">
    <ul>
      <li <?= $cr === 'docs_home_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_home_page' ) ?>"
          title="<?= _t( 'Overview of the framework, system requirements, installation instructions, and key terminology and concepts.' ) ?>">
          <?= _t( 'Introduction' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Overview of the framework\'s purpose and features' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'System requirements and installation' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Key terminology and concepts' ) ?>
          </li>
        </ul>
      </li>
      <hr />
      <li <?= $cr === 'docs_get_started_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_get_started_page' ) ?>"
        title="<?= _t( 'Instructions for getting started with using the framework by creating a new project, installing dependencies, configuring the application and running the application.' ) ?>">
          <?= _t( 'Get Started' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Creating a new project' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Installing dependencies' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Configuring the application' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Running the application' ) ?>
          </li>
        </ul>
      </li>
      <hr />
      <li <?= $cr === 'docs_routing_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_routing_page' ) ?>"
        title="<?= _t( 'Explaining the concept of routing, how to define routes, handle route parameters and use route middlewares.' ) ?>">
          <?= _t( 'Routing' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Defining routes and URL patterns' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Handling route parameters' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Route groups and middleware' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Named routes and URL generation' ) ?>
          </li>
        </ul>
      </li>
      <hr />
      <li <?= $cr === 'docs_controllers_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_controllers_page' ) ?>"
        title="<?= _t( 'How to create and organize controllers, handle requests and responses, use actions and methods and implement dependency injection in controllers' ) ?>">
          <?= _t( 'Controllers' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Creating and organizing controllers' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Actions and methods' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Request and response handling' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Dependency injection in controllers' ) ?>
          </li>
        </ul>
      </li>
      <hr />
      <li <?= $cr === 'docs_views_and_templates_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_views_and_templates_page' ) ?>"
        title="<?= _t( 'Using templating engine, passing data to views, implementing layouts and partials and using template inheritance and sections.' ) ?>">
          <?= _t( 'Views and templates' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Templating engines and syntax' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Passing data to views' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Layouts and partials' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Template inheritance and sections' ) ?>
          </li>
        </ul>
      </li>
      <hr />
      <li <?= $cr === 'docs_entities_and_databases_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_entities_and_databases_page' ) ?>"
        title="<?= _t( 'Working with entities and databases, such as defining database entities and relationships, performing CRUD operations, querying data and making migrations and schema changes.' ) ?>">
          <?= _t( 'Entities and databases' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Defining database entities and relationships' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'CRUD operations and querying data' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Migrations and schema changes' ) ?>
          </li>
        </ul>
      </li>
      <hr />
      <li <?= $cr === 'docs_forms_and_validation_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_forms_and_validation_page' ) ?>">
          <?= _t( 'Forms and validation' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Creating forms and form elements' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Form submission and processing' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Validation rules and messages' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Custom validation and validation groups' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page explaining how the framework handles form input and provides validation functions.-->
      <hr />
      <li <?= $cr === 'docs_authentication_and_authorization_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_authentication_and_authorization_page' ) ?>">
          <?= _t( 'Authentication and authorization' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'User authentication and login' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'User roles and permissions' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page describing how the framework handles user authentication and authorization.-->
      <hr />
      <li <?= $cr === 'docs_middlewares_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_middlewares_page' ) ?>">
          <?= _t( 'Middlewares' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Global and route-specific middleware' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Creating custom middleware' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Middleware chaining and ordering' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Using middleware for authentication, caching, and more' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page explaining how the framework uses middleware to perform additional processing on requests and responses.-->
      <hr />
      <li <?= $cr === 'docs_error_handling_and_debuggng_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_error_handling_and_debuggng_page' ) ?>">
          <?= _t( 'Error handling and debugging' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Error reporting and logging' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Exception handling and custom error pages' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Debugging tools and techniques' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Production vs development environments' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page describing how the framework handles errors and provides tools for debugging.-->
      <hr />
      <li <?= $cr === 'docs_caching_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_caching_page' ) ?>">
          <?= _t( 'Caching' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Caching strategies and mechanisms' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Cache drivers and configurations' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Cache tagging and invalidation' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Optimizing performance with caching' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page explaining how the framework uses caching to improve performance.-->
      <hr />
      <li <?= $cr === 'docs_di_and_service_containers_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_di_and_service_containers_page' ) ?>">
          <?= _t( 'DI and service containers' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Dependency injection and inversion of control' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Service container and service providers' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Registering and resolving services' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page explaining how the framework uses dependency injection and service containers to manage dependencies and improve code organization.-->
      <hr />
      <li <?= $cr === 'docs_testing_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_testing_page' ) ?>">
          <?= _t( 'Testing' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Unit testing and test-driven development' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Functional and integration testing' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Mocking and faking dependencies' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Code coverage and reporting' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page describing how to write tests for applications built with the framework.-->
      <hr />
      <li <?= $cr === 'docs_internationalization_and_localization_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_internationalization_and_localization_page' ) ?>">
          <?= _t( 'Internationalization and localization' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Language files and translations' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Locale and time zone settings' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Detecting and handling user language preferences' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Translating dates, currencies, and other formats' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page explaining how the framework handles internationalization and localization of content.-->
      <hr />
      <li <?= $cr === 'docs_security_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_security_page' ) ?>">
          <?= _t( 'Security' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Common security threats and best practices' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Input validation and sanitization' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'XSS and CSRF protection' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Encryption and hashing' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page describing how the framework handles common security issues such as cross-site scripting (XSS) and cross-site request forgery (CSRF).-->
      <hr />
      <li <?= $cr === 'docs_rest_api_development_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_rest_api_development_page' ) ?>">
          <?= _t( 'REST API development' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'API design and architecture' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Defining API routes and endpoints' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Request and response formats' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Handling authentication and authorization' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page explaining how the framework can be used to build RESTful APIs.-->
      <hr />
      <li <?= $cr === 'docs_file_uploads_and_handling_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_file_uploads_and_handling_page' ) ?>">
          <?= _t( 'File uploads and handling' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Uploading and storing files' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Validating file types and sizes' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Handling file downloads and streaming' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page describing how the framework handles file uploads and provides tools for working with files.-->
      <hr />
      <li <?= $cr === 'docs_cli_tools_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_cli_tools_page' ) ?>">
          <?= _t( 'Command-line interface (CLI) tools' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Writing and running console commands' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Command arguments and options' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page explaining how to use the framework's CLI tools for tasks such as database migrations, cron jobs, and other automated tasks.-->
      <hr />
      <li <?= $cr === 'docs_extensibility_and_customization_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_extensibility_and_customization_page' ) ?>">
          <?= _t( 'Extensibility and customization' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Customizing the framework\'s behavior and features' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Event-driven programming and listeners' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page describing how to extend and customize the framework to meet specific needs.-->
      <hr />
      <li <?= $cr === 'docs_deployment_and_hosting_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_deployment_and_hosting_page' ) ?>">
          <?= _t( 'Deployment and hosting' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Best practices for deploying and hosting the application' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Server requirements and configuration' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page with information on how to deploy and host applications built with the framework.-->
      <hr />
      <li <?= $cr === 'docs_best_practices_and_standards_page' ? 'class="sl"' : '' ?>>
        <a href="<?= routeLink( 'docs_best_practices_and_standards_page' ) ?>">
          <?= _t( 'Best practices and coding standards' ) ?>
        </a>
        <ul class="nested">
          <li class="js-btn selected">
            <?= _t( 'Coding conventions and standards' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Naming conventions and file organization' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Code documentation and commenting' ) ?>
          </li>
          <li class="js-btn">
            <?= _t( 'Performance optimization and refactoring' ) ?>
          </li>
        </ul>
      </li>
      <!--      A page outlining best practices and coding standards for using the framework, including recommendations for organizing code, naming conventions, and more.-->
    </ul>
  </aside>

  <!--@formatter:off-->
<?php } }