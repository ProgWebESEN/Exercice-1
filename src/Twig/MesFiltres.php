<?php

namespace App\Twig;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class MesFiltres extends AbstractExtension{

    public function getFunctions()
    {
        return [
            new TwigFunction('prix', [$this, 'prix']),
        ];
    }

    public function prix(float $prix, string $devise){
        if($devise == "$"){
            return "$".$prix;
        }
        else{
            return $prix."".$devise;
        }
    }

}