<?php
namespace CB\PlatformBundle\Controller;
//Notre controller va utiliser l'objet Response, on va donc le defnir avec le "use"
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class CommerceController extends Controller
{
  public function commerceAction()
  {
    $commerce = $this->get('templating')->render('CBPlatformBundle:Commerce:commerce.html.twig');
    return new Response($commerce);
  }
}

 ?>
