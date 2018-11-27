<?php

/* settings.twig */
class __TwigTemplate_403ee3d2211d2e4b6922e105e80ce22d9aff202e09385166537b3a71c5d82b2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "settings.twig", 1);
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
        $this->loadTemplate("applicant_navigation.twig", "settings.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"profile-card\">
                        <div class=\"banner\">
                            <img src=\"/images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"/images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                        </div>
                        <div class=\"card-body\">
                            <h3>";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array())), "html", null, true);
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
        // line 32
        $this->loadTemplate("applicant_sidebar.twig", "settings.twig", 32)->display($context);
        // line 33
        echo "                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Reset Password</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <form method=\"post\" action=\"/profile/forgotpass\">
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Email <span class=\"required\">*</span></label>
                                        <input type=\"email\" name=\"email\" placeholder=\"\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"Get Reset Email\" />
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
        return "settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 33,  71 => 32,  56 => 22,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
    {% include 'applicant_navigation.twig' %}
{% endblock %}

{% block content %}

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"profile-card\">
                        <div class=\"banner\">
                            <img src=\"/images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"/images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                        </div>
                        <div class=\"card-body\">
                            <h3>{{user.first_name|capitalize}} {{user.last_name|capitalize}}</h3>
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
                        <p class=\"title\">Reset Password</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <form method=\"post\" action=\"/profile/forgotpass\">
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Email <span class=\"required\">*</span></label>
                                        <input type=\"email\" name=\"email\" placeholder=\"\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"Get Reset Email\" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "settings.twig", "/home/frescihp/public_html/getwork/application/views/settings.twig");
    }
}
