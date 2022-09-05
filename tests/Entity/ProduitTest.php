<?php
namespace App\Tests\Entity;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProduitTest extends KernelTestCase
{
   
    public function testProduit()
    {
        $code = new Produit();
        $code->setPrix('33');
        $code->setTitre('Produit');
        $code->setDescription('Produit qualité');

        self::bootKernel();
        $container = static::getContainer();
        $errors = $container->get('validator')->validate($code);


        $this->assertCount(0, $errors);
    }
}

?>