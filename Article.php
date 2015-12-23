 <?php

    ob_start();

    $sql_select = "SELECT * FROM `Article` WHERE `Check` = 0";
   
    $result = mysql_query($sql_select,$connect);

    $index = 0;

    if(!$result){

    echo'<script>alert("Something Wrong here")</script>';   

    }else{

        if(mysql_num_rows($result)==0){

            echo "No article please add more";

        }

        while($row = mysql_fetch_assoc($result)){

            $index++;

            if($index==1){

                $sql_update = $sql_update." WHERE `Article_Url` = '$row[Article_Url]'";

                mysql_query($sql_update);
                $ac = $row[Article_Comment];
                $au = $row[Article_Url];
                $at = $row[Article_Title];
				
				#I get parameter from database and put those parameter into my python script 

                $output = passthru("/usr/bin/python2.7 /Your Path of your Python Script/FB_Post.py '$ac' '$at' '$au'");


                break;

            }

        }

    }
