// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
// 'starter.services' is found in services.js
// 'starter.controllers' is found in controllers.js
//angular.module('starter', ['ionic', 'starter.controllers', 'starter.services'])
// Define all your modules with no dependencies
angular.module('starter', ['ionic', 'starter.controllers', 'starter.services'])
angular.module('checkout', []);
angular.module('home_item_list', []);
angular.module('home_item_single', []);
angular.module('item_single', []);
angular.module('user_items', []);
angular.module('user_profile', []);
angular.module('watchlist_item_single', []);
angular.module('watchlist_list', []);

// Lastly, define your "main" module and inject all other modules as dependencies
angular.module('MainApp',
    [
        'checkout',
        'home_item_list',
        'home_item_single',
        'item_single',
        'user_items',
        'user_profile',
        'watchlist_item_single',
        'watchlist_list',
        'templates-main',
    ]
)

.run(function($ionicPlatform) {
  $ionicPlatform.ready(function() {
    // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
    // for form inputs)
    if(window.cordova && window.cordova.plugins.Keyboard) {
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
    }
    if(window.StatusBar) {
      // org.apache.cordova.statusbar required
      StatusBar.styleDefault();
    }
  });
});
