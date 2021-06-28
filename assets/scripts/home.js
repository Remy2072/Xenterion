// Euro Cent to EUR
var eur = phpbal / 100;
var fee = '0';
eur = eur.toLocaleString("en-US", { style: "currency", currency: "EUR" });
document.getElementById("balance").innerHTML = eur;
var inputfield = document.getElementById("round_no");

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

function tradingcost() {
  var tradingcosting = inputfield.value / 100 * 8;
  document.getElementById("crypto_trading").innerHTML = tradingcosting.toFixed(2);
  var total_amount = inputfield.value - tradingcosting.toFixed(2) - fee;
  document.getElementById("crypto_total").value = total_amount.toFixed(2);
  console.log(fee);
}
function XRP() {
  // Price verschillende crypto.
  var burl = "https://api.binance.com";

  var query = "/api/v3/ticker/price";

  query += "?symbol=XRPUSDT";

  var url = burl + query;

  var ourRequest = new XMLHttpRequest();

  ourRequest.open("GET", url, true);
  ourRequest.onload = function () {
    const obj = JSON.parse(ourRequest.responseText);
    var eur_price = obj.price / 100 * 84;
    if (obj.symbol == "XRPUSDT") {
      obj.symbol = "Ripple";
    }
    console.log(obj);
    document.getElementById("crypto_type").innerHTML = obj.symbol;
    document.getElementById("crypto_price").innerHTML = eur_price.toFixed(2);
    var XRP_fee = eur_price.toFixed(2) / 4;
    fee = XRP_fee;
    document.getElementById("crypto_transfer").innerHTML = XRP_fee.toFixed(2);
    return fee;
  };

  ourRequest.send();
}


function VET() {
  // Price verschillende crypto.
  var burl = "https://api.binance.com";

  var query = "/api/v3/ticker/price";

  query += "?symbol=VETUSDT";

  var url = burl + query;

  var ourRequest = new XMLHttpRequest();

  ourRequest.open("GET", url, true);
  ourRequest.onload = function () {
    const obj = JSON.parse(ourRequest.responseText);
    var eur_price = obj.price / 100 * 84;
    if (obj.symbol == "VETUSDT") {
      obj.symbol = "VeChain";
    }
    console.log(obj);
    document.getElementById("crypto_type").innerHTML = obj.symbol;
    document.getElementById("crypto_price").innerHTML = eur_price.toFixed(2);
    var VET_fee = eur_price.toFixed(2) * 20;
    fee = VET_fee;
    document.getElementById("crypto_transfer").innerHTML = VET_fee.toFixed(2);
    return fee;
  };

  ourRequest.send();
}

function THETA() {
  // Price verschillende crypto.
  var burl = "https://api.binance.com";

  var query = "/api/v3/ticker/price";

  query += "?symbol=THETAUSDT";

  var url = burl + query;

  var ourRequest = new XMLHttpRequest();

  ourRequest.open("GET", url, true);
  ourRequest.onload = function () {
    const obj = JSON.parse(ourRequest.responseText);
    var eur_price = obj.price / 100 * 84;
    if (obj.symbol == "THETAUSDT") {
      obj.symbol = "Theta Token";
    }
    console.log(obj);
    document.getElementById("crypto_type").innerHTML = obj.symbol;
    document.getElementById("crypto_price").innerHTML = eur_price.toFixed(2);
    var THETA_fee = eur_price.toFixed(2) / 8.33;
    fee = THETA_fee;
    document.getElementById("crypto_transfer").innerHTML = THETA_fee.toFixed(2);
    return fee;
  };

  ourRequest.send();
}