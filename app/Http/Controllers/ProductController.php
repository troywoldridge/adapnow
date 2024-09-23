<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Method to show business cards listing page
    public function showBusinessCards()
    {
        // Return the view for the business cards listing page
        return view('business-cards.index');
    }

    // Method to show business card detail page based on slug
    public function showCardDetails($slug)
    {
        // Manually check the slug and load the appropriate view
        switch ($slug) {
            case '14pt-matte-finish-business-cards':
                return view('business-cards.14pt-matte-finish-business-cards');
                
            case 'best-value-business-cards':
                return view('business-cards.best-value-business-cards');
                
            case '13pt-enviro-business-cards':
                return view('business-cards.13pt-enviro-business-cards');

            case '16pt-matte-finish-business-cards':
                return view('business-cards.16pt-matte-finish-business-cards');

            case '14pt-uv-business-cards':
                return view('business-cards.14pt-uv-high-gloss-business-cards');
            
            case '16pt-uv-business-cards':
                return view('business-cards.16pt-uv-high-gloss-business-cards');

            case '18pt-gloss-lam-business-cards':
                return view('business-cards.18pt-gloss-lam-business-cards');

            case '18pt-matte-silk-lam-business-cards':
                return view('business-cards.18pt-matte-silk-lam-business-cards');
            
            case '14pt-aq-business-cards':
                return view('business-cards.14pt-aq-business-cards');
        
            case '16pt-aq-business-cards':
                return view('business-cards.16pt-aq-business-cards');

            // Specialty Business Cards
            case 'die-cut-business-cards':
                return view('specialty-business-cards.die-cut-business-cards');

            case 'durable-business-cards':
                return view('specialty-business-cards.durable-business-cards');

            case 'kraft-paper-business-cards':
                return view('specialty-business-cards.kraft-paper-business-cards');

            case 'metallic-foil-business-cards':
                return view('specialty-business-cards.metallic-foil-business-cards');

            case 'painted-edge-business-cards':
                return view('specialty-business-cards.painted-edge-business-cards');

            case 'pearl-paper-business-cards':
                return view('specialty-business-cards.pearl-paper-business-cards');

            case 'soft-touch-business-cards':
                return view('specialty-business-cards.soft-touch-business-cards');

            case '13pt-linen-business-cards':
                return view('specialty-business-cards.13pt-linen-business-cards');

            case 'spot-uv-business-cards':
                return view('specialty-business-cards.spot-uv-business-cards');

            default:
                abort(404); // Return a 404 page if the slug doesn't match
        }
    }

    // Method to show the specialty business cards listing page
    public function showSpecialtyCards()
    {
        // Point to the correct view
        return view('specialty-business-cards.specialty');
    }


        // Method to show Postcards page
        public function showPostcards()
        {
            return view('print-products.postcards');
        }
    
    
        // Method to show Brochures page
        public function showBrochures()
        {
            return view('print-products.brochures');
        }
    
        // Method to show Bookmarks page
        public function showBookmarks()
        {
            return view('print-products.bookmarks');
        }
    
        // Method to show Presentation Folders page
        public function showPresentationFolders()
        {
            return view('print-products.presentation-folders');
        }
    
        // Method to show Booklets page
        public function showBooklets()
        {
            return view('print-products.booklets');
        }
    
        // Method to show Magnets page
        public function showMagnets()
        {
            return view('print-products.magnets');
        }
    
        // Method to show Greeting Cards page
        public function showGreetingCards()
        {
            return view('print-products.greeting-cards');
        }
    
        // Method to show Invitations / Announcements page
        public function showInvitations()
        {
            return view('print-products.invitations');
        }
    
        // Method to show Numbered Tickets page
        public function showNumberedTickets()
        {
            return view('print-products.numbered-tickets');
        }
    
        // Method to show Wall Calendars page
        public function showWallCalendars()
        {
            return view('print-products.wall-calendars');
        }
    
        // Method to show Variable Printing page
        public function showVariablePrinting()
        {
            return view('print-products.variable-printing');
        }
    
        // Method to show Posters page
        public function showPosters()
        {
            return view('print-products.posters');
        }
    
        // Method to show Door Hangers page
        public function showDoorHangers()
        {
            return view('print-products.door-hangers');
        }
    
        // Method to show Digital Sheets page
        public function showDigitalSheets()
        {
            return view('print-products.digital-sheets');
        }
    
        // Method to show Folded Business Cards page
        public function showFoldedBusinessCards()
        {
            return view('print-products.folded-business-cards');
        }
    
        // Method to show Tent Cards page
        public function showTentCards()
        {
            return view('print-products.tent-cards');
        }
    
        // Method to show Plastics page
        public function showPlastics()
        {
            return view('print-products.plastics');
        }
    
        // Method to show Tear Cards page
        public function showTearCards()
        {
            return view('print-products.tear-cards');
        }
    
        // Method to show Clings page
        public function showClings()
        {
            return view('print-products.clings');
        }

        // In ProductController.php

