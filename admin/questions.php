<?php
$con=mysqli_connect("localhost","root","hey","article-management-system");
          
    session_start();
    $user=$_SESSION['user'];
    $no=$_POST['qstnno'];
    $result=mysqli_query($con,"SELECT sno,lab$no from questions order by sno asc ");
    
    

?>

<!DOCTYPE html>
<html>
<head>
  <title>Questions</title>
  <link rel="stylesheet" href="../style.css" type="text/css" />
</head>
<body>
<?php 
  include_once "./heading.php";
?>
<center>
<a href="admin.php"><button>Return Back</button></a>
<a href="logout.php"><button>Logout</button></a>

<!--
<form method="post">
  
<?php 
/*$nam="labno";
$typ="checkbox";
$ab="submit";
for ($i=1; $i <8 ; $i++) { 
  print("<input name=$nam type=$typ value=$i> Lab $i | ");
  //print("<input name=$nam type=$typ value=$i type=$ab >");
}
*/
?>
 <input type="submit" value="send">
  <input type="reset" value="reset"> 
</form> -->
<br/><br/>
Choose a Lab to view its Questions<br/><br/>
<?php
$nam="qstnno";
for ($i=1; $i < 2 ; $i++) {
$j=$i+1; 
$k=$i+2; 
$l=$i+3; 
$m=$i+4; 
$n=$i+5; 
$o=$i+6; 
$p=$i+7; 
print("<form method=post>");
print("<input type=submit name=$nam value=$i >");
print("<input type=submit name=$nam value=$j >");
print("<input type=submit name=$nam value=$k >");
print("<input type=submit name=$nam value=$l >");
print("<input type=submit name=$nam value=$m >");
print("<input type=submit name=$nam value=$n >");
print("<input type=submit name=$nam value=$o >");
print("<input type=submit name=$nam value=$p >");
//print("<input type=submit value=lab$i >");
print("</form>");
}

?>

<br/>
<?php 
if ($no=="") {
  print("<div id=redd>");
  echo "<b>Please enter lab no. above to view Questions</b><br>";
  print("</div>");
}
else {
  $ab=$no;
  echo "<b>You are viewing Questions for lab no. $ab </b><br><br>";
  print("<table>");
print("<tr>");
print("<td><h1>S.no.</h1></td>");
print("<td><h1>Question</h1></td>");
print("</tr>");
}
  

    $i=0;
      while($out=mysqli_fetch_array($result))
      {
        $i++;
        $l=$out['1'];
                
        ?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $l; ?></td>
        </tr>
        <?php

      }
      ?>

  
</table>
</center>

</body>
</html>