<!-- ADDD SUCCESSSS -->
<?php


if (isset($_SESSION['success']) && $_SESSION['success']) {
    // Display success alert
    echo '<div id="success-alert" class="bg-blue-100 border transition delay-200 border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">A New License has been added!</span>
          </div>';
    // Unset the session variable to prevent displaying the alert again on page refresh
    unset($_SESSION['success']);

    
}
?>
<script>
          
            const successAlert = document.getElementById('success-alert');
            setTimeout(function() {
                successAlert.style.opacity = '0';
                setTimeout(function() {
                    successAlert.style.display = 'none';
                },300); 
            }, 3000);
        </script>



<!-- edit success -->


<?php

// Check if the success session variable is set
if (isset($_SESSION['editsuccess']) && $_SESSION['editsuccess']) {
    // Display success alert
    echo '<div id="success-alert-edit" class="bg-green-100 border transition delay-200 border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Updated!</strong>
            <span class="block sm:inline">Licenses information has been successfully updated!</span>
          </div>';
    // Unset the session variable to prevent displaying the alert again on page refresh
    unset($_SESSION['editsuccess']);

    
}
?>
<script>
          
            const successAlertedit = document.getElementById('success-alert-edit');
            setTimeout(function() {
                successAlertedit.style.opacity = '0';
                setTimeout(function() {
                    successAlertedit.style.display = 'none';
                },300); 
            }, 3000);
        </script>






<?php

// Check if the success session variable is set
if (isset($_SESSION['deletesuccess']) && $_SESSION['deletesuccess']) {
    // Display success alert
    echo '<div id="success-alert-delete" class="bg-yellow-100 border transition delay-200 border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Deleted!</strong>
            <span class="block sm:inline">Product successfully removed!</span>
          </div>';
    // Unset the session variable to prevent displaying the alert again on page refresh
    unset($_SESSION['deletesuccess']);

    
}
?>
<script>
          
            const successAlertDelete = document.getElementById('success-alert-delete');
            setTimeout(function() {
                successAlertDelete.style.opacity = '0';
                setTimeout(function() {
                    successAlertDelete.style.display = 'none';
                },300); 
            }, 3000);
        </script>