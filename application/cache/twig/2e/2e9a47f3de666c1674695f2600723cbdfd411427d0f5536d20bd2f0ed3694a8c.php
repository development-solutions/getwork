<?php

/* edashboard.twig */
class __TwigTemplate_84bde4d0acf6c25292a2cf6219c818ce842ba0d269352e60df7d3cf41daa2069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "edashboard.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "edashboard.twig", 4)->display($context);
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
                    <div class=\"profile-nav\">
                        <div class=\"panel\">
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li class=\"active\">
                                    <a href=\"company-dashboard.html\"> <i class=\"fa fa-user\"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a href=\"company-dashboard-edit-profile.html\"> <i class=\"fa fa-edit\"></i> Edit Profile</a>
                                </li>
                                <li>
                                    <a href=\"company-dashboard-resume.html\"> <i class=\"fa fa-file-o\"></i>Resume </a>
                                </li>
                                <li>
                                    <a href=\"company-dashboard-active-jobs.html\"> <i class=\"fa  fa-list-ul\"></i> Active Jobs</a>
                                </li>
                                <li>
                                    <a href=\"company-dashboard-featured-jobs.html\"> <i class=\"fa  fa-list-alt\"></i> Featured Jobs</a>
                                </li>
                                <li>
                                    <a href=\"company-dashboard-followers.html\"> <i class=\"fa  fa-bookmark-o\"></i> Followers </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"job-short-detail\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Profile detail</p>
                        </div>
                        <dl>
                            <dt>Industry:</dt>
                            <dd> ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo " </dd>

                            <dt>Type of Business:</dt>
                            <dd> ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "type_of_business", array()), "html", null, true);
        echo " </dd>

                            <dt>Established In:</dt>
                            <dd> 15 Feb,2015 </dd>

                            <dt>Phone:</dt>
                            <dd>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo " </dd>

                            <dt>Email:</dt>
                            <dd>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo " </dd>

                            <dt>No. of Employees:</dt>
                            <dd>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "employees", array()), "html", null, true);
        echo " </dd>

                            <dt>Address:</dt>
                            <dd>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()), "html", null, true);
        echo " </dd>

                            <dt>City:</dt>
                            <dd>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array()), "html", null, true);
        echo " </dd>

                            <dt>Provience:</dt>
                            <dd>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array()), "html", null, true);
        echo " </dd>

                            <dt>Country:</dt>
                            <dd>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array()), "html", null, true);
        echo " </dd>
                        </dl>
                    </div>
                    <div class=\"heading-inner\">
                        <p class=\"title\">Some Line About Our Company</p>
                    </div>
                    <p>";
        // line 128
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
        return "edashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 128,  190 => 122,  184 => 119,  178 => 116,  172 => 113,  166 => 110,  160 => 107,  154 => 104,  145 => 98,  139 => 95,  57 => 20,  53 => 19,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                    <div class=\"profile-nav\">
                        <div class=\"panel\">
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li class=\"active\">
                                    <a href=\"company-dashboard.html\"> <i class=\"fa fa-user\"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a href=\"company-dashboard-edit-profile.html\"> <i class=\"fa fa-edit\"></i> Edit Profile</a>
                                </li>
                                <li>
                                    <a href=\"company-dashboard-resume.html\"> <i class=\"fa fa-file-o\"></i>Resume </a>
                                </li>
                                <li>
                                    <a href=\"company-dashboard-active-jobs.html\"> <i class=\"fa  fa-list-ul\"></i> Active Jobs</a>
                                </li>
                                <li>
                                    <a href=\"company-dashboard-featured-jobs.html\"> <i class=\"fa  fa-list-alt\"></i> Featured Jobs</a>
                                </li>
                                <li>
                                    <a href=\"company-dashboard-followers.html\"> <i class=\"fa  fa-bookmark-o\"></i> Followers </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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

                            <dt>Established In:</dt>
                            <dd> 15 Feb,2015 </dd>

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

{% endblock %}", "edashboard.twig", "/home/frescihp/public_html/getwork/application/views/edashboard.twig");
    }
}
