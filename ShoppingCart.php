<?php 

class ShoppingCart
{
	protected $data;

	public function __construct()	
	{
		$_SESSION['cart'] = $_SESSION['cart'] ?? [];

		$this->data = $_SESSION['cart'];
	}

	public function add_to_cart($product_id)
	{
		$cart_element =& $this->data[$product_id];

	   	if (!isset($cart_element)) {
	    $cart_element = 0;
	   }
	   $cart_element++;
	}

	public function remove_product($product_id)
	{
		unset($this->data[$product_id]);

	}

	public function get_all(){
		return$this->data;
	}

	public function empty_cart()
	{
		$this->data = [];
	}

	public function count()
	{
		return count($this->data);
	}
}

?>