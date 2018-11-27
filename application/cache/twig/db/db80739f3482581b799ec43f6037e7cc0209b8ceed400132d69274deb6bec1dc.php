<?php

/* /admin/employers.twig */
class __TwigTemplate_4a551257942f939333d3c6372c2453b8bcc60db22393294b7de4ff84b58efccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "/admin/employers.twig", 1);
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
        $this->loadTemplate("admin/admin_navigation.twig", "/admin/employers.twig", 4)->display($context);
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
        $this->loadTemplate("admin/admin_sidebar.twig", "/admin/employers.twig", 12)->display($context);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["employers"]) ? $context["employers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["employer"]) {
            // line 22
            echo "                                        <li class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <a class=\"avatar avatar-online\" href=\"javascript:void(0)\">
                                                        <img src=\"/uploads/";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($context["employer"], "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["employer"], "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\">
                                                        ";
            // line 28
            echo "                                                    </a>
                                                </div>
                                                <div class=\"media-body\">
                                                    <div class=\"pull-right\" style=\"margin-left:10px\">
                                                        <a href=\"javascript:void(0)\" class=\"btn btn-default btn-sm\">Details</a>
                                                    </div>
                                                    ";
            // line 34
            if ( !$this->getAttribute($context["employer"], "verify", array())) {
                // line 35
                echo "                                                        <div class=\"pull-right\">
                                                            <a href=\"/admin/verifyUser/";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["employer"], "user_id_fk", array()), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\">Verify</a>
                                                        </div>
                                                    ";
            }
            // line 39
            echo "                                                    
                                                    <div><a class=\"name\" href=\"javascript:void(0)\">";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($context["employer"], "first_name", array()) . " ") . $this->getAttribute($context["employer"], "last_name", array())), "html", null, true);
            echo "</a></div>
                                                    <small>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["employer"], "email", array()), "html", null, true);
            echo "</small>
                                                </div>
                                            </div>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return "/admin/employers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 46,  98 => 41,  94 => 40,  91 => 39,  85 => 36,  82 => 35,  80 => 34,  72 => 28,  68 => 26,  62 => 22,  58 => 21,  48 => 13,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                                    {% for employer in employers %}
                                        <li class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <a class=\"avatar avatar-online\" href=\"javascript:void(0)\">
                                                        <img src=\"/uploads/{{ employer.profile_image|default('profile.jpg') }}\" class=\"img-responsive\" alt=\"\">
                                                        {# <i></i> #}
                                                    </a>
                                                </div>
                                                <div class=\"media-body\">
                                                    <div class=\"pull-right\" style=\"margin-left:10px\">
                                                        <a href=\"javascript:void(0)\" class=\"btn btn-default btn-sm\">Details</a>
                                                    </div>
                                                    {% if not employer.verify %}
                                                        <div class=\"pull-right\">
                                                            <a href=\"/admin/verifyUser/{{ employer.user_id_fk}}\" class=\"btn btn-default btn-sm\">Verify</a>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    <div><a class=\"name\" href=\"javascript:void(0)\">{{ employer.first_name~\" \"~employer.last_name}}</a></div>
                                                    <small>{{ employer.email}}</small>
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
{% endblock %}", "/admin/employers.twig", "/home/getwork/public_html/application/views/admin/employers.twig");
    }
}
