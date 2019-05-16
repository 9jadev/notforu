<html>
    <head>
        <title> A simple web page test assessment at bincom </title>
    </head>
    <body>
        <h1> Web app asssignment for bincom center </h1>
        <p> Write a valid HTML + PHP Page that will count numbers from 1 to 1,000,000? </p>
        <ul>
            <li> Display every 10th number in the series in Bold </li>
            <li> Display every 3rd number in the series in Italics </li>
            <li> Bonus: Underline every Prime number in this series </li>
        </ul>
        <?php
            $number =  range(1,100);   // Generates a number from 1 , 1 million
            //print_r($number);
            $count = 1;
            $style = "margin: 10px;"; 
            // function to check  if prime
            function testprime($numb){
                  for($x=2; $x<$numb; $x++) {
                      if($numb % $x ==0) {
                            return false;
                        }
                     } 
                    return true;
            }
            

            echo " <br>";
            foreach ($number as $key => $value) {
                    // check if divisible by 10
                if ($count % 10 == 0) {
                     $style = "font-weight: bold;";
                     
                }else if(testprime($value) == True ){
                    $style = " text-decoration: underline"; //check if it's prime
                }elseif ($count % 3 == 0) {
                    $style = "font-style: italic;";  // check if it's divisible by 3
                }
                $count++;
                echo '<span style="'.$style.'">'.$value.'</span> <br>';
                $style = " ";

            }

            // Thank you for this test i hope to get it
        ?>


    </body>
</html>