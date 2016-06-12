<?php

namespace Wits\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SpeakersControllerTest extends WebTestCase
{
    public function testSpeakers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/speakers');
    }

}
