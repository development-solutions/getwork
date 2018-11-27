<?php

/* contactus.twig */
class __TwigTemplate_f4063788cd5fed3ddecba2c028cd93bd7cfd2bd3dfd48803d8fba38405f798eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "contactus.twig", 1);
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
    <meta name=\"description\" content=\"A site solely dedicated to the Construction Industry Getwork.construction. Post Courses to enhance the candidate construction skill with their Profession.\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Getwork.construction | Post courses | Courses in construction</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div id=\"map-contact\"></div>
<section class=\"contact-us light-grey\">
                  <div class=\"contact-top-header col-lg-12 col-md-12 col-sm-12\"><h1>Contact Us</h1></div>
\t\t\t\t  
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black\">
                        
                        <p>Please send any of your query to us we will reach you soon.</p>
                    </div>
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <form action=\"/home/contactus\" method=\"post\" class=\"row\">
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Name <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"name\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Email <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"email\" class=\"form-control\" type=\"email\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Phone <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"phone\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Subject <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"subject\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Message <span class=\"required\">*</span></label>
                                <textarea name=\"message\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t 
                            <input type=\"submit\" class=\"btn btn-default\" name=\"send\" value=\"Send Message\" />
\t\t\t\t\t\t\t
                        </div>
                    </form>
                </div>
                ";
        // line 78
        echo "                        <ul class=\"social-network social-circle\">
                            <li><a href=\"https://www.facebook.com/getwork.construction/\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"https://twitter.com/GetWorkconstruc/\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            ";
        // line 83
        echo "                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
";
        // line 90
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 91
            echo "    <script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\",
            \"extendedTimeOut\": \"0\",
            \"timeOut\": \"0\",
        }
        toastr.success(\"";
            // line 102
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "\");
    },500);
    </script>
";
        }
    }

    // line 107
    public function block_footer($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        $this->loadTemplate("contactus.twig", "contactus.twig", 108, "1199443931")->display($context);
    }

    public function getTemplateName()
    {
        return "contactus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 108,  149 => 107,  140 => 102,  127 => 91,  125 => 90,  116 => 83,  111 => 78,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"A site solely dedicated to the Construction Industry Getwork.construction. Post Courses to enhance the candidate construction skill with their Profession.\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Getwork.construction | Post courses | Courses in construction</title>
{% endblock %}
{% block content %}

<div id=\"map-contact\"></div>
<section class=\"contact-us light-grey\">
                  <div class=\"contact-top-header col-lg-12 col-md-12 col-sm-12\"><h1>Contact Us</h1></div>
\t\t\t\t  
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black\">
                        
                        <p>Please send any of your query to us we will reach you soon.</p>
                    </div>
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <form action=\"/home/contactus\" method=\"post\" class=\"row\">
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Name <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"name\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Email <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"email\" class=\"form-control\" type=\"email\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Phone <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"phone\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Subject <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"subject\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Message <span class=\"required\">*</span></label>
                                <textarea name=\"message\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t 
                            <input type=\"submit\" class=\"btn btn-default\" name=\"send\" value=\"Send Message\" />
\t\t\t\t\t\t\t
                        </div>
                    </form>
                </div>
                {# <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"contact_block\">
                        {#<h4>Contact Information</h4>
                        <ul class=\"personal-info\">
                            <li><i class=\"fa fa-map-marker\"></i> 246 Green Lane Road Walsall West Midlands United Kingdom WS2 8HS</li>
                            <li><i class=\"fa fa-envelope\"></i> info@getwork.com</li>
                            <li><i class=\"fa fa-phone\"></i> 01922 725956</li>
                            <li><i class=\"fa fa-clock-o\"></i> Mon - Sat: 9:00am - 5:00pm</li>
                             <li><i class=\"fa fa-clock-o\"></i> Sunday: Closed</li>
                        </ul>#}
                        <ul class=\"social-network social-circle\">
                            <li><a href=\"https://www.facebook.com/getwork.construction/\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"https://twitter.com/GetWorkconstruc/\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            {# <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li> #}
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
{% if message %}
    <script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\",
            \"extendedTimeOut\": \"0\",
            \"timeOut\": \"0\",
        }
        toastr.success(\"{{ message|raw }}\");
    },500);
    </script>
{% endif %}
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\" src=\"/js/map.js\"></script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "contactus.twig", "/home/getwork/public_html/application/views/contactus.twig");
    }
}


/* contactus.twig */
class __TwigTemplate_f4063788cd5fed3ddecba2c028cd93bd7cfd2bd3dfd48803d8fba38405f798eb_1199443931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "contactus.twig", 108);
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

    // line 109
    public function block_customScripts($context, array $blocks = array())
    {
        // line 110
        echo "            <script type=\"text/javascript\" src=\"/js/map.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "contactus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 110,  322 => 109,  152 => 108,  149 => 107,  140 => 102,  127 => 91,  125 => 90,  116 => 83,  111 => 78,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"A site solely dedicated to the Construction Industry Getwork.construction. Post Courses to enhance the candidate construction skill with their Profession.\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Getwork.construction | Post courses | Courses in construction</title>
{% endblock %}
{% block content %}

<div id=\"map-contact\"></div>
<section class=\"contact-us light-grey\">
                  <div class=\"contact-top-header col-lg-12 col-md-12 col-sm-12\"><h1>Contact Us</h1></div>
\t\t\t\t  
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black\">
                        
                        <p>Please send any of your query to us we will reach you soon.</p>
                    </div>
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <form action=\"/home/contactus\" method=\"post\" class=\"row\">
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Name <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"name\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Email <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"email\" class=\"form-control\" type=\"email\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Phone <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"phone\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Subject <span class=\"required\">*</span></label>
                                <input placeholder=\"\" name=\"subject\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                            <div class=\"form-group\">
                                <label>Message <span class=\"required\">*</span></label>
                                <textarea name=\"message\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t 
                            <input type=\"submit\" class=\"btn btn-default\" name=\"send\" value=\"Send Message\" />
\t\t\t\t\t\t\t
                        </div>
                    </form>
                </div>
                {# <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"contact_block\">
                        {#<h4>Contact Information</h4>
                        <ul class=\"personal-info\">
                            <li><i class=\"fa fa-map-marker\"></i> 246 Green Lane Road Walsall West Midlands United Kingdom WS2 8HS</li>
                            <li><i class=\"fa fa-envelope\"></i> info@getwork.com</li>
                            <li><i class=\"fa fa-phone\"></i> 01922 725956</li>
                            <li><i class=\"fa fa-clock-o\"></i> Mon - Sat: 9:00am - 5:00pm</li>
                             <li><i class=\"fa fa-clock-o\"></i> Sunday: Closed</li>
                        </ul>#}
                        <ul class=\"social-network social-circle\">
                            <li><a href=\"https://www.facebook.com/getwork.construction/\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"https://twitter.com/GetWorkconstruc/\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            {# <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li> #}
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
{% if message %}
    <script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\",
            \"extendedTimeOut\": \"0\",
            \"timeOut\": \"0\",
        }
        toastr.success(\"{{ message|raw }}\");
    },500);
    </script>
{% endif %}
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\" src=\"/js/map.js\"></script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "contactus.twig", "/home/getwork/public_html/application/views/contactus.twig");
    }
}
