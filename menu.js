// menu.js
// An example of the use of the click event with radio buttons,
// registerig the event handler by assigning an event property

//the event handler for a radio button collection

function drinkOrder(drink){

  //Put the DOM address of the elements array in a local variable

  var dom = document.getElementById("cafe");

  //Determine which button was pressed

  for(var index = 0; index < dom.cafe.length; index++){
    if(dom.cafe[index].checked){
      drink = dom.cafe[index].value;
      break;
    }
  }

  for(var index = 0; index < dom.cappuccino.length; index++){
    if(dom.cappuccino[index].checked){
      drink = dom.cappuccino[index].value;
      break;
    }
  }
}


// Produce an alert message about the chosen coffee

  switch (coffee) {
    case "SingleCafe":
      alert("single auLait");
      break;
    case "DoubleCafe":
      alert("DOuble auLait");
      break;
    case "SingleCappu":
      alert("Single Cappuccino");
      break;
    case "DoubleCappu":
      alert("double Cappuccino");
      break;
    default:
      alert("Error in JavaScript function coffeeChoice");
      break;
  }
}
