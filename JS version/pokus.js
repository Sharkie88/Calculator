

function calculate() {
  var priceFirstMat = parseFloat(document.getElementById("klara").value);
  var amountFirstMat = parseFloat(document.getElementById("simona").value);
  var priceSecondMat = parseFloat(document.getElementById("marie").value);
  var amountSecondMat = parseFloat(document.getElementById("bozena").value);
  var priceThirdMat = parseFloat(document.getElementById("tatana").value);
  var amountThirdMat = parseFloat(document.getElementById("karolina").value);
  var nuOfItemsInBulk = parseFloat(document.getElementById("matej").value);
  var nuOfItemsToCraft = parseFloat(document.getElementById("sara").value);
  
  var priceForBulk = Math.round((priceFirstMat * amountFirstMat) + (priceSecondMat * amountSecondMat) + (priceThirdMat * amountThirdMat));
  var priceForOneItem = Math.round(priceForBulk / nuOfItemsInBulk);
  var priceForAllItems = Math.round(priceForOneItem * nuOfItemsToCraft);
  
  //pokud je priceForBulk NaN, do pole s výsledkem se vloží prázdný řetězec (""), aby se zabránilo zobrazení "NaN". V opačném případě se do pole s výsledkem vloží samotná hodnota priceForBulk.
  document.getElementById("priceForBulk").innerHTML = isNaN(priceForBulk) ? "" : priceForBulk;
  document.getElementById("priceForOneItem").innerHTML = isNaN (priceForOneItem) ? "" : priceForOneItem;
  document.getElementById("priceForAllItems").innerHTML = isNaN (priceForAllItems) ? "" : priceForAllItems;
}

//když chceme, aby se nám výsledné kalkulace vypočítávaly i v průběhu zadávání inputu uživatelem, přidáme eventListener("input", calculate)
document.getElementById("klara").addEventListener("input", calculate);
document.getElementById("simona").addEventListener("input", calculate);
document.getElementById("marie").addEventListener("input", calculate);
document.getElementById("bozena").addEventListener("input", calculate);
document.getElementById("tatana").addEventListener("input", calculate);
document.getElementById("karolina").addEventListener("input", calculate);
document.getElementById("matej").addEventListener("input", calculate);
document.getElementById("sara").addEventListener("input", calculate);

