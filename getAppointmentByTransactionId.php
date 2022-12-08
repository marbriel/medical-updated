<?php 
    include ('../connection.php');

    if(isset($_POST['transaction_id'])){
        $appointments = getAppointmentsByTransactionId($_POST['transaction_id']);
        $output = "";
        if(empty($appointments)){
            $output = '';
        }else{
            foreach($appointments as $appointment){
                $icons = ""; 
                if($appointment['status'] == "RESERVE"){
                    $icons = "<td>
                    <i class='bi bi bi-pencil-fill text-info me-2 resched' muted></i>
                        <a href='appointment_information.php?transactionId=". $appointment['transaction_id']. "
                            muted> <i class='bi bi bi-check-circle-fill text-success me-2'></i></a>
                        <i class='bi bi-x-circle-fill text-danger cancel' muted></i>
                    </td>";
                }
                $output .= "<tr>
                <td id='transaction_Id'>". $appointment['transaction_id']. "</td>
                <td id='date'>". formatDate($appointment['date']) ."</td>
                <td id='time'>" . $appointment['time']. "</td>
                <td id='name'>". $appointment['first_name']." ". $appointment['last_name']. "</td>
                <td>". $appointment['email']. "</td>
                <td class='text-success'>" . $appointment['status']. "</td>".
                $icons."
                
            </tr>";
            }
        }
        
        print_r ($output);
    }


?>