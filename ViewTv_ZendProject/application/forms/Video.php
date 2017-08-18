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
                    ->addValidator('Int',false)
                    ;

        $formUrl = new Zend_Form_Element_Text('video_url');
        $formUrl->setLabel('Url')  
                    ->setRequired(true)
                    //->setValue($valUrl)
                    ->addFilter('StringToUpper');
                    ;
        $formLong = new Zend_Form_Element_Text('video_long');
        $formLong->setLabel('Long')  
                    ->setRequired(true)
                    //->setValue($valLong)
                    ->addFilter('StringToUpper')
                    ->addValidator('Int',false)
                    ;
        $formData = new Zend_Form_Element_Text('video_data');
        $formData->setLabel('Data')  
                    ->setRequired(true)
                    //->setValue($valData)
                    ->addFilter('StringToUpper')
                    ->addValidator('Int',false)
                    ;
        $formImage = new Zend_Form_Element_Text('video_image');
        $formImage->setLabel('Image')  
                    ->setRequired(true)
                    //->setValue($valImage)
                    ->addFilter('StringToUpper');
                    ;
        $formDes = new Zend_Form_Element_Text('video_description');
        $formDes->setLabel('Des')  
                    ->setRequired(true)
                    //->setValue($valDes)
                    ->addFilter('StringToUpper');
                    ;
        $formView = new Zend_Form_Element_Text('video_view');
        $formView->setLabel('View')  
                    ->setRequired(true)
                    //->setValue($valView)
                    ->addFilter('StringToUpper')
                    ->addValidator('Int',false)
                    ;
        $formStatus = new Zend_Form_Element_Text('video_status');
        $formStatus->setLabel('Status')  
                    ->setRequired(true)
                    //->setValue($valStatus)
                    ->addFilter('StringToUpper')
                    ->addValidator('Int',false)
                    ->addValidator('Between',false,['min'=>0,'max'=>1])
                    ;
        $formDate = new Zend_Form_Element_Text('video_dateposted');
        $formDate->setLabel('Date')  
                    ->setRequired(true)
                    //->setValue($valDate)
                    ->addFilter('StringToUpper');
                    ;
        $formUserId = new Zend_Form_Element_Text('video_user_id');
        $formUserId->setLabel('UserId')  
                    ->setRequired(true)
                    //->setValue($valUserId)
                    ->addFilter('StringTrim')
                    ->addFilter('StringToUpper')
                    ->addValidator('Int',false)
                    ;
        $formTypeVideo = new Zend_Form_Element_Text('video_type_video');
        $formTypeVideo->setLabel('TypeVideo')  
                    ->setRequired(true)
                    //->setValue($valTypeVideo)
                    ->addFilter('StringToUpper')
                    ->addValidator('Int',false)
                    ;
        $formListID = new Zend_Form_Element_Text('video_list_id');
        $formListID->setLabel('ListId')  
                    ->setRequired(true)
                    //->setValue($valListId)
                    ->addFilter('StringTrim')
                    ->addFilter('StringToUpper')
                    ->addValidator('Int',false)
                    ;
        $formInputFile = new Zend_Form_Element_File('file_url');
        $formInputFile->setLabel('Video');
        $formSubmit = new Zend_Form_Element_Submit('submit');
        $formSubmit->setAttrib('id', 'submitbutton');
        $this->addElements(array($formName,$formUrl,$formLong,$formData,$formImage,
                                 $formDes,$formView,$formStatus,$formDate,$formUserId,$formTypeVideo,$formListID,$formInputFile,$formSubmit));
    }
        
        
    

}

