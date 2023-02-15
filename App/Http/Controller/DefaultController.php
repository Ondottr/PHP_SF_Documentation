<?php /** @noinspection PhpUnused */
declare( strict_types=1 );
/**
 * Created by PhpStorm.
 * User: ondottr
 * Date: 15/02/2023
 * Time: 7:47 pm
 */

namespace App\Http\Controller;

use App\View\docs_home_page;
use App\View\landing_home_page;
use PHP_SF\System\Attributes\Route;
use PHP_SF\System\Classes\Abstracts\AbstractController;
use PHP_SF\System\Core\Response;

final class DefaultController extends AbstractController
{

    #[Route( url: '/', httpMethod: 'GET', middleware: [] )]
    public function landing_home_page(): Response
    {
        return $this->render( landing_home_page::class );
    }

    #[Route( url: '/docs', httpMethod: 'GET', middleware: [] )]
    public function docs_home_page(): Response
    {
        return $this->render( docs_home_page::class );
    }

}