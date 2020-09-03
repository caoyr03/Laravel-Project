<?php
use App\Sermons;
 
class ArticleController extends Controller
{
    public function list()
    {
        $sermons = Sermons::all();
        return view('index', compact('sermons'));   
    }
}