<?php

/* ::base.html.twig */
class __TwigTemplate_336dee165942ad6d696737ee427be5d3f9d193fbdbe7b6c712215a6fc8c9203f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/img/icon.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "
            ";
        // line 78
        echo "
            <section id=\"footer\">
                <div class=\"container\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <h3>Products</h3>
                                <ul>
                                    <li><a href=\"http://wingthemes.com/\">WingThemes</a>
                                    </li>
                                    <li><a href=\"http://graygrids.com/\">Graygrids</a>
                                    </li>
                                    <li><a href=\"http://wpbean.com/\">WPBean</a>
                                    </li>
                                    <li><a href=\"http://landingbow.com/\">Landingbow</a>
                                    </li>
                                    <li><a href=\"http://freebiescircle.com/\">FreebiesCicle</a>
                                    </li>               
                                </ul>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <h3>FAQs</h3>
                                <ul>
                                    <li><a href=\"#\">Why choose us?</a>
                                    </li>
                                    <li><a href=\"#\">Where we are?</a>
                                    </li>
                                    <li><a href=\"#\">Fees</a>
                                    </li>
                                    <li><a href=\"#\">Guarantee</a>
                                    </li>
                                    <li><a href=\"#\">Discount</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <h3>About</h3>
                                <ul>
                                    <li><a href=\"#\">Career</a>
                                    </li>
                                    <li><a href=\"#\">Partners</a>
                                    </li>
                                    <li><a href=\"#\">Team</a>
                                    </li>
                                    <li><a href=\"#\">Clients</a>
                                    </li>
                                    <li><a href=\"#\">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <h3>Find us on</h3>
                                <a class=\"social\" href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                                <a class=\"social\" href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                                <a class=\"social\" href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a>
                            </div>
                        </div>
                    </div>  
                </div>      
                <!-- Go to Top Link -->
                <a href=\"#home\" class=\"btn btn-primary back-to-top\">
                    <i class=\" mdi-hardware-keyboard-arrow-up\"></i>
                </a>
            </section> 
            ";
        // line 216
        echo "            <section id=\"copyright\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"copyright-text\">
                                © Expert Lab's ";
        // line 221
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "now"), "Y"), "html", null, true);
        echo " All right reserved. Designed and Developed by 
                                <a href=\"javascript:void(0);\">
                                    Equipe les experts 
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>     
        </div>  

        ";
        // line 232
        $this->displayBlock('javascripts', $context, $blocks);
        // line 260
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Expert|Website";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/material.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/ripples.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/css/animate.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        // line 15
        echo "        ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "            <div class=\"navbar navbar-invers menu-wrap\">
                <div class=\"navbar-header text-center\">
                    <a class=\"navbar-brand logo-right\" href=\"javascript:void(0)\"><i class=\"mdi-image-timelapse\"></i>ExPert</a>
                </div>
                <ul class=\"nav navbar-nav main-navigation\">
                    <li class=\"active\"><a href=\"#home\">Accueil</a></li>
                    <li><a href=\"#features\">Presentation</a></li>
                    <li><a href=\"#why\">Pourquoi?</a></li>
                    <li><a href=\"#screenshot\">Screenshots</a></li>
                    <li><a href=\"#testimonial\">Testimonial</a></li>
                    <li><a href=\"#clients\">Contact</a></li>
                </ul>
                <button class=\"close-button\" id=\"close-button\">Fermé</button>
            </div>
            <div class=\"tahk\">
                <!--        <div class=\"content-wrap\">-->
                <header class=\"hero-area fullscreen background parallax\" id=\"home\" data-img-width=\"1600\" data-img-height=\"1100\" data-diff=\"100\" data-oriz-pos=\"100%\">

                    <div class=\"container content-a\">
                        <div class=\"col-md-12 content-b\">

                            <div class=\"navbar navbar-inverse sticky-navigation navbar-fixed-top\" role=\"navigation\" data-spy=\"affix\" data-offset-top=\"200\" >
                                <div class=\"container\">
                                    <div class=\"navbar-header\">
                                        <!--                  <a class=\"logo-left \" href=\"index.html\"><i class=\"mdi-image-timelapse\"></i>Pluto</a>-->
                                        <a href=\"#features\" class=\"hide contents btn btn-lg btn-border wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">S'inscrire</a>
                                        <a href=\"#login\" class=\"contents btn btn-lg btn-border wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">Connexion</a>

                                    </div>
                                    <div class=\"navbar-right\">
                                        <button class=\"menu-icon\"  id=\"open-button\">
                                            <i class=\"mdi-navigation-menu\"></i>
                                        </button>             
                                    </div>
                                </div>
                            </div>
                        </div>        
                        <div class=\"contents text-right\" data-stellar-ratio=\"0.25\" data-stellar-vertical-offset=\"-102\">
                            <h1 class=\"wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">Expert Labs</h1>
                            <p class=\"wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"400ms\">Recherche - Experience - Aplcation - Confiance</p>
                            ";
        // line 61
        echo "                            ";
        // line 66
        echo "
                        </div>   
                    </div>   
                </header>

            ";
    }

    // line 232
    public function block_javascripts($context, array $blocks = array())
    {
        // line 233
        echo "            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/material.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/material.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/wow.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/jquery.mmenu.min.all.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/count-to.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/jquery.inview.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/jquery.nav.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/smooth-on-scroll.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/smooth-scroll.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/form-validator.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/contact-form-script.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/main.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/stellar/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/waypoints/waypoint.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/communs/js/js_parallaxe.js"), "html", null, true);
        echo "\"></script>
            <script>
                \$(document).ready(function () {
                    // This command is used to initialize some elements and make them work properly
                    \$.material.init();
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 252,  313 => 251,  309 => 250,  305 => 249,  301 => 248,  297 => 247,  293 => 246,  289 => 245,  285 => 244,  281 => 243,  277 => 242,  273 => 241,  269 => 240,  265 => 239,  261 => 238,  257 => 237,  253 => 236,  249 => 235,  245 => 234,  240 => 233,  237 => 232,  228 => 66,  226 => 61,  184 => 20,  181 => 19,  177 => 15,  173 => 13,  169 => 12,  165 => 11,  161 => 10,  157 => 9,  152 => 8,  149 => 7,  143 => 6,  137 => 260,  135 => 232,  121 => 221,  114 => 216,  48 => 78,  45 => 72,  43 => 19,  36 => 16,  34 => 7,  30 => 6,  23 => 1,);
    }
}
