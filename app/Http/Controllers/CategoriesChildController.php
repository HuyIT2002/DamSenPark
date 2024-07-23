<?php

namespace App\Http\Controllers;

use App\Models\ParentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesChildController extends Controller
{

    //     public function index()
    //     {
    //         // Thực hiện truy vấn SQL
    //         $data = DB::table('categories_child as cc')
    //             ->leftJoin('categories as c', 'cc.category_id', '=', 'c.category_id')
    //             ->leftJoin('parents as p', function ($join) {
    //                 $join->on('cc.parent_id', '=', 'p.parent_id')
    //                     ->orOn('c.parent_id', '=', 'p.parent_id');
    //             })
    //             ->select(
    //                 'p.parent_id',
    //                 'p.parent_name',
    //                 'c.category_id',
    //                 'c.category_name',
    //                 'cc.name as category_child_name',
    //                 'cc.stt_category',
    //                 'cc.created_at as child_created_at', // Thêm trường created_at của category child
    //                 'c.created_at' // Thêm trường created_at của category
    //             )
    //             ->orderBy('p.parent_id') // Sắp xếp theo parent_id
    //             ->orderBy('c.created_at') // Sắp xếp theo created_at của category
    //             ->orderBy('cc.name')
    //             ->get();

    //         // Chuẩn bị dữ liệu nhóm theo parent_id
    //         $groupedData = [];

    //         foreach ($data as $item) {
    //             $parentId = $item->parent_id;
    //             if (!isset($groupedData[$parentId])) {
    //                 $groupedData[$parentId] = [
    //                     'parent_name' => $item->parent_name,
    //                     'categories' => []
    //                 ];
    //             }
    //             if ($item->category_id) {
    //                 $categoryId = $item->category_id;
    //                 if (!isset($groupedData[$parentId]['categories'][$categoryId])) {
    //                     $groupedData[$parentId]['categories'][$categoryId] = [
    //                         'category_name' => $item->category_name,
    //                         'category_child_names' => [],
    //                         'stt_categories' => [],
    //                         'created_at' => $item->created_at // Lưu trữ created_at để sắp xếp
    //                     ];
    //                 }
    //                 if ($item->category_child_name) {
    //                     $groupedData[$parentId]['categories'][$categoryId]['category_child_names'][] = [
    //                         'name' => $item->category_child_name,
    //                         'stt' => $item->stt_category,
    //                         'created_at' => $item->child_created_at // Lưu trữ created_at để sắp xếp
    //                     ];
    //                 }
    //             } else {
    //                 // Xử lý các mục không có category_id
    //                 if (!isset($groupedData[$parentId]['categories']['no_category'])) {
    //                     $groupedData[$parentId]['categories']['no_category'] = [
    //                         'category_name' => '',
    //                         'category_child_names' => [],
    //                         'stt_categories' => [],
    //                         'created_at' => $item->created_at // Lưu trữ created_at để sắp xếp
    //                     ];
    //                 }
    //                 if ($item->category_child_name) {
    //                     $groupedData[$parentId]['categories']['no_category']['category_child_names'][] = [
    //                         'name' => $item->category_child_name,
    //                         'stt' => $item->stt_category,
    //                         'created_at' => $item->child_created_at // Lưu trữ created_at để sắp xếp
    //                     ];
    //                 }
    //             }
    //         }

    //         // Sắp xếp các categories theo created_at
    //         foreach ($groupedData as &$parent) {
    //             uasort($parent['categories'], function ($a, $b) {
    //                 return strtotime($a['created_at']) - strtotime($b['created_at']);
    //             });

    //             // Sắp xếp các mục con theo created_at
    //             foreach ($parent['categories'] as &$category) {
    //                 usort($category['category_child_names'], function ($a, $b) {
    //                     return strtotime($a['created_at']) - strtotime($b['created_at']);
    //                 });
    //             }
    //         }

    //         return view('layouts.main.main-2', ['groupedData' => $groupedData]);
    //     }

    public function index()
    {
        // Thực hiện truy vấn SQL
        $data = DB::table('categories_child as cc')
        ->leftJoin('categories as c', 'cc.category_id', '=', 'c.category_id')
        ->leftJoin('parents as p', function ($join) {
            $join->on('cc.parent_id', '=', 'p.parent_id')
            ->orOn('c.parent_id', '=', 'p.parent_id');
        })
        ->select(
            'p.parent_id',
            'p.parent_name',
            'c.category_id',
            'c.category_name',
            'cc.categories_child_id', // Thêm trường categories_child_id
            'cc.name as category_child_name',
            'cc.stt_category',
            'cc.created_at as child_created_at', // Thêm trường created_at của category child
            'c.created_at' // Thêm trường created_at của category
        )
        ->orderBy('p.parent_id') // Sắp xếp theo parent_id
            ->orderBy('c.created_at') // Sắp xếp theo created_at của category
            ->orderBy('cc.name')
            ->get();

        // Chuẩn bị dữ liệu nhóm theo parent_id
        $groupedData = [];

        foreach ($data as $item) {
            $parentId = $item->parent_id;
            if (!isset($groupedData[$parentId])) {
                $groupedData[$parentId] = [
                        'parent_name' => $item->parent_name,
                        'categories' => []
                    ];
            }
            if ($item->category_id) {
                $categoryId = $item->category_id;
                if (!isset($groupedData[$parentId]['categories'][$categoryId])) {
                    $groupedData[$parentId]['categories'][$categoryId] = [
                        'category_name' => $item->category_name,
                        'category_child_names' => [],
                        'stt_categories' => [],
                        'created_at' => $item->created_at // Lưu trữ created_at để sắp xếp
                    ];
                }
                if ($item->category_child_name) {
                    $groupedData[$parentId]['categories'][$categoryId]['category_child_names'][] = [
                        'categories_child_id' => $item->categories_child_id, // Thêm categories_child_id
                        'name' => $item->category_child_name,
                        'stt' => $item->stt_category,
                        'created_at' => $item->child_created_at // Lưu trữ created_at để sắp xếp
                    ];
                }
            } else {
                // Xử lý các mục không có category_id
                if (!isset($groupedData[$parentId]['categories']['no_category'])) {
                    $groupedData[$parentId]['categories']['no_category'] = [
                        'category_name' => '',
                        'category_child_names' => [],
                        'stt_categories' => [],
                        'created_at' => $item->created_at // Lưu trữ created_at để sắp xếp
                    ];
                }
                if ($item->category_child_name) {
                    $groupedData[$parentId]['categories']['no_category']['category_child_names'][] = [
                        'categories_child_id' => $item->categories_child_id, // Thêm categories_child_id
                        'name' => $item->category_child_name,
                        'stt' => $item->stt_category,
                        'created_at' => $item->child_created_at // Lưu trữ created_at để sắp xếp
                    ];
                }
            }
        }

        // Sắp xếp các categories theo created_at
        foreach ($groupedData as &$parent) {
            uasort($parent['categories'], function ($a, $b) {
                return strtotime($a['created_at']) - strtotime($b['created_at']);
            });

            // Sắp xếp các mục con theo created_at
            foreach ($parent['categories'] as &$category) {
                usort($category['category_child_names'], function ($a, $b) {
                    return strtotime($a['created_at']) - strtotime($b['created_at']);
                });
            }
        }

        return view('layouts.main.main-2', ['groupedData' => $groupedData]);
}
}