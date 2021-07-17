<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\PageBlocks;

class PagesController extends Controller
{
    // getPages
    public function getPages(){
        $pages = Pages::all();
        return $pages;
        
    }
    public function getBlocks($pages_id){
        $blocks = PageBlocks::where('pages_id',$pages_id)->get();
        return $blocks;

    }
}

