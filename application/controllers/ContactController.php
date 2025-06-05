<?php
class ContactController extends Controller {
    public function index() {
        $model = new ContactModel();
        $data = $model->getData();
        $this->render('contact/index', $data);
    }
}
