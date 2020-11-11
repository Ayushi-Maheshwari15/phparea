
    
        <?php
        $fside=$_POST['fside'];
        $sside=$_POST['sside'];
        $tside=$_POST['tside'];
        $result='';
        $x='';
        $x=($fside+$sside+$tside)/2;
        $y=$x*($x-$fside)*($x-$sside)*($x-$tside);
        echo"the first side is $fside<br>";
        echo"the second side is $sside<br>";
        echo"the third side is $tside<br>";
        $result=sqrt($y);
        echo"the area of taingle is $result<br>";
        
        
        
        

