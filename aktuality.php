      
<?php include 'shared/header.php'; ?>   

<main class="aktual">

<?php
      require "shared/database.php";

      

$sql = "SELECT * FROM aktuality order by id desc ";
$result = $conn->query($sql);

if (!$result) {
    die("Invalid query: " . $conn->error);
}




while($row = $result->fetch_assoc()) {

  echo '<div class="card-holder">  
          <div class="card">
            <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/ class="card__img">
            <div class="card-contents">
              <h1 class="card__name"> ' . $row['heading'] . '</h1>
              <p class=""> ' . $row['paragraph'] . '</p>
              <span class="card__read-more--open">  </span>
              <button class="read-more-btn">Viac...</button>
            </div> 
          </div>  
        </div>';

}
?>
  <script src="script.js"></script>
<?php include 'shared/footer.php'; ?> 
