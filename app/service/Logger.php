<?php
namespace App\Service;

class Logger {
    public function log($message) {
        return '[logger]: '. $message;
    }
}