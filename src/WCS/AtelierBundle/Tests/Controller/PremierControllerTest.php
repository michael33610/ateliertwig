<?php

namespace WCS\AtelierBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PremierControllerTest extends WebTestCase
{
    public function testAff()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/aff');
    }

    public function testAffres()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/affRes');
    }

}
