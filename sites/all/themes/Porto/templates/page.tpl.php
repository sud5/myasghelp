<?php $bread = theme_get_setting('breadcrumbs');
global $base_url;?>
<div class="body">
<?php include_once('includes/header.inc');?>

<div class="mobile-nav">

<div class="mobile-nav-wrapper">
<?php print render($page['menu_mobile']);?>
</div>
</div>

<div id="mobile-menu-overlay"></div>

<div role="main" class="main">
<?php if($title && $breadcrumb && $bread == 1 && !drupal_is_front_page()): ?>
    <section class="page-header mb-lg breadCrumb">
        <div class="container">
            <?php print $breadcrumb;?>
        </div>
    </section>
<?php endif;?>
    <div class="header-student-post-form-wrapper">
	<div class="container">
		<?php print assignment_help_get_student_post_form(); ?>
	</div>
</div>
<?php if($page['before_content']):?>
    <?php print render($page['before_content']);?>
<?php endif;?>

    <?php if($page['slider'] || $page['menu_vertical']):?>
        <div class="home-slider-area">
            <div class="container">
                <div class="row">
                    <?php if($page['slider']):?>
                        <div class="col-md-12 col-md-push-0">
                            <?php print render($page['slider']);?>

                        </div>
                    <?php endif;?>
                    <?php if($page['menu_vertical']):?>
                        <div class="col-md-3 col-md-pull-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php print render($page['menu_vertical']);?>
                                </div>

                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    <?php endif;?>

<div class="container">
    <?php print render($title_prefix); ?>
    <div class="row">
        <?php if ($messages): ?>
            <div class="col-md-12">
                <?php print $messages; ?>
            </div>
        <?php endif; ?>
        <?php if ($tabs = render($tabs)): ?>
        <div class="col-md-12">
            <div id="drupal_tabs" class="tabs ">
                <?php print render($tabs); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
        <?php endif; ?>
        <?php if($page['sidebar_left']): ?>
            <aside class="col-md-3 sidebar shop-sidebar <?php if(drupal_is_front_page()): print 'home-sidebar'; endif;?>">
                <div class="panel-group">
                    <?php print render($page['sidebar_left']); ?>
                </div>
            </aside>
        <?php endif; ?>

        <div class="<?php if(($page['sidebar_right']) AND ($page['sidebar_left']) ){ echo "col-md-6";} elseif (($page['sidebar_right']) OR ($page['sidebar_left']) ) {  echo "col-md-9"; }else{ echo "col-md-12"; }?>">
            <?php if (isset($page['content'])) { print render($page['content']); } ?>
        </div>



        <?php if($page['sidebar_right']): ?>
            <div class="<?php if ($page['sidebar_left']) { echo "col-md-3";} else { echo "col-md-3 "; } ?>">
                <aside class="sidebar">
                    <?php print render($page['sidebar_right']); ?>
                </aside>
            </div>
        <?php endif; ?>
    </div>
    


    




    <?php print render($page['after_content']); ?>
    <?php print render($title_suffix); ?>


</div>
<?php if(drupal_is_front_page()): ?>
<section id="content" style="margin-bottom: 0px;">

<div class="content-wrap pb-0">
    <div class="container clearfix">
        <div class="row">
            <div class="divcenter center clearfix mt-5">
                <h2 class="mb-0">HOW ANY ASSIGNMENT HELP WORKS</h2>
            </div>

            <div class="line"></div>

            <div class="col-lg-4">
                <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                    <div class="fbox-icon">
                        <a href="#"><i class="fa fa-database"></i></a>
                    </div>
                    <h3>SUBMIT YOUR ASSIGNMENT</h3>
                    <p>Fill the form, add your credentials, attach the docs and submit your
                        requirements, so, our team can look into it. Get an instant response 
                        from our expert along with the right quote!</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="200">
                    <div class="fbox-icon">
                        <a href="#"><i class="fa fa-cc-mastercard"></i></a>
                    </div>
                    <h3>PAY FOR ASSIGNMENT</h3>
                    <p>When you’re satisfied with our quoted price, proceed to the payment procedure 
                        using one of the given payment methods: PayPal, Mastercard, or Visa Card, or Online Banking.
