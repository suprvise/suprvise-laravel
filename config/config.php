<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Suprvise Settings
     |--------------------------------------------------------------------------
     */

    'key' => env('SUPRVISE_KEY'),    // Suprvise key

    /*
     |--------------------------------------------------------------------------
     | Website Identification
     |--------------------------------------------------------------------------
     |
     | This setting enables our API to recognise which website should the data
     | be associated with in your dashboard. Use the same exact url as within
     | the "Health Checks" section (eg: https://example.com).
     |
     | Default value is the current app URL but can be overriden if needed.
     */
    'origin' => env('SUPRVISE_ORIGIN', env('APP_URL')),
];
