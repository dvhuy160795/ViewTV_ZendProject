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
        $idVideo = $this->getParam('id');
        
        $formUpdate = new Application_Form_Video();
        $tableVideo = new Application_Model_DbTable_Video();

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

        $formUpdate->video_name->setValue($valName);
        $formUpdate->video_url->setValue($valUrl);
        $formUpdate->video_long->setValue($valLong);
        $formUpdate->video_data->setValue($valData);
        $formUpdate->video_image->setValue($valImage);
        $formUpdate->video_description->setValue($valDes);
        $formUpdate->video_view->setValue($valView);
        $formUpdate->video_status->setValue($valStatus);
        $formUpdate->video_dateposted->setValue($valDate);
        $formUpdate->video_user_id->setValue($valUserId);
        $formUpdate->video_type_video->setValue($valTypeVideo);
        $formUpdate->video_list_id->setValue($valListId);
        $formUpdate->submit->setLabel('Update');

        $this->view->form = $formUpdate;
        $postFormUpdate=$this->getRequest()->isPost();

        if ($postFormUpdate) {

            $formUpdateData = $this->getRequest()->getPost();
            $formUpdateIsValidData=$formUpdate->isValid($formUpdateData);
            if ($formUpdateIsValidData) {
                //set String To Upper
                $filterStringToUpper = new Zend_Filter_StringToUpper();
                $name = $filterStringToUpper->filter($formUpdateData['video_name']);
                $url = $filterStringToUpper->filter($formUpdateData['video_url']);
                $long = $filterStringToUpper->filter($formUpdateData['video_long']);
                $data = $filterStringToUpper->filter($formUpdateData['video_data']);
                $image = $filterStringToUpper->filter($formUpdateData['video_image']);
                $des = $filterStringToUpper->filter($formUpdateData['video_description']);
                $view = $filterStringToUpper->filter($formUpdateData['video_view']);
                $status = $filterStringToUpper->filter($formUpdateData['video_status']);
                $date = $filterStringToUpper->filter($formUpdateData['video_dateposted']);
                $userId = $filterStringToUpper->filter($formUpdateData['video_user_id']);
                $typeVideo = $filterStringToUpper->filter($formUpdateData['video_type_video']);
                $listId = $filterStringToUpper->filter($formUpdateData['video_list_id']);

                $arrFormVideo=[
                    'video_name' => $name,
                    'video_url' => $url,
                    'video_long' => $long,
                    'video_data' => $data,
                    'video_image' => $image,
                    'video_description' => $des,
                    'video_view' => $view,
                    'video_status' => $status,
                    'video_dateposted' => $date,
                    'video_user_id' => $userId,
                    'video_type_video' => $typeVideo,
                    'video_list_id' => $listId,
                ];
                // end String To Upper

                $tableVideo->update($arrFormVideo,'id='.$idVideo);

                $this->_helper->redirector('index');
            } 

            $arr = $formUpdate->getMessages();
            //var_dump($arr);
            }

        

    }

    public function deleteAction()
    {
        // action body
        
        
    }

    public function edit1Action()
    {
       
    }


}







