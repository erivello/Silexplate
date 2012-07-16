<?php

namespace Silexplate\Composer;

use Composer\Script\Event;

/**
 * EventHandler
 */
class EventHandler
{
    /**
     * Setting up permissions of cache and logs directories
     *
     * @param Event $event
     */
    public static function postInstall(Event $event)
    {
        chmod('app/cache', 0777);
        chmod('app/logs',  0777);
    }
}
