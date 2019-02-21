<?php
namespace app\models;
use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
class ImageUpLoad extends Model{
    public $image;
     public function rules()
    {
        return [
           [['image'], 'required'],
           [['image'],'file', 'extensions'=>'jpg,png']
        ];
    }
    public function upLoadFile($file, $imagename){
    	$this->image = $file;
    	if($this->validate()){
    	$this->deleteImage($imagename);	
        return $this->saveImage();
    	}
    }
    private function folder(){
    	return Yii::getAlias('@web') . 'uploads/';
    }
    private function filename(){
    	 return strtolower(md5(uniqid($this->image->baseName)) . '.' . $this->image->extension);
    }
    public function deleteImage($imagename){   
    	 if($this->fileExists($imagename))
        {
            unlink($this->folder() . $imagename);
        }
    }
    public function saveImage(){
    	$filename = $this->filename();
        $this->image->saveAs($this->folder() . $filename);
        return $filename;
    }
    public function fileExists($imagename){
    	if(!empty($imagename) && $imagename != null)
        {
            return file_exists($this->folder() . $imagename);
        }
    }

}