<?php
// src/CB/PlatformBundle/Controller/AdvertController.php

//on se place dans le namesapce des controleur de notre bundle
namespace CB\PlatformBundle\Controller;

use CB\PlatformBundle\Entity\Advert;
//Notre controller va utiliser l'objet Response, on va donc le defnir avec le "use"
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\NotFoundHttpExeption;






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
  public function viewAction($id)
  {
    $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('CBPlatformBundle:Advert')
  ;
    $advert = $repository->find($id);

    if (null === $advert){
      throw new NotFoundHttpException("L'annonce d'id " .$id. " n'existe pas. ");
    }
    return $this->render('CBPlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert
    ));
  }


// ADD ACTION (BDD)
  public function addAction(Request $request)
  {
    //Création de l'entité
    $advert = new Advert();
    $advert->setCreatedAt(new \DateTime());
    $advert->setUpdateAt(new \DateTime());
    $advert->setTitle('Recherche dev symfony.');
    $advert->setAuthor('Alexandre');
    $advert->setContent('Nous recherchons un dev symfony débutant sur Lyon. blablabla');
    //On peut ne pas définir ni la date ni la publication
    // car ces attributs sont défini automatiquement dans le contructeur

    //on récupere l'entitiManager
    $em = $this->getDoctrine()->getManager();

    //etape 1: On << persiste >> l'entité
    $em->persist($advert);

    //etape 2: On << flush >> tout ce qui est persisté avant
    $em->flush();

    //reste de la méthode
    if ($request->isMethod('POST')) {
      $_request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
      //On redirige vers la page de visualisation de l'annonce
      return $this->redirectToRoute('cb_platform_view', array('id' => $advert->getId()));
    }
    //Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('CBPlatformBundle:Advert:add.html.twig', array('advert' => $advert));
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
