<?php

/* post_job.twig */
class __TwigTemplate_c6af69ed15e5dcc0e9c6d941a86c7dd715a9a9e4664df2cfa0a4993108d12b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "post_job.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "post_job.twig", 4)->display($context);
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
                        <h3>Post a job</h3>
                        <p>Share your job details to get the best candidate for you.</p>
                    </div>
                    <form name=\"job_post\" class=\"row\" action=\"/dashboard/postjob\" method=\"post\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Title <span class=\"required\">*</span></label>
                                <input type=\"text\" onkeyup=\"window.common.getJobTitle(this.value)\" onblur=\"clearSearch()\" placeholder=\"Job Title\" name=\"title\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
        echo "\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_title", array());
        echo "\">
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade nopadding\"></ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Location <span class=\"required\">*</span></label>
                                <input id=\"autocomplete\" onFocus=\"window.common.geolocate()\" type=\"text\" placeholder=\"Job Location\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "location", array()), "html", null, true);
        echo "\" name=\"location\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_location", array());
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Category <span class=\"required\">*</span></label>
                                <select class=\"questions-category form-control\" name=\"category\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 37
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_category", array());
        echo "\">
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["job_categories"]) ? $context["job_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 39
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()));
            echo "\" ";
            if (($this->getAttribute($context["cat"], "id", array()) == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "category_fk", array()))) {
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
        // line 41
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 nopaddingright\">
                            <div class=\"form-group\">
                                <label>Job Type <span class=\"required\">*</span></label>
                                <select name=\"job_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 47
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_job_type", array());
        echo "\">
                                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobType"]) ? $context["jobType"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 49
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()));
            echo "\" ";
            if (($this->getAttribute($context["type"], "id", array()) == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_fk", array()))) {
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
        // line 51
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Contract Length</label>
                                <div class=\"validation_error\">";
        // line 57
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_contract", array());
        echo "</div>
                                <input type=\"text\" placeholder=\"Contract Length\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "contract_length", array()), "html", null, true);
        echo "\" name=\"contract_length\" class=\"form-control\" >
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Experience <span class=\"required\">*</span></label>
                                <select name=\"experience\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 65
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_experience", array());
        echo "\">
                                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobExperience"]) ? $context["jobExperience"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 67
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "id", array()));
            echo "\" ";
            if (($this->getAttribute($context["exp"], "id", array()) == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "experience_fk", array()))) {
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
        // line 69
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopaddingright\">
                            <div class=\"form-group input-icon-left\">
                                <label>Offered Salary <span class=\"required\">*</span></label>
                                <input type=\"text\" placeholder=\"Offered Salary\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "salary", array()), "html", null, true);
        echo "\" name=\"salary\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_salary", array());
        echo "\">
                                <i class=\"fa fa-gbp\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Duration <span class=\"required\">*</span></label>
                                <select name=\"salary_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 82
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_salary_type", array());
        echo "\">
                                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salaryType"]) ? $context["salaryType"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 84
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()));
            echo "\" ";
            if (($this->getAttribute($context["type"], "id", array()) == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "salary_type_fk", array()))) {
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
        // line 86
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>No. of Vacancies</label>
                                <input type=\"text\" placeholder=\"Vacancies\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "vacancies", array()), "html", null, true);
        echo "\" name=\"vacancies\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Last Date</label>
                                <input type=\"text\" placeholder=\"Last Date\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_date", array()), "html", null, true);
        echo "\" name=\"last_date\" class=\"form_date form-control\" data-date-format=\"dd-mm-yyyy\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Skills</label>
                                <input type=\"text\" id=\"tags\" name=\"skills\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "skills", array()), "html", null, true);
        echo "\" class=\"form-control\" data-role=\"tagsinput\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Description <span class=\"required\">*</span></label>
                                <textarea name=\"job_description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 110
        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_description", array());
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "description", array()), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            ";
        // line 114
        if ((isset($context["verified"]) ? $context["verified"] : null)) {
            // line 115
            echo "                                <input type=\"submit\" name=\"post\" value=\"Publish Job\" class=\"btn btn-default pull-right\" />
                            ";
        } else {
            // line 117
            echo "                                <a href=\"javascript:void(0)\" onclick=\"alert('Please verify email to post Job.')\" class=\"btn btn-default pull-right\">Publish Job</a>
                            ";
        }
        // line 119
        echo "                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 126
        if (((isset($context["message"]) ? $context["message"] : null) != (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 127
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
            // line 136
            echo (isset($context["alert"]) ? $context["alert"] : null);
            echo "(\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null));
            echo "\",{timeOut: 5000});
    },200);
</script>
";
        }
        // line 140
        if (((isset($context["verified"]) ? $context["verified"] : null) == 0)) {
            // line 141
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
        toastr.error(\"Please verify your email to post Job.\");
    },500);
    </script>
