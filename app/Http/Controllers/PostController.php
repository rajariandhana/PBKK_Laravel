<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // public 

    // public function GetPosts(){
    //     return $this->post;
    // }
    public function index(){
        // $posts = Post::get();
        $posts = [
           [
                'title'=>'Title Article 1',
                'author'=>'john',
                'date'=>'11 September 2024',
                'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui reprehenderit quo autem laudantium, hic recusandae repellat minus voluptatibus sed fuga quaerat officia tempora facilis rem magnam vitae dignissimos id neque tempore? Incidunt dignissimos laudantium amet veritatis qui in reiciendis ea doloribus eius quae! Ipsam eligendi iure ad, maxime fugiat soluta.'
            ], 
            [
                'title'=>'Title Article 2',
                'author'=>'john doe',
                'date'=>'14 September 2024',
                'body'=>'mollitia soluta autem? Quis similique eaque maiores neque impedit nam sunt est mollitia quibusdam fugiat facilis consequatur, error autem, alias necessitatibus distinctio? Similique!'
            ],
            [
                'title'=>'Title Article 3',
                'author'=>'johnathan',
                'date'=>'17 October 2024',
                'body'=>'doloremque, aliquam nihil atque qui eaque dolorem temporibus consectetur. Tempore nam necessitatibus, pariatur ipsum nobis quo fuga velit odio doloribus repellat! Tempora minus commodi nulla alias quae laborum incidunt, veritatis totam dicta cupiditate quod provident cum nihil delectus sint. Iusto dolor, obcaecati dolorem reiciendis asperiores, perspiciatis omnis pariatur nobis illo nemo totam repudiandae culpa!',
            ]
        ];
        // dd($posts);
        return view('posts',[
            'title'=>'Blog',
            'posts'=> $posts
        ]);
    }

}
