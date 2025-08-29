<?php
function Tenis(){
$priceForOneRacket = 850;
$nuberOfRackets = 4;
$nuberOfShoes = 2;

$totalPriceForRackets = $priceForOneRacket * $nuberOfRackets;
$priceForShoes = $priceForOneRacket / 6;
$priceForAllShoes = $nuberOfShoes * $priceForShoes;
$AllShoseAndRackets = $totalPriceForRackets + $priceForAllShoes;
$priceForAdorThings = $AllShoseAndRackets * 0.2;
$allPrice = $AllShoseAndRackets + $priceForAdorThings;


$priceForDjokovic = floor($allPrice / 8);      // закръглен надолу
$priceForSponsors = ceil($allPrice * 7 / 8); 

echo "Price to be paid by Djokovic $priceForDjokovic" . "\n";
echo "Price to be paid by sponsors $priceForSponsors" . "\n";
}

Tenis();