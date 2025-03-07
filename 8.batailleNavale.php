<?php

/**
 * Créer le code d'un jeu de bataille navale
 * https://fr.wikipedia.org/wiki/Bataille_navale_(jeu)
 *
 * 8.1 avec un plateau de 16 cases (4 colonnes, 4 lignes) et un seul bateau de 1 case
 * 1/ le programme détermine aléatoirement quelle case du plateau contient le bateau (déterminer la colonne et la ligne)
 *
 * 2/ Afficher le plateau selon le format ci-dessous (chaque case est représentée par un caractère):
 *      ????
 *      ????
 *      ????
 *      ????
 *
 * 3/ Demander à l'utilisateur de deviner où peut se situer le bateau
 *  3.1/ Demander la colonne
 *  3.2/ Demander la ligne
 *
 * 4/ Vérifier si la case choisie par l'utilisateur est bien celle qui contient le bateau
 *  4.1/ Si c'est la bonne case, afficher "Touché coulé \n Bravo vous avez gagné!"
 *  4.2/ Si ce n'est pas la bonne case, afficher "Plouf! A l'eau." et réexécuter les étapes 2 et 3
 *      Les cases déjà mentionnées par l'utilisateur doivent s'afficher avec le caractère ~
 *      Ex si l'utilisateur devine la case située dans la première colonne et la troisième ligne, l'affichage du
 *      plateau sera :
 *      ????
 *      ????
 *      ~???
 *      ????
 *
 * 5/ Afficher combien de tentatives ont été nécessaires pour gagner
 *
 * 6/ Reproposer une partie à l'utilisateur
 *  6.1/ S'il accepte, veiller à ce que le bateau soit repositionné et toutes les cases du plateau soient à
 *      nouveau masquées
 *
 */
