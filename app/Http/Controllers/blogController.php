<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $blog = DB::table('blog')
            ->where('id', 1)
            ->orWhere('details', null)
            ->get();

        dd($blog);
        $blog = new blog();
        $data['blog'] = $blog->blog();
        $data['page_title'] = 'This is blog page';
        return view('blog',$data);
    }
}
