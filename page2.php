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
     <div class="yelly">
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
                  <td ><a class="textor" href="?action=get_student&stuID=<?php echo $student->getID();?>">
                      <?php echo $student->getFirst().' '. $student->getLast();?>
                  </a></td>
                <td><img src= "Delete button.png" alt="some_text" class="pert"></td>
                <td><input type="checkbox" name="Delete" value="Delete"><br></td>
                        </tr>
               <?php } ?>





        </table>
    <div class="add">
        <p class="text">Add a Student to this Advisory</p>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="add_student" />

        <input type="hidden" name='ad_id' value="<?php echo $advisorID;?>"/>

        <label>First Name:</label>
        <input class="textbox" type="input" name='f_name'/><br />

            <label>Last Name:</label>
         <input class="textbox" type="input" name='l_name'/><br />

            <label>Grade:</label>
        <input class="textbox" type="input" name='grade'/><br />
        <input type= "submit" value="Add" class="myButton"/>
        </form>
    </div>
         </div>

    </div></center>



</body>
</html>