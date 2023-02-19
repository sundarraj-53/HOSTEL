function validateform()
{
  let x=document.forms["form"]["user"].value;
  let y=document.forms["form"]["firstname"].value;
  if(x=="" || x==null)
  {
    alert("user must be filled out");
    return false;
  }
  if(y=="" || y==null)
  {
    alert("password must be filled out");
    return false;
  }
}