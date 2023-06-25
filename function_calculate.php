<?php

//CALCULATE FOR BULK OF 3 ITEMS (POTS, SERUMS)
function Calculate($Item1Price, $Item1Amount, $Item2Price, $Item2Amount, $Item3Price, $Item3Amount, $AmountCrafted)
{
    $PriceOfBulkNotRounded = (($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount));
    $PriceOfBulk = round($PriceOfBulkNotRounded);

    $PriceOfCraftedBulksNotRounded = (($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount)) * $AmountCrafted;
    $PriceOfCraftedBulks = round($PriceOfCraftedBulksNotRounded);

    $PriceOfProductNotRounded = ((($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount)) / 3);
    $PriceOfProduct = round($PriceOfProductNotRounded);

    $PriceOfProductsNotRounded = ((($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount)) / 3) * $AmountCrafted; 
    $PriceOfProducts = round($PriceOfProductsNotRounded);

    echo "<br>
    First mat: <u>" . ($Item1Amount * $Item1Price) * $AmountCrafted . "</u> kinah 
    <br> Second mat: <u>" . ($Item2Amount * $Item2Price) * $AmountCrafted . "</u> kinah 
    <br> Third mat: <u>" . ($Item3Amount * $Item3Price) * $AmountCrafted . "</u> kinah <br><br>";

    echo "Cost of one bulk: <u>$PriceOfBulk</u> kinah <br>";
    echo "Cost of $AmountCrafted bulk(s): <u>$PriceOfCraftedBulks</u> kinah <br><br>";

    echo "Cost of 1 crafted item: <u>$PriceOfProduct</u> kinah <br>";
    echo "Cost of $AmountCrafted item(s): <u>$PriceOfProducts</u> kinah";
}

function Calculate4($Item1Price, $Item1Amount, $Item2Price, $Item2Amount, $Item3Price, $Item3Amount, $Item4Price, $Item4Amount, $AmountCrafted)
{
    $PriceOfBulkNotRounded = (($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount) + ($Item4Price * $Item4Amount));
    $PriceOfBulk = round($PriceOfBulkNotRounded);

    $PriceOfCraftedBulksNotRounded = (($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount) + ($Item4Price * $Item4Amount)) * $AmountCrafted;
    $PriceOfCraftedBulks = round($PriceOfCraftedBulksNotRounded);

    $PriceOfProductNotRounded = ((($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount) + ($Item4Price * $Item4Amount)) / 3);
    $PriceOfProduct = round($PriceOfProductNotRounded);

    $PriceOfProductsNotRounded = ((($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount) + ($Item4Price * $Item4Amount)) / 3) * $AmountCrafted; //děleno 3, protože to vždy vycraftí 3 itemy
    $PriceOfProducts = round($PriceOfProductsNotRounded);
    
    echo "<br>
    First mat: <u>" . ($Item1Amount * $Item1Price) * $AmountCrafted . "</u> kinah 
    <br> Second mat: <u>" . ($Item2Amount * $Item2Price) * $AmountCrafted . "</u> kinah 
    <br> Third mat: <u>" . ($Item3Amount * $Item3Price) * $AmountCrafted . "</u> kinah <br><br>";

    echo "Cost of one bulk: <u>$PriceOfBulk</u> kinah <br>";
    echo "Cost of $AmountCrafted bulk(s): <u>$PriceOfCraftedBulks</u> kinah <br><br>";

    echo "Cost of 1 crafted item: <u>$PriceOfProduct</u> kinah <br>";
    echo "Cost of $AmountCrafted item(s): <u>$PriceOfProducts</u> kinah";
}

