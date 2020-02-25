<?php
 if(preg_match("/^[  a-zA-Z]+/", $_REQUEST['uname'])){
 $name=$_REQUEST['uname'];
  //connect  to the database
 $db=mysql_connect  ("name", "usernser", "pw") or die ('Cannot connect to the database  because: ' . mysql_error());
 //-select  the database to use
 $mydb=mysql_select_db("users");
  //-query  the database table
  $sql="SELECT name FROM users WHERE username='%" . $uname .  "%' ";
   //-run  the query against the mysql query function
   $result=mysql_query($sql);
    //-create  while loop and loop through result set
    while($row=mysql_fetch_array($result)){
      $name  =$row['name'];
      $uname=$row['username']; 
	  //-display the result of the array
  echo "<ul>\n";
  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$name . " " .  "</a></li>\n" ;
  echo "</ul>";
}
?>