<?php
namespace CB\CommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CommerceController extends Controller
{
//   public function menuAction($commerce)
//   {
//     $listCommerce = array(
//       array('id' => 1, 'title' => "test1"),
//       array('id' => 1, 'title' => "test1"),
//       array('id' => 1, 'title' => "test1")
//     );
//     return $this->render('CBCommerceBundle:Commerce:index.html.twig', array(
//       'listCommerce' => $listCommerce
//     ));
//
//   }
//   public function indexAction($page)
//   {
//     $listCommerce = array(
    //   array(
    //     'id'      => 1,
    //     'title'   => 'Oculus Rift',
    //     'price'   => 750,
    //     'content' => 'Rift ne ressemble à rien de ce que vous pouvez connaître. Que vous décidiez de jouer à votre jeu préféré, de regarder un film immersif en VR',
    //     'image'   => 'http://i2.cdscdn.com/pdt2/2/6/4/1/700x700/auc3701061518264/rw/oculus-rift-casque-de-realite-virtuelle.jpg'),
    //   array(
    //     'id'      => 2,
    //     'title'   => 'HTC VIVE',
    //     'price'   => 899,
    //     'content' => 'plongez dans un monde plein de surprises. Parcourez-le en toute liberté et explorez tout ce qui vous entoure ',
    //     'image'   => 'http://i2.cdscdn.com/pdt2/i/v/e/1/700x700/htcvive/rw/htc-vive-casque-de-realite-virtuelle.jpg'),
    //   array(
    //     'id'      => 3,
    //     'title'   => 'PS VR',
    //     'price'   => 399,
    //     'content' => 'Ne vous contentez plus de jouer. Vivez le jeu. Avec PlayStation VR, le nouveau système de réalité virtuelle pour PlayStation 4.',
    //     'image'   => 'http://i2.cdscdn.com/pdt2/p/s/4/1/700x700/morpheusps4/rw/playstation-vr-casque-de-realite-virtuelle-ps4.jpg'),
    //   array(
    //     'id'      => 4,
    //     'title'   => 'GTX 1060',
    //     'price'   => 368,
    //     'content' => 'Carte graphique GeForce® GTX 1060 GAMING X 6G' ,
    //     'image'   => 'http://i2.cdscdn.com/pdt2/x/6/g/1/700x700/msigtx1060gamx6g/rw/msi-carte-graphique-geforce-r-gtx-1060-gaming-x-6.jpg'),
    //   array(
    //     'id'      => 5,
    //     'title'   => 'GTX 1070',
    //     'price'   => 569,
    //     'content' => 'Carte graphique GeForce® GTX 1070 Gaming X 8G GDDR5',
    //     'image'   => 'http://i2.cdscdn.com/pdt2/x/8/g/1/700x700/msigtx1070gamx8g/rw/msi-carte-graphique-geforce-r-gtx-1070-gaming-x-8.jpg'),
    //   array(
    //     'id'      => 6,
    //     'title'   => 'GTX 1080 Ti',
    //     'price'   => 879,
    //     'content' => 'Carte graphique GeForce® GTX 1080 TI GAMING X',
    //     'image'   => 'http://i2.cdscdn.com/pdt2/1/1/g/1/700x700/gtx1080tigamx11g/rw/msi-carte-graphique-geforce-r-gtx-1080-ti-gaming.jpg')
    // );
//     return $this->render('CBCommerceBundle:Commerce:index.html.twig', array(
//       'listCommerce' => $listCommerce
//     ));
//   }
//
//   public function viewAction($id)
//   {
//     $commerce = array(
//       'id'      => $id,
//       'title'   => 'GTX 1080 Ti',
//       'price'   => 879,
//       'content' => 'Carte graphique GeForce® GTX 1080 TI GAMING X',
//       'image'   => 'http://i2.cdscdn.com/pdt2/1/1/g/1/700x700/gtx1080tigamx11g/rw/msi-carte-graphique-geforce-r-gtx-1080-ti-gaming.jpg'
//     );
//
//     return $this->render('CBCommerceBundle:Commerce:index.html.twig', array(
//       'commerce' => $commerce
//     ));
//   }
// }
//
//
//
//

public function menuAction($limite)
{
  $commerce = array(
    array('title' => 'Oculus Rift'),
    array('title' => 'HTC VIVE'),
    array('title' => 'PS VR'),
    array('title' => 'GTX 1060'),
    array('title' => 'GTX 1070'),
    array('title' => 'GTX 1080')
  );
  return $this->render('CBCommerceBundle:Commerce:commercelayout.html.twig', array(
    'commerce' => $commerce
  ));
}
public function indexAction(Request $request)
{
  $commerce = array(
    array(
      'title'   => 'Oculus Rift',
      'price'   => 750,
      'content' => 'Rift ne ressemble à rien de ce que vous pouvez connaître. Que vous décidiez de jouer à votre jeu préféré, de regarder un film immersif en VR',
      'image'   => 'http://i2.cdscdn.com/pdt2/2/6/4/1/700x700/auc3701061518264/rw/oculus-rift-casque-de-realite-virtuelle.jpg'),
    array(
      'title'   => 'HTC VIVE',
      'price'   => 899,
      'content' => 'plongez dans un monde plein de surprises. Parcourez-le en toute liberté et explorez tout ce qui vous entoure ',
      'image'   => 'http://i2.cdscdn.com/pdt2/i/v/e/1/700x700/htcvive/rw/htc-vive-casque-de-realite-virtuelle.jpg'),
    array(
      'title'   => 'PS VR',
      'price'   => 399,
      'content' => 'Ne vous contentez plus de jouer. Vivez le jeu. Avec PlayStation VR, le nouveau système de réalité virtuelle pour PlayStation 4.',
      'image'   => 'http://i2.cdscdn.com/pdt2/p/s/4/1/700x700/morpheusps4/rw/playstation-vr-casque-de-realite-virtuelle-ps4.jpg'),
    array(
      'title'   => 'GTX 1060',
      'price'   => 368,
      'content' => 'Carte graphique GeForce® GTX 1060 GAMING X 6G' ,
      'image'   => 'http://i2.cdscdn.com/pdt2/x/6/g/1/700x700/msigtx1060gamx6g/rw/msi-carte-graphique-geforce-r-gtx-1060-gaming-x-6.jpg'),
    array(
      'title'   => 'GTX 1070',
      'price'   => 569,
      'content' => 'Carte graphique GeForce® GTX 1070 Gaming X 8G GDDR5',
      'image'   => 'http://i2.cdscdn.com/pdt2/x/8/g/1/700x700/msigtx1070gamx8g/rw/msi-carte-graphique-geforce-r-gtx-1070-gaming-x-8.jpg'),
    array(
      'title'   => 'GTX 1080 Ti',
      'price'   => 879,
      'content' => 'Carte graphique GeForce® GTX 1080 TI GAMING X',
      'image'   => 'http://i2.cdscdn.com/pdt2/1/1/g/1/700x700/gtx1080tigamx11g/rw/msi-carte-graphique-geforce-r-gtx-1080-ti-gaming.jpg')
  );
  return $this->render('CBCommerceBundle:Commerce:listAnnonce.html.twig', array(
    'commerce' => $commerce
));
}

// public function viewAction($id)
// {
//   $annonce = array(
//     'title'     => 'Recherche développeur Symfony2',
//     'id'        => $id,
//     'author'    => 'Alexandre',
//     'content'   => 'Nous recherchons un dev Symfony2 débutant sur Lyon',
//     'date'      => new \Datetime()
//   );
//   return $this->render('CBCommerceBundle:Commerce:view.html.twig', array(
//     'annonce' => $annonce
//   ));
//}

// public function addAction(Request $request)
// {
//   // On récupere le service
//   $antispam = $this->container->get('cb_platform.antispam');
//   // Je pars du principe que $text contient le texte d'un message quelconque
//   $text = '...';
//   if ($antispam->isSpam($text)){
//     throw new \Exception('Votre message à été détecté comme spam. Utilisez plus de 50 caractères');
//   }
//
//   if ($request->isMethod('POST')){
//     $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
//     return $this->redirectToRoute('cb_platform_view', array('id' => 5));
//   }
//   return $this->render('CBPlatformBundle:Advert:edit.html.twig');
// }
//
// public function deleteAction($id)
// {
//   return $this->render('CBPlatformBundle:Advert:delete.html.twig');
// }
//
//
// public function editAction($id, Request $request)
// {
//   $advert = array(
//     'title'     => 'Recherche développeur Symfony',
//     'id'        => $id,
//     'author'    => 'Alexandre',
//     'content'   => 'Nous recherchons un dev Symfony débutant sur Lyon',
//     'date'      => new \Datetime()
//   );
//   return $this->render('CBPlatformBundle:Advert:edit.html.twig', array(
//     'advert' => $advert
//   ));
// }
}
 ?>
