<?php

/**
 * TareaTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TareaTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object TareaTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('Tarea');
    }

    public function getArbolTareas($idProyecto) {

        $q = Doctrine_Query::create()
                ->select('t.*')
                ->from('Tarea t')
                ->orderBy('t.level ASC')
                ->where('proyectoFK=?', $idProyecto)
                ->setHydrationMode(Doctrine_Core::HYDRATE_ARRAY);

        $treeObject = Doctrine_Core::getTable('Tarea')->getTree();
        $treeObject->setBaseQuery($q);
        $tree = $treeObject->fetchTree();
        $treeObject->resetBaseQuery();
        return $tree;
    }

    
    
    public function getUsuarioTarea($idUsuario) {
        $tareas = Doctrine_Query::create()
                ->from('Tarea t')
                ->leftJoin('t.Usuario us')
               // ->innerJoin('us.usuario u')
                ->where('us.idUsuario=?',$idUsuario)
                ->execute();

        return $tareas;
    }

    public function getArbolCojuntoTareas($lstIdTareas) {

        $tree = array();

        if (count($lstIdTareas) > 0 && !in_array("", $lstIdTareas)) {

            $q = Doctrine_Query::create()
                    ->select('t.*')
                    ->from('Tarea t')
                    ->orderBy('t.level ASC')
                    ->whereIn('t.idTarea', $lstIdTareas)
                    ->setHydrationMode(Doctrine_Core::HYDRATE_ARRAY);

            $treeObject = Doctrine_Core::getTable('Tarea')->getTree();
            $treeObject->setBaseQuery($q);
            $tree = $treeObject->fetchTree();

            $treeObject->resetBaseQuery();
        }

        return $tree;
    }

    public function addChild($idTarea) {

        $tareaPadre = $this->find($idTarea)->getNode();
        $tareaPadre->getNode();
    }

}