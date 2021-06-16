// Euro Cent to EUR
var eur = phpbal / 100;
eur = eur.toLocaleString("en-US", { style: "currency", currency: "EUR" });
document.getElementById("balance").innerHTML = eur;

function round_off(mystring) {
  //alert(mystring);
  mystring = mystring.replace(/\./g, "");
  mystring = mystring.substring(0, 4);

  mystring1 = mystring.substring(0, 2);
  mystring2 = mystring.substring(2, 4);

  mystring2 = "" + mystring1 + "." + mystring2 + "";
  //alert(mystring2);
  if (mystring != "" && mystring.length > 2) {
    document.getElementById("round_no").value = mystring2;
  }
}

// Price verschillende crypto.
var burl = "https://api.binance.com";

var query = "/api/v3/ticker/price";

query += "?symbol=BTCUSDT";

var url = burl + query;

var ourRequest = new XMLHttpRequest();

ourRequest.open("GET", url, true);
ourRequest.onload = function () {
  console.log(ourRequest.responseText);
  if (ourRequest.responseText.hasOwnProperty("price")) {
    console.log(ourRequest.responseText.price);
  }
};

ourRequest.send();
