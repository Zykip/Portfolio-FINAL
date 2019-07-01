<?php
    $request = $bdd->connection->prepare("SELECT * FROM tech");
    $request->execute();
    $techSkills = $request->fetchAll(PDO::FETCH_ASSOC);

    $request = $bdd->connection->prepare("SELECT * FROM pro");
    $request->execute();
    $proSkills = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="mh-skills" id="mh-skills">
    <div class="home-v-img">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title text-center col-sm-12">
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-skills-inner">
                        <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <h3>Technical Skills</h3>

                            <div class="each-skills">

                                <?php foreach($techSkills as $skill) { ?>
                                
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome"><?= $skill["name"] ?></div>
                                                <div class="percentagem-num"><?= $skill["pourcentage"] ?>%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: <?= $skill["pourcentage"] ?>%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <h3>Professional Skills</h3>

                        <ul class="mh-professional-progress">

                            <?php foreach($proSkills as $skill) { ?>
                                    
                                <li>
                                    <div class="mh-progress mh-progress-circle" data-progress="<?= $skill["pourcentage"] ?>"></div>
                                    <div class="pr-skill-name"><?= $skill["name"] ?></div>
                                </li>
                                    
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>