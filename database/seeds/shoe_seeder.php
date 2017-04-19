<?php


require_once __DIR__ . '/../../models/Shoes.php';

$shoe = new Shoe;
$shoe->title = 'MAN SHOES 4 SALE';
$shoe->price = 20.00;
$shoe->msrp = 40.00;
$shoe->color = "Black";
$shoe->style = 'Loafer';
$shoe->category = 'Birth of a child';
$shoe->size = 12.5;
$shoe->location = "Scranton, PA";
$shoe->brand = "L.L. Bean";
$shoe->shoe_condition = 'New';
$shoe->contact_name = 'Michael';
$shoe->contact_number = "210-234-5678";
$shoe->image_location = " ";
$shoe->user_id = '1';
$shoe->save();

$shoe = new Shoe;
$shoe->title = 'Selling Slippers!';
$shoe->price = 30.00;
$shoe->msrp = 69.99;
$shoe->color = "Brown";
$shoe->style = 'Slipper';
$shoe->category = 'Lounging around the house';
$shoe->size = 14;
$shoe->location = "Scranton, PA";
$shoe->brand = "L.L. Bean";
$shoe->shoe_condition = 'New';
$shoe->contact_name = 'Dwignt';
$shoe->contact_number = "343-687-7765";
$shoe->image_location = " ";
$shoe->user_id = '2';
$shoe->save();

$shoe = new Shoe;
$shoe->title = 'Selling shoes, Gently used!';
$shoe->price = 140.00;
$shoe->msrp = 189.99;
$shoe->color = "Blue";
$shoe->style = 'Loafer';
$shoe->category = 'The day you get married';
$shoe->size = 14;
$shoe->location = "Stamford, CT";
$shoe->brand = "Harpelunde";
$shoe->shoe_condition = 'Used';
$shoe->contact_name = 'Tony';
$shoe->contact_number = "213-445-6674";
$shoe->image_location = "img/shoes3.jpg ";
$shoe->user_id = '3';
$shoe->save();
