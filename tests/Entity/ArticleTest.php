<?php

namespace App\Tests\Entity;

use App\Entity\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    public function testArticle(){
        
        $article = new Article();
        $title = "Test_Titre";
        $uri = "Test_uri";

        $article->setTitle($title);
        $article->setUri($uri);
        $this->assertEquals("Test_Titre", $article->getTitle());
        $this->assertEquals("Test_uri", $article->getUri());
    }    
}

?>