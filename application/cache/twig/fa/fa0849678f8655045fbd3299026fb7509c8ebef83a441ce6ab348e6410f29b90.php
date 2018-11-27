<?php

/* company_info.twig */
class __TwigTemplate_1f74ebce0ec64227365d9f5dbfd63c17de65d8bab4f0ab2d4c2982e271b80451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "company_info.twig", 1);
        $this->blocks = array(
            'metatags' => array($this, 'block_metatags'),
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_metatags($context, array $blocks = array())
    {
        // line 3
        echo "    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Online Jobs accessible on Getwork.construction look through our gathering of online Work postings, incorporating openings in full time and part time.\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Get Work - London Jobs | Full or Part time Construction Jobs</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<section class=\"company-dashboard\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"dashboard-header\">
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        <div class=\"dashboard-header-logo-box\">
                            <div class=\"company-logo\">
                                <img src=\"/uploads/";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
        echo "\" alt=\"Railway construction jobs\" class=\"img-responsive center-block \">
                            </div>
                            <h3>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "company_name", array()), "html", null, true);
        echo "</h3>
                            <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "website_url", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 28
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "address", array()) . " ") . $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "city", array())) . " ") . $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "provience", array())), "html", null, true);
        echo "</p>
                            <ul class=\"social-links list-inline\">
                                <li> <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "facebook_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "facebook_url", array()), "#")) : ("#")), "html", null, true);
        echo "\"><i class=\"icon-facebook\"></i></a></li>
                                <li> <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "twitter_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "twitter_url", array()), "#")) : ("#")), "html", null, true);
        echo "\"><i class=\"icon-twitter\"></i></a></li>
                                <li> <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "googleplus_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "googleplus_url", array()), "#")) : ("#")), "html", null, true);
        echo "\"><i class=\"icon-googleplus\"></i></a></li>
                                <li> <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "linkedin_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "linkedin_url", array()), "#")) : ("#")), "html", null, true);
        echo "\"><i class=\"icon-linkedin\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-profile-male\"></i>
                            <span class=\"title-dashboard\">Followers</span>
                            <span class=\"value\"><span>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "followers", array()), "html", null, true);
        echo "</span></span>
                        </div>
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-presentation\"></i>
                            <span class=\"title-dashboard\">Jobs Posted</span>
                            <span class=\"value\"><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "jobsPosted", array()), "html", null, true);
        echo "</span></span>
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
                <div class=\"job-short-detail\">
                    <div class=\"heading-inner\">
                        <p class=\"title\">Profile detail</p>
                    </div>
                    <dl>
                        <dt>Company Name:</dt>
                        <dd> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "company_name", array()), "html", null, true);
        echo "</dd>

                        <dt>Trade:</dt>
                        <dd> ";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "type_of_business", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "type_of_business", array()), "Not Provided")) : ("Not Provided")), "html", null, true);
        echo "</dd>

                        ";
        // line 74
        echo "
                        <dt>No. of Employees:</dt>
                        <dd> ";
        // line 76
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "employees", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "employees", array()), "Not Provided")) : ("Not Provided")), "html", null, true);
        echo "</dd>

                        <dt>Address:</dt>
                        <dd> ";
        // line 79
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "address", array()), "Not Provided")) : ("Not Provided")), "html", null, true);
        echo "</dd>

                        <dt>City:</dt>
                        <dd> ";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "city", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "city", array()), "Not Provided")) : ("Not Provided")), "html", null, true);
        echo "</dd>

                        <dt>County:</dt>
                        <dd> ";
        // line 85
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "provience", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "provience", array()), "Not Provided")) : ("Not Provided")), "html", null, true);
        echo "</dd>

                        <dt>Country:</dt>
                        <dd> ";
        // line 88
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "country", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "country", array()), "Not Provided")) : ("Not Provided")), "html", null, true);
        echo "</dd>
                    </dl>
                </div>
                <div class=\"heading-inner\">
                    <p class=\"title\">Company Description</p>
                </div>
                <p>";
        // line 94
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "description", array()), "Not Provided")) : ("Not Provided")), "html", null, true);
        echo "</p>
                ";
        // line 95
        if (((isset($context["userType"]) ? $context["userType"] : null) == 2)) {
            // line 96
            echo "                    <div class=\"apply-job\">
                        ";
            // line 97
            if ((isset($context["subscribed"]) ? $context["subscribed"] : null)) {
                // line 98
                echo "                            <a href=\"javascript:void(0);\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "user_id_fk", array()));
                echo "\" onclick=\"window.profile.subscribeOrg(this)\" class=\"btn btn-info cstm-btn\">Subscribed</a>
                        ";
            } else {
                // line 100
                echo "                            <a href=\"javascript:void(0);\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "user_id_fk", array()));
                echo "\" onclick=\"window.profile.subscribeOrg(this)\" class=\"btn btn-default\">Subscribe for Notifications</a>
                        ";
            }
            // line 102
            echo "                    </div>
                ";
        }
        // line 104
        echo "            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "company_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 104,  207 => 102,  201 => 100,  195 => 98,  193 => 97,  190 => 96,  188 => 95,  184 => 94,  175 => 88,  169 => 85,  163 => 82,  157 => 79,  151 => 76,  147 => 74,  142 => 67,  136 => 64,  115 => 46,  107 => 41,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  79 => 28,  75 => 27,  71 => 26,  66 => 24,  55 => 15,  52 => 14,  47 => 12,  44 => 11,  33 => 3,  30 => 2,  11 => 1,);
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
{% block metatags %}
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Online Jobs accessible on Getwork.construction look through our gathering of online Work postings, incorporating openings in full time and part time.\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Get Work - London Jobs | Full or Part time Construction Jobs</title>
{% endblock %}
{% block content %}

