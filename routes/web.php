<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
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

Route::get('/', function () {
    $projects = Project::all();
    return view('home',[
        'controller'=>'index',
        'projects'=>$projects,
    ]);
});

Route::resource('projects', ProjectController::class);

Route::get('/services/developpement-web',function(){
    return view('/services/web',[
        'controller'=>'services',
        'title' => 'Développement Web'
    ]);
});

Route::get('/services/mobile',function(){
    return view('/services/mobile',[
        'controller'=>'services',
        'title' => 'Développement Mobile'
    ]);
});

Route::get('/services/marketing',function(){
    return view('/services/marketing',[
        'controller'=>'services',
        'title' => 'Marketing Digital'
    ]);
});

Route::get('/services/seo',function(){
    return view('/services/seo',[
        'controller'=>'services',
        'title' => 'SEO'
    ]);
});

Route::get('/services/ux-ui',function(){
    return view('/services/ux',[
        'controller'=>'services',
        'title' => 'UX/UI Design'
    ]);
});

Route::get('/services/saas-products',function(){
    return view('/services/saas',[
        'controller'=>'services',
        'title' => 'Produits SaaS'
    ]);
});

Route::get('/services/data-analyse',function(){
    return view('/services/data',[
        'controller'=>'services',
        'title' => 'Data & Analyse'
    ]);
});

Route::get('/services/cloud-hébergement',function(){
    return view('/services/cloud',[
        'controller'=>'services',
        'title' => 'Cloud & Hébergement'
    ]);
});

Route::get('/services/maintenance-support',function(){
    return view('/services/maintenance',[
        'controller'=>'services',
        'title' => 'Maintenance & Support'
    ]);
});

Route::get('/contact',function(){
    return view('/contact',[
        'controller'=>'contact',
        'title' => 'Contactez-nous'
    ]);
})->name('contactus');

Route::post('/contact-save',[ContactController::class,'store'])->name('contactsave');