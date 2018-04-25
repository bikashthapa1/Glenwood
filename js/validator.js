function validateEmail()
{
   var emailID = document.getElementById('email').value;
 
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   
   if (atpos < 1 || ( dotpos - atpos < 2 )) 
   {
      alert("Please enter correct email ID")
      document.getElementById('email').focus() ;
      return false;
   }
  return( true );
}

function validateform()
{
    var num=document.getElementById('phone').value;
    if(num=="")
    {
        alert("Please enter the phone number");
        document.getElementById('phone').focus(); 
        return false;
    }
    if(isNaN(num))
    {
        alert("Invalid phone number");
        document.getElementById('phone').focus(); 
        return false;
    }
    if((num).length < 10)
    {
        alert("Phone number should be minimum 10 digits");
        document.getElementById('phone').focus(); 
        return false;
    }
    if((num).length > 10)
    {
        alert("Phone number should be minimum 10 digits");
        document.getElementById('phone').focus(); 
        return false;
    }

    return true;
}