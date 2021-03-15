<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    public function showDetailNews($news_id)
    {
        $newsDetail=DB::table('news')->where(['id'=>$news_id])->get();
		$rnews=News::orderBy('id','desc')->paginate(4);
       $categories = Category::all()->take(10);
        return response()->json([
            'newsDetail'=>$newsDetail,
            'categories'=>$categories,
            'rnews'=>$rnews
        ], 200);
    }
}
