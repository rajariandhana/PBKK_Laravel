<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // php artisan tinker
    // App\Models\Post::factory(20)->recycle(User::factory(5)->create())->create();
    use HasFactory;
    protected $fillable = ['slug','title','author','body'];
    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    // protected $guarded = ['id'];

    // public static function find($slug): array{
    //     $post = Arr::first(static::all(),function ($post) use ($slug){
    //         return $post['slug']==$slug;
    //     });
    //     if(!$post) abort(404);
    //     return $post;
    // }

    // public static function all(){
    //     return [
    //         [
    //             'id'=>1,
    //             'slug'=>'judul-artikel-1',
    //              'title'=>'Judul Artikel 1',
    //              'author'=>'john',
    //              'date'=>'11 September 2024',
    //              'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui reprehenderit quo autem laudantium, hic recusandae repellat minus voluptatibus sed fuga quaerat officia tempora facilis rem magnam vitae dignissimos id neque tempore? Incidunt dignissimos laudantium amet veritatis qui in reiciendis ea doloribus eius quae! Ipsam eligendi iure ad, maxime fugiat soluta.'
    //          ], 
    //          [
    //             'id'=>2,
    //             'slug'=>'judul-artikel-2',
    //              'title'=>'Judul Artikel 2',
    //              'author'=>'john doe',
    //              'date'=>'14 September 2024',
    //              'body'=>'mollitia soluta autem? Quis similique eaque maiores neque impedit nam sunt est mollitia quibusdam fugiat facilis consequatur, error autem, alias necessitatibus distinctio? Similique!'
    //          ],
    //          [
    //             'id'=>3,
    //             'slug'=>'judul-artikel-3',
    //              'title'=>'Judul Artikel 3',
    //              'author'=>'johnathan',
    //              'date'=>'17 October 2024',
    //              'body'=>'doloremque, aliquam nihil atque qui eaque dolorem temporibus consectetur. Tempore nam necessitatibus, pariatur ipsum nobis quo fuga velit odio doloribus repellat! Tempora minus commodi nulla alias quae laborum incidunt, veritatis totam dicta cupiditate quod provident cum nihil delectus sint. Iusto dolor, obcaecati dolorem reiciendis asperiores, perspiciatis omnis pariatur nobis illo nemo totam repudiandae culpa!',
    //          ]
    //      ];
    // }
}
