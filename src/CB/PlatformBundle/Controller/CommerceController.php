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
          'id'      => 1,
          'title'   => 'Oculus Rift',
          'price'   => 750,
          'content' => 'Rift ne ressemble à rien de ce que vous pouvez connaître. Que vous décidiez de jouer à votre jeu préféré, de regarder un film immersif en VR',
          'image'   => 'http://i2.cdscdn.com/pdt2/2/6/4/1/700x700/auc3701061518264/rw/oculus-rift-casque-de-realite-virtuelle.jpg'),
        array(
          'id'      => 2,
          'title'   => 'HTC VIVE',
          'price'   => 899,
          'content' => 'plongez dans un monde plein de surprises. Parcourez-le en toute liberté et explorez tout ce qui vous entoure ',
          'image'   => 'http://i2.cdscdn.com/pdt2/i/v/e/1/700x700/htcvive/rw/htc-vive-casque-de-realite-virtuelle.jpg'),
        array(
          'id'      => 3,
          'title'   => 'PS VR',
          'price'   => 399,
          'content' => 'Ne vous contentez plus de jouer. Vivez le jeu. Avec PlayStation VR, le nouveau système de réalité virtuelle pour PlayStation 4.',
          'image'   => 'http://i2.cdscdn.com/pdt2/p/s/4/1/700x700/morpheusps4/rw/playstation-vr-casque-de-realite-virtuelle-ps4.jpg'),
        array(
          'id'      => 4,
          'title'   => 'GTX 1060',
          'price'   => 368,
          'content' => 'Carte graphique GeForce® GTX 1060 GAMING X 6G' ,
          'image'   => 'http://i2.cdscdn.com/pdt2/x/6/g/1/700x700/msigtx1060gamx6g/rw/msi-carte-graphique-geforce-r-gtx-1060-gaming-x-6.jpg'),
        array(
          'id'      => 5,
          'title'   => 'GTX 1070',
          'price'   => 569,
          'content' => 'Carte graphique GeForce® GTX 1070 Gaming X 8G GDDR5',
          'image'   => 'http://i2.cdscdn.com/pdt2/x/8/g/1/700x700/msigtx1070gamx8g/rw/msi-carte-graphique-geforce-r-gtx-1070-gaming-x-8.jpg'),
        array(
          'id'      => 6,
          'title'   => 'GTX 1080 Ti',
          'price'   => 879,
          'content' => 'Carte graphique GeForce® GTX 1080 TI GAMING X',
          'image'   => 'http://i2.cdscdn.com/pdt2/1/1/g/1/700x700/gtx1080tigamx11g/rw/msi-carte-graphique-geforce-r-gtx-1080-ti-gaming.jpg')
      );

      return $this->render('CBPlatformBundle:Commerce:commerce.html.twig', array(
        'listCommerce' => $listCommerce
      ));
    // $commerce = $this->get('templating')->render('CBPlatformBundle:Commerce:commerce.html.twig');
    // return new Response($commerce);
  }
  public function layoutAction()
  {
     $layout = $this->get('templating')->render('app:Ressources:views:layout.html.twig');
     return new Response($layout);
  }
}

 ?>
