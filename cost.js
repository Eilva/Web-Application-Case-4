window.onload = function(){
  var cutomJavaQuan = document.getElementById("cutomJavaQuan");
  var cutomJavaSubTotal = document.getElementById("cutomJavaSubTotal");
  var javaPrice= document.getElementById("javaPrice");
  var cafePrice1= document.getElementById("cafePrice1");
  var cafePrice2= document.getElementById("cafePrice2");
  var capPrice1= document.getElementById("capPrice1");
  var capPrice2= document.getElementById("capPrice2");
  cutomJavaQuan.addEventListener("change", onChangeJavaQuan, false);

  var cutomCafeQuan = document.getElementById("cutomCafeQuan");
	var cutomCafeSubTotal = document.getElementById("cutomCafeSubTotal");
	cutomCafeQuan.addEventListener("change", onChangeCafeQuan, false);

	var cutomCappQuan = document.getElementById("cutomCappQuan");
	var cutomtCappSubTotal = document.getElementById("cutomtCappSubTotal");
	cutomCappQuan.addEventListener("change", onChangeCappQuan, false);

	var cutomTotal = document.getElementById("cutomTotal");
}

function onChangeJavaQuan(event){
  updateJavaSubTotal();
  updateTotal();
}

function onChangeCafeQuan(event){
	updateCafeSubTotal();
	updateTotal();
}

function onChangeCappQuan(event){
	updateCappSubTotal();
	updateTotal();
}

function getJavaSubTotal(){
  return parseFloat(cutomJavaQuan.value * javaPrice.value);
}

function getCafeSubTotal(){
  var selectedVal = getSelectedVal('cafe');
  var unitPrice;
  switch (selectedVal){
    case "SingleCafe":
    unitPrice = cafePrice1.value;
    break;
    case "DoubleCafe":
    unitPrice = cafePrice2.value;
    break;
  }
  return parseFloat(cutomCafeQuan.value * unitPrice);
}

function getCappSubTotal(){
  var selectedVal = getSelectedVal('cappuccino');
  var unitPrice;
  switch (selectedVal){
    case "SingleCappu":
    unitPrice = capPrice1.value;
    break;
    case "DoubleCappu":
    unitPrice = capPrice2.value;
    break;
  }
  return parseFloat(cutomCappQuan.value * unitPrice);
}

function updateJavaSubTotal(){
  cutomJavaSubTotal.value = getJavaSubTotal().toFixed(2);
}

function updateCafeSubTotal(){
  cutomCafeSubTotal.value = getCafeSubTotal().toFixed(2);
}

function updateCappSubTotal(){
  cutomtCappSubTotal.value = getCappSubTotal().toFixed(2);
}

function updateTotal(){
  cutomTotal.value = (getJavaSubTotal() + getCafeSubTotal() + getCappSubTotal()).toFixed(2)
}

function getSelectedVal(radioName){
  var radioCafe = document.getElementsByName(radioName);
  for(var i = 0; i < radioCafe.length; i++){
    if(radioCafe[i].checked){
      return radioCafe[i].value;
    }
  }
  return -1;
}
