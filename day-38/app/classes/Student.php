<?php

namespace App\classes;


class Student
{
    public $student,$students,$phone,$email,$image,$name,$imageName,$imageDirectory;

    public $file,$filePath,$fileData;
    public $array,$array1,$array2;

    public function __construct($post=null, $file=null)
    {
        if (!empty($post))
        {
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->phone = $post['phone'];

        }
        if (!empty($file))
        {
            $this->image = $file['image'];
        }

    }

    public function addStudent()
    {
        $this->imageName =time().$this->image['name'];
        $this->imageDirectory = 'assets/Images/upload-files/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'],$this->imageDirectory);


        $this->filePath='hello.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileData="$this->name,$this->email,$this->phone,$this->imageDirectory$$";
        fwrite($this->file,$this->fileData);
        fclose($this->file);
        return "Student Create Successfully";
    }

    public function getAllStudents()
    {
        $this->filePath='hello.txt';
        $this->fileData=file_get_contents($this->filePath);
        $this->array=explode('$$',$this->fileData);
        foreach ($this->array as $key=> $value)
        {
            $this->array1=explode(',',$value);

            if ($this->array1[0])
            {

                $this->array2[$key]['name']=$this->array1[0];
                $this->array2[$key]['email']=$this->array1[1];
                $this->array2[$key]['phone']=$this->array1[2];
                $this->array2[$key]['image']=$this->array1[3];
            }

        }
        return $this->array2;
    }
}