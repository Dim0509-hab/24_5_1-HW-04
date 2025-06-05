<?php
class DreamController extends Controller {
    public function index() {
        $model = new DreamModel();
        $data = $model->getData();
        $this->render('dream/index', $data);
    }
}
