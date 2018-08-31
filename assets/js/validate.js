function emailValidation(){
  if(document.mForm.email.value == ""){
    //email validation
    alert("Please enter your email");
    return false;
  }
  if(document.mForm.email.value){
    var emailId = document.mForm.email.value;
    var atSign = emailId.indexOf("@");
    var dot = emailId.lastIndexOf(".");
    if( atSign < 1 || (dot - atSign) < 2){
      alert("Please enter a valid email");
      return false;
    }
  }
  return(true);
}
function checkPassword(){
  if(document.mForm.pass.value.length < 8){
    alert("Password length should be at least 8 characters long");
    return false;
  }
  if(document.mForm.pass.value != document.mForm.cpass.value){
    alert("Passwords do not match");
    return false;
  }
  return(true);
}