public function show10ptMatteFinish()
{
    return view('print-products.postcards.matte-finish-postcards.10pt-matte-finish');
}

public function show14ptMatteFinish()
{
    return view('print-products.postcards.matte-finish-postcards.14pt-matte-finish');
}

public function show16ptMatteFinish()
{
    return view('print-products.postcards.matte-finish-postcards.16pt-matte-finish');
}

public function show14ptUVPostcards()
{
    return view('print-products.postcards.uv-postcards.14pt-uv');
}

public function show16ptUVPostcards()
{
    return view('print-products.postcards.uv-postcards.16pt-uv');
}

public function show18ptGlossLamination()
{
    return view('print-products.postcards.lamination-postcards.18pt-gloss-lamination');
}

public function show18ptMatteSilkLamination()
{
    return view('print-products.postcards.lamination-postcards.18pt-matte-silk-lamination');
}

public function show10ptAQ()
{
    return view('print-products.postcards.aq-postcards.10pt-aq');
}

public function show14ptAQ()
{
    return view('print-products.postcards.aq-postcards.14pt-aq');
}

public function show16ptAQ()
{
    return view('print-products.postcards.aq-postcards.16pt-aq');
}

public function show13ptEnviro()
{
    return view('print-products.postcards.writable-postcards.13pt-enviro');
}

public function show13ptLinen()
{
    return view('print-products.postcards.writable-postcards.13pt-linen');
}

public function show14ptWritableAQ()
{
    return view('print-products.postcards.writable-postcards.14pt-writable-aq');
}

public function show14ptWritableUV()
{
    return view('print-products.postcards.writable-postcards.14pt-writable-uv');
}

public function showMetallicFoil()
{
    return view('print-products.postcards.specialty-postcards.metallic-foil');
}

public function showSpotUV()
{
    return view('print-products.postcards.specialty-postcards.spot-uv');
}

public function showKraftPaper()
{
    return view('print-products.postcards.specialty-postcards.kraft-paper');
}

public function showPearlPaper()
{
    return view('print-products.postcards.specialty-postcards.pearl-paper');
}

public function showDurablePostcards()
{
    return view('print-products.postcards.specialty-postcards.durable');
}

// Flyers Overview Page
public function showFlyers()
{
    return view('print-products.flyers.flyers');
}

// Individual Flyer Pages
public function showGlossTextFlyers()
{
    return view('print-products.flyers.gloss-text');
}

public function showMatteFinishFlyers()
{
    return view('print-products.flyers.matte-finish');
}

public function showUVFlyers()
{
    return view('print-products.flyers.uv');
}

public function showEnviroFlyers()
{
    return view('print-products.flyers.enviro');
}

public function showLinenFlyers()
{
    return view('print-products.flyers.linen');
}


    }
    


