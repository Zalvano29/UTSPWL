<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $role = session()->get('role');

        if (!$role) {
            return redirect()->to('/login');
        }

        $arguments = (array) $arguments;

        if (in_array('admin', $arguments) && $role !== 'admin') {
            return redirect()->to('/user');
        }

        if (in_array('user', $arguments) && $role !== 'user') {
            return redirect()->to('/admin');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}

