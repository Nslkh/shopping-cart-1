<?php 
require_once 'db/utils.php';


class Product 
{
	public $name;
	public $price;
	public $currency;
	public $image;

	public function __construct($index)
	{
		get_product($index);

		$this->name = $product['name'];
		$this->price = $product['price'];
		$this->currency = $product['currency'];
		$this->image = $product['image'];
	}

	public function get_total($count){
		return $this->price * $count;
	}

	public static function get_all()
	{
		return get_products();
	}
}
?>