<?php

declare(strict_types=1);

namespace PluginTests\Application;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontendTest extends WebTestCase
{
    public function testFrontend(): void
    {
        $client = self::createClient();
        $client->followRedirects();

        $client->request('GET', '/');
        self::assertSelectorNotExists('footer');
    }
}
