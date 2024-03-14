<?php
    session_start();
    include '../Model/conn.php';

    date_default_timezone_set('Asia/Manila');
    $currenttime = date('Y-m-d H:i:s');

    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
        if (isset($_POST['submitSoftware']) && $_POST['submitSoftware'] == 'submitSoftware') {

            $productN = trim($_POST['productN']);
            $productT = trim($_POST['productT']);
            $productK = trim($_POST['productK']);
            $start = date('Y-m-d', strtotime($_POST['start']));
            $end = date('Y-m-d', strtotime($_POST['end']));
            $productO = trim($_POST['productO']);

            try {
                $stmt = $conn->prepare("INSERT INTO main (logged, softwareName, softwareType, productKey, softwareDA, softwareED, personIC) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$currenttime, $productN, $productT, $productK, $start, $end, $productO]);
            
                $_SESSION['success'] = true;
                header("location: .././Software+License");
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        
        }
    
    
    
    
    
    }
?>