<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class NewsController extends Controller
{
    public function index1(){
        return view('home');
    }
    public function index(){
        $news=News::all();
        return view('news.index',['news'=>$news]);


    }
    public function create(){
    return view('news.create');

    }
  public function store(){
      \request()->validate([
          'title'=>'required',
          'content' => 'required',
          'author_id'=> 'required'
      ]);
      News::create([
          'title' => \request('title'),
          'content' => \request('content'),
          'author_id' => \request('author_id'),
          'preview' => \request('preview')

      ]);
      return redirect('/news');

  }

    public function edit(News $news){

        return view('news.edit',['news'=>$news]);

    }


    public function update(News $news){
        \request()->validate([
                'title'=>'required',
                'content' => 'required'
            ]);
        $news->update([
            'title'=>\request('title'),
            'content' => \request('content')
        ]);
    return redirect('/news');

    }
    public function destroy(News $news){
        $news->delete();
        return redirect('/news');

    }

}
