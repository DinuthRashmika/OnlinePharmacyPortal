function validate()
{
    var email=document.getElementById("em");
    var password=document.getElementById("pas");



    if(email.value.trim()=="" ||password.value.trim()=="") 
    {
        alert("No blank values allowed");
        return false;
    }
    else
    {
        true;

    }
}
