<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Sing_up</title> 
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;   
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
button{
  padding: 10px;
  background-color: greenyellow;
  border-radius: 50px;
  font-size: 25px;
  text-align: center;
  width: 20%;
} 
h1{
  margin-top: 00px;
}
.right{
  float: right;  
}
.left{
  float: left;
}
.center{
  text-align: center;
}
</style>  
</head>  
<body>  
<form>  
  <div class="container">  
   <div class="right">
      <img src="logo.png" height="60" width="60">
    </div> 
    <div class="left">
      <img src="logo.png" height="60" width="60">
    </div> 
  <center>  <h1> Patient Registeration Form</h1> </center>  
  <hr>  
  <label>Patient full Name : </label>   
<input type="text" name="Patient_full_Name" placeholder= "Patient full Name" required />    
<div>  
<label> Age : </label>   
<input type="text" name="age" placeholder= "age" size="5" required /> <br><br>
Gender :  
</label><br><br>
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>  
<input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/>   
<input type="text" name="phone" placeholder="phone no." size="10"/ required>   
Current Address :  
<textarea cols="80" rows="5" placeholder="Current Address" name="address" required>  
</textarea>    
<label>Patient admit position in hospital</label>
<input type="text" name="admit_position" placeholder="patient admit position in hospital" required />
  <div class="center">
    <button>Register</button> 
    </div>   
</form>  
</body>  
</html>