<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloWorldController extends AbstractController{



    /**
     * @Route("/produits/{categorie<\w+>?vide}", name="get_produit")
     * 
     * Permet de lister les produits appartenant à une catégorie donnée
     *
     * @param string $categorie nom de la catégorie
     * @return Response page html
     */
    public function produits(string $categorie): Response{
        $produits = [
            "ordinateurs" => ["Pc Portable Lenovo", "Pc portable Asus", "Pc portable HP"],
            "ecrans" => ["Ecran Dell 19.5 E2016HV", "Ecran HP 24fH 24 LED", "Ecran Philips"],
            "stockage" => ["Disque dur externe Toshiba", "Disque dur externe SSD", "Disque dur externe Antichocs", "Disque dur externe HIKVISION"]
        ];
        if(isset($produits[$categorie])){
            $liste = $produits[$categorie];
        }
        else{
            $liste = [];
        }
        return $this->render("produits.html.twig", [
            "produits"=> $liste,
            "titre"=> $categorie,
            "categories"=> array_keys($produits)
        ]);
    }


}
