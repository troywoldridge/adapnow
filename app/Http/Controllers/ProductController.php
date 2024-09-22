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
                return view('business-cards.13pt-enviro-business-cards'); // Ensure view name matches

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

            case 'die-cut-business-cards':
                 return view('business-cards.die-cut-business-cards');

            case 'durable-business-cards':
                 return view('business-cards.durable-business-cards');

            case 'kraft-paper-business-cards':
                 return view('business-cards.kraft-paper-business-cards');

             case 'metallic-foil-business-cards':
                 return view('business-cards.metallic-foil-business-cards');

            case 'painted-edge-business-cards':                                                   return view('business-cards.painted-edge-business-cards');

            case 'pearl-paper-business-cards':
                return view('business-cards.pearl-paper-business-cards');

            case 'soft-touch-business-cards':
                return view('business-cards.soft-touch-business-cards');

            case '13pt-linen-business-cards':
                return view('business-cards.13pt-linen-business-cards');

            case 'spot-uv-business-cards':
                return view('business-cards.spot-uv-business-cards');

            default:
                abort(404); // Return a 404 page if the slug doesn't match
        }
    }
}
