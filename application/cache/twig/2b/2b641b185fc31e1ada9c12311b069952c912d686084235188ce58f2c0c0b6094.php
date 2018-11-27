<?php

/* email_verify.twig */
class __TwigTemplate_d3e454ab0028d3b56f9a3d7b2db6c26151c5629b30b5d61d7dea4984bb9587fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "email_verify.twig", 1);
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
<section class=\"faqs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title\">
                        <h1>";
        // line 11
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</h1>
                        ";
        // line 12
        if ((isset($context["verified"]) ? $context["verified"] : null)) {
            // line 13
            echo "                            <p><a href=\"/login\">Click here to Login</a></p>
                        ";
        }
        // line 15
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "email_verify.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 13,  44 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
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

<section class=\"faqs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title\">
                        <h1>{{ message|raw }}</h1>
                        {% if verified %}
                            <p><a href=\"/login\">Click here to Login</a></p>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "email_verify.twig", "/home/getwork/public_html/application/views/email_verify.twig");
    }
}
