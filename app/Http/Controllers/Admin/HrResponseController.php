<?php

namespace App\Http\Controllers\Admin;

use App\Models\Respondent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class HrResponseController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Respondent::query()
                ->with('answers')
                ->whereHas('answers', function ($query) {
                    $query->where('type', 'HR');
                })
                ->orderBy('created_at', 'desc');

            return Datatables::of($query)
                ->addColumn('ya', function ($item) {
                    return $item->answers->where('answer', 'Ya')->count();
                })
                ->addColumn('tidak', function ($item) {
                    return $item->answers->where('answer', 'Tidak')->count();
                })
                ->rawColumns(['ya', 'tidak'])
                ->make();
        }

        $data = [
            'active' => 'HR',
        ];

        return view('admin.hr-response.index', $data);
    }
}
