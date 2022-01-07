<!DOCTYPE html>
<html>

<head>
    <title>php03</title>
</head>

<body>
    <?php 
        $input = array("red","green","yellow","blue","pink","black","white");
        echo "MyArray Value : ";
        foreach($input as $value)
        {
            echo "$value ";
        }
        echo "<br> Expected Value : ";

        
        for($i=count($input)-1;$i>=0;$i--)
        {
            echo "$input[$i] ";
        }
    
    ?>
    
    
</body>

</html>