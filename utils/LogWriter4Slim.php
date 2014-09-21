<?php namespace Miyagiiweb\utils;

class LogWriter4Slim {
    public function write($message, $level) {
        syslog(LOG_INFO, $message);
    }
}