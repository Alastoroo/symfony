<?php

namespace CB\PlatformBundle\Controller;
//Notre controller va utiliser l'objet Response, on va donc le defnir avec le "use"
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ByeController extends Controller
{
  // défini une méthode
  public function indexAction()
  {
    $bye = $this->get('templating')->render('CBPlatformBundle:Bye:index.html.twig');
    return new Response($bye);
  }
}






?>
