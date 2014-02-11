<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TrabajoController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

       public function otroAction()
    {
        return new ViewModel();
    }
//prueba de parametros
    public function recibeparametrosAction()
    {
        $saludo='Hola desde recibe parametros controller';
        $array= array("luis","maria","pedro","juana","jose");
        return new ViewModel(array('saludo'=>$saludo,'segundo'=>'cualquier cosa',
            'nombres'=>$array));
    }
//pasar parametros
       public function valoresurlAction()
    {

           $id= (int)$this->params()->fromRoute("id",null);
           $id2= $this->params()->fromRoute("id2",null);
           $url = $this->getRequest()->getBaseUrl();

           $titulo = "Valores por url";
        return new ViewModel(array('titulo'=>$titulo,'id'=>$id,'id2'=>$id2,'url'=>$url ));
    }

//plugin redirect, redirecciona a otra pagina, desde cero
        public function redireccionarAction()
    {
        return $this->redirect()->toUrl($this->getRequest()->getBaseUrl().'/application/trabajo/index');
    }

    //plugin forward mediante un controlador, manteniedo los datos en memoria
       public function cargaotravistaAction()
    {
        return $this->forward()->dispatch('\Application\Controller\Trabajo', array('action'=>'otro'));
    }

    
      //render, carga una vista llamando directamente a una pagina desde un comentario
       public function conrenderAction()
    {
         //Render# application/trabajo/conrender.phtml
           $view = new ViewModel();
        return $view;
    }

    
    
    }
