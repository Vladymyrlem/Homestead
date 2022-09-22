<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

/* @var $blade */
echo $blade->make('layout')->render();
use Vagrant\Lesson6\Models\Post;
$posts = Post::all();
?>
<ul class="list-group list-group-flush">
<?php
foreach ($posts as $post) {
    echo '<li class="list-group-item"><h3>' . $post->id . ' - ' . $post->title . '</h3></li>';
}
?>
</ul>
