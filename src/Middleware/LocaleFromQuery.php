<?php

namespace Veneridze\LaravelQueryLocalization\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Veneridze\LaravelQueryLocalization\Facades\LaravelQueryLocalization;
use Illuminate\Http\Request;

class LocaleFromQuery
{
    public function handle(Request $request, Closure $next, string $translatedRoute = null)
    {
        if ($request->has('locale')) {
            LaravelQueryLocalization::setLocale($request->get('locale'));

            return $next($request);
        }

        if (!session('locale') && $translatedRoute) {
            LaravelQueryLocalization::setLocale($translatedRoute);

            return $next($request);
        }

        if (auth()->check()) {
            $user = Auth::user();
            if (LaravelQueryLocalization::getConfigRepository()->get('query-localization.useUserLanguagePreference') && $user->language_preference) {
                LaravelQueryLocalization::setLocale($user->language_preference);

                return $next($request);
            }
        }

        $locale = LaravelQueryLocalization::getCurrentLocale();
        LaravelQueryLocalization::setLocale($locale);

        return $next($request);
    }
}
