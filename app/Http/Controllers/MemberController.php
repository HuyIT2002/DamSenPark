<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ImageModel;
use App\Models\PostModel;

class MemberController extends Controller
{
    public function showMembers()
    {
        $member1 = DB::table('members as m')
            ->join('list_images as li', 'm.images_id', '=', 'li.images_id')
            ->leftJoin('categories_child as cc', 'm.categories_child_id', '=', 'cc.categories_child_id')
            ->where('m.members_id', 1)
            ->select(
                'li.list_images_id',
                'li.image_url',
                'li.title as list_image_title',
                'li.created_at',
                'm.title as member_title',
                'cc.name as category_name'
            )
            ->orderBy('li.created_at', 'desc')
            ->get();



        // Lấy thông tin thành viên cùng với hình ảnh và danh mục cho members_id = 2
        $member2 = DB::table('members as m')
            ->join('list_images as li', 'm.images_id', '=', 'li.images_id')
            ->leftJoin('categories_child as cc', 'm.categories_child_id', '=', 'cc.categories_child_id')
            ->where('m.members_id', 2)
            ->select(
                'li.list_images_id',
                'li.image_url',
                'li.title as list_image_title',
                'li.created_at',
                'm.title as member_title',
                'cc.name as category_name'
            )
            ->orderBy('li.created_at', 'desc')
            ->get();
        $imageByIdDisplay = ImageModel::where('id_display', 1)->first();

        // Lấy hình ảnh được tạo gần đây nhất
        $latestImage = ImageModel::latest()->first();
        $postsWithParentId3 = PostModel::whereHas('category', function ($query) {
            $query->where('category_id', 1);
        })->with(['categoriesChild', 'category'])
            ->get();

        return view('layouts.gioi-thieu.thanh-vien', compact('member1', 'member2', 'imageByIdDisplay', 'latestImage', 'postsWithParentId3'));
    }
}
