<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
        'title' => 'Postboard',
        'description' => 'Simple postboard built on custom MVC PHP framework'
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About This App',
        'description' => 'Members-only App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }
  }



  