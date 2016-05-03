<?php

/* ExpertAcceuilBundle:Default:index.html.twig */
class __TwigTemplate_9829e247ef7ccefef31fcb2756673a217dd3372d5608613b305107f75fd31741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "     ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
       <section id=\"features\" class=\"section not-fullscreen background parallax\" data-img-width=\"1600\" data-img-height=\"1064\" data-diff=\"100\">
                <div class=\"container content-a\">
                    <div class=\"section-header content-b\">
                        <h1 class=\"section-title wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"100ms\">App Features</h1>
                        <h2 class=\"section-subtitle wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">Who seeks after it and wants to have it</h2>
                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-settings\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Built-with Bootstrap 3.5.x</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"450ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-done-all\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Material Design</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"550ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-image-blur-linear\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Clean and Refreshing</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>            


                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"650ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-communication-business\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Ready for Business or App</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"750ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-favorite\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Crafted with Love</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"850ms\">
                            <div class=\"features\">
                                <div class=\"icon\">
                                    <i class=\"mdi-hardware-phonelink\"></i>
                                </div>
                                <div class=\"features-text\">
                                    <h4>Fully Responsive Layout</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </section>

            <section id=\"why\" class=\"";
        // line 106
        echo " fullscreen background parallax\" data-img-width=\"1600\" data-img-height=\"1064\" data-diff=\"100\" data-oriz-pos=\"100%\">
                <div class=\"container content-a\">

                    <div class=\"row content-b\">     

                        <div class=\"col-md-6 col-sm-6 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <img src=\"img/features/img1.png\" alt=\"\">
                        </div>

                        <div class=\"col-md-6 col-sm-6 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"pull-left content\">
                                <h2>This is Why You Will <br> Love Pluto</h2>
                                <p>
                                    Material UI Bootstrap APP and Business Template orem ipsum <br>
                                    dolor sit amet, consectetur adipIusto quisquam idodit dolore inventore <br>
                                    eumetur adipIusto quisquam idodit dolore inventore eum'
                                    dolor sit amet, consectetur adipIusto quisquam idodit dolore inventore <br>
                                </p>
                                <ul class=\"list-item\">
                                    <li><i class=\"mdi-action-done\"></i>OffCanvas Menu</li>
                                    <li><i class=\"mdi-action-done\"></i>Based on Material design</li>
                                    <li><i class=\"mdi-action-done\"></i>Free to Use</li>
                                    <li><i class=\"mdi-action-done\"></i>Built-with Bootstrap 3.5.x</li>
                                    <li><i class=\"mdi-action-done\"></i>Refreshing Designß</li>
                                </ul>
                                <a href=\"javascript:void(0)\" class=\"btn btn-lg btn-primary\">Downoad Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id=\"main-features\" class=\"section main-feature-gray\">
                <div class=\"container\">

                    <div class=\"row\">   
                        <div class=\"col-md-8 col-sm-8 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"feature-item\">
                                <h3 class=\"title-small\">
                                    Sync with the app to analyze your fitness
                                </h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's 
                                    standard dummy text, when an unknown printer took a galley of type and scrambled it to 
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronicstandard 
                                    dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to 
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                </p>
                            </div>
                        </div>

                        <div class=\"col-md-4 col-sm-4 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <img src=\"img/features/fet1.png\" class=\"img-responsive\" alt=\"\">
                        </div>  

                    </div>

                </div>
            </section>

            <section id=\"why\" class=\"section background parallax\" data-img-width=\"1600\" data-img-height=\"1064\" data-diff=\"100\" style=\"background-image: url('https://mgcreativedesign.files.wordpress.com/2014/11/cropped-cropped-cropped-website-design-background1.png')\">
                <div class=\"container content-a\">


                    <div class=\"row content-b\">   
                        <div class=\"col-md-4 col-sm-4 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <img src=\"img/features/fet2.png\" class=\"img-responsive\" alt=\"\">
                        </div>    

                        <div class=\"col-md-8 col-sm-8 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"feature-item\">
                                <h2>
                                    Set a goal and improve your lifestyle
                                </h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's 
                                    standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to 
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronicstandard 
                                    dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to 
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            ";
        // line 231
        echo "
            ";
        // line 240
        echo "
            ";
        // line 359
        echo "

            <section id=\"other-features\" class=\"main-feature-gray\">
                <div class=\"container\">
                    <div class=\"section-header\">
                        <h1 class=\"section-title wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">Other Features</h1>
                        <h2 class=\"section-subtitle wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">Who seeks after it and wants to have it</h2>
                    </div> 
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">
                            <div class=\"features-content\">
                                <div class=\"icon hi-icon-effect-3b\">
                                    <i class=\"mdi-action-settings\"></i>
                                </div>
                                <h3>Customization</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-lock-outline\"></i>
                                </div>
                                <h3>Security</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"800ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-file-cloud-queue\"></i>
                                </div>
                                <h3>Cloud</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"1000ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-social-person-outline\"></i>
                                </div>
                                <h3>Analtyics</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-grade\"></i>
                                </div>
                                <h3>Performance</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"1400ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-content-flag\"></i>
                                </div>
                                <h3>Network</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"1600ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-communication-messenger\"></i>
                                </div>
                                <h3>Support</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"1800ms\">
                            <div class=\"features-content\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-settings-power\"></i>
                                </div>
                                <h3>Easy</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id=\"testimonial\" class=\"section background parallax\" data-img-width=\"1600\" data-img-height=\"1064\" data-diff=\"100\">
                <div class=\"container\">
                    <div class=\"section-header text-center wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">
                        <h1 class=\"section-title\">What People Says</h1>
                        <h2 class=\"section-subtitle\">Material UI Bootstrap APP and Business Template</h2>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-sm-offset-2 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">
                            <div id=\"testimonial-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                                <!-- Indicators -->
                                <ol class=\"carousel-indicators\">
                                    <li data-target=\"#testimonial-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                    <li data-target=\"#testimonial-carousel\" data-slide-to=\"1\"></li>
                                    <li data-target=\"#testimonial-carousel\" data-slide-to=\"2\"></li>
                                </ol>
                                <div class=\"carousel-inner\">
                                    <div class=\"item active text-center\">               
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                        <div class=\"meta\">
                                            <p>Web excutive <span><a href=\"http://wingthemes.com/\">WingThemes</a></span></p>
                                        </div>
                                    </div>
                                    <div class=\"item text-center\">                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                        <div class=\"meta\">
                                            <p>Web excutive <span><a href=\"http://graygrids.com/\">GrayGrids</a></span></p>
                                        </div>
                                    </div>
                                    <div class=\"item text-center\">                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                        <div class=\"meta\">
                                            <p>Web excutive <span><a href=\"http://landingbow.com/\">LandinBow</a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id=\"counter\" class=\"section\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6 col-xs-12 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"counter-item\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-get-app\"></i>
                                </div>
                                <h3 class=\"timer\">39000</h3>
                                <hr>
                                <h5>
                                    Free Downloads
                                </h5>          
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                            <div class=\"counter-item\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-face-unlock\"></i>
                                </div>
                                <h3 class=\"timer\">1046</h3>
                                <hr>
                                <h5>
                                    Premium Users
                                </h5>          
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"700ms\">
                            <div class=\"counter-item\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-grade\"></i>
                                </div>
                                <h3 class=\"timer\">6345</h3>
                                <hr>
                                <h5>
                                    Five Start Reviews
                                </h5>          
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
                            <div class=\"counter-item\">
                                <div class=\"icon\">
                                    <i class=\"mdi-action-trending-up\"></i>
                                </div>
                                <h3 class=\"timer\">18325</h3>
                                <hr>
                                <h5>
                                    Active Installs
                                </h5>          
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id=\"clients\" class=\"section\">
                <div class=\"container\">

                    <div class=\"section-header text-center\">
                        <h1 class=\"section-title wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">Featured on</h1>
                        <h2 class=\"section-subtitle wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">Material UI Bootstrap APP and Business Template</h2>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-3 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"client-item-wrapper\">
                                <img src=\"img/clients/img1.png\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                            <div class=\"client-item-wrapper\">
                                <img src=\"img/clients/img2.png\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"700ms\">
                            <div class=\"client-item-wrapper\">
                                <img src=\"img/clients/img3.png\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
                            <div class=\"client-item-wrapper\">
                                <img src=\"img/clients/img4.png\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
";
    }

    // line 575
    public function block_javascripts($context, array $blocks = array())
    {
        // line 576
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ExpertAcceuilBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 576,  477 => 575,  258 => 359,  255 => 240,  252 => 231,  155 => 106,  51 => 6,  48 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
