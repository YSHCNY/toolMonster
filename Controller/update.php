<?php
    include '../Model/conn.php';


    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['submitSoftware']) && $_POST['submitSoftware'] == 'submitSoftware') {

        $id = $_POST['id'];
        $colA = ucwords(trim($_POST['productN']));
        $colB = $_POST['productT'];
        $colC = strtoupper(trim($_POST['productK']));
        $colD = date('Y-m-d', strtotime($_POST['start']));
        $colE = date('Y-m-d', strtotime($_POST['end']));
        $colF = $_POST['productO'];
        // You can add more fields as needed
    
        // Prepare and execute the SQL query to update the record
        $stmt = $conn->prepare("UPDATE main SET softwareName = ?,  softwareType = ?,  productKey = ?, softwareDA = ?, softwareED = ?, personIC = ?  WHERE id = ?");
        $stmt->execute([$colA, $colB, $colC, $colD, $colE, $colF, $id]);
    
        // Check if the update was successful
        if ($stmt->rowCount() > 0) {
            // Update successful
            session_start();
            $_SESSION['editsuccess'] = true;
            header("location: .././Software+License");
            exit;
        } else {
            // Update failed
            echo json_encode(array("success" => false, "message" => "Failed to update data."));
            header("location: .././Software+License");
            exit;
        }

    }
    } else {
        // If the request method is not POST
        echo json_encode(array("success" => false, "message" => "Invalid request method."));
    }
  
?>