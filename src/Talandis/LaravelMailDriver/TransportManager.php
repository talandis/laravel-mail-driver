<?php

namespace Talandis\LaravelMailDriver;

use \Illuminate\Mail\TransportManager as BaseTransportManager;

class TransportManager extends BaseTransportManager
{
    protected function createMailDriver()
    {
        return MailTransport::newInstance();
    }
}
