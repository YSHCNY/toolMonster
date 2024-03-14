


<section>

<div class = 'container-fluid mb-5'>
    <div class="bg-white p-5 rounded-md ">
        

<!-- Modal toggle -->
<div class="grid grid-cols-2">
    <div>
<h3 class = ' text-lg font-semibold text-gray-800 '>Software License</h3>
<p class = 'text-xs text-gray-400'>Monitor software licenses</p>
</div>
<div class="flex justify-end">
<button data-modal-target="static-modal" data-modal-toggle="static-modal" class=" block text-white transition ease-in-out delay-200 bg-blue-900 hover:bg-white hover:text-blue-900  font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  New License
</button>


</div>
</div>

<?php include  'softwaremodal/addsoftwaremodal.php';?>


    </div>


</div>



<!-- table -->
<div class = 'bg-white rounded-md p-5' id='chagner'>


<div class="relative overflow-x-auto">

<?php

include 'alerts/success.php'; 
 ?>

    <table class="w-full text-sm text-gray-500 dark:text-gray-400" id = 'myTable'>
        <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
            <tr>
                    <th scope="col" class="px-6 py-3">Date Logged</th>
                    <th scope="col" class="px-6 py-3"> Product name</th>
                    <th scope="col" class="px-6 py-3"> Product Type</th>
                    <th scope="col" class="px-6 py-3">Product Key</th>
                    <th scope="col" class="px-6 py-3">Person In Charge</th>
                    <th scope="col" class="px-6 py-3">Manufactured Date</th>
                    <th scope="col" class="px-6 py-3">Expiry Date</th>
                    <th scope="col" span =  class="px-6 py-3">Actions </th>
                
            </tr>
        </thead >
      
        <tbody id="tableBody" >
        <?php include './Model/fetch_data.php'; ?>
              
                </tbody>
       
        
    </table>
</div>

    </div>
</section>

<?php
 include 'softwaremodal/editsoftwaremodal.php';
 
?>


<script>

const editButtons = document.querySelectorAll('.editButton');
    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const softwareName = button.parentElement.parentElement.querySelector('.font-semibold').innerText;
            const softwareType = button.parentElement.parentElement.querySelector('td:nth-child(3)').innerText;
            const productKey = button.parentElement.parentElement.querySelector('td:nth-child(4)').innerText;
            const personIC = button.parentElement.parentElement.querySelector('td:nth-child(5)').innerText;
            const softwareDA = button.parentElement.parentElement.querySelector('td:nth-child(6)').innerText;
            const softwareED = button.parentElement.parentElement.querySelector('td:nth-child(7)').innerText;
            
            document.getElementById('editId').value = id;
            document.getElementById('editSoftwareName').value = softwareName;
            document.getElementById('editSoftwareType').value = softwareType;
            document.getElementById('editProductKey').value = productKey;
            document.getElementById('editPersonIC').value = personIC;
            document.getElementById('editSoftwareDA').value = softwareDA;
            document.getElementById('editSoftwareED').value = softwareED;
        });
    });

// function updateTable() {
//     fetch("Model/fetch_data.php")
//         .then(response => response.text())
//         .then(data => {
//             document.getElementById("tableBody").innerHTML = data;
//         })
//         .catch(error => console.error('Error:', error));
// }

// updateTable();


$(document).ready(function() {
    $('#myTable').DataTable({
        paging: true,  // Enable pagination
        ordering: false, // Enable sorting
        lengthChange: true,
      info: true
    });
});
</script>




