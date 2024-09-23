<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Home page route
Route::get('/', function () {
    return view('home');
});

// Business Cards Routes
Route::get('/business-cards', [ProductController::class, 'showBusinessCards'])->name('business-cards');

// Route to display details of specific business cards
Route::get('/business-cards/{slug}', [ProductController::class, 'showCardDetails'])->name('business-card.detail');

// Route to display the Specialty Business Cards page
Route::get('/specialty-business-cards', [ProductController::class, 'showSpecialtyCards'])->name('specialty-business-cards.specialty');

// Print Products Routes
Route::get('/print-products/postcards', [ProductController::class, 'showPostcards'])->name('print-products.postcards');
Route::get('/print-products/flyers/flyers', [ProductController::class, 'showFlyers'])->name('print-products.flyers.flyers');
Route::get('/print-products/brochures', [ProductController::class, 'showBrochures'])->name('print-products.brochures');
Route::get('/print-products/bookmarks', [ProductController::class, 'showBookmarks'])->name('print-products.bookmarks'); // Add for bookmarks
Route::get('/print-products/presentation-folders', [ProductController::class, 'showPresentationFolders'])->name('print-products.presentation-folders');
Route::get('/print-products/booklets', [ProductController::class, 'showBooklets'])->name('print-products.booklets');
Route::get('/print-products/magnets', [ProductController::class, 'showMagnets'])->name('print-products.magnets');
Route::get('/print-products/greeting-cards', [ProductController::class, 'showGreetingCards'])->name('print-products.greeting-cards');
Route::get('/print-products/invitations', [ProductController::class, 'showInvitations'])->name('print-products.invitations');
Route::get('/print-products/numbered-tickets', [ProductController::class, 'showNumberedTickets'])->name('print-products.numbered-tickets');
Route::get('/print-products/wall-calendars', [ProductController::class, 'showWallCalendars'])->name('print-products.wall-calendars');
Route::get('/print-products/variable-printing', [ProductController::class, 'showVariablePrinting'])->name('print-products.variable-printing');
Route::get('/print-products/posters', [ProductController::class, 'showPosters'])->name('print-products.posters');
Route::get('/print-products/door-hangers', [ProductController::class, 'showDoorHangers'])->name('print-products.door-hangers');
Route::get('/print-products/digital-sheets', [ProductController::class, 'showDigitalSheets'])->name('print-products.digital-sheets');
Route::get('/print-products/folded-business-cards', [ProductController::class, 'showFoldedBusinessCards'])->name('print-products.folded-business-cards');
Route::get('/print-products/tent-cards', [ProductController::class, 'showTentCards'])->name('print-products.tent-cards');
Route::get('/print-products/plastics', [ProductController::class, 'showPlastics'])->name('print-products.plastics');
Route::get('/print-products/tear-cards', [ProductController::class, 'showTearCards'])->name('print-products.tear-cards');
Route::get('/print-products/clings', [ProductController::class, 'showClings'])->name('print-products.clings');


// Routes for Postcards Subcategories
Route::get('/print-products/postcards/matte-finish/10pt', [ProductController::class, 'show10ptMatteFinish'])->name('postcards.matte.10pt');
Route::get('/print-products/postcards/matte-finish/14pt', [ProductController::class, 'show14ptMatteFinish'])->name('postcards.matte.14pt');
Route::get('/print-products/postcards/matte-finish/16pt', [ProductController::class, 'show16ptMatteFinish'])->name('postcards.matte.16pt');

Route::get('/print-products/postcards/uv/14pt', [ProductController::class, 'show14ptUVPostcards'])->name('postcards.uv.14pt');
Route::get('/print-products/postcards/uv/16pt', [ProductController::class, 'show16ptUVPostcards'])->name('postcards.uv.16pt');

Route::get('/print-products/postcards/lamination/18pt-gloss', [ProductController::class, 'show18ptGlossLamination'])->name('postcards.lamination.gloss');
Route::get('/print-products/postcards/lamination/18pt-matte-silk', [ProductController::class, 'show18ptMatteSilkLamination'])->name('postcards.lamination.matte-silk');

Route::get('/print-products/postcards/aq/10pt', [ProductController::class, 'show10ptAQ'])->name('postcards.aq.10pt');
Route::get('/print-products/postcards/aq/14pt', [ProductController::class, 'show14ptAQ'])->name('postcards.aq.14pt');
Route::get('/print-products/postcards/aq/16pt', [ProductController::class, 'show16ptAQ'])->name('postcards.aq.16pt');

Route::get('/print-products/postcards/writable/13pt-enviro', [ProductController::class, 'show13ptEnviro'])->name('postcards.writable.enviro');
Route::get('/print-products/postcards/writable/13pt-linen', [ProductController::class, 'show13ptLinen'])->name('postcards.writable.linen');
Route::get('/print-products/postcards/writable/14pt-aq', [ProductController::class, 'show14ptWritableAQ'])->name('postcards.writable.aq');
Route::get('/print-products/postcards/writable/14pt-uv', [ProductController::class, 'show14ptWritableUV'])->name('postcards.writable.uv');

Route::get('/print-products/postcards/specialty/metallic-foil', [ProductController::class, 'showMetallicFoil'])->name('postcards.specialty.metallic-foil');
Route::get('/print-products/postcards/specialty/spot-uv', [ProductController::class, 'showSpotUV'])->name('postcards.specialty.spot-uv');
Route::get('/print-products/postcards/specialty/kraft-paper', [ProductController::class, 'showKraftPaper'])->name('postcards.specialty.kraft-paper');
Route::get('/print-products/postcards/specialty/pearl-paper', [ProductController::class, 'showPearlPaper'])->name('postcards.specialty.pearl-paper');
Route::get('/print-products/postcards/specialty/durable', [ProductController::class, 'showDurablePostcards'])->name('postcards.specialty.durable');

// Flyers Overview Page
Route::get('/print-products/flyers', [ProductController::class, 'showFlyers'])->name('print-products.flyers');

// Routes for Individual Flyer Pages
Route::get('/print-products/flyers/gloss-text', [ProductController::class, 'showGlossTextFlyers'])->name('flyers.gloss-text');
Route::get('/print-products/flyers/matte-finish', [ProductController::class, 'showMatteFinishFlyers'])->name('flyers.matte-finish');
Route::get('/print-products/flyers/uv', [ProductController::class, 'showUVFlyers'])->name('flyers.uv');
Route::get('/print-products/flyers/enviro', [ProductController::class, 'showEnviroFlyers'])->name('flyers.enviro');
Route::get('/print-products/flyers/linen', [ProductController::class, 'showLinenFlyers'])->name('flyers.linen');

