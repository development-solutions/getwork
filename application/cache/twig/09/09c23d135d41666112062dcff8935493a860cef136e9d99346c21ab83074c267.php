<?php

/* employer_followers.twig */
class __TwigTemplate_7e00b84c6432e40292a64b34a53b73ff1d1eb558535f127ff10de2c5f3a930c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "employer_followers.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "employer_followers.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                ";
        // line 13
        $this->loadTemplate("employer_sidebar.twig", "employer_followers.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Followers List</p>
                    </div>
                    <div class=\"follower-section\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"\" id=\"followers\">
                                <ul class=\"list-group list-group-dividered list-group-full\">
                                    ";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["followers"]) ? $context["followers"] : null)) == 0)) {
            // line 23
            echo "                                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                            <h4 class=\"search-result-text\">You have no followers yet.</h4>
                                        </div>
                                    ";
        }
        // line 27
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["followers"]) ? $context["followers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 28
            echo "                                        <li class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <a class=\"avatar avatar-online\" href=\"/home/profile/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()), "html", null, true);
            echo "\">
                                                        <img src=\"/uploads/";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute($context["candidate"], "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["candidate"], "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"media-body\">
                                                    <div class=\"pull-right\">
                                                        <a href=\"/home/profile/";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-default btn-sm\">View Profile</button></a>
                                                    </div>
                                                    <div><a class=\"name\" href=\"/home/profile/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["candidate"], "first_name", array()) . " ") . $this->getAttribute($context["candidate"], "last_name", array())), "html", null, true);
            echo "</a></div>
                                                    <small>";
            // line 40
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
        // line 45
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
        return "employer_followers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 45,  100 => 40,  94 => 39,  89 => 37,  81 => 32,  77 => 31,  72 => 28,  67 => 27,  61 => 23,  59 => 22,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
    {% include 'employer_navigation.twig' %}
{% endblock %}

{% block content %}

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Followers List</p>
                    </div>
                    <div class=\"follower-section\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"\" id=\"followers\">
                                <ul class=\"list-group list-group-dividered list-group-full\">
                                    {% if followers|length == 0 %}
                                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                            <h4 class=\"search-result-text\">You have no followers yet.</h4>
                                        </div>
                                    {% endif %}
                                    {% for candidate in followers %}
                                        <li class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <a class=\"avatar avatar-online\" href=\"/home/profile/{{ candidate.user_id_fk }}\">
                                                        <img src=\"/uploads/{{ candidate.profile_image|default('profile.jpg') }}\" class=\"img-responsive\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"media-body\">
                                                    <div class=\"pull-right\">
                                                        <a href=\"/home/profile/{{ candidate.user_id_fk }}\"><button type=\"button\" class=\"btn btn-default btn-sm\">View Profile</button></a>
                                                    </div>
                                                    <div><a class=\"name\" href=\"/home/profile/{{ candidate.user_id_fk }}\">{{ candidate.first_name~\" \"~candidate.last_name}}</a></div>
                                                    <small>{{ candidate.email }}</small>
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

{% endblock %}", "employer_followers.twig", "/home/frescihp/public_html/getwork/application/views/employer_followers.twig");
    }
}
