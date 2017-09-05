<?php

namespace Intracto\SecretSantaBundle\Controller\Report;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class PartiesPerYearController.
 */
class PartiesPerYearController extends Controller
{
    /**
     * @Route("/report/parties_per_year", name="report.parties_per_year")
     */
    public function reportAction()
    {
        return new JsonResponse([
            'cols' => [
                [
                    'id' => '',
                    'label' => 'Season',
                    'pattern' => '',
                    'type' => 'number',
                ],
                [
                    'id' => '',
                    'label' => 'Parties',
                    'pattern' => '',
                    'type' => 'number',
                ],
            ],
            'rows' => [
                ['c' => [['v' => 2012, 'f' => null,], ['v' => 0, 'f' => null,]],],
                ['c' => [['v' => 2013, 'f' => null,], ['v' => 3000, 'f' => null,]],],
                ['c' => [['v' => 2014, 'f' => null,], ['v' => 11000, 'f' => null,]],],
                ['c' => [['v' => 2015, 'f' => null,], ['v' => 33000, 'f' => null,]],],
                ['c' => [['v' => 2016, 'f' => null,], ['v' => 75000, 'f' => null,]],],
            ],
        ]);
    }
}
