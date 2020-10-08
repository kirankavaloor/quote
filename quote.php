<?php 

    if(isset($_POST['submit'])){

        $conn= mysqli_connect('localhost','root@localhost','','quote');

        $customer = $_POST["customer"];
        
        $company = $_POST["company"];

        $mail = $_POST["mail"];

        $date = $_POST["date"];

        $street1 = $_POST["street1"];

        $street2 = $_POST["street2"];

        $city = $_POST["city"];

        $postalcode = $_POST["postalcode"];

        $mobile = $_POST["mobile"];

        $grandtotal = $_POST["grandtotal"];

        $service = $_POST["serbice"];

        $amount = $_POST["amount"];

        $notes = $_POST["notes"];

        $sql = "INSERT INTO customer_details (customer, company, mail, date, street1, street2, city, postalcode, mobile, grandtotal)
                 VALUES ('$customer', '$company', '$mail', '$date', '$street1', '$street2', '$city', '$postalcode', '$mobile', '$grandtotal')";


        $query = mysqli_query($conn,$sql);

        if($query){
            $sql_service_details = "SELECT quoteid FROM customer_details ORDER BY quoteid DESC LIMIT 1";

            $service_details_result = mysqli_query ($conn , $sql_service_details);


            while ($row = $service_details_result->fetch_assoc()) {
                        //  echo "valule" , $row['id'];
                        $quoteid = $row['quoteid'];
                    }

                for($i = 0; $i < count($service); $i++)
                {

                    $sql_service_details_insert = "INSERT INTO servce_details (id, service, amount) 
                                                    VALUES ('$id', '{$service[$i]}', '{$amount[$i]}')";
                                        
                    
                        $sql_service_details_insert_result = mysqli_query($conn , $sql_service_details_insert); 

                        echo " Submitted";
                    }

                }else{
                    echo " not Submitted";
                }
                        // for($j=0; $j < count($notes); $j++){

                        //     $sql_notes_details_insert = "INSERT INTO notes_details (id, notes) VALUES ('$id', '{$notes[$j]}')";

                        //     $sql_notes_details_insert = mysqli_connect($conn, $sql_notes_details_insert);
                        // }
                

        
        

    }

?>