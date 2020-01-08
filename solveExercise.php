<?php

if (isset($_GET["name"])) {
    
    print " user " . $_GET["name"]."<BR>";
    $myfile = fopen("Users.txt", "r") or die("Unable to open users file!");
    
    $newUser = true;

    while(!feof($myfile)) {
        $currentLine = trim(fgets($myfile));
        if ($currentLine == $_GET["name"])
        {
            $newUser = false;
            print " You already visited our page !<BR>";
        }
      }
      if ($newUser==true)
      {
          print "You are new to our system ! We will update our users file ...<BR>";
      }

} else {
    print " you are not logged in yet ";
?>
    <form action="solveExercise.php" method="get">
        User Name: <input type="text" name="name"><br>
        <input type="submit" value="Login">
    </form>

<?php
}
?>