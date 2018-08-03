<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Vacancy;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
    if (request()->tag) {
      $posts = Post::with('tags')->whereHas('tags', function($query){
        $query->where('id', request()->tag);
      })->get();
      $tags = Tag::all();
    } else {
      $tags = Tag::all();
      $posts = Post::orderBy('id', 'asc')->paginate(10);
    }

    return view('pages.index')->withPosts($posts)->withTags($tags);
  }

  public function aboutus()
  {
    $employees = Employee::orderBy('id', 'asc')->paginate(9);
    $vacancies = Vacancy::orderBy('id', 'asc')->paginate(3);
    return view('pages.about_us')->withEmployees($employees)->withVacancies($vacancies);
  }

  public function whatwedo()
  {
    return view('pages.whatwedo');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show(Vacancy $vacancy)
  {
    //return the sigle vacancy as resource
    return view('pages.vacancy')->withVacancy($vacancy);
  }

  public function vacancies()
  {
    $vacancies = Vacancy::orderBy('id', 'asc')->paginate(5);
    return view('pages.vacancies')->withVacancies($vacancies);
  }

  public function search(Request $request)
  {
    $query = $request->input('query');
    $posts = Post::where('title', 'like', "%$query%")->get();
    return view('pages.search-results')->with('posts', $posts);
  }
}
