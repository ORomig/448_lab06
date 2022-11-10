
function checkForm(){
    var empty = isOneEmpty();
    if(empty=="t")
      {return false;}
    return true;
  };
  
  function isOneEmpty() {
      var name = document.forms["order"]["name"];
      var email = document.forms["order"]["email"];
      var password = document.forms["order"]["password"];
      var aloe = document.forms["order"]["aloe"];
      var cyclamen = document.forms["order"]["cyclamen"];
      var fittonia = document.forms["order"]["fittonia"];
      var nameEmpty = true;
      var emailEmpty = true;
      var passwordEmpty = true;
      var aloeEmpty = true;
      var cyclamenEmpty = true;
      var fittoniaEmpty = true;
      var empty = "f";
    if (name.value && name.value.length > 0 && name.value.trim().length > 0) 
      {nameEmpty= false;}
    if(email.value && email.value.length > 0 && email.value.trim().length > 0)
      {emailEmpty= false;}
    if(password.value && password.value.length > 0 && password.value.trim().length > 0)
      {passwordEmpty= false;}
    if(aloe.value && aloe.value.length > 0)
      {aloeEmpty= false;}
    if(cyclamen.value && cyclamen.value.length > 0)
      {cyclamenEmpty= false;}
    if(fittonia.value && fittonia.value.length > 0)
      {fittoniaEmpty= false;}
    
  var checked_ship = document.querySelector('input[name = "ship"]:checked');
  var oneChecked = false;
  if(checked_ship != null){  //Test if something was checked
  oneChecked = true; //Alert the value of the checked.
  } else {
  oneChecked = false; //Alert, nothing was checked.
  }
  if(nameEmpty == true || emailEmpty==true || passwordEmpty==true||aloeEmpty==true||cyclamenEmpty==true||fittoniaEmpty==true||oneChecked==false) 
      {empty="t";
          alert("All fields must be filled out with at least a zero");
      }
  return empty;
  };
  
  
  