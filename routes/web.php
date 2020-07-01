<?php

use Illuminate\Support\Facades\Route;

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

// Admin routes
Route::get('/admin-login', [
    'uses' => 'Admin\HomeController@index',
    'as' => 'admin.home',
    'middleware' => ['auth']
]);
Route::get('/admin-recipes', [
   'uses' => 'Admin\RecipeController@getRecipes',
   'as' => 'admin.recipes',
    'middleware' => ['auth']
]);
Route::get('/admin-add-new-recipe',[
    'uses' => 'Admin\RecipeController@addNewRecipe',
    'as' => 'admin.add.new.recipe',
    'middleware' => ['auth']
]);
Route::post('/admin-save-new-recipe',[
    'uses' => 'Admin\RecipeController@saveNewRecipe',
    'as' => 'admin.save.recipe',
    'middleware' => ['auth']
]);
Route::delete('/admin-delete-recipe/{id}', [
    'uses' => 'Admin\RecipeController@deleteRecipe',
    'as' => 'admin.delete.recipe',
    'middleware' => ['auth']
]);
Route::get('/admin-blog', [
   'uses' => 'Admin\BlogController@index',
   'as' => 'admin.blog',
    'middleware' => ['auth']
]);
Route::get('/admin-contacts', [
    'uses' => 'Admin\ContactsController@index',
    'as' => 'admin.contacts',
    'middleware' => ['auth']
]);
Route::post('/admin-save-contacts', [
    'uses' => 'Admin\ContactsController@save',
    'as' => 'admin.save.contacts',
    'middleware' => ['auth']
]);
Route::put('/admin-save-about-me', [
    'uses' => 'Admin\ContactsController@saveAboutMe',
    'as' => 'admin.save.about.me',
    'middleware' => ['auth']
]);
Route::get('/admin-messages', [
    'uses' => 'Admin\MessageController@index',
    'as' => 'admin.messages',
    'middleware' => ['auth']
]);
Route::get('/admin-read-mail/{id}', [
    'uses' => 'Admin\MessageController@readMail',
    'as' => 'admin.read.mail',
    'middleware' => ['auth']
]);
Route::delete('/admin-delete-message/{id}', [
    'uses' => 'Admin\MessageController@deleteMessage',
    'as' => 'admin.delete.message',
    'middleware' => ['auth']
]);
Route::get('/admin-categories', [
   'uses' => 'Admin\CategoriesController@index',
   'as' => 'admin.categories',
   'middleware' => ['auth']
]);
Route::get('/admin-add-new-category', [
    'uses' => 'Admin\CategoriesController@addNewCategory',
    'as' => 'admin.add.new.category',
    'middleware' => ['auth']
]);
Route::post('/admin-new-category', [
    'uses' => 'Admin\CategoriesController@saveNewCategory',
    'as' => 'admin.save.category',
    'middleware' => ['auth']
]);
Route::delete('/admin-delete-category/{id}', [
    'uses' => 'Admin\CategoriesController@deleteCategory',
    'as' => 'admin.delete.category',
    'middleware' => ['auth']
]);
Route::get('/admin-comments', [
    'uses' => 'Admin\CommentsController@index',
    'as' => 'admin.comments',
    'middleware' => ['auth']
]);
Route::delete('/admin-delete-comment/{id}', [
    'uses' => 'Admin\CommentsController@deleteComment',
    'as' => 'admin.delete.comment',
    'middleware' => ['auth']
]);


Auth::routes();

// User
Route::get('/', [
    'uses' => 'User\HomeController@index',
    'as' => 'user.home'
]);
Route::get('/user-contacts', [
    'uses' => 'User\ContactsController@index',
    'as' => 'user.contacts'
]);
Route::post('/user-send-message', [
   'uses' => 'User\ContactsController@sendMessage',
   'as' => 'user.send.message'
]);
Route::get('/user-category/{id}', [
   'uses' => 'User\CategoriesController@index',
   'as' => 'user.category'
]);
Route::get('/user-single-dish/{slug}', [
   'uses' => 'User\RecipeController@index',
   'as' => 'user.single.dish'
]);
Route::post('/user-leave-comment', [
    'uses' => 'User\CommentController@index',
    'as' => 'user.leave.comment'
]);
Route::get('/user-about-me', [
    'uses' => 'User\AboutMeController@index',
    'as' => 'user.about.me'
]);
