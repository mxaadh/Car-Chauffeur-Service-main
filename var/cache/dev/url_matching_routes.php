<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/booking' => [[['_route' => 'app_booking_index', '_controller' => 'App\\Controller\\BookingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/booking/new' => [[['_route' => 'app_booking_new', '_controller' => 'App\\Controller\\BookingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/car' => [[['_route' => 'app_car_index', '_controller' => 'App\\Controller\\CarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/car/new' => [[['_route' => 'app_car_new', '_controller' => 'App\\Controller\\CarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chauffeur' => [[['_route' => 'app_chauffeur_index', '_controller' => 'App\\Controller\\ChauffeurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/chauffeur/new' => [[['_route' => 'app_chauffeur_new', '_controller' => 'App\\Controller\\ChauffeurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/customer' => [[['_route' => 'app_customer_index', '_controller' => 'App\\Controller\\CustomerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/customer/new' => [[['_route' => 'app_customer_new', '_controller' => 'App\\Controller\\CustomerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/feedback' => [[['_route' => 'app_feedback_index', '_controller' => 'App\\Controller\\FeedbackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/feedback/new' => [[['_route' => 'app_feedback_new', '_controller' => 'App\\Controller\\FeedbackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment_index', '_controller' => 'App\\Controller\\PaymentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/payment/new' => [[['_route' => 'app_payment_new', '_controller' => 'App\\Controller\\PaymentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/booking/([^/]++)(?'
                    .'|(*:62)'
                    .'|/edit(*:74)'
                    .'|(*:81)'
                .')'
                .'|/c(?'
                    .'|ar/([^/]++)(?'
                        .'|(*:108)'
                        .'|/edit(*:121)'
                        .'|(*:129)'
                    .')'
                    .'|hauffeur/([^/]++)(?'
                        .'|(*:158)'
                        .'|/edit(*:171)'
                        .'|(*:179)'
                    .')'
                    .'|ustomer/([^/]++)(?'
                        .'|(*:207)'
                        .'|/edit(*:220)'
                        .'|(*:228)'
                    .')'
                .')'
                .'|/feedback/([^/]++)(?'
                    .'|(*:259)'
                    .'|/edit(*:272)'
                    .'|(*:280)'
                .')'
                .'|/payment/([^/]++)(?'
                    .'|(*:309)'
                    .'|/edit(*:322)'
                    .'|(*:330)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [[['_route' => 'app_booking_show', '_controller' => 'App\\Controller\\BookingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_booking_edit', '_controller' => 'App\\Controller\\BookingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        81 => [[['_route' => 'app_booking_delete', '_controller' => 'App\\Controller\\BookingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        108 => [[['_route' => 'app_car_show', '_controller' => 'App\\Controller\\CarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        121 => [[['_route' => 'app_car_edit', '_controller' => 'App\\Controller\\CarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        129 => [[['_route' => 'app_car_delete', '_controller' => 'App\\Controller\\CarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        158 => [[['_route' => 'app_chauffeur_show', '_controller' => 'App\\Controller\\ChauffeurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        171 => [[['_route' => 'app_chauffeur_edit', '_controller' => 'App\\Controller\\ChauffeurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        179 => [[['_route' => 'app_chauffeur_delete', '_controller' => 'App\\Controller\\ChauffeurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        207 => [[['_route' => 'app_customer_show', '_controller' => 'App\\Controller\\CustomerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        220 => [[['_route' => 'app_customer_edit', '_controller' => 'App\\Controller\\CustomerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        228 => [[['_route' => 'app_customer_delete', '_controller' => 'App\\Controller\\CustomerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        259 => [[['_route' => 'app_feedback_show', '_controller' => 'App\\Controller\\FeedbackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'app_feedback_edit', '_controller' => 'App\\Controller\\FeedbackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        280 => [[['_route' => 'app_feedback_delete', '_controller' => 'App\\Controller\\FeedbackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        309 => [[['_route' => 'app_payment_show', '_controller' => 'App\\Controller\\PaymentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'app_payment_edit', '_controller' => 'App\\Controller\\PaymentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        330 => [
            [['_route' => 'app_payment_delete', '_controller' => 'App\\Controller\\PaymentController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
