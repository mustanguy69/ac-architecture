<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homePage()
    {
        $presentation = $this->getDoctrine()->getRepository('App:Presentation')->find(1);

        return $this->render('pages/index.html.twig', ['presentation' => $presentation]);
    }

    /**
     * @Route("/agence/presentation", name="presentation")
     */
    public function presentationPage()
    {
        $presentation = $this->getDoctrine()->getRepository('App:Presentation')->find(1);

        return $this->render('pages/presentation.html.twig', ['presentation' => $presentation]);
    }

    /**
     * @Route("/agence/equipe", name="equipe")
     */
    public function equipePage()
    {
        $presentation = $this->getDoctrine()->getRepository('App:Presentation')->find(1);
        $equipe = $this->getDoctrine()->getRepository('App:Equipe')->find(1);

        return $this->render('pages/equipe.html.twig', ['equipe' => $equipe, 'presentation' => $presentation]);
    }

    /**
     * @Route("/agence/organisation", name="organisation")
     */
    public function organisationPage()
    {
        $organisation = $this->getDoctrine()->getRepository('App:Organisation')->find(1);

        return $this->render('pages/organisation.html.twig', ['organisation' => $organisation]);
    }

    /**
     * @Route("/services", name="services")
     */
    public function servicesPage()
    {
        $services = $this->getDoctrine()->getRepository('App:Services')->find(1);

        return $this->render('pages/services.html.twig', ['services' => $services]);
    }

    /**
     * @Route("/realisations/ehpad", name="ehpad")
     */
    public function ehpadPage()
    {
        $ehpad = $this->getDoctrine()->getRepository('App:EHPAD')->findBy([], ['id' => 'DESC']);

        return $this->render('pages/ehpad.html.twig', ['ehpad' => $ehpad]);
    }

    /**
     * @Route("/realisations/ehpad/{slug}", name="ehpad_view")
     */
    public function ehpadViewPage($slug)
    {
        $ehpad = $this->getDoctrine()->getRepository('App:EHPAD')->findOneBy((['slug' => $slug]));

        return $this->render('pages/ehpad-view.html.twig', ['real' => $ehpad]);
    }

    /**
     * @Route("/realisations/ehpad/carrousel", name="ehpad_carrousel")
     */
    public function ehpadCarrouselPage($current)
    {
        $ehpad = $this->getDoctrine()->getRepository('App:EHPAD')->findByNot('id', $current);

        return $this->render('sections/carrousel-ehpad.html.twig', ['reals' => $ehpad]);
    }

    /**
     * @Route("/realisations/logements-collectifs", name="collectifs")
     */
    public function collectifsPage()
    {
        $collectif = $this->getDoctrine()->getRepository('App:Collectif')->findBy([], ['id' => 'DESC']);

        return $this->render('pages/collectifs.html.twig', ['collectif' => $collectif]);
    }

    /**
     * @Route("/realisations/logements-collectifs/{slug}", name="collectif_view")
     */
    public function collectifViewPage($slug)
    {
        $collectif = $this->getDoctrine()->getRepository('App:Collectif')->findOneBy((['slug' => $slug]));

        return $this->render('pages/collectif-view.html.twig', ['real' => $collectif]);
    }

    /**
     * @Route("/realisations/logements-collectifs/carrousel", name="collectif_carrousel")
     */
    public function collectifCarrouselPage($current)
    {
        $collectif = $this->getDoctrine()->getRepository('App:Collectif')->findByNot('id', $current);

        return $this->render('sections/carrousel-collectif.html.twig', ['reals' => $collectif]);
    }

    /**
     * @Route("/realisations/logements-individuels", name="individuels")
     */
    public function individuelsPage()
    {
        $individuel = $this->getDoctrine()->getRepository('App:Individuel')->findBy([], ['id' => 'DESC']);

        return $this->render('pages/individuels.html.twig', ['individuel' => $individuel]);
    }

    /**
     * @Route("/realisations/logements-individuels/{slug}", name="individuel_view")
     */
    public function individuelViewPage($slug)
    {
        $individuel = $this->getDoctrine()->getRepository('App:Individuel')->findOneBy((['slug' => $slug]));

        return $this->render('pages/individuel-view.html.twig', ['real' => $individuel]);
    }

    /**
     * @Route("/realisations/logements-individuels/carrousel", name="individuel_carrousel")
     */
    public function individuelCarrouselPage($current)
    {
        $individuel = $this->getDoctrine()->getRepository('App:Individuel')->findByNot('id', $current);

        return $this->render('sections/carrousel-individuel.html.twig', ['reals' => $individuel]);
    }

    /**
     * @Route("/realisations/lieux-cultuels", name="cultuels")
     */
    public function cultuelsPage()
    {
        $cultuel = $this->getDoctrine()->getRepository('App:Cultuel')->findBy([], ['id' => 'DESC']);

        return $this->render('pages/cultuels.html.twig', ['cultuel' => $cultuel]);
    }

    /**
     * @Route("/realisations/lieux-cultuels/{slug}", name="cultuel_view")
     */
    public function cultuelViewPage($slug)
    {
        $cultuel = $this->getDoctrine()->getRepository('App:Cultuel')->findOneBy((['slug' => $slug]));

        return $this->render('pages/cultuel-view.html.twig', ['real' => $cultuel]);
    }

    /**
     * @Route("/realisations/lieux-cultuel/carrousel", name="ehpad_cultuel")
     */
    public function cultuelCarrouselPage($current)
    {
        $cultuel = $this->getDoctrine()->getRepository('App:Cultuel')->findByNot('id', $current);

        return $this->render('sections/carrousel-cultuel.html.twig', ['reals' => $cultuel]);
    }

    /**
     * @Route("/realisations/logements-equipements", name="equipements")
     */
    public function equipementsPage()
    {
        $equipement = $this->getDoctrine()->getRepository('App:Equipement')->findBy([], ['id' => 'DESC']);

        return $this->render('pages/equipements.html.twig', ['equipement' => $equipement]);
    }

    /**
     * @Route("/realisations/logements-equipements/{slug}", name="equipement_view")
     */
    public function equipementViewPage($slug)
    {
        $equipement = $this->getDoctrine()->getRepository('App:Equipement')->findOneBy((['slug' => $slug]));

        return $this->render('pages/equipement-view.html.twig', ['real' => $equipement]);
    }

    /**
     * @Route("/realisations/logements-equipements/carrousel", name="equipement_carrousel")
     */
    public function equipementCarrouselPage($current)
    {
        $equipement = $this->getDoctrine()->getRepository('App:Equipement')->findByNot('id', $current);

        return $this->render('sections/carrousel-equipement.html.twig', ['reals' => $equipement]);
    }

    /**
     * @Route("/realisations/", name="realisations-all")
     */
    public function allRealisationsPage()
    {
        $realisations = $this->getDoctrine()->getRepository('App:Realisations')->find(1);
        $ehpad = $this->getDoctrine()->getRepository('App:EHPAD')->findBy([], [], $realisations->getDisplayLimit());
        $individuel = $this->getDoctrine()->getRepository('App:Individuel')->findAll();
        $collectif = $this->getDoctrine()->getRepository('App:Collectif')->findAll();
        $cultuel = $this->getDoctrine()->getRepository('App:Cultuel')->findAll();
        $equipement = $this->getDoctrine()->getRepository('App:Equipement')->findAll();
        
        return $this->render('pages/realisations.html.twig', [
            'ehpads' => $ehpad,
            'collectifs' => $collectif,
            'individuels' => $individuel,
            'cultuels' => $cultuel,
            'equipements' => $equipement,
            'realisation' => $realisations,
        ]);
    }

    /**
     * @Route("/contact/", name="contact")
     */
    public function contactPage(Request $request, \Swift_Mailer $mailer)
    {
        $contact = $this->getDoctrine()->getRepository('App:Contact')->find(1);

        if ($request->isMethod('POST')) {
            $emailTo = $contact->getEmail();
            $represente = $request->request->get('represente');
            $cherche = $request->request->get('cherche');
            $pour = $request->request->get('pour');
            $email = $request->request->get('email');
            $firstname = $request->request->get('firstname');
            $lastname = $request->request->get('lastname');
            $tel = $request->request->get('tel');

            $message = (new \Swift_Message('Contact sur AC-Architecture'))
            ->setFrom($emailTo)
            ->setTo($emailTo)
            ->setBody(
                '<p>Je represente : '. $represente . '</p>'.
                '<p>Je cherche : '. $cherche . '</p>'.
                '<p>Pour : '. $pour . '</p>'.
                '<p>Email : '. $email . '</p>'.
                '<p>Prenom : '. $firstname . '</p>'.
                '<p>Nom : '. $lastname . '</p>'.
                '<p>Tel : '. $tel . '</p>',
                'text/html'
            );

            $mailer->send($message);

            $this->addFlash('success', 'Email envoyé avec succès !');

        }

        return $this->render('pages/contact.html.twig', ["contact" => $contact]);
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
        $protection = $this->getDoctrine()->getRepository('App:Protection')->find(1);

        return $this->render('pages/protection.html.twig', ['protection' => $protection]);
    }

    /**
     * @Route("/mentions-legales", name="mentions")
     */
    public function mentionsPage()
    {
        $mentions = $this->getDoctrine()->getRepository('App:Mentions')->find(1);

        return $this->render('pages/mentions.html.twig', ['mentions' => $mentions]);
    }

}
