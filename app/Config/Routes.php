<?php

$routes->get('/activity' , 'Activity::index');
$routes->get('/activity/create' , 'Activity::create');
$routes->post('/activity/store' , 'Activity::store');
