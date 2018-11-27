<?php

/* all_categories.twig */
class __TwigTemplate_70b5ee6cf600d9aef67907f29b1f12543be42eb05f901fcd34ed3b53c0c69c32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "all_categories.twig", 1);
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
    <meta name=\"description\" content=\"Getwork.construction Providing solutions for construction recruiters and job seekers Learn new skill sets and qualifications from the experts and become highly employable\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Post free Jobs in London| Best Construction jobs in London - Getwork</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<section class=\"categories\">
     <div class=\"categories-header col-lg-12 col-md-12 col-sm-12\"><h1>Job categories</h1></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">

                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black\">
                        <p>Search Jobs through different construction categories to match best for your profile.</p>
                    </div>
                </div>
                <div class=\"job-categories col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <section class=\"category-section-3 light-blue nopadding trades\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"trade t1\" data-id=\"6\">
                                        <div class=\"category-section-3-box\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2> Railway Construction Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t2\" data-id=\"3\">
                                        <div class=\"category-section-3-box backg\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Bridges/Roads & Highway Construction Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t3\" data-id=\"7\">
                                        <div class=\"category-section-3-box backg1\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2> Tunneling & underground Jobs </h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t4\" data-id=\"5\">
                                        <div class=\"category-section-3-box backg2\">
                                                                   
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Housing & Building Construction Jobs </h2>
                                        </div>
                                    </div>
                               
                                   
                                    <div class=\"trade t5\" data-id=\"4\">
                                        <div class=\"category-section-3-box backg5\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2>Commercial Building Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t6\" data-id=\"8\">
                                        <div class=\"category-section-3-box backg6\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Utilities,Marine & Nucleas Construction Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t7\" data-id=\"2\">
                                        <div class=\"category-section-3-box backg7\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2> Airport Construction Jobs </h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t8\" data-id=\"1\">
                                        <div class=\"category-section-3-box backg8\">
                                                                  
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Other Construction Jobs </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    ";
        // line 109
        echo "                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 115
    public function block_footer($context, array $blocks = array())
    {
        // line 116
        echo "    ";
        $this->loadTemplate("all_categories.twig", "all_categories.twig", 116, "712369345")->display($context);
    }

    public function getTemplateName()
    {
        return "all_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 116,  154 => 115,  145 => 109,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"Getwork.construction Providing solutions for construction recruiters and job seekers Learn new skill sets and qualifications from the experts and become highly employable\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Post free Jobs in London| Best Construction jobs in London - Getwork</title>
{% endblock %}
{% block content %}

<section class=\"categories\">
     <div class=\"categories-header col-lg-12 col-md-12 col-sm-12\"><h1>Job categories</h1></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">

                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black\">
                        <p>Search Jobs through different construction categories to match best for your profile.</p>
                    </div>
                </div>
                <div class=\"job-categories col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <section class=\"category-section-3 light-blue nopadding trades\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"trade t1\" data-id=\"6\">
                                        <div class=\"category-section-3-box\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2> Railway Construction Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t2\" data-id=\"3\">
                                        <div class=\"category-section-3-box backg\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Bridges/Roads & Highway Construction Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t3\" data-id=\"7\">
                                        <div class=\"category-section-3-box backg1\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2> Tunneling & underground Jobs </h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t4\" data-id=\"5\">
                                        <div class=\"category-section-3-box backg2\">
                                                                   
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Housing & Building Construction Jobs </h2>
                                        </div>
                                    </div>
                               
                                   
                                    <div class=\"trade t5\" data-id=\"4\">
                                        <div class=\"category-section-3-box backg5\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2>Commercial Building Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t6\" data-id=\"8\">
                                        <div class=\"category-section-3-box backg6\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Utilities,Marine & Nucleas Construction Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t7\" data-id=\"2\">
                                        <div class=\"category-section-3-box backg7\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2> Airport Construction Jobs </h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t8\" data-id=\"1\">
                                        <div class=\"category-section-3-box backg8\">
                                                                  
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Other Construction Jobs </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    {# <div id=\"cats-masonry\" style=\"-moz-column-count:3;\">
                        <ul class=\"\">
                            {% for category in categories %}
                                <li><a href=\"#\"> {{ category.job_category }} <span>( {{ category.jobsCount }} )</span> </a></li>
                            {% endfor %}
                        </ul>
                    </div> #}
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script>
                jQuery(\".trades .trade\").on(\"click\",function(ele){
                    window.common.jumpJobSearch(jQuery(this).attr(\"data-id\"));
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "all_categories.twig", "/home/getwork/public_html/application/views/all_categories.twig");
    }
}


/* all_categories.twig */
class __TwigTemplate_70b5ee6cf600d9aef67907f29b1f12543be42eb05f901fcd34ed3b53c0c69c32_712369345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "all_categories.twig", 116);
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

    // line 117
    public function block_customScripts($context, array $blocks = array())
    {
        // line 118
        echo "            <script>
                jQuery(\".trades .trade\").on(\"click\",function(ele){
                    window.common.jumpJobSearch(jQuery(this).attr(\"data-id\"));
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "all_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 118,  339 => 117,  157 => 116,  154 => 115,  145 => 109,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"Getwork.construction Providing solutions for construction recruiters and job seekers Learn new skill sets and qualifications from the experts and become highly employable\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Post free Jobs in London| Best Construction jobs in London - Getwork</title>
{% endblock %}
{% block content %}

<section class=\"categories\">
     <div class=\"categories-header col-lg-12 col-md-12 col-sm-12\"><h1>Job categories</h1></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">

                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black\">
                        <p>Search Jobs through different construction categories to match best for your profile.</p>
                    </div>
                </div>
                <div class=\"job-categories col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <section class=\"category-section-3 light-blue nopadding trades\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"trade t1\" data-id=\"6\">
                                        <div class=\"category-section-3-box\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2> Railway Construction Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t2\" data-id=\"3\">
                                        <div class=\"category-section-3-box backg\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Bridges/Roads & Highway Construction Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t3\" data-id=\"7\">
                                        <div class=\"category-section-3-box backg1\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2> Tunneling & underground Jobs </h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t4\" data-id=\"5\">
                                        <div class=\"category-section-3-box backg2\">
                                                                   
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Housing & Building Construction Jobs </h2>
                                        </div>
                                    </div>
                               
                                   
                                    <div class=\"trade t5\" data-id=\"4\">
                                        <div class=\"category-section-3-box backg5\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2>Commercial Building Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t6\" data-id=\"8\">
                                        <div class=\"category-section-3-box backg6\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Utilities,Marine & Nucleas Construction Jobs</h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t7\" data-id=\"2\">
                                        <div class=\"category-section-3-box backg7\">
                                                                    
                                        </div>
                                        <div class=\"category-section-3-box-inner\"> 
                                            <h2> Airport Construction Jobs </h2>
                                        </div>
                                    </div>
                                    <div class=\"trade t8\" data-id=\"1\">
                                        <div class=\"category-section-3-box backg8\">
                                                                  
                                        </div>
                                        <div class=\"category-section-3-box-inner\">
                                            <h2> Other Construction Jobs </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    {# <div id=\"cats-masonry\" style=\"-moz-column-count:3;\">
                        <ul class=\"\">
                            {% for category in categories %}
                                <li><a href=\"#\"> {{ category.job_category }} <span>( {{ category.jobsCount }} )</span> </a></li>
                            {% endfor %}
                        </ul>
                    </div> #}
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script>
                jQuery(\".trades .trade\").on(\"click\",function(ele){
                    window.common.jumpJobSearch(jQuery(this).attr(\"data-id\"));
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "all_categories.twig", "/home/getwork/public_html/application/views/all_categories.twig");
    }
}
