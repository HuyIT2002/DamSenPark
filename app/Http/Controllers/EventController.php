<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use Illuminate\Http\Request;
use App\Models\PostModel;

class EventController extends Controller
{
    public function index()
    {
        // Lấy 8 bài viết mới nhất
        $events = EventModel::orderBy('created_at', 'desc')->take(8)->get();

        $postsWithParentId3 = PostModel::whereHas('category', function ($query) {
            $query->where('category_id', 1);
        })->with(['categoriesChild', 'category'])
            ->get();
        return view('layouts.sukien.su-kien', compact('events', 'postsWithParentId3'));
    }
}
