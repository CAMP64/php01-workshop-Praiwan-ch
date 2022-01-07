<!DOCTYPE html>
<html>

<head>
    <title>php04</title>
</head>

<body>
    <?php
        $word = 'Software Engineering';
        echo "String : $word <br>";

       
        $count = array_count_values(str_split($word)); // str_split -> change to key || array_count_values -> count repeating 
        arsort($count); // sort 
        
        echo 'Largest Chracter : ';
        echo substr_count($word, array_keys($count)[0]); 
        
        echo '<br>For the Chracter : ' .array_keys($count)[0];
    ?>
    
</body>

</html>