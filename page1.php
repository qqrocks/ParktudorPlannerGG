
<html >
<head>

    <title>The Park Tudor Planner</title>


    <link rel="stylesheet" type="text/css" href="page1.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico">


</head>


<body>
<center>
    <a href="?action=home"><img src="logo.png" style="width: 222px; height: 169px" ></a>
</center>
<center><div id="logo" >

        <div class="heady"><p>Welcome Advisors!</p></div>
        <div class="sent">Please select the adivisory of the student you are looking for</div>
        <table style="width:750px" class="nolookybadnow">
            <tr>
                <?php

                foreach($grades as $grade)
                {
                    ?> <td><?php echo $grade;?></td>
                <?php
                } ?>

            </tr>
            <?php
            $num=0;
            while($num<count($g9)||$num<count($g10)||$num<count($g11)||$num<count($g12)){
            ?>
            <tr>
                <?php if($num<count($g9)){?>
                    <td><a class="nolookybadnow" href="?action=get_advisory&ad_id=<?php echo $g9[$num]->getID();?>">
                        <?php echo ($g9[$num]->getFirst().' '.$g9[$num]->getLast());?></td>
                    </a>
                    </td>
                <?php }
                 else
              {?>
                <td></td>
                <?php } ?>
                <?php if($num<count($g10)){?>
                   <td><a class="nolookybadnow" href="?action=get_advisory&ad_id=<?php echo $g10[$num]->getID();?>">
                    <?php echo ($g10[$num]->getFirst().' '.$g10[$num]->getLast());?></td>
                    </a>
                    </td>
                <?php }
                else
                {?>
                    <td></td>
                <?php } ?>
                <?php if($num<count($g11)){?>
                    <td><a class="nolookybadnow" href="?action=get_advisory&ad_id=<?php echo $g11[$num]->getID();?>">
                        <?php echo ($g11[$num]->getFirst().' '.$g11[$num]->getLast());?></td>
                    </a>
                    </td>
                <?php } else
                {?>
                    <td></td>
                <?php } ?>
                <?php if($num<count($g12)){?>
                    <td><a class="nolookybadnow" href="?action=get_advisory&ad_id=<?php echo $g12[$num]->getID();?>">
                        <?php echo ($g12[$num]->getFirst().' '.$g12[$num]->getLast());?></td>
                    </a>
                    </td>
                <?php }
                else
                {?>
                    <td></td>
                <?php } ?>

            </tr>
            <?php $num++; } ?>
        </table>


    </div>
</center>





</body>
</html>