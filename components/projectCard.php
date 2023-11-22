<div>
    <a href="project.php?project_id=<?php echo $project['id']?>" id="project-<?php echo $project['id']; ?>">
        <div class="project-cards d-flex flex-md-row" >
            <img class="col-md-3" src="<?php echo $project['avatar']; ?>" style="width: 125px; height: 75px;" alt="<?php echo $project['name']; ?>"/>
            <h3 class="col-md-3 fs-2"><?php echo $project['id']<=9 ? "0" : " "?><?php echo $project['id']; ?></h3>
            <h3 class="col-md-6 fs-1"><?php echo $project['name']; ?></h3>
        </div> 
    </a>
</div>
