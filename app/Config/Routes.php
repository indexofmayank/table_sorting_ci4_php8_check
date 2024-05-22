<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('member/', 'MemberController::index');
$routes->get('member-table', 'MemberController::index');