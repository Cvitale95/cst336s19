<html>
    <body>
        <?php

$avg = 0; 
$o;
echo "</table>
<tr>
<td>
Sum
</td>
<td>
Average</td></tr>
</table>";


for ($i =0; $i < 9; $i++){
    $n = rand(100,999);
    $avg = $avg + $n;
if($n % 2 ==0){
    $o = "even";
}
else{
    $o = "odd";
}
echo "<table>

<tr>
<td>" . $n . "</td><td>" . $o . "</td></tr></table>";
}
$sum = $avg/9;
$sum = number_format($sum,0);
echo "Sum:" . $avg . "</br>";
echo "Average: " . $sum;
?>
    </body>
</html>
