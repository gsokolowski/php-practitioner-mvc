<?php


use App\Core\DI;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;

DI::bind('config', require 'config.php');

DI::bind('foo', 'bar');

DI::bind('database',  new QueryBuilder(
    Connection::make(DI::get('config')['database'])
));

DI::bind('pdo', Connection::make(DI::get('config')['database']));


/***
 *
 * Helper Functions view and redirect
 * loaded by bootstrap
 * - it makes them public and accessable from anywhere
 *
*/

function view($viewName, $data = []) {

    // if ['name' => 'Joe', 'age' => 25] and this is pasted to vew then extract will make this $name = 'Joe' and $age = 25
    // extract is oposit to compact

    extract($data);
    return require "app/views/{$viewName}.view.php";
}

function redirect($path) {

    header("Location: /{$path}");
}