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
$shoe->image_location = "img/shoes1.jpg";
$shoe->item_description = "Don't need these black loafers, wrong size! Like new";
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
$shoe->image_location = "img/shoes2.jpg ";
$shoe->item_description = "Never wore them. Never needed them. Call for more details.";
$shoe->user_id = '2';
$shoe->save();

$shoe = new Shoe;
$shoe->title = 'Selling shoes, Gently used!';
$shoe->price = 140.00;
$shoe->msrp = 189.99;
$shoe->color = "Blue";
$shoe->style = 'Loafer';
$shoe->category = 'The day you get married';
$shoe->size = 13;
$shoe->location = "Stamford, CT";
$shoe->brand = "Harpelunde";
$shoe->shoe_condition = 'Used';
$shoe->contact_name = 'Tony';
$shoe->contact_number = "213-445-6674";
$shoe->image_location = "img/shoes3.jpg ";
$shoe->item_description = "Only wore them on my wedding day, great condition";
$shoe->user_id = '3';
$shoe->save();

$shoe = new Shoe;
$shoe->title = 'Gently used dress shoes!!';
$shoe->price = 1690.00;
$shoe->msrp = 2100.00;
$shoe->color = "Red";
$shoe->style = 'Dress Shoes';
$shoe->category = 'The day you get married';
$shoe->size = 11.5;
$shoe->location = "New York, NY";
$shoe->brand = "Corthay";
$shoe->shoe_condition = 'Used';
$shoe->contact_name = 'Andy';
$shoe->contact_number = "445-346-6074";
$shoe->image_location = "img/shoes4.jpg ";
$shoe->item_description = "Only worn once text me for more pictures";
$shoe->user_id = '3';
$shoe->save();

$shoe = new Shoe;
$shoe->title = 'Sandals For sale NWT';
$shoe->price = 80.00;
$shoe->msrp = 195.00;
$shoe->color = "Gray";
$shoe->style = 'Sandals';
$shoe->category = 'Lounging around the house';
$shoe->size = 13.5;
$shoe->location = "Buffalo, NY";
$shoe->brand = "Uri Minkoff";
$shoe->shoe_condition = 'New';
$shoe->contact_name = 'Kevin';
$shoe->contact_number = "223-846-8890";
$shoe->image_location = "img/shoes5.jpg ";
$shoe->item_description = "Cool shoes but too narrow, selling in new condition";
$shoe->user_id = '4';
$shoe->save();


