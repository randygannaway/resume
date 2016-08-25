<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Randy Gannaway</title>
</head>
<body>
    <div class="">

        <div class="col-md-5" id="front">
            <h1>Randy<br> Gannaway</h1>
        </div>

        <div class="col-md-2"></div>

        <div class="col-md-8" id="resume">

            <div class="row">
                <div class="col-md-12 section-title">
                    <h4>Summary</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="img/me.jpg" class="media-object" height=100vh>
                            </a>
                        </div>
                        <div class="media-body">
                            <ul class="list-group">
                                <li class="list-group-item"><?php echo $data['resume']['summary']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 section-title">
                    <h4>Skills</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-10">
                    <ul class="list-group">
                        <?php foreach($data['resume']['skills'] as $skill): ?>
                            <li class="list-group-item"><?php echo $skill ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 section-title">
                    <h4>Degrees</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-10">
                    <ul class="list-group">
                        <?php foreach($data['resume']['degrees'] as $degree): ?>
                            <li class="list-group-item"><?php echo $degree['degree'] . " " . $degree['focus'] . " " . $degree['school'] . " " . $degree['year']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 section-title">
                    <h4>Ongoing education</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-10">
                    <ul class="list-group">
                        <?php foreach($data['resume']['ongoingEducation'] as $course): ?>
                            <li class="list-group-item"><?php echo $course['course'] . "  -" . $course['source']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div> <!-- resume -->

        <div class="col-md-3">

        </div>
    </div> <!-- container -->
</body>
</html>
