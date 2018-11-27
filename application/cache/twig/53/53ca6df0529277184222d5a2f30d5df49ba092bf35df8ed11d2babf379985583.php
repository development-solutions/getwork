<?php

/* edit_job.twig */
class __TwigTemplate_1c1c60758973c7c83c632862b1e72ef544f127e25900a5d3a7b87af4bc7eacc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "edit_job.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        $this->loadTemplate("employer_navigation.twig", "edit_job.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"post-job\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"box-panel\">
                    <div class=\"Heading-title black\">
                        <h3>Update A job</h3>
                        ";
        // line 17
        echo "                    </div>
                    <form class=\"row\" action=\"/dashboard/edit_job/";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Title</label>
                                <input type=\"text\" placeholder=\"Job Title\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "title", array()), "html", null, true);
        echo "\" name=\"title\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_title", array());
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Location</label>
                                <input type=\"text\" placeholder=\"Job Location\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "location", array()), "html", null, true);
        echo "\" name=\"location\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_location", array());
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Category</label>
                                <select class=\"questions-category form-control\" name=\"category\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 34
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_category", array());
        echo "\">
                                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["job_categories"]) ? $context["job_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 36
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()));
            echo "\" ";
            if (($this->getAttribute($context["cat"], "id", array()) == $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "category_fk", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "job_category", array()));
            echo "</option>    
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Type</label>
                                <select name=\"job_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 44
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_job_type", array());
        echo "\">
                                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobType"]) ? $context["jobType"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 46
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()));
            echo "\" ";
            if (($this->getAttribute($context["type"], "id", array()) == $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "type_fk", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "job_type", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Experience</label>
                                <select name=\"experience\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 55
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_experience", array());
        echo "\">
                                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobExperience"]) ? $context["jobExperience"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 57
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "id", array()));
            echo "\" ";
            if (($this->getAttribute($context["exp"], "id", array()) == $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "experience_fk", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "job_experience", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopaddingright\">
                            <div class=\"form-group input-icon-left\">
                                <label>Offered Salary</label>
                                <input type=\"text\" placeholder=\"Offered Salary\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "salary", array()), "html", null, true);
        echo "\" name=\"salary\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_salary", array());
        echo "\">
                                <i class=\"fa fa-gbp\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Duration</label>
                                <select name=\"salary_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 72
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_salary_type", array());
        echo "\">
                                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salaryType"]) ? $context["salaryType"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 74
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()));
            echo "\" ";
            if (($this->getAttribute($context["type"], "id", array()) == $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "salary_type_fk", array()))) {
                echo " selected ";
            }
            echo ">/";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["type"], "salary_type", array())), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>No. of Vacancies</label>
                                <input type=\"text\" placeholder=\"Vacancies\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "vacancies", array()), "html", null, true);
        echo "\" name=\"vacancies\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Last Date</label>
                                <input type=\"text\" placeholder=\"Last Date\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "last_date", array()), "html", null, true);
        echo "\" name=\"last_date\" class=\"form_date form-control\" data-date-format=\"dd-mm-yyyy\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Skills</label>
                                <input type=\"text\" id=\"tags\" name=\"skills\" value=\"";
        // line 94
        echo $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "skills", array());
        echo "\" class=\"form-control\" data-role=\"tagsinput\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Description</label>
                                <textarea name=\"job_description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 100
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_description", array());
        echo "\">";
        echo $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "description", array());
        echo "</textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <input type=\"submit\" name=\"update\" value=\"Update Job\" class=\"btn btn-default pull-right\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 112
        if (((isset($context["message"]) ? $context["message"] : null) != (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 113
            echo "<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.";
            // line 122
            echo (isset($context["alert"]) ? $context["alert"] : null);
            echo "(\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null));
            echo "\",{timeOut: 5000});
    },200);
</script>
";
        }
    }

    // line 128
    public function block_footer($context, array $blocks = array())
    {
        // line 129
        echo "    ";
        $this->loadTemplate("edit_job.twig", "edit_job.twig", 129, "245622826")->display($context);
    }

    public function getTemplateName()
    {
        return "edit_job.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 129,  288 => 128,  277 => 122,  266 => 113,  264 => 112,  247 => 100,  238 => 94,  229 => 88,  220 => 82,  212 => 76,  197 => 74,  193 => 73,  189 => 72,  177 => 65,  169 => 59,  154 => 57,  150 => 56,  146 => 55,  137 => 48,  122 => 46,  118 => 45,  114 => 44,  106 => 38,  91 => 36,  87 => 35,  83 => 34,  72 => 28,  61 => 22,  54 => 18,  51 => 17,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"post-job\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"box-panel\">
                    <div class=\"Heading-title black\">
                        <h3>Update A job</h3>
                        {# <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p> #}
                    </div>
                    <form class=\"row\" action=\"/dashboard/edit_job/{{ job.id }}\" method=\"post\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Title</label>
                                <input type=\"text\" placeholder=\"Job Title\" value=\"{{ job.title }}\" name=\"title\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_title|raw }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Location</label>
                                <input type=\"text\" placeholder=\"Job Location\" value=\"{{ job.location }}\" name=\"location\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_location|raw }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Category</label>
                                <select class=\"questions-category form-control\" name=\"category\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_category|raw }}\">
                                    {% for cat in job_categories %}
                                        <option value=\"{{ cat.id|e }}\" {% if cat.id==job.category_fk %} selected {% endif %}>{{ cat.job_category|e }}</option>    
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Type</label>
                                <select name=\"job_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_job_type|raw }}\">
                                    {% for type in jobType %}
                                        <option value=\"{{ type.id|e }}\" {% if type.id==job.type_fk %} selected {% endif %}>{{ type.job_type|e }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Experience</label>
                                <select name=\"experience\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_experience|raw }}\">
                                    {% for exp in jobExperience %}
                                        <option value=\"{{exp.id|e}}\" {% if exp.id==job.experience_fk %} selected {% endif %}>{{exp.job_experience|e}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopaddingright\">
                            <div class=\"form-group input-icon-left\">
                                <label>Offered Salary</label>
                                <input type=\"text\" placeholder=\"Offered Salary\" value=\"{{ job.salary }}\" name=\"salary\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_salary|raw }}\">
                                <i class=\"fa fa-gbp\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Duration</label>
                                <select name=\"salary_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_salary_type|raw }}\">
                                    {% for type in salaryType %}
                                        <option value=\"{{ type.id|e }}\" {% if type.id == job.salary_type_fk %} selected {% endif %}>/{{ type.salary_type|capitalize }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>No. of Vacancies</label>
                                <input type=\"text\" placeholder=\"Vacancies\" value=\"{{ job.vacancies }}\" name=\"vacancies\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Last Date</label>
                                <input type=\"text\" placeholder=\"Last Date\" value=\"{{ job.last_date }}\" name=\"last_date\" class=\"form_date form-control\" data-date-format=\"dd-mm-yyyy\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Skills</label>
                                <input type=\"text\" id=\"tags\" name=\"skills\" value=\"{{ job.skills|raw }}\" class=\"form-control\" data-role=\"tagsinput\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Description</label>
                                <textarea name=\"job_description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_description|raw }}\">{{ job.description|raw }}</textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <input type=\"submit\" name=\"update\" value=\"Update Job\" class=\"btn btn-default pull-right\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{% if message != empty %}
<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.{{ alert|raw }}(\"{{ message|e }}\",{timeOut: 5000});
    },200);
</script>
{% endif %}
{% endblock %}

{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <!-- FOR THIS PAGE ONLY -->
            <script type=\"text/javascript\" src=\"../../js/jquery.tagsinput.min.js\"></script>
            <script type=\"text/javascript\">
            jQuery(document).ready(function(){
                {% if error|length > 0 %}
                    jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                {% endif %}

                \$(\".questions-category\").select2({
                    placeholder: \"Select Post Category\",
                    allowClear: true,
                    maximumSelectionLength: 3,
                    /*width: \"50%\",*/
                });
                \$('#tags').tagsInput({
                    width: 'auto'
                });
            });
            </script>

            <!-- CK-EDITOR -->
            <script src=\"http://cdn.ckeditor.com/4.5.10/standard/ckeditor.js\"></script>
            <script type=\"text/javascript\">
                /*CKEDITOR.replace('ckeditor');*/
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "edit_job.twig", "/home/getwork/public_html/application/views/edit_job.twig");
    }
}


