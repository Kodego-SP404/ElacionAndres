<title>Feedback</title>
    
<?php 

include 'conn.php';

?>
<?php include 'include/header.php';?>
   <main>
      <div class="container d-flex flex-column align-items-center">
        <h2>Feedback</h2>
<?php
// looping
$select = $conn->prepare ("SELECT * FROM feedback");
$select->execute();
$result = $select->fetchAll();

// pag wala pang laman yung data
if (empty($result)) { 
  echo "
  <div class=\"card my-3 p-5\">
    <div class=\"card-body text-center\">
    <p class=\"text-secondary\">No Feedback</p> 
    </div>
  </div>";
}  
foreach ($result as $data) {
  echo "
    <div class=\"card my-3 p-5\">
      <div class=\"card-body text-center\">
      <p>" . $data['body'] . " </p><p><strong>" . $data['name'] . "</strong></p>
      <footer class=\"text-secondary\"><cite>" . $data['email']. " </cite> ". $data['date'] . " </footer>
      </div>
    </div>";
}


?>
    </main>

    <?php include 'include/footer.php';?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
 