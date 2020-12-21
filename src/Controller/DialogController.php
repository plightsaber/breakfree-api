<?php
/**
 * @author Myshel Neiro <myshel@breakfreesl.com>
 * @copyright 2020 BreakFree
 */

namespace App\Controller;

use App\Dialog\DialogModel;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DialogController
 * @Route("/api", name="api_")
 * @package App\Controller
 */
class DialogController extends AbstractFOSRestController
{
    /**
     * @Rest\Post("/dialog")
     * @param Request $request
     * @return Response
     */
    public function getDialog(Request $request)
    {
        $ownerKey = $request->headers->get('X-SecondLife-Owner-Key');
        $touchKey = $request->get('touchKey');

        // TODO: Validate key and password in database.
        $testDialog = new DialogModel($touchKey, 0);
        $data = ['dialog' => $testDialog->createView()];
        $view = $this->view($data,Response::HTTP_OK);
        return $this->handleView($view);
    }
}
