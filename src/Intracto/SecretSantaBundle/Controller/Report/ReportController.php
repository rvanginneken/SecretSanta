<?php

namespace Intracto\SecretSantaBundle\Controller\Report;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ReportController.
 */
class ReportController extends Controller
{
    /**
     * @Route("/report", name="report.report")
     * @Template("IntractoSecretSantaBundle:Report:report.html.twig")
     */
    public function reportAction()
    {
        //        $this->denyAccessUnlessGranted('ROLE_ADWORDS');
//
//        $startCrawling = new \DateTime();
//        $startCrawling->sub(new \DateInterval('P4M'));
//
//        return [
//            'participants' => $this->get('intracto_secret_santa.repository.participant')->findAfter($startCrawling),
//        ];
    }
}
