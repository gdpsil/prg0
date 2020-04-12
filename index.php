<!DOCTYPE html>
<html lang="en">

<?php
if (isset($_SESSION['myusername'])){
    session_unset();
    session_destroy();
}
session_start();
$_SESSION['myusername']='';
$_SESSION['mypassword']='';
// $_SESSION[]='';
?>
<head>
   <title>San Felipe. Login</title>
   <link rel="stylesheet" type="text/css" href="total.css" />
   <meta name="google-site-verification" content="Ly1w1Lk4hDRJKvG996qVCpgzPNN2SP1BLuPcxnSlZYA" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
************************************************************************************** -->
<style>body {color: #BB0000; background-image: url(images/logo.png) }</style>
<div id="contenedor bg-success">
	<div class="row">
    	<div id="page-header">
        	<h1><a href="www.colegiosanfelipe.edu.ar">San Felipe. St.Philip</a></h1>
        	<p><span><style font-size: 12px;>  dise�o Gustavo De Poli</style></span></p>
    	</div>
    </div>
    <div class="row">
    	<div class="col-sm-12 col-md-12">
        <table width="300" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="#CCCDDD">
        	<tr>
            	<form name="validar" method="post" action="verificalog.php">
                	<td>
                		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                        	<tr>
                           		<td colspan="3"><strong>Usuario Login </strong></td>
                        	</tr>
                        	<tr>
                            	<td width="78">Usuario </td>
                            	<td width="6">:</td>
                            	<td width="294"><input name="myusername" type="text" id="myusername"></td>
                        	</tr>
                        	<tr>
                            	<td>Password </td>
                            	<td>:</td>
                            	<td><input name="mypassword" type="password" id="mypassword"></td>
                        	</tr>
                        	<tr>
                           		<td>&nbsp;</td>
                            	<td>&nbsp;</td>
                            	<td><input type="submit" name="Submit" value="Login"></td>
                        	</tr>
                        </table>
                    </td>
                </form>
            </tr>
        </table>
    	</div>
    </div>
 </div>
 
 
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

