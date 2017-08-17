<?php

class VideoController extends Zend_Controller_Action
{

    public function init()
    {
        
    }

    public function indexAction()
    {
        $currentPage = $this->getParam('page',1);

        $tableVideo = new Application_Model_DbTable_Video();
        $adapterPaging = new Zend_Paginator_Adapter_DbSelect( $tableVideo->select());
        $paginator = new Zend_Paginator($adapterPaging);

        $paginator->setItemCountPerPage(6);        
        $paginator->setPageRange(4);
        $paginator->setCurrentPageNumber($currentPage);

        $this->view->videoList = $paginator;
    }

    public function updateAction()
    {
        $idVideo=$this->getParam('id');
        $tableVideo = new Application_Model_DbTable_Video();

        $objectVideo = $tableVideo->fetchAll("id=".$idVideo);
        $arrVideo=$objectVideo->toArray();
        
        $this->view->video = $arrVideo;
    }

    public function deleteAction()
    {
        // action body
    }


}





