<?php

/* login.twig */
class __TwigTemplate_065dc11bd3e58da6f1ac40670c7ed59cb42540394bb498b17ec616aaa0c5fe50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "login.twig", 1);
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
<section class=\"login-page light-blue\" style=\"margin-bottom: 609px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container\">
                    <form action=\"/login\" method=\"post\">
                        <div class=\"loginbox\">                            
                            <div class=\"loginbox-title\">sign in using social accounts</div>
                            <ul class=\"social-network social-circle onwhite\">
                                <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                                <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                            </ul>
                            <div class=\"loginbox-or\">
                                <div class=\"or-line\"></div>
                                <div class=\"or\">OR</div>
                            </div>
                            <div class=\"login-error\"><p>";
        // line 23
        echo (isset($context["login_error"]) ? $context["login_error"] : null);
        echo "</p></div>
                            <div class=\"form-group\">
                                <label>Email: <span class=\"required\">*</span></label>
                                <input placeholder=\"\" class=\"form-control\" name=\"email\" type=\"email\">
                            </div>
                            <div class=\"form-group\">
                                <label>Password: <span class=\"required\">*</span></label>
                                <input placeholder=\"\" class=\"form-control\" name=\"password\" type=\"password\">
                            </div>
                            <div class=\"loginbox-forgot\">
                                <a href=\"\">Forgot Password?</a>
                            </div>
                            <div class=\"loginbox-submit\">
                                <input class=\"btn btn-default btn-block\" value=\"Login\" name=\"login\" type=\"submit\">
                            </div>
                            <div class=\"loginbox-signup\">
                                <a href=\"/register\">Sign Up With Email</a>
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
        return array (  52 => 23,  31 => 4,  28 => 3,  11 => 1,);
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

<section class=\"login-page light-blue\" style=\"margin-bottom: 609px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container\">
                    <form action=\"/login\" method=\"post\">
                        <div class=\"loginbox\">                            
                            <div class=\"loginbox-title\">sign in using social accounts</div>
                            <ul class=\"social-network social-circle onwhite\">
                                <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                                <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                            </ul>
                            <div class=\"loginbox-or\">
                                <div class=\"or-line\"></div>
                                <div class=\"or\">OR</div>
                            </div>
                            <div class=\"login-error\"><p>{{ login_error|raw }}</p></div>
                            <div class=\"form-group\">
                                <label>Email: <span class=\"required\">*</span></label>
                                <input placeholder=\"\" class=\"form-control\" name=\"email\" type=\"email\">
                            </div>
                            <div class=\"form-group\">
                                <label>Password: <span class=\"required\">*</span></label>
                                <input placeholder=\"\" class=\"form-control\" name=\"password\" type=\"password\">
                            </div>
                            <div class=\"loginbox-forgot\">
                                <a href=\"\">Forgot Password?</a>
                            </div>
                            <div class=\"loginbox-submit\">
                                <input class=\"btn btn-default btn-block\" value=\"Login\" name=\"login\" type=\"submit\">
                            </div>
                            <div class=\"loginbox-signup\">
                                <a href=\"/register\">Sign Up With Email</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock content %}", "login.twig", "/home/frescihp/public_html/getwork/application/views/login.twig");
    }
}
