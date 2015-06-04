
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
                          echo $n->getName().'<br />';
                        }
                        }
                ?> </td>
<?php }?>
            </tr>
            <tr>
            <td>Free Periods</td>
            <?php foreach($grade1 as $grade2){
                ?>
            <td>
                <?php
                $s1=Calculate::getFrees(1, $id, $grade2);
                $s2=Calculate::getFrees(2, $id, $grade2);
                echo 's1: '.$s1.' / s2: '.$s2;
                ?>
            </td>
            <?php } ?>
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
            <form action="index.php" method="get">
            <input type="image" src="editbutton.png" name="edit" class="editit" id="edit"  />
            <input type="hidden" name="stuID" value="<?php echo $id;?>"/>
            <input type="hidden" name="action" value="edit_stu"/>
                </form>
        </td>
    </tr>

</table>
        <table class="special2" >
            <tr>
                <td class="celly3">
                    Graduate?
                </td>
            </tr>
            <tr>
                <td class="celly4">

                   <?php if(Calculate::grad($id))
                            echo "YES";
                   else
                            echo "NO";?>
                </td>
            </tr>

        </table>

    </div>
</center>

</body>
</html>