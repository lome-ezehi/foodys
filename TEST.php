<?php
include("./templates/nav.php");
include("./templates/connect.php");

$time = time();
$random = rand(10, 1000);
echo $time . '-' . $random;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <input type="number" name="" id="number1">
        <input type="number" name="" id="number2">
        <input type="submit" value="equals" id="addition">

        <p id="output"></p>

    </main>

<script>
    const number1 = document.getElementById("number1");
    const number2 = document.getElementById("number2");
    const addition = document.getElementById("addition");
    const output = document.getElementById("output");

    addition.onclick = function(){
        let result = Number(number1.value) + Number(number2.value);
        output.textContent = `The output is ${result}`;
    }

//  document.addEventListener('DOMContentLoaded', function() {
//         const quantities = JSON.parse(localStorage.getItem('cartQuantities')) || {};

//         document.querySelectorAll('input[name^="edit_quantity"]').forEach(input => {
//             const foodId = input.name.split('edit_quantity')[1];
//             if (quantities[foodId]) {
//                 input.value = quantities[foodId];
//             }
            
//             input.addEventListener('input', function() {
//                 quantities[foodId] = input.value;
//                 localStorage.setItem('cartQuantities', JSON.stringify(quantities));
//             });
//         });
//     });

//     let price = document.getElementById("price").textContent; 
</script>
</body>
</html>



<?php
include("./templates/footer.php");
?>