<?php
    require_once("includes/sections.php");
    require_once("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>FooYes - Quality delivery or takeaway food</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="assets/css/error.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <?php headerC(); ?>
	
	<main class="bg_gray">
        <div class="container margin_60_40">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4>Buttons</h4>
                    <p>
                        <a href="#0" class="btn_1 medium">Button</a>
                        <a href="#0" class="btn_1 medium pulse_bt plus_icon">Play Button<i class="arrow_triangle-right"></i></a>
                        <a href="#0" class="btn_1 plus_icon">Button<i class="arrow_triangle-right"></i></a>
                        <a href="#0" class="btn_1">Button</a>
                        <a href="#0" class="btn_1 outline">Button</a>
                        <a href="#0" class="btn_1 gray">Button</a>
                        <a href="#0" class="btn_1 small">Button</a>
                    </p>
                    <p class="mb-5">
                        <a href="#0" class="btn_1 gradient medium">Button</a>
                        <a href="#0" class="btn_1 gradient medium pulse_bt plus_icon">Play Button<i class="arrow_triangle-right"></i></a>
                        <a href="#0" class="btn_1 gradient plus_icon">Button<i class="arrow_triangle-right"></i></a>
                        <a href="#0" class="btn_1 gradient">Button</a>
                        <a href="#0" class="btn_1 gradient small">Button</a>
                    </p>

                    <h4>Forms</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="container_radio">Radio 1
                                <input type="radio" name="type_d" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">Radio 2
                                <input type="radio" name="type_d">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">Radio 3
                                <input type="radio" name="type_d">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label class="container_check">Checkbox 1
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_check">Checkbox 2
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_check">Checkbox 3
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-3 mb-5">
                        <div class="form-group">
                            <label>Text input</label>
                            <input type="text" class="form-control" placeholder="Text input">
                        </div>
                        <div class="form-group">
                            <label>Password show/hide</label>
                            <input class="form-control" type="password" id="password2" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" style="height: 150px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom_select clearfix">
                                <label>Select</label>
                                <select class="wide form-control">
                                    <option value="">Your City</option>
                                    <option value="London">London</option>
                                    <option value="Paris">Paris</option>
                                    <option value="Madrid">Madrid</option>
                                    <option value="Berlin">Berlin</option>
                                    <option value="Rome">Rome</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-3">Accordion</h4>
                    <div role="tablist" class="add_bottom_15 accordion_2" id="accordion_group">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5>
                                    <a data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true"><i class="indicator icon_minus-06"></i>Introdocution</a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" data-bs-parent="#accordion_group">
                                <div class="card-body">
                                    <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5>
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                        <i class="indicator icon_plus"></i>Generative Modeling Review
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" data-bs-parent="#accordion_group">
                                <div class="card-body">
                                    <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                    </div>
                    <!-- /accordion group -->

                    <h4 class="mt-3">Modals</h4>
                    <a href="#modal-dialog" class="btn_1 modal_dialog">Lunch modal generic</a> 
                    <span class="magnific-gallery"><a href="assets/img/detail_gallery/detail_1.jpg" title="Photo title" data-effect="mfp-zoom-in" class="btn_1">Lunch modal image</a></span>
                    <a href="https://www.youtube.com/watch?v=MO7Hi_kBBBg" class="btn_1 btn_play">Lunch modal Youtube/Vimeo</a>

                    <h4 class="mt-5">Boxes</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box_info_1 pr-lg-3">
                                <div class="wrapper_img">
                                    <figure><img src="assets/img/submit_restaurant_home.jpg" data-src="assets/img/submit_restaurant_home.jpg" alt="" class="img-fluid lazy loaded" data-was-processed="true"></figure><span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="box_topic" href="#0">
                                <i class="icon_cloud-upload_alt"></i>
                                <h3>Submission</h3>
                                <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
                            </a>
                        </div>
                    </div>
                    <!-- /row -->

                    <h4 class="mt-3">Typography</h4>
                    <h1>Headline H1</h1>
                    <h2>Headline H2</h2>
                    <h3>Headline H3</h3>
                    <h4>Headline H4</h4>
                    <h5>Headline H5</h5>
                    <h6>Headline H6</h6><br>
                    <p class="lead">Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
                    <div class="main_title center">
                        <span><em></em></span>
                        <h2>Headline H2 Center</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
                    </div>
                    <br>
                    <div class="main_title">
                        <span><em></em></span>
                        <h2>Headline H2 Left</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
                    </div>
                    <br>
                    <div class="intro_txt">
                        <div class="main_title">
                            <span><em></em></span>
                            <h2>Headline H2 Strong</h2>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur deserunt.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
    </main>
    <!-- /main -->

	<!-- Footer -->
    <?php footerC(); ?>

    <!-- Back to top button -->
	<div id="toTop"></div>
	
	<!-- Sign In Modal -->
	<?php loginC(); ?>

    <!-- Modal dialog -->
    <div id="modal-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Modal</h3>
        </div>
        <div class="content">
            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
        </div>
    </div>
    <!-- /Modal dialog -->
	
	<!-- COMMON SCRIPTS -->
    <script src="assets/js/common_scripts.min.js"></script>
    <script src="assets/js/common_func.js"></script>
    <script src="assets/validate.js"></script>

</body>
</html>