It’s confidential    and safe.</p>
                </div>
            </div>

            <div class="col-lg-4 col_last">
                <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="400">
                    <div class="fbox-icon">
                        <a href="#"><i class="fa fa-envelope-open"></i></a>
                    </div>
                    <h3>GET ASSIGNMENT SOLUTION</h3>
                    <p>You’ll receive the 100% original final assignment delivered within the given deadline 
                        directly into your account's inbox along with Plagiarism report!</p>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="button button-3d button-large">Order Now</a>
            </div>

            <div class="clear"></div>
            <hr>
        </div>
    </div>


    <div class="container-fluid">


        <div class="row common-height assignment">
            <div class="divcenter center clearfix">
                <h2 class="mt-5">HOW ASSIGNMENT HELP WORKS</h2>
            </div>
            <div class="clear"></div>
            <div class="col-lg-3 dark col-padding ohidden" style="background-color: rgb(26, 188, 156); height: 355.2px;">
                <div>
                    <i class="fa fa-file-text"></i>
                    <h3 class="uppercase" style="font-weight: 600;">ONLINE ASSIGNMENT HELP</h3>
                    <p style="line-height: 1.8;">Any Assignment Help is a reputed and trusted Homework and Assignment writing 
                        service providers for students throughout the world. We deal with assignment writing services 
                        from K2 to Ph.D. level students.Our team of professionals incorporates highly skilled Lecturers.</p>
                    <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read
                        More</a>
                </div>
            </div>

            <div class="col-lg-3 dark col-padding ohidden" style="background-color: rgb(52, 73, 94); height: 355.2px;">
                <div>
                    <i class="fa fa-pencil"></i>
                    <h3 class="uppercase" style="font-weight: 600;">CUSTOM ESSAY WRITING HELP</h3>
                    <p style="line-height: 1.8;">Our custom essay writing service will offer an essay 
                        that satisfies your needs. Through consistent interaction with the designated 
                        writer, your personality will be featured in your custom essay content.Our administrations keep the details provided by you to their earnest considerations.
                        </p>
                    <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read
                        More</a>
                </div>
            </div>

            <div class="col-lg-3 dark col-padding ohidden" style="background-color: rgb(231, 76, 60); height: 355.2px;">
                <div>
                    <i class="fa fa-book"></i>
                    <h3 class="uppercase" style="font-weight: 600;">Dissertation Writing Help</h3>
                    <p style="line-height: 1.8;">Dissertation and thesis are the toughest of the university tasks
                        as well as a critical phase in the student's life to excel. Thus, Any Assignment Help assigns 
                        your research paper only to those experts who are certified by the leading universities 
                        and foundations.</p>
                    <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read
                        More</a>
                </div>
            </div>

            <div class="col-lg-3 dark col-padding ohidden" style="background-color: #66bb6a; height: 355.2px;">
                <div>
                    <i class="fa fa-cogs"></i>
                    <h3 class="uppercase" style="font-weight: 600;">All Writing Services</h3>
                    <p style="line-height: 1.8;">When you seek assistance from Any Assignment Help, you get your essays written solely from the
                        writers who belong to your discipline and are experienced. The composition will be absolutely
                        unique along with the clearly given reference and citation.</p>
                    <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read
                        More</a>
                </div>
            </div>

            <div class="clear"></div>

        </div>

    </div>
    
    <div style="margin-top:20px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 nobottommargin center bounceIn animated" data-animate="bounceIn">
                    <i class="i-plain i-xlarge divcenter nobottommargin"><img src= <?php echo "$base_url" .'/sites/all/themes/Porto/img/delivered-icon.png' ?> alt="delivered"></i>
                    <div class="counter counter-lined"><span data-from="100" data-to="846"
                            data-refresh-interval="50" data-speed="2000">846</span>K+</div>
                    <h5>DELIVERED ORDERS</h5>
                </div>

                <div class="col-lg-4 nobottommargin center bounceIn animated" data-animate="bounceIn"
                    data-delay="200">
                    <i class="i-plain i-xlarge divcenter nobottommargin"><img src= <?php echo "$base_url" .'/sites/all/themes/Porto/img/experts.png' ?> alt="ratings"></i>
                    <div class="counter counter-lined"><span data-from="3000" data-to="15360"
                            data-refresh-interval="100" data-speed="2500">15360</span>+</div>
                    <h5>EXPERTS</h5>
                </div>

                <div class="col-lg-4 nobottommargin center bounceIn animated" data-animate="bounceIn"
                    data-delay="400">
                    <i class="i-plain i-xlarge divcenter nobottommargin"><img src= <?php echo "$base_url" .'/sites/all/themes/Porto/img/client-ratings.png' ?> alt="ratings"></i>
                    <div class="counter counter-lined"><span data-from="10" data-to="386" data-refresh-interval="25"
                            data-speed="3500">386</span>*</div>
                    <h5>CLIENT RATING</h5>
                </div>

                <div class="col-lg-12 heading-block center">
                    <h2>Hire AnyAssignmenthelp.Com's Expert Assignment <br /> Writer And See The Difference In
                        Your Grade</h2>
                    <div class="divcenter">Our organization is willing to assist you with writing academic assignments, 
                        dissertations, research, papers, essays, etc. of any difficulty level. Our team includes
                        professionals from the top universities and institutions of US, UK, and Australia which are
                        chosen only after the precise testing and checking of their credential. We aim to serve students 
                        with professionally written content, so they achieve improved academic performance.</div>
                </div>

                <div class="col-lg-12 text-center mb-5">
                    <a href="#" class="button button-3d button-large">GET ASSISTANCE NOW</a>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>

    <hr/>

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-5  nobottommargin">
                <a href="#">
                    <img src=<?php echo "$base_url" .'/sites/all/themes/Porto/img/about.jpg' ?> alt="Image">
                </a>
            </div>
            <div class="col-lg-7  nobottommargin col_last">
                <h2 class="text-left">WHY ANYASSIGNMENTHELP.COM?</h2>

                <p class="pb-0">Any assignmenthelp is a pioneer in offering online assignment help 
                    services to students of all segments. We have a team of professional writers,
                    who are from diverse educational backgrounds, providing help on a vast range 
                    of writing services. Our professionals are thoroughly aware of the obligations
                    of different colleges and universities to offer you the best. Getting assignment
                    guidance from a pool of our world’s top assignment masters is the best decision
                    you could ever make. They do impeccable formatting and referencing to curate 
                    100% original content which will result in the high-quality assignment so that 
                    you score good grades.<br /><br />
                   We also adhere to the rule that students do not miss the assignment submission
                   deadlines. Further, we strictly follow the NO Plagiarism rule. These are the 
                   reasons why any assignment help is considered to be the companion for online assignment
                   help seekers irrespective of the subject and field.<br /><br />
                   So, if you are having difficulty in the writing the unique content or are
                   running out of time, look nowhere! Choose us to get on-time and reliable 
                   writing help. You can reach our 24/7 support team that will connect you with
                   the relevant writing professional. We are always there to assist you for your 
                   assignment needs!

            </div>
        </div>
    </div>

    <div class="grey-back pt-5 pb-5">

        <div class="container ">
            <h2 class="text-center">ANY ASSIGNMENT HELP FEATURES</h2>
            <div class="row">

                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-clock-o"></i></a>
                        </div>
                        <h3>On Time Delivery</h3>
                        <p>With us, you'll never miss your deadline again! Get our writing services to 
                            receive your assignments much before your time of submission. 
                            It’ll help you to check if the assignment meets your prerequisites. 
                            Our proficient writers are dedicated to timely delivery as we know how crucial 
                            it’s for you.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-headphones"></i></a>
                        </div>
                        <h3>24 X 7 Live Help</h3>
                        <p>We’re always here to help you out! You can connect with us through phone, 
                            mail or live chat to get your queries solved instantly. Our customer 
                            care staff is 24/7 available for your convenience.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>

                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-book"></i></a>
                        </div>
                        <h3>Services For All Subjects</h3>
                        <p>Our services for assignment, essay, and research paper writing range 
                            from Nursing to Management, Statistics to Law, Engineering, and much more.
                            We ensure that all the essays or research papers for any subject domain 
                            are written as per the precise academic criteria that satisfy your 
                            college's demands.Whatever you need, we got you covered. 
                            When you get help from our premium writing administration, 
                            you no longer need to stress on poor-quality assignment submission.</p>
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-users"></i></a>
                        </div>
                        <h3>4500+ PhD Experts</h3>
                        <p> Any Assignment help owns a qualified crew of experienced writers and Ph.D. 
                            level industry pros who are able of producing the best academic content
                            and authentic coursework assistance with revised results assurance.
                            Be it any difficulty level or a specific subject domain, our skilled
                            writers and editors both offer the absolute best solution for all of 
                            your problems regarding academic writing. </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>


                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-list-alt"></i></a>
                        </div>
                        <h3>Plagiarism Free Work</h3>
                        <p>Plagiarism is entirely restrained within our company’s boundaries. 
                         Every piece of work goes through rigorous Proofreading Process and Quality Assurance by professional 
                         editors before submitting it to students to secure the reliability of our clients.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-dollar"></i></a>
                        </div>
                        <h3>Best Price Guarantee</h3>
                        <p>Did you ever wonder if it’s feasible to get a high-grade assignment
                            writing help in the affordable price range? Assignmenthelp gives you 
                            that surety that too without compromising on the quality of assignments.
                            We have an unbeatable price that you will not find anywhere else in the
                            online industry.</p>
                    </div>
                </div>

