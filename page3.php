
<html >
<head>

    <title>The Park Tudor Planner</title>


    <link rel="stylesheet" type="text/css" href="page3.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico">


</head>

<body >
<center><a href="?action=home"><img src="logo.png" style="width: 222px; height: 169px" ></a></center>
<center><div id="logo" >

        <div class="heady"><p>Summary for <?php echo $name?></p></div>

        <table style="width:750px">
            <tr>
                <td>        </td>
                <?php foreach($grades as $grade)
{?>
                <td><?php echo $grade?></td>
                <?php } ?>

           <?php foreach($depts as $dept)
{?>

            <tr>
                <td><?php echo $dept->getName();?></td>
                <?php foreach($grade1 as $grade2){
                    ?>
                <td>
                <?php    $names=course_selection_db::getCoursesByStuYr($id, $grade2, $dept->getID());
                        foreach($names as $n)
                        {
                          echo $n.'<br />';
                        }
                        }
                ?> </td>
<?php }?>

            </tr>
        </table>
<table class="special">
    <tr>
        <td class="celly2">
            Edit
        </td>
    </tr>
    <tr>
        <td class="celly">
            <input type="image" src="editbutton.png" name="edit" class="editit" id="edit" />
        </td>
    </tr>

</table>
        <table class="special2">
            <tr>
                <td class="celly3">
                    Graduate?
                </td>
            </tr>
            <tr>
                <td class="celly4">
                    MARGET PHP
                </td>
            </tr>

        </table>
        <a class="button" href="page4.php" target="_blank">Page 4</a>
    </div>
</center>

</body>
</html>