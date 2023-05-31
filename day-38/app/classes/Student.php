<?php

namespace App\classes;


class Student
{
    public $student,$students,$phone,$email,$image,$name,$imageName,$imageDirectory;

    public $file,$filePath,$fileData;

    public function __construct($post=null, $file=null)
    {
        $this->name = $post['name'];
        $this->email = $post['email'];
        $this->phone = $post['phone'];
        $this->image = $file['image'];
    }

    public function addStudent()
    {
        $this->imageName =time().$this->image['name'];
        $this->imageDirectory = 'assets/Images/upload-files/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'],$this->imageDirectory);


        $this->filePath='hello.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileData="$this->name,$this->email,$this->phone,$this->imageDirectory";
        fwrite($this->file,$this->fileData);
        fclose($this->file);
        echo 'success';
        exit();
    }
}