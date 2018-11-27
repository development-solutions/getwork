<?php

/* profile.twig */
class __TwigTemplate_da66b526af89d551c09dbbe1bb9c4321006f0079309fd94208cf0594913dad76 extends Twig_Template
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
                            <img src=\"../../images/users/12.jpg\" alt=\"\" class=\"img-responsive center-block \"></a>
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
                            <span class=\"value\"><span>250K</span></span>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-aperture\"></i>
                            <span class=\"title-dashboard\">Jobs Applied</span>
                            <span class=\"value\"><span>200</span></span>
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
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 44
        $this->loadTemplate("applicant_sidebar.twig", "profile.twig", 44)->display($context);
        // line 45
        echo "                </div>
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
                                        <p>";
        // line 59
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()))), "html", null, true);
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
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array())), "html", null, true);
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
                                        <p><a href=\"tel:";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo "</a></p>
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
                                        <h4>Date Of birth: </h4>
                                        <p>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "d_o_b", array()), "html", null, true);
        echo "</p>
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
        // line 106
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array())), "html", null, true);
        echo "</p>
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
        // line 117
        echo twig_escape_filter($this->env, ((((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_education", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array()))) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array()))), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"heading-inner\">
                            <p class=\"title\">About Me</p>
                        </div>
                        <p>";
        // line 125
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about_me", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about_me", array()), "Please add some lines about yourself!")) : ("Please add some lines about yourself!")), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Educational Information</p>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-clipboard\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>Insitute of Managment</h4>
                                    <span>2012 to 2016</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>Master of Business Administration</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-pencil\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>Uni. Of Locastus UK</h4>
                                    <span>2010 to 2012</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>Software Engineering</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-expand\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>Focus Higher School</h4>
                                    <span>2008 to 2010</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>intermediate</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Work Experience</p>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-clipboard\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>Glixen Technologies Ltd.</h4>
                                    <span>2012 to present</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>principal software engineer</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-pencil\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>ScriptsBundle Studio</h4>
                                    <span>2010 to 2012</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>Designing Engineering</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-expand\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>Lhr Software house</h4>
                                    <span>2008 to 2010</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>Intern</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner\">
                        <p class=\"title\">Skills That I have</p>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 92%;\">
                                    <span class=\"sr-only\">92% Complete</span>
                                </div>
                                <span class=\"progress-type\">HTML / HTML5</span>
                                <span class=\"progress-completed\">92%</span>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"5\" aria-valuemin=\"0\" aria-valuemax=\"10\" style=\"width: 90%\">
                                    <span class=\"sr-only\">38% Complete (success)</span>
                                </div>
                                <span class=\"progress-type\">PHP / MySQL</span>
                                <span class=\"progress-completed\">90%</span>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                    <span class=\"sr-only\">80% Complete (danger)</span>
                                </div>
                                <span class=\"progress-type\">CSS / CSS3</span>
                                <span class=\"progress-completed\">80%</span>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                    <span class=\"sr-only\">20% Complete (info)</span>
                                </div>
                                <span class=\"progress-type\">Java</span>
                                <span class=\"progress-completed\">20%</span>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\">
                                    <span class=\"sr-only\">85% Complete (warning)</span>
                                </div>
                                <span class=\"progress-type\">JavaScript / jQuery</span>
                                <span class=\"progress-completed\">85%</span>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                    <span class=\"sr-only\">80% Complete (danger)</span>
                                </div>
                                <span class=\"progress-type\">CSS / CSS3</span>
                                <span class=\"progress-completed\">80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class=\"brand-logo-area clients-bg\">
    <div class=\"clients-list light-blue\">
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_1.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_2.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_3.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_4.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_1.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_2.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_3.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_4.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
    </div>
</div>

";
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
        return array (  189 => 125,  178 => 117,  164 => 106,  150 => 95,  131 => 81,  115 => 70,  101 => 59,  85 => 45,  83 => 44,  51 => 17,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                            <img src=\"../../images/users/12.jpg\" alt=\"\" class=\"img-responsive center-block \"></a>
                            <h3>{{ user.first_name }} {{ user.last_name }}</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-presentation\"></i>
                            <span class=\"title-dashboard\">Followings</span>
                            <span class=\"value\"><span>250K</span></span>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
                        <div class=\"rad-info-box rad-txt-success\">
                            <i class=\"icon icon-aperture\"></i>
                            <span class=\"title-dashboard\">Jobs Applied</span>
                            <span class=\"value\"><span>200</span></span>
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
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    {% include 'applicant_sidebar.twig' %}
                </div>
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
                                        <p>{{ user.first_name|capitalize ~\" \"~ user.last_name|capitalize }}</p>
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
                                        <p><a href=\"mailto:{{ user.email }}\">{{ user.email|capitalize }}</a></p>
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
                                        <p><a href=\"tel:{{ user.phone }}\">{{ user.phone }}</a></p>
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
                                        <h4>Date Of birth: </h4>
                                        <p>{{ user.d_o_b }}</p>
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
                                        <p>{{ user.address|capitalize }}</p>
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
                                        <p>{{ user.last_education|capitalize ~\" \"~ user.provience|capitalize ~\" \"~ user.country|capitalize }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"heading-inner\">
                            <p class=\"title\">About Me</p>
                        </div>
                        <p>{{ user.about_me|default(\"Please add some lines about yourself!\") }}</p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Educational Information</p>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-clipboard\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>Insitute of Managment</h4>
                                    <span>2012 to 2016</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>Master of Business Administration</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-pencil\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>Uni. Of Locastus UK</h4>
                                    <span>2010 to 2012</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>Software Engineering</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-expand\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>Focus Higher School</h4>
                                    <span>2008 to 2010</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>intermediate</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Work Experience</p>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-clipboard\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>Glixen Technologies Ltd.</h4>
                                    <span>2012 to present</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>principal software engineer</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-pencil\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>ScriptsBundle Studio</h4>
                                    <span>2010 to 2012</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>Designing Engineering</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row education-box\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"resume-icon\">
                                    <span class=\"icon-expand\"></span>
                                </div>
                                <div class=\"insti-name\">
                                    <h4>Lhr Software house</h4>
                                    <span>2008 to 2010</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                <div class=\"degree-info\">
                                    <h4>Intern</h4>
                                    <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner\">
                        <p class=\"title\">Skills That I have</p>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 92%;\">
                                    <span class=\"sr-only\">92% Complete</span>
                                </div>
                                <span class=\"progress-type\">HTML / HTML5</span>
                                <span class=\"progress-completed\">92%</span>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"5\" aria-valuemin=\"0\" aria-valuemax=\"10\" style=\"width: 90%\">
                                    <span class=\"sr-only\">38% Complete (success)</span>
                                </div>
                                <span class=\"progress-type\">PHP / MySQL</span>
                                <span class=\"progress-completed\">90%</span>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                    <span class=\"sr-only\">80% Complete (danger)</span>
                                </div>
                                <span class=\"progress-type\">CSS / CSS3</span>
                                <span class=\"progress-completed\">80%</span>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                    <span class=\"sr-only\">20% Complete (info)</span>
                                </div>
                                <span class=\"progress-type\">Java</span>
                                <span class=\"progress-completed\">20%</span>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\">
                                    <span class=\"sr-only\">85% Complete (warning)</span>
                                </div>
                                <span class=\"progress-type\">JavaScript / jQuery</span>
                                <span class=\"progress-completed\">85%</span>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                    <span class=\"sr-only\">80% Complete (danger)</span>
                                </div>
                                <span class=\"progress-type\">CSS / CSS3</span>
                                <span class=\"progress-completed\">80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class=\"brand-logo-area clients-bg\">
    <div class=\"clients-list light-blue\">
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_1.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_2.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_3.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_4.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_1.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_2.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_3.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
        <div class=\"client-logo\">
            <a href=\"#\"><img src=\"images/clients/client_4.png\" class=\"img-responsive\" alt=\"Brand Image\" /></a>
        </div>
    </div>
</div>

{% endblock %}", "profile.twig", "/home/frescihp/public_html/getwork/application/views/profile.twig");
    }
}
