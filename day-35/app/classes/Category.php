<?php


namespace App\classes;


class Category
{
    public $categories=[];
    public function __construct()
    {
        $this->categories=[
          0=>[
              'id'=>1,
              'name'=>'Man\'s Fasion'
          ],
          1=>[
              'id'=>2,
              'name'=>'Women\'s Fasion'
          ],
          2=>[
              'id'=>3,
              'name'=>'Kid\'s Fasion'
          ],
        ];
    }
    public function getAllCategories()
    {
        return $this->categories;
    }
}