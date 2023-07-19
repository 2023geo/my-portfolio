<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Message Form</title>
<style type="text/css">
input[type=text], #txtMessage {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>

<body>
<fieldset>
<legend>Contact Form</legend>
<form name="frmContact" method="post" onsubmit="validate()">
<p>
<label for="Name">Name </label>
<input type="text" name="txtName" id="txtName" placeholder="Name">
</p>
<p>
<label for="email">Email</label>
<input type="text" name="txtEmail" id="txtEmail" placeholder="Email">
</p>
<p>
<label for="phone">Phone</label>
<input type="text" name="txtPhone" id="txtPhone" placeholder="phone">
</p>
<p>
<label for="message">Message</label>
<textarea name="txtMessage" id="txtMessage" cols="25" rows="5" placeholder="Type your message here"></textarea>
</p>
<p> </p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
<script>
    function validate(){
        var name= document.frmContact.txtName.value;
        var mail= document.frmContact.txtEmail.value;
        var phone= document.frmContact.txtPhone.value;
        var message= document.frmContact.txtMessage.value;
        if(name == null | name ==""){
            alert("name cannot be blank");
            return false;
        }
        if(mail == null || mail ==""){
            alert("email field cannot be blank");
            return false;
        }
        if(phone == null || phone ==""){
            alert("phone number cannot be blank");
            return false;
        }
        if(message == null || message ==""){
            alert("message cannot be blank");
            return false;
        }
       


        

    }
</script>
</body>
</html>
