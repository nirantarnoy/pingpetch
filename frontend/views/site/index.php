<?php

/* @var $this yii\web\View */
use frontend\themes\alstar\assets\AlstarAsset;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'พิงค์เพชรเซอร์วิส';
AlstarAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@alstar/dist');

$service = \common\models\Services::find()->all();
$portfolio = \common\models\Portfolio::find()->where(['!=','photo',''])->all();
$portgallery = \backend\models\Portgallery::find()->all();
$path = Yii::getAlias('@frontend') .'/themes/alstar/dist/img';
$this->registerCss('
     body{
                font-family: "Cloud-Light";
                font-size: 16px;
            }
');
$css = <<<CSS
  .row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev{
  cursor: pointer;
  position: absolute;
  top: 50%;
  left: 0px;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
CSS;

$this->registerCss($css);

$js=<<<JS
        function openModal() {
          document.getElementById('myModal').style.display = "block";
        }
        
        // Close the Modal
        function closeModal() {
          document.getElementById('myModal').style.display = "none";
        }
        
        var slideIndex = 1;
        showSlides(slideIndex);
        
        // Next/previous controls
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        // Thumbnail image controls
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
JS;
$this->registerJs($js,static::POS_END);


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
                    <h1 style="font-family: 'Cloud-Light';font-size: 45px"><span class="1strotate"><?=$thai_text?></span></h1>
                    <div class="line-spacer"></div>
                    <p><span class="2ndrotate"><?=$eng_text?></span></p>
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
                <img src="../../frontend/themes/alstar/dist/img/about/<?php //echo $about_photo->photo?>" alt="">
                <?php if(count($about_photo->photo)>0):?>
                <img src="<?=Yii::$app->getUrlManager()->baseUrl?>/img/about/<?=$about_photo->photo?>" style="width:100%">
                <?php endif;?>
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
                    <h2 class="wow bounceInDown" data-wow-delay="0.5s" style="font-family: 'Cloud-Light';font-size: 34px"><?=$modelinfo->slogan_top?></h2>
                    <p class="lead wow bounceInUp" data-wow-delay="1s"><?=$modelinfo->slogan_bottom?></p>
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
                                        <img src="<?=Yii::$app->getUrlManager()->baseUrl?>/img/screenshots/<?=$data->photo?>" class="img-responsive" alt="" />
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
                <div class="row">
                    <?php $i=0;?>
                    <?php foreach ($portgallery as $value):?>
                        <?php $i+=1;?>
                        <div class="column" style="padding-top: 5px;">
                            <img src="<?=Yii::$app->getUrlManager()->baseUrl?>/img/screenshots/<?=$value->filename?>" onclick="openModal();currentSlide($i)" class="hover-shadow" style="width: 80%" />
                        </div>

                    <?php endforeach;?>
                </div>
<!--                <ul id="og-grid" class="og-grid">-->
                    <?php //foreach ($portfolio as $value):?>
<!--                    <li>-->
<!--                        <a href="#" data-largesrc="img/screenshots/--><?php //echo $value->photo?><!--" data-title="--><?php //echo $value->title?><!--" data-description="--><?php //echo $value->description?><!--">-->
<!--                            <img src="--><?php //echo Yii::$app->getUrlManager()->baseUrl?><!--/img/screenshots/'<?php //echo $value->photo?><!--" alt=""/>-->
<!--                        </a>-->
<!--                    </li>-->
                    <?php //endforeach;?>
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
<!--                </ul>-->

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

                <?php $form = ActiveForm::begin(['action' => Url::to(['site/sendmessage'],true)]); ?>

                <?= $form->field($modelcontact, 'contact_name')->textInput(['placeholder'=>'ชื่อผู้ติดต่อ','maxlength' => true])->label(false) ?>

                <?= $form->field($modelcontact, 'email')->textInput(['placeholder'=>'อีเมล์','maxlength' => true])->label(false) ?>

                <?= $form->field($modelcontact, 'social')->textInput(['placeholder'=>'โซเชียล','maxlength' => true])->label(false) ?>

                <?= $form->field($modelcontact, 'title')->textInput(['placeholder'=>'หัวข้อ','maxlength' => true])->label(false) ?>


                <?= $form->field($modelcontact, 'message')->textarea(['placeholder'=>'ข้อความ','rows' => 6])->label(false) ?>



                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'ส่งข้อความ'), ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

<!--                <form action="--><?//=Url::to(['site/sendmessage'],true)?><!--" method="post" class="form-horizontal contactForms" role="form">-->
<!--                    <div class="col-md-offset-2 col-md-8">-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" name="name" class="form-control" id="name" placeholder="ชื่อของคุณ" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />-->
<!--                            <div class="validation"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-offset-2 col-md-8">-->
<!--                        <div class="form-group">-->
<!--                            <input type="email" class="form-control" name="email" id="email" placeholder="อีเมล์" data-rule="email" data-msg="Please enter a valid email" />-->
<!--                            <div class="validation"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-offset-2 col-md-8">-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" class="form-control" name="social" id="social" placeholder="โซเชี่ยล" data-rule="social" data-msg="Please enter a valid social" />-->
<!--                            <div class="validation"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-offset-2 col-md-8">-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" class="form-control" name="subject" id="subject" placeholder="ชื่อเรื่อง" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />-->
<!--                            <div class="validation"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-offset-2 col-md-8">-->
<!--                        <div class="form-group">-->
<!--                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="ข้อความ"></textarea>-->
<!--                            <div class="validation"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <div class="col-md-offset-2 col-md-8">-->
<!--                            <button type="submit" class="btn btn-theme btn-lg btn-block">ส่งข้อความ</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->

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
                            <b>Line ID : geethanyarud</b>
						</a>
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

<div id="myModal" class="modal" style="z-index: 19990">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <?php $i=0;?>
        <?php foreach ($portgallery as $value):?>
            <?php $i+=1;?>

            <div class="mySlides">
                <div class="numbertext"><?=$i?> / <?=count($portgallery)?></div>
                <img src="<?=Yii::$app->getUrlManager()->baseUrl?>/img/screenshots/<?=$value->name?>" style="width:100%">
            </div>
        <?php endforeach;?>
<!--        <div class="mySlides">-->
<!--            <div class="numbertext">1 / 4</div>-->
<!--            <img src="img1_wide.jpg" style="width:100%">-->
<!--        </div>-->
<!---->
<!--        <div class="mySlides">-->
<!--            <div class="numbertext">2 / 4</div>-->
<!--            <img src="img2_wide.jpg" style="width:100%">-->
<!--        </div>-->
<!---->
<!--        <div class="mySlides">-->
<!--            <div class="numbertext">3 / 4</div>-->
<!--            <img src="img3_wide.jpg" style="width:100%">-->
<!--        </div>-->
<!---->
<!--        <div class="mySlides">-->
<!--            <div class="numbertext">4 / 4</div>-->
<!--            <img src="img4_wide.jpg" style="width:100%">-->
<!--        </div>-->

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail image controls -->

            <?php $i=0;?>
            <?php foreach ($portgallery as $value):?>
                <?php $i+=1;?>
                <div class="column">
                    <img class="demo" src="<?=Yii::$app->getUrlManager()->baseUrl?>/img/screenshots/<?=$value->name?>" onclick="currentSlide(1)" alt="Nature">
                </div>

            <?php endforeach;?>

    </div>
</div>

