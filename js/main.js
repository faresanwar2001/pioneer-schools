function validate(){
    var name= document.getElementById("name").value;
    var gender= document.getElementById("gender").value;
    var date= document.getElementById("date").value;
    var grade= document.getElementById("grade").value;
    var number= document.getElementById("number").value;
    var mail= document.getElementById("mail").value;
    var comment= document.getElementById("comment").value;
    var message= document.getElementById("error");

//style the error message
message.style.color="white";
message.style.backgroundColor="red";
message.style.textAlign="center";
messagestyle.padding="20px 30px";
 
     if(name==""   &&grade==""   &&number==""  &&mail=="" &&gender=="" &&date=="" &&comment==""  ){
        message.innerHTML="please Enter The Data";
            return false;
     }else if (name.length<5 || name.length>15){
        message.innerHTML("please insert 5-15 character in user name  ")
        return false;
     }else if (mail.indexOf('@')=='-1'){
      message.innerHTML("please Enter valid E-mail")
      return false;
     }else{
      return true;
     }
}
