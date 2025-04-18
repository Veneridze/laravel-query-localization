<?php

namespace Veneridze\LaravelQueryLocalization\Macros;

use Veneridze\LaravelQueryLocalization\Facades\LaravelQueryLocalization;
use Veneridze\LaravelQueryLocalization\Middleware\LocaleFromQuery;

class RouterMacros
{
    public function localize()
    {
        return function (string $routeTranslationKey, $routeName, $action) {
            $translationRoutes = [];
            foreach (LaravelQueryLocalization::getSupportedLanguagesKeys() as $lang) {
                $translationRoutes[$lang] = trans($routeTranslationKey, [], $lang);
            }


            return $this->group([], function () use ($translationRoutes, $action, $routeName) {
                foreach ($translationRoutes as $language => $translatedRoute) {
                    $this->group([
                        'prefix' => $translatedRoute,
                        'middleware' => LocaleFromQuery::class . ":$language",
                    ], function () use ($action, $routeName) {
                        $this->get('/', $action)->name($routeName);
                    });
                }
            });
        };
    }
}
