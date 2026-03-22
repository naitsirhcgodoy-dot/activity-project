<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show a page. If no id is provided show page 1.
     *
     * @param  int|null  $id
     * @return \Illuminate\View\View
     */
    public function show($id = null)
    {
        $pageNumber = intval($id ?: 1);
        if ($pageNumber < 1 || $pageNumber > 5) {
            abort(404);
        }

        $title = "Page {$pageNumber}";

        // Each page is a separate Blade file: pages.page1 .. pages.page5
        return view('pages.page' . $pageNumber, compact('pageNumber', 'title'));
    }
    
}