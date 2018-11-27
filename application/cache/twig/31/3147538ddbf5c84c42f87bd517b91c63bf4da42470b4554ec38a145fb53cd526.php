<?php

/* candidate_profile.twig */
class __TwigTemplate_7f3eb0589c44e71c93601ba58d143c9b7fc3ff19fa25623bbb2595127dc76caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "candidate_profile.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<section class=\"\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"about-image\">
                        <img class=\"img-responsive\" src=\"/uploads/";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    ";
        // line 21
        echo "                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
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
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "first_name", array()) . " ") . $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "last_name", array())), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">

                                        <span class=\"icon-calendar\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Date of Birth: </h4>
                                        <p>";
        // line 47
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "d_o_b", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "d_o_b", array()), "Not Provided")) : ("Not Provided")), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 51
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 52
            echo "                                ";
            if ((isset($context["shortlisted"]) ? $context["shortlisted"] : null)) {
                // line 53
                echo "                                    <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                        <a  href=\"javascript:void(0);\" class=\"btn btn-primary cstm-btn\"><i class=\"fa fa-filter\"></i> Shortlisted</a>
                                    </div>
                                ";
            } else {
                // line 57
                echo "                                    <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                        <a data-id=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "user_id_fk", array()), "html", null, true);
                echo "\" onclick=\"window.dashboard.shortlist(this)\" href=\"javascript:void(0);\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> Shortlist</a>
                                    </div>
                                ";
            }
            // line 61
            echo "                            ";
        }
        // line 62
        echo "                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\"icon-map-pin\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Address: </h4>
                                        <p>";
        // line 71
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "address", array()), "Not Provided")) : ("Not Provided")), "html", null, true);
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
                                        <h4>Nationality: </h4>
                                        <p>";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "country", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "country", array()), "Not Provided")) : ("Not Provided")), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 86
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 87
            echo "                                <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                    <a href=\"javascript:void(0);\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"jQuery('#to').val(";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "user_id_fk", array()), "html", null, true);
            echo ")\" class=\"btn btn-info cstm-btn\"><i class=\"fa fa-envelope-o\"></i> Contact Me</a>
                                </div>
                            ";
        }
        // line 91
        echo "                        </div>
                        <p class=\"about-me\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about_me", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Educational Information</p>
                        </div>
                        ";
        // line 100
        if ((twig_length_filter($this->env, (isset($context["education"]) ? $context["education"] : null)) == 0)) {
            // line 101
            echo "                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">Not Provided</h4>
                            </div>
                        ";
        }
        // line 105
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["education"]) ? $context["education"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["edu"]) {
            // line 106
            echo "                            <div class=\"row education-box\">
                                <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                    <div class=\"resume-icon\">
                                        <span class=\"icon-clipboard\"></span>
                                    </div>
                                    <div class=\"insti-name\">
                                        <h4>Insitute of Managment</h4>
                                        <span>";
            // line 113
            echo twig_escape_filter($this->env, (($this->getAttribute($context["edu"], "start_date", array()) . " to ") . $this->getAttribute($context["edu"], "end_date", array())), "html", null, true);
            echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                    <div class=\"degree-info\">
                                        <h4>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "title", array()), "html", null, true);
            echo "</h4>
                                        <p>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "description", array()), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Work Experience</p>
                        </div>
                        ";
        // line 131
        if ((twig_length_filter($this->env, (isset($context["experience"]) ? $context["experience"] : null)) == 0)) {
            // line 132
            echo "                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">Not Provided</h4>
                            </div>
                        ";
        }
        // line 136
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) ? $context["experience"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 137
            echo "                            <div class=\"row education-box\">
                                <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                    <div class=\"resume-icon\">
                                        <span class=\"icon-pencil\"></span>
                                    </div>
                                    <div class=\"insti-name\">
                                        <h4>Company</h4>
                                        <span>";
            // line 144
            echo twig_escape_filter($this->env, (($this->getAttribute($context["exp"], "start_date", array()) . " to ") . $this->getAttribute($context["exp"], "end_date", array())), "html", null, true);
            echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                    <div class=\"degree-info\">
                                        <h4>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "profile", array()), "html", null, true);
            echo "</h4>
                                        <p>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "description", array()), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner\">
                        <p class=\"title\">Skills/Certifications</p>
                    </div>
                    ";
        // line 161
        if ((twig_length_filter($this->env, (isset($context["skills"]) ? $context["skills"] : null)) == 0)) {
            // line 162
            echo "                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">Not Provided</h4>
                        </div>
                    ";
        }
        // line 166
        echo "                    <div class=\"row\">
                        ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 168
            echo "                            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\">
                                        <span class=\"sr-only\">100% Complete</span>
                                    </div>
                                    <span class=\"progress-type\">";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()));
            echo "</span>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 183
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 184
            echo "<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Send Message to Candidate</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"to\" type=\"hidden\" name=\"to\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" readonly=\"true\" name=\"subject\" value=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
            echo "\" placeholder=\"From\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.dashboard.sendMessage()\" class=\"btn btn-default btn-block\">Send Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "candidate_profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 197,  312 => 184,  310 => 183,  302 => 177,  292 => 173,  285 => 168,  281 => 167,  278 => 166,  272 => 162,  270 => 161,  262 => 155,  251 => 150,  247 => 149,  239 => 144,  230 => 137,  225 => 136,  219 => 132,  217 => 131,  208 => 124,  197 => 119,  193 => 118,  185 => 113,  176 => 106,  171 => 105,  165 => 101,  163 => 100,  152 => 92,  149 => 91,  143 => 88,  140 => 87,  138 => 86,  131 => 82,  117 => 71,  106 => 62,  103 => 61,  97 => 58,  94 => 57,  88 => 53,  85 => 52,  83 => 51,  76 => 47,  61 => 35,  45 => 21,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}

