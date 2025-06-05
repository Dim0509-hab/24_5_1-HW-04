<?php
abstract class Controller {
    protected $model;
    protected $view;

    public function __construct() {
        $this->view = new View();
    }

    protected function render($view, $data = []) {
        $this->view->generate($view, $data);
    }
}
