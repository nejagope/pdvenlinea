<?php
namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empleado;

class LoginController extends Controller
{
  public function loginAction()
  {
     //$factory = $this->get('security.encoder_factory');
    // $user = new Dxtabase();
    // $encoder = $factory->getEncoder($user);
    // $password = $encoder->encodePassword('roberto123', $user->getSalt());
   //  $user->setContras($password);
    // echo $user->getContras();
     return $this->render('PdvBundle:Login:Login.html.twig', array(
       'last_username' => $this->get('request')
                               ->getSession()
                               ->get(SecurityContext::LAST_USERNAME),
       'error'         => $this->get('request')
                               ->getSession()
                               ->get(SecurityContext::AUTHENTICATION_ERROR),
            )
        );
  }

}
?>