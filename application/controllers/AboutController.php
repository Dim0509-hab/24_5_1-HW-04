<?php
class AboutController extends Controller {
    public function index() {
        $model = new AboutModel();
        $data = $model->getData();
        $this->render('about/index', $data);
    }
}
