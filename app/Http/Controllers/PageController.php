<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function LoadContent($contentId)
    {
        switch ($contentId) {
            case 'content1':
                return view('CONTENTS.content2'); 
            case 'content2':
                return view('contents.content2');  
            case 'content3':
                return view('contents.content3');  
            default:
                return response('Content not found', 404);
        }
    }
}
