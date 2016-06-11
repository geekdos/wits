<?php

namespace Wits\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ImportantDatesControllerTest extends WebTestCase
{
    public function testShowimportantdates()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showImportantDates');
    }

}
