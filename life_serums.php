<?php
require("./function_calculate.php");
require("./table_ingredience.php");
require("./crafts/life_serums.php");

//select items you want to craft from crafts.php
if (array_key_exists("SubmitCraft", $_GET)) {

    $selectedCraft = $_GET["select_option"];
}


if (array_key_exists("SubmitTax", $_GET)) {
    $selectedTax = $_GET["select_tax"];
    $pricePerItem = $_GET["cena"];
    $numberOfItems = $_GET["pocet"];
    $selectedFee = $_GET["select_fee_level"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Life Serums</title>
</head>

<body>
    <header>
        <h1>Aion Alchemy Calculator (Elyos)</h1>

        <div class="vyber">
            <a href="./index.php">Main Page</a>
            <a href="./life.php">Life Potions</a>
            <a href="./life_serums.php">Life Serums</a>
            <a href="./mana.php">Mana Potions</a>
            <a href="./mana_serums.php">Mana Serums</a>
            <a href="./healing.php">Healing Potions</a>
            <a href="./running.php">Running Scrolls</a>
            <a href="./wind.php">Wind Scrolls</a>
            <a href="./wind_serum.php">Wind Serums</a>
        </div>
        <h2>Life Serums</h2>
    </header>

    <div class="grid_container">

        <div class="first">
            <h3>Partial Calculations</h3>
            <div class="partial_grid">
                <div class="grid_container_polozky2">
                    <div class="partial1">
                        Use to calculate price for one piece of mat where you craft a bulk (for example elemental
                        water):
                        <br>
                        <br>

                        <form action="#" method="get">
                            <div class="little_container">
                                <label for="klara">Price of 1st mat: </label>
                                <input type="number" name="mat_1" id="klara" value="0">
                                <br>
                                <br>
                                <label for="simona">Amount of 1st mat: </label>
                                <input type="number" name="amount_1" id="simona" value="1">
                            </div>
                            <br>
                            <br>
                            <div class="little_container">
                                <label for="marie">Price of 2nd mat: </label>
                                <input type="number" name="mat_2" id="marie" value="0">
                                <br>
                                <br>
                                <label for="bozena">Amount of 2nd mat: </label>
                                <input type="number" name="amount_2" id="bozena" value="1">
                            </div>
                            <br>
                            <br>
                            <div class="little_container">
                                <label for="tatana">Price of 3rd mat: </label>
                                <input type="number" name="mat_3" id="tatana" value="0">
                                <br>
                                <br>
                                <label for="karolina">Amount of 3rd mat: </label>
                                <input type="number" name="amount_3" id="karolina" value="1">
                            </div>
                            <br>
                            <br>
                            <div class="little_container">
                                <label for="matej">How many items are in the bulk: </label>
                                <input type="number" name="nu_bulk" id="matej"" value=" 0">

                            </div>
                            <div class="little_container">
                                <label for="sara">Number of items you want to craft: </label>
                                <input type="number" name="nu_mats" id="sara" value="0">

                            </div>
                            <br>
                            <br>
                            <input type="submit" name="submit_partial" value="Calculate">
                        </form>
                        <div class="result">
                            <?php
                            CalculatePartials();
                            ?>
                        </div>
                    </div>
                    <div class="partial2">
                        Use to calculate total profit after taxes:
                        <br>
                        <br>
                        <form action="#" method="get">
                            <label for="tax">Select the current tax (in influent ratio):</label>
                            <select name="select_tax" id="tax">
                                <option value="5">5%</option>
                                <option value="6">6%</option>
                                <option value="7">7%</option>
                                <option value="8">8%</option>
                            </select>
                            <br>
                            <br>

                            <label for="fee">Select your fee level:</label>
                            <select name="select_fee_level" id="fee">
                                <option value="1">Level 1</option>
                                <option value="2">Level 2</option>
                            </select>

                            <br>
                            <br>
                            <label for="naklady">Price to craft one item: </label>
                            <input type="number" name="naklady" id="naklady">
                            <br>
                            <br>
                            <label for="cena">Price you are selling one item for: </label>
                            <input type="number" name="cena" id="cena">
                            <br>
                            <br>
                            <label for="pocet">Number of items: </label>
                            <input type="number" name="pocet" id="pocet">
                            <br>
                            <br>

                            <input type="submit" name="SubmitTax" value="Calculate">
                        </form>



                        <div class="result">
                            <?php 
                            if (isset($selectedTax) && isset($selectedFee))
                            {
                                calculateTax($selectedTax, $selectedFee);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="second">
            <form action="#" method="get">
                <label for="craft">Select the item to craft:</label>
                <select name="select_option" id="craft">
                    <option value="">Select</option>
                    <option value="lesser_life_pot">Lesser Life Serum</option>
                    <option value="life_pot">Life Serum</option>
                    <option value="greater_life_pot">Greater Life Serum</option>
                    <option value="major_life_pot">Major Life Serum</option>
                    <option value="superior_life_serum">Super Life Serum</option>
                </select>

                <input type="submit" name="SubmitCraft" value="Send">
            </form>

            <?php

            if (isset($selectedCraft)) {
                //toto se zobrazí, pokud si uživatel vybere jednu z možností, co chce craftovat a odešle
                if ($selectedCraft == "lesser_life_pot") {
                    lesser_life_serum_view();
                }
                if ($selectedCraft == "life_pot") {
                    life_serum_view();
                }
                if ($selectedCraft == "greater_life_pot") {
                    greater_life_serum_view();
                }
                if ($selectedCraft == "major_life_pot") {
                    major_life_serum_view();
                }
                if ($selectedCraft == "superior_life_serum") {
                    superior_life_serum_view();
                }

            }

            //toto se zobrazí, pokud si uživatel vybral možnost, co craftovat a vyplnil formulář craftu
            if (array_key_exists("submit_lesser_life_serum", $_GET)) {
                if_lesser_life_serum();
            }
            if (array_key_exists("submit_life_serum", $_GET)) {
                if_life_serum();
            }
            if (array_key_exists("submit_greater_life_serum", $_GET)) {
                if_greater_life_serum();
            }
            if (array_key_exists("submit_major_life_serum", $_GET)) {
                if_major_life_serum();
            }
            if (array_key_exists("superior_life_serum", $_GET)) {
                if_superior_life_serum();
            }


            ?>
        </div>

    </div>

</body>

</html>
