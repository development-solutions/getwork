<?php

/* reminder_success.twig */
class __TwigTemplate_3c2e8f07273d884cd1d522573a4884d41ccd1583181f9620bbdfaeb681356c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"loginbox\">
    <div class=\"loginbox-title\">";
        // line 2
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</div>
    <p><a href=\"/login\">Click to login</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "reminder_success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"loginbox\">
    <div class=\"loginbox-title\">{{ message|raw }}</div>
    <p><a href=\"/login\">Click to login</a></p>
</div>", "reminder_success.twig", "/home/getwork/public_html/application/views/reminder_success.twig");
    }
}
