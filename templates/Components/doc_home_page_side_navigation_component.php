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

  <?php
  $pages = [
    'docs_home_page' => [
      'name' => 'Introduction',
      'title' => 'Overview of the framework, system requirements, installation instructions, and key terminology and concepts.',
      'sub_pages' => [
        'Overview', 'System requirements', 'Installation',
      ]
    ],
    'docs_get_started_page' => [
      'name' => 'Get Started',
      'title' => 'Instructions for getting started with using the framework by creating a new project, installing dependencies, configuring the application and running the application.',
      'sub_pages' => [
        'New project', 'Dependencies', 'Configuration', 'Running',
      ]
    ],
    'docs_routing_page' => [
      'name' => 'Routing',
      'title' => 'Explaining the concept of routing, how to define routes, handle route parameters and use route middlewares.',
      'sub_pages' => [
        'Defining routes', 'Middlewares',
      ]
    ],
    'docs_controllers_page' => [
      'name' => 'Controllers',
      'title' => 'How to create and organize controllers, handle requests and responses, use actions and methods and implement dependency injection in controllers',
      'sub_pages' => [
        'Creating and organizing controllers', 'Actions and methods', 'Request and response handling', 'Dependency injection in controllers',
      ]
    ],
    'docs_views_and_templates_page' => [
      'name' => 'Views and templates',
      'title' => 'Using templating engine, passing data to views, implementing layouts and partials and using template inheritance and sections.',
      'sub_pages' => [
        'Templating engines and syntax', 'Passing data to views', 'Layouts and partials', 'Template inheritance and sections',
      ]
    ],
    'docs_models_page' => [
      'name' => 'Models',
      'title' => 'How to create and organize models, implement dependency injection in models, use model relationships and use model middlewares.',
      'sub_pages' => [
        'Creating and organizing models', 'Dependency injection in models', 'Model relationships', 'Model middlewares',
      ]
    ],
    'docs_database_page' => [
      'name' => 'Database',
      'title' => 'How to configure the database, use database migrations, use database seeds and use database queries.',
      'sub_pages' => [
        'Database configuration', 'Database migrations', 'Database seeds', 'Database queries',
      ]
    ],
    'docs_authentication_page' => [
      'name' => 'Authentication',
      'title' => 'How to implement authentication in the application, use authentication middlewares and use authentication guards.',
      'sub_pages' => [
        'Authentication implementation', 'Authentication middlewares', 'Authentication guards',
      ]
    ],
    'docs_validation_page' => [
      'name' => 'Validation',
      'title' => 'How to validate user input, use validation rules and use validation messages.',
      'sub_pages' => [
        'Validation implementation', 'Validation rules', 'Validation messages',
      ]
    ],
    'docs_sessions_page' => [
      'name' => 'Sessions',
      'title' => 'How to use sessions, use session middlewares and use session guards.',
      'sub_pages' => [
        'Sessions implementation', 'Session middlewares', 'Session guards',
      ]
    ],
    'docs_file_uploads_page' => [
      'name' => 'File uploads',
      'title' => 'How to upload files, use file upload rules and use file upload messages.',
      'sub_pages' => [
        'File upload implementation', 'File upload rules', 'File upload messages',
      ]
    ],
    'docs_mail_page' => [
      'name' => 'Mail',
      'title' => 'How to send emails, use mail templates and use mail drivers.',
      'sub_pages' => [
        'Mail implementation', 'Mail templates', 'Mail drivers',
      ]
    ],
    'docs_cache_page' => [
      'name' => 'Cache',
      'title' => 'How to use cache, use cache middlewares and use cache drivers.',
      'sub_pages' => [
        'Cache implementation', 'Cache middlewares', 'Cache drivers',
      ]
    ],
    'docs_events_page' => [
      'name' => 'Events',
      'title' => 'How to use events, use event listeners and use event subscribers.',
      'sub_pages' => [
        'Events implementation', 'Event listeners', 'Event subscribers',
      ]
    ],
    'docs_jobs_page' => [
      'name' => 'Jobs',
      'title' => 'How to use jobs, use job queues and use job drivers.',
      'sub_pages' => [
        'Jobs implementation', 'Job queues', 'Job drivers',
      ]
    ],
    'docs_testing_page' => [
      'name' => 'Testing',
      'title' => 'How to use testing, use test cases and use test assertions.',
      'sub_pages' => [
        'Testing implementation', 'Test cases', 'Test assertions',
      ]
    ],
    'docs_console_page' => [
      'name' => 'Console',
      'title' => 'How to use console, use console commands and use console arguments.',
      'sub_pages' => [
        'Console implementation', 'Console commands', 'Console arguments',
      ]
    ],
    'docs_errors_page' => [
      'name' => 'Errors',
      'title' => 'How to handle errors, use error handlers and use error middlewares.',
      'sub_pages' => [
        'Errors implementation', 'Error handlers', 'Error middlewares',
      ]
    ],
    'docs_logging_page' => [
      'name' => 'Logging',
      'title' => 'How to use logging, use log handlers and use log middlewares.',
      'sub_pages' => [
        'Logging implementation', 'Log handlers', 'Log middlewares',
      ]
    ],
    'docs_security_page' => [
      'name' => 'Security',
      'title' => 'How to use security, use security middlewares and use security guards.',
      'sub_pages' => [
        'Security implementation', 'Security middlewares', 'Security guards',
      ]
    ],
    'docs_i18n_page' => [
      'name' => 'Internationalization',
      'title' => 'How to use internationalization, use translation files and use translation middlewares.',
      'sub_pages' => [
        'Internationalization implementation', 'Translation files', 'Translation middlewares',
      ]
    ],
    'docs_cli_page' => [
      'name' => 'Command line interface',
      'title' => 'How to use command line interface, use command line arguments and use command line options.',
      'sub_pages' => [
        'Command line interface implementation', 'Command line arguments', 'Command line options',
      ]
    ],
    'docs_contributing_page' => [
      'name' => 'Contributing',
      'title' => 'How to contribute to the framework, use the development environment and use the coding standards.',
      'sub_pages' => [
        'Contributing implementation', 'Development environment', 'Coding standards',
      ]
    ],
    'docs_license_page' => [
      'name' => 'License',
      'title' => 'How to use the framework under the MIT license.',
      'sub_pages' => [
        'License implementation',
      ]
    ],
    'docs_entities_and_databases_page' => [
      'name' => 'Entities and databases',
      'title' => 'How to define database entities and relationships, perform CRUD operations, query data and make migrations and schema changes.',
      'sub_pages' => [
        'Defining database entities and relationships', 'CRUD operations and querying data', 'Migrations and schema changes',
      ]
    ],
    'docs_forms_and_validation_page' => [
      'name' => 'Forms and validation',
      'title' => 'How to create forms and form elements, submit and process forms, validate user input and use custom validation.',
      'sub_pages' => [
        'Creating forms and form elements', 'Form submission and processing', 'Validation rules and messages', 'Custom validation and validation groups',
      ]
    ],
    'docs_authentication_and_authorization_page' => [
      'name' => 'Authentication and authorization',
      'title' => 'How to authenticate users, authorize users and use user roles and permissions.',
      'sub_pages' => [
        'User authentication and login', 'User roles and permissions',
      ]
    ],
    'docs_middlewares_page' => [
      'name' => 'Middlewares',
      'title' => 'How to use middlewares, use global and route-specific middlewares and use custom middlewares.',
      'sub_pages' => [
        'Global and route-specific middlewares', 'Creating custom middlewares', 'Middleware chaining and ordering', 'Using middleware for authentication, caching, and more',
      ]
    ],
    'docs_error_handling_and_debugging_page' => [
      'name' => 'Error handling and debugging',
      'title' => 'How to handle errors, use error handlers and use error middlewares.',
      'sub_pages' => [
        'Error reporting and logging', 'Exception handling and custom error pages', 'Debugging tools and techniques', 'Production vs development environments',
      ]
    ],
    'docs_caching_page' => [
      'name' => 'Caching',
      'title' => 'How to use caching, use caching strategies and mechanisms, use cache drivers and configurations, use cache tagging and invalidation and optimize performance with caching.',
      'sub_pages' => [
        'Caching strategies and mechanisms', 'Cache drivers and configurations', 'Cache tagging and invalidation', 'Optimizing performance with caching',
      ]
    ],
    'docs_di_and_service_containers_page' => [
      'name' => 'DI and service containers',
      'title' => 'How to use dependency injection and service containers, use service providers and use service resolution.',
      'sub_pages' => [
        'Dependency injection and inversion of control', 'Service container and service providers', 'Registering and resolving services',
      ]
    ],
    'docs_internationalization_and_localization_page' => [
      'name' => 'Internationalization and localization',
      'title' => 'How to use internationalization and localization, use language files and translations, use locale and time zone settings, detect and handle user language preferences and translate dates, currencies, and other formats.',
      'sub_pages' => [
        'Language files and translations', 'Locale and time zone settings', 'Detecting and handling user language preferences', 'Translating dates, currencies, and other formats',
      ]
    ],
    'docs_rest_api_development_page' => [
      'name' => 'REST API development',
      'title' => 'How to design and architect RESTfull APIs, define API routes and endpoints, handle authentication and authorization, and use request and response formats.',
      'sub_pages' => [
        'API design and architecture', 'Defining API routes and endpoints', 'Request and response formats', 'Handling authentication and authorization',
      ]
    ],
    'docs_file_uploads_and_handling_page' => [
      'name' => 'File uploads and handling',
      'title' => 'How to upload and store files, validate file types and sizes, and handle file downloads and streaming.',
      'sub_pages' => [
        'Uploading and storing files', 'Validating file types and sizes', 'Handling file downloads and streaming',
      ]
    ],
    'docs_cli_tools_page' => [
      'name' => 'Command-line interface (CLI) tools',
      'title' => 'How to use the framework\'s CLI tools for tasks such as database migrations, cron jobs, and other automated tasks.',
      'sub_pages' => [
        'Writing and running console commands', 'Command arguments and options',
      ]
    ],
    'docs_extensibility_and_customization_page' => [
      'name' => 'Extensibility and customization',
      'title' => 'How to extend and customize the framework to meet specific needs.',
      'sub_pages' => [
        'Customizing the framework\'s behavior and features', 'Event-driven programming and listeners',
      ]
    ],
    'docs_deployment_and_hosting_page' => [
      'name' => 'Deployment and hosting',
      'title' => 'Best practices for deploying and hosting the application.',
      'sub_pages' => [
        'Best practices for deploying and hosting the application', 'Server requirements and configuration',
      ]
    ],
    'docs_best_practices_and_standards_page' => [
      'name' => 'Best practices and coding standards',
      'title' => 'Best practices and coding standards for the framework and PHP.',
      'sub_pages' => [
        'Coding conventions and standards', 'Naming conventions and file organization', 'Code documentation and commenting', 'Performance optimization and refactoring',
      ]
    ],
  ]
  ?>

  <aside class="doc__nav">
    <ul>
      <?php foreach ( $pages as $routeName => $pageInfo ): ?>
        <li <?= $cr === 'docs_best_practices_and_standards_page' ? 'class="sl"' : '' ?>>
          <a href="<?= routeLink( $routeName ) ?>"
            title="<?= _t( $pageInfo['title'] ) ?>">
            <?= _t( $pageInfo['name'] ) ?>
          </a>
          <ul class="nested">
            <?php foreach ( $pageInfo['sub_pages'] as $subPage ): ?>
              <li class="js-btn selected"><?= _t( $subPage ) ?></li>
            <?php endforeach ?>
          </ul>
        </li>
      <?php endforeach ?>
    </ul>
  </aside>

  <!--@formatter:off-->
<?php } }