<?php

namespace App\Http\Controllers;

use App\Models\HistoryModel;
use Illuminate\Http\Request;
use App\Models\ServiceModel;

class LichSuHinhThanhController extends Controller
{
    // public function index()
    // {

    //     $history = HistoryModel::first();

    //     return view('layouts.gioi-thieu.lich-su-hinh-thanh', [
    //         'banner_image_path' => $history->banner_image_path,
    //         'title' => $history->title,
    //         'description' => $history->description,
    //         'introduction_title' => $history->introduction_title,
    //         'large_image_path' => $history->large_image_path,
    //     ]);
    // }
    // public function service()
    // {
    //     $services = ServiceModel::all(); // Sử dụng Service model
    //     return view('layouts.gioi-thieu.lich-su-hinh-thanh', ['services' => $services]);
    // }

    public function index()
    {
        $history = HistoryModel::first(); // Lấy dữ liệu lịch sử hình thành
        $services = ServiceModel::all();  // Lấy tất cả dịch vụ

        return view('layouts.gioi-thieu.lich-su-hinh-thanh', [
            'banner_image_path' => $history->banner_image_path ?? null,
            'title' => $history->title ?? null,
            'description' => $history->description ?? null,
            'introduction_title' => $history->introduction_title ?? null,
            'large_image_path' => $history->large_image_path ?? null,
            'services' => $services // Truyền dữ liệu dịch vụ vào view
        ]);
    }
}
