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
//print_r($cat1->get());
