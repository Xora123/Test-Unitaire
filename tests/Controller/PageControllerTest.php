<?php

namespace App\Test\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testHelloPage(){
        $client = static::createClient();
        $client->request(method: 'GET', uri:'http://127.0.0.1:8000/fr/produit');
        $this->assertResponseStatusCodeSame( expectedCode: Response::HTTP_OK);
    }
}

?>