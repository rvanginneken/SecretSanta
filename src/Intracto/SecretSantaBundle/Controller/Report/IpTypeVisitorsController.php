<?php

namespace Intracto\SecretSantaBundle\Controller\Report;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class IpTypeVisitorsController.
 */
class IpTypeVisitorsController extends Controller
{
    /**
     * @Route("/report/ip_type_visitors", name="report.ip_type_visitors")
     */
    public function reportAction()
    {
        return new JsonResponse([
            'cols' => [
                [
                    'id' => '',
                    'label' => 'Type',
                    'pattern' => '',
                    'type' => 'string',
                ],
                [
                    'id' => '',
                    'label' => 'Amount',
                    'pattern' => '',
                    'type' => 'number',
                ],
            ],
            'rows' => [
                ['c' => [['v' => 'IPv4', 'f' => null,], ['v' => 680000, 'f' => null,]],],
                ['c' => [['v' => 'IPv6', 'f' => null,], ['v' => 53000, 'f' => null,]],],
            ],
        ]);
    }
}
