<?php

/* login.twig */
class __TwigTemplate_96ee8a73425ba210dcc550891ded82ab226632d30e31f95c4adde2d657f8df55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "login.twig", 1);
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
    <meta name=\"description\" content=\"At Getwork.construction, there are legitimate, Job openings. The world's biggest online Organisation where sagacious construction businesses & experts go to work!\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Online Get Work of Construction in London - Getwork.construction</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<section class=\"login-page light-blue\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container\">
                    <form action=\"/login\" method=\"post\">
                        <div class=\"loginbox\">                            
                            ";
        // line 34
        echo "                            <div class=\"loginbox-title\">Sign In</div>
                            <div class=\"login-error\"><p>";
        // line 35
        echo (isset($context["login_error"]) ? $context["login_error"] : null);
        echo "</p></div>
                            <div class=\"form-group\">
                                <label>Email address <span class=\"required\"></span></label>
                                <input placeholder=\"\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["c_email"]) ? $context["c_email"] : null), "html", null, true);
        echo "\" name=\"email\" type=\"email\">
                            </div>
                            <div class=\"form-group\">
                                <label>Password <span class=\"required\">*</span></label>
                                <input placeholder=\"\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["c_password"]) ? $context["c_password"] : null), "html", null, true);
        echo "\" name=\"password\" type=\"password\">
                            </div>
                            <div class=\"loginbox-forgot\">
                                <input name=\"remember\" type=\"checkbox\"> Remember me.
                            </div>
                            <div class=\"loginbox-forgot\">
                                <a href=\"/login/forgotpassword\">Forgotten Password?</a>
                            </div>
                            <div class=\"loginbox-submit\">
                                <input class=\"btn btn-default btn-block\" value=\"Login\" name=\"login\" type=\"submit\">
                            </div>
                            <div class=\"loginbox-signup\">
                                Don't have an account ?<a href=\"/register\"> Register now</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 42,  74 => 38,  68 => 35,  65 => 34,  55 => 15,  52 => 14,  47 => 12,  44 => 11,  33 => 3,  30 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"At Getwork.construction, there are legitimate, Job openings. The world's biggest online Organisation where sagacious construction businesses & experts go to work!\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Online Get Work of Construction in London - Getwork.construction</title>
{% endblock %}
{% block content %}

<section class=\"login-page light-blue\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container\">
                    <form action=\"/login\" method=\"post\">
                        <div class=\"loginbox\">                            
                            {# <div class=\"loginbox-title\">sign in using social accounts</div>
                            <ul class=\"social-network social-circle onwhite\">
                                <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                                <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                            </ul>
                            <div class=\"loginbox-or\">
                                <div class=\"or-line\"></div>
                                <div class=\"or\">OR</div>
                            </div> #}
                            <div class=\"loginbox-title\">Sign In</div>
                            <div class=\"login-error\"><p>{{ login_error|raw }}</p></div>
                            <div class=\"form-group\">
                                <label>Email address <span class=\"required\"></span></label>
                                <input placeholder=\"\" class=\"form-control\" value=\"{{ c_email }}\" name=\"email\" type=\"email\">
                            </div>
                            <div class=\"form-group\">
                                <label>Password <span class=\"required\">*</span></label>
                                <input placeholder=\"\" class=\"form-control\" value=\"{{ c_password }}\" name=\"password\" type=\"password\">
                            </div>
                            <div class=\"loginbox-forgot\">
                                <input name=\"remember\" type=\"checkbox\"> Remember me.
                            </div>
                            <div class=\"loginbox-forgot\">
                                <a href=\"/login/forgotpassword\">Forgotten Password?</a>
                            </div>
                            <div class=\"loginbox-submit\">
                                <input class=\"btn btn-default btn-block\" value=\"Login\" name=\"login\" type=\"submit\">
                            </div>
                            <div class=\"loginbox-signup\">
                                Don't have an account ?<a href=\"/register\"> Register now</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock content %}", "login.twig", "/home/getwork/public_html/application/views/login.twig");
    }
}
