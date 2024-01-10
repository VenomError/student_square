<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {


        return view(
            'admin.dashboard',
            [
                'title' => 'Dashboard',
            ]

        );
    }
    public function user()
    {
        return view(
            'admin.database.daftarUser',
            [
                'title' => 'Daftar User',
                'users' => User::all(),
            ]

        );
    }
    public function admin()
    {
        return view(
            'admin.database.daftarAdmin',
            [
                'title' => 'Daftar Admin',
            ]

        );
    }
}
