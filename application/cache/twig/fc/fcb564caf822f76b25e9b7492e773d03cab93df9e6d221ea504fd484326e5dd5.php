<?php

/* forgotpwd.twig */
class __TwigTemplate_d595006f54ea105adb00fbacc8d9124504d256fea78c8dd0fd1bdae87b00acdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "forgotpwd.twig", 1);
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
<section class=\"login-page light-blue\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container width-100\">
                    <form name=\"forgotpwd\">
                        <div class=\"loginbox\">
                            <div class=\"loginbox-title\">Forgotten password</div>
                            <p class=\"pull-left\">Enter your email address and we will send you an email explaining how to set up a new password</p>
                            <div class=\"clearfix\"></div>
                            <div class=\"form-group\">
                                <label>Email <span class=\"required\"></span></label>
                                <input placeholder=\"Enter your register email address\" class=\"form-control\" name=\"email\" type=\"email\">
                            </div>
                            <div class=\"loginbox-submit\">
                                <input onclick=\"window.common.sendReminder()\" class=\"btn btn-default pull-right\" value=\"Send reminder\" name=\"send\" type=\"button\">
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
        return "forgotpwd.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
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

<section class=\"login-page light-blue\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container width-100\">
                    <form name=\"forgotpwd\">
                        <div class=\"loginbox\">
                            <div class=\"loginbox-title\">Forgotten password</div>
                            <p class=\"pull-left\">Enter your email address and we will send you an email explaining how to set up a new password</p>
                            <div class=\"clearfix\"></div>
                            <div class=\"form-group\">
                                <label>Email <span class=\"required\"></span></label>
                                <input placeholder=\"Enter your register email address\" class=\"form-control\" name=\"email\" type=\"email\">
                            </div>
                            <div class=\"loginbox-submit\">
                                <input onclick=\"window.common.sendReminder()\" class=\"btn btn-default pull-right\" value=\"Send reminder\" name=\"send\" type=\"button\">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock content %}", "forgotpwd.twig", "/home/frescihp/public_html/getwork/application/views/forgotpwd.twig");
    }
}
