<?php
class HomeController extends Controller {
    public function index() {
        $model = new HomeModel();
        $data = $model->getData();
        $this->render('home/index', $data);
    }
}
