/**
 * Created by xavierjohnson on 11/1/14.
 */
angular.module('MainApp')
    .config(function($stateProvider, $urlRouterProvider) {

        // Ionic uses AngularUI Router which uses the concept of states
        // Learn more here: https://github.com/angular-ui/ui-router
        // Set up the various states which the app can be in.
        // Each state's controller can be found in controllers.js
        $stateProvider

            /*.state('page', {
                url: "/home",
                abstract: true,
                templateUrl: "modules/home_item_list/views/index.html",
                action: 'home_item_list.homeItemListCtrl'
            })*/

            // setup an abstract state for the tabs directive
            .state('tab', {
                url: "/tab",
                abstract: true,
                templateUrl: "templates/tabs.html"
            })

            // Each tab has its own nav history stack:

            .state('tab.dash', {
                url: '/dash',
                views: {
                    'tab-dash': {
                        templateUrl: 'templates/tab-dash.html',
                        controller: 'DashCtrl'
                    }
                }
            })

            .state('tab.friends', {
                url: '/friends',
                views: {
                    'tab-friends': {
                        templateUrl: 'templates/tab-friends.html',
                        controller: 'FriendsCtrl'
                    }
                }
            })
            .state('tab.friend-detail', {
                url: '/friend/:friendId',
                views: {
                    'tab-friends': {
                        templateUrl: 'templates/friend-detail.html',
                        controller: 'FriendDetailCtrl'
                    }
                }
            })

            .state('tab.account', {
                url: '/account',
                views: {
                    'tab-account': {
                        templateUrl: 'templates/tab-account.html',
                        controller: 'AccountCtrl'
                    }
                }
            })

            .state('tab.home', {
                url: '/',
                views: {
                    'tab-home': {
                        templateUrl: 'modules/home_item_list/views/home.html',
                        controller: 'DashboardApp.DashboardCtrl'
                    }
                }
            });

        // if none of the above states are matched, use this as the fallback
        $urlRouterProvider.otherwise('/tab/dash');

    });
    /*.config(
        ['$routeProvider',
            function($routeProvider) {
                $routeProvider
                    .when('/', {
                        templateUrl: 'modules/dashboard/views/index.html',
                        controller: 'DashboardApp.DashboardCtrl'
                    })
            }
        ]
    )*/
    //)}

