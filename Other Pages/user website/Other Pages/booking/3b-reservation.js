var reserve = {
  
  toggle : seat => seat.classList.toggle("selected"),

  
  save : () => {
    
    var selected = document.querySelectorAll("#layout .selected");

    
    if (selected.length == 0) { alert("Please select at least one seat before booking.."); }

    
    else {
      var ninja = document.getElementById("ninja");
      for (let seat of selected) {
        let input = document.createElement("input");
        input.type = "hidden";
        input.name = "seats[]";
        input.value = seat.innerHTML;
        ninja.appendChild(input);
      }
      ninja.submit();
    }
  }
};
