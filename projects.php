<?php require_once('./components/header.php');
?>
<div class="row">
<nav class="text-center" >
  <div class="nav nav-tabs text-center fs-5" id="nav-tab" role="tablist">
    <a class="nav-link active" id="nav-code-tab" data-bs-toggle="tab" href="#nav-code" role="tab" aria-controls="nav-code" aria-selected="true">Code</a>
    <a class="nav-link" id="nav-ux-tab" data-bs-toggle="tab" href="#nav-ux" role="tab" aria-controls="nav-ux" aria-selected="false">UX</a>
    <a class="nav-link" id="nav-other-tab" data-bs-toggle="tab" href="#nav-other" role="tab" aria-controls="nav-other" aria-selected="false">Other</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-code" role="tabpanel" aria-labelledby="nav-code-tab">
    <?php foreach($all as $project){
      if($project['section'] === "code"){
        require("./components/projectCard.php");}} ?>
  </div>
  <div class="tab-pane fade" id="nav-ux" role="tabpanel" aria-labelledby="nav-ux-tab">
    <?php foreach($all as $project){
      if($project['section'] === "ux"){
       require("./components/projectCard.php");}} ?>
  </div>
  <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
    <?php foreach($all as $project){
      if($project['section'] === "other"){
        require("./components/projectCard.php");}} ?>
  </div>
</div>
</div>
<?php require_once('./components/footer.php') ?>
