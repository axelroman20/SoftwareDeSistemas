<?php

class car_ligController extends Controller {
    function __construct() {
        
    }

    function index() {
        $data = ['title' => 'Cargadores y Ligadores'];
        View::render('car_lig', $data);
    }

    //---------------------------//
    function home() {
        Redirect::to('home');
    }
    //---------------------------//


}