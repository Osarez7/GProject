<?php

/**
 * login actions.
 *
 * @package    gproject
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {



        if ($request->getParameter('login')) {
//Hacemos la consulta para ver si existe cliente con ese usuario y esa contraseña.
//Comprobamos que existe el usuario, si no creamos un mensaje flash y redireccionamos al index
              
            
            $usuario = Doctrine::getTable('Usuario')->existeUsuario($request->getParameter('user'), $request->getParameter('password'));
            
            
            if (!$usuario) {
                $this->getUser()->setFlash('error', 'Usuario o contraseña inválidos');
                $this->redirect('login/index');
            } else {
//Autenticamos al usuario
                $this->getUser()->setAuthenticated(true);
//Creamos variables de sesión con sus datos personales, para lo que nos pueda valer.
                $this->getUser()->setAttribute('idUsuario', $usuario->getIdUsuario());
//En este caso 'nombre' es el nombre de la variable, seguido por el valor y por último el namespace.
                $this->getUser()->setAttribute('nombre', $usuario->getNombreCompleto());
//Si queremos acceder a estas variables no tenemos mas que poner: $this->getUser()->getAttribute('nombre', null, 'cliente');
//Le damos las credenciales correspondientes, en este caso de cliente.
                $this->getUser()->addCredential($usuario->getPerfil());
                // $this->getUser()->addCredential('admin');
                $this->redirect('proyecto/index');
            }
        
        }
      
        /* Aquí nos aseguramos de que no vuelva a entrar al login una vez logeado y tenga credencial de cliente, no es necesario pero a mi me gusta         así. Quedaos con el isAuthenticated() y el hasCredential('credencial'). Para comprobar que se tienen mas de una credencial:
          $this->getUser()->hasCredential(array("admin", "cliente")); Para comprobar que tiene las dos, admin y cliente.
          $this->getUser()->hasCredential(array("admin", "cliente"), false); Para comprobar que tiene cualquiera de las dos.
         */
        
        
        if ($this->getUser()->isAuthenticated()){
            $this->redirect('/');
        }
//Instanciamos el formulario que hemos creado en el primer paso.
        $this->form = new LoginForm();
        
    }

//Esta es la acción que se ejecuta cuando queremos hacer logout(deslogearse).


    public function executeLogout(sfWebRequest $request) {
//Borramos todas las variables de sesion creadas bajo el namespace de cliente.     
        $this->getUser()->getAttributeHolder()->removeNamespace('gerente');
//Quitamos la autenticación del usuario.
        $this->getUser()->setAuthenticated(false);
//Eliminamos la credencial. Para borralas todas de golpe: $this->getUser->clearCredentials();
        $this->getUser()->removeCredential('gerente');
        $this->redirect('login/index');
    }

    protected function validarFormulario(sfWebRequest $request, sfForm $form) {
        
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        
        if (!$form->isValid()) {
            
            return false;
        }
        
        return true;
    }

    public function executePrueba(sfWebRequest $request) {
       
        if ($request->getParameter('submitPrueba')) {
            
            $this->parametros = $request->getGetParameters();
              $this->redirect('proyecto/index');
            
        } else {
            
             $this->form = new PruebaForm();
        }
    }

}

