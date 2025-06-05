<?php
class View {
    protected $content;

    public function generate($content, $params = []) {
        extract($params);
        include 'views/layout.php';
    }
}
