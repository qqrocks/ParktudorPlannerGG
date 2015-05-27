<?php

?>
<html >
<head>

    <title>The Park Tudor Planner</title>


    <link rel="stylesheet" type="text/css" href="page2.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico">


</head>

<body >
<center>
    <a href="?action=home"><img src="logo.png" style="width: 222px; height: 169px" ></a>
</center>
<center>
<div id="logo" >

    <div class="heady"><p><?php echo $fName. ' '. $lName. "'s Advisory";?></p></div>

        <table style="width:400px" class="tbl">
            <tr>
                <td>Name</td>
                <td>Delete</td>
                <td> Click to activate Delete </td>

            </tr>




                <?php
                foreach($students as $student)
                {?>
                    <tr>
                  <td><?php echo $student->getFirst().' '. $student->getLast();?></td>
                <td><img src= "Delete button.png" alt="some_text" class="pert"></td>
                <td><input type="checkbox" name="Delete" value="Delete"><br></td>
                        </tr>
               <?php } ?>





        </table>
    <div class="add">
        <p class="text">Add a Student to this Advisory</p>
        <label>First Name:</label>
        <input class="textbox" type="text" name="f_name"/><br />
        <label>Last Name:</label>
        <input class="textbox" type="text" name="l_name"/><br />
        <label>Grade:</label>
        <input class="textbox" type="text" name="grade"/><br />
        <input type= "submit" valueclass="myButton"
    </div>
    <a class="button" href="page3.php" target="_blank">Page 2</a>
    </div></center>



</body>
</html>