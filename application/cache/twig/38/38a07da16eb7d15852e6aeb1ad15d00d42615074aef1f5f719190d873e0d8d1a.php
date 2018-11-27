<?php

/* index.twig */
class __TwigTemplate_ddbb7ea80df192eccac0840eeb51aa1ba959d5893bf2964f6ccb5604de5367b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->loadTemplate("header.twig", "index.twig", 4)->display($context);
        // line 5
        echo "</head>
<body>
<div class=\"page\">
\t";
        // line 8
        $this->displayBlock('navigation', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 15
        echo "</div>
</body>
</html>";
    }

    // line 8
    public function block_navigation($context, array $blocks = array())
    {
        // line 9
        echo "    \t";
        $this->loadTemplate((((array_key_exists("navbar", $context)) ? (_twig_default_filter((isset($context["navbar"]) ? $context["navbar"] : null), "navigation")) : ("navigation")) . ".twig"), "index.twig", 9)->display($context);
        // line 10
        echo "\t";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
        // line 13
        echo "    \t";
        $this->loadTemplate("footer.twig", "index.twig", 13)->display($context);
        // line 14
        echo "    ";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  67 => 13,  64 => 12,  58 => 11,  54 => 10,  51 => 9,  48 => 8,  42 => 15,  39 => 12,  36 => 11,  34 => 8,  29 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% include 'header.twig' %}
</head>
<body>
<div class=\"page\">
\t{% block navigation %}
    \t{% include navbar|default(\"navigation\")~'.twig' %}
\t{% endblock %}
    {% block content %} {% endblock %}
    {% block footer %}
    \t{% include 'footer.twig' %}
    {% endblock footer %}
</div>
</body>
</html>", "index.twig", "/home/frescihp/public_html/getwork/application/views/index.twig");
    }
}
