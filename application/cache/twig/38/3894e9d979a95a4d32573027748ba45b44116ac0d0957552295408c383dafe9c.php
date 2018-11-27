<?php

/* /admin/dashboard.twig */
class __TwigTemplate_6dd688f00ac7ab85bc24b4ebe7514928f70a24b1697b428ac4b654331a2e7749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "/admin/dashboard.twig", 1);
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
        $this->loadTemplate("admin/admin_navigation.twig", "/admin/dashboard.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                ";
        // line 12
        $this->loadTemplate("admin/admin_sidebar.twig", "/admin/dashboard.twig", 12)->display($context);
        // line 13
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"job-short-detail\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Profile detail</p>
                        </div>
                        <dl>
                            <dt>First Name</dt>
                            <dd> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
        echo " </dd>

                            <dt>Last Name:</dt>
                            <dd> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()), "html", null, true);
        echo " </dd>

                            <dt>Email:</dt>
                            <dd>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo " </dd>
                        </dl>
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
        return "/admin/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  63 => 23,  57 => 20,  48 => 13,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
    {% include 'admin/admin_navigation.twig' %}
{% endblock %}

{% block content %}
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                {% include 'admin/admin_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"job-short-detail\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Profile detail</p>
                        </div>
                        <dl>
                            <dt>First Name</dt>
                            <dd> {{ user.first_name }} </dd>

                            <dt>Last Name:</dt>
                            <dd> {{ user.last_name }} </dd>

                            <dt>Email:</dt>
                            <dd>{{ user.email }} </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "/admin/dashboard.twig", "/home/getwork/public_html/application/views/admin/dashboard.twig");
    }
}
