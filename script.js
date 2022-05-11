function enables(){
    names.disabled=false
    mail.disabled=false
    numb.disabled=false
    adhaar.disabled=false
    age.disabled=false

}
function disable(){
    names.disabled=true
    mail.disabled=true
    numb.disabled=true
    adhaar.disabled=true
    age.disabled=true
}

function checknumber(){
    // Function To Check Whether the Mobile Number Entered Contains 10 digits or not
    var numb=document.getElementById("numb").value;
    if(numb.length==10){
        document.getElementById("first").innerHTML = '<h5 style="display: inline;">Valid</h5>';
        document.getElementById("first").style.color = "green";
    }
    else{
        document.getElementById("first").innerHTML = '<h5 style="display: inline;">10 Digits Required</h5>';
        document.getElementById("first").style.color = "red";
    }
}
function checknumber1(){
    // Function To Check Whether the Mobile Number Entered Contains 10 digits or not
    var numb=document.getElementById("adhaar").value;
    if(numb.length==12){
        document.getElementById("third").innerHTML = '<h5 style="display: inline;">Valid</h5>';
        document.getElementById("third").style.color = "green";
    }
    else{
        document.getElementById("third").innerHTML = '<h5 style="display: inline;">12 Digits Required</h5>';
        document.getElementById("third").style.color = "red";
    }
}
function field1(){
    // Checking The First Name Field By Using The Function field1()  
    var fname = document.getElementById("names").value;
    var reg = /^[a-zA-Z\s\'\-]{2,15}$/;
    if (reg.test(fname)) {
        document.getElementById("second").innerHTML = '<h5 style="display: inline;">Valid</h5>';
        document.getElementById("second").style.color = "green";
    }
    else {
        document.getElementById("second").innerHTML = '<h5 style="display: inline;">2 to 15 Characters</h5>';
        document.getElementById("second").style.color = "red";
    }
}