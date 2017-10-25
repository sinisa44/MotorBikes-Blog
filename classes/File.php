<?php
class File{

  private $_suporttedFormats = ['image/png','image/jpeg','image/jpg','image/gif'];

  public function uploadFile($file){
      if(is_array($file)){

        if(in_array($file['type'], $this->_suporttedFormats)){
          move_uploaded_file($file['tmp_name'],SITE_ROOT.'/images/'.$file['name'] );
        }
      }
  }
}
