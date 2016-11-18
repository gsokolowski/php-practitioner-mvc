<?php

namespace App\Controllers;

use App\Core\DI;
use App\Models\User;

class UsersController {

    public function index()
    {
        // Get all users (Two ways)

        // 1. Through QueryBuilder->selectAll('users');
        $users = DI::get('database')->selectAll('users');

        // 2. Through Model User - you need to pass pdo from DI - have a look to DI::bind in bootstrap
        $user = new User(DI::get('pdo'));
        $users = $user->getAll();

        return view('users', compact( 'users' )); // 'users' not compact( $users )
    }

    public function store(){

        $_POST['age'] = 31;

        DI::get('database')->insert('users', [
            'name' => $_POST['name'],
            'age' => $_POST['age']
        ]);

        return redirect('users');

    }
}