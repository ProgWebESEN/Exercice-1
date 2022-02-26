# Exercice 1

## Énoncé

Créez une méthode qui prend en paramètre le
nom d'une catégorie et affiche les produits
appartenant à cette catégorie.

## Travail à faire

* Affichez les produits sous la forme d'une liste html `<ul>` dans une page twig.
* Créez des liens permettant de naviguer entre
les catégories.

## Hint (indice)![screenshot](https://cdn0.iconfinder.com/data/icons/energy-free/32/Energy_Energy_Bulb_Lamp_Electric_Light-16.png)

Dans le code de votre méthode, vous allez créer un tableau associatif qui contient une liste des produits. Ce tableau utilise comme index les noms des catégories.

```php
$produits = [
    "categorie 1"=> ["Produit 1", "Produit 2"],
    "categorie 2"=> ["Produit 1", "Produit 2"],
    ...
]
```

## Correction de l'exercice

Les fichiers à voir sont : 
* [src/Controller/HelloWorldController.php](https://github.com/ProgWebESEN/Exercice-1/blob/main/src/Controller/HelloWorldController.php)
* [templates/produits.html.twig](https://github.com/ProgWebESEN/Exercice-1/blob/main/templates/produits.html.twig)

## Exécution du code

Lancez le serveur interne de `php` à l'aide de la commande `Symfony` suivante :

```
symfony server:start
```

Dans votre navigateur, tapez l'URL suivante :

```
127.0.0.1/produits
```