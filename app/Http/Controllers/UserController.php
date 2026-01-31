<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use finfo;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * * Hiển thị danh sách tài nguyên.
     */
    public function index()
    {
        $q = request()->query('q');
        $users = User::latest();
        if ($q) {
            $users->where(function ($query) use ($q) {
                $query->where('name', 'like', '%' . $q . '%');
                $query->orwhere('email', 'like', '%' . $q . '%');
            });
        }
        return response()->json(
            [
                'succes' => true,
                'data' => $users->paginate(2),
                'message' => 'lay du lieu nguoi dung thanh cong'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     * * Hiển thị biểu mẫu tạo tài nguyên mới.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * Lưu trữ tài nguyên vừa tạo vào kho lưu trữ.
     * Them
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated(); //Chỉ lấy những field đã khai báo trong rules
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        return response()->json(
            [
                'succes' => true,
                'data' => $user,
                'message' => 'tao nguoi dung thanh cong'
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     * Hiển thị tài nguyên được chỉ định.
     */
    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json(
                [
                    'succes' => true,
                    'data' => $user,
                    'message' => 'lay du lieu nguoi dung thanh cong'
                ]
            );
        } else {
            return response()->json(
                [
                    'succes' => false,
                    'message' => 'khong co nguoi dung '
                ]
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     * Hiển thị biểu mẫu để chỉnh sửa tài nguyên được chỉ định.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * * Cập nhật tài nguyên được chỉ định trong bộ nhớ.
     */
    public function update(UserRequest $request, string $id)
    {

        $user = User::find($id);

        if (!$user) {
            return response()->json(
                [
                    'succes' => false,
                    'message' => 'khong co nguoi dung'
                ],
                404
            );
        }

        $data = $request->validated();

        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);

        return response()->json(
            [
                'succes' => true,
                'data' => $user,
                'message' => 'cap nhat thanh cong'
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     * * Xóa tài nguyên được chỉ định khỏi bộ nhớ.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(
                [
                    'succes' => false,
                    'messase' => 'Khong tim thay user'

                ],
                404
            );
        }
        $user->delete();
        return response()->json(
            [
                'succes' => true,
                'messase' => 'Xoa User thanh cong'

            ]
        );
    }
}
