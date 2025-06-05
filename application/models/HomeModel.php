<?php
class HomeModel extends Model {
    public function getData() {
        return [
            'title' => 'Главная страница',
            'content' => 'Добро пожаловать на мой сайт!'
        ];
    }
}
