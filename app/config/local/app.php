<?php

return array(

    'url' => 'http://craigslistx.local',

    'timezone' => 'UTC',

    'key' => 'rpHcn6xMl344qBGma0sdH6Rav66GDE1C',

    'providers' => append_config( array(

        /* Uncomment for use in development */
        'Way\Generators\GeneratorsServiceProvider', // Generators
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider', // IDE Helpers

        )
    ),

);