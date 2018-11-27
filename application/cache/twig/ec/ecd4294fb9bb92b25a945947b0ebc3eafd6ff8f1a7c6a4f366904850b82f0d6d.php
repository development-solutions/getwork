<?php

/* home.twig */
class __TwigTemplate_62d3e48421fdf9e1af289bcd0d10c4d364f11a8f597cd6c82ab98b2d1cc8891a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "home.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<section class=\"main-section parallex\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 col-sm-12 col-md-offset-1 col-xs-12 nopadding\">
                <div class=\"search-form-contaner\">
                    <h1 class=\"search-main-title\">A site solely dedicated to the construction trade</h1>
                    <form action=\"/home/jobs\" method=\"post\" class=\"form-inline\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">                                
                                <input type=\"text\" onkeyup=\"window.common.getJobTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"\">
                                <i class=\"icon-magnifying-glass\"></i>
                            </div>                            
                            <div id=\"keywords\">
                                <ul class=\"drop-down-multilevel effect-fade\"></ul>
                            </div>
                        </div>
                        <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                 <input id=\"autocomplete\" onFocus=\"window.common.geolocate()\" type=\"text\" class=\"form-control\" name=\"location\" placeholder=\"Search Location\" value=\"\">
                                <i class=\"icon-map-pin\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                            <div class=\"form-group form-action\">
                                <input type=\"submit\" name=\"search\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"featured-jobs nopadding\">
    <div class=\"\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-12 col-xs-12 cstm-featured-col-left\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1>Featured Jobs</h1>
                        
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box\"><img src=\"http://frescoserver.com/getwork/images/company/1.png\" class=\"img-responsive center-block\" alt=\"\"></div>
                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"\">
                                <h4><a href=\"\"> Graphic Designer </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 1 days ago</a> <a href=\"\" class=\"mata-detail part\">Part Time</a> </div>
                            <div class=\"feature-post-meta-bottom\"> <span>\$500<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box\"><img src=\"http://frescoserver.com/getwork/images/company/4.png\" class=\"img-responsive center-block\" alt=\"\"></div>
                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"\">
                                <h4><a href=\"\"> Software Engineer </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 5 days ago</a> <a href=\"\" class=\"mata-detail remote\">Remote</a> </div>
                            <div class=\"feature-post-meta-bottom\"> <span>\$900<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn\">
                        <button class=\"btn-default cstm-btn-bg-black\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-12 col-xs-12 cstm-featured-col-right\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title white cstm-featured-head\">
                        <h1>Featured Courses</h1>
                        
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box\"><img src=\"http://frescoserver.com/getwork/images/company/1.png\" class=\"img-responsive center-block\" alt=\"\"></div>
                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"\">
                                <h4><a href=\"\"> Graphic Designer </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 1 days ago</a> <a href=\"\" class=\"mata-detail part\">Part Time</a> </div>
                            <div class=\"feature-post-meta-bottom\"> <span>\$500<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box\"><img src=\"http://frescoserver.com/getwork/images/company/4.png\" class=\"img-responsive center-block\" alt=\"\"></div>
                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"\">
                                <h4><a href=\"\"> Software Engineer </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 5 days ago</a> <a href=\"\" class=\"mata-detail remote\">Remote</a> </div>
                            <div class=\"feature-post-meta-bottom\"> <span>\$900<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn\">
                        <button class=\"btn-default\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"cat-tabs cat-tab-index-2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                ";
        // line 129
        echo "                <div class=\"col-md-12 col-sm-12 col-xs-12\">
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
                                    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 144
            echo "                                        <div class=\"job-box\">
                                            <div class=\"col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm\">
                                                <div class=\"comp-logo\"> <img src=\"../../images/company/5.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </div>
                                            </div>
                                            <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                                <div class=\"job-title-box\"> <a href=\"#\">
                                                    <div class=\"job-title\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", array()), "html", null, true);
            echo "</div>
                                                    </a> <a href=\"#\"><span class=\"comp-name\">";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company_name", array()), "html", null, true);
            echo "</span></a> </div>
                                            </div>
                                            <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                                <div class=\"job-location\"> <i class=\"fa fa-location-arrow\"></i> ";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</div>
                                            </div>
                                            <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                                <div class=\"job-type jt-remote-color\"> <i class=\"fa fa-clock-o\"></i> ";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "job_type", array()), "html", null, true);
            echo " </div>
                                            </div>
                                            <div class=\"col-md-2 col-sm-2 col-xs-12\">
                                                <a href=\"/home/jobdetails/";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-custom\">Details</a>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                                </div>
                            </div>
                            <div class=\"tab-pane animated fadeInRight\" id=\"tab2\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                                    <div class=\"job-box\">
                                        <div class=\"col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm\">
                                            <div class=\"comp-logo\"> <img src=\"http://frescoserver.com/getwork/images/company/5.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </div>
                                        </div>
                                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                            <div class=\"job-title-box\"> <a href=\"#\">
                                                <div class=\"job-title\"> Technical Documentation Specialist</div>
                                                </a> <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. United States</span></a> </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-location\"> <i class=\"fa fa-location-arrow\"></i> New York </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-type jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> Full time </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-12\">
                                            <button class=\"btn btn-primary btn-custom\">Apply Now</button>
                                        </div>
                                    </div>
                                    <div class=\"job-box\">
                                        <div class=\"col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm\">
                                            <div class=\"comp-logo\"> <img src=\"http://frescoserver.com/getwork/images/company/1.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </div>
                                        </div>
                                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                            <div class=\"job-title-box\"> <a href=\"#\">
                                                <div class=\"job-title\"> Technical Network Director</div>
                                                </a> <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. Australia</span></a> </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-location\"> <i class=\"fa fa-location-arrow\"></i> Melbourne </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-type jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> Full time </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-12\">
                                            <button class=\"btn btn-primary btn-custom\">Apply Now</button>
                                        </div>
                                    </div>
                                    <div class=\"job-box\">
                                        <div class=\"col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm\">
                                            <div class=\"comp-logo\"> <img src=\"http://frescoserver.com/getwork/images/company/3.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </div>
                                        </div>
                                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                            <div class=\"job-title-box\"> <a href=\"#\">
                                                <div class=\"job-title\"> Looking for Bootstrap designer</div>
                                                </a> <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. Pakistan</span></a> </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-location\"> <i class=\"fa fa-location-arrow\"></i> Lahore </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-type jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> Full time </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-12\">
                                            <button class=\"btn btn-primary btn-custom\">Apply Now</button>
                                        </div>
                                    </div>
                                    <div class=\"job-box\">
                                        <div class=\"col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm\">
                                            <div class=\"comp-logo\"> <img src=\"http://frescoserver.com/getwork/images/company/4.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </div>
                                        </div>
                                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                            <div class=\"job-title-box\"> <a href=\"#\">
                                                <div class=\"job-title\"> Assistant Engineer (IT/Networks)</div>
                                                </a> <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. Malaysia</span></a> </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-location\"> <i class=\"fa fa-location-arrow\"></i> Singapore </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-type jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> Full time </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-12\">
                                            <button class=\"btn btn-primary btn-custom\">Apply Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"category-section-3 light-blue nopadding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1>Choose Your Trade</h1>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"category-section-3-box\">
                        <div class=\"category-section-3-box-inner\"> <i class=\"icon-browser\"></i>
                            <h4> Civil Construction </h4>
                        </div>
                        <div class=\"category-section-3-box-over-text animated fadeIn\">
                            <h4>Front End Development</h4>
                            <h4>back End Development</h4>
                            <h4>Core Programing</h4>
                            <p><a href=\"\"> See All </a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"category-section-3-box\">
                        <div class=\"category-section-3-box-inner\"> <i class=\"icon-briefcase\"></i>
                            <h4> Railway Construction</h4>
                        </div>
                        <div class=\"category-section-3-box-over-text animated fadeIn\">
                            <h4>FINANCIAL MODELERS</h4>
                            <h4>BOOKKEEPERS</h4>
                            <h4>TAX ACCOUNTANTS</h4>
                            <p><a href=\"\"> See All </a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"category-section-3-box\">
                        <div class=\"category-section-3-box-inner\"> <i class=\"icon-bargraph\"></i>
                            <h4> Graduate Construction </h4>
                        </div>
                        <div class=\"category-section-3-box-over-text animated fadeIn\">
                            <h4>SEO SPECIALISTS</h4>
                            <h4>MARKETING EXPERTS</h4>
                            <h4>EMAIL AUTOMATORS</h4>
                            <p><a href=\"\"> See All </a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"category-section-3-box\">
                        <div class=\"category-section-3-box-inner\"> <i class=\"icon-adjustments\"></i>
                            <h4> Other Construction </h4>
                        </div>
                        <div class=\"category-section-3-box-over-text animated fadeIn\">
                            <h4>WEB RESEARCHERS</h4>
                            <h4>TRANSCRIPTIONISTS</h4>
                            <h4>PERSONAL ASSISTANTS</h4>
                            <p><a href=\"\"> See All </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"blog-posts-section light-grey nopadding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1>Courses</h1>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"blog-post\">
                        <div class=\"post-img\"> <a href=\"#\"> <img src=\"http://frescoserver.com/getwork/images/blog/1.jpg\" alt=\"\" class=\"img-responsive\"> </a> </div>
                        <div class=\"post-info\"> <a href=\"\">Aug 30, 2016</a> <a href=\"#\">23 comments</a> </div>
                        <h3 class=\"post-title\"> <a href=\"#\"> Sketch Designing Artists are beauty: A report </a> </h3>
                        <p class=\"post-excerpt\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit 
                            atque repellat est molestiae perferendis. </p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"blog-post\">
                        <div class=\"post-img\"> <a href=\"#\"> <img src=\"http://frescoserver.com/getwork/images/blog/2.jpg\" alt=\"\" class=\"img-responsive\"> </a> </div>
                        <div class=\"post-info\"> <a href=\"#\">august 30, 2016</a> <a href=\"#\">90 comments</a> </div>
                        <h3 class=\"post-title\"> <a href=\"#\"> A suitable timings for a graphic designers </a> </h3>
                        <p class=\"post-excerpt\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit 
                            atque repellat est molestiae perferendis. </p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"blog-post\">
                        <div class=\"post-img\"> <a href=\"#\"> <img src=\"http://frescoserver.com/getwork/images/blog/3.jpg\" alt=\"\" class=\"img-responsive\"> </a> </div>
                        <div class=\"post-info\"> <a href=\"#\">august 02, 2016</a> <a href=\"#\">10 comments</a> </div>
                        <h3 class=\"post-title\"> <a href=\"#\"> How to get a job on same time same place </a> </h3>
                        <p class=\"post-excerpt\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit 
                            atque repellat est molestiae perferendis. </p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"blog-post\">
                        <div class=\"post-img\"> <a href=\"#\"> <img src=\"http://frescoserver.com/getwork/images/blog/1.jpg\" alt=\"\" class=\"img-responsive\"> </a> </div>
                        <div class=\"post-info\"> <a href=\"\">Aug 30, 2016</a> <a href=\"#\">23 comments</a> </div>
                        <h3 class=\"post-title\"> <a href=\"#\"> Sketch Designing Artists are beauty: A report </a> </h3>
                        <p class=\"post-excerpt\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit 
                            atque repellat est molestiae perferendis. </p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn\">
                        <button class=\"btn-default\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class=\"brand-logo-area clients-bg\">
    <div class=\"clients-list\">
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_1.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_2.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_3.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_4.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_1.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_2.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_3.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_4.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
    </div>
