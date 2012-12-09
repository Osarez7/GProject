<?php

/**
 * Avance form.
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BackendUsuarioForm extends UsuarioForm {

    public function configure() {

        parent::configure();
        $this->widgetSchema['fotoPerfil'] = new sfWidgetFormInputFileEditable(array(
                    'label'
                    => 'Foto de pefil',
                    'file_src' => '/uploads/fotos/' . $this->getObject()->getFotoPerfil(),
                    'is_image' => true,
                    'edit_mode' => !$this->isNew(),
                    'template' => '<div>%file%<br />%input%<br />%delete%
%delete_label%</div>',
                ));
        $this->validatorSchema['fotoPerfil_delete'] = new sfValidatorPass();
    }

}
