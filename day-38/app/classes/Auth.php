<?php

namespace App\classes;


class Auth
{
    public $user=[],$email,$password;

    public function __construct($post=null)
    {
        if (!empty($post)){
            $this->email=$post['email'];
            $this->password=$post['password'];

        }
        $this->user=[
          0=>[
              'id'=>1,
              'name'=>'Meherun',
              'email'=>'maherun@gmail.com',
              'password'=>'1111'
             ],
          1=>[
              'id'=>2,
              'name'=>'Shahin',
              'email'=>'shahin@gmail.com',
              'password'=>'2222'
             ],
          2=>[
              'id'=>3,
              'name'=>'Sabrina',
              'email'=>'sabrina@gmail.com',
              'password'=>'3333'
             ],
        ];
    }

    public function login()
    {
        foreach ($this->user as $user){
            if ($user['email']==$this->email && $user['password']== $this->password)
            {
                header('Location: route.php?page=home');
            }
        }
        echo 'Email or Password is invalid';
        exit();
    }
}