</div>

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
        return array (  215 => 164,  205 => 160,  199 => 157,  193 => 154,  187 => 151,  183 => 150,  175 => 144,  171 => 143,  155 => 129,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}

<section class=\"main-section parallex\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 col-sm-12 col-md-offset-1 col-xs-12 nopadding\">
                <div class=\"search-form-contaner\">
                    <h1 class=\"search-main-title\">A site solely dedicated to the construction trade</h1>
                    <form action=\"/home/jobs\" method=\"post\" class=\"form-inline\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">                                
                                <input type=\"text\" onkeyup=\"window.common.getJobTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"\">
                                <i class=\"icon-magnifying-glass\"></i>
                            </div>                            
                            <div id=\"keywords\">
                                <ul class=\"drop-down-multilevel effect-fade\"></ul>
                            </div>
                        </div>
                        <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                 <input id=\"autocomplete\" onFocus=\"window.common.geolocate()\" type=\"text\" class=\"form-control\" name=\"location\" placeholder=\"Search Location\" value=\"\">
                                <i class=\"icon-map-pin\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                            <div class=\"form-group form-action\">
                                <input type=\"submit\" name=\"search\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"featured-jobs nopadding\">
    <div class=\"\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-12 col-xs-12 cstm-featured-col-left\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1>Featured Jobs</h1>
                        
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box\"><img src=\"http://frescoserver.com/getwork/images/company/1.png\" class=\"img-responsive center-block\" alt=\"\"></div>
                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"\">
                                <h4><a href=\"\"> Graphic Designer </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 1 days ago</a> <a href=\"\" class=\"mata-detail part\">Part Time</a> </div>
                            <div class=\"feature-post-meta-bottom\"> <span>\$500<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box\"><img src=\"http://frescoserver.com/getwork/images/company/4.png\" class=\"img-responsive center-block\" alt=\"\"></div>
                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"\">
                                <h4><a href=\"\"> Software Engineer </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 5 days ago</a> <a href=\"\" class=\"mata-detail remote\">Remote</a> </div>
                            <div class=\"feature-post-meta-bottom\"> <span>\$900<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn\">
                        <button class=\"btn-default cstm-btn-bg-black\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-12 col-xs-12 cstm-featured-col-right\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title white cstm-featured-head\">
                        <h1>Featured Courses</h1>
                        
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box\"><img src=\"http://frescoserver.com/getwork/images/company/1.png\" class=\"img-responsive center-block\" alt=\"\"></div>
                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"\">
                                <h4><a href=\"\"> Graphic Designer </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 1 days ago</a> <a href=\"\" class=\"mata-detail part\">Part Time</a> </div>
                            <div class=\"feature-post-meta-bottom\"> <span>\$500<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"featured-image-box\">
                        <div class=\"img-box cstm-featured-img-box\"><img src=\"http://frescoserver.com/getwork/images/company/4.png\" class=\"img-responsive center-block\" alt=\"\"></div>
                        <div class=\"content-area cstm-featured-content-area\">
                            <div class=\"\">
                                <h4><a href=\"\"> Software Engineer </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class=\"feature-post-meta\"> <a href=\"\"> <i class=\"fa fa-clock-o\"></i> 5 days ago</a> <a href=\"\" class=\"mata-detail remote\">Remote</a> </div>
                            <div class=\"feature-post-meta-bottom\"> <span>\$900<small>/ month</small></span> <a href=\"\" class=\"apply pull-right\"> Apply Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn\">
                        <button class=\"btn-default\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"cat-tabs cat-tab-index-2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                {# <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"cat-title\">Browse Jobs</div>
                </div> #}
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
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
                                        <div class=\"job-box\">
                                            <div class=\"col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm\">
                                                <div class=\"comp-logo\"> <img src=\"../../images/company/5.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </div>
                                            </div>
                                            <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                                <div class=\"job-title-box\"> <a href=\"#\">
                                                    <div class=\"job-title\">{{ job.title }}</div>
                                                    </a> <a href=\"#\"><span class=\"comp-name\">{{ job.company_name }}</span></a> </div>
                                            </div>
                                            <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                                <div class=\"job-location\"> <i class=\"fa fa-location-arrow\"></i> {{ job.location }}</div>
                                            </div>
                                            <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                                <div class=\"job-type jt-remote-color\"> <i class=\"fa fa-clock-o\"></i> {{job.job_type }} </div>
                                            </div>
                                            <div class=\"col-md-2 col-sm-2 col-xs-12\">
                                                <a href=\"/home/jobdetails/{{ job.id }}\" class=\"btn btn-primary btn-custom\">Details</a>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"tab-pane animated fadeInRight\" id=\"tab2\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                                    <div class=\"job-box\">
                                        <div class=\"col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm\">
                                            <div class=\"comp-logo\"> <img src=\"http://frescoserver.com/getwork/images/company/5.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </div>
                                        </div>
                                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                            <div class=\"job-title-box\"> <a href=\"#\">
                                                <div class=\"job-title\"> Technical Documentation Specialist</div>
                                                </a> <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. United States</span></a> </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-location\"> <i class=\"fa fa-location-arrow\"></i> New York </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-type jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> Full time </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-12\">
                                            <button class=\"btn btn-primary btn-custom\">Apply Now</button>
                                        </div>
                                    </div>
                                    <div class=\"job-box\">
                                        <div class=\"col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm\">
                                            <div class=\"comp-logo\"> <img src=\"http://frescoserver.com/getwork/images/company/1.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </div>
                                        </div>
                                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                            <div class=\"job-title-box\"> <a href=\"#\">
                                                <div class=\"job-title\"> Technical Network Director</div>
                                                </a> <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. Australia</span></a> </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-location\"> <i class=\"fa fa-location-arrow\"></i> Melbourne </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-type jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> Full time </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-12\">
                                            <button class=\"btn btn-primary btn-custom\">Apply Now</button>
                                        </div>
                                    </div>
                                    <div class=\"job-box\">
                                        <div class=\"col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm\">
                                            <div class=\"comp-logo\"> <img src=\"http://frescoserver.com/getwork/images/company/3.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </div>
                                        </div>
                                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                            <div class=\"job-title-box\"> <a href=\"#\">
                                                <div class=\"job-title\"> Looking for Bootstrap designer</div>
                                                </a> <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. Pakistan</span></a> </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-location\"> <i class=\"fa fa-location-arrow\"></i> Lahore </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-type jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> Full time </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-12\">
                                            <button class=\"btn btn-primary btn-custom\">Apply Now</button>
                                        </div>
                                    </div>
                                    <div class=\"job-box\">
                                        <div class=\"col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm\">
                                            <div class=\"comp-logo\"> <img src=\"http://frescoserver.com/getwork/images/company/4.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </div>
                                        </div>
                                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                            <div class=\"job-title-box\"> <a href=\"#\">
                                                <div class=\"job-title\"> Assistant Engineer (IT/Networks)</div>
                                                </a> <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. Malaysia</span></a> </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-location\"> <i class=\"fa fa-location-arrow\"></i> Singapore </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-6\">
                                            <div class=\"job-type jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> Full time </div>
                                        </div>
                                        <div class=\"col-md-2 col-sm-2 col-xs-12\">
                                            <button class=\"btn btn-primary btn-custom\">Apply Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"category-section-3 light-blue nopadding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1>Choose Your Trade</h1>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"category-section-3-box\">
                        <div class=\"category-section-3-box-inner\"> <i class=\"icon-browser\"></i>
                            <h4> Civil Construction </h4>
                        </div>
                        <div class=\"category-section-3-box-over-text animated fadeIn\">
                            <h4>Front End Development</h4>
                            <h4>back End Development</h4>
                            <h4>Core Programing</h4>
                            <p><a href=\"\"> See All </a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"category-section-3-box\">
                        <div class=\"category-section-3-box-inner\"> <i class=\"icon-briefcase\"></i>
                            <h4> Railway Construction</h4>
                        </div>
                        <div class=\"category-section-3-box-over-text animated fadeIn\">
                            <h4>FINANCIAL MODELERS</h4>
                            <h4>BOOKKEEPERS</h4>
                            <h4>TAX ACCOUNTANTS</h4>
                            <p><a href=\"\"> See All </a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"category-section-3-box\">
                        <div class=\"category-section-3-box-inner\"> <i class=\"icon-bargraph\"></i>
                            <h4> Graduate Construction </h4>
                        </div>
                        <div class=\"category-section-3-box-over-text animated fadeIn\">
                            <h4>SEO SPECIALISTS</h4>
                            <h4>MARKETING EXPERTS</h4>
                            <h4>EMAIL AUTOMATORS</h4>
                            <p><a href=\"\"> See All </a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"category-section-3-box\">
                        <div class=\"category-section-3-box-inner\"> <i class=\"icon-adjustments\"></i>
                            <h4> Other Construction </h4>
                        </div>
                        <div class=\"category-section-3-box-over-text animated fadeIn\">
                            <h4>WEB RESEARCHERS</h4>
                            <h4>TRANSCRIPTIONISTS</h4>
                            <h4>PERSONAL ASSISTANTS</h4>
                            <p><a href=\"\"> See All </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"blog-posts-section light-grey nopadding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black cstm-featured-head\">
                        <h1>Courses</h1>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"blog-post\">
                        <div class=\"post-img\"> <a href=\"#\"> <img src=\"http://frescoserver.com/getwork/images/blog/1.jpg\" alt=\"\" class=\"img-responsive\"> </a> </div>
                        <div class=\"post-info\"> <a href=\"\">Aug 30, 2016</a> <a href=\"#\">23 comments</a> </div>
                        <h3 class=\"post-title\"> <a href=\"#\"> Sketch Designing Artists are beauty: A report </a> </h3>
                        <p class=\"post-excerpt\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit 
                            atque repellat est molestiae perferendis. </p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"blog-post\">
                        <div class=\"post-img\"> <a href=\"#\"> <img src=\"http://frescoserver.com/getwork/images/blog/2.jpg\" alt=\"\" class=\"img-responsive\"> </a> </div>
                        <div class=\"post-info\"> <a href=\"#\">august 30, 2016</a> <a href=\"#\">90 comments</a> </div>
                        <h3 class=\"post-title\"> <a href=\"#\"> A suitable timings for a graphic designers </a> </h3>
                        <p class=\"post-excerpt\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit 
                            atque repellat est molestiae perferendis. </p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"blog-post\">
                        <div class=\"post-img\"> <a href=\"#\"> <img src=\"http://frescoserver.com/getwork/images/blog/3.jpg\" alt=\"\" class=\"img-responsive\"> </a> </div>
                        <div class=\"post-info\"> <a href=\"#\">august 02, 2016</a> <a href=\"#\">10 comments</a> </div>
                        <h3 class=\"post-title\"> <a href=\"#\"> How to get a job on same time same place </a> </h3>
                        <p class=\"post-excerpt\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit 
                            atque repellat est molestiae perferendis. </p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"blog-post\">
                        <div class=\"post-img\"> <a href=\"#\"> <img src=\"http://frescoserver.com/getwork/images/blog/1.jpg\" alt=\"\" class=\"img-responsive\"> </a> </div>
                        <div class=\"post-info\"> <a href=\"\">Aug 30, 2016</a> <a href=\"#\">23 comments</a> </div>
                        <h3 class=\"post-title\"> <a href=\"#\"> Sketch Designing Artists are beauty: A report </a> </h3>
                        <p class=\"post-excerpt\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit 
                            atque repellat est molestiae perferendis. </p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"load-more-btn\">
                        <button class=\"btn-default\"> View All <i class=\"fa fa-angle-right\"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class=\"brand-logo-area clients-bg\">
    <div class=\"clients-list\">
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_1.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_2.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_3.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_4.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_1.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_2.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_3.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
        <div class=\"client-logo\"> <a href=\"#\"><img src=\"http://frescoserver.com/getwork/images/clients/client_4.png\" class=\"img-responsive\"  alt=\"Brand Image\" /></a> </div>
    </div>
</div>

{% endblock content %}", "home.twig", "/home/frescihp/public_html/getwork/application/views/home.twig");
    }
}
