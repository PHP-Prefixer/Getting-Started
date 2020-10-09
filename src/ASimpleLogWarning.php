<?php

namespace Acme;

class ASimpleLogWarning
{
    public function logWarn()
    {
        $log = new \Monolog\Logger('name');
        $log->pushHandler(new \Monolog\Handler\StreamHandler('app.log', \Monolog\Logger::WARNING));
        $log->addWarning('Foo');
    }
}
