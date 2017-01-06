<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Menus;
use AppBundle\Entity\MenuLike;
use AppBundle\Form\MenuType;
use AppBundle\Form\MenuLikeType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {


        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/menus", name="menus")
     */
     public function menusAction(Request $request)
     {

       $repository = $this->getDoctrine()->getRepository('AppBundle:Menus');

      //  $lesPlats = $repository->findAll();
        $lesPlats = $repository->findBy([]);

         return $this->render('menus/menus.html.twig',['lesPlats'=>$lesPlats]);

     }

     /**
     * @Route("/menus/affichePlat/{id}", name="affichePlat")
     */
     public function affichePlatAction(Request $request, $id)
     {
       $repository = $this->getDoctrine()->getRepository('AppBundle:Menus');
       $plat = $repository->getPlatById($id);


       if (is_null ($plat) ) {
         throw $this->createNotFoundException("Pas trouvé");
       }


        $menuLike = new MenuLike();
        $form = $this->createForm(MenuLikeType::class, $menuLike);
        $form-> handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
         // $form->getData() holds the submitted values
         // but, the original `$task` variable has also been updated
         $menuLike = $form->getData();
         $menuLike->setIdMenu($plat);
         // ... perform some action, such as saving the task to the database
         // for example, if Task is a Doctrine entity, save it!
          $em = $this->getDoctrine()->getManager();
          $em->persist($menuLike);
          $em->flush();


          return $this->redirectToRoute('menus');
          }


          return $this->render('menus/affichePlat.html.twig',['plat'=>$plat,
               //'totalNote' => $this->container->get('app.Count_Note')->getTotalMenuLike($id),
              // 'moyenne' => $this->container->get('app.Count_Note')->getMoyenneMenuLike($id),
               'menu' => $plat,
               'form' => $form->createView()]
           );

      }

     /**
     * @Route("/menus/ajoutMenu")
     */
     public function ajoutMenuAction(Request $request)
     {
       $menu = new Menus();
       $form = $this->createForm(MenuType::class, $menu);
       $form-> handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $menu = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
         $em = $this->getDoctrine()->getManager();
         $em->persist($menu);
         $em->flush();

      return $this->redirectToRoute('menus',['id'=>$menu->getId()]);
    }
       return $this->render('menus/ajoutMenu.html.twig', array(
            'form' => $form->createView(),
        ));
      // return $this->render('menus/ajoutMenu.html.twig','');
     }

     /**
     * @Route("/admin", name="admin")
     */
     public function adminAction(Request $request){

       $repository = $this->getDoctrine()->getRepository('AppBundle:Menus');

      //  $lesPlats = $repository->findAll();
        $lesPlats = $repository->findBy([]);

        //return $this->render('menus/admin.html.twig');
       return $this->render('admin/admin.html.twig',['lesPlats'=>$lesPlats]);
     }


}
