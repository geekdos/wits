<?php

namespace Wits\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SubmissionsControllerTest extends WebTestCase
{
    public function testCallforsubmissions()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/callForSubmissions');
    }

}
