<?php

namespace Addgod\NovaCms\Http\Middleware;

use App\Nova\Resource;
use Closure;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->method() === 'GET') {
            $locale = config('app.locale');
            $segment = $request->segment(1);
            if (in_array($segment, Resource::$locales)) {
                $locale = $segment;
                url()->defaults(['locale' => $locale]);
            }

            session(['locale' => $locale]);
            app()->setLocale($locale);
            $request->route()->forgetParameter('locale');
        }

        return $next($request);
    }
}
