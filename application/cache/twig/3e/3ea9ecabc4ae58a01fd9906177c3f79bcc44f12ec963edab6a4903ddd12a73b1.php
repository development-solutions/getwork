<?php

/* reset_success.twig */
class __TwigTemplate_7710a251308271393599ced07b524bea41bce29fdbe86053dc70a6bc74310a0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "reset_success.twig", 1);
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
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title\">
                        <h1>";
        // line 11
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</h1>
                        <p><a href=\"/login/relogin\">Click to login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 19
        if (((isset($context["message"]) ? $context["message"] : null) != (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 20
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
            // line 29
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
        return "reset_success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 29,  53 => 20,  51 => 19,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
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
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title\">
                        <h1>{{ message|raw }}</h1>
                        <p><a href=\"/login/relogin\">Click to login</a></p>
                    </div>
                </div>
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
{% endblock %}", "reset_success.twig", "/home/getwork/public_html/application/views/reset_success.twig");
    }
}
