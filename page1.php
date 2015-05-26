<?php
require('/model_pages/grade_db.php');
?>
<html >
<head>

    <title>The Park Tudor Planner</title>


    <link rel="stylesheet" type="text/css" href="page1.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico">


</head>

<body >
<center><img src= "logo.png" alt="some_text" style="width: 222px; height: 169px  "></center>
<center><div id="logo" >

        <div class="heady"><p>Welcome Advisors!</p></div>
        <div class="sent">Please select the adivisory of the student you are looking for</div>
        <table style="width:750px">
            <tr>
                <td><?php echo grade_db::getGrade(9); ?></td>
                <td><?php echo grade_db::getGrade(10);?></td>
                <td><?php echo grade_db::getGrade(11);?></td>
                <td><?php echo grade_db::getGrade(12);?> </td>
            </tr>
            <?php
            $num=0;
            while($num<count($g9)||$num<count($g10)||$num<count($g11)||$num<count($g12)){
            ?>
            <tr>
                <?php if($num<count($g9)){?>
                <td><?php echo ($g9[$num]->getFirst().' '.$g9[$num]->getLast());?></td>
                <?php }?>
                <?php if($num<count($g10)){?>
                    <td><?php echo ($g10[$num]->getFirst().' '.$g10[$num]->getLast());?></td>
                <?php }?>
                <?php if($num<count($g11)){?>
                    <td><?php echo ($g11[$num]->getFirst().' '.$g11[$num]->getLast());?></td>
                <?php }?>
                <?php if($num<count($g12)){?>
                    <td><?php echo ($g12[$num]->getFirst().' '.$g12[$num]->getLast());?></td>
                <?php }?>

            </tr>
            <?php $num++; } ?>
        </table>


    </div>
</center>





</body>
</html>