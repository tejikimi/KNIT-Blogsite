<nav class="navbar navbar-inverse">
    <div class="container-fluid adjust-nav-sec">
      <!-- <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img style="width:180px;height:35px;" src="images/geeksbyte.png"></a>
      </div> -->
      <!-- <div class="collapse navbar-collapse" id="myNavbar"> -->
      <ul class="nav navbar-nav adjust-navbar">
        <li class="active"><a href="index.php">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORIES </a>
          <ul class="dropdown-menu">
            <?php if (mysqli_num_rows($rs) > 0) {
              while ($row = mysqli_fetch_array($rs)) {
            ?>
                <li class=""><strong><a href="index.php?category=<?php echo $row['id']; ?>"> <?php echo $row['text']; ?></a></strong></li>
            <?php }
            } ?>
          </ul>
        </li>
        <!-- <li class="" role="search" action=<?php echo $search_url; ?> method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="q">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default" name="submit"> .
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
          </li> -->
        <li>
          <form class="navbar-form navbar-left" role="search" action="index.php?search=<?php echo $search; ?>" method="get">
            <div class="input-group">
              <input type="text" class="form-control form-control-search" placeholder="Search" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default search-button-height" name="submit"> .
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
          </form>
        </li>
        <!-- <li><a href="about.php">ABOUT US</a></li>
          <li><a href="contact.php">CONTACT US</a></li> -->
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right"> -->
      <!-- <li><a href="admin/login.php"><span class="glyphicon glyphicon-user"></span> SIGNIN</a></li> -->
      <a class="btn btn-info navbar-btn pull-right" href="admin/login.php"><span class="glyphicon glyphicon-user"></span>SIGN IN</a>
      <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> SIGNUP</a></li>-->
      <!-- </ul> -->
    </div>
    </div>
  </nav>