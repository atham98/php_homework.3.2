<?php

interface Price {
	function getPriceDiscount();
}

// Абстрактный класс для всех товаров
abstract class allProduct implements Price
{
	private $category;
	public $price;
	private $color;
	protected $weight;
	protected $discount = 10;
	public function __construct($category, $price, $color, $weight)
	{
		$this->category = $category;	
		$this->price = $price;	
		$this->color = $color;	
		$this->weight = $weight;	
	}
	public function getCategory(){
		return $this->category;
	}
	public function getColor(){
		return $this->color;
	}
	public function getWeight(){
		return $this->weight;
	}
	public function getDiscount(){
		return $this->discount;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getPriceDiscount(){
		return $this->price = $this->price - ($this->price * $this->discount / 100);
	}
}

// Создаем примеси
trait Delivery {
	private $delivery;
	private $displaySize;
	public function setDisplaySize($display){
		echo $this->displaySize = $display;
		return $this;
	}

	//Здесь определяем стоимость доставки
	public function getDelivery(){
		if(empty($this->discount)){
			echo $this->delivery = 250;
		} elseif($this->discount === 10) {
			echo $this->delivery = 300;
		}
		return $this;
	}

}
// Класс Телефона
class Phone extends allProduct
{
	use Delivery;
	private $typePhone;
	private $batteryDischarge;
	public function setBattery($discharge){
		$this->batteryDischarge = $discharge;
		return $this;
	}
	public function setTypePhone($type){
		echo $this->typePhone = $type;
		return $this;
	}
}

// Класс Планшета
class Tablet extends allProduct
{
	use Delivery;
	private $typeTablet;
	public function setTypeTablet($type){
		$this->typeTablet = $type;
		return $this;
	}
}

// Класс Компьютер
class Computer extends allProduct
{
	use Delivery;
	private $typeComputer;

	// В этом методе определяем если товар больше 1000 гр то скидку сделаем 10% иначе 0% 
	public function getDiscount(){
		$this->discount = ($this->weight > 1000) ? 10 : 0;
		return $this;
	}
	public function setTypeComputer($type){
		$this->typeComputer = $type;
		return $this;
	}
}
