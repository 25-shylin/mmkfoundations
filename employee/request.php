<?php

include_once('includes/database.php');

$pincode = $_POST['pincode']; 



$ofcQuery = "SELECT office_name FROM pincodeindia WHERE pincode LIKE '$pincode%'";

$ofcResult = mysqli_query($con, $ofcQuery);

$StatDistQuery = "SELECT distinct district,statename FROM pincodeindia WHERE pincode LIKE '$pincode%'";

$StatDistQueryResult = mysqli_query($con, $StatDistQuery);



    echo "<div class='form-group row'>";

    echo "<label for='example-text-input' class='col-sm-4 col-form-label'>City:</label>";

    echo "<div class='col-sm-8'>";

                                

    echo "<select id='city' name='city'>";

    while($resultSet = mysqli_fetch_assoc($ofcResult)) {

        echo "<option value=".$resultSet['office_name'].">". $resultSet['office_name'] . "</option> ";

    }

    echo "</select></div></div>";

    while($statResultSet = mysqli_fetch_assoc($StatDistQueryResult)) {

        echo "<div class='form-group row'>";

        echo "<label for='example-text-input' class='col-sm-4 col-form-label'>District:</label>";

        echo "<div class='col-sm-8'><textarea type='text' id='cityDistrict' name='cityDistrict' value='".$statResultSet['district']."' readonly style='resize: none; height: 30px; overflow: hidden;'>".$statResultSet['district']."</textarea></div></div>";

       

        echo "<div class='form-group row'>";

        echo "<label for='example-text-input' class='col-sm-4 col-form-label'>State:</label>";

        echo "<div class='col-sm-8'>

                <textarea type='text' id='State' name='State' value='".$statResultSet['statename']."' readonly style='resize: none; height: 30px; overflow: hidden;'>".$statResultSet['statename']."</textarea>

                </div>

            </div>";

    }





?>