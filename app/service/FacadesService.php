<?php
namespace APP\Service;

class FacadesService {
    public static function welcome($name) {
        return 'Welcome '. $name. '!';
    }
}