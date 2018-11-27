<?php

/* employer_edit.twig */
class __TwigTemplate_5b5e494b0653d4cebcd4b4bbc6a9285a278aba85cd1e774baf2c3641be02fd51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "employer_edit.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
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
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"panel\">
                        <div class=\"dashboard-logo-sidebar\">
                            <img class=\"img-responsive center-block\" src=\"../../images/company/logo1.jpg\" alt=\"Image\">
                        </div>
                        <div class=\"text-center dashboard-logo-sidebar-title\">
                            <h4>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo "</h4>
                        </div>
                    </div>
                    ";
        // line 22
        $this->loadTemplate("employer_sidebar.twig", "employer_edit.twig", 22)->display($context);
        // line 23
        echo "                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"profile-edit row\">
                        <form action=\"/dashboard/profile_edit\" method=\"post\" enctype=\"multipart/form-data\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Industry: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"company_name\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Type of Business Entity <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"type_of_business\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "type_of_business", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>No. of Employees <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"employees\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "employees", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"input-group image-preview form-group\">
                                    <label>Profile Image: <span class=\"required\">*</span></label>
                                    <input type=\"text\" placeholder=\"Upload Profile Image\" class=\"form-control image-preview-filename\" disabled=\"disabled\">
                                    <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                                        <span class=\"glyphicon glyphicon-remove\"></span> Clear
                                    </button>
                                    <div class=\"btn btn-default image-preview-input\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span>
                                        <span class=\"image-preview-input-title\">Browse</span>
                                        <input type=\"file\" accept=\"file_extension\" name=\"profile_img\" />
                                    </div>
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"address\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Phone: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"phone\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>City: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"city\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Provience: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"provience\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Country: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"country\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array()), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>About Company <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" name=\"company_description\" class=\"form-control\">";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_description", array()), "html", null, true);
        echo "</textarea>
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
        return array (  161 => 97,  152 => 91,  143 => 85,  134 => 79,  125 => 73,  116 => 67,  91 => 45,  82 => 39,  73 => 33,  61 => 23,  59 => 22,  53 => 19,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"panel\">
                        <div class=\"dashboard-logo-sidebar\">
                            <img class=\"img-responsive center-block\" src=\"../../images/company/logo1.jpg\" alt=\"Image\">
                        </div>
                        <div class=\"text-center dashboard-logo-sidebar-title\">
                            <h4>{{ user.company_name }}</h4>
                        </div>
                    </div>
                    {% include 'employer_sidebar.twig' %}
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"profile-edit row\">
                        <form action=\"/dashboard/profile_edit\" method=\"post\" enctype=\"multipart/form-data\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Industry: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"company_name\" value=\"{{ user.company_name }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Type of Business Entity <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"type_of_business\" value=\"{{ user.type_of_business }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>No. of Employees <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"employees\" value=\"{{ user.employees }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"input-group image-preview form-group\">
                                    <label>Profile Image: <span class=\"required\">*</span></label>
                                    <input type=\"text\" placeholder=\"Upload Profile Image\" class=\"form-control image-preview-filename\" disabled=\"disabled\">
                                    <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                                        <span class=\"glyphicon glyphicon-remove\"></span> Clear
                                    </button>
                                    <div class=\"btn btn-default image-preview-input\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span>
                                        <span class=\"image-preview-input-title\">Browse</span>
                                        <input type=\"file\" accept=\"file_extension\" name=\"profile_img\" />
                                    </div>
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"address\" value=\"{{ user.address }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Phone: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"phone\" value=\"{{ user.phone }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>City: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"city\" value=\"{{ user.city }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Provience: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"provience\" value=\"{{ user.provience }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Country: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"\" name=\"country\" value=\"{{ user.country }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>About Company <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" name=\"company_description\" class=\"form-control\">{{ user.company_description }}</textarea>
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

{% endblock %}", "employer_edit.twig", "/home/frescihp/public_html/getwork/application/views/employer_edit.twig");
    }
}
