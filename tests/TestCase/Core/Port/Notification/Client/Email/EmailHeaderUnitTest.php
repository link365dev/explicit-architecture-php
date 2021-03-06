<?php

declare(strict_types=1);

/*
 * This file is part of the Explicit Architecture POC,
 * which is created on top of the Symfony Demo application.
 *
 * (c) Herberto Graça <herberto.graca@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\App\Test\TestCase\Core\Port\Notification\Client\Email;

namespace Werkspot\ApiLibrary\Email;

use Acme\App\Core\Port\Notification\Client\Email\EmailHeader;
use Acme\App\Test\Framework\AbstractUnitTest;

/**
 * @author Herberto Graca <herberto.graca@gmail.com>
 * @author Jeroen Van Den Heuvel
 * @author Marijn Koesen
 *
 * @small
 *
 * @internal
 */
final class EmailHeaderUnitTest extends AbstractUnitTest
{
    /**
     * @test
     */
    public function get_value_and_get_name_work_as_expected(): void
    {
        $name = 'header name';
        $value = 'header value';
        $messageHeader = new EmailHeader($name, $value);
        self::assertEquals($name, $messageHeader->getName());
        self::assertEquals($value, $messageHeader->getValue());
    }
}
