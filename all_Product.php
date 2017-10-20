<?php 
include 'class_Product.php';

$phone_1 = new Phone('Телефон',10000,'Черный',100);
$phone_2 = new Phone('Телефон',15000,'Белый',200);

$tablet_1 = new Tablet('Планшет',20000,'Серый',300);
$tablet_2 = new Tablet('Планшет',25000,'Черный',250);

$computer_1 = new Computer('Компьютер',40000,'Золотой',800);
$computer_2 = new Computer('Компьютер',50000,'Белый',1100);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Магазин устройств</title>
</head>
<body>
	<div class="wrap" style="margin-left: 30px;">
		<h1><p>Категория - <?= $phone_1->getCategory() ?></p></h1>
		<h3><p>Тип телефона : <?php $phone_1->setTypePhone('Сенсорный'); ?></p></h3>
			<p>Дйюм : <?= $phone_1->setDisplaySize(3.5) ?></p>
			<p>Ампер-часа : <?= $phone_1->setDisplaySize(5.5) ?></p>
			<p>Цвет : <?= $phone_1->getColor() ?></p>
			<p>Цена : <b><?= $phone_1->getPrice() ?> руб</b></p>
			<p>Вес : <?= $phone_1->getWeight() ?> гр</p>
			<p>Скидка : <?= $phone_1->getDiscount() ?> %</p>
			<p>Цена со скидкой : <b><?= $phone_1->getPriceDiscount() ?> руб</b></p>
			<p>Стоимость доставки : <?php $phone_1->getDelivery() ?> руб</p>
	</div>
</body>
</html>