<!--                <div class="col-lg-12 text-center mt-4 mb-5">
                    <a href="#" class="button button-3d button-large">View All</a>
                </div>-->

            </div>

        </div>
    </div>

</div>

</section>
<?php endif;?>

</div>

<?php if(!drupal_is_front_page()): ?>
<div class="content-wrap1">
    <div class="container">
        <div class="row">
            <div class="cil-xl-4 col-lg-4 col-md-5 col-sm-12">
                <div class="row">  
                    <div class="b-g-r-in bder-btm">    
                        <div class="rateLft">
                            <a href="#"> 
                            <img src=<?php echo "$base_url" .'/sites/all/themes/Porto/pro1.jpg'?>  class="img-thumbnail ratingImg" alt="expert"></a> 
                        </div>    
                        <div class="rateRht">      
                            <p class="mb-1">
                                <a href="#">
                                    <b>Alex Stuart</b>
                                </a><br>        
                                <span class="clr-o">
                                    <small>
                                    <i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i></small></span> </p>      
                                    <p class="lin-ht mb-5"><small>LLM in Criminal Law </small></p>      
                                    <p class="lin-ht"><small>453 - Completed Orders</small>
                                    </p>     
                                    <a href="#">
                                            <span class="hire-but pt-1 pull-left">Hire Me</span>
                                    </a>
                        </div>  
                    </div>
                </div>
                <div class="row">  
                    <div class="b-g-r-in bder-btm">    
                        <div class="rateLft">
                            <a href="#"> 
                            <img src=<?php echo "$base_url" .'/sites/all/themes/Porto/pro2.jpg'?>  class="img-thumbnail ratingImg" alt="expert"></a> 
                        </div>    
                        <div class="rateRht">      
                            <p class="mb-1">
                                <a href="#">
                                    <b>Shawn Michel</b>
                                </a><br>        
                                <span class="clr-o">
                                    <small>
                                    <i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i></small></span> </p>      
                                    <p class="lin-ht mb-5"><small>MBA in Marketing</small></p>      
                                    <p class="lin-ht"><small>691 - Completed Orders</small>
                                    </p>     
                                    <a href="#">
                                            <span class="hire-but pt-1 pull-left">Hire Me</span>
                                    </a>
                        </div>  
                    </div>
                </div>
                <div class="row">  
                    <div class="b-g-r-in bder-btm">    
                        <div class="rateLft">
                            <a href="#"> 
                            <img src=<?php echo "$base_url" .'/sites/all/themes/Porto/pro3.jpg'?>  class="img-thumbnail ratingImg" alt="expert"></a> 
                        </div>    
                        <div class="rateRht">      
                            <p class="mb-1">
                                <a href="#">
                                    <b>Daniel Hill </b>
                                </a><br>        
                                <span class="clr-o">
                                    <small>
                                    <i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i></small></span> </p>      
                                    <p class="lin-ht mb-5"><small>MPA in Accounting </small></p>      
                                    <p class="lin-ht"><small>1429 - Completed Orders</small>
                                    </p>     
                                    <a href="#">
                                            <span class="hire-but pt-1 pull-left">Hire Me</span>
                                    </a>
                        </div>  
                    </div>
                </div>
                <div class="row">  
                    <div class="b-g-r-in bder-btm">    
                        <div class="rateLft">
                            <a href="#"> 
                            <img src=<?php echo "$base_url" .'/sites/all/themes/Porto/pro4.jpg'?>  class="img-thumbnail ratingImg" alt="expert"></a> 
                        </div>    
                        <div class="rateRht">      
                            <p class="mb-1">
                                <a href="#">
                                    <b>Frankie Wright</b>
                                </a><br>        
                                <span class="clr-o">
                                    <small>
                                    <i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i></small></span> </p>      
                                    <p class="lin-ht mb-5"><small>Masters in Management, MMgt </small></p>      
                                    <p class="lin-ht"><small>968 - Completed Orders</small>
                                    </p>     
                                    <a href="#">
                                            <span class="hire-but pt-1 pull-left">Hire Me</span>
                                    </a>
                        </div>  
                    </div>
                </div>
                <div class="row">  
                    <div class="b-g-r-in bder-btm" style="margin-bottom:50px;">    
                        <div class="rateLft">
                            <a href="#"> 
                            <img src=<?php echo "$base_url" .'/sites/all/themes/Porto/pro5.jpg'?> class="img-thumbnail ratingImg" alt="expert"></a> 
                        </div>    
                        <div class="rateRht">      
                            <p class="mb-1">
                                <a href="#">
                                    <b>Andrew Jemes</b>
                                </a><br>        
                                <span class="clr-o">
                                    <small>
                                    <i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i></small></span> </p>      
                                    <p class="lin-ht mb-5"><small>PhD in Economics</small></p>      
                                    <p class="lin-ht"><small>759 - Completed Orders</small>
                                    </p>     
                                    <a href="#">
                                            <span class="hire-but pt-1 pull-left">Hire Me</span>
                                    </a>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="cil-xl-8 col-lg-8 col-md-7 col-sm-12">
                <div class="col-md-12 left-page">
                    <h2>Data Mining Assignment Help</h2>
                    <p id="How">Data mining is an interdisciplinary sub-field of computer science that analyzes data from various perspectives and summarizes it into useful information. In other words, data mining is a powerful technology used in the extraction of hidden information from large databases. Data mining assignments give prominence to various aspects of the said discipline.</p><p>In addition, RapidMiner is the most popular and widespread open source data mining solution in world. It is a software tool applied for simple statistical evaluations such as regression, correlation analysis, clustering and classification of analytical procedures, parameter optimization and dimension reduction.</p><p>Data mining assignments are a mandatory coursework for students in UK, US and Australia. MyAssignmenthelp.com offers data mining <a href="https://myassignmenthelp.com/us/"><strong>assignments help</strong></a> online, data mining essays and data mining thesis help after conducting intricate data mining research.</p>
                    <h2>How does Data Mining Work?</h2>
                    <p>Data mining software analyzes the pattern of stored transaction data and evaluates the relationship between them based on the platform of open-ended user queries. Compose data mining assignments including these features. Data mining analytical software are mainly of the following types.</p>
                    <ul>
                        <li>Statistical</li>
                        <li>Machine learning</li>
                        <li>Neural network</li>
                    </ul>
                    <p>These three types of analytical tools are used to sought out the following relationships. Highlight the following in your data mining assignments.</p>
            </div>
        </div>
    </div>
</div>
<?php endif;?>


<?php include_once('includes/footer.inc');?>
</div>
