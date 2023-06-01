<?php

function lesser_running_scroll_view()
{

    echo "<h3>Lesser Running Scroll</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Aether Crystal", 1, "Zircon Powder", 5, "Koa Paper", 5, 720);

    echo "</div>

    <form action='#' method='get'>
    <label for='kocka'>Price of 1 Aether Crystal: </label>
    <br>
    <br>
    <input type='number' name='Price_aether_crystal' id='kocka'>
    <br>
    <br>
    <label for='pes'>Price of 1 Zircon Powder: </label>
    <br>
    <br>
    <input type='number' name='Price_ZP' id='pes'>
    <br>
    <br>
    <label for='tukan'>Number of items you want to craft: </label>
    <br>
    <br>
    <input type='number' name='Nu_items' id='tukan'>
    <br>
    <br>
    <br>
    <input type='submit' name='submit_lesser_running_scroll' value='Calculate'>
</form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_lesser_running_scroll()
{


    $PriceKoaPaper = 524;

    $priceAetherCrystal = $_GET["Price_aether_crystal"];
    $priceZP = $_GET["Price_zircon_powder"];
    $NumberOfCrafts = $_GET["Nu_items"];

    lesser_running_scroll_view();

    calculateScrolls($priceAetherCrystal, 1, $priceZP, 5, $PriceKoaPaper, 5, $NumberOfCrafts);

}
function common_running_scroll_view()
{

    echo "<h3>Common Running Scroll</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Aether Gem", 1, "Moonstone Powder", 5, "Ulmus Paper", 5, 1280);

    echo "</div>

    <form action='#' method='get'>
                    <label for='prst'>Price of 1 Aether Gem: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_aether_gem' id='prst'>
                    <br>
                    <br>
                    <label for='noha'>Price of 1 Moonstone Powder: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_MP' id='noha'>
                    <br>
                    <br>
                    <label for='ruka'>Number of items you want to craft: </label>
                    <br>
                    <br>
                    <input type='number' name='Nu_items2' id='ruka'>
                    <br>
                    <br>
                    <br>
                    <input type='submit' name='submit_common_running_scroll' value='Calculate'>
                </form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_common_running_scroll()
{

    $priceUlmusPaper = 932;
    $priceAetherGem = $_GET["Price_aether_gem"];
    $priceMP = $_GET["Price_moonstone_powder"];
    $NumberOfCrafts2 = $_GET["Nu_items2"];

    common_running_scroll_view();

    calculateScrolls($priceAetherGem, 1, $priceMP, 5, $priceUlmusPaper, 5, $NumberOfCrafts2);

}


function greater_running_scroll_view()
{

    echo "<h3>Greater Running Scroll</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Aether", 1, "Diamond Powder", 5, "Egrassi Paper", 5, 2080);

    echo "</div>

    <form action='#' method='get'>
                    <label for='chripka'>Price of 1 Aether: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_Aether' id='chripka'>
                    <br>
                    <br>
                    <label for='ryma'>Price of 1 Diamond Powder: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_DP' id='ryma'>
                    <br>
                    <br>
                    <label for='cukrovka'>Number of items you want to craft: </label>
                    <br>
                    <br>
                    <input type='number' name='Nu_items3' id='cukrovka'>
                    <br>
                    <br>
                    <br>
                    <input type='submit' name='submit_greater_running_scroll' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_greater_running_scroll()
{

    $priceEgrasiPaper = 1515;
    $priceAether = $_GET["Price_Aether"];
    $priceDP = $_GET["Price_DP"];
    $NumberOfCrafts3 = $_GET["Nu_items3"];

    greater_running_scroll_view();

    calculateScrolls($priceAether, 1, $priceDP, 5, $priceEgrasiPaper, 5, $NumberOfCrafts3);

}


?>