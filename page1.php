<?php
require('/model_pages/grade_db.php');
?>
<html >
<head>

    <title>The Park Tudor Planner</title>


    <link rel="stylesheet" type="text/css" href="style.css">
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

            <tr>
                <td><?php echo ($g9[0]->getFirst().' '.$g9[0]->getLast());?></td>
                <td>~</td>
                <td>~</td>
                <td>~</td>
            </tr>
            <tr>
                <td>~</td>
                <td>~</td>
                <td>~</td>
                <td>~</td>
            </tr>
            <tr>
                <td>~</td>
                <td>~</td>
                <td>~</td>
                <td>~</td>
            </tr>
            <tr>
                <td>~</td>
                <td>~</td>
                <td>~</td>
                <td>~</td>
            </tr>
            <tr></tr>
        </table>
        <a class="button" href="page2.php" target="_blank">Page 2</a>

    </div>
</center>





</body>
</html>