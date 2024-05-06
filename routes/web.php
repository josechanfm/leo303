<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Models\Article;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'isMember' => Auth()->user() ? Auth()->user()->member : false,
        'isOrganizer' => Auth()->user() ? Auth()->user()->hasRole('organizer') : false,
        'articles' => Article::publics()
    ]);
})->name('/');;
Route::get('article', [\App\Http\Controllers\ArticleController::class, 'item'])->name('article.item');
Route::get('registration', [\App\Http\Controllers\RegistrationController::class, 'create'])->name('registration');
Route::post('registration', [\App\Http\Controllers\RegistrationController::class, 'store'])->name('registration.store');
Route::get('/language/{language}', function ($language) {

    Session::put('applocale', $language);

    return Redirect::back();
})->name('language');

Route::resource('forms', App\Http\Controllers\FormController::class)->names('forms');
Route::get('form/{form}/entry/{entry}/success', [App\Http\Controllers\Organization\EntryController::class, 'entrySuccess'])->name('form.entry.success');
Route::get('content', [App\Http\Controllers\ContentController::class,'page'])->name('content');

//Member
Route::group([
    'prefix' => 'member',
    'middleware' => [
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ]
], function () {
    Route::get('/', [\App\Http\Controllers\Member\DashboardController::class, 'index'])->name('member.dashboard');
    Route::get('get_qrcode', [\App\Http\Controllers\Member\DashboardController::class, 'getQrcode'])->name('member.getQrcode');
    Route::resource('portfolios', App\Http\Controllers\Member\PortfolioController::class)->names('member.portfolios');
    Route::resource('profile', App\Http\Controllers\Member\ProfileController::class)->names('member.profile');
    Route::resource('professionals', App\Http\Controllers\Member\ProfessionalController::class)->names('member.professionals');
    Route::get('membership', [App\Http\Controllers\Member\MembershipController::class, 'index'])->name('member.membership');
    Route::resource('events', App\Http\Controllers\Member\EventController::class)->names('member.events');
    Route::resource('entries', App\Http\Controllers\Member\EntryController::class)->names('member.entries');
});

//Manage
Route::group([
    'prefix' => '/manage',
    'middleware' => [
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
        'role:organizer|admin'
    ]
], function () {
    Route::get('/', [App\Http\Controllers\Organization\DashboardController::class, 'index'])->name('manage');
    Route::post('organization/switch/{organization}', [App\Http\Controllers\Organization\OrganizationController::class,'switch'])->name('manage.organization.switch');
    Route::resource('organizations', App\Http\Controllers\Organization\OrganizationController::class)->names('manage.organizations');
    Route::post('organization/delete_logo/{organization}', [App\Http\Controllers\Organization\OrganizationController::class,'deleteLogo'])->name('manage.organization.deleteLogo');
    Route::get('/{organization}/medias', [App\Http\Controllers\Organization\MediaController::class, 'getMedias'])->name('manage.medias');
    // Route::get('/select/{organization}', [App\Http\Controllers\Organization\DashboardController::class, 'select'])->name('manage.select');
    Route::resource('members', App\Http\Controllers\Organization\MemberController::class)->names('manage.members');
    Route::post('member/create/login/{member}', [App\Http\Controllers\Organization\MemberController::class, 'createLogin'])->name('manage.member.createLogin');
    Route::resource('forms', App\Http\Controllers\Organization\FormController::class)->names('manage.forms');
    Route::get('form/delete_media/{media}', [App\Http\Controllers\Organization\FormController::class, 'deleteMedia'])->name('manage.form.deleteMedia');
    Route::post('form/{form}/backup', [App\Http\Controllers\Organization\FormController::class, 'backup'])->name('manage.form.backup');
    Route::resource('form/{form}/fields', App\Http\Controllers\Organization\FormFieldController::class)->names('manage.form.fields');
    Route::post('form/{form}/fields_sequence', [App\Http\Controllers\Organization\FormFieldController::class, 'fieldsSequence'])->name('manage.form.fieldsSequence');
    Route::resource('form/{form}/entries', App\Http\Controllers\Organization\EntryController::class)->names('manage.form.entries');
    Route::get('form/{form}/entry/{entry}/success', [App\Http\Controllers\Organization\EntryController::class, 'success'])->name('manage.form.entry.success');
    Route::post('form/{form}/createEventAttendees', [App\Http\Controllers\Organization\FormController::class, 'createEventAttendees'])->name('manage.form.createEventAttendees');
    Route::get('member/export', [App\Http\Controllers\Organization\MemberController::class, 'export'])->name('member.member.export');
    Route::get('entry/{form}/export', [App\Http\Controllers\Organization\EntryController::class, 'export'])->name('manage.entry.export');
    Route::resource('approbates', App\Http\Controllers\Organization\ApprobateController::class)->names('manage.approbates');
    Route::resource('bulletins', App\Http\Controllers\Organization\BulletinController::class)->names('manage.bulletins');
    Route::resource('messages', App\Http\Controllers\Organization\MessageController::class)->names('manage.messages');
    Route::resource('certificates', App\Http\Controllers\Organization\CertificateController::class)->names('manage.certificates');
    Route::get('certificates/delete_media/{mediaId}', [App\Http\Controllers\Organization\CertificateController::class, 'deleteMedia'])->name('manage.certificate.deleteMedia');
    Route::resource('certificate/{certificate}/members', App\Http\Controllers\Organization\CertificateMemberController::class)->names('manage.certificate.members');

    Route::resource('articles', App\Http\Controllers\Organization\ArticleController::class)->names('manage.articles');
    Route::post('article/delete_image/{article}', [App\Http\Controllers\Organization\ArticleController::class,'deleteImage'])->name('manage.article.deleteImage');
    Route::resource('events', App\Http\Controllers\Organization\EventController::class)->names('manage.events');
    Route::resource('configs', App\Http\Controllers\Organization\ConfigController::class)->names('manage.configs');
    Route::get('image_upload', [App\Http\Controllers\Organization\UploaderController::class, 'image'])->name('manage.image_upload');
});

//admin
Route::group([
    'prefix' => '/admin',
    'middleware' => [
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
        'role:admin'
    ]
], function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('organizations', App\Http\Controllers\Admin\OrganizationController::class)->names('admin.organizations');
    Route::get('organization/{organization}/members', [App\Http\Controllers\Admin\OrganizationController::class, 'members'])->name('admin.organization.members');
    Route::resource('members', App\Http\Controllers\Admin\MemberController::class)->names('admin.members');
    Route::resource('users', App\Http\Controllers\Admin\UserController::class)->names('admin.users');
    Route::resource('configs', App\Http\Controllers\Admin\ConfigController::class)->names('admin.configs');
    Route::resource('features', App\Http\Controllers\Admin\FeatureController::class)->names('admin.features');
    Route::post('feature/delete_image/{feature}', [App\Http\Controllers\Admin\FeatureController::class,'deleteImage'])->name('admin.feature.deleteImage');
    Route::resource('articles', App\Http\Controllers\Admin\ArticleController::class)->names('admin.articles');
    Route::post('article/delete_image/{article}', [App\Http\Controllers\Admin\ArticleController::class,'deleteImage'])->name('admin.article.deleteImage');
});
