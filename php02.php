<!DOCTYPE html>
<html>

<head>
    <title>php02</title>
</head>

<body>
    <?php
        $word = 'Software Engineering';
        $vowel = array("A" => "x", "a" => "x","E" => "x", "e" => "x","I" => "x", "i" => "x","O" => "x", "o" => "x","U" => "x", "u" => "x");
        echo "String : " .$word ; echo "<br>";
        echo "Expected Value : " .strtr($word,$vowel);
    ?>
    
</body>

</html>