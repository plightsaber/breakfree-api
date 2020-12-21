<?php
/**
 * @author Myshel Neiro <myshel@breakfreesl.com>
 * @copyright 2020 BreakFree
 */

namespace App\Controller;

use App\Dialog\DialogModel;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
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
     * @Rest\Get("/dialog")
     * @return Response
     */
    public function getDialog()
    {
        $testDialog = new DialogModel("0000-0000-0000-0000", 0);
        $data = ['dialog' => $testDialog->createView()];
        $view = $this->view($data,Response::HTTP_OK);
        return $this->handleView($view);
    }
}
