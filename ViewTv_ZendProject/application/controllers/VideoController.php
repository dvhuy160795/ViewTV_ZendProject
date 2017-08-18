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
        $formLogin = new Application_Form_Video();
        $formLogin->submit->setLabel('Add');
        $this->view->form = $formLogin;
        $postFormLogin=$this->getRequest()->isPost();

        if ($postFormLogin) {

            $formLoginData = $this->getRequest()->getPost();
            
            if ($formLogin->isValid($formLoginData)) {
            echo $loginName = $formLogin->getValue('video_name');
            echo $loginPass = $formLogin->getValue('video_url');
            
            
            } 

            $arr = $formLogin->getMessages();
            //var_dump($arr);
            }

        

    }

    public function deleteAction()
    {
        // action body
        $objectVideo = $tableVideo->fetchAll("id=".$idVideo);
        $arrVideo=$objectVideo->toArray();
        foreach($arrVideo as $video):
            $valName        = $video['video_name'];
            $valUrl         = $video['video_url']; 
            $valLong        = $video['video_long'];
            $valData        = $video['video_data'];  
            $valImage       = $video['video_image'];
            $valDes         = $video['video_description'];
            $valView        = $video['video_view'];
            $valStatus      = $video['video_status'];
            $valDate        = $video['video_dateposted'];
            $valUserId      = $video['video_user_id'];
            $valTypeVideo   = $video['video_type_video'];
            $valListId      = $video['video_list_id'];
        endforeach;
        
    }

    public function edit1Action()
    {
       //$userPostVideoUpdated = $this->request->isPost();
        //display video form for user edit video info
        $idVideo = $this->getParam('id');
        $tableVideo = new Application_Model_DbTable_Video();

        // if ($userPostVideoUpdated) {
        //     //TODO update video
        //     $videoRaw = $this->request->getPost();
        //     if (!$videoForm->isValid($videoForm)) {
        //         return;
        //     }
        //     // valid case
        //     $videoFiltered = $videoForm->getValues();
        //     // update video by id then redirecto to list page
        //     return;
        // }


        $objectVideo = $tableVideo->fetchAll("id=".$idVideo);
        $arrVideo=$objectVideo->toArray();

        $this->view->videoRecord = $arrVideo;
    }


}







