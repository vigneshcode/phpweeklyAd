<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="css/main.css" rel="stylesheet">
        <meta charset="UTF-8">
        
        <title></title>
    </head>
    <body>
        
        <header>
            <!--Header-->
        </header>
        <div>
            <input type="time"/>
            
        </div>
        <ul>
            <li>
                <h3> Ad 1 of 4</h3>
                <image class="imgSlide" src="img/image1.jpeg">                
            </li>
            
            <li>
                <image class="imgSlide" src="img/image2.jpeg">                
            </li>
            
            <li>
                <image class="imgSlide" src="img/image3.jpeg">                
            </li>
            
            <li>
                <image class="imgSlide" src="img/image4.jpeg">                
            </li>
            
        </ul>
        <?php
        define("PI",3.14);
        $radius=5;
        
        //If
        if($radius==5)
        {
            
            echo "Radius is 5 metre";
        }
        
        //While
        $i=0;
        while($i<5)
        {
          echo $i;
            ++$i;
        }
        
        //do
        
        
        //for
        
       
       echo PI*$radius*$radius;
       
        ?>
    </body>
</html>
