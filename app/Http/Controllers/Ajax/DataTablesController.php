<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class DataTablesController extends Controller
{

    public function categoriesList(Request $request) {

        // Create Builder
        $builder = Category::whereNotNull('id');
        $recordsTotal = $builder->count();

        /*
        |--------------------
        | Filter
        |--------------------
        */
        // Search
        if ($request->has('search'))
            $builder->where('name', 'like', '%' . $request->input('search.value') . '%');

        // Order
        if ($request->has('order')) {
            $columns = $request->input('columns');
            $orders = $request->input('order');
            foreach ($orders as $order) {
                $index = (int) $order['column'];
                if (array_has($columns, $index)) {
                    $column = array_get($columns, $index);
                    switch ($column['data']) {
                        case 'name':
                            $builder->orderBy('name', $order['dir']);
                            break;
                        default:
                            break;
                    }
                }
            }
        }

        $recordsFiltered = $builder->count();

        // Count List
        $take = (int) $request->input('length', 10);
        $builder->take($take);
        $skip = (int) $request->input('start', 0);
        $builder->skip($skip);

        /*
        |--------------------
        | Process
        |--------------------
        */
        $data_category = [];
        $categories_list = [];
        foreach ($builder->get() as $category) {
            $data_category['name'] = $category->name;
            $data_category['action'] = '<a class="btn btn-primary no-margin" style="color: #fff;" onclick="editCategory(' . $category->id . ',' . "'" . route('admin.categories.update', $category->id) . "'" . ')">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger no-margin" style="color: #fff;"" onclick="deleteCategory(' . $category->id . ',' . "'" . route('admin.categories.destroy', $category->id) . "'" . ')">
                                            <i class="fa fa-trash"></i>
                                        </a>';
            $categories_list[] = $data_category;
        }

        return response()->json([
            'data' => $categories_list,
            'draw' => $request->input('draw'),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered
        ]);
    }
}
