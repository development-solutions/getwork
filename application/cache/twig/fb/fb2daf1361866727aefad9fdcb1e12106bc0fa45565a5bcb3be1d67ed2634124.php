<?php

/* dashboard.twig */
class __TwigTemplate_d63e6d3a89110fd5b9dde3f1c50db415cbda567b8552e2f5c6b946c65c697597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "dashboard.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "dashboard.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"company-dashboard\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"dashboard-header\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"dashboard-header-logo-box\">
                            <div class=\"company-logo\">
                                <img src=\"../../images/company/s1.png\" alt=\"\" class=\"img-responsive center-block \"></a>
                            </div>
                            <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo "</h3>
                            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array()), "html", null, true);
        echo "</p>
                            <ul class=\"social-links list-inline\">
                                <li> <a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                                <li> <a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                                <li> <a href=\"#\"><i class=\"icon-googleplus\"></i></a></li>
                                <li> <a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-profile-male\"></i>
                            <span class=\"title-dashboard\">Followers</span>
                            <span class=\"value\"><span>450M</span></span>
                        </div>
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-presentation\"></i>
                            <span class=\"title-dashboard\">Jobs Posted</span>
                            <span class=\"value\"><span>2500</span></span>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-documents\"></i>
                            <span class=\"title-dashboard\">New resume</span>
                            <span class=\"value\"><span>200</span></span>
                        </div>
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-briefcase\"></i>
                            <span class=\"title-dashboard\">Hired</span>
                            <span class=\"value\"><span>6500</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    ";
        // line 63
        $this->loadTemplate("employer_sidebar.twig", "dashboard.twig", 63)->display($context);
        // line 64
        echo "                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"job-short-detail\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Profile detail</p>
                        </div>
                        <dl>
                            <dt>Industry:</dt>
                            <dd> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo " </dd>

                            <dt>Type of Business:</dt>
                            <dd> ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "type_of_business", array()), "html", null, true);
        echo " </dd>

                            <dt>Phone:</dt>
                            <dd>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo " </dd>

                            <dt>Email:</dt>
                            <dd>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo " </dd>

                            <dt>No. of Employees:</dt>
                            <dd>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "employees", array()), "html", null, true);
        echo " </dd>

                            <dt>Address:</dt>
                            <dd>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()), "html", null, true);
        echo " </dd>

                            <dt>City:</dt>
                            <dd>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array()), "html", null, true);
        echo " </dd>

                            <dt>Provience:</dt>
                            <dd>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array()), "html", null, true);
        echo " </dd>

                            <dt>Country:</dt>
                            <dd>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array()), "html", null, true);
        echo " </dd>
                        </dl>
                    </div>
                    <div class=\"heading-inner\">
                        <p class=\"title\">Some Line About Our Company</p>
                    </div>
                    <p>";
        // line 102
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_description", array()), "please add your company info here!")) : ("please add your company info here!")), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 102,  167 => 96,  161 => 93,  155 => 90,  149 => 87,  143 => 84,  137 => 81,  131 => 78,  125 => 75,  119 => 72,  109 => 64,  107 => 63,  57 => 20,  53 => 19,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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

<section class=\"company-dashboard\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"dashboard-header\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"dashboard-header-logo-box\">
                            <div class=\"company-logo\">
                                <img src=\"../../images/company/s1.png\" alt=\"\" class=\"img-responsive center-block \"></a>
                            </div>
                            <h3>{{ user.company_name }}</h3>
                            <p>{{ user.address }}, {{ user.city }}, {{ user.provience }}</p>
                            <ul class=\"social-links list-inline\">
                                <li> <a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                                <li> <a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                                <li> <a href=\"#\"><i class=\"icon-googleplus\"></i></a></li>
                                <li> <a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-profile-male\"></i>
                            <span class=\"title-dashboard\">Followers</span>
                            <span class=\"value\"><span>450M</span></span>
                        </div>
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-presentation\"></i>
                            <span class=\"title-dashboard\">Jobs Posted</span>
                            <span class=\"value\"><span>2500</span></span>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-documents\"></i>
                            <span class=\"title-dashboard\">New resume</span>
                            <span class=\"value\"><span>200</span></span>
                        </div>
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-briefcase\"></i>
                            <span class=\"title-dashboard\">Hired</span>
                            <span class=\"value\"><span>6500</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    {% include 'employer_sidebar.twig' %}
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"job-short-detail\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Profile detail</p>
                        </div>
                        <dl>
                            <dt>Industry:</dt>
                            <dd> {{ user.company_name }} </dd>

                            <dt>Type of Business:</dt>
                            <dd> {{ user.type_of_business }} </dd>

                            <dt>Phone:</dt>
                            <dd>{{ user.phone }} </dd>

                            <dt>Email:</dt>
                            <dd>{{ user.email }} </dd>

                            <dt>No. of Employees:</dt>
                            <dd>{{ user.employees }} </dd>

                            <dt>Address:</dt>
                            <dd>{{ user.address }} </dd>

                            <dt>City:</dt>
                            <dd>{{ user.city }} </dd>

                            <dt>Provience:</dt>
                            <dd>{{ user.provience }} </dd>

                            <dt>Country:</dt>
                            <dd>{{ user.country }} </dd>
                        </dl>
                    </div>
                    <div class=\"heading-inner\">
                        <p class=\"title\">Some Line About Our Company</p>
                    </div>
                    <p>{{ user.company_description|default(\"please add your company info here!\")}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "dashboard.twig", "/home/frescihp/public_html/getwork/application/views/dashboard.twig");
    }
}
