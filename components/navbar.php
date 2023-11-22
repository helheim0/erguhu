
<!-- Navbar-->
<nav class="navbar navbar-expand-lg my-nav" id="navbar">
  <div class="container-fluid d-flex justify-content-evenly">
  <div class="d-flex">
    <!-- Brand -->
    <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="index.php">
      <img
        src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
        height="20"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: 2px;"
      />
    </a>
  </div> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 my-navlist">
    <?php 
      foreach($navbar as $navItem){
          ?>
          <li class="nav-item">
          <a class="nav-link fs-5 <?php echo $currentPage === $navItem['link'] ?  "active" : ""  ?>" aria-current="page" href="<?php echo $navItem['link'] ?>"><?php echo $navItem['name']?></a>
          </li>
      <?php }
      ?>
  </ul><input class='cv-button' type="button" value="CV" />
  </div>  

</div>
</nav>
<!-- Navbar -->