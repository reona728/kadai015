<?php
//食べ物

class food{
    public $name;
    public $price;
    public function show_price(int $price){
    $this->price = $price;
    }
    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }
}

//動物

class animal{
    public $name;
    public $height;
    public $weight;
    public function show_haight(int $height){
        $this->height = $height;
    }
    public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}
//インスタンス化
$poteto = new food('poteto', '250');
$dog = new animal('dog', '60', '5000');
//表示
print_r($poteto);
echo "<br>";
print_r($dog);
echo "<br>";
echo $poteto->price . "<br>";
echo $dog->height
?>