<?php 
  $title="Home";
?>

  
<body style=" background-image: url(img/back.jpg)">  
  <div class="row">
<center>
    <br>
	<br>
<br>
<br><br>
<br><br>
<br></h4>
     <h1>User Registration</h1>
      <br>
    
      <form name="form1" method="post" action="cus_reg_act.php" onSubmit="return check();">
     
       <table width="525" border="0" align="center">
         <tr>
           <td width="122"><div align="left" class="style7">Name </div></td>
           <td width="288"><input type="text" name="name"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input type="password" name="pass"></td>
         </tr>
         
         <tr>
           <td class="style7">City</td>
           <td><input name="city" type="text" id="city"></td>
         </tr>
		 <tr style="color: black">
                            <td height="50" colspan="2"><p>
                              <label>
                                <input type="radio" name="user" value="Admin" id="Admin">
                                Admin</label>
                              <br>
                              
                              <label>
                                <input type="radio" name="user" value="user" id="user" checked>
                                User</label>
                            </p></td>
                          </tr>
         
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Signup"></td>
         </tr>
       </table>
     </form>
      </center>
    
  </div>  
</body>