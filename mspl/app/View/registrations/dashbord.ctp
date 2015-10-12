<?php //debug($send); ?>
<html>
<head>
<style>
table { 
color:#DA603D;
font-family: Helvetica, Arial, sans-serif;
width: 100%; 
border-collapse: 
collapse; border-spacing: 0;
margin-top:5%;
}

td, th { 
border: 1px solid transparent; /* No more visible border */
height: 30px; 
transition: all 0.3s;  /* Simple transition for hover effect */
}

th {
background: #DFDFDF;  /* Darken header a bit */
font-weight: bold;
}

td {
background: #FAFAFA;
text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */ 
tr:nth-child(even) td { background:#5CA7F1; }/*changed bye me   ( background: #F1F1F1;) */   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */ 
tr:nth-child(odd) td { background:#5CA7F1; }  

tr td:hover { background:#F60; color: #FFF; } /* Hover cell effect! */
</style>
</head>
<body>
<div ><center>
<?php
$var=$send['Registration']['image'];

  ?>
<img src="<?php echo $this->webroot ?>img/<?php echo $var; ?>" style="width:30%; height:300px; border-radius:50%;" /></center>
</div>
<table>
<?php
$name=$send['Registration']['firstname']." ".$send['Registration']['lastname'];
?>
<tr>
    <th>Name</th>
    <th>user name</th>
    <th>Email Id</th>
    <th>Contact Number</th>
    <th>Address</th>
    <th>About us</th>
                      
</tr>
<tr>
<td><?php echo $name; ?></td>
<td><?php echo $send['Registration']['Uname']  ?></td>
<td><?php echo $send['Registration']['EmailId']  ?></td>
<td><?php echo $send['Registration']['contactno']  ?></td>
<td><?php echo $send['Registration']['address']  ?></td>
<td><textarea style="width:100%; resize:none; background-color:#5CA7F1; color:#DA603D;"><?php echo $send['Registration']['aboutus'] ?></textarea></td>
 <!--$send['Registration']['image']-->

</tr>
<!--<tr>
<td colspan="5" align="center"><img src="<?php //echo $this->webroot ?>img/port/5.jpg" style="width:20%; height:600%;" /></td>
</tr>-->
</table>

</body>
</html>