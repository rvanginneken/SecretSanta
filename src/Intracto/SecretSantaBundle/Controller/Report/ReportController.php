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
        $reportQuery = $this->get('intracto_secret_santa.query.report');

        return [
            'years' => $reportQuery->getSelectableYears(),
        ];
    }
}
