<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/consultation' => [[['_route' => 'consultation_index', '_controller' => 'App\\Controller\\ConsultationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/consultation/new' => [[['_route' => 'consultation_new', '_controller' => 'App\\Controller\\ConsultationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/course-program' => [[['_route' => 'course_program_index', '_controller' => 'App\\Controller\\CourseProgramController::index'], null, ['GET' => 0], null, true, false, null]],
        '/course-program/new' => [[['_route' => 'course_program_new', '_controller' => 'App\\Controller\\CourseProgramController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/duty-schedule' => [[['_route' => 'duty_schedule_index', '_controller' => 'App\\Controller\\DutyScheduleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/duty-schedule/new' => [[['_route' => 'duty_schedule_new', '_controller' => 'App\\Controller\\DutyScheduleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/patient' => [[['_route' => 'patient_index', '_controller' => 'App\\Controller\\PatientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/patient/new' => [[['_route' => 'patient_new', '_controller' => 'App\\Controller\\PatientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/personnel' => [[['_route' => 'personnel_index', '_controller' => 'App\\Controller\\PersonnelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/personnel/new' => [[['_route' => 'personnel_new', '_controller' => 'App\\Controller\\PersonnelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/student' => [[['_route' => 'student_index', '_controller' => 'App\\Controller\\StudentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/student/new' => [[['_route' => 'student_new', '_controller' => 'App\\Controller\\StudentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/co(?'
                    .'|nsultation/([^/]++)(?'
                        .'|(*:70)'
                        .'|/(?'
                            .'|edit(*:85)'
                            .'|delete(*:98)'
                        .')'
                    .')'
                    .'|urse\\-program/([^/]++)(?'
                        .'|(*:132)'
                        .'|/(?'
                            .'|edit(*:148)'
                            .'|delete(*:162)'
                        .')'
                    .')'
                .')'
                .'|/duty\\-schedule/([^/]++)(?'
                    .'|(*:200)'
                    .'|/(?'
                        .'|edit(*:216)'
                        .'|delete(*:230)'
                    .')'
                .')'
                .'|/p(?'
                    .'|atient/([^/]++)(?'
                        .'|(*:263)'
                        .'|/(?'
                            .'|edit(*:279)'
                            .'|delete(*:293)'
                        .')'
                    .')'
                    .'|ersonnel/([^/]++)(?'
                        .'|(*:323)'
                        .'|/(?'
                            .'|edit(*:339)'
                            .'|delete(*:353)'
                        .')'
                    .')'
                .')'
                .'|/student/([^/]++)(?'
                    .'|(*:384)'
                    .'|/(?'
                        .'|edit(*:400)'
                        .'|delete(*:414)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:441)'
                    .'|/(?'
                        .'|edit(*:457)'
                        .'|delete(*:471)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'consultation_show', '_controller' => 'App\\Controller\\ConsultationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        85 => [[['_route' => 'consultation_edit', '_controller' => 'App\\Controller\\ConsultationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        98 => [[['_route' => 'consultation_delete', '_controller' => 'App\\Controller\\ConsultationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        132 => [[['_route' => 'course_program_show', '_controller' => 'App\\Controller\\CourseProgramController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        148 => [[['_route' => 'course_program_edit', '_controller' => 'App\\Controller\\CourseProgramController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        162 => [[['_route' => 'course_program_delete', '_controller' => 'App\\Controller\\CourseProgramController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        200 => [[['_route' => 'duty_schedule_show', '_controller' => 'App\\Controller\\DutyScheduleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'duty_schedule_edit', '_controller' => 'App\\Controller\\DutyScheduleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        230 => [[['_route' => 'duty_schedule_delete', '_controller' => 'App\\Controller\\DutyScheduleController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        263 => [[['_route' => 'patient_show', '_controller' => 'App\\Controller\\PatientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'patient_edit', '_controller' => 'App\\Controller\\PatientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        293 => [[['_route' => 'patient_delete', '_controller' => 'App\\Controller\\PatientController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        323 => [[['_route' => 'personnel_show', '_controller' => 'App\\Controller\\PersonnelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        339 => [[['_route' => 'personnel_edit', '_controller' => 'App\\Controller\\PersonnelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [[['_route' => 'personnel_delete', '_controller' => 'App\\Controller\\PersonnelController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        384 => [[['_route' => 'student_show', '_controller' => 'App\\Controller\\StudentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => 'student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        414 => [[['_route' => 'student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        441 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        457 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        471 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
