<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <div>
        <h3> DEVO ELECTRICITY BILL CALC</h3>
        <form action = ""method = "POST" id= "myForm">
            <input type ="number" name = "units" placement= "please enter units" style= "width=200px"/>
            <input type ="submit" name = "btn" value= "submit"/>
        </form>
    </div>

    <?php
        function calcBill ($units){
            $firstCost = 3.50;
            $secondCost = 4.00;
            $thirdCost = 5.20;
            $fourthCost = 6.50;

            if ($units <=50){
                $bill = $units * $firstCost;
            } elseif ($units >=51 && $units <=150){
                $firstSet = 50 * $firstCost;
                $current = ($units-50)* $secondCost;
                $bill= $firstSet + $current;
            }elseif ($units >=151 && $units <=250){
                $firstSets = (50 * $firstCost) + (100 * $secondCost);
                $current = ($units-150)* $thirdCost;
                $bill= $firstSets + $current;  
            }else{
                $firstSets = (50 * $firstCost) + (100 * $secondCost) +  (100 * $thirdCost);
                $current = ($units-250)* $fourthCost;  
                $bill= $firstSets + $current;
            }
            return number_format($bill,2). " "; 
        }
        if (isset($_POST['btn'])){
            $units = ($_POST['units']);
            if ($units==""){
                echo "please enter amount of units!";
            }else{
                $result = calcBill($units);
                echo "Total amount for <br>", $units, "units<br>", "= ", $result, "NGN";
            }
        }
    ?>

  
</body>
</html>