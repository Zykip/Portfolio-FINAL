<?php
    $request = $bdd->connection->prepare("SELECT * FROM user");
    $request->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);

    $user = new User($result[0]["name"], $result[0]["lastname"], $result[0]["job"], $result[0]["mail"], $result[0]["phone"], $result[0]["address"]);
?>

<section class="mh-home image-bg home-2-img" id="mh-home">
    <div class="img-foverlay img-color-overlay">
        <div class="container">
            <div class="row section-separator xs-column-reverse vertical-middle-content home-padding">
                <div class="col-sm-6">
                    <div class="mh-header-info">
                        <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                            <span>Hey I'm..</span>
                        </div>
                        
                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><?= $user->name . " " . $user->lastname ?></h2>
                        <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><?= $user->job ?></h4>
                        
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:"><?= $user->mail ?></a></li>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:"><?= $user->phone ?></a></li>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address><?= $user->address ?></address></li>
                        </ul>
                        
                        <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <li><a href="https://facebook.com/idrissmoustagh"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/IMoustaghfir"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                        <div class="img-border">
                            <img src="assets/images/hero.jpg" alt=""  class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>