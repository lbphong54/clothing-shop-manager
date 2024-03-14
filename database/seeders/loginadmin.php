<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controller\AdminController;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class loginadmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new Admin();
        $user->ten_dang_nhap='admin';
        $user->mat_khau=Hash::make('123456');      
        $user->save();
        echo('them admin thanh cong ');
    }
}
