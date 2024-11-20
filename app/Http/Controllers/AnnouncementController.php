<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Guzzle\Client;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class AnnouncementController extends Controller
{
    public function createAnnouncement ()
    {
        return view('announcements.create');
    }
    
    
    public function showAnnouncement(Announcement $announcement){
        
        return view('announcements.show', compact('announcement'));
    }
    
    public function showAll (){

        // https://www.tecnocasa.it/annunci/immobili/molise/campobasso/termoli.html

        $response = Http::get('https://www.tecnocasa.it/annunci/immobili/molise/campobasso/termoli.html');
        $html = $response->body();

        $crawler = new Crawler($html);

        $data = $crawler->filter('template[slot="estate-cards"]')->each(function (Crawler $node, $i) { 
            return [
                 'title' => $node->filter('template[slot="estate-title"]')->text(),
                  'subtitle' => $node->filter('template[slot="estate-subtitle"]')->text(),
                   'price' => $node->filter('template[slot="estate-price"]')->text(),
                 ]; });
    
       $announcement= Announcement::create([
            'title' => $data[0]['title'],
            'body' => $data[0]['subtitle'],
            'price' => (float)$data[0]['price'],
            'category_id' => 1,
        ]);
        
        //$announcements = Announcement::where('is_accepted', true)->orderBy('id', 'DESC')->paginate(6);
        
        return view('announcements.show-all', compact('announcement'));
    }
}
