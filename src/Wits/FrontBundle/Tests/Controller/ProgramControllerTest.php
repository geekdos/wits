<?php

namespace Wits\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProgramControllerTest extends WebTestCase
{
    public function testProgram()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/program');
    }

}
