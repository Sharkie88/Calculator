<?php

function lesser_wind_serum_view()
{

    echo "<h3>Lesser Wind Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

    table("Aether Powder", 1, "Lesser Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
    <label for='kocka'>Price of 1 Aether Powder: </label>
    <br>
    <br>
    <input type='number' name='Price_aether_powder' id='kocka'>
    <br>
    <br>
    <label for='pes'>Price of 1 Lesser Elemental Water: </label>
    <br>
    <br>
    <input type='number' name='Price_LEW' id='pes'>
    <br>
    <br>
    <label for='tukan'>Number of items you want to craft: </label>
    <br>
    <br>
    <input type='number' name='Nu_items' id='tukan'>
    <br>
    <br>
    <br>
    <input type='submit' name='submit_lesser_life_serum' value='Calculate'>
</form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_lesser_wind_serum()
{

    $priceGlassBottle = 58;
    $priceAetherPowder = $_GET["Price_aether_powder"];
    $priceLEW = $_GET["Price_LEW"];
    $NumberOfCrafts = $_GET["Nu_items"];

    lesser_wind_serum_view();

    calculate($priceAetherPowder, 1, $priceLEW, 3, $priceGlassBottle, 3, $NumberOfCrafts);

}


function wind_serum_view()
{

    echo "<h3>Wind Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

    table("Aether Crystal", 1, "Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
    <label for='prst'>Price of 1 Aether Crystal: </label>
    <br>
    <br>
    <input type='number' name='Price_aether_crystal' id='prst'>
    <br>
    <br>
    <label for='noha'>Price of 1 Elemental Water: </label>
    <br>
    <br>
    <input type='number' name='Price_EW' id='noha'>
    <br>
    <br>
    <label for='ruka'>Number of items you want to craft: </label>
    <br>
    <br>
    <input type='number' name='Nu_items2' id='ruka'>
    <br>
    <br>
    <br>
    <input type='submit' name='submit_life_serum' value='Calculate'>
</form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_wind_serum()
{

    $priceGlassBottle = 58;
    $priceAetherCrystal = $_GET["Price_aether_crystal"];
    $priceEW = $_GET["Price_EW"];
    $NumberOfCrafts2 = $_GET["Nu_items2"];

    wind_serum_view();

    calculate($priceAetherCrystal, 1, $priceEW, 3, $priceGlassBottle, 3, $NumberOfCrafts2);

}


function greater_wind_serum_view()
{

    echo "<h3>Greater Wind Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

    table("Aether Gem", 1, "Greater Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                    <label for='chripka'>Price of 1 Aether Gem: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_aether_gem' id='chripka'>
                    <br>
                    <br>
                    <label for='ryma'>Price of 1 Greater Elemental Water: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_GEW' id='ryma'>
                    <br>
                    <br>
                    <label for='cukrovka'>Number of items you want to craft: </label>
                    <br>
                    <br>
                    <input type='number' name='Nu_items3' id='cukrovka'>
                    <br>
                    <br>
                    <br>
                    <input type='submit' name='submit_greater_life_serum' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_greater_wind_serum()
{

    $priceGlassBottle = 58;
    $priceAetherGem = $_GET["Price_aether_gem"];
    $priceGEW = $_GET["Price_GEW"];
    $NumberOfCrafts3 = $_GET["Nu_items3"];

    greater_wind_serum_view();

    calculate($priceAetherGem, 1, $priceGEW, 3, $priceGlassBottle, 3, $NumberOfCrafts3);

}


function major_wind_serum_view()
{

    echo "<h3>Major Wind Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

    table("Aether", 1, "Major Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                    <label for='ruzova'>Price of 1 Aether: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_Aether' id='ruzova'>
                    <br>
                    <br>
                    <label for='fialova'>Price of 1 Major Elemental Water: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_MEW' id='fialova'>
                    <br>
                    <br>
                    <label for='zluta'>Number of items you want to craft: </label>
                    <br>
                    <br>
                    <input type='number' name='Nu_items4' id='zluta'>
                    <br>
                    <br>
                    <br>
                    <input type='submit' name='submit_major_life_serum' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_major_wind_serum()
{

    $priceGlassBottle = 58;
    $priceAether = $_GET["Price_Aether"];
    $priceMEW = $_GET["Price_MEW"];
    $NumberOfCrafts4 = $_GET["Nu_items4"];

    greater_wind_serum_view();

    calculate($priceAether, 1, $priceMEW, 3, $priceGlassBottle, 3, $NumberOfCrafts4);

}


function superior_wind_serum_view()
{

    echo "<h3>Superior Wind Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

    table("Magical Aether", 1, "Fine Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                    <label for='chalupa'>Price of 1 Magical Aether: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_magical_aether' id='chalupa'>
                    <br>
                    <br>
                    <label for='vezak'>Price of 1 Fine Elemental Water: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_FEW' id='vezak'>
                    <br>
                    <br>
                    <label for='mrakodrap'>Number of items you want to craft: </label>
                    <br>
                    <br>
                    <input type='number' name='Nu_items5' id='mrakodrap'>
                    <br>
                    <br>
                    <br>
                    <input type='submit' name='submit_superior_life_serum' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_superior_wind_serum()
{

    $priceGlassBottle = 58;
    $priceMagicalAether = $_GET["Price_magical_aether"];
    $priceFEW = $_GET["Price_FEW"];
    $NumberOfCrafts5 = $_GET["Nu_items5"];

    superior_wind_serum_view();

    calculate($priceMagicalAether, 1, $priceFEW, 3, $priceGlassBottle, 3, $NumberOfCrafts5);

}

?>