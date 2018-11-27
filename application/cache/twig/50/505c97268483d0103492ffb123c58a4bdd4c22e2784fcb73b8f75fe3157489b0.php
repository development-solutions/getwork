<?php

/* profile.twig */
class __TwigTemplate_c1de275801f2853f4cc67f61e607ceb660d41fd154019f2a40c686962fd5d173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "profile.twig", 1);
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
        $this->loadTemplate("applicant_navigation.twig", "profile.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard parallex\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"dashboard-header\">
                    <div class=\"col-md-5 col-sm-5 col-xs-12\">
                        <div class=\"user-avatar \">
                            <img src=\"/uploads/";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
        echo "\" alt=\"vacancy of Construction jobs in London\" class=\"img-responsive center-block \"></a>
                            <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-presentation\"></i>
                            <span class=\"title-dashboard\">Followings</span>
                            <span class=\"value\"><span>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "followings", array()));
        echo "</span></span>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-aperture\"></i>
                            <span class=\"title-dashboard\">Jobs Applied</span>
                            <span class=\"value\"><span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "jobsApplied", array()));
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
        // line 43
        $this->loadTemplate("applicant_sidebar.twig", "profile.twig", 43)->display($context);
        // line 44
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Personal Information</p>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\"icon-profile-female\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Name: </h4>
                                        <p>";
        // line 57
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array())), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\" icon-envelope\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Email: </h4>
                                        <p><a href=\"mailto:";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\" icon-phone\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Phone: </h4>
                                        <p>";
        // line 79
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array())) {
            // line 80
            echo "                                                <a href=\"tel:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
            echo "</a>
                                            ";
        } else {
            // line 82
            echo "                                                <a href=\"/profile/edit_profile\">add</a>
                                            ";
        }
        // line 84
        echo "                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">

                                        <span class=\"icon-calendar\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Date of Birth: </h4>
                                        <p>";
        // line 98
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "d_o_b", array())) {
            // line 99
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "d_o_b", array()), "d M Y"), "html", null, true);
            echo "
                                            ";
        } else {
            // line 101
            echo "                                                <a href=\"/profile/edit_profile\">add</a>
                                            ";
        }
        // line 103
        echo "                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\"icon-map-pin\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Address: </h4>
                                        <p>";
        // line 114
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()) || $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array())) || $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array()))) {
            // line 115
            echo "                                                ";
            echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array())) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array())), "html", null, true);
            echo "
                                            ";
        } else {
            // line 117
            echo "                                                <a href=\"/profile/edit_profile\">add</a>
                                            ";
        }
        // line 119
        echo "                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\"icon-flag\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Last Education: </h4>
                                        <p>";
        // line 130
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_education", array())) {
            // line 131
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_education", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 133
            echo "                                                <a href=\"/profile/edit_profile\">add</a>
                                            ";
        }
        // line 135
        echo "                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"heading-inner\">
                            <p class=\"title\">About Me</p>
                        </div>
                        <p>";
        // line 143
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about_me", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about_me", array()), "Describe yourself!")) : ("Describe yourself!")), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Educational Information</p>
                        </div>
                        ";
        // line 151
        if ((twig_length_filter($this->env, (isset($context["education"]) ? $context["education"] : null)) == 0)) {
            // line 152
            echo "                            <h4 class=\"search-result-text\"><a href=\"/profile/edit_profile\">Add Education Details</a></h4>
                        ";
        }
        // line 154
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["education"]) ? $context["education"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["edu"]) {
            // line 155
            echo "                            <div class=\"row education-box\">
                                <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                    <div class=\"resume-icon\">
                                        <span class=\"icon-clipboard\"></span>
                                    </div>
                                    <div class=\"insti-name\">
                                        <h4> ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "college", array()));
            echo " </h4>
                                        <span>";
            // line 162
            echo twig_escape_filter($this->env, (($this->getAttribute($context["edu"], "start_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["edu"], "start_date", array()), "d M Y")) : ("")), "html", null, true);
            echo " to
                                            ";
            // line 163
            if ($this->getAttribute($this->getAttribute($context["edu"], "end_date", array(), "any", false, true), "timestamp", array(), "any", true, true)) {
                // line 164
                echo "                                                ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["edu"], "end_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["edu"], "end_date", array()), "d M Y")) : ("")), "html", null, true);
                echo "
                                            ";
            } else {
                // line 166
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "end_date", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 168
            echo "                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                    <div class=\"degree-info\">
                                        <h4>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "title", array()));
            echo "</h4>
                                        <p>";
            // line 174
            echo $this->getAttribute($context["edu"], "description", array());
            echo "</p>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Work Experience</p>
                        </div>
                        ";
        // line 186
        if ((twig_length_filter($this->env, (isset($context["experience"]) ? $context["experience"] : null)) == 0)) {
            // line 187
            echo "                            <h4 class=\"search-result-text\"><a href=\"/profile/edit_profile\">Add Experience Details</a></h4>
                        ";
        }
        // line 189
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) ? $context["experience"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 190
            echo "                            <div class=\"row education-box\">
                                <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                    <div class=\"resume-icon\">
                                        <span class=\"icon-pencil\"></span>
                                    </div>
                                    <div class=\"insti-name\">
                                        <h4>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "company", array()));
            echo "</h4>
                                        <span>";
            // line 197
            echo twig_escape_filter($this->env, (($this->getAttribute($context["exp"], "start_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["exp"], "start_date", array()), "d M Y")) : ("")), "html", null, true);
            echo " to
                                            ";
            // line 198
            if ($this->getAttribute($this->getAttribute($context["exp"], "end_date", array(), "any", false, true), "timestamp", array(), "any", true, true)) {
                // line 199
                echo "                                                ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["exp"], "end_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["exp"], "end_date", array()), "d M Y")) : ("")), "html", null, true);
                echo "
                                            ";
            } else {
                // line 201
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "end_date", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 203
            echo "                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                    <div class=\"degree-info\">
                                        <h4>";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "profile", array()));
            echo "</h4>
                                        <p>";
            // line 209
            echo $this->getAttribute($context["exp"], "description", array());
            echo "</p>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner\">
                        <p class=\"title\">Skills/Certifications</p>
                    </div>
                    ";
        // line 220
        if ((twig_length_filter($this->env, (isset($context["skills"]) ? $context["skills"] : null)) == 0)) {
            // line 221
            echo "                        <h4 class=\"search-result-text\"><a href=\"/profile/edit_profile\">Add your skills</a></h4>
                    ";
        }
        // line 223
        echo "                    <div class=\"row\">
                        ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 225
            echo "                            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\">
                                        <span class=\"sr-only\">100% Complete</span>
                                    </div>
                                    <span class=\"progress-type\">";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()));
            echo "</span>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 240
        if (((isset($context["verified"]) ? $context["verified"] : null) == 0)) {
            // line 241
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
        return "profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 241,  432 => 240,  424 => 234,  414 => 230,  407 => 225,  403 => 224,  400 => 223,  396 => 221,  394 => 220,  386 => 214,  375 => 209,  371 => 208,  364 => 203,  358 => 201,  352 => 199,  350 => 198,  346 => 197,  342 => 196,  334 => 190,  329 => 189,  325 => 187,  323 => 186,  314 => 179,  303 => 174,  299 => 173,  292 => 168,  286 => 166,  280 => 164,  278 => 163,  274 => 162,  270 => 161,  262 => 155,  257 => 154,  253 => 152,  251 => 151,  240 => 143,  230 => 135,  226 => 133,  220 => 131,  218 => 130,  205 => 119,  201 => 117,  195 => 115,  193 => 114,  180 => 103,  176 => 101,  170 => 99,  168 => 98,  152 => 84,  148 => 82,  140 => 80,  138 => 79,  122 => 68,  108 => 57,  93 => 44,  91 => 43,  76 => 31,  66 => 24,  54 => 17,  50 => 16,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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

<section class=\"dashboard parallex\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"dashboard-header\">
                    <div class=\"col-md-5 col-sm-5 col-xs-12\">
                        <div class=\"user-avatar \">
                            <img src=\"/uploads/{{ user.profile_image|default('profile.jpg') }}\" alt=\"vacancy of Construction jobs in London\" class=\"img-responsive center-block \"></a>
                            <h3>{{ user.first_name }} {{ user.last_name }}</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-presentation\"></i>
                            <span class=\"title-dashboard\">Followings</span>
                            <span class=\"value\"><span>{{ user.followings|e }}</span></span>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-aperture\"></i>
                            <span class=\"title-dashboard\">Jobs Applied</span>
                            <span class=\"value\"><span>{{ user.jobsApplied|e }}</span></span>
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
                {% include 'applicant_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Personal Information</p>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\"icon-profile-female\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Name: </h4>
                                        <p>{{ user.first_name ~\" \"~ user.last_name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\" icon-envelope\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Email: </h4>
                                        <p><a href=\"mailto:{{ user.email }}\">{{ user.email }}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\" icon-phone\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Phone: </h4>
                                        <p>{% if user.phone %}
                                                <a href=\"tel:{{ user.phone }}\">{{ user.phone }}</a>
                                            {% else %}
                                                <a href=\"/profile/edit_profile\">add</a>
                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">

                                        <span class=\"icon-calendar\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Date of Birth: </h4>
                                        <p>{% if user.d_o_b %}
                                                {{ user.d_o_b|date(\"d M Y\") }}
                                            {% else %}
                                                <a href=\"/profile/edit_profile\">add</a>
                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\"icon-map-pin\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Address: </h4>
                                        <p>{% if user.address or user.provience or user.country %}
                                                {{ user.address ~\" \"~ user.provience ~\" \"~ user.country  }}
                                            {% else %}
                                                <a href=\"/profile/edit_profile\">add</a>
                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\"icon-flag\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Last Education: </h4>
                                        <p>{% if user.last_education %}
                                                {{ user.last_education }}
                                            {% else %}
                                                <a href=\"/profile/edit_profile\">add</a>
                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"heading-inner\">
                            <p class=\"title\">About Me</p>
                        </div>
                        <p>{{ user.about_me|default(\"Describe yourself!\") }}</p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Educational Information</p>
                        </div>
                        {% if education|length == 0 %}
                            <h4 class=\"search-result-text\"><a href=\"/profile/edit_profile\">Add Education Details</a></h4>
                        {% endif %}
                        {% for edu in education %}
                            <div class=\"row education-box\">
                                <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                    <div class=\"resume-icon\">
                                        <span class=\"icon-clipboard\"></span>
                                    </div>
                                    <div class=\"insti-name\">
                                        <h4> {{ edu.college|e }} </h4>
                                        <span>{{ edu.start_date?edu.start_date|date(\"d M Y\") }} to
                                            {% if edu.end_date.timestamp is defined %}
                                                {{ edu.end_date?edu.end_date|date(\"d M Y\") }}
                                            {% else %}
                                                {{ edu.end_date }}
                                            {% endif %}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                    <div class=\"degree-info\">
                                        <h4>{{ edu.title|e }}</h4>
                                        <p>{{ edu.description|raw }}</p>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Work Experience</p>
                        </div>
                        {% if experience|length == 0 %}
                            <h4 class=\"search-result-text\"><a href=\"/profile/edit_profile\">Add Experience Details</a></h4>
                        {% endif %}
                        {% for exp in experience %}
                            <div class=\"row education-box\">
                                <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                    <div class=\"resume-icon\">
                                        <span class=\"icon-pencil\"></span>
                                    </div>
                                    <div class=\"insti-name\">
                                        <h4>{{ exp.company|e }}</h4>
                                        <span>{{ exp.start_date?exp.start_date|date(\"d M Y\") }} to
                                            {% if exp.end_date.timestamp is defined %}
                                                {{ exp.end_date?exp.end_date|date(\"d M Y\") }}
                                            {% else %}
                                                {{ exp.end_date }}
                                            {% endif %}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                    <div class=\"degree-info\">
                                        <h4>{{ exp.profile|e }}</h4>
                                        <p>{{ exp.description|raw }}</p>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner\">
                        <p class=\"title\">Skills/Certifications</p>
                    </div>
                    {% if skills|length == 0 %}
                        <h4 class=\"search-result-text\"><a href=\"/profile/edit_profile\">Add your skills</a></h4>
                    {% endif %}
                    <div class=\"row\">
                        {% for skill in skills %}
                            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\">
                                        <span class=\"sr-only\">100% Complete</span>
                                    </div>
                                    <span class=\"progress-type\">{{ skill.name|e }}</span>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
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
{% endblock %}", "profile.twig", "/home/getwork/public_html/application/views/profile.twig");
    }
}