<section class=\"\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"about-image\">
                        <img class=\"img-responsive\" src=\"/uploads/{{ profile.profile_image|default('profile.jpg') }}\" alt=\"\">
                    </div>
                    {# <div class=\"resume-social\">
                        <ul class=\"social-network social-circle onwhite\">
                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div> #}
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
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
                                        <p>{{ profile.first_name~\" \"~profile.last_name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">

                                        <span class=\"icon-calendar\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Date of Birth: </h4>
                                        <p>{{ profile.d_o_b|default(\"Not Provided\") }}</p>
                                    </div>
                                </div>
                            </div>
                            {% if logged_in %}
                                {% if shortlisted %}
                                    <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                        <a  href=\"javascript:void(0);\" class=\"btn btn-primary cstm-btn\"><i class=\"fa fa-filter\"></i> Shortlisted</a>
                                    </div>
                                {% else %}
                                    <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                        <a data-id=\"{{ profile.user_id_fk }}\" onclick=\"window.dashboard.shortlist(this)\" href=\"javascript:void(0);\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> Shortlist</a>
                                    </div>
                                {% endif %}
                            {% endif %}
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\"icon-map-pin\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Address: </h4>
                                        <p>{{ profile.address|default(\"Not Provided\") }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                <div class=\"my-contact\">
                                    <div class=\"contact-icon\">
                                        <span class=\"icon-flag\"></span>
                                    </div>
                                    <div class=\"contact-info\">
                                        <h4>Nationality: </h4>
                                        <p>{{ profile.country|default(\"Not Provided\") }}</p>
                                    </div>
                                </div>
                            </div>
                            {% if logged_in %}
                                <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                    <a href=\"javascript:void(0);\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"jQuery('#to').val({{ profile.user_id_fk }})\" class=\"btn btn-info cstm-btn\"><i class=\"fa fa-envelope-o\"></i> Contact Me</a>
                                </div>
                            {% endif %}
                        </div>
                        <p class=\"about-me\">{{ profile.about_me }}</p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"resume-box\">
                        <div class=\"heading-inner\">
                            <p class=\"title\">Educational Information</p>
                        </div>
                        {% if education|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">Not Provided</h4>
                            </div>
                        {% endif %}
                        {% for edu in education %}
                            <div class=\"row education-box\">
                                <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                    <div class=\"resume-icon\">
                                        <span class=\"icon-clipboard\"></span>
                                    </div>
                                    <div class=\"insti-name\">
                                        <h4>Insitute of Managment</h4>
                                        <span>{{ edu.start_date~\" to \"~edu.end_date}}</span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                    <div class=\"degree-info\">
                                        <h4>{{ edu.title }}</h4>
                                        <p>{{ edu.description }}</p>
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
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">Not Provided</h4>
                            </div>
                        {% endif %}
                        {% for exp in experience %}
                            <div class=\"row education-box\">
                                <div class=\"col-md-4 col-xs-12 col-sm-4\">
                                    <div class=\"resume-icon\">
                                        <span class=\"icon-pencil\"></span>
                                    </div>
                                    <div class=\"insti-name\">
                                        <h4>Company</h4>
                                        <span>{{ exp.start_date~\" to \"~exp.end_date }}</span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-md-8 col-sm-8\">
                                    <div class=\"degree-info\">
                                        <h4>{{ exp.profile }}</h4>
                                        <p>{{ exp.description }}</p>
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
                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">Not Provided</h4>
                        </div>
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
{% if logged_in %}
<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Send Message to Candidate</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"to\" type=\"hidden\" name=\"to\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" readonly=\"true\" name=\"subject\" value=\"{{ user.company_name }}\" placeholder=\"From\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.dashboard.sendMessage()\" class=\"btn btn-default btn-block\">Send Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}
{% endblock %}", "candidate_profile.twig", "/home/getwork/public_html/application/views/candidate_profile.twig");
    }
}
