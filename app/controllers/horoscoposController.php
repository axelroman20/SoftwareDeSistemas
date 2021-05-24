<?php

class horoscoposController extends Controller {
    function __construct() {
        
    }

    function index() {
        $data = ['title' => 'Horoscopos'];
        View::render('horoscopos', $data);
    }

    //---------------------------//
    function home() {
        Redirect::to('home');
    }
    //---------------------------//


}