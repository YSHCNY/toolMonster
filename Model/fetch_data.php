<?php
// Include the connection file
include 'conn.php';

// Function to fetch data from the database
function fetchDataFromDatabase($conn) {
    // Query to fetch data from the "main" table
    $stmt = $conn->query("SELECT * FROM main ORDER BY softwareDA DESC");
    // Fetch data and return
    return $stmt->fetchAll();
}

// Fetch data from the database
$rows = fetchDataFromDatabase($conn);

// Generate HTML table rows
$html = '';
foreach ($rows as $row) {
    $html .= '<tr class = "dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200  transition delay-200 dark:hover:bg-gray-600">';
    $html .= '<td class="text-slate-950 py-5">' . $row['logged'] . '</td>';
    $html .= '<td class="text-slate-950 font-semibold text-base capitalize py-5">' . $row['softwareName'] . '</td>';
    $html .= '<td class="text-slate-950 py-5">' . $row['softwareType'] . '</td>';
    $html .= '<td class="text-slate-950 py-5">' . $row['productKey'] . '</td>';
    $html .= '<td class="text-slate-950 py-5">' . $row['personIC'] . '</td>';
    $html .= '<td class="text-slate-950 py-5">' . $row['softwareDA'] . '</td>';
    $html .= '<td class="text-red-900 font-bold py-5">' . $row['softwareED'] . '</td>';
    $html .= '<td>';
    $html .= '<button data-modal-target="static-modal-edit" data-modal-toggle="static-modal-edit" class="bg-transparent text-green-700 py-2 px-4 rounded mr-2 editButton" data-id="' . $row['id'] . '">Edit</button>';
    $html .= '<a href = "/SMS/Controller/delete.php?id=' . $row['id'] . '&deletesoftwarelicense=true" onclick="return confirm(\'Delete this product?\');" class="bg-transparent  text-red-700  py-2 px-4 rounded">Delete</a>';
    $html .= '</td>';
 
    $html .= '</tr>';
}

// Return HTML table rows
echo $html;
?>


<!-- Modal toggle -->

<!-- Main modal -->


