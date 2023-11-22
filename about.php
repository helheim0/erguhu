<div class="row" id="about">
<div class="col">
    <h1 class="title-text text-center fs-1">Who am I</h1>
    <?php 
        $abouts = json_decode(file_get_contents('./assets/personal-data.json'), true)['about'];
        $hobbies = json_decode(file_get_contents('./assets/personal-data.json'), true)['hobbies'];
        $games = json_decode(file_get_contents('./assets/personal-data.json'), true)['games'];
    ?>
    <div class="col-md-8 about-desc">
        <?php foreach($abouts as $about){?>
        <p><?php echo $about['p-1']?></p>
        <p><?php echo $about['p-2']?></p>
        <p><?php echo $about['p-3']?></p>
        <p><?php echo $about['p-4']?></p>
        <p><?php echo $about['p-5']?></p><?php }?>
    </div> </div></div>
    <div class="row text-center align-items-center hobbies">
        <div class="col-md-6 hobby-card mb-4">
            <h3 class="mb-2">Hobbies</h3>
            <?php foreach($hobbies as $hobby){?>
                <h6><?php echo $hobby['h-1']?></h6>
                <h6><?php echo $hobby['h-2']?></h6>
                <h6><?php echo $hobby['h-3']?></h6>
                <h6><?php echo $hobby['h-4']?></h6>
                <h6><?php echo $hobby['h-5']?></h6>
                <h6><?php echo $hobby['h-6']?></h6>

            <?php } ?>
        </div>
        <div class="col-md-6 hobby-card mb-4">
            <h3 class="mb-2">Games</h3>
            <?php foreach($games as $game){ ?>
                <h6><?php echo $game['h-1']?></h6>
                <h6><?php echo $game['h-2']?></h6>
                <h6><?php echo $game['h-3']?></h6>
                <h6><?php echo $game['h-4']?></h6>
                <h6><?php echo $game['h-5']?></h6>
                <h6><?php echo $game['h-6']?></h6>
                <?php }?>
        </div>
    </div>
    <div class="row competences pt-2">
    <div class="col-md-12 competence-row">
            <p>game design</p>
            <p>serious games</p>
            <p>unity</p>
            <p>c#</p>
            <p>java</p>
            <p>php</p>
            <p>wordpress</p>
        <p>prototyping</p>
    </div>
    <div class="col-md-12  competence-row">
        <p>game design</p>
        <p>intro to UX</p>
        <p>design & creativity</p>
        <p>adobe xd</p>
        <p>figma</p>
    </div>
</div>
