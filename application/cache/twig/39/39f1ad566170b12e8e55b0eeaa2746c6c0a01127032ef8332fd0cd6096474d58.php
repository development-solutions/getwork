<?php

/* dashboard.twig */
class __TwigTemplate_14d773c640a918a3018af810dc46876bf8bc53d3531365965cbaa76b38e30560 extends Twig_Template
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
                                <img src=\"/uploads/";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
        echo "\" alt=\"Courses in construction\" class=\"img-responsive center-block \"></a>
                            </div>
                            <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo "</h3>
                            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "website_url", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 21
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array())) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array())), "html", null, true);
        echo "</p>
                            <ul class=\"social-links list-inline\">
                                <li> <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "facebook_url", array()), "html", null, true);
        echo "\"><i class=\"icon-facebook\"></i></a></li>
                                <li> <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "twitter_url", array()), "html", null, true);
        echo "\"><i class=\"icon-twitter\"></i></a></li>
                                <li> <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "googleplus_url", array()), "html", null, true);
        echo "\"><i class=\"icon-googleplus\"></i></a></li>
                                <li> <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "linkedin_url", array()), "html", null, true);
        echo "\"><i class=\"icon-linkedin\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-profile-male\"></i>
                            <span class=\"title-dashboard\">Followers</span>
                            <span class=\"value\"><span>";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "followers", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "followers", array()), 0)) : (0)), "html", null, true);
        echo "</span></span>
                        </div>
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-presentation\"></i>
                            <span class=\"title-dashboard\">Jobs Posted</span>
                            <span class=\"value\"><span>";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "jobsPosted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "jobsPosted", array()), 0)) : (0)), "html", null, true);
        echo "</span></span>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-documents\"></i>
                            <span class=\"title-dashboard\">New Messages</span>
                            <span class=\"value\"><span>";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "newMsg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "newMsg", array()), 0)) : (0)), "html", null, true);
        echo "</span></span>
                        </div>
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-briefcase\"></i>
                            <span class=\"title-dashboard\">Featured Jobs</span>
                            <span class=\"value\"><span>";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "featuredJobs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "featuredJobs", array()), 0)) : (0)), "html", null, true);
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
                ";
        // line 63
        $this->loadTemplate("employer_sidebar.twig", "dashboard.twig", 63)->display($context);
        // line 64
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"job-short-detail\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Profile detail</p>
                        </div>
                        <dl>
                            <dt>Company Name:</dt>
                            <dd> ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo " </dd>

                            <dt>Trade:</dt>
                            <dd> ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "type_of_business", array()), "html", null, true);
        echo " </dd>

                            <dt>Phone:</dt>
                            <dd>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo " </dd>

                            <dt>Email:</dt>
                            <dd>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo " </dd>

                            <dt>No. of Employees:</dt>
                            <dd>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "employees", array()), "html", null, true);
        echo " </dd>

                            <dt>Address:</dt>
                            <dd>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()), "html", null, true);
        echo " </dd>

                            <dt>City:</dt>
                            <dd>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array()), "html", null, true);
        echo " </dd>

                            <dt>County:</dt>
                            <dd>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array()), "html", null, true);
        echo " </dd>

                            <dt>Country:</dt>
                            <dd>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array()), "html", null, true);
        echo " </dd>
                        </dl>
                    </div>
                    <div class=\"heading-inner\">
                        <p class=\"title\">Company Description</p>
                    </div>
                    <p>";
        // line 101
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_description", array()), "company description")) : ("company description")), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 107
        if (((isset($context["verified"]) ? $context["verified"] : null) == 0)) {
            // line 108
            echo "    <script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\",
            \"extendedTimeOut\": \"0\",
            \"timeOut\": \"0\",
        }
        toastr.error(\"<a href='javascript:void(0)' onclick='window.common.verifyEmail()'>Please verify your email </br>Click here to resend verification email.</a>\");
    },500);
    </script>
";
        }
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
        return array (  212 => 108,  210 => 107,  201 => 101,  192 => 95,  186 => 92,  180 => 89,  174 => 86,  168 => 83,  162 => 80,  156 => 77,  150 => 74,  144 => 71,  135 => 64,  133 => 63,  118 => 51,  110 => 46,  100 => 39,  92 => 34,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  64 => 21,  60 => 20,  56 => 19,  51 => 17,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                                <img src=\"/uploads/{{ user.logo|default('logo.jpg') }}\" alt=\"Courses in construction\" class=\"img-responsive center-block \"></a>
                            </div>
                            <h3>{{ user.company_name }}</h3>
                            <p>{{ user.website_url }}</p>
                            <p>{{ user.address~\" \"~user.city~\" \"~user.provience }}</p>
                            <ul class=\"social-links list-inline\">
                                <li> <a href=\"{{ user.facebook_url }}\"><i class=\"icon-facebook\"></i></a></li>
                                <li> <a href=\"{{ user.twitter_url }}\"><i class=\"icon-twitter\"></i></a></li>
                                <li> <a href=\"{{ user.googleplus_url }}\"><i class=\"icon-googleplus\"></i></a></li>
                                <li> <a href=\"{{ user.linkedin_url }}\"><i class=\"icon-linkedin\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-profile-male\"></i>
                            <span class=\"title-dashboard\">Followers</span>
                            <span class=\"value\"><span>{{ user.followers|default(0) }}</span></span>
                        </div>
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-presentation\"></i>
                            <span class=\"title-dashboard\">Jobs Posted</span>
                            <span class=\"value\"><span>{{ user.jobsPosted|default(0) }}</span></span>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box\">
                            <i class=\"icon icon-documents\"></i>
                            <span class=\"title-dashboard\">New Messages</span>
                            <span class=\"value\"><span>{{ user.newMsg|default(0) }}</span></span>
                        </div>
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-briefcase\"></i>
                            <span class=\"title-dashboard\">Featured Jobs</span>
                            <span class=\"value\"><span>{{ user.featuredJobs|default(0) }}</span></span>
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
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"job-short-detail\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Profile detail</p>
                        </div>
                        <dl>
                            <dt>Company Name:</dt>
                            <dd> {{ user.company_name }} </dd>

                            <dt>Trade:</dt>
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

                            <dt>County:</dt>
                            <dd>{{ user.provience }} </dd>

                            <dt>Country:</dt>
                            <dd>{{ user.country }} </dd>
                        </dl>
                    </div>
                    <div class=\"heading-inner\">
                        <p class=\"title\">Company Description</p>
                    </div>
                    <p>{{ user.company_description|default(\"company description\")}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
{% if verified == 0 %}
    <script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\",
            \"extendedTimeOut\": \"0\",
            \"timeOut\": \"0\",
        }
        toastr.error(\"<a href='javascript:void(0)' onclick='window.common.verifyEmail()'>Please verify your email </br>Click here to resend verification email.</a>\");
    },500);
    </script>
{% endif %}
{% endblock %}", "dashboard.twig", "/home/getwork/public_html/application/views/dashboard.twig");
    }
}
