<?php
include 'head.php';
include 'admin/connect.php';

if (isset($_GET['post']))
  $id = mysqli_real_escape_string($con, $_GET['post']);
$query = "select * from posts where id='$id'";
$rs = mysqli_query($con, $query);
?>

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="blog-main">
        <div class="blog-post">
          <?php if (mysqli_num_rows($rs) > 0) {
            while ($row = mysqli_fetch_array($rs)) {

          ?>
              <h2 class="blog-post-"><?php echo $row['title']; ?></a> </h2>
              <p class="blog-post-meta">On <?php echo $row['date']; ?> Posted By <?php echo $row['author']; ?></p>
              <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" />
              <p> <?php echo html_entity_decode($row['content']); ?> </p>


          <?php }
          } ?>
          </hr>
        </div>
      </div>
    </div>



    <?php
    include 'footer.php';
    ?>