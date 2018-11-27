<?php

/* applicant_edit.twig */
class __TwigTemplate_9b5eba0dc12b07b800ce2637c038128d5004172b232b7f3ad7bbc03510fa3eb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "applicant_edit.twig", 1);
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
        $this->loadTemplate("applicant_navigation.twig", "applicant_edit.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"profile-card\">
                        <div class=\"banner\">
                            <img src=\"../../images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"../../images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                        </div>
                        <div class=\"card-body\">
                            <h3>";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array())), "html", null, true);
        echo "</h3>
                            <span class=\"title\">A web Designer</span>
                        </div>
                        <ul class=\"social-network social-circle onwhite\">
                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                    ";
        // line 32
        $this->loadTemplate("applicant_sidebar.twig", "applicant_edit.twig", 32)->display($context);
        // line 33
        echo "                </div>
                <form action=\"/profile/edit_profile\" method=\"post\">
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>First Name <span class=\"required\">*</span></label>
                                    <div class=\"register_error\">";
        // line 44
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_fname", array());
        echo "</div>
                                    <input value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"first_name\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Last Name <span class=\"required\">*</span></label>
                                    <div class=\"register_error\">";
        // line 51
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_lname", array());
        echo "</div>
                                    <input value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_name\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Date Of Birth <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "d_o_b", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"d_o_b\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Email <span class=\"required\">*</span></label>
                                    <div class=\"register_error\">";
        // line 64
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_email", array());
        echo "</div>
                                    <input value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\" readonly placeholder=\"\" class=\"form-control\" type=\"email\" name=\"email\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Phone <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"phone\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Last Education <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_education", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_education\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"address\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>City <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"city\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Provience <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "provience", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"provience\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Country <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"country\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>About yourSelf <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"about_me\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about_me", array()), "html", null, true);
        echo "</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Educational Detail</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Degree Title <span class=\"required\">*</span></label>
                                    <input placeholder=\"Degree Title\" class=\"form-control\" type=\"text\" name=\"degree_title[]\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Degree start Date <span class=\"required\">*</span></label>
                                    <input placeholder=\"Pick Date\" class=\"form-control\" type=\"text\" name=\"degree_start_date[]\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Degree End Date <span class=\"required\">*</span></label>
                                    <input placeholder=\" Pick Date\" class=\"form-control\" type=\"text\" name=\"degree_end_date[]\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Description <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"degree_description[]\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                            <a  onclick=\"window.profile.addEducationBlcok(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>        
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Job Experience</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Position <span class=\"required\">*</span></label>
                                    <input placeholder=\"Position Title\" class=\"form-control\" type=\"text\" name=\"job_profile[]\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Job start Date <span class=\"required\">*</span></label>
                                    <input placeholder=\"Pick Date\" class=\"form-control\" type=\"text\" name=\"job_start_data[]\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Job End Date <span class=\"required\">*</span></label>
                                    <input placeholder=\" Pick Date\" class=\"form-control\" type=\"text\" name=\"job_end_date[]\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Description <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"job_description[]\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                            <a onclick=\"window.profile.addExperienceBlock(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Add Skills</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-8 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Skill Name <span class=\"required\">*</span></label>
                                    <input placeholder=\"Skill Name\" class=\"form-control\" type=\"text\" name=\"skill_name[]\">
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Add Percentage (%) <span class=\"required\">*</span></label>
                                    <input placeholder=\"Percentage %\" class=\"form-control\" type=\"text\" name=\"skill_rating[]\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                            <a onclick=\"window.profile.addSkillBlock(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Social Links</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Face Book <span class=\"required\">*</span></label>
                                    <input placeholder=\"Profile URL\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Twitter <span class=\"required\">*</span></label>
                                    <input placeholder=\"Profile URL\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>LinkedIn <span class=\"required\">*</span></label>
                                    <input placeholder=\"Profile URL\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Google Pluse <span class=\"required\">*</span></label>
                                    <input placeholder=\"Profile URL\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                        <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"Save Profile\" name=\"edit\" />
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
";
        // line 244
        if (((isset($context["message"]) ? $context["message"] : null) == "success")) {
            // line 245
            echo "<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.success(\"Profile updated successfully!\",{timeOut: 5000});
    },1000);
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "applicant_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 245,  328 => 244,  188 => 107,  179 => 101,  170 => 95,  161 => 89,  152 => 83,  143 => 77,  134 => 71,  125 => 65,  121 => 64,  112 => 58,  103 => 52,  99 => 51,  90 => 45,  86 => 44,  73 => 33,  71 => 32,  56 => 22,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"profile-card\">
                        <div class=\"banner\">
                            <img src=\"../../images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"../../images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                        </div>
                        <div class=\"card-body\">
                            <h3>{{user.first_name|capitalize}} {{user.last_name|capitalize}}</h3>
                            <span class=\"title\">A web Designer</span>
                        </div>
                        <ul class=\"social-network social-circle onwhite\">
                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                    {% include 'applicant_sidebar.twig' %}
                </div>
                <form action=\"/profile/edit_profile\" method=\"post\">
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>First Name <span class=\"required\">*</span></label>
                                    <div class=\"register_error\">{{ errors.error_fname|raw }}</div>
                                    <input value=\"{{ user.first_name}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"first_name\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Last Name <span class=\"required\">*</span></label>
                                    <div class=\"register_error\">{{ errors.error_lname|raw }}</div>
                                    <input value=\"{{ user.last_name}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_name\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Date Of Birth <span class=\"required\"></span></label>
                                    <input value=\"{{ user.d_o_b}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"d_o_b\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Email <span class=\"required\">*</span></label>
                                    <div class=\"register_error\">{{ errors.error_email|raw }}</div>
                                    <input value=\"{{ user.email}}\" readonly placeholder=\"\" class=\"form-control\" type=\"email\" name=\"email\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Phone <span class=\"required\"></span></label>
                                    <input value=\"{{ user.phone}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"phone\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Last Education <span class=\"required\"></span></label>
                                    <input value=\"{{ user.last_education}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_education\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\"></span></label>
                                    <input value=\"{{ user.address}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"address\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>City <span class=\"required\"></span></label>
                                    <input value=\"{{ user.city}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"city\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Provience <span class=\"required\"></span></label>
                                    <input value=\"{{ user.provience}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"provience\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Country <span class=\"required\"></span></label>
                                    <input value=\"{{ user.country}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"country\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>About yourSelf <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"about_me\">{{ user.about_me}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Educational Detail</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Degree Title <span class=\"required\">*</span></label>
                                    <input placeholder=\"Degree Title\" class=\"form-control\" type=\"text\" name=\"degree_title[]\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Degree start Date <span class=\"required\">*</span></label>
                                    <input placeholder=\"Pick Date\" class=\"form-control\" type=\"text\" name=\"degree_start_date[]\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Degree End Date <span class=\"required\">*</span></label>
                                    <input placeholder=\" Pick Date\" class=\"form-control\" type=\"text\" name=\"degree_end_date[]\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Description <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"degree_description[]\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                            <a  onclick=\"window.profile.addEducationBlcok(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>        
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Job Experience</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Position <span class=\"required\">*</span></label>
                                    <input placeholder=\"Position Title\" class=\"form-control\" type=\"text\" name=\"job_profile[]\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Job start Date <span class=\"required\">*</span></label>
                                    <input placeholder=\"Pick Date\" class=\"form-control\" type=\"text\" name=\"job_start_data[]\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Job End Date <span class=\"required\">*</span></label>
                                    <input placeholder=\" Pick Date\" class=\"form-control\" type=\"text\" name=\"job_end_date[]\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Description <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"job_description[]\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                            <a onclick=\"window.profile.addExperienceBlock(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Add Skills</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-8 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Skill Name <span class=\"required\">*</span></label>
                                    <input placeholder=\"Skill Name\" class=\"form-control\" type=\"text\" name=\"skill_name[]\">
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Add Percentage (%) <span class=\"required\">*</span></label>
                                    <input placeholder=\"Percentage %\" class=\"form-control\" type=\"text\" name=\"skill_rating[]\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12\">
                            <a onclick=\"window.profile.addSkillBlock(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Social Links</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Face Book <span class=\"required\">*</span></label>
                                    <input placeholder=\"Profile URL\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Twitter <span class=\"required\">*</span></label>
                                    <input placeholder=\"Profile URL\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>LinkedIn <span class=\"required\">*</span></label>
                                    <input placeholder=\"Profile URL\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Google Pluse <span class=\"required\">*</span></label>
                                    <input placeholder=\"Profile URL\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                        <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"Save Profile\" name=\"edit\" />
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
{% if message=='success' %}
<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.success(\"Profile updated successfully!\",{timeOut: 5000});
    },1000);
</script>
{% endif %}
{% endblock %}", "applicant_edit.twig", "/home/frescihp/public_html/getwork/application/views/applicant_edit.twig");
    }
}
