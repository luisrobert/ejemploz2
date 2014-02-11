<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TiendaController extends AbstractActionController
{
    protected $tiendaTable;

 public function indexAction()
    {
        return new ViewModel(array(
            'tiendas' => $this->getTiendaTable()->fetchAll(),
        ));
    }    
  public function getTiendaTable()
    {
        if (!$this->tiendaTable) {
            $sm = $this->getServiceLocator();
            $this->tiendaTable = $sm->get('Application\Model\TiendaTable');
        }
        return $this->tiendaTable;
    }
    
    
}