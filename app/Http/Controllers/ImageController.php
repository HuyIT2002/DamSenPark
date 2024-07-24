<?php

namespace App\Http\Controllers;

use App\Models\ImageModel;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function showMImages()
    {
        // Lấy hình ảnh có id_display là 1
        $imageByIdDisplay = ImageModel::where('id_display', 1)->first();

        // Lấy hình ảnh được tạo gần đây nhất
        $latestImage = ImageModel::latest()->first();

        return view('layouts.gioi-thieu.thanh-vien', compact('imageByIdDisplay', 'latestImage'));
    }
}
