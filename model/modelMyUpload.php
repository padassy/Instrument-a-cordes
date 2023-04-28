<?php
use \Verot\Upload\Upload;

class modelMyUpload extends Upload{
   public function __toString(){
        return $this->file_src_name;
    }
}