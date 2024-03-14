<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function signup(Request $request)
    {
        // Kiểm tra xem tài khoản đã tồn tại hay chưa
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            return response()->json(['message' => 'Tài khoản đã tồn tại.'], 409);
        }

        // Tạo tài khoản mới
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(['message' => 'Tài khoản đã được tạo thành công.']);
    }

    public function login(Request $request)
    {
        // Xác thực thông tin đăng nhập
        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['message' => 'Thông tin đăng nhập không chính xác.'], 401);
        }

        // Đăng nhập thành công, tạo mã thông báo truy cập (access token)
        $user = auth()->user();
        $token = $user->createToken('access_token')->plainTextToken;

        return response()->json(['token' => $token, 'user' => $user]);
    }
}
