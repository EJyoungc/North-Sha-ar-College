<?php

use App\Livewire\Pages\About\AboutLivewire;
use App\Livewire\Pages\Categories\CategoriesCreateLivewire;
use App\Livewire\Pages\Categories\CategoriesLivewire;
use App\Livewire\Pages\Dashboard\DashboardLivewire;
use App\Livewire\Pages\Footer\FooterLivewire;
use App\Livewire\Pages\Hero\HeroSectionLivewire;
use App\Livewire\Pages\Programs\EducationalProgramsLivewire;
use App\Livewire\Pages\Intake\IntakeCandidatesLivewire;
use App\Livewire\Pages\Intake\IntakeLivewire;
use App\Livewire\Pages\Posts\PostsCreateLivewire;
use App\Livewire\Pages\Posts\PostsEditLivewire;
use App\Livewire\Pages\Posts\PostsLivewire;
use App\Livewire\Pages\Profile\ProfileLivewire;
use App\Livewire\Pages\Tags\TagsCreateLivewire;
use App\Livewire\Pages\Tags\TagsLivewire;
use App\Livewire\Pages\Testimonials\TestimonialsLivewire;
use App\Livewire\Pages\Users\UsersLivewire;
use App\Livewire\Pages\Whys\WhysLivewire;
use App\Livewire\Public\Courses\CoursesLivewire;
use App\Livewire\Public\Enroll\EnrollLivewire;
use App\Livewire\Public\News\NewsCategoryLivewire;
use App\Livewire\Public\News\NewsLivewire;
use App\Livewire\Public\News\NewsShowLivewire;
use App\Livewire\Public\RootLiverwire;
use App\Livewire\Public\Teacher\TeachersLivewire;
use App\Models\Intake;
use App\Models\IntakeCandidates;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',RootLiverwire::class)->name('root');
Route::get('/enroll',EnrollLivewire::class)->name('root.enroll');
Route::get('/news',NewsLivewire::class)->name('root.news');
Route::get('/news/{slug}',NewsShowLivewire::class)->name('root.news.show');
Route::get('/news/category/{slug}',NewsCategoryLivewire::class)->name('root.news.category');
Route::get('/courses',CoursesLivewire::class)->name('root.courses');
Route::get('/staff',TeachersLivewire::class)->name('root.staff');
// Route::get('/test',function(){
//     return view('welcome');
// })->name('root');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',DashboardLivewire::class)->name('dashboard');

    Route::get('dashboard/posts',PostsLivewire::class)->name('posts');
    Route::get('dashboard/posts/create',PostsCreateLivewire::class)->name('posts.create');
    Route::get('dashboard/posts/edit/{slug}',PostsEditLivewire::class)->name('posts.edit');
    Route::post('dahsboard/post/trix/upload',[UploadController::class,'upload'])->name('post.trix.upload');
    Route::post('dahsboard/post/trix/remove',[UploadController::class,'delete'])->name('post.trix.remove');

    Route::get('dashboard/categories',CategoriesLivewire::class)->name('categories');
    Route::get('dashboard/categories/create',CategoriesCreateLivewire::class)->name('categories.create');
    // Route::get('dashboard/subscribers',SubscribeLivewire::class)->name('subscribers');
    Route::get('dashboard/tags',TagsLivewire::class)->name('tags');
    Route::get('dashboard/tags/create',TagsCreateLivewire::class)->name('tags.create');
    Route::get('dashboard/Users',UsersLivewire::class)->name('users');
    Route::get('dashboard/profile',ProfileLivewire::class )->name('user.profile');
    Route::get('dashboard/intake',IntakeLivewire::class )->name('intake');
    Route::get('dashboard/intake/{id}/candidates',IntakeCandidatesLivewire::class)->name('intake.candidates.show');
    Route::get('dashboard/programs',EducationalProgramsLivewire::class)->name('programs');
    Route::get('dashboard/footer',FooterLivewire::class)->name('footer');
    Route::get('dashboard/hero',HeroSectionLivewire::class)->name('hero');
    Route::get('dashboard/whys',WhysLivewire::class)->name('whys');
    Route::get('dashboard/testimonials',TestimonialsLivewire::class)->name('testimonials');
    Route::get('dashboard/about',AboutLivewire::class)->name('about');
    






});
