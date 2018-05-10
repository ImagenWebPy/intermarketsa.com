<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->description = "";
        $this->view->keywords = "";
        $this->view->title = TITLE . 'Inicio';
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

}
