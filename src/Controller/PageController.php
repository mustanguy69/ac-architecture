<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homePage()
    {
        return $this->render('pages/index.html.twig');
    }

    /**
     * @Route("/agence/presentation", name="presentation")
     */
    public function presentationPage()
    {
        return $this->render('pages/presentation.html.twig');
    }

    /**
     * @Route("/agence/equipe", name="equipe")
     */
    public function equipePage()
    {
        return $this->render('pages/equipe.html.twig');
    }

    /**
     * @Route("/agence/organisation", name="organisation")
     */
    public function organisationPage()
    {
        return $this->render('pages/organisation.html.twig');
    }

    /**
     * @Route("/services", name="services")
     */
    public function servicesPage()
    {
        return $this->render('pages/services.html.twig');
    }

    /**
     * @Route("/realisations/ehpad", name="ehpad")
     */
    public function ehpadPage()
    {
        return $this->render('pages/ehpad.html.twig');
    }

    /**
     * @Route("/realisations/logements-collectifs", name="collectifs")
     */
    public function collectifsPage()
    {
        return $this->render('pages/collectifs.html.twig');
    }

    /**
     * @Route("/realisations/logements-individuel", name="individuels")
     */
    public function individuelsPage()
    {
        return $this->render('pages/individuels.html.twig');
    }

    /**
     * @Route("/realisations/lieux-cultuels", name="cultuels")
     */
    public function cultuelsPage()
    {
        return $this->render('pages/cultuels.html.twig');
    }

    /**
     * @Route("/realisations/equipements", name="equipements")
     */
    public function equipementsPage()
    {
        return $this->render('pages/equipements.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactPage()
    {
        return $this->render('pages/contact.html.twig');
    }

    /**
     * @Route("/inspirations", name="inspirations")
     */
    public function inspirationsPage()
    {
        return $this->render('pages/inspirations.html.twig');
    }

    /**
     * @Route("/protection-des-données", name="protection")
     */
    public function protectionPage()
    {
        return $this->render('pages/protection.html.twig');
    }

    /**
     * @Route("/mentions-legales", name="mentions")
     */
    public function mentionsPage()
    {
        return $this->render('pages/mentions.html.twig');
    }

    /**
     * @Route("/realisations/ehpad/maison-caritas", name="caritas")
     */
    public function caritasPage()
    {
        return $this->render('pages/caritas.html.twig');
    }

    /**
     * @Route("/realisations/logements-individuel/maison-de-ville", name="maison")
     */
    public function maisonPage()
    {
        return $this->render('pages/maison.html.twig');
    }

    /**
     * @Route("/realisations/lieux-cultuels/abbaye-de-rochette", name="rochette")
     */
    public function rochettePage()
    {
        return $this->render('pages/rochette.html.twig');
    }

    /**
     * @Route("/realisations/lieux-cultuels/abbaye-de-rochette-2", name="rochette2")
     */
    public function rochette2Page()
    {
        return $this->render('pages/rochette2.html.twig');
    }
}
