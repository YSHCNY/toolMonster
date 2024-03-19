<?php
include './Model/conn.php';
?>


            <label for="productT" class="sr-only">Manufacturer</label>
  <select id="productT"   name="productT" class="block py-2.5 px-2 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
  <option selected disabled >Choose Manufacturer</option>
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