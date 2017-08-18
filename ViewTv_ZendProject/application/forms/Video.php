<?php

class Application_Form_Video extends Zend_Form
{
    public function init()
    {
        $formName = new Zend_Form_Element_Text('video_name');
        $formName->setLabel('Name')  
                    ->setRequired(true)
                    ->addFilter('StripTags')
                    ->addFilter('StringToUpper')
                    ->addFilter('StringTrim')
                    ->addValidator('NotEmpty')
                    ->addValidator('StringLength', false, array(6, 20))
                    
                    ->addErrorMessages(['isEmpty'=>'ádfsad','1'=>"123231412"]);

        $formUrl = new Zend_Form_Element_Text('video_url');
        $formUrl->setLabel('Url')  
                    ->setRequired(true)
                    //->setValue($valUrl)
                    ->addFilter('StringToUpper');
        $formLong = new Zend_Form_Element_Text('video_long');
        $formLong->setLabel('Long')  
                    ->setRequired(true)
                    //->setValue($valLong)
                    ->addFilter('StringToUpper');
        $formData = new Zend_Form_Element_Text('video_data');
        $formData->setLabel('Data')  
                    ->setRequired(true)
                    //->setValue($valData)
                    ->addFilter('StringToUpper');
        $formImage = new Zend_Form_Element_Text('video_image');
        $formImage->setLabel('Image')  
                    ->setRequired(true)
                    //->setValue($valImage)
                    ->addFilter('StringToUpper');
        $formDes = new Zend_Form_Element_Text('video_description');
        $formDes->setLabel('Des')  
                    ->setRequired(true)
                    //->setValue($valDes)
                    ->addFilter('StringToUpper');
        $formView = new Zend_Form_Element_Text('video_view');
        $formView->setLabel('View')  
                    ->setRequired(true)
                    //->setValue($valView)
                    ->addFilter('StringToUpper');
        $formStatus = new Zend_Form_Element_Text('video_status');
        $formStatus->setLabel('Status')  
                    ->setRequired(true)
                    //->setValue($valStatus)
                    ->addFilter('StringToUpper');
        $formDate = new Zend_Form_Element_Text('video_dateposted');
        $formDate->setLabel('Date')  
                    ->setRequired(true)
                    //->setValue($valDate)
                    ->addFilter('StringToUpper');
        $formUserId = new Zend_Form_Element_Text('video_user_id');
        $formUserId->setLabel('UserId')  
                    ->setRequired(true)
                    //->setValue($valUserId)
                    ->addFilter('StringTrim')
                    ->addFilter('StringToUpper');
        $formTypeVideo = new Zend_Form_Element_Text('video_type_video');
        $formTypeVideo->setLabel('TypeVideo')  
                    ->setRequired(true)
                    //->setValue($valTypeVideo)
                    ->addFilter('StringToUpper');
        $formListID = new Zend_Form_Element_Text('video_list_id');
        $formListID->setLabel('ListId')  
                    ->setRequired(true)
                    //->setValue($valListId)
                    ->addFilter('StringTrim')
                    ->addFilter('StringToUpper');

        $formSubmit = new Zend_Form_Element_Submit('submit');
        $formSubmit->setAttrib('id', 'submitbutton');
        $this->addElements(array($formName,$formUrl,$formLong,$formData,$formImage,
                                 $formDes,$formView,$formStatus,$formDate,$formUserId,$formTypeVideo,$formListID,$formSubmit));
    }
    public function formVideo(){
        
        
    }
        
        
    

}

