<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Article;
use App\ArticleCategory;
use App\User;
use App\Photo;
use App\stop;
use App\PhotoAlbum;

class DashboardController extends AdminController {

    public function __construct()
    {
        parent::__construct();
        view()->share('type', '');
    }

	public function index()
	{
        $title = "Dashboard";

        $news = Article::count();
        $newscategory = ArticleCategory::count();
        $users = User::count();
        $photo = Photo::count();
        $photoalbum = PhotoAlbum::count();
        $stop = stop::count();
		return view('admin.dashboard.index',  compact('title','news','stop','newscategory','photo','photoalbum','users'));
	}
}