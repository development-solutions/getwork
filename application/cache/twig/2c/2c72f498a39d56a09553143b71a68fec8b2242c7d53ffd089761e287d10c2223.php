<?php

/* applicant_followed.twig */
class __TwigTemplate_4d502d6d9a350a7104bec5e8692b44ae4fc8b1fac9b236456cc3c67fe59fa8d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "applicant_followed.twig", 1);
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
        $this->loadTemplate("applicant_navigation.twig", "applicant_followed.twig", 4)->display($context);
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
        $this->loadTemplate("applicant_sidebar.twig", "applicant_followed.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">My Followings</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"company-list\">
                            ";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["companies"]) ? $context["companies"] : null)) == 0)) {
            // line 21
            echo "                                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                    <h4 class=\"search-result-text\">You haven't followed any company yet.</h4>
                                </div>
                            ";
        }
        // line 25
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
            // line 26
            echo "                                <div class=\"company-box\">
                                    <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                        <a href=\"/home/companyinfo/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "user_id_fk", array()), "html", null, true);
            echo "\">
                                            <div class=\"company-list-img\"><img src=\"/uploads/";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute($context["org"], "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["org"], "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
            echo "\" alt=\"find Construction jobs in UK\" class=\"img-responsive\"></div>
                                        </a>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                        <div class=\"company-list-name\">
                                            <a href=\"/home/companyinfo/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "user_id_fk", array()), "html", null, true);
            echo "\"><h5>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "company_name", array()), "html", null, true);
            echo "</h5> </a>
                                            <p>";
            // line 35
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["org"], "address", array()) . " ") . $this->getAttribute($context["org"], "city", array())) . " ") . $this->getAttribute($context["org"], "provience", array())), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                    <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                        <span class=\"pull-left\">Totle Jobs (";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "totalJobs", array()));
            echo ")</span>
                                    </div>
                                    ";
            // line 44
            echo "                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </div>
                    </div>
                    ";
        // line 63
        echo "                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "applicant_followed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 63,  111 => 46,  104 => 44,  99 => 39,  92 => 35,  86 => 34,  78 => 29,  74 => 28,  70 => 26,  65 => 25,  59 => 21,  57 => 20,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
    {% include 'applicant_navigation.twig' %}
{% endblock %}

{% block content %}

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                {% include 'applicant_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">My Followings</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"company-list\">
                            {% if companies|length == 0 %}
                                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                    <h4 class=\"search-result-text\">You haven't followed any company yet.</h4>
                                </div>
                            {% endif %}
                            {% for org in companies %}
                                <div class=\"company-box\">
                                    <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                        <a href=\"/home/companyinfo/{{ org.user_id_fk }}\">
                                            <div class=\"company-list-img\"><img src=\"/uploads/{{ org.logo|default('logo.jpg') }}\" alt=\"find Construction jobs in UK\" class=\"img-responsive\"></div>
                                        </a>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                        <div class=\"company-list-name\">
                                            <a href=\"/home/companyinfo/{{ org.user_id_fk }}\"><h5>{{ org.company_name }}</h5> </a>
                                            <p>{{ org.address~\" \"~org.city~\" \"~org.provience }}</p>
                                        </div>
                                    </div>
                                    <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                        <span class=\"pull-left\">Totle Jobs ({{ org.totalJobs|e }})</span>
                                    </div>
                                    {# <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                        <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                    </div> #}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    {# <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <ul class=\"pagination\">
                                <li>
                                    <a href=\"#\" aria-label=\"Previous\"> <span aria-hidden=\"true\">Previous</span> </a>
                                </li>
                                <li class=\"active\"><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li>
                                    <a href=\"#\" aria-label=\"Next\"> <span aria-hidden=\"true\">Next</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div> #}
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "applicant_followed.twig", "/home/getwork/public_html/application/views/applicant_followed.twig");
    }
}
