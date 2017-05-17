<?php

    // if($_SERVER['REQUEST_METHOD']) == 'POST' ) {


	if (isset($_POST['checked']) && $_POST['checked'] == 1)
	 {
	        echo "<table>
            <tr>
                <td>სახელი</td>
                <td>'.$_POST[firstname].'</td>
            </tr>
            <tr>
                <td>გვარი</td>
                <td>'.$_POST[lastname].'</td>
            </tr>
            <tr>
                <td>სქესი</td>
                <td>'.$gender.'</td>
            </tr>
            <tr>
                <td>დაბადების თარიღი</td>
                <td>'.$_POST[day].'/'.$_POST[month].'/'.$_POST[year].'</td>
            </tr>
            <tr>
                <td>ბიოგრაფია</td>
                <td>'.$_POST[bio].'</td>
            </tr>
        </table>";
     }
    else{
        echo 'chechbox-ის მონიშვნა აუცილებელია';
    }
?>