";
        }
    }

    // line 157
    public function block_footer($context, array $blocks = array())
    {
        // line 158
        echo "    ";
        $this->loadTemplate("post_job.twig", "post_job.twig", 158, "1994033141")->display($context);
    }

    public function getTemplateName()
    {
        return "post_job.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 158,  330 => 157,  311 => 141,  309 => 140,  300 => 136,  289 => 127,  287 => 126,  278 => 119,  274 => 117,  270 => 115,  268 => 114,  259 => 110,  250 => 104,  241 => 98,  232 => 92,  224 => 86,  209 => 84,  205 => 83,  201 => 82,  189 => 75,  181 => 69,  166 => 67,  162 => 66,  158 => 65,  148 => 58,  144 => 57,  136 => 51,  121 => 49,  117 => 48,  113 => 47,  105 => 41,  90 => 39,  86 => 38,  82 => 37,  71 => 31,  57 => 22,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
                        <h3>Post a job</h3>
                        <p>Share your job details to get the best candidate for you.</p>
                    </div>
                    <form name=\"job_post\" class=\"row\" action=\"/dashboard/postjob\" method=\"post\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Title <span class=\"required\">*</span></label>
                                <input type=\"text\" onkeyup=\"window.common.getJobTitle(this.value)\" onblur=\"clearSearch()\" placeholder=\"Job Title\" name=\"title\" value=\"{{ data.title }}\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_title|raw }}\">
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade nopadding\"></ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Location <span class=\"required\">*</span></label>
                                <input id=\"autocomplete\" onFocus=\"window.common.geolocate()\" type=\"text\" placeholder=\"Job Location\" value=\"{{ data.location }}\" name=\"location\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_location|raw }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Category <span class=\"required\">*</span></label>
                                <select class=\"questions-category form-control\" name=\"category\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_category|raw }}\">
                                    {% for cat in job_categories %}
                                        <option value=\"{{ cat.id|e }}\" {% if cat.id == data.category_fk %} selected {% endif %}>{{ cat.job_category|e }}</option>    
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 nopaddingright\">
                            <div class=\"form-group\">
                                <label>Job Type <span class=\"required\">*</span></label>
                                <select name=\"job_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_job_type|raw }}\">
                                    {% for type in jobType %}
                                        <option value=\"{{ type.id|e }}\" {% if type.id == data.type_fk %} selected {% endif %}>{{ type.job_type|e }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Contract Length</label>
                                <div class=\"validation_error\">{{ error.error_contract|raw }}</div>
                                <input type=\"text\" placeholder=\"Contract Length\" value=\"{{ data.contract_length }}\" name=\"contract_length\" class=\"form-control\" >
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Experience <span class=\"required\">*</span></label>
                                <select name=\"experience\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_experience|raw }}\">
                                    {% for exp in jobExperience %}
                                        <option value=\"{{exp.id|e}}\" {% if exp.id == data.experience_fk %} selected {% endif %}>{{exp.job_experience|e}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopaddingright\">
                            <div class=\"form-group input-icon-left\">
                                <label>Offered Salary <span class=\"required\">*</span></label>
                                <input type=\"text\" placeholder=\"Offered Salary\" value=\"{{ data.salary }}\" name=\"salary\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_salary|raw }}\">
                                <i class=\"fa fa-gbp\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Duration <span class=\"required\">*</span></label>
                                <select name=\"salary_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_salary_type|raw }}\">
                                    {% for type in salaryType %}
                                        <option value=\"{{ type.id|e }}\" {% if type.id == data.salary_type_fk %} selected {% endif %}>/{{ type.salary_type|capitalize }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>No. of Vacancies</label>
                                <input type=\"text\" placeholder=\"Vacancies\" value=\"{{ data.vacancies }}\" name=\"vacancies\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Last Date</label>
                                <input type=\"text\" placeholder=\"Last Date\" value=\"{{ data.last_date }}\" name=\"last_date\" class=\"form_date form-control\" data-date-format=\"dd-mm-yyyy\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Skills</label>
                                <input type=\"text\" id=\"tags\" name=\"skills\" value=\"{{ data.skills }}\" class=\"form-control\" data-role=\"tagsinput\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Description <span class=\"required\">*</span></label>
                                <textarea name=\"job_description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_description|raw }}\">{{ data.description }}</textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            {% if verified %}
                                <input type=\"submit\" name=\"post\" value=\"Publish Job\" class=\"btn btn-default pull-right\" />
                            {% else %}
                                <a href=\"javascript:void(0)\" onclick=\"alert('Please verify email to post Job.')\" class=\"btn btn-default pull-right\">Publish Job</a>
                            {% endif %}
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
        toastr.error(\"Please verify your email to post Job.\");
    },500);
    </script>
{% endif %}
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <!-- FOR THIS PAGE ONLY -->
            <script type=\"text/javascript\" src=\"../../js/jquery.tagsinput.min.js\"></script>
            <script type=\"text/javascript\">
            function clearSearch(){
                setTimeout(function(){
                    jQuery('#keywords ul').html('')
                },100);
            }
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
            jQuery(\"form\").on(\"submit\",function(){
                var flag = true;
                jQuery(\".form_date\").each(function(i,ele){
                    var date = jQuery(ele).val();
                    if(date != \"\" && !window.common.dateFormat(date)){
                        alert(\"Please enter correct date format\");
                        flag = false;
                        jQuery(ele).focus();
                        return false;
                    }
                });
                return flag;
            });
            </script>

            <!-- CK-EDITOR -->
            <script src=\"http://cdn.ckeditor.com/4.5.10/standard/ckeditor.js\"></script>
            <script type=\"text/javascript\">
                /*CKEDITOR.replace('ckeditor');*/
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "post_job.twig", "/home/getwork/public_html/application/views/post_job.twig");
    }
}


