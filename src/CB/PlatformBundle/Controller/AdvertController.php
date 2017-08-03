<?php
// src/CB/PlatformBundle/Controller/AdvertController.php

//on se place dans le namesapce des controleur de notre bundle
namespace CB\PlatformBundle\Controller;
//Notre controller va utiliser l'objet Response, on va donc le defnir avec le "use"
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\NotFoundHttpExeption;

//creation d'un entité (un objet )avec doctrine2
use OC\PlatfomBundle\Entity\Advert




//creation d'une class, le nom du controller respect le nom du fichier pour que l'autoload fonctionne
class AdvertController extends Controller
{
  public function menuAction($limit)
  {
    $listAdverts = array(
      array('id' => 2, 'title' => 'Recherche développeur Symfony'),
      array('id' => 5, 'title' => 'Misdsion de Webmaster'),
      array('id' => 9, 'title' => 'Offre de stage Webdesigner')
    );
    return $this->render('CBPlatformBundle:Advert:menu.html.twig', array(
      'listAdverts' => $listAdverts
    ));
  }
  public function indexAction($page)
  {
    $listAdverts = array(
      array(
        'title'   => 'Recherche dév Symfony',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un dev Symfony débutant syr Lyon',
        'image'   => "https://symfony.com/logos/symfony_black_02.png",
        'date'    => new \Datetime()),
      array(
        'title'   => 'Mission de Webmaster',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => 'Nous recherchon un Webmaster capable de maintenir notre site internet',
        'image'   => "https://upload.wikimedia.org/wikipedia/commons/4/4d/Webmaster_logo_adopted_copy.png",
        'date'    => new \Datetime()),
      array(
        'title'   => 'Offre de stage Webdesigner',
        'id'      => 3,
        'author'  => 'Colin',
        'content' => 'Nous proposons un post de Webdesigner',
        'image'   => "https://www.creatypics.com/css/images/logo_index.png",
        'date'    => new \Datetime())
    );
    return $this->render('CBPlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts
  ));
  }


// ANONCE VIEW ENTITY
  public function viewAction()
  {
    //annonce
    $advert = new Advert;
    $advert->setContent("Recherche dév Symfony3.");

    return $this->render('CBPlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert
    ));
  }



  public function addAction(Request $request)
  {
    // On récupere le service
    $antispam = $this->container->get('cb_platform.antispam');
    // Je pars du principe que $text contient le texte d'un message quelconque
    $text = '...';
    if ($antispam->isSpam($text)){
      throw new \Exception('Votre message à été détecté comme spam. Utilisez plus de 50 caractères');
    }

    if ($request->isMethod('POST')){
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
      return $this->redirectToRoute('cb_platform_view', array('id' => 5));
    }
    return $this->render('CBPlatformBundle:Advert:edit.html.twig');
  }

  public function deleteAction($id)
  {
    return $this->render('CBPlatformBundle:Advert:delete.html.twig');
  }


  public function editAction($id, Request $request)
  {
    $advert = array(
      'title'     => 'Recherche développeur Symfony',
      'id'        => $id,
      'author'    => 'Alexandre',
      'content'   => 'Nous recherchons un dev Symfony débutant sur Lyon',
      'date'      => new \Datetime()
    );
    return $this->render('CBPlatformBundle:Advert:edit.html.twig', array(
      'advert' => $advert
    ));
  }
}
