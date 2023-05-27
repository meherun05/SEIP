<?php


namespace App\classes;


class Product
{
    public $categoryproduct=[];
    public  $products=[];
    public function __construct()
    {
        $this->products=[
            0=>[
                "id"=>1,
                "category_id"=>1,
                "name"=>"Panjabi",
                "price"=>"1200TK",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolorem ea eligendi exercitationem, ipsum maiores necessitatibus nulla obcaecati possimus soluta. Adipisci alias assumenda commodi cum dolor harum iure labore necessitatibus placeat possimus quis quod, recusandae repellendus temporibus voluptas voluptatem, voluptatibus.",
                "image"=>"1.jpg",
            ],
            1=>[
                "id"=>2,
                "category_id"=>1,
                "name"=>"Shirt",
                "price"=>"1200TK",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolorem ea eligendi exercitationem, ipsum maiores necessitatibus nulla obcaecati possimus soluta. Adipisci alias assumenda commodi cum dolor harum iure labore necessitatibus placeat possimus quis quod, recusandae repellendus temporibus voluptas voluptatem, voluptatibus.",
                "image"=>"2.jpg",
            ],
            2=>[
                "id"=>3,
                "category_id"=>2,
                "name"=>"Shari",
                "price"=>"1200TK",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolorem ea eligendi exercitationem, ipsum maiores necessitatibus nulla obcaecati possimus soluta. Adipisci alias assumenda commodi cum dolor harum iure labore necessitatibus placeat possimus quis quod, recusandae repellendus temporibus voluptas voluptatem, voluptatibus.",
                "image"=>"3.jpg",
            ],
            3=>[
                "id"=>4,
                "category_id"=>2,
                "name"=>"Kurti",
                "price"=>"1200TK",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolorem ea eligendi exercitationem, ipsum maiores necessitatibus nulla obcaecati possimus soluta. Adipisci alias assumenda commodi cum dolor harum iure labore necessitatibus placeat possimus quis quod, recusandae repellendus temporibus voluptas voluptatem, voluptatibus.",
                "image"=>"4.jpg",
            ],
            4=>[
                "id"=>5,
                "category_id"=>3,
                "name"=>"Kid's Panjabi",
                "price"=>"1200TK",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolorem ea eligendi exercitationem, ipsum maiores necessitatibus nulla obcaecati possimus soluta. Adipisci alias assumenda commodi cum dolor harum iure labore necessitatibus placeat possimus quis quod, recusandae repellendus temporibus voluptas voluptatem, voluptatibus.",
                "image"=>"5.jpg",
            ],
            5=>[
                "id"=>6,
                "category_id"=>3,
                "name"=>"Kid's T-shirt",
                "price"=>"1200TK",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolorem ea eligendi exercitationem, ipsum maiores necessitatibus nulla obcaecati possimus soluta. Adipisci alias assumenda commodi cum dolor harum iure labore necessitatibus placeat possimus quis quod, recusandae repellendus temporibus voluptas voluptatem, voluptatibus.",
                "image"=>"6.jpg",
            ],
        ];

    }

    public function getAllProducts()
    {
        return $this->products;
    }
    public function getProductDetails($productId)
    {
        foreach ($this->products as $product){
            if($product["id"] == $productId){
                return $product;
            }
        }
    }
    public function getCategoryProduct($categoryId)
    {
        foreach ($this->products as $product){
            if ($product['category_id']== $categoryId){
                array_push($this->categoryproduct, $product);
            }
        }
        return $this->categoryproduct;
    }
}