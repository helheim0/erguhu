<div class="row mb-3">
    <div class="col">
    <h1 class="title-text text-center fs-1">Projects</h1>
    <?php 
    foreach($all as $project){
        if($project['section'] === "highlights"){
    require("./components/projectCard.php");}} ?>
    <div class="btn-container text-end">
        <a class='btn more-button mb-4' href="projects.php">See More...</a>
    </div>
    </div>
</div>