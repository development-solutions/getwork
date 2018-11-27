<?php

/* reset_password.twig */
class __TwigTemplate_909f45edb7b06bebb0faff8e196b4271edc303c43aacb84d887b37e2b2e7388e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "reset_password.twig", 1);
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
                <div class=\"col-md-3 col-sm-3 col-xs-12\"></div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Rest Password</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <form method=\"post\" action=\"/home/resetPassword/";
        // line 16
        echo (isset($context["qs"]) ? $context["qs"] : null);
        echo "\">
                                <input type=\"hidden\" name=\"qs\" value=\"";
        // line 17
        echo (isset($context["qs"]) ? $context["qs"] : null);
        echo "\" />
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>New Password <span class=\"required\"></span></label>
                                        <div class=\"register_error\">";
        // line 21
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "new_password", array());
        echo "</div>
                                        <input type=\"password\" name=\"new_password\" placeholder=\"\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Confirm Password <span class=\"required\"></span></label>
                                        <div class=\"register_error\">";
        // line 28
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "con_password", array());
        echo "</div>
                                        <input type=\"password\" name=\"con_password\" placeholder=\"\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <input class=\"btn btn-default pull-right\" name=\"update\" type=\"submit\" value=\"Update Password\" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12\"></div>
            </div>
        </div>
    </div>
</section>
";
        // line 44
        if (((isset($context["message"]) ? $context["message"] : null) != (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 45
            echo "<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.";
            // line 54
            echo (isset($context["alert"]) ? $context["alert"] : null);
            echo "(\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null));
            echo "\",{timeOut: 5000});
    },200);
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "reset_password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 54,  87 => 45,  85 => 44,  66 => 28,  56 => 21,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
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
                <div class=\"col-md-3 col-sm-3 col-xs-12\"></div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Rest Password</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <form method=\"post\" action=\"/home/resetPassword/{{ qs|raw }}\">
                                <input type=\"hidden\" name=\"qs\" value=\"{{ qs|raw }}\" />
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>New Password <span class=\"required\"></span></label>
                                        <div class=\"register_error\">{{ errors.new_password|raw }}</div>
                                        <input type=\"password\" name=\"new_password\" placeholder=\"\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Confirm Password <span class=\"required\"></span></label>
                                        <div class=\"register_error\">{{ errors.con_password|raw }}</div>
                                        <input type=\"password\" name=\"con_password\" placeholder=\"\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <input class=\"btn btn-default pull-right\" name=\"update\" type=\"submit\" value=\"Update Password\" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12\"></div>
            </div>
        </div>
    </div>
</section>
{% if message != empty %}
<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.{{ alert|raw }}(\"{{ message|e }}\",{timeOut: 5000});
    },200);
</script>
{% endif %}
{% endblock %}", "reset_password.twig", "/home/frescihp/public_html/getwork/application/views/reset_password.twig");
    }
}
