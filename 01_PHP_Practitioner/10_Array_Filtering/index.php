<?php

class Post
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('First Post', true),
    new Post('Second Post', true),
    new Post('Third Post', true),
    new Post('Fourth Post', false)
];
var_dump($posts);
//////////////////////////////////////////////////////////////////////////////////////////////////
//Filter array where the post is set to false.
$unpublishedPosts = array_filter($posts, function ($post) {

    return ! $post->published; //returns NOT published
});
var_dump($unpublishedPosts);
//////////////////////////////////////////////////////////////////////////////////////////////////
//Filter array where the post is set to true
$publishedPosts = array_filter($posts, function ($post) {

    return $post->published; //returns published
});
var_dump($publishedPosts);

//////////////////////////////////////////////////////////////////////////////////////////////////
//Using Array Maps
array_map(function ($post) {

    $post->published = true; //changes all posts to true for the published var.
    //returns it as a gourp of posts and not an array. You must specify array.
}, $posts);

var_dump($posts);

/////////////////////////////////////////////////////////////////////////////////////////////////

$titles = array_column($posts, 'title');
var_dump($titles);
