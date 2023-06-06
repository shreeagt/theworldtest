<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\NewsIndController;
use App\Http\Controllers\User\IndextestController;
use Illuminate\Support\Facades\Route;
//harsh

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


/* Frontend */

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', function () {
    return view('frontend.indextest');
});


Route::get('/', [IndextestController::class, 'index'])->name('frontend.indextest.index');



// Route::get('/gallery', function () {
//     return view('frontend.gallery.index');
// });



// Route::get('/gallery', function () {
//     return view('frontend.gallery.indextext');
// });

Route::get('/faq', function () {
    return view('frontend.faq.faq');
});

Route::get('/news', [NewsController::class, 'index'])->name('frontend.news.index');

Route::get('/news_ind/{id}', [NewsController::class, 'show'])->name('blogs.show');

Route::get('/news_ind', [NewsIndController::class, 'index'])->name('frontend.news.news_ind');



Route::get('/videogallery', function () {
    return view('frontend.video.video');
});

Route::get('/stats', function () {
    return view('frontend.stats.stats');
});

Route::get('/polls', function () {
    return view('frontend.polls.polls');
});

Route::get('/trivia', function () {
    return view('frontend.trivia.trivia');
});

Route::get('/live-score', function () {
    return view('frontend.livescore.livescore');
});

// Route::get('/gallery/detail', function () {
//     return view('frontend.gallery.detail');
// });

Route::get('/gallery', function () {
    return view('frontend.gallery.detail');
});
Route::get('/venues', function () {
    return view('frontend.venues.index');
});
Route::get('/venues/detail', function () {
    return view('frontend.venues.details');
});

Route::get('/teams', function () {
    return view('frontend.team.index');
});

Route::get('/team/detail', function () {
    return view('frontend.team.details');
});







/* Admin */

Route::get('/admin/dummy', function () {
    return view('admin.dummy');
});
// Route::get('/admin/login1', function () {
//     return view('admin.login');
// });
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

//harsh
Route::get('/news', [NewsController::class, 'index'])->name('frontend.news.index');

Route::get('/news_ind/{id}', [NewsController::class, 'show'])->name('blogs.show');

Route::get('/news_ind', [NewsIndController::class, 'index'])->name('frontend.news.news_ind');


Route::get('/', [IndextestController::class, 'index'])->name('frontend.indextest.index');

Route::post('/resultstore',[IndextestController::class, 'resultstore'])->name('admin-quize.resultstore');

Route::post('/resultstorequestion2',[IndextestController::class, 'resultstorequestion2'])->name('admin-quize.resultstorequestion2');


Route::get('/report',[IndextestController::class, 'report'])->name('admin-quize.report');


