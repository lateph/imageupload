<?php
class ImageUpload extends CFormModel
{
    public $uploaded;

    public function rules()
    {
        return array(
			array('uploaded', 'file', 'types'=>'jpg,jpeg,gif,png','maxSize'=>10*1024*1024),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'uploaded'=>'Upload File',
        );
    }

}