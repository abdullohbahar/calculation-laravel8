<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Respondent;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BusinessResponseController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Respondent::query()
                ->with('answers')
                ->whereHas('answers', function ($query) {
                    $query->where('type', 'Business');
                })
                ->orderBy('created_at', 'desc');

            return Datatables::of($query)
                ->addColumn('score', function ($item) {
                    return $item->answers->sum('answer');
                })
                ->rawColumns(['score'])
                ->make();
        }

        $data = [
            'active' => 'Business',
        ];

        return view('admin.business-response.index', $data);
    }
}
