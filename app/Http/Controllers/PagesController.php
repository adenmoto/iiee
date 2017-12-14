<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   /* public function index(){
        return view ('pages.index');
    }
    
     public function about(){
        return view ('pages.about');
    }
    
      public function services(){
          $data = array(
            'title' => 'Services',
              'services' => ['Web Design', 'Programming']
          );
          
        return view ('pages.services')->with($data);
    }*/
    
    public function index(){
        return view ('IEEE.index');
    }
    
    //about page
    public function about(){
        return view ('IEEE.about.about');
    } 
    public function vision(){
        return view ('IEEE.about.vision');
    }
    public function codeethics(){
        return view ('IEEE.about.codeethics');
    }
    public function objectives(){
        return view('IEEE.about.objectives');
    }
    
    //issuances page
    public function issuances(){
        return view('IEEE.issuances.issuances');
    }
}
