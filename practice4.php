<?php

$size = $_POST["size"]; // Gets input

echo "<table border='1'>"; // Starts table with border style

echo "<tr><td></td>"; // First blank cell (starts row)

// Makes 1st base row
for($i = 1; $i <= $size; $i++)
{
    echo "<td>" . $i . "</td>";
}

echo "</tr>"; // Ends base row

// Makes multiplication table
for ($i = 1; $i <= $size; $i++) 
{
    echo "<tr>";                    // New row
    echo "<td>" . $i . "</td>";     // Prints first number in 1st column (making the base column)

    // Makes new column for row
    for ($j = 1; $j <= $size; $j++)
    {
        echo "<td>" . $i * $j . "</td>"; // Prints product
    }
    echo "</tr>"; // Ends row
}

echo "</table>"; // Ends table

?>