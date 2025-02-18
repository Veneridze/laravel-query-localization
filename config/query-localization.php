<?php

return [
    // Uncomment the languages that your site supports - or add new ones.
    'supportedLocales' => [

        //'da'          => ['name' => 'Danish',                 'script' => 'Latn', 'native' => 'dansk', 'regional' => 'da_DK', 'flag' => '🇩🇰'],

        'de' => ['name' => 'Deutsch', 'script' => 'Latn', 'native' => 'Deutsch', 'regional' => 'de_DE', 'flag' => '🇩🇪'],
        'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_US', 'flag' => '🇺🇸'],
        // 'es'          => ['name' => 'Spanish',                'script' => 'Latn', 'native' => 'español', 'regional' => 'es_ES', 'flag' => '🇪🇸'],
        // 'fr'          => ['name' => 'French',                'script' => 'Latn', 'native' => 'français', 'regional' => 'fr_FR', 'flag' => '🇫🇷'],
        //'it'          => ['name' => 'Italian',                'script' => 'Latn', 'native' => 'italiano', 'regional' => 'it_IT', 'flag' => '🇮🇹'],

        //'nl'          => ['name' => 'Dutch',                  'script' => 'Latn', 'native' => 'Nederlands', 'regional' => 'nl_NL', 'flag' => '🇳🇱'],

        //'sv'          => ['name' => 'Swedish',                'script' => 'Latn', 'native' => 'svenska', 'regional' => 'sv_SE', 'flag' => '🇸🇪'],
        // 'ru'          => ['name' => 'Russian',                'script' => 'Cyrl', 'native' => 'русский', 'regional' => 'ru_RU', 'flag' => '🇷🇺'],
        // 'ja'          => ['name' => 'Japanese',                'script' => 'Jpan', 'native' => '日本語', 'regional' => 'ja_JP', 'flag' => '🇯🇵'],
        // 'zh'          => ['name' => 'Chinese (Simplified)',                'script' => 'Hans', 'native' => '简体中文', 'regional' => 'zh_CN', 'flag' => '🇨🇳'],
    ],

    // Automatically determine locale from browser (https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Language)
    // on first call if it's not defined in the URL. Redirect user to computed localized url.
    //
    // The locale will be stored in session and only be computed from browser
    // again if the session expires.
    //
    // If false, system will take app.php locale attribute

    'useAcceptLanguageHeader' => env('ENABLE_LANG_SWITCH', true),


    // Save the language preferences for an authenticated user in the database.
    // Apply this preference for the auth user for every session.
    'useUserLanguagePreference' => env('ENABLE_LANG_SWITCH', true),
];
