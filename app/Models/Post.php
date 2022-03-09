<?php

namespace App\Models;

class Posts 
{           
    private static $blogPost = [
        [ 'id' => 1, 
        'title' => 'First Post',
         'body' => 'This is the first post' ],
        [ 'id' => 2,
         'title' => 'Second Post', 
         'body' => 'This is the second post' ]
        
        ];

        public static function all() {
            return self::$blogPost;
        }  
}


