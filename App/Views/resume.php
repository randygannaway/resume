<?php
?>
    <div class="container" id="resume">

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-7">
                <h4>Summary</h4>
            </div>
            <div class="col-md-3">

            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <p><?php echo $data['resume']['summary']; ?></p>
            </div>
            <div class="col-md-3">

            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-7">
                <h4>Skills</h4>
            </div>
            <div class="col-md-3">

            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <?php foreach($data['resume']['skills'] as $skill): ?>
                        <li class="list-group-item"><?php echo $skill ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-3">

            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-7">
                <h4>Education</h4>
            </div>
            <div class="col-md-3">

            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <?php foreach($data['resume']['education'] as $education): ?>
                        <li class="list-group-item"><?php echo $education['degree'] . " " . $education['focus'] . " " . $education['school'] . " " . $education['year']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-3">

            </div>
        </div>


    </div>
