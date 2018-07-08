<?php

/* @var $this yii\web\View */
use frontend\themes\alstar\assets\AlstarAsset;
use yii\helpers\Url;

$this->title = 'พิงค์เพชรเซอร์วิส';
AlstarAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@alstar/dist');

$service = \common\models\Services::find()->all();
$portfolio = \common\models\Portfolio::find()->all();

$this->registerCss('
     body{
                font-family: "Cloud-Light";
                font-size: 16px;
            }
');
?>
<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle nav</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo text or image -->
            <a class="navbar-brand" href="index.html">
                <img src="<?=$directoryAsset?>/img/pingpetch.png" style="width: 50%;margin-top: -10px;" alt="">
            </a>

        </div>
        <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="current"><a href="#intro">หน้าแรก</a></li>
                <li><a href="#about">เกี่ยวกับเรา</a></li>
                <li><a href="#services">บริการ</a></li>
                <li><a href="#portfolio">ผลงาน</a></li>
<!--                <li><a href="#team">ทีม</a></li>-->
                <li><a href="#contact">ติดต่อเรา</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- intro area -->
<div id="intro">
    <div class="intro-text">
        <div class="container">
            <div class="col-md-12">
                <div id="rotator">
                    <h1 style="font-family: 'Cloud-Light';font-size: 45px"><span class="1strotate">กราฟิก ดีไซน์,สติ๊กเกอร์ ไดคัท, ตรายาง ป้ายโฆษณา</span></h1>
                    <div class="line-spacer"></div>
                    <p><span class="2ndrotate">Graphic Design, Sticker diecut, Bill board</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About -->
<section id="about" class="home-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="section-heading" style="font-family: 'Cloud-Light';font-size: 24px">
                    <h2 style="font-family: 'Cloud-Light';">เกี่ยวกับเรา</h2>
                    <div class="heading-line"></div>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <div class="col-md-6 about-img">
                <img src="<?=$directoryAsset?>/img/pingpetch.png" alt="">
            </div>

            <div class="col-md-6 content" style="font-family: 'Cloud-Light';font-size: 24px;text-align: left;">
                <p>
                    <dd><?=$modelinfo->aboutus?></dd>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Parallax 1 -->
<section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="color-light">
                    <h2 class="wow bounceInDown" data-wow-delay="0.5s" style="font-family: 'Cloud-Light';font-size: 34px">รายละเอียดที่ประณีตคืองานของเรา</h2>
                    <p class="lead wow bounceInUp" data-wow-delay="1s">กับการผสมประสานเข้ากับเทคโนโลยีและแนวความคิดสมัยใหม่</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section id="services" class="home-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="section-heading" style="font-family: 'Cloud-Light';font-size: 24px;">
                    <h2 style="font-family: 'Cloud-Light';">บริการของเรา</h2>
                    <div class="heading-line"></div>
                    <p><?=$modelinfo->service_title?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-service" class="service carousel slide">

                    <!-- slides -->
                    <div class="carousel-inner">
                    <?php $i = 0; ?>
                        <?php foreach ($service as $data):?>
                        <?php $active = ''; if($i==0){$active='active';} ?>
                        <div class="item <?=$active?>">
                            <div class="row">
                                <div class="col-sm-12 col-md-offset-1 col-md-6">
                                    <div class="wow bounceInLeft">
                                        <h4><?=$data->title?></h4>
                                        <p><?=$data->detail?></p>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="screenshot wow bounceInRight">
                                        <img src="img/screenshots/<?=$data->photo?>" class="img-responsive" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i+=1;?>
                        <?php endforeach;?>
<!--                        <div class="item">-->
<!--                            <div class="row">-->
<!--                                <div class="col-sm-12 col-md-offset-1 col-md-6">-->
<!--                                    <div class="wow bounceInLeft">-->
<!--                                        <h4>Brand Identity</h4>-->
<!--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-sm-12 col-md-5">-->
<!--                                    <div class="screenshot wow bounceInRight">-->
<!--                                        <img src="--><?//=$directoryAsset?><!--/img/screenshots/2.png" class="img-responsive" alt="" />-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="row">-->
<!--                                <div class="col-sm-12 col-md-offset-1 col-md-6">-->
<!--                                    <div class="wow bounceInLeft">-->
<!--                                        <h4>Web & Mobile Apps</h4>-->
<!--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-sm-12 col-md-5">-->
<!--                                    <div class="screenshot wow bounceInRight">-->
<!--                                        <img src="--><?//=$directoryAsset?><!--/img/screenshots/3.png" class="img-responsive" alt="" />-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-service" data-slide-to="1"></li>
                        <li data-target="#carousel-service" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Works -->
<section id="portfolio" class="home-section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="section-heading" style="font-family: 'Cloud-Light';font-size: 24px;">
                    <h2 style="font-family: 'Cloud-Light';">ผลงานของเรา</h2>
                    <div class="heading-line"></div>
                    <p><?=$modelinfo->work_title?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <ul id="og-grid" class="og-grid">
                    <?php foreach ($portfolio as $value):?>
                    <li>
                        <a href="#" data-largesrc="img/screenshots/<?=$value->photo?>" data-title="<?=$value->title?>" data-description="<?=$value->description?>">
                            <img src="img/screenshots/<?=$value->photo?>" alt=""/>
                        </a>
                    </li>
                    <?php endforeach;?>
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="--><?//=$directoryAsset?><!--/img/works/2.jpg" data-title="Portfolio title" data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/2.jpg" alt=""/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="--><?//=$directoryAsset?><!--/img/works/3.jpg" data-title="Portfolio title" data-description="Vim ad persecuti appellantur. Eam ignota deterruisset eu, in omnis fierent convenire sed. Ne nulla veritus vel, liber euripidis in eos. Postea comprehensam vis in, detracto deseruisse mei ea. Ex sadipscing deterruisset concludaturque quo.">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/3.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="--><?//=$directoryAsset?><!--/img/works/4.jpg" data-title="Portfolio title" data-description="In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim, an movet interesset necessitatibus mea.">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/4.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="--><?//=$directoryAsset?><!--/img/works/5.jpg" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/5.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="--><?//=$directoryAsset?><!--/img/works/6.jpg" data-title="Portfolio title" data-description="Id elit saepe pro. In atomorum constituam definitionem quo, at torquatos sadipscing eum, ut eum wisi meis mentitum. Probo feugiat ea duo. An usu platonem instructior, qui dolores inciderint ad. Te elit essent mea, vim ne atqui legimus invenire, ad dolor vitae sea.">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/6.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="--><?//=$directoryAsset?><!--/img/works/7.jpg" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei.">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/7.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="--><?//=$directoryAsset?><!--/img/works/8.jpg" data-title="Portfolio title" data-description="No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/8.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="--><?//=$directoryAsset?><!--/img/works/9.jpg" data-title="Portfolio title" data-description="Lorem ipsum dolor sit amet, ex pri quod ferri fastidii. Mazim philosophia eum ad, facilisis laboramus te est. Eam magna fabellas ut. Ne vis diceret accumsan salutandi, pro in impedit accusamus dissentias, ut nonumy eloquentiam ius.">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/9.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="--><?//=$directoryAsset?><!--/img/works/10.jpg" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim.">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/10.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="--><?//=$directoryAsset?><!--/img/works/11.jpg" data-title="Portfolio title" data-description="Vim ad persecuti appellantur. Eam ignota deterruisset eu, in omnis fierent convenire sed. Ne nulla veritus vel, liber euripidis in eos. Postea comprehensam vis in, detracto deseruisse mei ea. Ex sadipscing deterruisset concludaturque quo.">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/11.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="img/works/12.jpg" data-title="Portfolio title" data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">-->
<!--                            <img src="img/works/thumbs/12.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="../themes/alstar/dist/img/works/ping1.jpg" data-title="Portfolio title" data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">-->
<!--                            <img src="--><?//=$directoryAsset?><!--/img/works/thumbs/ping1.jpg" alt="img01"/>-->
<!--                        </a>-->
<!--                    </li>-->
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- Parallax 2 -->
<section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="clients">
                    <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="<?=$directoryAsset?>/img/clients/1.png" alt="" /></a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="#"><img src="<?=$directoryAsset?>/img/clients/2.png" alt="" /></a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#"><img src="<?=$directoryAsset?>/img/clients/3.png" alt="" /></a></li>
                    <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="#"><img src="<?=$directoryAsset?>/img/clients/4.png" alt="" /></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<!--<section id="team" class="home-section bg-white">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-offset-2 col-md-8">-->
<!--                <div class="section-heading" style="font-family: 'Cloud-Light';">-->
<!--                    <h2 style="font-family: 'Cloud-Light';">ทีมงานของเรา</h2>-->
<!--                    <div class="heading-line"></div>-->
<!--                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">-->
<!--                <div class="box-team wow bounceInUp" data-wow-delay="0.1s">-->
<!--                    <img src="img/team/1.jpg" alt="" class="img-circle img-responsive" />-->
<!--                    <h4>Dominique Vroslav</h4>-->
<!--                    <p>Art Director</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">-->
<!--                <div class="box-team wow bounceInUp">-->
<!--                    <img src="img/team/2.jpg" alt="" class="img-circle img-responsive" />-->
<!--                    <h4>Thomas Jeffersonn</h4>-->
<!--                    <p>Web Designer</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">-->
<!--                <div class="box-team wow bounceInUp">-->
<!--                    <img src="img/team/3.jpg" alt="" class="img-circle img-responsive" />-->
<!--                    <h4>Nola Maurin</h4>-->
<!--                    <p>Illustrator</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">-->
<!--                <div class="box-team wow bounceInUp">-->
<!--                    <img src="img/team/4.jpg" alt="" class="img-circle img-responsive" />-->
<!--                    <h4>Mira Ladovic</h4>-->
<!--                    <p>Typographer</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!-- Contact -->
<section id="contact" class="home-section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="section-heading" style="font-family: 'Cloud-Light';font-size: 24px;">
                    <h2 style="font-family: 'Cloud-Light';">ติดต่อเรา</h2>
                    <div class="heading-line"></div>
                    <p><?=$modelinfo->contact_title?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <form action="<?=Url::to(['index.php?r=site/sendmessage'],true)?>" method="post" class="form-horizontal contactForm" role="form">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="ชื่อของคุณ" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-md-offset-2 col-md-8">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="อีเมล์" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-offset-2 col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control" name="social" id="social" placeholder="โซเชี่ยล" data-rule="social" data-msg="Please enter a valid social" />
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-md-offset-2 col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="ชื่อเรื่อง" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-md-offset-2 col-md-8">
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="ข้อความ"></textarea>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <button type="submit" class="btn btn-theme btn-lg btn-block">ส่งข้อความ</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</section>

<!-- Bottom widget -->
<section id="bottom-widget" class="home-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-widget wow bounceInLeft" style="font-family: 'Cloud-Light';">
                    <i class="fa fa-map-marker fa-4x"></i>
                    <h5 style="font-family: 'Cloud-Light';">ที่อยู่ร้าน</h5>
                    <p>
                        <b><?=$modelinfo->name.$modelinfo->address?></b>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-widget wow bounceInUp" style="font-family: 'Cloud-Light';">
                    <i class="fa fa-phone fa-4x"></i>
                    <h5 style="font-family: 'Cloud-Light';">โทร</h5>
                    <p>
                        <b><?=$modelinfo->tel?></b>

                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-widget wow bounceInRight" style="font-family: 'Cloud-Light';">
                    <i class="fa fa-envelope fa-4x"></i>
                    <h5 style="font-family: 'Cloud-Light';">อีเมล์</h5>
                    <p>
                        <b><?=$modelinfo->email?></b>
                    </p>
                </div>
            </div>
        </div>
        <div class="row mar-top30">
            <div class="col-md-12">
                <h5 style="font-family: 'Cloud-Light';font-size: 24px">ติดตามเราทางช่องทาง</h5>
                <ul class="social-network">
                    <li><a href="http://www.facebook.com/pingpetchserv">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
                    </li>
<!--                    <li><a href="#">-->
<!--						<span class="fa-stack fa-2x">-->
<!--							<i class="fa fa-circle fa-stack-2x"></i>-->
<!--							<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>-->
<!--						</span></a>-->
<!--                    </li>-->
                    <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span></a>
                    </li>
<!--                    <li><a href="#">-->
<!--						<span class="fa-stack fa-2x">-->
<!--							<i class="fa fa-circle fa-stack-2x"></i>-->
<!--							<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>-->
<!--						</span></a>-->
<!--                    </li>-->
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; pingpetch. All rights reserved.</p>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

