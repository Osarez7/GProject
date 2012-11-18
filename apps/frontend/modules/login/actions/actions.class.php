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

            $usuario = Doctrine::getTable('Usuario')->existeUsuario($request->getParameter('user'), $request->getParameter('password'));


            if (!$usuario) {
                $this->getUser()->setFlash('error', 'Usuario o contraseña inválidos');
                $this->redirect('login/index');
            } else {


                $this->getUser()->setAuthenticated(true);
                $this->getUser()->setAttribute('idUsuario', $usuario->getIdUsuario());
                $this->getUser()->setAttribute('nombre', $usuario->getNombreCompleto());
                $this->getUser()->addCredential($usuario->getPerfil());


                if ($this->getUser()->hasCredential('admin')) {
                     $this->logMessage('tiene credencial de admin', 'notice');
                    
                    $this->redirect($this->getContext()->getConfiguration()->generateBackEndUrl('homepage', array()));
                }
                $this->redirect('home/index');
            }
        }



        if ($this->getUser()->isAuthenticated()) {
            $this->redirect('/');
        }

        $this->form = new LoginForm();
    }

//.


    public function executeLogout(sfWebRequest $request) {
    
        $this->getUser()->getAttributeHolder()->removeNamespace('gerente');
        $this->getUser()->setAuthenticated(false);
       
        $this->getUser()->clearCredentials();
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

