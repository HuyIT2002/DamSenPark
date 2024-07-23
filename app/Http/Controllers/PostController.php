<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    // public function showThucVat($post_id)
    // {
    //     // Lấy bài viết dựa trên post_id
    //     $latestPost = PostModel::with(['categoriesChild', 'parent'])->find($post_id);

    //     if ($latestPost) {
    //         $categoryName = $latestPost->categoriesChild ? $latestPost->categoriesChild->name : '';
    //         $categoryCreatedAt = $latestPost->categoriesChild ? Carbon::parse($latestPost->categoriesChild->created_at)->format('d/m/Y') : '';
    //         $parentName = $latestPost->parent ? $latestPost->parent->parent_name : '';
    //         $parentCreatedAt = $latestPost->parent ? Carbon::parse($latestPost->parent->created_at)->format('d/m/Y') : '';
    //         $imageUrl = $latestPost->image_url;
    //         $content = $latestPost->content;
    //         $plantName = $latestPost->plant_name;
    //         $created_at = Carbon::parse($latestPost->created_at)->format('d/m/Y');
    //     } else {
    //         $categoryName = '';
    //         $categoryCreatedAt = '';
    //         $parentName = '';
    //         $parentCreatedAt = '';
    //         $imageUrl = '';
    //         $content = '';
    //         $plantName = '';
    //         $created_at = '';
    //     }

    //     // Truyền dữ liệu đến view
    //     return view('layouts.giao-duc-trai-nghiem.thuc-vat', compact('latestPost', 'categoryName', 'categoryCreatedAt', 'parentName', 'parentCreatedAt', 'imageUrl', 'content', 'plantName', 'created_at'));
    // }
    public function showThucVat($categories_child_id)
    {

        $exists = DB::table('categories_child')->where('categories_child_id', $categories_child_id)->exists();
        if (!$exists) {
            abort(404);
        }


        $latestPost = PostModel::where('categories_child_id', $categories_child_id)
            ->with(['categoriesChild', 'parent'])
            ->orderBy('created_at', 'desc')
            ->first();

        // Lấy bài viết hiện tại (post_id của bài viết hiện tại)
        $currentPostId = $latestPost ? $latestPost->posts_id : null;

        // Lấy các bài viết mới nhất, loại bỏ bài viết hiện tại
        $latestPosts = PostModel::where('categories_child_id', $categories_child_id)
            ->where('posts_id', '!=', $currentPostId) // Loại bỏ bài viết hiện tại
            ->with(['categoriesChild', 'parent'])
            ->orderBy('created_at', 'desc') // Sắp xếp từ mới nhất đến cũ nhất
            ->take(8) // Lấy tối đa 8 bài viết
            ->get();
        $postsWithParentId3 = PostModel::whereHas('parent', function ($query) {
            $query->where('parent_id', 3);
        })->with(['categoriesChild', 'parent'])
            ->get();

        if ($latestPost) {
            $categoryName = $latestPost->categoriesChild ? $latestPost->categoriesChild->name : '';
            $categoryCreatedAt = $latestPost->categoriesChild ? Carbon::parse($latestPost->categoriesChild->created_at)->format('d/m/Y') : '';
            $parentName = $latestPost->parent ? $latestPost->parent->parent_name : '';
            $parentCreatedAt = $latestPost->parent ? Carbon::parse($latestPost->parent->created_at)->format('d/m/Y') : '';
            $imageUrl = $latestPost->image_url;
            $content = $latestPost->content;
            $plantName = $latestPost->plant_name;
            $posts_id = $latestPost->posts_id;
            $created_at = Carbon::parse($latestPost->created_at)->format('d/m/Y');
        } else {
            $categoryName = '';
            $categoryCreatedAt = '';
            $parentName = '';
            $parentCreatedAt = '';
            $imageUrl = '';
            $content = '';
            $plantName = '';
            $posts_id  = '';
            $created_at = '';
        }

        return view('layouts.giao-duc-trai-nghiem.post', compact('latestPost', 'latestPosts', 'postsWithParentId3', 'categoryName', 'categoryCreatedAt', 'parentName', 'parentCreatedAt', 'imageUrl', 'content', 'plantName', 'posts_id', 'created_at'));
    }


    public function show($post_id)
    {
        // Tìm bài viết hiện tại theo post_id
        $latestPost = PostModel::where('posts_id', $post_id)
            ->with(['categoriesChild', 'parent'])
            ->first();

        // Kiểm tra nếu bài viết tồn tại
        if (!$latestPost) {
            abort(404); // Nếu không có bài viết với post_id này, trả về lỗi 404
        }

        // Lấy post_id của bài viết hiện tại
        $currentPostId = $latestPost->posts_id;

        // Lấy các bài viết mới nhất, loại bỏ bài viết hiện tại
        $latestPosts = PostModel::where('categories_child_id', $latestPost->categories_child_id)
            ->where('posts_id', '!=', $currentPostId) // Loại bỏ bài viết hiện tại
            ->with(['categoriesChild', 'parent'])
            ->orderBy('created_at', 'desc') // Sắp xếp từ mới nhất đến cũ nhất
            ->take(8) // Lấy tối đa 8 bài viết
            ->get();
        $postsWithParentId3 = PostModel::whereHas('parent', function ($query) {
            $query->where('parent_id', 3);
        })->with(['categoriesChild', 'parent'])
            ->get();
        // Lấy thông tin cần thiết cho view
        $categoryName = $latestPost->categoriesChild ? $latestPost->categoriesChild->name : '';
        $categoryCreatedAt = $latestPost->categoriesChild ? Carbon::parse($latestPost->categoriesChild->created_at)->format('d/m/Y') : '';
        $parentName = $latestPost->parent ? $latestPost->parent->parent_name : '';
        $parentCreatedAt = $latestPost->parent ? Carbon::parse($latestPost->parent->created_at)->format('d/m/Y') : '';
        $imageUrl = $latestPost->image_url;
        $content = $latestPost->content;
        $plantName = $latestPost->plant_name;
        $posts_id = $latestPost->posts_id;
        $created_at = Carbon::parse($latestPost->created_at)->format('d/m/Y');

        return view('layouts.giao-duc-trai-nghiem.post-child', compact('latestPost', 'postsWithParentId3', 'latestPosts', 'categoryName', 'categoryCreatedAt', 'parentName', 'parentCreatedAt', 'imageUrl', 'content', 'plantName', 'posts_id', 'created_at'));
    }
}
