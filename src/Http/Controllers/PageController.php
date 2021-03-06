<?php

namespace Addgod\NovaCms\Http\Controllers;

use Addgod\NovaCms\Models\Page;

class PageController
{
    /**
     * Generate the CMS pages
     *
     * @param string $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $slug = "/")
    {
        if ($page = Page::whereStatus(Page::LIVE)->whereSlug($slug)->first()) {
            return view('nova-cms::page', ['page' => $page]);
        }

        abort(404);
    }
}
