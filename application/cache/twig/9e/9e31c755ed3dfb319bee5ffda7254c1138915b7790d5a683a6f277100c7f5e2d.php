<?php

/* index.twig */
class __TwigTemplate_1ec48b6d96c3b0eab6b7c461e00a3a22b62ad783a91f1b0d4097f5df90eef3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metatags' => array($this, 'block_metatags'),
            'title' => array($this, 'block_title'),
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
\t";
        // line 4
        $this->displayBlock('metatags', $context, $blocks);
        // line 13
        echo "\t";
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "    ";
        $this->loadTemplate("header.twig", "index.twig", 16)->display($context);
        // line 17
        echo "</head>
<body>
<div class=\"page\">
\t";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 23
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 27
        echo "</div>
</body>
</html>";
    }

    // line 4
    public function block_metatags($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
\t\t<!--[if IE]>
\t\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<![endif]-->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"Find latest Construction Jobs or Railway Jobs in UK online on Getwork.construction. View and Apply now for best desired Construction job free.\">
\t\t<meta name=\"author\" content=\"ScriptsBundle\">
\t";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo "\t\t<title>Getwork - Construction Jobs in UK | Railway jobs in UK</title>
\t";
    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        // line 21
        echo "    \t";
        $this->loadTemplate((((array_key_exists("navbar", $context)) ? (_twig_default_filter((isset($context["navbar"]) ? $context["navbar"] : null), "navigation")) : ("navigation")) . ".twig"), "index.twig", 21)->display($context);
        // line 22
        echo "\t";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        echo "    \t";
        $this->loadTemplate("footer.twig", "index.twig", 25)->display($context);
        // line 26
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
        return array (  100 => 26,  97 => 25,  94 => 24,  88 => 23,  84 => 22,  81 => 21,  78 => 20,  73 => 14,  70 => 13,  59 => 5,  56 => 4,  50 => 27,  47 => 24,  44 => 23,  42 => 20,  37 => 17,  34 => 16,  31 => 13,  29 => 4,  24 => 1,);
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
\t{% block metatags %}
\t\t<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
\t\t<!--[if IE]>
\t\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<![endif]-->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"Find latest Construction Jobs or Railway Jobs in UK online on Getwork.construction. View and Apply now for best desired Construction job free.\">
\t\t<meta name=\"author\" content=\"ScriptsBundle\">
\t{% endblock %}
\t{% block title %}
\t\t<title>Getwork - Construction Jobs in UK | Railway jobs in UK</title>
\t{% endblock %}
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
</html>", "index.twig", "/home/getwork/public_html/application/views/index.twig");
    }
}
