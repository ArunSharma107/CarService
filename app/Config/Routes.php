<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('city/(:num)', 'Home::featuredCity/$1');

$routes->get('signin', 'Home::userSignin');

$routes->get('signup/(:num)', 'Home::signup/$1');

$routes->post('user-signup', 'Home::userSignup');

$routes->get('admin-signin', 'Admin::index');
$routes->post('admin-signin', 'Admin::adminSignin');
$routes->get('admin-dashboard', 'Admin::adminDashboard');

$routes->post('admin-add-countries', 'Admin::addCountriesInDb');
$routes->get('admin-view-countries', 'Admin::viewCountries');
$routes->get('admin-countries-data', 'Admin::countriesInDB');
$routes->get('admin-fetch-country/(:num)', 'Admin::fetchCountry/$1');
$routes->post('admin-update-countries', 'Admin::updateCountriesInDb');
$routes->get('admin-delete-country/(:num)', 'Admin::deleteCountryInDb/$1');

$routes->get('admin-view-cities', 'Admin::viewCities');
$routes->get('admin-country-list', 'Admin::countryList');
$routes->post('admin-add-city', 'Admin::addCityInDb');
$routes->get('admin-city-data', 'Admin::citiesInDB');
$routes->get('admin-fetch-city/(:num)', 'Admin::fetchCity/$1');
$routes->post('admin-update-city', 'Admin::updateCityInDb');
$routes->get('admin-delete-city/(:num)', 'Admin::deleteCityInDb/$1');

$routes->get('admin-edit-profile', 'Admin::editProfile');













$routes->get('admin-logout', 'Admin::adminLogout');



 

