<?php require_once('./components/header.php'); 

if(isset($_GET['project_id']) && !empty($_GET['project_id'])){
  $filtered = array_filter($all, function($data){
      return $data['id'] == $_GET['project_id'];
  });
  if(!empty($filtered)){
      foreach($filtered as $project){ ?>

<div class="row  d-flex justify-content-evenly">
  <div class="col-md-2 title">
  <img id="first" src="assets/blur.png" alt="circle" /></div>
  <div class="col-md-6 d-flex">
  <h3 class="fs-1 me-2"><?php echo $project['id']<=9 ? "0" : " "?><?php echo $project['id'] ?></h3>
  <h1 class="fs-1"><?php echo $project['name'] ?></h1>
  </div>
  <div class="col-md-4">
  <ul>
      <li class="list-li fs-4 lh-1"><?php echo $project['role'] ?></li>
      <li class="list-li fs-4 lh-1"><?php echo $project['field'] ?></li>
      <li class="list-li fs-4 lh-1"><?php echo $project['duration'] ?></li>
  </ul></div>
</div>
<div class="row mt-4 mb-4 flex-row-reverse g-3 align-items-center justify-content-center">   
  <p class="fst-italic"><?php echo $project['summary'] ?></p>  
  <p><?php echo $project['summary-2'] ?></p>
  <?php
    if(!empty($project['img-1'])){?>
        <img class="img-fluid me-4 main-img" src="<?php echo $project['img-1'] ?>" alt="circle" /> <?php } ?>
    <p><?php echo !empty($project['description-1']) ? $project['description-1'] : ""  ?></p>
  </div>   
  <div class="row mt-4 mb-4 g-3   align-items-center " >
  <div class="col-md-6">
  <?php
    if(!empty($project['img-2'])){?>
        <img class="img-fluid me-4" src="<?php echo $project['img-2'] ?>" alt="circle"  /> <?php } ?>
    </div>
        <div class="col-md-6">
    <p><?php echo !empty($project['description-2']) ? $project['description-2'] : ""  ?></p>
  </div>  
  </div>
    <div class="row mt-4 mb-4 flex-row-reverse g-3  align-items-center ">
    <div class="col-md-6"> <?php
    if(!empty($project['img-3'])){?>
        <img class="img-fluid me-4" src="<?php echo $project['img-3'] ?>" alt="circle"  /> <?php } ?>
    </div>
        <div class="col-md-6">
    <p><?php echo !empty($project['description-3']) ? $project['description-3'] : "" ?></p>
    </div>
</div>
    <hr class="border border-danger border-2 opacity-50 mt-4 mb-4 my-hr">
    <div class="row">           
        <p class="mb-2 fs-3 takeaway-p">
            <strong>Takeaways</strong>
        </p>
        <div class="col-lg-6 mb-4">
            <?php $takeaways = explode(",", $project['takeaways']); 
                foreach($takeaways as $takeaway){
                    ?> <p><?php echo $takeaway?></p> <?php
                }
            ?>
        </div>
        <div class="col-lg-6 ">
            <p><?php echo $project['results'] ?></p>
        </div>
        <?php if(!empty($project['demo'])){?>
            
            <a href="<?php echo $project['demo']?>" class="fs-4 demo-link" target="_blank" >See more here</a>
        <?php } ?>
    </div>
  <!--  <a href="#navbar" class="top" id="top">  <i class="fas fa-arrow-up"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script>
        //Get the button
let mybutton = document.getElementById("top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>-->
<?php }}
else {
    ?> <h1>Something went wrong! </h1> <?php
}}

else {

}

require_once('./components/footer.php'); 