<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Admin Panel',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Mosquito</b>',

//    'logo_mini' => '<b>M</b>osq',
    'logo_mini' => '
<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTcuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMi4wMDMgNTEyLjAwMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyLjAwMyA1MTIuMDAzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxwYXRoIGQ9Ik0zNjMuMTc3LDMwNS43NjZjLTIuMjQyLTMuMDgzLTUuNTY2LTguODQyLTcuMTE0LTEyLjMyNGwtMjUuNTAxLTU3LjM3OWMtMi4yODQtNS4xNC03LjI2NS0xMS43MjktMTEuNTg0LTE1LjMyOCAgbC0xNy44NTItMTQuODc3YzguNTk5LDEuMjI1LDE4LjAwNCwyLjE0NCwyNi44NzYsMi4xNDRjMjQuOTc0LDAsODIuMjg3LTE0Ljk3Myw5My42NTctMjYuMzQzYzYuOTYzLTYuOTY0LDUuMjUtMTMuNjY2LDQuMTktMTYuMjI1ICBjLTMuNTM2LTguNTM3LTE1Ljg3My0xMy40MzMtMzMuODQ3LTEzLjQzM2MtMTIuNTEzLDAtNDMuODYyLDcuMzE1LTc0LjE3OSwxNC4zOTFjLTEzLjY2MSwzLjE4OC0yOC42MDMsNi42NzQtMzcuODIxLDguNDQxdi02LjgzMiAgYzAtMS4xMy0wLjA4NC0yLjI0LTAuMjM2LTMuMzI5bDI5LjQ5Mi0xNy42OTVjNi4yMjYtMy43MzUsMTAuNzQ0LTExLjcxNiwxMC43NDQtMTguOTc3di0zMmMwLTIuOTczLDEuNDQ2LTguMTk0LDIuOTc2LTEwLjc0NCAgbDQzLjg4NC03My4xNGMyLjI3My0zLjc4OSwxLjA0NS04LjcwMy0yLjc0NC0xMC45NzdjLTMuNzg5LTIuMjcxLTguNzAzLTEuMDQ1LTEwLjk3NiwyLjc0NGwtNDMuODg0LDczLjE0MSAgYy0yLjk5Niw0Ljk5NC01LjI1NiwxMy4xNTItNS4yNTYsMTguOTc2djMyYzAsMS41OS0xLjYxMyw0LjQzOC0yLjk3Niw1LjI1NmwtMjguNjcsMTcuMjAyYy0yLjM4NS0yLjIyNS01LjIyLTMuOTctOC4zNTQtNS4wODEgIFY4MC4wMDFjMC00LjQxOC0zLjU4Mi04LTgtOHMtOCwzLjU4Mi04LDh2NjUuMzc2Yy0zLjEzNCwxLjExMi01Ljk3LDIuODU3LTguMzU0LDUuMDgxbC0yOC42Ny0xNy4yMDIgIGMtMS4zNjItMC44MTctMi45NzYtMy42NjYtMi45NzYtNS4yNTZ2LTMyYzAtNS44MjMtMi4yNTktMTMuOTgxLTUuMjU2LTE4Ljk3N2wtNDMuODg0LTczLjE0Yy0yLjI3My0zLjc4OC03LjE4Ny01LjAxNy0xMC45NzYtMi43NDQgIGMtMy43ODksMi4yNzMtNS4wMTcsNy4xODgtMi43NDQsMTAuOTc3bDQzLjg4NCw3My4xMzljMS41MywyLjU1LDIuOTc2LDcuNzcyLDIuOTc2LDEwLjc0NXYzMmMwLDcuMjYxLDQuNTE5LDE1LjI0MSwxMC43NDQsMTguOTc3ICBsMjkuNDkyLDE3LjY5NWMtMC4xNTIsMS4wODktMC4yMzYsMi4xOTktMC4yMzYsMy4zMjl2Ni44MzJjLTkuMjE3LTEuNzY3LTI0LjE1OS01LjI1My0zNy44MTktOC40NDEgIGMtMzAuMzE4LTcuMDc1LTYxLjY2Ny0xNC4zOTEtNzQuMTgxLTE0LjM5MWMtMTcuOTc0LDAtMzAuMzExLDQuODk2LTMzLjg0NiwxMy40MzNjLTEuMDYsMi41NTktMi43NzMsOS4yNjEsNC4xODksMTYuMjI1ICBjMTEuMzcxLDExLjM3LDY4LjY4MywyNi4zNDMsOTMuNjU3LDI2LjM0M2M4Ljg3MiwwLDE4LjI3Ny0wLjkxOSwyNi44NzYtMi4xNDRsLTE3Ljg1MSwxNC44NzZjLTQuMzE5LDMuNi05LjMsMTAuMTg5LTExLjU4NCwxNS4zMjkgIGwtMjUuNTAxLDU3LjM3OWMtMS41NDgsMy40ODItNC44NzMsOS4yNDEtNy4xMTQsMTIuMzI0bC01OS4yOTUsODEuNTNjLTIuNTk5LDMuNTczLTEuODA5LDguNTc2LDEuNzY0LDExLjE3NSAgYzEuNDIxLDEuMDMzLDMuMDY3LDEuNTMxLDQuNjk5LDEuNTMxYzIuNDcyLDAsNC45MTEtMS4xNDMsNi40NzYtMy4yOTZsNTkuMjk1LTgxLjUzYzIuOTE3LTQuMDEyLDYuNzgtMTAuNzA0LDguNzk1LTE1LjIzNiAgbDI1LjUwMS01Ny4zNzljMS4yODEtMi44ODMsNC43ODMtNy41MTcsNy4yMDYtOS41MzVsMTguMzc3LTE1LjMxNGwtMTYuMzg4LDI3LjMxNGMtMi45OTYsNC45OTUtNS4yNTYsMTMuMTUyLTUuMjU2LDE4Ljk3NnY2NCAgYzAsMy4zMjctMS4xOTQsOS4xNDQtMi41MDQsMTIuMjAyTDEyOC42NDgsNTAwLjg1Yy0xLjc0MSw0LjA2MSwwLjE0MSw4Ljc2NCw0LjIwMiwxMC41MDVjMS4wMjgsMC40NCwyLjA5NiwwLjY0OCwzLjE0NywwLjY0OCAgYzMuMTA0LDAsNi4wNTctMS44MTcsNy4zNTctNC44NTFsNjguODQ5LTE2MC42NDZjMi4xNjYtNS4wNTMsMy43OTgtMTMuMDA4LDMuNzk4LTE4LjUwNXYtNjRjMC0yLjk3MywxLjQ0Ni04LjE5NCwyLjk3Ni0xMC43NDQgIGwxMy4wMjQtMjEuNzA3djQ4LjQ1MWMwLDEzLjIzMywxMC43NjYsMjQsMjQsMjRzMjQtMTAuNzY3LDI0LTI0VjIzMS41NWwxMy4wMjQsMjEuNzA2YzEuNTMsMi41NSwyLjk3Niw3Ljc3MiwyLjk3NiwxMC43NDV2NjQgIGMwLDUuNDk1LDEuNjMzLDEzLjQ1LDMuNzk4LDE4LjUwNWw2OC44NDksMTYwLjY0NmMxLjMsMy4wMzMsNC4yNTMsNC44NTEsNy4zNTcsNC44NTFjMS4wNTEsMCwyLjEyLTAuMjA4LDMuMTQ3LTAuNjQ4ICBjNC4wNjEtMS43NDEsNS45NDItNi40NDQsNC4yMDItMTAuNTA1bC02OC44NDgtMTYwLjY0NmMtMS4zMTEtMy4wNjEtMi41MDUtOC44NzctMi41MDUtMTIuMjAzdi02NCAgYzAtNS44MjMtMi4yNTktMTMuOTgxLTUuMjU2LTE4Ljk3N2wtMTYuMzg5LTI3LjMxNGwxOC4zNzgsMTUuMzE1YzIuNDIyLDIuMDIsNS45MjQsNi42NTMsNy4yMDYsOS41MzVsMjUuNTAxLDU3LjM3OSAgYzIuMDE1LDQuNTMyLDUuODc4LDExLjIyNSw4Ljc5NSwxNS4yMzZsNTkuMjk0LDgxLjUzYzEuNTY1LDIuMTUzLDQuMDAzLDMuMjk2LDYuNDc2LDMuMjk2YzEuNjMyLDAsMy4yNzktMC40OTgsNC42OTktMS41MzEgIGMzLjU3My0yLjU5OSw0LjM2My03LjYwMiwxLjc2NC0xMS4xNzVMMzYzLjE3NywzMDUuNzY2eiBNMzIxLjQ1OCwxODEuOTczYzI2LjY3NS02LjIyNSw1OS44NzMtMTMuOTcyLDcwLjU0My0xMy45NzIgIGM5LjY3OCwwLDE1LjE0NywxLjY3OSwxNy42NjEsMi45MDVjLTMuMjA5LDIuMzE1LTE0LjExMyw3LjI1Mi0zMy41NDYsMTIuNjM1Yy0xOC44MzgsNS4yMTktMzcuMjc1LDguNDYtNDguMTE1LDguNDYgIGMtMTEuNTA0LDAtMjQuMzI5LTEuNzY1LTM0LjU5LTMuNjA4QzMwMC44OTYsMTg2Ljc1OSwzMTAuMiwxODQuNiwzMjEuNDU4LDE4MS45NzN6IE0yNTYuMDAxLDE2MC4wMDFjNC40MTEsMCw4LDMuNTg5LDgsOCAgcy0zLjU4OSw4LTgsOHMtOC0zLjU4OS04LThTMjUxLjU5LDE2MC4wMDEsMjU2LjAwMSwxNjAuMDAxeiBNMTM1Ljg4NywxODMuNTQxYy0xOS40MzMtNS4zODMtMzAuMzM3LTEwLjMxOS0zMy41NDYtMTIuNjM0ICBjMi41MTMtMS4yMjgsNy45ODMtMi45MDYsMTcuNjYtMi45MDZjMTAuNjcxLDAsNDMuODY5LDcuNzQ3LDcwLjU0NCwxMy45NzJjMTEuMjYyLDIuNjI4LDIwLjU2OSw0Ljc4OCwyOC4wNTUsNi40MjIgIGMtMTAuMjU0LDEuODQ0LTIzLjA3MywzLjYwNi0zNC42LDMuNjA2QzE3My4xNjEsMTkyLjAwMSwxNTQuNzI1LDE4OC43NiwxMzUuODg3LDE4My41NDF6IE0yNTYuMDAxLDI4OC4wMDFjLTQuNDExLDAtOC0zLjU4OS04LTggIHYtODkuMzc2YzIuNTA0LDAuODg4LDUuMTk1LDEuMzc2LDgsMS4zNzZzNS40OTYtMC40ODgsOC0xLjM3NnYxLjMzMnYwLjAwM3Y4OC4wNDFDMjY0LjAwMSwyODQuNDEyLDI2MC40MTIsMjg4LjAwMSwyNTYuMDAxLDI4OC4wMDEgIHoiIGZpbGw9IiMwMDAwMDAiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
//        'MAIN NAVIGATION',
//            [
//                'text' => 'Blog',
//                'url'  => 'admin/blog',
//                'can'  => 'manage-blog',
//            ],
//            [
//                'text'        => 'Pages',
//                'url'         => 'admin/pages',
//                'icon'        => 'file',
//                'label'       => 4,
//                'label_color' => 'success',
//            ],
        'Main',
            [
                'text'        => 'Products',
                'url'         => 'admin/products',
                'icon'        => 'file',
            ],
            [
                'text'        => 'Orders (in dev)',
                'url'         => 'admin/orders',
                'icon'        => 'shopping-cart',
            ],
        'Settings',[
            'text'        => 'Users',
            'url'         => 'admin/users',
            'icon'        => 'users',
        ],
            [
                'text'        => 'Home Page settings',
                'url'         => 'admin/home/edit',
                'icon'        => 'cog',
            ],
            [
                'text'        => 'Common settings',
                'url'         => 'admin/common/edit',
                'icon'        => 'cog',
            ],
