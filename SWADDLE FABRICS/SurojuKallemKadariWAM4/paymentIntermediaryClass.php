<?php
include("inc_dataClass.php");
class PaymentIntermediaryClass
{
    function PaymentDetails($firstName, $lastName, $cardNumder, $cvv, $expiry, $price)
    {
        $dbClass = new DataClass;
        //build select query
        $insertSql = "INSERT INTO paymenttable ( `FirstName`, `LastName`, `CardNumber`, `CVV`, `expiry`, `amount` ) VALUES ('$firstName', '$lastName', $cardNumder, $cvv, '$expiry', $price) ";

        //call the select query method of the dbclass
        try {
            $result = $dbClass->Insert($insertSql);
            if ($result) {
                return $result;
            }
        } catch (Exception $e) {
            //throw $th;
            echo "<script>window.alert(" . $e->getMessage() . ")</script>";
        }
    }

    function FabricDetails($fabricName, $fabricPrice, $color, $length)
    {

        $dbClass = new DataClass;
        //build select query

        $insertSql = "INSERT INTO fabrictable ( `FabricName`, `Price`, `Colour`, `Yards` ) VALUES ";
        //call the select query method of the dbclass
        $values = [];
        for ($i = 0; $i < count($fabricName); $i++) {
            $values[] = "('$fabricName[$i]', $fabricPrice[$i], '$color[$i]', $length[$i])";
        }
        $insertSql .= implode(", ", $values);
        try {
            $result = $dbClass->Insert($insertSql);
            if ($result) {
                return $result;
            }
        } catch (Exception $e) {
            echo "error";
            //throw $th;
            echo "<script>window.alert(" . $e->getMessage() . ")</script>";
        }
    }
}
