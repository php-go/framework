<?php
/**
 * User: dongww
 * Date: 2014-9-23
 * Time: 1:26
 */

namespace Application\Controller;

use PhpGo\Framework\Application;
use PhpGo\Framework\Core\BundleAbstract;

class DefaultController
{
    public function indexAction(Application $app/*, $id*/)
    {
        return $app->render('test.twig', [
            'name' => 'App',
        ]);
    }
}
