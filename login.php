<body style=" background-image: url(img/back.jpg)">
<script type='text/javascript'>
function validateForm() {
    var x = document.forms["form1"]["lid"].value;
	var y = document.forms["form1"]["pass"].value;
    if (x == "" || y == "") {
        alert("Name and Password are required");
        return false;
    }
	
}
</script>

<div>
<center>
    <form name="form1" method="post" action="login_act.php" onsubmit="return validateForm()">
      <table width="300" border="0" align ="center">
        <tr>
          <td width="800">    <h4><br>
<br>
<br>
<br><br>
<br><br>
<br></h4>
           <table width='300' border='2' style='background-color:#DCD7E1;' >
                          <tr>
                            <td height="38" colspan="2"><div align="center"><h2>Login</h2></div></td>
                          </tr>
                           <tr>
                           <td  height="38" colspan="2"><div align="center"><a href="customerreg.php"><h4>New here?</h4></a></div></td>
                          </tr>
                          <tr>
                              <td width="122" style="color: black"><div align="right">Username: &nbsp;&nbsp;</div></td>
                              <td width="158"><input type="text" name="lid" id="lid"><br></td>
                          </tr>
                          <tr>
                            <td style="color: black"><div align="right">Password:&nbsp;&nbsp;</div></td>
                            <td><input type="password" name="pass" id="pass"><br></td>
                          </tr>
                          <tr>
                            <td><div align="right"></div></td>
                            <td><input type="submit" name="submit" id="submit" value="Login">          <input type="reset" name="cancel" id="cancel" value="Reset"></td>
                          </tr>
              </table>
          
          
          &nbsp;          </td>
        </tr>
      </table>
        </form>
      </center>
    
  </div>  
  </body>
