<?php

namespace Thinkpad\Omt\Controllers\User;

use Thinkpad\Omt\Models\Category;
use Thinkpad\Omt\Models\Post;

class HomeController
{
    public function index()
    {
        $db = new Category();
        $categories = $db->getLimitCategory(8);

        $database = new Post();
        $postWithMobile = $database->getPostWithCategory(1 , 1);
        $postWithMovie = $database->getPostWithCategory(3,2);
        loadView('User/design/home.php', compact('categories','postWithMobile', 'postWithMovie'));
    }
}