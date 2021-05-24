<?php

class compiladoresController extends Controller {
    function __construct() {
        
    }

    function index() {
        $data = ['title' => 'Compiladores'];
        View::render('compiladores', $data);
    }

    //---------------------------//
    function home() {
        Redirect::to('home');
    }
    //---------------------------//


}