/* post_job.twig */
class __TwigTemplate_c6af69ed15e5dcc0e9c6d941a86c7dd715a9a9e4664df2cfa0a4993108d12b11_1994033141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "post_job.twig", 158);
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

    // line 159
    public function block_customScripts($context, array $blocks = array())
    {
        // line 160
        echo "            <!-- FOR THIS PAGE ONLY -->
            <script type=\"text/javascript\" src=\"../../js/jquery.tagsinput.min.js\"></script>
            <script type=\"text/javascript\">
            function clearSearch(){
                setTimeout(function(){
                    jQuery('#keywords ul').html('')
                },100);
            }
            jQuery(document).ready(function(){
                ";
        // line 169
        if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
            // line 170
            echo "                    jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                ";
        }
        // line 172
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
            jQuery(\"form\").on(\"submit\",function(){
                var flag = true;
                jQuery(\".form_date\").each(function(i,ele){
                    var date = jQuery(ele).val();
                    if(date != \"\" && !window.common.dateFormat(date)){
                        alert(\"Please enter correct date format\");
                        flag = false;
                        jQuery(ele).focus();
                        return false;
                    }
                });
                return flag;
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
        return "post_job.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 172,  611 => 170,  609 => 169,  598 => 160,  595 => 159,  333 => 158,  330 => 157,  311 => 141,  309 => 140,  300 => 136,  289 => 127,  287 => 126,  278 => 119,  274 => 117,  270 => 115,  268 => 114,  259 => 110,  250 => 104,  241 => 98,  232 => 92,  224 => 86,  209 => 84,  205 => 83,  201 => 82,  189 => 75,  181 => 69,  166 => 67,  162 => 66,  158 => 65,  148 => 58,  144 => 57,  136 => 51,  121 => 49,  117 => 48,  113 => 47,  105 => 41,  90 => 39,  86 => 38,  82 => 37,  71 => 31,  57 => 22,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
                        <h3>Post a job</h3>
                        <p>Share your job details to get the best candidate for you.</p>
                    </div>
                    <form name=\"job_post\" class=\"row\" action=\"/dashboard/postjob\" method=\"post\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Title <span class=\"required\">*</span></label>
                                <input type=\"text\" onkeyup=\"window.common.getJobTitle(this.value)\" onblur=\"clearSearch()\" placeholder=\"Job Title\" name=\"title\" value=\"{{ data.title }}\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_title|raw }}\">
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade nopadding\"></ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Location <span class=\"required\">*</span></label>
                                <input id=\"autocomplete\" onFocus=\"window.common.geolocate()\" type=\"text\" placeholder=\"Job Location\" value=\"{{ data.location }}\" name=\"location\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_location|raw }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Category <span class=\"required\">*</span></label>
                                <select class=\"questions-category form-control\" name=\"category\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_category|raw }}\">
                                    {% for cat in job_categories %}
                                        <option value=\"{{ cat.id|e }}\" {% if cat.id == data.category_fk %} selected {% endif %}>{{ cat.job_category|e }}</option>    
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 nopaddingright\">
                            <div class=\"form-group\">
                                <label>Job Type <span class=\"required\">*</span></label>
                                <select name=\"job_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_job_type|raw }}\">
                                    {% for type in jobType %}
                                        <option value=\"{{ type.id|e }}\" {% if type.id == data.type_fk %} selected {% endif %}>{{ type.job_type|e }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Contract Length</label>
                                <div class=\"validation_error\">{{ error.error_contract|raw }}</div>
                                <input type=\"text\" placeholder=\"Contract Length\" value=\"{{ data.contract_length }}\" name=\"contract_length\" class=\"form-control\" >
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Experience <span class=\"required\">*</span></label>
                                <select name=\"experience\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_experience|raw }}\">
                                    {% for exp in jobExperience %}
                                        <option value=\"{{exp.id|e}}\" {% if exp.id == data.experience_fk %} selected {% endif %}>{{exp.job_experience|e}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopaddingright\">
                            <div class=\"form-group input-icon-left\">
                                <label>Offered Salary <span class=\"required\">*</span></label>
                                <input type=\"text\" placeholder=\"Offered Salary\" value=\"{{ data.salary }}\" name=\"salary\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_salary|raw }}\">
                                <i class=\"fa fa-gbp\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Duration <span class=\"required\">*</span></label>
                                <select name=\"salary_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_salary_type|raw }}\">
                                    {% for type in salaryType %}
                                        <option value=\"{{ type.id|e }}\" {% if type.id == data.salary_type_fk %} selected {% endif %}>/{{ type.salary_type|capitalize }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>No. of Vacancies</label>
                                <input type=\"text\" placeholder=\"Vacancies\" value=\"{{ data.vacancies }}\" name=\"vacancies\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Last Date</label>
                                <input type=\"text\" placeholder=\"Last Date\" value=\"{{ data.last_date }}\" name=\"last_date\" class=\"form_date form-control\" data-date-format=\"dd-mm-yyyy\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Skills</label>
                                <input type=\"text\" id=\"tags\" name=\"skills\" value=\"{{ data.skills }}\" class=\"form-control\" data-role=\"tagsinput\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Description <span class=\"required\">*</span></label>
                                <textarea name=\"job_description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ error.error_description|raw }}\">{{ data.description }}</textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            {% if verified %}
                                <input type=\"submit\" name=\"post\" value=\"Publish Job\" class=\"btn btn-default pull-right\" />
                            {% else %}
                                <a href=\"javascript:void(0)\" onclick=\"alert('Please verify email to post Job.')\" class=\"btn btn-default pull-right\">Publish Job</a>
                            {% endif %}
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
        toastr.error(\"Please verify your email to post Job.\");
    },500);
    </script>
{% endif %}
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <!-- FOR THIS PAGE ONLY -->
            <script type=\"text/javascript\" src=\"../../js/jquery.tagsinput.min.js\"></script>
            <script type=\"text/javascript\">
            function clearSearch(){
                setTimeout(function(){
                    jQuery('#keywords ul').html('')
                },100);
            }
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
            jQuery(\"form\").on(\"submit\",function(){
                var flag = true;
                jQuery(\".form_date\").each(function(i,ele){
                    var date = jQuery(ele).val();
                    if(date != \"\" && !window.common.dateFormat(date)){
                        alert(\"Please enter correct date format\");
                        flag = false;
                        jQuery(ele).focus();
                        return false;
                    }
                });
                return flag;
            });
            </script>

            <!-- CK-EDITOR -->
            <script src=\"http://cdn.ckeditor.com/4.5.10/standard/ckeditor.js\"></script>
            <script type=\"text/javascript\">
                /*CKEDITOR.replace('ckeditor');*/
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "post_job.twig", "/home/getwork/public_html/application/views/post_job.twig");
    }
}
