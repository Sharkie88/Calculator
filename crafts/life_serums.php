<?php

function lesser_life_serum_view()
{

    echo "<h3>Lesser Life Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Fresh Aria", 1, "Lesser Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
    <label for='kocka'>Price of 1 Fresh Aria: </label>
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
    <input type='submit' name='submit_lesser_life_serum' value='Calculate'>
</form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_lesser_life_serum()
{

    $priceGlassBottle = 58;
    $priceAria = $_GET["Price_Aria"];
    $priceLEW = $_GET["Price_LEW"];
    $NumberOfCrafts = $_GET["Nu_items"];

    lesser_life_serum_view();

    calculate($priceAria, 1, $priceLEW, 3, $priceGlassBottle, 3, $NumberOfCrafts);

}


function life_serum_view()
{

    echo "<h3>Life Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

    table("Fresh Lumesia", 1, "Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
    <label for='prst'>Price of 1 Fresh Lumesia: </label>
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
    <input type='submit' name='submit_life_serum' value='Calculate'>
</form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_life_serum()
{

    $priceGlassBottle = 58;
    $priceLumesia = $_GET["Price_Lumesia"];
    $priceEW = $_GET["Price_EW"];
    $NumberOfCrafts2 = $_GET["Nu_items2"];

    life_serum_view();

    calculate($priceLumesia, 1, $priceEW, 3, $priceGlassBottle, 3, $NumberOfCrafts2);

}


function greater_life_serum_view()
{

    echo "<h3>Greater Life Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Fresh Nepeta", 1, "Greater Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                    <label for='chripka'>Price of 1 Fresh Nepeta: </label>
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
                    <input type='submit' name='submit_greater_life_serum' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_greater_life_serum()
{

    $priceGlassBottle = 58;
    $priceNepeta = $_GET["Price_Nepeta"];
    $priceGEW = $_GET["Price_GEW"];
    $NumberOfCrafts3 = $_GET["Nu_items3"];

    greater_life_serum_view();

    calculate($priceNepeta, 1, $priceGEW, 3, $priceGlassBottle, 3, $NumberOfCrafts3);

}


function major_life_serum_view()
{

    echo "<h3>Major Life Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Fresh Ferilla", 1, "Major Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                    <label for='ruzova'>Price of 1 Fresh Ferilla: </label>
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
                    <input type='submit' name='submit_major_life_serum' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_major_life_serum()
{

    $priceGlassBottle = 58;
    $priceFerilla = $_GET["Price_Ferilla"];
    $priceMEW = $_GET["Price_MEW"];
    $NumberOfCrafts4 = $_GET["Nu_items4"];

    greater_life_serum_view();

    calculate($priceFerilla, 1, $priceMEW, 3, $priceGlassBottle, 3, $NumberOfCrafts4);

}


function superior_life_serum_view()
{

    echo "<h3>Superior Life Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Zeldt", 3, "Fine Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                    <label for='chalupa'>Price of 1 Zeldt: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_Zeldt' id='chalupa'>
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

function if_superior_life_serum()
{

    $priceGlassBottle = 58;
    $priceZeldt = $_GET["Price_Zeldt"];
    $priceFEW = $_GET["Price_FEW"];
    $NumberOfCrafts5 = $_GET["Nu_items5"];

    superior_life_serum_view();

    calculate($priceZeldt, 3, $priceFEW, 3, $priceGlassBottle, 3, $NumberOfCrafts5);

}

?>