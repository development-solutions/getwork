<?php

/* /admin/candidates.twig */
class __TwigTemplate_76c1029fabd948bafcf050103eafacdfce312f45bddff2a49409994f54cc620f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "/admin/candidates.twig", 1);
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
        $this->loadTemplate("admin/admin_navigation.twig", "/admin/candidates.twig", 4)->display($context);
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
        $this->loadTemplate("admin/admin_sidebar.twig", "/admin/candidates.twig", 12)->display($context);
        // line 13
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"follower-section\">
                        <div class=\"col-md-12 col-sm-126 col-xs-12\">
                            <div class=\"\" id=\"followers\">
                                <ul class=\"list-group list-group-dividered list-group-full\">
                                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidates"]) ? $context["candidates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 22
            echo "                                        <li class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <a class=\"avatar avatar-online\" href=\"javascript:void(0)\">
                                                        <img src=\"/uploads/";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($context["candidate"], "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["candidate"], "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\">
                                                        ";
            // line 28
            echo "                                                    </a>
                                                </div>
                                                <div class=\"media-body\">
                                                    <div class=\"pull-right\">
                                                        <button type=\"button\" class=\"btn btn-default btn-sm\">Detail</button>
                                                    </div>
                                                    <div><a class=\"name\" href=\"javascript:void(0)\">";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($context["candidate"], "first_name", array()) . " ") . $this->getAttribute($context["candidate"], "last_name", array())), "html", null, true);
            echo "</a></div>
                                                    <small>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "email", array()), "html", null, true);
            echo "</small>
                                                </div>
                                            </div>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                </ul>
                            </div>
                        </div>
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
        return "/admin/candidates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 40,  84 => 35,  80 => 34,  72 => 28,  68 => 26,  62 => 22,  58 => 21,  48 => 13,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"follower-section\">
                        <div class=\"col-md-12 col-sm-126 col-xs-12\">
                            <div class=\"\" id=\"followers\">
                                <ul class=\"list-group list-group-dividered list-group-full\">
                                    {% for candidate in candidates %}
                                        <li class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <a class=\"avatar avatar-online\" href=\"javascript:void(0)\">
                                                        <img src=\"/uploads/{{ candidate.profile_image|default('profile.jpg') }}\" class=\"img-responsive\" alt=\"\">
                                                        {# <i></i> #}
                                                    </a>
                                                </div>
                                                <div class=\"media-body\">
                                                    <div class=\"pull-right\">
                                                        <button type=\"button\" class=\"btn btn-default btn-sm\">Detail</button>
                                                    </div>
                                                    <div><a class=\"name\" href=\"javascript:void(0)\">{{ candidate.first_name~\" \"~candidate.last_name}}</a></div>
                                                    <small>{{ candidate.email}}</small>
                                                </div>
                                            </div>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "/admin/candidates.twig", "/home/getwork/public_html/application/views/admin/candidates.twig");
    }
}
