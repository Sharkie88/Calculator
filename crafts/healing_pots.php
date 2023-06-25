<?php

function lesser_healing_potion_view()
{

    echo "<h3>Lesser Healing Potion</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                Table4("Aria", 1, "Targena", 1, "Lesser Elemental Stone Powder", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                <label for='prst'>Price of 1 Aria: </label>
                <br>
                <br>
                <input type='number' name='Price_Aria' id='prst'>
                <br>
                <br>
                <label for='noha'>Price of 1 Targena: </label>
                <br>
                <br>
                <input type='number' name='Price_Targena' id='noha'>
                <br>
                <br>
                <label for='pupek'>Price of 1 Lesser Elemental Stone Powder: </label>
                <br>
                <br>
                <input type='number' name='Price_LESP' id='pupek'>
                <br>
                <br>
                <label for='ruka'>Number of items you want to craft: </label>
                <br>
                <br>
                <input type='number' name='Nu_items' id='ruka'>
                <br>
                <br>
                <br>
                <input type='submit' name='submit_lesser_healing_pot' value='Calculate'>
            </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_lesser_healing_pot()
{

    $priceGlassBottle = 58;
    $priceAria = $_GET["Price_Aria"];
    $priceLESP = $_GET["Price_LESP"];
    $priceTargena = $_GET["Price_Targena"];
    $NumberOfCrafts = $_GET["Nu_items"];

    lesser_healing_potion_view();

    calculate4($priceAria, 1, $priceTargena, 1, $priceLESP, 3, $priceGlassBottle, 3, $NumberOfCrafts);

}



function greater_healing_potion_view()
{

    echo "<h3>Greater Healing Potion</h3>
            <div class='grid_container_polozky'>
                <div class='ingredience'>";

                Table4("Nepeta", 1, "Amalil", 1, "Greater Elemental Stone Powder", 3, "Glass Bottle", 3, 58);

    echo "</div>

    <form action='#' method='get'>
                    <label for='ruzova'>Price of 1 Nepeta: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_Nepeta' id='ruzova'>
                    <br>
                    <br>
                    <label for='fialova'>Price of 1 Amalil: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_Amalil' id='fialova'>
                    <br>
                    <br>
                    <label for='tyrkysova'>Price of 1 Greater Elemental Stone Powder: </label>
                    <br>
                    <br>
                    <input type='number' name='Price_GESP' id='tyrkysova'>
                    <br>
                    <br>
                    <label for='zluta'>Number of items you want to craft: </label>
                    <br>
                    <br>
                    <input type='number' name='Nu_items4' id='zluta'>
                    <br>
                    <br>
                    <br>
                    <input type='submit' name='submit_greater_healing_pot' value='Calculate'>
                </form>

                <div class='result'>
                
                </div>

            </div>";
}

function if_greater_healing_pot()
{

    $priceGlassBottle = 58;
    $priceNepeta = $_GET["Price_Nepeta"];
    $priceAmalil = $_GET["Price_Amalil"];
    $priceGESP = $_GET["Price_GESP"];
    $NumberOfCrafts4 = $_GET["Nu_items4"];

    greater_healing_potion_view();

    calculate4($priceNepeta, 1, $priceAmalil, 1, $priceGESP, 3, $priceGlassBottle, 3, $NumberOfCrafts4);

}


?>