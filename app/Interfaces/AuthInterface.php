<?php

namespace App\Interfaces;

interface AuthInterface
{
    public function login($request = NULL);

    public function logout();
}
