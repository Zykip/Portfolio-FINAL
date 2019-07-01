<?php
    $request = $bdd->connection->prepare("SELECT * FROM projects");
    $request->execute();
    $projects = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="mh-featured-project image-bg featured-img-one" id="mh-featured-project">
    <div class="img-color-overlay">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title col-sm-12">
                    <h3>Featured Projects</h3>
                </div>
                <div class="col-sm-12">

                    <div class="mh-single-project-slide-by-side row">

                        <?php foreach($projects as $project) { ?>

                        <!-- Project Items -->
                        <div class="col-sm-12 mh-featured-item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <img src="assets/images/leomazzotti.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mh-featured-project-content">
                                        <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><?= $project["type"] ?></h4>
                                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><?= $project["title"] ?></h2>
                                        <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><?= $project["name"] ?></span>
                                        <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s"><?= $project["description"] ?></p>
                                        <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                            <blockquote>
                                                <q><?= $project["sentence"] ?></q>
                                                <cite>- <?= $project["user"] ?></cite>
                                            </blockquote>
                                            <blockquote>
                                                <q><?= $project["sentence"] ?></q>
                                                <cite>- <?= $project["user"] ?></cite>
                                            </blockquote>
                                            <blockquote>
                                                <q><?= $project["sentence"] ?></q>
                                                <cite>- <?= $project["user"] ?></cite>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 