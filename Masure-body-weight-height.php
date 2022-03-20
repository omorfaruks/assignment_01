<?php

function masureBodyIndex($weight,$height){
    $BMI = $weight / ($height * $height);
    if($BMI < 18.5){
        echo "Your Height is {$height} Meter Weight is {$weight} KG Your BMI is {$BMI} & your're underweight";
    }
    else if ($BMI >= 18.5 && $BMI <= 24.9){
        echo "Your Height is {$height} Meter Weight is {$weight} KG Your BMI is {$BMI} & your're underweight";

    }
    else if ($BMI >= 25 && $BMI <= 29.9){
        echo "Your Height is {$height} Meter Weight is {$weight} KG Your BMI is {$BMI} & your're underweight";

    }
    else if ($BMI >= 30){
        echo "Your Height is {$height} Meter Weight is {$weight} KG Your BMI is {$BMI} & your're underweight";

    }
}
masureBodyIndex(84, 1.7);

?>
