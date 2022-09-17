<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';

use Vagrant\Lesson6\Models\Category;
use Vagrant\Lesson6\Models\Post;
use Vagrant\Lesson6\Models\Tag;

/*Creating categories*/
$cats = Category::all();
$cat1 = new Category;
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
$posts = Post::all();
//$posts = new Post();

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

/*Delete post number 10*/
//Post::destroy([10]);

/*Creating Tags*/
$tags = Tag::all();
$new_tag = new Tag();
//$new_tag->title = 'Notebook';
//$new_tag->slug = 'notebook';
//$new_tag->save();
//$tags->title = 'Phone';
//$tags->slug = 'phone';
//$tags->title = 'Iphone';
//$tags->slug = 'iphone';
//$tags->title = 'Xiaomi';
//$tags->slug = 'xiaomi';
//$tags->title = 'Samsung';
//$tags->slug = 'samsung';
//$tags->title = 'Lenovo';
//$tags->slug = 'lenovo';
//$tags->title = 'Adapter';
//$tags->slug = 'adapter';
//$tags->title = 'Accessories';
//$tags->slug = 'accessories';
//$tags->title = 'Power';
//$tags->slug = 'power';

/*Creating Post Tags*/
//$post1 = Post::find(1);
//$post1->tag()->attach([1.10,11]);
//$post1 = Post::find(2);
//$post1->tag()->attach([2,3,13]);
//$post1 = Post::find(3);
//$post1->tag()->attach([2,4,13]);
//$post1 = Post::find(4);
//$post1->tag()->attach([5,12,15]);
//$post1 = Post::find(5);
//$post1->tag()->attach([6,13,15]);
//$post1 = Post::find(6);
//$post1->tag()->attach([12,16,14]);
//$post1 = Post::find(7);
//$post1->tag()->attach([4,7,8]);
//$post1 = Post::find(8);
//$post1->tag()->attach([7,8,14]);
//$post1 = Post::find(9);
//$post1->tag()->attach([7,14,17]);

/*Creating Post Tags*/
//$post1 = Post::find(1);
//$post1->category()->attach([1]);
//$post2 = Post::find(2);
//$post2->category()->attach([2]);
//$post3 = Post::find(3);
//$post3->category()->attach([2]);
//$post4 = Post::find(4);
//$post4->category()->attach([5,12,15]);
//$post5 = Post::find(5);
//$post5->category()->attach([6,13,15]);
//$post6 = Post::find(6);
//$post6->category()->attach([12,16,14]);
//$post7 = Post::find(7);
//$post7->category()->attach([4,7,8]);
//$post8 = Post::find(8);
//$post8->category()->attach([7,8,14]);
//$post9 = Post::find(9);
//$post9->tag()->attach([7,14,17]);

foreach ($posts as $post) {
    echo '<h3>' . $post->id . ' - ' . $post->title . '</h3>';
    echo '<ol>';
    foreach ($post->tag as $tag) {
        echo '<li>' . $tag->title . '</li>';
    }
    echo '</ol>';
}

//print_r($tags->get());
