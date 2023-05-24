<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\News;

class NewsController extends Controller
{
    public function getHeadlines()
    {
        $apiKey = 'ee66273a17f2473f83d1239428a5b3c3'; // Reemplaza con tu propia clave de API

        $response = Http::get("https://newsapi.org/v2/top-headlines", [
            'country' => 'us', // Reemplaza con el país deseado
            'apiKey' => $apiKey,
        ]);

        $articles = $response->json()['articles'];

        foreach ($articles as $article) {
            
            $news = new News();
            $news->title = $article['title'];
            $news->description = $article['description'];
            $news->url = $article['url'];
            
            // ... Agrega otros campos que desees guardar en la base de datos
            $news->save();
            
        }

        // Puedes realizar otras operaciones o redirigir a otra vista según tus necesidades

        return view('news.headlines', ['articles' => $articles]);
    }
    public function showNews()
    {
    $news = News::all();

    return view('news.index', ['news' => $news]);
    }

}
