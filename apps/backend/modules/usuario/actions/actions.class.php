<?php

require_once dirname(__FILE__) . '/../lib/usuarioGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/usuarioGeneratorHelper.class.php';

/**
 * usuario actions.
 *
 * @package    gproject
 * @subpackage usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuarioActions extends autoUsuarioActions {

    public function executeListInactivar(sfWebRequest $request) {
        $usuario = $this->getRoute()->getObject();
        $usuario->inactivar();
        $this->getUser()->setFlash('notice', 'El usuario seleccionado ha sido inactivado correctamente.');
       $this->redirect('usuario');
    }

    public function executeBatchInactivar(sfWebRequest $request) {
        $ids = $request->getParameter('ids');
        $q = Doctrine_Query::create()
                ->from('Usuario u')
                ->whereIn('u.idUsuario', $ids);
        foreach ($q->execute() as $usuario) {
            $usuario->inactivar();
        }
        $this->getUser()->setFlash('notice', 'Los usuarios seleccionados han sido inactivados');
        $this->redirect('usuario');
    }

}
