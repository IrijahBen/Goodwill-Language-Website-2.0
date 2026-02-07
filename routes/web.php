<?php

use App\Models\Post;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController; // <--- ADD THIS LINE
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ListingOfferController;
use App\Http\Controllers\NotificationSeenController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserListingAcceptController;
use App\Http\Controllers\UserListingController;
use App\Http\Controllers\UserListingImageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- 1. MAIN PUBLIC PAGES ---

// Homepage
Route::get('/', function () {
    return Inertia::render('Index');
})->name('home');

// About Us
Route::get('/about-us', function () {
    return Inertia::render('General/About');
})->name('about');

// FAQ
Route::get('/faq', function () {
    return Inertia::render('General/Faq');
})->name('faq');

// Media
Route::get('/media', function () {
    return Inertia::render('General/Media');
})->name('media');


// 1. Main Blog Page (List of Posts) -> loads Blog/Index.vue
Route::get('/blog', function () {
    $posts = Post::where('is_published', true)
        ->orderBy('published_at', 'desc')
        ->get();

    return Inertia::render('Blog/Index', [
        'posts' => $posts
    ]);
})->name('blog.index');

// 2. Single Post Page (Full Article) -> loads Blog/Show.vue
Route::get('/blog/{slug}', function ($slug) {
    // 1. Fetch main post
    $post = Post::where('slug', $slug)
        ->where('is_published', true)
        ->firstOrFail();

    // 2. Fetch "Trending" (Latest 3 excluding current)
    $trendingPosts = Post::where('is_published', true)
        ->where('id', '!=', $post->id)
        ->orderBy('published_at', 'desc')
        ->limit(3)
        ->get();

    // 3. Fetch "Related" (Random 3 excluding current)
    $relatedPosts = Post::where('is_published', true)
        ->where('id', '!=', $post->id)
        ->inRandomOrder()
        ->limit(3)
        ->get();

    return Inertia::render('Blog/Show', [
        'post' => $post,
        'trendingPosts' => $trendingPosts,
        'relatedPosts' => $relatedPosts
    ]);
})->name('blog.show');

// --- 3. SERVICES ROUTES (Grouped) ---
Route::prefix('services')->name('services.')->group(function () {
    
    // Main Services Index
    Route::get('/', function () {
        return Inertia::render('Services/Index');
    })->name('index');

    // Localization
    Route::get('/localize-language', function () {
        return Inertia::render('Services/Localize');
    })->name('localize');

    // Interpretation
    Route::get('/interpretation', function () {
        return Inertia::render('Services/Interpretation');
    })->name('interpretation');

    Route::get('/interpretation/pricing', function () {
        return Inertia::render('Services/InterpretationPrice');
    })->name('interpretation.price');

    // Translation
    Route::get('/translation', function () {
        return Inertia::render('Services/Translation');
    })->name('translation');

    Route::get('/translation/pricing', function () {
        return Inertia::render('Services/TranslationPrice');
    })->name('translation.price');

    // Transcription
    Route::get('/transcription', function () {
        return Inertia::render('Services/Transcription');
    })->name('transcription');

    Route::get('/transcription/pricing', function () {
        return Inertia::render('Services/TranscriptionPrice');
    })->name('transcription.price');

    // Equipment Rental
    Route::get('/rental', function () {
        return Inertia::render('Services/Rental');
    })->name('rental');

    Route::get('/rental/pricing', function () {
        return Inertia::render('Services/RentalPrice');
    })->name('rental.price');

    // Voice Over
    Route::get('/voice-over', function () {
        return Inertia::render('Services/VoiceOver');
    })->name('voice-over');

    // Language Classes
    Route::get('/language-classes', function () {
        return Inertia::render('Services/LanguageClasses');
    })->name('language-classes');

    // Desktop Publishing / Proofreading
    Route::get('/desktop-publishing', function () {
        return Inertia::render('Services/DesktopPublishing');
    })->name('desktop-publishing');
});


// --- 4. AUTHENTICATION ---
Route::get('login', [AuthController::class, 'create'])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('register', [UserController::class, 'create'])->name('user');
Route::post('user', [UserController::class, 'store'])->name('user.store');


// --- 5. USER DASHBOARD ---
Route::prefix('user-account')->name('user-account.')->middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('setting', [SettingController::class, 'edit'])->name('setting');
    Route::post('setting', [SettingController::class, 'update'])->name('setting.update');

    Route::put('my-listing/{listing}/restore', [UserListingController::class, 'restore'])
        ->name('my-listing.restore')->withTrashed();
    Route::resource('my-listing', UserListingController::class)->parameters(['my-listing' => 'listing'])
        ->withTrashed();

    Route::name('offer.accept')->put('offer/{offer}/accept', UserListingAcceptController::class);

    Route::resource('my-listing.image', UserListingImageController::class)->parameters((['my-listing' => 'listing']))
        ->only(['create', 'store', 'destroy']);
});

// --- 6. UTILITIES ---
Route::put('notification/{notification}/seen', NotificationSeenController::class)->middleware('auth')->name('notification.seen');

Route::get('/contact', function () {
    return Inertia::render('General/Contact');
})->name('contact');

// --- NEW CONTACT FORM SUBMISSION ROUTE ---
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/career', function () {
    return Inertia::render('General/Career');
})->name('career');
