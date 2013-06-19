<?php

namespace Sly\NotificationPusher\Exception;

use Sly\NotificationPusher\Exception\ExceptionInterface;

/**
 * RuntimeException.
 *
 * @uses   \RuntimeException
 * @uses   \Sly\NotificationPusher\Exception\ExceptionInterface
 * 
 * @author Cédric Dugat <cedric@dugat.me>
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface
{
}
