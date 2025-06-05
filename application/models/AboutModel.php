<?php
class AboutModel extends Model {
    public function getData() {
        return [
            'title' => 'О нас',
            'content' => 'Информация о компании...'
        ];
    }
}
