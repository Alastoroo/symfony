<?php
namespace CB\PlatformBundle\Controller;
//Notre controller va utiliser l'objet Response, on va donc le defnir avec le "use"
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class CommerceController extends Controller
{
  public function commerceAction()
  {
    $listCommerce = array(
      array(
        'title'   => 'Recherche dév Symfony',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un dev Symfony débutant syr Lyon',
        'image'   => "https://symfony.com/logos/symfony_black_02.png"),
      array(
        'title'   => 'Mission de Webmaster',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => 'Nous recherchon un Webmaster capable de maintenir notre site internet',
        'image'   => "https://upload.wikimedia.org/wikipedia/commons/4/4d/Webmaster_logo_adopted_copy.png"),
      array(
        'title'   => 'Offre de stage Webdesigner',
        'id'      => 3,
        'author'  => 'Colin',
        'content' => 'Nous proposons un post de Webdesigner',
        'image'   => "https://www.creatypics.com/css/images/logo_index.png")
      );
      return $this->render('CBPlatformBundle:Commerce:commerce.html.twig', array(
        'listCommerce' => $listCommerce
      ));
    // $commerce = $this->get('templating')->render('CBPlatformBundle:Commerce:commerce.html.twig');
    // return new Response($commerce);
  }
}

 ?>
