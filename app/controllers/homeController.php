<?php

class homeController extends Controller {
    function __construct() {
        
    }

    function index() {
        $data = [];
        View::render('main', $data);
    }
}