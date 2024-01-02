<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public static $blogs=[
        0=>[
            'id'    =>1,
            'title' =>'This is Bloge one',
            'image' =>'img/1.jpg',
            'discription'   =>'This is bloge one description'
        ],
        1=>[
            'id'    =>2,
            'title' =>'This is Bloge two',
            'image' =>'img/2.jpg',
            'discription'   =>'This is bloge two description'
        ],
        2=>[
            'id'    =>3,
            'title' =>'This is Bloge Three',
            'image' =>'img/3.jpg',
            'discription'   =>'This is bloge three description'
        ],
        3=>[
            'id'    =>4,
            'title' =>'This is Bloge four',
            'image' =>'img/4.jpg',
            'discription'   =>'This is bloge four description'
        ],
    ];

    public static function getAllBlog(){
        return self::$blogs;
    }

    public static function getBlogById($id)
    {
        foreach (self::$blogs as $blog)
        {
            if ($blog['id'] == $id)
            {
                return $blog;
            }
        }

    }
}
