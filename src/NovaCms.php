<?php

namespace Addgod\NovaCms;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaCms extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-cms', __DIR__ . '/../dist/js/tool.js');
        Nova::style('nova-cms', __DIR__ . '/../dist/css/tool.css');
    }
}
