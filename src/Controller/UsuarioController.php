<?php

namespace App\Controller;

use App\Entity\Usuario;
use AppBundle\Service\Acciones;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsuarioController extends AbstractController
{
    // Esta funcion sirve para mostrar los usuarios.
    /**
     * @Route("/usuarios", name="usuarios")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $datosUsuarios = $em->getRepository(Usuario::class)->findAll();
        return $this->render('index.html.twig', [
            'datosUsuarios' => $datosUsuarios,
        ]);
    }

    // Esta funcion sirve para mostrar el ejemplo del servicio creado.
    /**
     * @Route("/ejemploServicio", name="ejemplo")
     * @param Acciones $Acciones
     * @return Response
     */
    public function ejemploServicio(Acciones $Acciones)
    {
        $saludo = $Acciones->saludar();
        $despedida = $Acciones->despedir();
        return new Response(
            '<html>
                        <body>
                        <h1>'.$saludo.'</h1> 
                         <h2>'.$despedida.'</h2> 
                        </body>
                        </html>'
        );
    }
}
