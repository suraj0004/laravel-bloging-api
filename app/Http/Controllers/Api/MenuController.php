<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Page;
use App\Models\Category;
use DB;

class MenuController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return response()->json([
            "success" => true,
            "data" => $pages,
        ], 200);
    }

    public function getCategoryPosts($page = null)
    {
        $all_pages = Page::all()->toArray();
        if (empty($all_pages)) {
            return response()->json([
                "success" => false,
                "message" => "No pages found. You must create at least one page with homepage layout.",
            ], 200);

        }
        if (is_null($page)) {
            $page = Page::where('template', 'home')->where('status', '=', 1)->first();
            $data = collect($page)->map(function ($x) {return (array) $x;})->toArray();
            if (empty($data)) {
                return response()->json([
                    "success" => false,
                    "message" => "Please create template Thanks!",
                ], 200);
            } else {
                $rnews = News::orderBy('id', 'desc')->paginate(4);
                $result = DB::table('homepages')->where(['page_id' => $data['id'][0]])->get();
                $datahome = collect($result)->map(function ($x) {return (array) $x;})->toArray();
                $resultnews = DB::table('news')->whereIn('id', explode(",", $datahome[0]['news']))->get();
                $resultbnews = DB::table('news')->whereIn('id', explode(",", $datahome[0]['bnews']))->get();
                $resulthead = DB::table('news')->whereIn('id', explode(",", $datahome[0]['heading']))->get();
                $resultmnews = DB::table('news')->whereIn('id', explode(",", $datahome[0]['mpost']))->get();
                $resultnnews = DB::table('news')->whereIn('id', explode(",", $datahome[0]['npost']))->get();
                $resultinews = DB::table('news')->whereIn('id', explode(",", $datahome[0]['ipost']))->get();
                $resultsnews = DB::table('news')->whereIn('id', explode(",", $datahome[0]['spost']))->get();
                $resultpnews = DB::table('news')->whereIn('id', explode(",", $datahome[0]['popular_post']))->get();
                return response()->json(
                    [
                        "success" => true,
                        "data" => [
                            'news' => $resultnews,
                            'bnews' => $resultbnews,
                            'rnews' => $rnews,
                            'heading' => $resulthead,
                            'mpost' => $resultmnews,
                            'npost' => $resultnnews,
                            'ipost' => $resultinews,
                            'spost' => $resultsnews,
                            'ppost' => $resultpnews,
                            'vtitle' => $datahome[0]['vtitle'],
                        ],
                    ], 200);
            }

        } else {
            $page1 = Page::where('slug', $page)->get();
            $pageslug = collect($page1)->map(function ($x) {return (array) $x;})->toArray();
            if (empty($pageslug)) {
                return response()->json([
                    "success" => false,
                    "message" => "Please create template Thanks!",
                ], 200);
            } else {

                if ($page1[0]->template == 'home') {return redirect('/');} else {
                    $categroies = Category::where('cat_title', $page)->select('cat_id')->get();
                    $categroies1 = collect($categroies)->map(function ($x) {return (array) $x;})->toArray();

                    if (empty($categroies1)) {
                        return response()->json([
                            "success" => false,
                            "message" => "Please Select or create categories for this page!.",
                        ], 200);
                    } else {
                        $cat_id = $categroies[0]->cat_id;
                        $newsall = News::where('cat_id', 'like', '%' . $cat_id . '%')->select('cat_id', 'id')->get();
                        $catfilterid = array();
                        $catfilterid1 = array();
                        foreach ($newsall as $n) {
                            $newscatv = explode(",", $n->cat_id);

                            foreach ($newscatv as $nv) {
                                if ($cat_id == $nv) {$catfilterid['id'] = $n->id;
                                    $catfilterid1[] = $catfilterid['id'];}

                            }
                        }
                        $allcat = News::whereIn('id', $catfilterid1)->get();

                        $rnews = News::orderBy('id', 'desc')->paginate(4);
                        return response()->json([
                            "success" => true,
                            "data" => [
                                'rnews' => $rnews,
                                'page' => $page1,
                                'allpost' => $allcat,
                            ],
                        ], 200);

                    }
                }

            }
        }
    }
}
