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
        $this->redirect('homeBackEnd/index');
    }

    public function executeHome(sfWebRequest $request) {

       
         
    }

    public function executeLogout(sfWebRequest $request) {

        // $this->getUser()->getAttributeHolder()->removeNamespace('gerente');
        $this->getUser()->setAuthenticated(false);
        $this->getUser()->clearCredentials();

        $this->redirect($this->getContext()->getConfiguration()->generateFrontendUrl('login', array()));
    }

    public function executeLogin(sfWebRequest $request) {

      $this->redirect($this->getContext()->getConfiguration()->generateFrontendUrl('login', array()));
    }

}
