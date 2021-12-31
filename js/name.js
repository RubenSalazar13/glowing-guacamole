var eflag = pflag = false;
function validate(box)
{
  let id = box.attributes["id"].nodeValue;
  let p = document.getElementById("pswd");
  let e = document.getElementById("pswd2");
  let sb = document.getElementById("sub-but");
if (id == "password")
{
  p.innerText = isValid(box.value, 0);
}
else if (id == "password2")
{
  e.innerText = isValid(box.value, 1);
 }
 if (pflag && eflag) sb.disabled = false;
 else sb.disabled = true;
}
function isValid(string, type)
{
  //type 0 = p1,
  let reg, msg, retVal;

  switch(type)
  {
    case 0:
    reg = 
    /^\S{4,12}$/;
    msg = "password";
    retVal = reg.test(string);
    if (retVal) {pflag = true;}
      else {pflag = false;}
    break;
  case 1:
    reg = 
    /^\S{4,12}$/;
    msg = "password";
    retVal = reg.test(string);
    if (retVal) {eflag = true;}
      else {eflag = false;}
    break;
  }
  
  return msg + " is " + (retVal ? " valid." : "required 4-12");
}