//        'ACCOUNT SETTINGS',
//            [
//                'text' => 'Profile',
//                'url'  => 'admin/settings',
//                'icon' => 'user',
//            ],
//            [
//                'text' => 'Change Password',
//                'url'  => 'admin/settings',
//                'icon' => 'lock',
//            ],
//            [
//                'text'    => 'Multilevel',
//                'icon'    => 'share',
//                'submenu' => [
//                    [
//                        'text' => 'Level One',
//                        'url'  => '#',
//                    ],
//                    [
//                        'text'    => 'Level One',
//                        'url'     => '#',
//                        'submenu' => [
//                            [
//                                'text' => 'Level Two',
//                                'url'  => '#',
//                            ],
//                            [
//                                'text'    => 'Level Two',
//                                'url'     => '#',
//                                'submenu' => [
//                                    [
//                                        'text' => 'Level Three',
//                                        'url'  => '#',
//                                    ],
//                                    [
//                                        'text' => 'Level Three',
//                                        'url'  => '#',
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
//                    [
//                        'text' => 'Level One',
//                        'url'  => '#',
//                    ],
//                ],
//            ],
//        'LABELS',
//            [
//                'text'       => 'Important',
//                'icon_color' => 'red',
//            ],
//            [
//                'text'       => 'Warning',
//                'icon_color' => 'yellow',
//            ],
//            [
//                'text'       => 'Information',
//                'icon_color' => 'aqua',
//            ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
