<?php
session_start();
    include '../model/conn.php';


    // {DELETE software license}

    if (isset($_GET['deletesoftwarelicense'])){
        $id = $_GET['id'];
        
        // Create delete query
        $query = "DELETE FROM main WHERE id = :id";
        
        try {
            // Prepare the query
            $stmt = $conn->prepare($query);
        
            // Bind parameters
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
            // Execute the query
            if ($stmt->execute()) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        // Redirect back to the main page
        $_SESSION['deletesuccess'] = true;
        header("Location: .././Software+License");
        
        }
?>