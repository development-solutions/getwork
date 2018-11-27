<?php

/* blogs.twig */
class __TwigTemplate_f4b47880a30fd644d5ee8615cfba705115f9a07adce2e6e9832753dabfe00032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "blogs.twig", 1);
        $this->blocks = array(
            'metatags' => array($this, 'block_metatags'),
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_metatags($context, array $blocks = array())
    {
        // line 3
        echo "    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Getwork.construction recently commissioned a survey of over 500 people to find out who loves their job and, more importantly in UK.\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>GetWork - Blogs | UK Job Vacancies | Construction Work in UK</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<section class=\"job-breadcrumb\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-7 co-xs-12 text-left\">
                <h3>Blog</h3>
            </div>
            <div class=\"col-md-6 col-sm-5 co-xs-12 text-right\">
                <div class=\"bread\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\">Home</a> </li>
                        <li><a href=\"#\">Blog </a> </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"categories-list-page light-grey mainblog\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <div id=\"posts-masonry\" class=\"posts-masonry\">
                    <div class=\"col-md-12\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"blog-post\">
                                <div class=\"post-img\">
                                    <a href=\"/home/blog1\">
                                        <img src=\"/images/blog/1.jpg\" alt=\"free construction courses\" class=\"img-responsive\">
                                    </a>
                                </div>
                                <div class=\"post-info\">
                                    <a href=\"\">February 2017</a>
                                    <a href=\"#\">23 comments</a>
                                </div>
                                <h3 class=\"post-title\">
                                    <a href=\"/home/blog1\">
                                        Ever wondered, who is in charge of works at HS2?- Now you know!
                                    </a>
                                </h3>
                                <p class=\"post-excerpt\">
                                    Mr. Crawford joined HS2 as managing director for phase one of the project in May 2014. 
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"blog-post\">
                                <div class=\"post-img\">
                                    <a href=\"/home/blog2\">
                                        <img src=\"/images/blog/2.jpg\" alt=\"Post free courses online\" class=\"img-responsive\">
                                    </a>
                                </div>
                                <div class=\"post-info\">
                                    <a href=\"#\">February 2017</a>
                                    <a href=\"#\">90 comments</a>
                                </div>
                                <h3 class=\"post-title\">
                        <a href=\"/home/blog2\">
                            Do you work for love?
                        </a>
                    </h3>
                                <p class=\"post-excerpt\">
                                   We recently commissioned a survey of over 500 people to find out who loves their job and, more importantly, why. It seems that there’s a unique relationship between love and work.
                                </p>
                            </div>
                        </div>
                        </div>
                        <div class=\"col-md-12\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"blog-post\">
                                <div class=\"post-img\">
                                    <a href=\"/home/blog3\">
                                        <img src=\"/images/blog/3.jpg\" alt=\"Post courses of construction\" class=\"img-responsive\">
                                    </a>
                                </div>
                                <div class=\"post-info\">
                                    <a href=\"#\">February 2017</a>
                                    <a href=\"#\">10 comments</a>
                                </div>
                                <h3 class=\"post-title\">
                        <a href=\"/home/blog3\">
                            Technology is disrupting traditional recruiting practices
                        </a>
                    </h3>
                                <p class=\"post-excerpt\">
                                    The paper CV is no longer the preferred method for a candidate to inform an employer of their skills. Candidates now create virtual brands via social media and personal websites, thus shifting recruiting to a primarily digital practice. 
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"blog-post\">
                                <div class=\"post-img\">
                                    <a href=\"/home/blog4\">
                                        <img src=\"/images/blog/4.jpg\" alt=\"Career Construction jobs in UK\" class=\"img-responsive\">
                                    </a>
                                </div>
                                <div class=\"post-info\">
                                    <a href=\"#\">July 30, 2016</a>
                                    <a href=\"#\">1 comments</a>
                                </div>
                                <h3 class=\"post-title\">
                        <a href=\"/home/blog4\">
                            JOBS BOOST
                            Over 200 construction jobs set for Dublin on €24m office block
                        </a>
                    </h3>
                                <p class=\"post-excerpt\">
                                    SOME 210 construction jobs will be created as building has gets underway on a €24 million office block in Dublin in the coming weeks.
                                </p>
                            </div>
                        </div>
                        </div>
                        <div class=\"col-md-12\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"blog-post\">
                                <div class=\"post-info\">
                                    <a href=\"#\">February 2017</a>
                                    <a href=\"#\">1 comments</a>
                                </div>
                                <h3 class=\"post-title\">
                        <a href=\"/home/blog5\">
                           UK building supplies sales up since Brexit 
                        </a>
                    </h3>
                                <p class=\"post-excerpt\">
                                    Sales of building supplies in Britain have improved since it voted to leave the European Union last June and there is no evidence yet that Brexit's impact will ultimately be negative for the sector, Irish firm Kingspan (KSP.I) said on Friday.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"blog-post\">
                                <div class=\"post-info\">
                                    <a href=\"#\">February 2017</a>
                                    <a href=\"#\">20 comments</a>
                                </div>
                                <h3 class=\"post-title\">
                        <a href=\"/home/blog6\">
                            UK job vacancies rise, wages remain flat
                        </a>
                                </h3>
                                <p class=\"post-excerpt\">
                                    The number of advertised jobs in Britain rose to its highest level in four years, according to a survey recently released by a jobs website, another sign that the economic recovery is gaining momentum.
                                </p>
                            </div>
                        </div>   
                        </div>                   
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>       

<script type=\"text/javascript\">
    (function(\$) {
        \"use strict\";
        \$('#posts-masonry').imagesLoaded(function() {
            \$('#posts-masonry').isotope({
                layoutMode: 'masonry',
                transitionDuration: '0.3s'
            });
        });
    })(jQuery);
</script>

";
    }

    public function getTemplateName()
    {
        return "blogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  52 => 14,  47 => 12,  44 => 11,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"index.twig\" %}{% block metatags %}    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />    <!--[if IE]>        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">    <![endif]-->    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">    <meta name=\"description\" content=\"Getwork.construction recently commissioned a survey of over 500 people to find out who loves their job and, more importantly in UK.\">    <meta name=\"author\" content=\"GetWork\">{% endblock %}{% block title %}    <title>GetWork - Blogs | UK Job Vacancies | Construction Work in UK</title>{% endblock %}{% block content %}<section class=\"job-breadcrumb\">    <div class=\"container\">        <div class=\"row\">            <div class=\"col-md-6 col-sm-7 co-xs-12 text-left\">                <h3>Blog</h3>            </div>            <div class=\"col-md-6 col-sm-5 co-xs-12 text-right\">                <div class=\"bread\">                    <ol class=\"breadcrumb\">                        <li><a href=\"#\">Home</a> </li>                        <li><a href=\"#\">Blog </a> </li>                    </ol>                </div>            </div>        </div>    </div></section><section class=\"categories-list-page light-grey mainblog\">    <div class=\"container\">        <div class=\"row\">            <div class=\"col-md-12 col-sm-12 col-xs-12\">                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">                    <div id=\"posts-masonry\" class=\"posts-masonry\">                    <div class=\"col-md-12\">                        <div class=\"col-md-6 col-sm-6 col-xs-12\">                            <div class=\"blog-post\">                                <div class=\"post-img\">                                    <a href=\"/home/blog1\">                                        <img src=\"/images/blog/1.jpg\" alt=\"free construction courses\" class=\"img-responsive\">                                    </a>                                </div>                                <div class=\"post-info\">                                    <a href=\"\">February 2017</a>                                    <a href=\"#\">23 comments</a>                                </div>                                <h3 class=\"post-title\">                                    <a href=\"/home/blog1\">                                        Ever wondered, who is in charge of works at HS2?- Now you know!                                    </a>                                </h3>                                <p class=\"post-excerpt\">                                    Mr. Crawford joined HS2 as managing director for phase one of the project in May 2014.                                 </p>                            </div>                        </div>                        <div class=\"col-md-6 col-sm-6 col-xs-12\">                            <div class=\"blog-post\">                                <div class=\"post-img\">                                    <a href=\"/home/blog2\">                                        <img src=\"/images/blog/2.jpg\" alt=\"Post free courses online\" class=\"img-responsive\">                                    </a>                                </div>                                <div class=\"post-info\">                                    <a href=\"#\">February 2017</a>                                    <a href=\"#\">90 comments</a>                                </div>                                <h3 class=\"post-title\">                        <a href=\"/home/blog2\">                            Do you work for love?                        </a>                    </h3>                                <p class=\"post-excerpt\">                                   We recently commissioned a survey of over 500 people to find out who loves their job and, more importantly, why. It seems that there’s a unique relationship between love and work.                                </p>                            </div>                        </div>                        </div>                        <div class=\"col-md-12\">                        <div class=\"col-md-6 col-sm-6 col-xs-12\">                            <div class=\"blog-post\">                                <div class=\"post-img\">                                    <a href=\"/home/blog3\">                                        <img src=\"/images/blog/3.jpg\" alt=\"Post courses of construction\" class=\"img-responsive\">                                    </a>                                </div>                                <div class=\"post-info\">                                    <a href=\"#\">February 2017</a>                                    <a href=\"#\">10 comments</a>                                </div>                                <h3 class=\"post-title\">                        <a href=\"/home/blog3\">                            Technology is disrupting traditional recruiting practices                        </a>                    </h3>                                <p class=\"post-excerpt\">                                    The paper CV is no longer the preferred method for a candidate to inform an employer of their skills. Candidates now create virtual brands via social media and personal websites, thus shifting recruiting to a primarily digital practice.                                 </p>                            </div>                        </div>                        <div class=\"col-md-6 col-sm-6 col-xs-12\">                            <div class=\"blog-post\">                                <div class=\"post-img\">                                    <a href=\"/home/blog4\">                                        <img src=\"/images/blog/4.jpg\" alt=\"Career Construction jobs in UK\" class=\"img-responsive\">                                    </a>                                </div>                                <div class=\"post-info\">                                    <a href=\"#\">July 30, 2016</a>                                    <a href=\"#\">1 comments</a>                                </div>                                <h3 class=\"post-title\">                        <a href=\"/home/blog4\">                            JOBS BOOST                            Over 200 construction jobs set for Dublin on €24m office block                        </a>                    </h3>                                <p class=\"post-excerpt\">                                    SOME 210 construction jobs will be created as building has gets underway on a €24 million office block in Dublin in the coming weeks.                                </p>                            </div>                        </div>                        </div>                        <div class=\"col-md-12\">                        <div class=\"col-md-6 col-sm-6 col-xs-12\">                            <div class=\"blog-post\">                                <div class=\"post-info\">                                    <a href=\"#\">February 2017</a>                                    <a href=\"#\">1 comments</a>                                </div>                                <h3 class=\"post-title\">                        <a href=\"/home/blog5\">                           UK building supplies sales up since Brexit                         </a>                    </h3>                                <p class=\"post-excerpt\">                                    Sales of building supplies in Britain have improved since it voted to leave the European Union last June and there is no evidence yet that Brexit's impact will ultimately be negative for the sector, Irish firm Kingspan (KSP.I) said on Friday.                                </p>                            </div>                        </div>                        <div class=\"col-md-6 col-sm-6 col-xs-12\">                            <div class=\"blog-post\">                                <div class=\"post-info\">                                    <a href=\"#\">February 2017</a>                                    <a href=\"#\">20 comments</a>                                </div>                                <h3 class=\"post-title\">                        <a href=\"/home/blog6\">                            UK job vacancies rise, wages remain flat                        </a>                                </h3>                                <p class=\"post-excerpt\">                                    The number of advertised jobs in Britain rose to its highest level in four years, according to a survey recently released by a jobs website, another sign that the economic recovery is gaining momentum.                                </p>                            </div>                        </div>                           </div>                                        </div>                </div>            </div>        </div>    </div></section>       <script type=\"text/javascript\">    (function(\$) {        \"use strict\";        \$('#posts-masonry').imagesLoaded(function() {            \$('#posts-masonry').isotope({                layoutMode: 'masonry',                transitionDuration: '0.3s'            });        });    })(jQuery);</script>{% endblock %}", "blogs.twig", "/home/getwork/public_html/application/views/blogs.twig");
    }
}
