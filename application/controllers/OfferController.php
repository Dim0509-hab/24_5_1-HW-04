<?php
class OfferController extends Controller {
    public function index() {
        $model = new OfferModel();
        $data = $model->getData();
        $this->render('offer/index', $data);
    }
}