//CALCULATE FOR BULK OF 5 ITEMS (SCROLLS)
function CalculateScrolls($Item1Price, $Item1Amount, $Item2Price, $Item2Amount, $Item3Price, $Item3Amount, $AmountCrafted)
{
    $PriceOfBulkNotRounded = (($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount));
    $PriceOfBulk = round($PriceOfBulkNotRounded);

    $PriceOfCraftedBulksNotRounded = (($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount)) * $AmountCrafted;
    $PriceOfCraftedBulks = round($PriceOfCraftedBulksNotRounded);

    $PriceOfProductNotRounded = ((($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount)) / 5);
    $PriceOfProduct = round($PriceOfProductNotRounded);

    $PriceOfProductsNotRounded = ((($Item1Price * $Item1Amount) + ($Item2Price * $Item2Amount) + ($Item3Price * $Item3Amount)) / 5) * $AmountCrafted; 
    $PriceOfProducts = round($PriceOfProductsNotRounded);

    echo "<br>
    First mat: <u>" . ($Item1Amount * $Item1Price) * $AmountCrafted . "</u> kinah 
    <br> Second mat: <u>" . ($Item2Amount * $Item2Price) * $AmountCrafted . "</u> kinah 
    <br> Third mat: <u>" . ($Item3Amount * $Item3Price) * $AmountCrafted . "</u> kinah <br><br>";

    echo "Cost of one bulk: <u>$PriceOfBulk</u> kinah <br>";
    echo "Cost of $AmountCrafted bulk(s): <u>$PriceOfCraftedBulks</u> kinah <br><br>";

    echo "Cost of 1 crafted item: <u>$PriceOfProduct</u> kinah <br>";
    echo "Cost of $AmountCrafted item(s): <u>$PriceOfProducts</u> kinah";
}



function CalculatePartials()
{

    if (array_key_exists("submit_partial", $_GET)) {
        $priceMat1 = $_GET["mat_1"];
        $amountMat1 = $_GET["amount_1"];
        $priceMat2 = $_GET["mat_2"];
        $amountMat2 = $_GET["amount_2"];
        $priceMat3 = $_GET["mat_3"];
        $amountMat3 = $_GET["amount_3"];
        $nuOfMats = $_GET["nu_mats"]; //number of items they want to craft
        $nuIn1Bulk = $_GET["nu_bulk"];

    }

    if (array_key_exists("submit_partial", $_GET)) {
        $priceForBulk = round($priceMat1 * $amountMat1) + ($priceMat2 * $amountMat2) + ($priceMat3 * $amountMat3);

        $priceForOneItem = round($priceForBulk / $nuIn1Bulk);

        $priceForAllItems = round($priceForOneItem * $nuOfMats);

        echo "<br>";
        echo "Price of one bulk: $priceForBulk kinah";
        echo "<br>";
        echo "Price of one mat: $priceForOneItem kinah";
        echo "<br>";
        echo "Price of $nuOfMats mats: $priceForAllItems kinah";
    }
}

function priceAfterTaxes($ArgCurrentTax, $ArgFeeLevel)
{   
    $pricePerItem = $_GET["cena"];
    $numberOfItems = $_GET["cislo"];

    $FinalPriceWithoutTaxNoFormat = round($pricePerItem * $numberOfItems);
    $FinalPriceWithoutTax = number_format($FinalPriceWithoutTaxNoFormat, 0, '', ' ');

    $FinalPriceNoFormat = round(($pricePerItem * $numberOfItems) - ((($pricePerItem * $numberOfItems) / 100) * ($ArgCurrentTax * $ArgFeeLevel))); //musim zmenit
    $FinalPrice = number_format($FinalPriceNoFormat, 0, '', ' ');

    $tax = round((($pricePerItem * $numberOfItems) / 100) * ($ArgCurrentTax * $ArgFeeLevel));

    echo "<br>";
    echo "Tax: $tax kinah";
    echo "<br>";
    echo "<br>";
    echo "Total profit before taxes: <br> $FinalPriceWithoutTax kinah";
    echo "<br>";
    echo "<br>";
    echo "Total profit after taxes: <br> $FinalPrice kinah";
}
?>
