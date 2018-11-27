<?php

/* employer_edit.twig */
class __TwigTemplate_a9420f39cc98d27aa6a5c6fd97af57457afd84ebe753ccec5292eaac99959e7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "employer_edit.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
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

    // line 3
    public function block_navigation($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("employer_navigation.twig", "employer_edit.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                ";
        // line 13
        $this->loadTemplate("employer_sidebar.twig", "employer_edit.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"profile-edit row\">
                        <form action=\"/dashboard/profile_edit\" method=\"post\" enctype=\"multipart/form-data\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Company Name: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"company_name\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Trade <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"e.g. railway,civil\" name=\"type_of_business\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "type_of_business", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\"> 
                                    <label>No. of Employees <span class=\"required\"></span></label>
                                    <select name=\"employees\" class=\"form-control\">
                                        <option value=\"0-10\" ";
        // line 36
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "employees", array()) == "0-10")) {
            echo " selected ";
        }
        echo ">0-10</option>
                                        <option value=\"10-30\" ";
        // line 37
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "employees", array()) == "10-30")) {
            echo " selected ";
        }
        echo ">10-30</option>
                                        <option value=\"30-50\" ";
        // line 38
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "employees", array()) == "30-50")) {
            echo " selected ";
        }
        echo ">30-50</option>
                                        <option value=\"50-100\" ";
        // line 39
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "employees", array()) == "50-100")) {
            echo " selected ";
        }
        echo ">50-100</option>
                                        <option value=\"100+\" ";
        // line 40
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "employees", array()) == "100+")) {
            echo " selected ";
        }
        echo ">100+</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"input-group image-preview form-group\">
                                    <label>Profile Image: <span class=\"required\">*</span></label>
                                    <input type=\"text\" placeholder=\"Upload Profile Image\" class=\"form-control image-preview-filename\" disabled=\"disabled\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 47
        echo (isset($context["error_image"]) ? $context["error_image"] : null);
        echo "\">
                                    <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                                        <span class=\"glyphicon glyphicon-remove\"></span> Clear
                                    </button>
                                    <div class=\"btn btn-default image-preview-input\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span>
                                        <span class=\"image-preview-input-title\">Browse</span>
                                        <input type=\"file\" accept=\"file_extension\" name=\"logo\" />
                                    </div>
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"first line of address\" name=\"address\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Telephone: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"phone\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>City: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"e.g. london\" name=\"city\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Post Code <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "postcode", array()), "html", null, true);
        echo "\" placeholder=\"e.g. E16 1DN\" class=\"form-control\" type=\"text\" name=\"postcode\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>County: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"e.g. middlesex\" name=\"provience\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Country: <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 93
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array()), "United Kingdom")) : ("United Kingdom")), "html", null, true);
        echo "\" readonly=\"true\" type=\"text\" placeholder=\"\" name=\"country\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>About Company <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" name=\"company_description\" class=\"form-control\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_description", array()), "html", null, true);
        echo "</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Website <span class=\"required\"></span></label>
                                    <div class=\"register_error\">";
        // line 105
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "website", array());
        echo "</div>
                                    <input placeholder=\"Website URL\" name=\"website_url\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "website_url", array()), "html", null, true);
        echo "\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Facebook <span class=\"required\"></span></label>
                                    <div class=\"register_error\">";
        // line 112
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "facebook", array());
        echo "</div>
                                    <input placeholder=\"Facebook URL\" name=\"facebook_url\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "facebook_url", array()), "html", null, true);
        echo "\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Twitter <span class=\"required\"></span></label>
                                    <div class=\"register_error\">";
        // line 119
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "twitter", array());
        echo "</div>
                                    <input placeholder=\"Twitter URL\" name=\"twitter_url\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "twitter_url", array()), "html", null, true);
        echo "\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>LinkedIn <span class=\"required\"></span></label>
                                    <div class=\"register_error\">";
        // line 126
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "linkedin", array());
        echo "</div>
                                    <input placeholder=\"LinkedIn URL\" name=\"linkedin_url\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "linkedin_url", array()), "html", null, true);
        echo "\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Google Pluse <span class=\"required\"></span></label>
                                    <div class=\"register_error\">";
        // line 133
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "googleplus", array());
        echo "</div>
                                    <input placeholder=\"Profile URL\" name=\"googleplus_url\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "googleplus_url", array()), "html", null, true);
        echo "\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                 <input class=\"btn btn-default pull-right\" value=\"Save Profile\" name=\"edit\" type=\"submit\"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    // line 150
    public function block_footer($context, array $blocks = array())
    {
        // line 151
        echo "    ";
        $this->loadTemplate("employer_edit.twig", "employer_edit.twig", 151, "8544645")->display($context);
    }

    public function getTemplateName()
    {
        return "employer_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 151,  273 => 150,  254 => 134,  250 => 133,  241 => 127,  237 => 126,  228 => 120,  224 => 119,  215 => 113,  211 => 112,  202 => 106,  198 => 105,  189 => 99,  180 => 93,  171 => 87,  162 => 81,  153 => 75,  144 => 69,  135 => 63,  116 => 47,  104 => 40,  98 => 39,  92 => 38,  86 => 37,  80 => 36,  70 => 29,  61 => 23,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

{% block navigation %}
    {% include 'employer_navigation.twig' %}
{% endblock %}

{% block content %}

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"profile-edit row\">
                        <form action=\"/dashboard/profile_edit\" method=\"post\" enctype=\"multipart/form-data\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Company Name: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"company_name\" value=\"{{ user.company_name }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Trade <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"e.g. railway,civil\" name=\"type_of_business\" value=\"{{ user.type_of_business }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\"> 
                                    <label>No. of Employees <span class=\"required\"></span></label>
                                    <select name=\"employees\" class=\"form-control\">
                                        <option value=\"0-10\" {% if user.employees == \"0-10\" %} selected {% endif %}>0-10</option>
                                        <option value=\"10-30\" {% if user.employees == \"10-30\" %} selected {% endif %}>10-30</option>
                                        <option value=\"30-50\" {% if user.employees == \"30-50\" %} selected {% endif %}>30-50</option>
                                        <option value=\"50-100\" {% if user.employees == \"50-100\" %} selected {% endif %}>50-100</option>
                                        <option value=\"100+\" {% if user.employees == \"100+\" %} selected {% endif %}>100+</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"input-group image-preview form-group\">
                                    <label>Profile Image: <span class=\"required\">*</span></label>
                                    <input type=\"text\" placeholder=\"Upload Profile Image\" class=\"form-control image-preview-filename\" disabled=\"disabled\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error_image|raw }}\">
                                    <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                                        <span class=\"glyphicon glyphicon-remove\"></span> Clear
                                    </button>
                                    <div class=\"btn btn-default image-preview-input\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span>
                                        <span class=\"image-preview-input-title\">Browse</span>
                                        <input type=\"file\" accept=\"file_extension\" name=\"logo\" />
                                    </div>
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"first line of address\" name=\"address\" value=\"{{ user.address }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Telephone: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"phone\" value=\"{{ user.phone }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>City: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"e.g. london\" name=\"city\" value=\"{{ user.city }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Post Code <span class=\"required\"></span></label>
                                    <input value=\"{{ user.postcode}}\" placeholder=\"e.g. E16 1DN\" class=\"form-control\" type=\"text\" name=\"postcode\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>County: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"e.g. middlesex\" name=\"provience\" value=\"{{ user.provience }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Country: <span class=\"required\"></span></label>
                                    <input value=\"{{ user.country|default('United Kingdom') }}\" readonly=\"true\" type=\"text\" placeholder=\"\" name=\"country\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>About Company <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" name=\"company_description\" class=\"form-control\">{{ user.company_description }}</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Website <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.website|raw }}</div>
                                    <input placeholder=\"Website URL\" name=\"website_url\" value=\"{{ user.website_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Facebook <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.facebook|raw }}</div>
                                    <input placeholder=\"Facebook URL\" name=\"facebook_url\" value=\"{{ user.facebook_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Twitter <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.twitter|raw }}</div>
                                    <input placeholder=\"Twitter URL\" name=\"twitter_url\" value=\"{{ user.twitter_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>LinkedIn <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.linkedin|raw }}</div>
                                    <input placeholder=\"LinkedIn URL\" name=\"linkedin_url\" value=\"{{ user.linkedin_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Google Pluse <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.googleplus|raw }}</div>
                                    <input placeholder=\"Profile URL\" name=\"googleplus_url\" value=\"{{ user.googleplus_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                 <input class=\"btn btn-default pull-right\" value=\"Save Profile\" name=\"edit\" type=\"submit\"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}

{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\">
                jQuery(document).ready(function(){
                   {% if error_image %}
                        jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                   {% endif %}
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "employer_edit.twig", "/home/getwork/public_html/application/views/employer_edit.twig");
    }
}


/* employer_edit.twig */
class __TwigTemplate_a9420f39cc98d27aa6a5c6fd97af57457afd84ebe753ccec5292eaac99959e7a_8544645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "employer_edit.twig", 151);
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

    // line 152
    public function block_customScripts($context, array $blocks = array())
    {
        // line 153
        echo "            <script type=\"text/javascript\">
                jQuery(document).ready(function(){
                   ";
        // line 155
        if ((isset($context["error_image"]) ? $context["error_image"] : null)) {
            // line 156
            echo "                        jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                   ";
        }
        // line 158
        echo "                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "employer_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 158,  504 => 156,  502 => 155,  498 => 153,  495 => 152,  276 => 151,  273 => 150,  254 => 134,  250 => 133,  241 => 127,  237 => 126,  228 => 120,  224 => 119,  215 => 113,  211 => 112,  202 => 106,  198 => 105,  189 => 99,  180 => 93,  171 => 87,  162 => 81,  153 => 75,  144 => 69,  135 => 63,  116 => 47,  104 => 40,  98 => 39,  92 => 38,  86 => 37,  80 => 36,  70 => 29,  61 => 23,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

{% block navigation %}
    {% include 'employer_navigation.twig' %}
{% endblock %}

{% block content %}

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"profile-edit row\">
                        <form action=\"/dashboard/profile_edit\" method=\"post\" enctype=\"multipart/form-data\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Company Name: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"company_name\" value=\"{{ user.company_name }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Trade <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"e.g. railway,civil\" name=\"type_of_business\" value=\"{{ user.type_of_business }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\"> 
                                    <label>No. of Employees <span class=\"required\"></span></label>
                                    <select name=\"employees\" class=\"form-control\">
                                        <option value=\"0-10\" {% if user.employees == \"0-10\" %} selected {% endif %}>0-10</option>
                                        <option value=\"10-30\" {% if user.employees == \"10-30\" %} selected {% endif %}>10-30</option>
                                        <option value=\"30-50\" {% if user.employees == \"30-50\" %} selected {% endif %}>30-50</option>
                                        <option value=\"50-100\" {% if user.employees == \"50-100\" %} selected {% endif %}>50-100</option>
                                        <option value=\"100+\" {% if user.employees == \"100+\" %} selected {% endif %}>100+</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"input-group image-preview form-group\">
                                    <label>Profile Image: <span class=\"required\">*</span></label>
                                    <input type=\"text\" placeholder=\"Upload Profile Image\" class=\"form-control image-preview-filename\" disabled=\"disabled\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error_image|raw }}\">
                                    <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                                        <span class=\"glyphicon glyphicon-remove\"></span> Clear
                                    </button>
                                    <div class=\"btn btn-default image-preview-input\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span>
                                        <span class=\"image-preview-input-title\">Browse</span>
                                        <input type=\"file\" accept=\"file_extension\" name=\"logo\" />
                                    </div>
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"first line of address\" name=\"address\" value=\"{{ user.address }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Telephone: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"phone\" value=\"{{ user.phone }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>City: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"e.g. london\" name=\"city\" value=\"{{ user.city }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Post Code <span class=\"required\"></span></label>
                                    <input value=\"{{ user.postcode}}\" placeholder=\"e.g. E16 1DN\" class=\"form-control\" type=\"text\" name=\"postcode\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>County: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"e.g. middlesex\" name=\"provience\" value=\"{{ user.provience }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Country: <span class=\"required\"></span></label>
                                    <input value=\"{{ user.country|default('United Kingdom') }}\" readonly=\"true\" type=\"text\" placeholder=\"\" name=\"country\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>About Company <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" name=\"company_description\" class=\"form-control\">{{ user.company_description }}</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Website <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.website|raw }}</div>
                                    <input placeholder=\"Website URL\" name=\"website_url\" value=\"{{ user.website_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Facebook <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.facebook|raw }}</div>
                                    <input placeholder=\"Facebook URL\" name=\"facebook_url\" value=\"{{ user.facebook_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Twitter <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.twitter|raw }}</div>
                                    <input placeholder=\"Twitter URL\" name=\"twitter_url\" value=\"{{ user.twitter_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>LinkedIn <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.linkedin|raw }}</div>
                                    <input placeholder=\"LinkedIn URL\" name=\"linkedin_url\" value=\"{{ user.linkedin_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Google Pluse <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.googleplus|raw }}</div>
                                    <input placeholder=\"Profile URL\" name=\"googleplus_url\" value=\"{{ user.googleplus_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                 <input class=\"btn btn-default pull-right\" value=\"Save Profile\" name=\"edit\" type=\"submit\"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}

{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\">
                jQuery(document).ready(function(){
                   {% if error_image %}
                        jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                   {% endif %}
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "employer_edit.twig", "/home/getwork/public_html/application/views/employer_edit.twig");
    }
}
