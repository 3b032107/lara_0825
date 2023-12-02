<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('posts.index'));
});

Route::get('posts',[PostController::class, 'index'])->name('posts.index');
Route::get('post',[PostController::class, 'show'])->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])->name('posts.contact');
Route::get('about',[PostController::class, 'about'])->name('posts.about');

//$post = new Post;
//$post->title = 'test title';
//$post->content = 'test content';
//$post->save();
//
//Post::create([
//    'title' => 'created title',
//    'content' => 'created content',
//]);
//利用find方法
//$post = Post::find(1); //找尋posts資料表id=1的貼文
//echo '標題: ' .$post->title. "<br>"; //貼文的標題
//echo '內容: ' .$post->content. "<br>"; //貼文的內容
//dd($post); //dumpand die
//
////使用all方法
//$post = Post::all(); //取出所有貼文
//foreach ($posts as $post){
//    echo '編號： ' .$post->id. "<br>";
//    echo '標題： ' .$post->title. "<br>";
//    echo '內容： ' .$post->content. "<br>";
//    echo '張貼時間： ' .$post->created_at. "<br>";
//    echo '----------------------'. "<br>";
//}
//dd($post);
////查詢符合條件(id<10)的貼文，排序後取出
//$posts = Post::where('id','<',10)->orderBy('id','DESC')->get();
//dd($posts);

//$post = Post::find(1);
//$post->update([
//    'title' => 'updated title',
//    'content' => 'updated content',
//]);

//用save方法需要在cmder用 artisan db:seed
$post = Post::find(1);
$post->title = 'saved title';
$post->content = 'saved content';
$post->save();
