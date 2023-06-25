<?php

function lesser_wind_scroll_view()
{

    echo "<h3>Lesser Raging Wind Scroll</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Aether Crystal", 1, "Aquamarine Powder", 5, "Koa Paper", 5, 720);

    echo "</div>

    <form action='#' method='get'>
    <label for='kocka'>Price of 1 Aether Crystal: </label>
    <br>
    <br>
    <input type='number' name='Price_aether_crystal' id='kocka'>
    <br>
    <br>
    <label for='pes'>Price of 1 Aquamarine Powder: </label>
    <br>
    <br>
    <input type='number' name='Price_AP' id='pes'>
    <br>
    <br>
    <label for='tukan'>Number of items you want to craft: </label>
    <br>
    <br>
    <input type='number' name='Nu_items' id='tukan'>
    <br>
    <br>
    <br>
    <input type='submit' name='submit_lesser_wind_scroll' value='Calculate'>
</form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_lesser_wind_scroll()
{


    $PriceKoaPaper = 524;

    $priceAetherCrystal = $_GET["Price_aether_crystal"];
    $priceAP = $_GET["Price_aquamarine_powder"];
    $NumberOfCrafts = $_GET["Nu_items"];

    lesser_wind_scroll_view();

    calculateScrolls($priceAetherCrystal, 1, $priceAP, 5, $PriceKoaPaper, 5, $NumberOfCrafts);

}
function common_wind_scroll_view()
{

    echo "<h3>Raging Wind Scroll</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Aether Gem", 1, "Lazuli Powder", 5, "Ulmus Paper", 5, 1280);

    echo "</div>

    <form action='#' method='get'>
                    <label for='prst'>Price of 1 Aether Gem: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_aether_gem' id='prst'>
                    <br>
                    <br>
                    <label for='noha'>Price of 1 Lazuli Powder: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_lazuli_powder' id='noha'>
                    <br>
                    <br>
                    <label for='ruka'>Number of items you want to craft: </label>
                    <br>
                    <br>
                    <input type='number' name='Nu_items2' id='ruka'>
                    <br>
                    <br>
                    <br>
                    <input type='submit' name='submit_common_wind_scroll' value='Calculate'>
                </form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_common_wind_scroll()
{

    $priceUlmusPaper = 932;
    $priceAetherGem = $_GET["Price_aether_gem"];
    $priceLP = $_GET["Price_lazuli_powder"];
    $NumberOfCrafts2 = $_GET["Nu_items2"];

    common_wind_scroll_view();

    calculateScrolls($priceAetherGem, 1, $priceLP, 5, $priceUlmusPaper, 5, $NumberOfCrafts2);

}


function greater_wind_scroll_view()
{

    echo "<h3>Greater Raging Wind Scroll</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Aether", 1, "Sapphire Powder", 5, "Egrassi Paper", 5, 2080);

    echo "</div>

    <form action='#' method='get'>
                    <label for='chripka'>Price of 1 Aether: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_Aether' id='chripka'>
                    <br>
                    <br>
                    <label for='ryma'>Price of 1 Sapphire Powder: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_sapphire_powder' id='ryma'>
                    <br>
                    <br>
                    <label for='cukrovka'>Number of items you want to craft: </label>
                    <br>
                    <br>
                    <input type='number' name='Nu_items3' id='cukrovka'>
                    <br>
                    <br>
                    <br>
                    <input type='submit' name='submit_greater_wind_scroll' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_greater_wind_scroll()
{

    $priceEgrasiPaper = 1515;
    $priceAether = $_GET["Price_Aether"];
    $priceSP = $_GET["Price_sapphire_powder"];
    $NumberOfCrafts3 = $_GET["Nu_items3"];

    greater_wind_scroll_view();

    calculateScrolls($priceAether, 1, $priceSP, 5, $priceEgrasiPaper, 5, $NumberOfCrafts3);

}


?>