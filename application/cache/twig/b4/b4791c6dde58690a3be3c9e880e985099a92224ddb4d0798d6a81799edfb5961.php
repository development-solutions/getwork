<?php

/* home.twig */
class __TwigTemplate_8a01ff0ed55415da977aa8b4ae53325fb45d1eea01f0752ce6228e9c19d4c2cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "home.twig", 1);
        $this->blocks = array(
            'metatags' => array($this, 'block_metatags'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_metatags($context, array $blocks = array())
    {
        // line 3
        echo "    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Find latest Construction Jobs or Railway Jobs in UK online on Getwork.construction. View and Apply now for best desired Construction job free.\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Getwork - Construction Jobs in UK | Railway jobs in UK</title>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<section class=\"main-section parallex\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 col-sm-12 col-md-offset-1 col-xs-12 nopadding\">
                <div class=\"search-form-contaner\">
                    <h1 class=\"search-main-title\">A site solely dedicated to <br><span>The Construction Industry</span></br></h1>
                    <form action=\"/home/jobs\" method=\"post\" class=\"form-inline\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">                                
                                <input autocomplete=\"off\" type=\"text\" onkeyup=\"window.common.getJobTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Job title or skills\" value=\"\">
                                <i class=\"icon-magnifying-glass\"></i>
                            </div>    
                            <span class=\"search-eg\">e.g. foreman, crane supervisor, electrician</span>                       
                            <div id=\"keywords\">
                                <ul class=\"drop-down-multilevel effect-fade nopadding\"></ul>
                            </div>
                        </div>
                        <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group cstm-search\">
                                 <input id=\"autocomplete\" onFocus=\"window.common.geolocate()\" type=\"text\" class=\"form-control\" name=\"location\" placeholder=\"town,city or post code\" value=\"\">
                                <i class=\"icon-map-pin\"></i><i onclick=\"window.common.getUserLocation(this)\" class=\"fa fa-crosshairs\"></i>
                            </div>
                            <span class=\"search-eg\">e.g. london, birmingham, leicester</span>
                        </div>
                        <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                            <div class=\"form-group form-action\">
                                <input type=\"submit\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- block section after search leftside-->
<section class=\"featured-blocks fullblock\">
<div class=\"row\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"container\">
    <div class=\"col-md-6 col-sm-6 col-xs-12 searchcourse\">
   <div class=\"Heading-title black cstm-featured-head fjobs-box\">
                        <h1>Featured Jobs</h1>
                        
                    </div>
                
                <div class=\"col-md-12 col-sm-12 col-xs-12 course-box\">
                <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                   <div class=\"jobhead\">
                                <h3><a href=\"\"> Graphic Designer </a></h3>
                            </div>
                            </div>
                    

                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"col-md-6 col-sm-6\">
                            <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box courseimg\"><img src=\"../images/trades/companies/5.png\" class=\"img-responsive center-block\" alt=\"Construction jobs in London\"></div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6\">
                        <div class=\"coursedtail\">
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                        </div>

                        
                         <div class=\"col-md-6 col-sm-6\">

                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 1 days ago</a> <a href=\"\" class=\"mata-detail part\">Part Time</a> </div>
                     </div>
                 </div>
                 <div class=\"row\">
                    
                     <div class=\"col-md-12 col-sm-12 col-xs-12\">

                            <div class=\"feature-post-meta-bottom courseprice\"> <span>\$500<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>

                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn courseviewbtn\">
                        <button class=\"btn-default cstm-btn-bg-black\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>


            <div class=\"col-md-6 col-sm-6 searchcourse\">
   <div class=\"Heading-title black cstm-featured-head fjobs-box\">
                        <h1>Featured Courses</h1>
                        
                    </div>
                
                <div class=\"col-md-12 col-sm-12 col-xs-12 course-box\">
                <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                   <div class=\"jobhead\">
                                <h3><a href=\"\"> Graphic Designer </a></h3>
                            </div>
                            </div>
                    

                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"col-md-6 col-sm-6\">
                            <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box courseimg\"><img src=\"../images/trades/companies/5.png\" class=\"img-responsive center-block\" alt=\"Construction jobs in UK\"></div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6\">
                        <div class=\"coursedtail\">
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                        </div>

                        
                         <div class=\"col-md-6 col-sm-6\">

                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 1 days ago</a> <a href=\"\" class=\"mata-detail part\">Part Time</a> </div>
                     </div>
                 </div>
                 <div class=\"row\">
                    
                     <div class=\"col-md-12 col-sm-12 col-xs-12\">

                            <div class=\"feature-post-meta-bottom courseprice\"> <span>\$500<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>

                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn courseviewbtn\">
                        <button class=\"btn-default cstm-btn-bg-black\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>
        </div>
            </div>







            

                

<!-- block section after search rightside-->
  </section>

<section class=\"whatwedo\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"service-logo col-md-12 col-sm-12 col-xs-12\">
                
\t\t\t\t<img src=\"../../images/getworklogo.png\" alt=\"logo Construction courses in UK\" class=\"img-responsive\">
\t\t\t\t<h3>Providing solutions for construction recruiters and job seekers</h3>
                
                <div class=\"service-section col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t     <div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t        <img src=\"../images/services/service-icon-1.png\"?>
\t\t\t\t\t\t<h2>Are you an Employer looking for staff?</h2>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t        <img src=\"../images/services/service-icon-2.png\"?>
\t\t\t\t\t\t<h2>Are you a Candidate looking for work?</h2>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t        <img src=\"../images/services/service-icon-3.png\"?>
\t\t\t\t\t\t<h2>Are you looking for Training Courses?</h2>
\t\t\t\t    </div>
\t\t\t\t</div>
                 
                 <div id=\"what_we_do_blocks\">
                      <!--<h2>GetWork.Construction provides the following solutions </h2>-->
                <div class=\"wwd_block a1\">
                    <h3> Post Free Jobs</h3>
  
                    <img src=\"../images/trades/ad.png\" alt=\"Post Free Jobs\">
  
                </div>
                <div class=\"wwd_block a2\">
                    <h3> Advertise Free Courses</h3>
  
                    <img src=\"../images/trades/ac.png\" alt=\"Advertise post Free Courses\">
  
                </div>
                <div class=\"wwd_block a3\">
                    <h3> Find Jobs and <br>UpSkills</br></h3>
  
                    <img src=\"../images/trades/fj.png\" alt=\"Find london Jobs\">
  
                </div>
                <div class=\"wwd_block a4\">
                    <h3> Apply Now</h3>
  
                                        <a href=\"/register\" class=\"btn btn-info\">Click Here</a>
  
                </div>


            </div>
        </div>
    </div>
</section>

";
        // line 330
        echo "                                            ";
        // line 371
        echo "<section class=\"category-section-3 light-blue nopadding trades\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 trds\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1>Choose from 1,000's of available construction jobs and begin your new career right now!</h1>
\t\t\t\t\t\t
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"trade t1\" data-id=\"6\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/railway.png\"/></a>
                        <h2> Railway Construction Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t2\" data-id=\"3\">
                    
                    <div class=\"category-section-3-box-inner\">
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/bridge.png\"/></a>
                        <h2> Bridges/Roads & Highway Construction Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t3\" data-id=\"7\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t     <a href=\"../home/jobs\"><img src=\"../images/courses/tunneling.png\"/></a>
                        <h2> Tunneling & underground Jobs </h2>
                    </div>
                </div>
                <div class=\"trade t4\" data-id=\"5\">
                    
                    <div class=\"category-section-3-box-inner\">
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/housing.png\"/></a>
                        <h2> Housing & Building Construction Jobs </h2>
                    </div>
                </div>
           </div>
               <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"trade t5\" data-id=\"4\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/commercial building.png\"/></a>
                        <h2>Commercial Building Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t6\" data-id=\"8\">
                    
                    <div class=\"category-section-3-box-inner\">
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/marine.png\"/></a>
                        <h2> Utilities,Marine & Nuclear Construction Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t7\" data-id=\"2\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/airoplane.png\"/></a>
                        <h2> Airport Construction Jobs </h2>
                    </div>
                </div>
\t\t\t\t<div class=\"trade t8\" data-id=\"2\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/other construction.png\"/></a>
                        <h2> Airport Construction Jobs </h2>
                    </div>
                </div>
\t\t\t\t   
                 </div>
            </div>
\t\t\t
        </div>
\t\t<div class=\"category-text-bottom col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t       <p>\"Find out what you like doing best and get someone to pay you for doing it.\"</p>
\t\t\t\t   </div>
\t\t
    </div>
\t
</section>
<section class=\"category-section-3 light-blue nopadding courses\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 511
        echo "        

<div class=\"col-md-12 col-sm-12 col-xs-12 nopadding courses-list\">
                <div class=\"col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1 class=\"courses-text col-lg-12 col-md-12 col-sm-12\">Courses</h1>
\t\t\t\t\t\t<p>Learn new skill sets and qualifications from the experts and become highly employable</p>
                    </div>
                </div>
\t\t<div class=\"col-lg-12 col-md-12 col-12\">
                 <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"1\">
                    <div class=\"category-section-3-box backg-courses cs\">
                        <div class=\"category-section-3-box-inner\"> 
                            
                        </div>
                      
                        
                    </div>
                   <h2> Construction Management courses </h2>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"2\">
                    <div class=\"category-section-3-box backg-courses2 cs\">
                        <div class=\"category-section-3-box-inner\">
                            
                        </div>
                        
                    </div><h2> Engineering Courses</h2>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"3\">
                    <div class=\"category-section-3-box backg-courses3 cs\">
                        <div class=\"category-section-3-box-inner\"> 
                            
                        </div>
                        
                    </div><h2> Plant Operator Courses </h2>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"4\">
                    <div class=\"category-section-3-box backg-courses4 cs\">
                        <div class=\"category-section-3-box-inner\">
                            
                        </div>
                       
                    </div><h2>HSEQ Courses </h2>
                </div>
                 <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"5\">
                    <div class=\"category-section-3-box backg-courses5 cs\">
                        <div class=\"category-section-3-box-inner\">
                           
                        </div>
                       
                    </div> <h2>Construction Tradesman Courses </h2>
                </div>
                 <div class=\"col-md-4 col-md-4 col-sm-12 course\" data-id=\"6\">
                    <div class=\"category-section-3-box backg-courses6 cs\">
                        <div class=\"category-section-3-box-inner\">
                           
                        </div>
                       
                    </div> <h2>Other Construction Courses</h2>
                </div>
\t\t</div>
            </div>


</div>
    </div>
    </div>
</section>


<section class=\"our-clients\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"Featured-clients col-lg-12 col-md-12 col-sm-12\">
                <div class=\"Featured-recruiters-client col-lg-8 col-md-8 col-sm-8\">
\t\t\t\t    <h2>Featured-recruiters</h2>
      
\t\t\t\t\t<div class=\"our-clients-list\">
                        <a href=\"#\"><img src=\"../images/trades/clients/1.png\" class=\"img-responsive\"/></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/3.png\" class=\"img-responsive\"  /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/4-1.png\" class=\"img-responsive\"/></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/8.png\" class=\"img-responsive\"/></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/9.png\" class=\"img-responsive\" /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/11.png\" class=\"img-responsive\" /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/ipb.png\" class=\"img-responsive\" /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/7.png\" class=\"img-responsive\"/></a> 
                    </div>
\t\t\t\t\t
                </div>
\t\t\t\t
\t\t\t\t<div class=\"Featured-recruiters-2 col-lg-4 col-md-4 col-sm-4\">
                    
\t\t\t\t\t<div class=\"job-alert-section\"><img src=\"../images/job-icon-white.png\"/>
\t\t\t\t\t<div class=\"job-alert\">
\t\t\t\t\t    <a href=\"../home/jobs\"><h2>Post a job</h2></a>
\t\t\t\t\t\t<p>Post your job free today to hire quality talent.</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"job-alert-section\"><img src=\"../images/find-job-icon.png\"/>
\t\t\t\t\t<div class=\"job-alert\">
\t\t\t\t\t   <a href=\"../login\"><h2>Find desired jobs</h2></a>
\t\t\t\t\t\t<p>Search and apply to your desired construction jobs free.</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>


                </div>
            </div>
        </div>
    </div>
</section>


<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Equery About Course</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"courseid\" type=\"hidden\" name=\"courseid\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.profile.queryCourse()\" class=\"btn btn-default btn-block\">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 655
    public function block_footer($context, array $blocks = array())
    {
        // line 656
        echo "    ";
        $this->loadTemplate("home.twig", "home.twig", 656, "1081177850")->display($context);
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 656,  509 => 655,  362 => 511,  276 => 371,  274 => 330,  56 => 16,  53 => 15,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"index.twig\" %}
{% block metatags %}
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Find latest Construction Jobs or Railway Jobs in UK online on Getwork.construction. View and Apply now for best desired Construction job free.\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Getwork - Construction Jobs in UK | Railway jobs in UK</title>
{% endblock %}

{% block content %}
<section class=\"main-section parallex\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 col-sm-12 col-md-offset-1 col-xs-12 nopadding\">
                <div class=\"search-form-contaner\">
                    <h1 class=\"search-main-title\">A site solely dedicated to <br><span>The Construction Industry</span></br></h1>
                    <form action=\"/home/jobs\" method=\"post\" class=\"form-inline\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">                                
                                <input autocomplete=\"off\" type=\"text\" onkeyup=\"window.common.getJobTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Job title or skills\" value=\"\">
                                <i class=\"icon-magnifying-glass\"></i>
                            </div>    
                            <span class=\"search-eg\">e.g. foreman, crane supervisor, electrician</span>                       
                            <div id=\"keywords\">
                                <ul class=\"drop-down-multilevel effect-fade nopadding\"></ul>
                            </div>
                        </div>
                        <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group cstm-search\">
                                 <input id=\"autocomplete\" onFocus=\"window.common.geolocate()\" type=\"text\" class=\"form-control\" name=\"location\" placeholder=\"town,city or post code\" value=\"\">
                                <i class=\"icon-map-pin\"></i><i onclick=\"window.common.getUserLocation(this)\" class=\"fa fa-crosshairs\"></i>
                            </div>
                            <span class=\"search-eg\">e.g. london, birmingham, leicester</span>
                        </div>
                        <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                            <div class=\"form-group form-action\">
                                <input type=\"submit\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- block section after search leftside-->
<section class=\"featured-blocks fullblock\">
<div class=\"row\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"container\">
    <div class=\"col-md-6 col-sm-6 col-xs-12 searchcourse\">
   <div class=\"Heading-title black cstm-featured-head fjobs-box\">
                        <h1>Featured Jobs</h1>
                        
                    </div>
                
                <div class=\"col-md-12 col-sm-12 col-xs-12 course-box\">
                <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                   <div class=\"jobhead\">
                                <h3><a href=\"\"> Graphic Designer </a></h3>
                            </div>
                            </div>
                    

                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"col-md-6 col-sm-6\">
                            <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box courseimg\"><img src=\"../images/trades/companies/5.png\" class=\"img-responsive center-block\" alt=\"Construction jobs in London\"></div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6\">
                        <div class=\"coursedtail\">
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                        </div>

                        
                         <div class=\"col-md-6 col-sm-6\">

                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 1 days ago</a> <a href=\"\" class=\"mata-detail part\">Part Time</a> </div>
                     </div>
                 </div>
                 <div class=\"row\">
                    
                     <div class=\"col-md-12 col-sm-12 col-xs-12\">

                            <div class=\"feature-post-meta-bottom courseprice\"> <span>\$500<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>

                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn courseviewbtn\">
                        <button class=\"btn-default cstm-btn-bg-black\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>


            <div class=\"col-md-6 col-sm-6 searchcourse\">
   <div class=\"Heading-title black cstm-featured-head fjobs-box\">
                        <h1>Featured Courses</h1>
                        
                    </div>
                
                <div class=\"col-md-12 col-sm-12 col-xs-12 course-box\">
                <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                   <div class=\"jobhead\">
                                <h3><a href=\"\"> Graphic Designer </a></h3>
                            </div>
                            </div>
                    

                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"col-md-6 col-sm-6\">
                            <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box courseimg\"><img src=\"../images/trades/companies/5.png\" class=\"img-responsive center-block\" alt=\"Construction jobs in UK\"></div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6\">
                        <div class=\"coursedtail\">
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                        </div>

                        
                         <div class=\"col-md-6 col-sm-6\">

                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 1 days ago</a> <a href=\"\" class=\"mata-detail part\">Part Time</a> </div>
                     </div>
                 </div>
                 <div class=\"row\">
                    
                     <div class=\"col-md-12 col-sm-12 col-xs-12\">

                            <div class=\"feature-post-meta-bottom courseprice\"> <span>\$500<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>

                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn courseviewbtn\">
                        <button class=\"btn-default cstm-btn-bg-black\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>
        </div>
            </div>







            

                

<!-- block section after search rightside-->
  </section>

<section class=\"whatwedo\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"service-logo col-md-12 col-sm-12 col-xs-12\">
                
\t\t\t\t<img src=\"../../images/getworklogo.png\" alt=\"logo Construction courses in UK\" class=\"img-responsive\">
\t\t\t\t<h3>Providing solutions for construction recruiters and job seekers</h3>
                
                <div class=\"service-section col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t     <div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t        <img src=\"../images/services/service-icon-1.png\"?>
\t\t\t\t\t\t<h2>Are you an Employer looking for staff?</h2>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t        <img src=\"../images/services/service-icon-2.png\"?>
\t\t\t\t\t\t<h2>Are you a Candidate looking for work?</h2>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t        <img src=\"../images/services/service-icon-3.png\"?>
\t\t\t\t\t\t<h2>Are you looking for Training Courses?</h2>
\t\t\t\t    </div>
\t\t\t\t</div>
                 
                 <div id=\"what_we_do_blocks\">
                      <!--<h2>GetWork.Construction provides the following solutions </h2>-->
                <div class=\"wwd_block a1\">
                    <h3> Post Free Jobs</h3>
  
                    <img src=\"../images/trades/ad.png\" alt=\"Post Free Jobs\">
  
                </div>
                <div class=\"wwd_block a2\">
                    <h3> Advertise Free Courses</h3>
  
                    <img src=\"../images/trades/ac.png\" alt=\"Advertise post Free Courses\">
  
                </div>
                <div class=\"wwd_block a3\">
                    <h3> Find Jobs and <br>UpSkills</br></h3>
  
                    <img src=\"../images/trades/fj.png\" alt=\"Find london Jobs\">
  
                </div>
                <div class=\"wwd_block a4\">
                    <h3> Apply Now</h3>
  
                                        <a href=\"/register\" class=\"btn btn-info\">Click Here</a>
  
                </div>


            </div>
        </div>
    </div>
</section>

{# <section class=\"cat-tabs cat-tab-index-2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\"> 
                            <!-- Tabs -->
                            <ul class=\"nav panel-tabs\">
                                <li class=\"active\"> <a href=\"#tab1\" data-toggle=\"tab\"><i class=\"icofont icon-ribbon\"></i><span class=\"hidden-xs hidden-sm\">Recent Jobs</span></a> </li>
                                <li> <a href=\"#tab2\" data-toggle=\"tab\"><i class=\"icofont icon-layers\"></i><span class=\"hidden-xs hidden-sm\">Recent Courses</span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active animated fadeInLeft\" id=\"tab1\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                                    {% for job in jobs %}
                                        <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                            <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                                <div class=\"job-title-box\">
                                                    <a href=\"/home/jobdetails/{{ job.id }}\">
                                                        <div class=\"job-title\">{{ job.title }}</div>
                                                    </a>
                                                    <a href=\"#\"><span class=\"job-type comp-name\">{{ job.company_name }}</span></a>
                                                </div>
                                            </div>
                                            <div class=\"col-md-3 col-sm-3 col-xs-12 jobimg\">
                                                <div class=\"joblistlogo\"><img src=\"/uploads/{{ job.logo|default('logo.jpg') }}\" alt=\"logo railway jobs\"></div>
                                            </div> 
                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <div class=\"row pclr\">
                                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                        <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> {{ job.location }}</p>
                                                    </div>
                                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ job.salary|e ~\"/\"~ job.salary_type }}</p>
                                                    </div>
                                                </div>
                                                <div class=\"row  pclr\">
                                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{job.job_type }}</p>
                                                    </div>
                                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                        <p><i class=\"fa fa-user\"></i> {{ job.applications|e }} applications</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12  pclr\">
                                                <p>{{ job.description|raw|slice(0,150) }}...<a href=\"/home/jobdetails/{{ job.id }}\">Read More</a></p>
                                                <div class=\"expire-job-box\">
                                                    <span class=\"expire-date\"> This job will Expire on <strong>{{ job.last_date|date(\"d M, Y\") }}</strong></span>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"tab-pane animated fadeInRight\" id=\"tab2\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                                    {% for course in courses %}
                                        <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                            <div class=\"job-title-box\">
                                                <a href=\"/home/courseinfo/{{ course.id }}\">
                                                    <div class=\"job-title\">{{ course.title }}</div>
                                                </a>
                                                <a href=\"/home/companyinfo/{{ course.emp_id_fk }}\"><span class=\"job-type comp-name\">{{ course.company_name }}</span></a>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                                    <p><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i> {{ course.course_type }}</p>
                                                </div>
                                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                                    <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ course.price|e ~\"/\"~ course.price_type }}</p>
                                                </div>
                                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                                    <a href=\"/home/companyinfo/{{ course.emp_id_fk }}\"><div class=\"joblistlogo\"><img src=\"/uploads/{{ course.logo|default('logo.jpg') }}\" alt=\"logo construction\"></div></a>
                                                </div>  
                                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                                    <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{course.duration }}</p>
                                                </div>
                                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                                    <a href=\"\"><p><i class=\"fa fa-tags\"></i> {{ course.course_category|e }}</p></a>
                                                </div>
                                            </div>
                                            <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                                <p>{{ course.description|raw|slice(0,150) }}...</p>
                                                <p>
                                                    <a href=\"/home/courseinfo/{{ course.id }}\"><i class=\"fa fa-eye\"></i> Read More</a> 
                                                    {% if userType and userType == 2 %}
                                                        <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val({{ course.id }})\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-envelope\"></i>  Enquire Now</a>
                                                    {% endif %}
                                                </p>
                                                {# <div class=\"expire-job-box\">
                                                    <span class=\"expire-date\"> This job will Expire on <strong>{{ job.last_date|date(\"d M, Y\") }}</strong></span>
                                                </div> #}
                                            {# </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head fjobs-box\">
                        <h1>How It Works</h1>
                        
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 addimg1\">
               <img src=\"../images/12.png\">    
               </div>
                    
                    
                 <div class=\"col-md-12 col-sm-12 col-xs-12 addimg2\">
               
                <img src=\"../images/job.jpg\">


                    
                   
                </div>
                    



</div>

</div>
 </div>
  </div>
    
</section> #}
<section class=\"category-section-3 light-blue nopadding trades\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 trds\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1>Choose from 1,000's of available construction jobs and begin your new career right now!</h1>
\t\t\t\t\t\t
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"trade t1\" data-id=\"6\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/railway.png\"/></a>
                        <h2> Railway Construction Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t2\" data-id=\"3\">
                    
                    <div class=\"category-section-3-box-inner\">
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/bridge.png\"/></a>
                        <h2> Bridges/Roads & Highway Construction Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t3\" data-id=\"7\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t     <a href=\"../home/jobs\"><img src=\"../images/courses/tunneling.png\"/></a>
                        <h2> Tunneling & underground Jobs </h2>
                    </div>
                </div>
                <div class=\"trade t4\" data-id=\"5\">
                    
                    <div class=\"category-section-3-box-inner\">
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/housing.png\"/></a>
                        <h2> Housing & Building Construction Jobs </h2>
                    </div>
                </div>
           </div>
               <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"trade t5\" data-id=\"4\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/commercial building.png\"/></a>
                        <h2>Commercial Building Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t6\" data-id=\"8\">
                    
                    <div class=\"category-section-3-box-inner\">
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/marine.png\"/></a>
                        <h2> Utilities,Marine & Nuclear Construction Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t7\" data-id=\"2\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/airoplane.png\"/></a>
                        <h2> Airport Construction Jobs </h2>
                    </div>
                </div>
\t\t\t\t<div class=\"trade t8\" data-id=\"2\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/other construction.png\"/></a>
                        <h2> Airport Construction Jobs </h2>
                    </div>
                </div>
\t\t\t\t   
                 </div>
            </div>
\t\t\t
        </div>
\t\t<div class=\"category-text-bottom col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t       <p>\"Find out what you like doing best and get someone to pay you for doing it.\"</p>
\t\t\t\t   </div>
\t\t
    </div>
\t
</section>
<section class=\"category-section-3 light-blue nopadding courses\">
    <div class=\"container\">
        <div class=\"row\">
            {# <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1 class=\"courses-text col-lg-12 col-md-12 col-sm-12\">Courses</h1>
\t\t\t\t\t\t
                    </div>
                </div>
                 <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg-courses cs\">
                        <div class=\"category-section-3-box-inner\"> 
                            <h2> Construction Management courses </h2>
                        </div>
                        
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg-courses2 cs\">
                        <div class=\"category-section-3-box-inner\">
                            <h2> Engineering Courses</h2>
                        </div>
                        
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg-courses3 cs\">
                        <div class=\"category-section-3-box-inner\"> 
                            <h2> Plant Operator Courses </h2>
                        </div>
                        
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg-courses4 cs\">
                        <div class=\"category-section-3-box-inner\">
                            <h2>HSEQ Courses </h2>
                        </div>
                       
                    </div>
                </div>
                 <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg2 cs\">
                        <div class=\"category-section-3-box-inner\">
                            <h2>Construction Tradesman Courses </h2>
                        </div>
                       
                    </div>
                </div>
                 <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg2 cs\">
                        <div class=\"category-section-3-box-inner\">
                            <h2>Other Construction Courses</h2>
                        </div>
                       
                    </div>
                </div>
            </div>
 #}        

<div class=\"col-md-12 col-sm-12 col-xs-12 nopadding courses-list\">
                <div class=\"col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1 class=\"courses-text col-lg-12 col-md-12 col-sm-12\">Courses</h1>
\t\t\t\t\t\t<p>Learn new skill sets and qualifications from the experts and become highly employable</p>
                    </div>
                </div>
\t\t<div class=\"col-lg-12 col-md-12 col-12\">
                 <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"1\">
                    <div class=\"category-section-3-box backg-courses cs\">
                        <div class=\"category-section-3-box-inner\"> 
                            
                        </div>
                      
                        
                    </div>
                   <h2> Construction Management courses </h2>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"2\">
                    <div class=\"category-section-3-box backg-courses2 cs\">
                        <div class=\"category-section-3-box-inner\">
                            
                        </div>
                        
                    </div><h2> Engineering Courses</h2>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"3\">
                    <div class=\"category-section-3-box backg-courses3 cs\">
                        <div class=\"category-section-3-box-inner\"> 
                            
                        </div>
                        
                    </div><h2> Plant Operator Courses </h2>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"4\">
                    <div class=\"category-section-3-box backg-courses4 cs\">
                        <div class=\"category-section-3-box-inner\">
                            
                        </div>
                       
                    </div><h2>HSEQ Courses </h2>
                </div>
                 <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"5\">
                    <div class=\"category-section-3-box backg-courses5 cs\">
                        <div class=\"category-section-3-box-inner\">
                           
                        </div>
                       
                    </div> <h2>Construction Tradesman Courses </h2>
                </div>
                 <div class=\"col-md-4 col-md-4 col-sm-12 course\" data-id=\"6\">
                    <div class=\"category-section-3-box backg-courses6 cs\">
                        <div class=\"category-section-3-box-inner\">
                           
                        </div>
                       
                    </div> <h2>Other Construction Courses</h2>
                </div>
\t\t</div>
            </div>


</div>
    </div>
    </div>
</section>


<section class=\"our-clients\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"Featured-clients col-lg-12 col-md-12 col-sm-12\">
                <div class=\"Featured-recruiters-client col-lg-8 col-md-8 col-sm-8\">
\t\t\t\t    <h2>Featured-recruiters</h2>
      
\t\t\t\t\t<div class=\"our-clients-list\">
                        <a href=\"#\"><img src=\"../images/trades/clients/1.png\" class=\"img-responsive\"/></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/3.png\" class=\"img-responsive\"  /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/4-1.png\" class=\"img-responsive\"/></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/8.png\" class=\"img-responsive\"/></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/9.png\" class=\"img-responsive\" /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/11.png\" class=\"img-responsive\" /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/ipb.png\" class=\"img-responsive\" /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/7.png\" class=\"img-responsive\"/></a> 
                    </div>
\t\t\t\t\t
                </div>
\t\t\t\t
\t\t\t\t<div class=\"Featured-recruiters-2 col-lg-4 col-md-4 col-sm-4\">
                    
\t\t\t\t\t<div class=\"job-alert-section\"><img src=\"../images/job-icon-white.png\"/>
\t\t\t\t\t<div class=\"job-alert\">
\t\t\t\t\t    <a href=\"../home/jobs\"><h2>Post a job</h2></a>
\t\t\t\t\t\t<p>Post your job free today to hire quality talent.</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"job-alert-section\"><img src=\"../images/find-job-icon.png\"/>
\t\t\t\t\t<div class=\"job-alert\">
\t\t\t\t\t   <a href=\"../login\"><h2>Find desired jobs</h2></a>
\t\t\t\t\t\t<p>Search and apply to your desired construction jobs free.</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>


                </div>
            </div>
        </div>
    </div>
</section>


<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Equery About Course</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"courseid\" type=\"hidden\" name=\"courseid\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.profile.queryCourse()\" class=\"btn btn-default btn-block\">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock content %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script>
                jQuery(\".trades .trade\").on(\"click\",function(ele){
                    window.common.jumpJobSearch(jQuery(this).attr(\"data-id\"));
                });

                jQuery(\".courses-list .course\").on(\"click\",function(ele){
                    window.common.jumpCourseSearch(jQuery(this).attr(\"data-id\"));
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "home.twig", "/home/getwork/public_html/application/views/home.twig");
    }
}


/* home.twig */
class __TwigTemplate_8a01ff0ed55415da977aa8b4ae53325fb45d1eea01f0752ce6228e9c19d4c2cd_1081177850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "home.twig", 656);
        $this->blocks = array(
            'customScripts' => array($this, 'block_customScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "footer.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 657
    public function block_customScripts($context, array $blocks = array())
    {
        // line 658
        echo "            <script>
                jQuery(\".trades .trade\").on(\"click\",function(ele){
                    window.common.jumpJobSearch(jQuery(this).attr(\"data-id\"));
                });

                jQuery(\".courses-list .course\").on(\"click\",function(ele){
                    window.common.jumpCourseSearch(jQuery(this).attr(\"data-id\"));
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1241 => 658,  1238 => 657,  512 => 656,  509 => 655,  362 => 511,  276 => 371,  274 => 330,  56 => 16,  53 => 15,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"index.twig\" %}
{% block metatags %}
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Find latest Construction Jobs or Railway Jobs in UK online on Getwork.construction. View and Apply now for best desired Construction job free.\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Getwork - Construction Jobs in UK | Railway jobs in UK</title>
{% endblock %}

{% block content %}
<section class=\"main-section parallex\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 col-sm-12 col-md-offset-1 col-xs-12 nopadding\">
                <div class=\"search-form-contaner\">
                    <h1 class=\"search-main-title\">A site solely dedicated to <br><span>The Construction Industry</span></br></h1>
                    <form action=\"/home/jobs\" method=\"post\" class=\"form-inline\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">                                
                                <input autocomplete=\"off\" type=\"text\" onkeyup=\"window.common.getJobTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Job title or skills\" value=\"\">
                                <i class=\"icon-magnifying-glass\"></i>
                            </div>    
                            <span class=\"search-eg\">e.g. foreman, crane supervisor, electrician</span>                       
                            <div id=\"keywords\">
                                <ul class=\"drop-down-multilevel effect-fade nopadding\"></ul>
                            </div>
                        </div>
                        <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group cstm-search\">
                                 <input id=\"autocomplete\" onFocus=\"window.common.geolocate()\" type=\"text\" class=\"form-control\" name=\"location\" placeholder=\"town,city or post code\" value=\"\">
                                <i class=\"icon-map-pin\"></i><i onclick=\"window.common.getUserLocation(this)\" class=\"fa fa-crosshairs\"></i>
                            </div>
                            <span class=\"search-eg\">e.g. london, birmingham, leicester</span>
                        </div>
                        <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                            <div class=\"form-group form-action\">
                                <input type=\"submit\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- block section after search leftside-->
<section class=\"featured-blocks fullblock\">
<div class=\"row\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"container\">
    <div class=\"col-md-6 col-sm-6 col-xs-12 searchcourse\">
   <div class=\"Heading-title black cstm-featured-head fjobs-box\">
                        <h1>Featured Jobs</h1>
                        
                    </div>
                
                <div class=\"col-md-12 col-sm-12 col-xs-12 course-box\">
                <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                   <div class=\"jobhead\">
                                <h3><a href=\"\"> Graphic Designer </a></h3>
                            </div>
                            </div>
                    

                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"col-md-6 col-sm-6\">
                            <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box courseimg\"><img src=\"../images/trades/companies/5.png\" class=\"img-responsive center-block\" alt=\"Construction jobs in London\"></div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6\">
                        <div class=\"coursedtail\">
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                        </div>

                        
                         <div class=\"col-md-6 col-sm-6\">

                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 1 days ago</a> <a href=\"\" class=\"mata-detail part\">Part Time</a> </div>
                     </div>
                 </div>
                 <div class=\"row\">
                    
                     <div class=\"col-md-12 col-sm-12 col-xs-12\">

                            <div class=\"feature-post-meta-bottom courseprice\"> <span>\$500<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>

                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn courseviewbtn\">
                        <button class=\"btn-default cstm-btn-bg-black\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>


            <div class=\"col-md-6 col-sm-6 searchcourse\">
   <div class=\"Heading-title black cstm-featured-head fjobs-box\">
                        <h1>Featured Courses</h1>
                        
                    </div>
                
                <div class=\"col-md-12 col-sm-12 col-xs-12 course-box\">
                <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                   <div class=\"jobhead\">
                                <h3><a href=\"\"> Graphic Designer </a></h3>
                            </div>
                            </div>
                    

                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"col-md-6 col-sm-6\">
                            <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box courseimg\"><img src=\"../images/trades/companies/5.png\" class=\"img-responsive center-block\" alt=\"Construction jobs in UK\"></div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6\">
                        <div class=\"coursedtail\">
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                        </div>

                        
                         <div class=\"col-md-6 col-sm-6\">

                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 1 days ago</a> <a href=\"\" class=\"mata-detail part\">Part Time</a> </div>
                     </div>
                 </div>
                 <div class=\"row\">
                    
                     <div class=\"col-md-12 col-sm-12 col-xs-12\">

                            <div class=\"feature-post-meta-bottom courseprice\"> <span>\$500<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>

                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn courseviewbtn\">
                        <button class=\"btn-default cstm-btn-bg-black\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>
        </div>
            </div>







            

                

<!-- block section after search rightside-->
  </section>

<section class=\"whatwedo\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"service-logo col-md-12 col-sm-12 col-xs-12\">
                
\t\t\t\t<img src=\"../../images/getworklogo.png\" alt=\"logo Construction courses in UK\" class=\"img-responsive\">
\t\t\t\t<h3>Providing solutions for construction recruiters and job seekers</h3>
                
                <div class=\"service-section col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t     <div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t        <img src=\"../images/services/service-icon-1.png\"?>
\t\t\t\t\t\t<h2>Are you an Employer looking for staff?</h2>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t        <img src=\"../images/services/service-icon-2.png\"?>
\t\t\t\t\t\t<h2>Are you a Candidate looking for work?</h2>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t        <img src=\"../images/services/service-icon-3.png\"?>
\t\t\t\t\t\t<h2>Are you looking for Training Courses?</h2>
\t\t\t\t    </div>
\t\t\t\t</div>
                 
                 <div id=\"what_we_do_blocks\">
                      <!--<h2>GetWork.Construction provides the following solutions </h2>-->
                <div class=\"wwd_block a1\">
                    <h3> Post Free Jobs</h3>
  
                    <img src=\"../images/trades/ad.png\" alt=\"Post Free Jobs\">
  
                </div>
                <div class=\"wwd_block a2\">
                    <h3> Advertise Free Courses</h3>
  
                    <img src=\"../images/trades/ac.png\" alt=\"Advertise post Free Courses\">
  
                </div>
                <div class=\"wwd_block a3\">
                    <h3> Find Jobs and <br>UpSkills</br></h3>
  
                    <img src=\"../images/trades/fj.png\" alt=\"Find london Jobs\">
  
                </div>
                <div class=\"wwd_block a4\">
                    <h3> Apply Now</h3>
  
                                        <a href=\"/register\" class=\"btn btn-info\">Click Here</a>
  
                </div>


            </div>
        </div>
    </div>
</section>

{# <section class=\"cat-tabs cat-tab-index-2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\"> 
                            <!-- Tabs -->
                            <ul class=\"nav panel-tabs\">
                                <li class=\"active\"> <a href=\"#tab1\" data-toggle=\"tab\"><i class=\"icofont icon-ribbon\"></i><span class=\"hidden-xs hidden-sm\">Recent Jobs</span></a> </li>
                                <li> <a href=\"#tab2\" data-toggle=\"tab\"><i class=\"icofont icon-layers\"></i><span class=\"hidden-xs hidden-sm\">Recent Courses</span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active animated fadeInLeft\" id=\"tab1\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                                    {% for job in jobs %}
                                        <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                            <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                                <div class=\"job-title-box\">
                                                    <a href=\"/home/jobdetails/{{ job.id }}\">
                                                        <div class=\"job-title\">{{ job.title }}</div>
                                                    </a>
                                                    <a href=\"#\"><span class=\"job-type comp-name\">{{ job.company_name }}</span></a>
                                                </div>
                                            </div>
                                            <div class=\"col-md-3 col-sm-3 col-xs-12 jobimg\">
                                                <div class=\"joblistlogo\"><img src=\"/uploads/{{ job.logo|default('logo.jpg') }}\" alt=\"logo railway jobs\"></div>
                                            </div> 
                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <div class=\"row pclr\">
                                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                        <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> {{ job.location }}</p>
                                                    </div>
                                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ job.salary|e ~\"/\"~ job.salary_type }}</p>
                                                    </div>
                                                </div>
                                                <div class=\"row  pclr\">
                                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{job.job_type }}</p>
                                                    </div>
                                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                        <p><i class=\"fa fa-user\"></i> {{ job.applications|e }} applications</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12  pclr\">
                                                <p>{{ job.description|raw|slice(0,150) }}...<a href=\"/home/jobdetails/{{ job.id }}\">Read More</a></p>
                                                <div class=\"expire-job-box\">
                                                    <span class=\"expire-date\"> This job will Expire on <strong>{{ job.last_date|date(\"d M, Y\") }}</strong></span>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"tab-pane animated fadeInRight\" id=\"tab2\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                                    {% for course in courses %}
                                        <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                            <div class=\"job-title-box\">
                                                <a href=\"/home/courseinfo/{{ course.id }}\">
                                                    <div class=\"job-title\">{{ course.title }}</div>
                                                </a>
                                                <a href=\"/home/companyinfo/{{ course.emp_id_fk }}\"><span class=\"job-type comp-name\">{{ course.company_name }}</span></a>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                                    <p><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i> {{ course.course_type }}</p>
                                                </div>
                                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                                    <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ course.price|e ~\"/\"~ course.price_type }}</p>
                                                </div>
                                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                                    <a href=\"/home/companyinfo/{{ course.emp_id_fk }}\"><div class=\"joblistlogo\"><img src=\"/uploads/{{ course.logo|default('logo.jpg') }}\" alt=\"logo construction\"></div></a>
                                                </div>  
                                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                                    <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{course.duration }}</p>
                                                </div>
                                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                                    <a href=\"\"><p><i class=\"fa fa-tags\"></i> {{ course.course_category|e }}</p></a>
                                                </div>
                                            </div>
                                            <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                                <p>{{ course.description|raw|slice(0,150) }}...</p>
                                                <p>
                                                    <a href=\"/home/courseinfo/{{ course.id }}\"><i class=\"fa fa-eye\"></i> Read More</a> 
                                                    {% if userType and userType == 2 %}
                                                        <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val({{ course.id }})\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-envelope\"></i>  Enquire Now</a>
                                                    {% endif %}
                                                </p>
                                                {# <div class=\"expire-job-box\">
                                                    <span class=\"expire-date\"> This job will Expire on <strong>{{ job.last_date|date(\"d M, Y\") }}</strong></span>
                                                </div> #}
                                            {# </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head fjobs-box\">
                        <h1>How It Works</h1>
                        
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 addimg1\">
               <img src=\"../images/12.png\">    
               </div>
                    
                    
                 <div class=\"col-md-12 col-sm-12 col-xs-12 addimg2\">
               
                <img src=\"../images/job.jpg\">


                    
                   
                </div>
                    



</div>

</div>
 </div>
  </div>
    
</section> #}
<section class=\"category-section-3 light-blue nopadding trades\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 trds\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1>Choose from 1,000's of available construction jobs and begin your new career right now!</h1>
\t\t\t\t\t\t
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"trade t1\" data-id=\"6\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/railway.png\"/></a>
                        <h2> Railway Construction Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t2\" data-id=\"3\">
                    
                    <div class=\"category-section-3-box-inner\">
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/bridge.png\"/></a>
                        <h2> Bridges/Roads & Highway Construction Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t3\" data-id=\"7\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t     <a href=\"../home/jobs\"><img src=\"../images/courses/tunneling.png\"/></a>
                        <h2> Tunneling & underground Jobs </h2>
                    </div>
                </div>
                <div class=\"trade t4\" data-id=\"5\">
                    
                    <div class=\"category-section-3-box-inner\">
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/housing.png\"/></a>
                        <h2> Housing & Building Construction Jobs </h2>
                    </div>
                </div>
           </div>
               <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"trade t5\" data-id=\"4\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/commercial building.png\"/></a>
                        <h2>Commercial Building Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t6\" data-id=\"8\">
                    
                    <div class=\"category-section-3-box-inner\">
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/marine.png\"/></a>
                        <h2> Utilities,Marine & Nuclear Construction Jobs</h2>
                    </div>
                </div>
                <div class=\"trade t7\" data-id=\"2\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/airoplane.png\"/></a>
                        <h2> Airport Construction Jobs </h2>
                    </div>
                </div>
\t\t\t\t<div class=\"trade t8\" data-id=\"2\">
                   
                    <div class=\"category-section-3-box-inner\"> 
\t\t\t\t\t    <a href=\"../home/jobs\"><img src=\"../images/courses/other construction.png\"/></a>
                        <h2> Airport Construction Jobs </h2>
                    </div>
                </div>
\t\t\t\t   
                 </div>
            </div>
\t\t\t
        </div>
\t\t<div class=\"category-text-bottom col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t       <p>\"Find out what you like doing best and get someone to pay you for doing it.\"</p>
\t\t\t\t   </div>
\t\t
    </div>
\t
</section>
<section class=\"category-section-3 light-blue nopadding courses\">
    <div class=\"container\">
        <div class=\"row\">
            {# <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1 class=\"courses-text col-lg-12 col-md-12 col-sm-12\">Courses</h1>
\t\t\t\t\t\t
                    </div>
                </div>
                 <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg-courses cs\">
                        <div class=\"category-section-3-box-inner\"> 
                            <h2> Construction Management courses </h2>
                        </div>
                        
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg-courses2 cs\">
                        <div class=\"category-section-3-box-inner\">
                            <h2> Engineering Courses</h2>
                        </div>
                        
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg-courses3 cs\">
                        <div class=\"category-section-3-box-inner\"> 
                            <h2> Plant Operator Courses </h2>
                        </div>
                        
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg-courses4 cs\">
                        <div class=\"category-section-3-box-inner\">
                            <h2>HSEQ Courses </h2>
                        </div>
                       
                    </div>
                </div>
                 <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg2 cs\">
                        <div class=\"category-section-3-box-inner\">
                            <h2>Construction Tradesman Courses </h2>
                        </div>
                       
                    </div>
                </div>
                 <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"category-section-3-box backg2 cs\">
                        <div class=\"category-section-3-box-inner\">
                            <h2>Other Construction Courses</h2>
                        </div>
                       
                    </div>
                </div>
            </div>
 #}        

<div class=\"col-md-12 col-sm-12 col-xs-12 nopadding courses-list\">
                <div class=\"col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1 class=\"courses-text col-lg-12 col-md-12 col-sm-12\">Courses</h1>
\t\t\t\t\t\t<p>Learn new skill sets and qualifications from the experts and become highly employable</p>
                    </div>
                </div>
\t\t<div class=\"col-lg-12 col-md-12 col-12\">
                 <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"1\">
                    <div class=\"category-section-3-box backg-courses cs\">
                        <div class=\"category-section-3-box-inner\"> 
                            
                        </div>
                      
                        
                    </div>
                   <h2> Construction Management courses </h2>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"2\">
                    <div class=\"category-section-3-box backg-courses2 cs\">
                        <div class=\"category-section-3-box-inner\">
                            
                        </div>
                        
                    </div><h2> Engineering Courses</h2>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"3\">
                    <div class=\"category-section-3-box backg-courses3 cs\">
                        <div class=\"category-section-3-box-inner\"> 
                            
                        </div>
                        
                    </div><h2> Plant Operator Courses </h2>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"4\">
                    <div class=\"category-section-3-box backg-courses4 cs\">
                        <div class=\"category-section-3-box-inner\">
                            
                        </div>
                       
                    </div><h2>HSEQ Courses </h2>
                </div>
                 <div class=\"col-lg-4 col-md-4 col-sm-4 course\" data-id=\"5\">
                    <div class=\"category-section-3-box backg-courses5 cs\">
                        <div class=\"category-section-3-box-inner\">
                           
                        </div>
                       
                    </div> <h2>Construction Tradesman Courses </h2>
                </div>
                 <div class=\"col-md-4 col-md-4 col-sm-12 course\" data-id=\"6\">
                    <div class=\"category-section-3-box backg-courses6 cs\">
                        <div class=\"category-section-3-box-inner\">
                           
                        </div>
                       
                    </div> <h2>Other Construction Courses</h2>
                </div>
\t\t</div>
            </div>


</div>
    </div>
    </div>
</section>


<section class=\"our-clients\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"Featured-clients col-lg-12 col-md-12 col-sm-12\">
                <div class=\"Featured-recruiters-client col-lg-8 col-md-8 col-sm-8\">
\t\t\t\t    <h2>Featured-recruiters</h2>
      
\t\t\t\t\t<div class=\"our-clients-list\">
                        <a href=\"#\"><img src=\"../images/trades/clients/1.png\" class=\"img-responsive\"/></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/3.png\" class=\"img-responsive\"  /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/4-1.png\" class=\"img-responsive\"/></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/8.png\" class=\"img-responsive\"/></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/9.png\" class=\"img-responsive\" /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/11.png\" class=\"img-responsive\" /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/ipb.png\" class=\"img-responsive\" /></a> 
                        <a href=\"#\"><img src=\"../images/trades/clients/7.png\" class=\"img-responsive\"/></a> 
                    </div>
\t\t\t\t\t
                </div>
\t\t\t\t
\t\t\t\t<div class=\"Featured-recruiters-2 col-lg-4 col-md-4 col-sm-4\">
                    
\t\t\t\t\t<div class=\"job-alert-section\"><img src=\"../images/job-icon-white.png\"/>
\t\t\t\t\t<div class=\"job-alert\">
\t\t\t\t\t    <a href=\"../home/jobs\"><h2>Post a job</h2></a>
\t\t\t\t\t\t<p>Post your job free today to hire quality talent.</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"job-alert-section\"><img src=\"../images/find-job-icon.png\"/>
\t\t\t\t\t<div class=\"job-alert\">
\t\t\t\t\t   <a href=\"../login\"><h2>Find desired jobs</h2></a>
\t\t\t\t\t\t<p>Search and apply to your desired construction jobs free.</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>


                </div>
            </div>
        </div>
    </div>
</section>


<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Equery About Course</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"courseid\" type=\"hidden\" name=\"courseid\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.profile.queryCourse()\" class=\"btn btn-default btn-block\">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock content %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script>
                jQuery(\".trades .trade\").on(\"click\",function(ele){
                    window.common.jumpJobSearch(jQuery(this).attr(\"data-id\"));
                });

                jQuery(\".courses-list .course\").on(\"click\",function(ele){
                    window.common.jumpCourseSearch(jQuery(this).attr(\"data-id\"));
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "home.twig", "/home/getwork/public_html/application/views/home.twig");
    }
}
