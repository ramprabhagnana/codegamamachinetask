<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Exports\UsersExport;
use App\Imports\NewsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\News;
use App\Models\User;
use Session;


use Auth;

class NewsController extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */


    public function index()
    {
        $news = News::get();



        return view('home', compact('news'));
    }
    public function news_index()
    {

        // dd(Auth::user()->is_admin);

        $news = News::get();
      $isadmin =  User::select('is_admin')->where('id', Auth::user()->id)->first();

        $is_admin = $isadmin->is_admin;
        // dd( $news->is_admin );

        return view('news', compact('news','is_admin'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    // public function export() 
    // {
    //     return Excel::download(new UsersExport, 'users.xlsx');
    // }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function news_import()
    {
        Excel::import(new NewsImport, request()->file('file'));
        Session::flash('success', 'Successfully uploaded ');

        return back();
    }

    public function delete_news($id)
    {

        News::where('id', $id)->delete();


        
        return response()->json('Deleted Successfully');
    }

    public function bookmark_status(Request $request, $id)
    {
        if ($request->is_bookmarked == "save") {

            $value = 1;
            $result ="bookmarked";
        } else {
            $value = 0;
            $result ="bookmark removed";

        }
        $update = array(
            'is_bookmarked' => $value,
        );
        News::where('id', $id)->update($update);

        return response()->json(['data' => [
            'is_bookmarked' => $result,
        ],' Updated successfully.']);
    }
    // return view('news', compact('news'));

}
