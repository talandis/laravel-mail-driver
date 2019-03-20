<?php
namespace Talandis\LaravelMailDriver;

use Talandis\LaravelMailDriver\Transport\MailTransport as BaseMailTransport;
use \Swift_DependencyContainer;

class MailTransport extends BaseMailTransport
{
    /**
     * Create a new MailTransport, optionally specifying $extraParams.
     *
     * @param string $extraParams
     */
    public function __construct($extraParams = '-f%s')
    {
        call_user_func_array(
            array($this, '\Talandis\LaravelMailDriver\Transport\MailTransport::__construct' ),
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('transport.mail')
        );

        $this->setExtraParams($extraParams);
    }

    /**
     * Create a new MailTransport instance.
     *
     * @param string $extraParams To be passed to mail()
     *
     * @return self
     */
    public static function newInstance($extraParams = '-f%s')
    {
        return new self($extraParams);
    }
}
