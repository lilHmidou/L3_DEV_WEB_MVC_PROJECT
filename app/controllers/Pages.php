<?php
  class Pages extends Controller {
    private $postModel;

    public function __construct(){
      
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
        'title' => 'AhmedProject',
        'description' => 'Simple social network built during formation on PHP MVC framework'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }
  }