<?php

function lesser_mana_serum_view()
{

    echo "<h3>Lesser Mana Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Fresh Targena", 1, "Lesser Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                <label for='kocka'>Price of 1 Fresh Targena: </label>
                <br>
                <br>
                <input type='number' name='Price_Targena' id='kocka'>
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
                <input type='submit' name='submit_lesser_mana_pot' value='Calculate'>
            </form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_lesser_mana_serum()
{

    $priceGlassBottle = 58;
    $priceTargena = $_GET["Price_Targena"];
    $priceLEW = $_GET["Price_LEW"];
    $NumberOfCrafts = $_GET["Nu_items"];

    lesser_mana_serum_view();

    calculate($priceTargena, 1, $priceLEW, 3, $priceGlassBottle, 3, $NumberOfCrafts);

}


function mana_serum_view()
{

    echo "<h3>Mana Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Fresh Umblia", 1, "Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                <label for='prst'>Price of 1 Fresh Umblia: </label>
                <br>
                <br>
                <input type='number' name='Price_Umblia' id='prst'>
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
                <input type='submit' name='submit_mana_pot' value='Calculate'>
            </form>
                <div class='result'>
                
                </div>

            </div>";
}

function if_mana_serum()
{

    $priceGlassBottle = 58;
    $priceUmblia = $_GET["Price_Umblia"];
    $priceEW = $_GET["Price_EW"];
    $NumberOfCrafts2 = $_GET["Nu_items2"];

    mana_serum_view();

    calculate($priceUmblia, 1, $priceEW, 3, $priceGlassBottle, 3, $NumberOfCrafts2);

}


function greater_mana_serum_view()
{

    echo "<h3>Greater Mana Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Fresh Amalil", 1, "Greater Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                <label for='chripka'>Price of 1 Fresh Amalil: </label>
                <br>
                <br>
                <input type='number' name='Price_Amalil' id='chripka'>
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
                <input type='submit' name='submit_greater_mana_pot' value='Calculate'>
                <div class='result'>
                
                </div>

            </div>";
}

function if_greater_mana_serum()
{

    $priceGlassBottle = 58;
    $priceAmalil = $_GET["Price_Amalil"];
    $priceGEW = $_GET["Price_GEW"];
    $NumberOfCrafts3 = $_GET["Nu_items3"];

    greater_mana_serum_view();

    calculate($priceAmalil, 1, $priceGEW, 3, $priceGlassBottle, 3, $NumberOfCrafts3);

}


function major_mana_serum_view()
{

    echo "<h3>Major Mana Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Fresh Griffonia", 1, "Major Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                <label for='ruzova'>Price of 1 Fresh Griffonia: </label>
                <br>
                <br>
                <input type='number' name='Price_Griffonia' id='ruzova'>
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
                <input type='submit' name='submit_major_mana_pot' value='Calculate'>
            </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_major_mana_serum()
{

    $priceGlassBottle = 58;
    $priceGriffonia = $_GET["Price_Griffonia"];
    $priceMEW = $_GET["Price_MEW"];
    $NumberOfCrafts4 = $_GET["Nu_items4"];

    greater_mana_serum_view();

    calculate($priceGriffonia, 1, $priceMEW, 3, $priceGlassBottle, 3, $NumberOfCrafts4);

}


function superior_mana_serum_view()
{

    echo "<h3>Superior Mana Serum</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                table("Hintera", 3, "Fine Elemental Water", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                    <label for='chalupa'>Price of 1 Hintera: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_Hintera' id='chalupa'>
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
                    <input type='submit' name='submit_superior_mana_serum' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_superior_mana_serum()
{

    $priceGlassBottle = 58;
    $priceHintera = $_GET["Price_Hintera"];
    $priceFEW = $_GET["Price_FEW"];
    $NumberOfCrafts5 = $_GET["Nu_items5"];

    superior_mana_serum_view();

    calculate($priceHintera, 3, $priceFEW, 3, $priceGlassBottle, 3, $NumberOfCrafts5);

}

?>