/* edit_job.twig */
class __TwigTemplate_1c1c60758973c7c83c632862b1e72ef544f127e25900a5d3a7b87af4bc7eacc7_245622826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "edit_job.twig", 129);
        $this->blocks = array(
            'customScripts' => array($this, 'block_customScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "footer.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 130
    public function block_customScripts($context, array $blocks = array())
    {
        // line 131
        echo "            <!-- FOR THIS PAGE ONLY -->
            <script type=\"text/javascript\" src=\"../../js/jquery.tagsinput.min.js\"></script>
            <script type=\"text/javascript\">
            jQuery(document).ready(function(){
                ";
        // line 135
        if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
            // line 136
            echo "                    jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                ";
        }
        // line 138
        echo "
                \$(\".questions-category\").select2({
                    placeholder: \"Select Post Category\",
                    allowClear: true,
                    maximumSelectionLength: 3,
                    /*width: \"50%\",*/
                });
                \$('#tags').tagsInput({
                    width: 'auto'
                });
            });
            </script>

            <!-- CK-EDITOR -->
            <script src=\"http://cdn.ckeditor.com/4.5.10/standard/ckeditor.js\"></script>
            <script type=\"text/javascript\">
                /*CKEDITOR.replace('ckeditor');*/
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "edit_job.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 138,  517 => 136,  515 => 135,  509 => 131,  506 => 130,  291 => 129,  288 => 128,  277 => 122,  266 => 113,  264 => 112,  247 => 100,  238 => 94,  229 => 88,  220 => 82,  212 => 76,  197 => 74,  193 => 73,  189 => 72,  177 => 65,  169 => 59,  154 => 57,  150 => 56,  146 => 55,  137 => 48,  122 => 46,  118 => 45,  114 => 44,  106 => 38,  91 => 36,  87 => 35,  83 => 34,  72 => 28,  61 => 22,  54 => 18,  51 => 17,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"post-job\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"box-panel\">
                    <div class=\"Heading-title black\">
                        <h3>Update A job</h3>
                        {# <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p> #}
                    </div>
                    <form class=\"row\" action=\"/dashboard/edit_job/{{ job.id }}\" method=\"post\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Title</label>
                                <input type=\"text\" placeholder=\"Job Title\" value=\"{{ job.title }}\" name=\"title\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_title|raw }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Location</label>
                                <input type=\"text\" placeholder=\"Job Location\" value=\"{{ job.location }}\" name=\"location\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_location|raw }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Category</label>
                                <select class=\"questions-category form-control\" name=\"category\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_category|raw }}\">
                                    {% for cat in job_categories %}
                                        <option value=\"{{ cat.id|e }}\" {% if cat.id==job.category_fk %} selected {% endif %}>{{ cat.job_category|e }}</option>    
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Type</label>
                                <select name=\"job_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_job_type|raw }}\">
                                    {% for type in jobType %}
                                        <option value=\"{{ type.id|e }}\" {% if type.id==job.type_fk %} selected {% endif %}>{{ type.job_type|e }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Experience</label>
                                <select name=\"experience\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_experience|raw }}\">
                                    {% for exp in jobExperience %}
                                        <option value=\"{{exp.id|e}}\" {% if exp.id==job.experience_fk %} selected {% endif %}>{{exp.job_experience|e}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopaddingright\">
                            <div class=\"form-group input-icon-left\">
                                <label>Offered Salary</label>
                                <input type=\"text\" placeholder=\"Offered Salary\" value=\"{{ job.salary }}\" name=\"salary\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_salary|raw }}\">
                                <i class=\"fa fa-gbp\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Duration</label>
                                <select name=\"salary_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_salary_type|raw }}\">
                                    {% for type in salaryType %}
                                        <option value=\"{{ type.id|e }}\" {% if type.id == job.salary_type_fk %} selected {% endif %}>/{{ type.salary_type|capitalize }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>No. of Vacancies</label>
                                <input type=\"text\" placeholder=\"Vacancies\" value=\"{{ job.vacancies }}\" name=\"vacancies\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Last Date</label>
                                <input type=\"text\" placeholder=\"Last Date\" value=\"{{ job.last_date }}\" name=\"last_date\" class=\"form_date form-control\" data-date-format=\"dd-mm-yyyy\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Skills</label>
                                <input type=\"text\" id=\"tags\" name=\"skills\" value=\"{{ job.skills|raw }}\" class=\"form-control\" data-role=\"tagsinput\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Description</label>
                                <textarea name=\"job_description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_description|raw }}\">{{ job.description|raw }}</textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <input type=\"submit\" name=\"update\" value=\"Update Job\" class=\"btn btn-default pull-right\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{% if message != empty %}
<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.{{ alert|raw }}(\"{{ message|e }}\",{timeOut: 5000});
    },200);
</script>
{% endif %}
{% endblock %}

{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <!-- FOR THIS PAGE ONLY -->
            <script type=\"text/javascript\" src=\"../../js/jquery.tagsinput.min.js\"></script>
            <script type=\"text/javascript\">
            jQuery(document).ready(function(){
                {% if error|length > 0 %}
                    jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                {% endif %}

                \$(\".questions-category\").select2({
                    placeholder: \"Select Post Category\",
                    allowClear: true,
                    maximumSelectionLength: 3,
                    /*width: \"50%\",*/
                });
                \$('#tags').tagsInput({
                    width: 'auto'
                });
            });
            </script>

            <!-- CK-EDITOR -->
            <script src=\"http://cdn.ckeditor.com/4.5.10/standard/ckeditor.js\"></script>
            <script type=\"text/javascript\">
                /*CKEDITOR.replace('ckeditor');*/
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "edit_job.twig", "/home/getwork/public_html/application/views/edit_job.twig");
    }
}
