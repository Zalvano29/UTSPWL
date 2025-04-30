<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function default()
    {
        return view('auth/login');
    }

    public function genpass() {
        echo password_hash('admin123', PASSWORD_DEFAULT);
        echo "<br>";
        echo password_hash('user123', PASSWORD_DEFAULT);
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $users = [
            'jen' => [
                'id' => 1,
                'username' => 'jen',
                'password' => '$2y$10$b84mC2EkBZeINM0Onzd4Yune8YfUbDJtwMU022TUt04sWu2b16GQG', // password: admin123
                'role' => 'admin',
            ],
            'elen' => [
                'id' => 2,
                'username' => 'elen',
                'password' => '$2y$10$bhlk/UjHqA7g/aIRRDGt1.h/rCmTrAAkUR9M/4CJCylCR5cXPeX8S', // password: user123
                'role' => 'user',
            ],
        ];

        if (array_key_exists($username, $users)) {
            $user = $users[$username];

            if (password_verify($password, $user['password'])) {
                session()->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'logged_in' => true,
                ]);

                if ($user['role'] == 'admin') {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/user');
                }
            }
        }

        return redirect()->to('/login')->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
