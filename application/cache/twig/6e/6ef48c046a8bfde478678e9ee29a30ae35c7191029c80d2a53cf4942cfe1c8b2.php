<?php

/* edit_applicant.twig */
class __TwigTemplate_851f087fca716b4264939b8cb2fd2a09ab5fc9e292bb69d0f06ef3127ab5df48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "edit_applicant.twig", 1);
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
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"profile-card\">
                        <div class=\"banner\">
                            <img src=\"../../images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"../../images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                        </div>
                        <div class=\"card-body\">
                            <h3>";
        // line 18
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "first_name", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "last_name", array())), "html", null, true);
        echo "</h3>
                            <span class=\"title\">A web Designer</span>
                        </div>
                        <ul class=\"social-network social-circle onwhite\">
                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                    ";
        // line 28
        $this->loadTemplate("applicant_sidebar.twig", "edit_applicant.twig", 28)->display($context);
        // line 29
        echo "                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <form action=\"/dashboard/edit_profile\" method=\"post\">
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>First Name <span class=\"required\">*</span></label>
                                        <div class=\"register_error\">";
        // line 40
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_fname", array());
        echo "</div>
                                        <input value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "first_name", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"first_name\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Last Name <span class=\"required\">*</span></label>
                                        <div class=\"register_error\">";
        // line 47
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_lname", array());
        echo "</div>
                                        <input value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "last_name", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_name\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Date Of Birth <span class=\"required\"></span></label>
                                        <input value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "d_o_b", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"d_o_b\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Email <span class=\"required\">*</span></label>
                                        <div class=\"register_error\">";
        // line 60
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_email", array());
        echo "</div>
                                        <input value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "email", array()), "html", null, true);
        echo "\" readonly placeholder=\"\" class=\"form-control\" type=\"email\" name=\"email\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Phone <span class=\"required\"></span></label>
                                        <input value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "phone", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"phone\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Last Education <span class=\"required\"></span></label>
                                        <input value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "last_education", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_education\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Address <span class=\"required\"></span></label>
                                        <input value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "address", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"address\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>About yourSelf <span class=\"required\"></span></label>
                                        <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"about_me\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "about_me", array()), "html", null, true);
        echo "</textarea>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"Save Profile\" name=\"edit\" />
                                </div>
                            </form>
                        </div>
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
        return "edit_applicant.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 85,  143 => 79,  134 => 73,  125 => 67,  116 => 61,  112 => 60,  103 => 54,  94 => 48,  90 => 47,  81 => 41,  77 => 40,  64 => 29,  62 => 28,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
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

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"profile-card\">
                        <div class=\"banner\">
                            <img src=\"../../images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"../../images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                        </div>
                        <div class=\"card-body\">
                            <h3>{{details.first_name|capitalize}} {{details.last_name|capitalize}}</h3>
                            <span class=\"title\">A web Designer</span>
                        </div>
                        <ul class=\"social-network social-circle onwhite\">
                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                    {% include 'applicant_sidebar.twig' %}
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <form action=\"/dashboard/edit_profile\" method=\"post\">
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>First Name <span class=\"required\">*</span></label>
                                        <div class=\"register_error\">{{ errors.error_fname|raw }}</div>
                                        <input value=\"{{ details.first_name}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"first_name\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Last Name <span class=\"required\">*</span></label>
                                        <div class=\"register_error\">{{ errors.error_lname|raw }}</div>
                                        <input value=\"{{ details.last_name}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_name\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Date Of Birth <span class=\"required\"></span></label>
                                        <input value=\"{{ details.d_o_b}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"d_o_b\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Email <span class=\"required\">*</span></label>
                                        <div class=\"register_error\">{{ errors.error_email|raw }}</div>
                                        <input value=\"{{ details.email}}\" readonly placeholder=\"\" class=\"form-control\" type=\"email\" name=\"email\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Phone <span class=\"required\"></span></label>
                                        <input value=\"{{ details.phone}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"phone\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Last Education <span class=\"required\"></span></label>
                                        <input value=\"{{ details.last_education}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_education\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Address <span class=\"required\"></span></label>
                                        <input value=\"{{ details.address}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"address\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>About yourSelf <span class=\"required\"></span></label>
                                        <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"about_me\">{{ details.about_me}}</textarea>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"Save Profile\" name=\"edit\" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "edit_applicant.twig", "/home/frescihp/public_html/getwork/application/views/edit_applicant.twig");
    }
}