Route::get('/admin/login','Admin\AdminController@login')->name('admin.login');
Route::post('/admin/signup','Admin\AdminController@signUp')->name('admin.signup');
Route::group(['prefix' => '/admin','middleware'=>'admin-auth'], function () {
    Route::get('/logout','Admin\AdminController@logout')->name('admin.logout');

    Route::get('/blogs','Admin\BlogController@index')->name('admin-blogs.index');
    Route::get('/blogs/create','Admin\BlogController@show')->name('admin-blogs.create');
    Route::post('/blogs/store','Admin\BlogController@store')->name('blog.store');
    Route::get('/blogs/delete/{id}','Admin\BlogController@delete')->name('admin-blogs.delete');
    Route::get('/blogs/edit/{id}','Admin\BlogController@edit')->name('admin-blogs.edit');

    Route::get('/blogs/category','Admin\BlogController@showCategory')->name('admin-blog-categories.index');
    Route::get('/blogs/category/create','Admin\BlogController@createCategory')->name('admin-blog-categories.create');
    Route::post('/blogs/category/create','Admin\BlogController@storeCategory')->name('admin-blog-categories.store');

    Route::get('/videos', 'Admin\videosController@index')->name('admin-videos.index');
    Route::get('/videos/create','Admin\videosController@show')->name('admin-videos.create');
    Route::post('/videos/store','Admin\videosController@store')->name('videos.store');
    Route::get('/videos/delete/{id}','Admin\videosController@delete')->name('admin-videos.delete');
    Route::get('/videos/edit/{id}','Admin\videosController@edit')->name('admin-videos.edit');

    Route::get('/videos/category','Admin\videosController@showCategory')->name('admin-videos.index');
    Route::get('/videos/category/create','Admin\videosController@createCatgeory')->name('admin-videos-category.create');
    Route::post('/videos/category/create','Admin\videosController@storeCatgeory')->name('admin-videos-category.store');


    Route::get('/news', 'Admin\NewsController@index')->name('admin-news.index');
    Route::get('/news/create','Admin\NewsController@show')->name('admin-news.create');
    Route::post('/news/store','Admin\NewsController@store')->name('news.store');
    Route::get('/news/delete/{id}','Admin\NewsController@delete')->name('admin-news.delete');
    Route::get('/news/edit/{id}','Admin\NewsController@edit')->name('admin-news.edit');

    Route::get('/news/category','Admin\NewsController@showCategory')->name('admin-news.index');
    Route::get('/news/category/create','Admin\NewsController@createCategory')->name('admin-news-category.create');
    Route::post('/news/category/create','Admin\NewsController@storeCategory')->name('admin-news-category.store');


    Route::get('/photos', 'Admin\PhotosController@index')->name('admin-photos.index');
    Route::get('/photos/create','Admin\PhotosController@show')->name('admin-photos.create');
    Route::post('/photos/store','Admin\PhotosController@store')->name('photos.store');
    Route::get('/photos/delete/{id}','Admin\PhotosController@delete')->name('admin-photos.delete');
    Route::get('/photos/edit/{id}','Admin\PhotosController@edit')->name('admin-photos.edit');

    Route::get('/photos/category','Admin\PhotosController@showCategory')->name('admin-photos-category.index');
    Route::get('/photos/category/create','Admin\PhotosController@createCategory')->name('admin-photos-category.create');
    Route::post('/photos/category/create','Admin\PhotosController@storeCategory')->name('admin-photos-category.store');

    // Teams Routes
    Route::get('/teams', 'Admin\teamsController@index')->name('admin-teams.index');
    Route::get('/teams/create','Admin\teamsController@show')->name('admin-teams.create');
    Route::post('/teams/store','Admin\teamsController@store')->name('teams.store');
    Route::get('/teams/delete/{id}','Admin\teamsController@delete')->name('admin-teams.delete');
    Route::get('/teams/edit/{id}','Admin\teamsController@edit')->name('admin-teams.edit');

    // Players Routes
    Route::get('/players', 'Admin\playersController@index')->name('admin-players.index');
    Route::get('/players/create','Admin\playersController@show')->name('admin-players.create');
    Route::post('/players/store','Admin\playersController@store')->name('players.store');
    Route::get('/players/delete/{id}','Admin\playersController@delete')->name('admin-players.delete');
    Route::get('/players/edit/{id}','Admin\playersController@edit')->name('admin-players.edit');

    // Venue Routes
    Route::get('/venues', 'Admin\venueController@index')->name('admin-venues.index');
    Route::get('/venues/create','Admin\venueController@show')->name('admin-venues.create');
    Route::post('/venues/store','Admin\venueController@store')->name('venues.store');
    Route::get('/venues/delete/{id}','Admin\venueController@delete')->name('admin-venues.delete');
    Route::get('/venues/edit/{id}','Admin\venueController@edit')->name('admin-venues.edit');

    // Schedule Routes
    Route::get('/schedules', 'Admin\scheduleController@index')->name('schedule.index');
    Route::get('/schedules/create','Admin\scheduleController@show')->name('admin-schedule.create');
    Route::post('/schedules/store','Admin\scheduleController@store')->name('schedule.store');

    //Quize

   
    Route::get('/quize','Admin\QuizeController@index')->name('admin-quize.index');
    Route::get('/quize/create','Admin\QuizeController@show')->name('admin-quize.create');
    Route::post('/quize/store','Admin\QuizeController@store')->name('admin-quize.store');
    Route::get('/quize/delete/{id}','Admin\QuizeController@delete')->name('admin-quize.delete');
    Route::get('/quize/edit/{id}','Admin\QuizeController@edit')->name('admin-quize.edit');
  



});
