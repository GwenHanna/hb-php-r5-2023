<?php
const TVA = 20;
function priceTTC($priceHT)
{
    return $priceHT + (TVA / 100);
}
