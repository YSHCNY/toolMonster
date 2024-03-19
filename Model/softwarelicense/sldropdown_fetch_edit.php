<?php
include './Model/conn.php';


// Check if the ID parameter is set
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Prepare and execute the SQL query to retrieve data for the given ID
    $stmt = $conn->prepare("SELECT softwareName FROM main WHERE id = ?");
    $stmt->execute([$id]);
    
    // Fetch the data
    $itemData = $stmt->fetch();

    // Output HTML content for the modal body
}
?>

    <label for="productT" class="sr-only">Manufacturer</label>
  <select id="editSoftwareTypeS"   name="productT" class="block py-2.5 px-2 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
  <option selected disabled value = "<?php echo $row['softwareName'];?>"><?php echo $row['softwareName'];?></option>
  <?php
  
                    $sql = "SELECT id, manu FROM slsettings";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $data = $stmt->fetchAll();     
                    foreach ($data as &$row) {
                ?>
                    <option class = " text-dark fw-medium" value="<?php echo $row['manu'];?>"><?php echo $row['manu'];?></option>
                <?php } ?>
  </select>