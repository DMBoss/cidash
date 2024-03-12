<?php

use CodeIgniter\Router\RouteCollection;


// Auth Routes
//$routes->get('/', 'Home::index');

$routes->get('/auth/login', 'Auth::login');
