<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/database.php';
use Vagrant\Lesson6\Models\Category;
use Vagrant\Lesson6\Models\Post;
/*Creating categories*/
//$cat1 = new Category();
//$cat1->title = 'Notebooks';
//$cat1->slug = 'notebook';
//$cat1->save();
//$cat2 = new Category();
//$cat2->title = 'Phones';
//$cat2->slug = 'phones';
//$cat2->save();
//$cat3 = new Category();
//$cat3->title = 'Laptops';
//$cat3->slug = 'laptops';
//$cat3->save();
//$cat4 = new Category();
//$cat4->title = 'Adapters';
//$cat4->slug = 'adapters';
//$cat4->save();
//$cat5 = new Category();
//$cat5->title = 'Accessories';
//$cat5->slug = 'accessories';
//$cat5->save();
/*Update Category*/
//$update_cat = Category::find(2);
//$update_cat->title = 'Netbook';
//$update_cat->slug = 'netbook';
//$update_cat->save();
/*Delete categories 1-6*/
//Category::destroy([1,2,3,4,5,6]);
//$posts = new Post([
//    'title' => 'Asus Taf Gaming F17',
//    'slug' => 'asus_taf_gaming_f17',
//    'body' => 'notebook Asus Taf Gaming',
//    'category_id' => 1
//]);
$posts = new Post();
/*Creating Post*/
//$posts->title = 'Asus Taf Gaming F17';
//$posts->slug = 'asus_taf_gaming_f17';
//$posts->body = 'notebook Asus Taf Gaming';
//$posts->category_id = 1;
//$posts->title = 'Xiaomi Redmi Note 11';
//$posts->slug = 'xiaomi-redmi-note-11';
//$posts->body = 'Xiaomi Redmi Note 11';
//$posts->category_id = 2;
//$posts->title = 'Apple iPhone 13 256GB Green';
//$posts->slug = 'apple-iphone-13-256gb-green-mngl3';
//$posts->body = 'Apple iPhone 13 256GB Green';
//$posts->category_id = 2;
//$posts->title = 'Планшет Samsung X200N Galaxy Tab A8';
//$posts->slug = 'planshet-samsung-x200n-galaxy-tab-a8';
//$posts->body = 'Планшет Samsung X200N Galaxy Tab A8';
//$posts->category_id = 3;
//$posts->title = 'Планшет Lenovo Tab M10 HD';
//$posts->slug = 'lenovo-tab-m10-hd-2nd';
//$posts->body = 'Планшет Lenovo Tab M10 HD';
//$posts->category_id = 3;
//$posts->title = 'Huawei MatePad T10 ';
//$posts->slug = 'huawei-matepad-t10';
//$posts->body = 'Huawei MatePad T10 ';
//$posts->category_id = 3;
//$posts->title = 'Зарядне пристрій для Xiaomi Mi Band 4';
//$posts->slug = 'zarjadnoe-ustrojstvo-xiaomi-mi-band-4';
//$posts->body = 'Зарядне пристрій для Xiaomi Mi Band 4';
//$posts->category_id = 5;
//$posts->title = 'Гідрогелева плівка (броня) для Mi Band 2';
//$posts->slug = 'gidrogelevaja-plenka-bronja-dlja-mi-band-2';
//$posts->body = 'Гідрогелева плівка (броня) для Mi Band 2';
//$posts->category_id = 5;
//$posts->title = 'Двохдіапазонний Wi-Fi/Bluetooth адаптер';
//$posts->slug = 'dvuhdiapazonnyj-wi-fi-bluetooth-adapter';
//$posts->body = 'Двохдіапазонний Wi-Fi/Bluetooth адаптер';
//$posts->category_id = 4;
//$posts->title = 'Bluetooth AUX MP3 WAV адаптер, ресивер магнітоли';
//$posts->slug = 'bluetooth-aux-mp3-wav-adapter-resiver-magnitoly';
//$posts->body = 'Bluetooth AUX MP3 WAV адаптер, ресивер магнітоли';
//$posts->category_id = 4;
/*Update eighth post*/
//$posts = Post::find(8);
//$posts->title = 'Перехідник Baseus Exquisite Type-C';
//$posts->slug = 'perehodnik-baseus-exquisite-type-c-male-to-usb';
//$posts->body = 'Перехідник Baseus Exquisite Type-C';
$posts->save();
//print_r($cat1->get());
