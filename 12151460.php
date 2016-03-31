<html>
<head></head>
<title>Table</title>
<body>
<table border='8' cellpadding="5" cellspacing="5" bordercolor="aqua" style='colappse:0;' align='center' width='605   height="400"    '>
<tr>
    <td height="34" colspan="4" bgcolor="red">
<center>
      	<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF" colspan=3></div>
          </font>		
</font>
    	</center>	
	<center>
	<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF">
	<div align="center"></div>
        	</font></font>
	<table width="602" border="0" align="left" cellpadding="0" cellspacing="0">
        	<tr>
          <td width="51">
<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>Rank</b></font></font></td>
          <td width="249">
<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>Movie</b></font></font></td>
          <td width="173"><font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>Downloads</b></font></font></td>
          <td width="129"><font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>Grosses</b></font></font></td>
        </tr>
      </table>
    </center>
  	</td>
  </tr>
<?php
	for ($i=1; $i<=10; $i++)
	{
	if ($i%2==1)
		{
		$warna="aqua";
		echo"
		<tr bgcolor='$warna'>
		<td height=34><center>$i</td>
		<td height=34 colspan=7>&nbsp
		Zombie Land
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		9,260,000
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp$137,675
		</td>
		</tr>";
		$i++;
		}
		else{
		$warna="silver";
		}
		echo "
		<tr bgcolor='silver'>
		<td height=34 width=43><center>$i
		</td>
		<td height=34 width=210> &nbspThe Conjuring 
		</td>
		<td height=34 width=180><center>8,840,000</td>	
		<td height=34><center>$581,418,000
		</td>
		</tr>";
}
?>
<tr>
<td height=25 colspan="4" bgcolor="red"><b><font color="black"><center>www.stimikelrahmah.com</font></b></td></tr>
<tr>
 </tr>
</table>
</body>
</html>


 
