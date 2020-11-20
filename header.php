<?php
include 'admin/connect.php';
if (isset($_GET['category'])) {
  $category = mysqli_real_escape_string($con, $_GET['category']);
  $query = "select * from posts where category='$category'";
} else if (isset($_GET['search'])) {
  $search = mysqli_real_escape_string($con, $_GET['search']);
  $query = "SELECT *
  FROM posts
  WHERE title like '$search %' OR
        tags like '$search' OR
        content like '$search' OR
        author like '$search'";
} else {
  $query = "select * from posts ORDER BY id DESC";
}
$rs = mysqli_query($con, $query);
?>


<div class="container">


  <!-- <div class="blog-header">
    <h1 class="blog- text-success"><span id="matt"></span></h1>
    <p class="lead blog- text-danger">Learn About Code On Geeks Byte Blog</p>
  </div> -->
  <!-- <div class="row">
    <div class="col-md-6 col-sm-12">
      <img src="images/left.jpg" alt="image">
    </div>
    <div class="col-md-6">
      <div class="header">
        Zoho marketing Hub
      </div>
      <div class="author">
        <span>sai</span> <span class="float-right">November 10, 2020</span>
      </div>
      <div class="content">
        Today we’re sharing our Transparency Report for the first half of 2020. In the six months since our last report, we’ve seen more people than ever before us...
      </div>
      <div class="read-more-blog">
        Read more...
      </div>
    </div>
  </div> -->

  <!-- <div class=""> -->
  <!-- <div class="blog-main">
      <div class=" blog-post"> -->
  <?php if (mysqli_num_rows($rs) > 0) {
    while ($row = mysqli_fetch_array($rs)) {

  ?>
      <!-- <h2 style="margin-top:22px;" class="blog-post-"><a href="single.php?post=<?php echo $row['id']; ?>"><?php echo $row['title']; ?> </a></h2>
            <p class="blog-post-meta">On <?php echo $row['date']; ?> Posted By <?php echo $row['author']; ?> </p>


            <p> <?php $content = $row['content'];
                echo substr($content, 0, 300) . "..."; ?> </p>
            <a href="single.php?post=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Read More</a>
            <hr> -->
      <div class="row blog-section">
        <div class="col-md-6 col-sm-12 blog-img">
          <!-- <img src="images/left.jpg" alt="image"> -->
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" />
        </div>
        <div class="col-md-6">
          <div class="header">
            <?php echo $row['title']; ?>
          </div>
          <div class="author">
            <span> <?php echo $row['author']; ?></span> <span class="float-right"><?php echo $row['date']; ?></span>
          </div>
          <div class="content">
            <?php $content = $row['description'];
            echo substr($content, 0, 300) . "..."; ?>
           
          </div>
          <div class="read-more-blog">
            <a href="single.php?post=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>
  <?php }
  } ?>

  <!-- </div>

    </div> -->
  <br><br>
  <!-- /.blog-post -->
  <!-- /.blog-main -->