<section class=\"company-dashboard\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"dashboard-header\">
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        <div class=\"dashboard-header-logo-box\">
                            <div class=\"company-logo\">
                                <img src=\"/uploads/{{ org.logo|default('logo.jpg') }}\" alt=\"Railway construction jobs\" class=\"img-responsive center-block \">
                            </div>
                            <h3>{{ org.company_name }}</h3>
                            <p>{{ org.website_url }}</p>
                            <p>{{ org.address~\" \"~org.city~\" \"~org.provience }}</p>
                            <ul class=\"social-links list-inline\">
                                <li> <a href=\"{{ org.facebook_url|default('#') }}\"><i class=\"icon-facebook\"></i></a></li>
                                <li> <a href=\"{{ org.twitter_url|default('#') }}\"><i class=\"icon-twitter\"></i></a></li>
                                <li> <a href=\"{{ org.googleplus_url|default('#') }}\"><i class=\"icon-googleplus\"></i></a></li>
                                <li> <a href=\"{{ org.linkedin_url|default('#') }}\"><i class=\"icon-linkedin\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-profile-male\"></i>
                            <span class=\"title-dashboard\">Followers</span>
                            <span class=\"value\"><span>{{ org.followers }}</span></span>
                        </div>
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-presentation\"></i>
                            <span class=\"title-dashboard\">Jobs Posted</span>
                            <span class=\"value\"><span>{{ org.jobsPosted }}</span></span>
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
                <div class=\"job-short-detail\">
                    <div class=\"heading-inner\">
                        <p class=\"title\">Profile detail</p>
                    </div>
                    <dl>
                        <dt>Company Name:</dt>
                        <dd> {{ org.company_name }}</dd>

                        <dt>Trade:</dt>
                        <dd> {{ org.type_of_business|default(\"Not Provided\") }}</dd>

                        {# <dt>Phone:</dt>
                        <dd> {{ org.phone }}</dd>

                        <dt>Email:</dt>
                        <dd> {{ org.email }}</dd> #}

                        <dt>No. of Employees:</dt>
                        <dd> {{ org.employees|default(\"Not Provided\") }}</dd>

                        <dt>Address:</dt>
                        <dd> {{ org.address|default(\"Not Provided\") }}</dd>

                        <dt>City:</dt>
                        <dd> {{ org.city|default(\"Not Provided\") }}</dd>

                        <dt>County:</dt>
                        <dd> {{ org.provience|default(\"Not Provided\") }}</dd>

                        <dt>Country:</dt>
                        <dd> {{ org.country|default(\"Not Provided\") }}</dd>
                    </dl>
                </div>
                <div class=\"heading-inner\">
                    <p class=\"title\">Company Description</p>
                </div>
                <p>{{ org.description|default(\"Not Provided\") }}</p>
                {% if userType == 2 %}
                    <div class=\"apply-job\">
                        {% if subscribed %}
                            <a href=\"javascript:void(0);\" data-id=\"{{ org.user_id_fk|e }}\" onclick=\"window.profile.subscribeOrg(this)\" class=\"btn btn-info cstm-btn\">Subscribed</a>
                        {% else %}
                            <a href=\"javascript:void(0);\" data-id=\"{{ org.user_id_fk|e }}\" onclick=\"window.profile.subscribeOrg(this)\" class=\"btn btn-default\">Subscribe for Notifications</a>
                        {% endif %}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</section>

{% endblock %}", "company_info.twig", "/home/getwork/public_html/application/views/company_info.twig");
    }
}
