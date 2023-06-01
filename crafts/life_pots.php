<?php

function lesser_life_potion_view()
{

    echo "<h3>Lesser Life Potion</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

    table("Aria", 3, "Lesser Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

                <form action='#' method='get'>
                    <label for='kocka'>Price of 1 Aria: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_Aria' id='kocka'>
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
                    <input type='submit' name='submit_lesser_life_pot' value='Calculate'>
                </form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_lesser_life_pot()
{

    $priceGlassBottle = 58;
    $priceAria = $_GET["Price_Aria"];
    $priceLEW = $_GET["Price_LEW"];
    $NumberOfCrafts = $_GET["Nu_items"];

    lesser_life_potion_view();

    calculate($priceAria, 3, $priceLEW, 3, $priceGlassBottle, 3, $NumberOfCrafts);

}
function life_potion_view()
{

    echo "<h3>Life Potion</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

    table("Lumesia", 3, "Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
    <label for='prst'>Price of 1 Lumesia: </label>
    <br>
    <br>
    <input type='number' name='Price_Lumesia' id='prst'>
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
    <input type='submit' name='submit_life_pot' value='Calculate'>
</form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_life_pot()
{

    $priceGlassBottle = 58;
    $priceLumesia = $_GET["Price_Lumesia"];
    $priceEW = $_GET["Price_EW"];
    $NumberOfCrafts2 = $_GET["Nu_items2"];

    life_potion_view();

    calculate($priceLumesia, 3, $priceEW, 3, $priceGlassBottle, 3, $NumberOfCrafts2);

}


function greater_life_potion_view()
{

    echo "<h3>Greater Life Potion</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Nepeta", 3, "Greater Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                    <label for='chripka'>Price of 1 Nepeta: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_Nepeta' id='chripka'>
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
                    <input type='submit' name='submit_greater_life_pot' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_greater_life_pot()
{

    $priceGlassBottle = 58;
    $priceNepeta = $_GET["Price_Nepeta"];
    $priceGEW = $_GET["Price_GEW"];
    $NumberOfCrafts3 = $_GET["Nu_items3"];

    greater_life_potion_view();

    calculate($priceNepeta, 3, $priceGEW, 3, $priceGlassBottle, 3, $NumberOfCrafts3);

}


function major_life_potion_view()
{

    echo "<h3>Major Life Potion</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Ferilla", 3, "Major Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                    <label for='ruzova'>Price of 1 Ferilla: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_Ferilla' id='ruzova'>
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
                    <input type='submit' name='submit_major_life_pot' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_major_life_pot()
{

    $priceGlassBottle = 58;
    $priceFerilla = $_GET["Price_Ferilla"];
    $priceMEW = $_GET["Price_MEW"];
    $NumberOfCrafts4 = $_GET["Nu_items4"];

    greater_life_potion_view();

    calculate($priceFerilla, 3, $priceMEW, 3, $priceGlassBottle, 3, $NumberOfCrafts4);

}

?>