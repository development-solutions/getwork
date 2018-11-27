<?php

/* post_job.twig */
class __TwigTemplate_c939be4b72a3fbed060f7c632e42a5a87d8f70581717e5863a35fcf88c99c38d extends Twig_Template
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
                        <h3>Post A job</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                    <form class=\"row\" action=\"/dashboard/postjob\" method=\"post\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Title</label>
                                <input type=\"text\" placeholder=\"Job Title\" name=\"title\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Location</label>
                                <input type=\"text\" placeholder=\"Job Location\" name=\"location\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Category</label>
                                <select class=\"questions-category form-control\" name=\"category\">
                                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["job_categories"]) ? $context["job_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 36
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()));
            echo "\">";
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
                                <select name=\"job_type\" class=\"questions-category form-control\">
                                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobType"]) ? $context["jobType"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 46
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()));
            echo "\">";
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
                                <select name=\"experience\" class=\"questions-category form-control\">
                                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobExperience"]) ? $context["jobExperience"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 57
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "id", array()));
            echo "\">";
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
                            <div class=\"form-group\">
                                <label>Offered Salary</label>
                                <input type=\"text\" placeholder=\"Offered Salary\" name=\"salary\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Duration</label>
                                <select name=\"salary_type\" class=\"questions-category form-control\">
                                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salaryType"]) ? $context["salaryType"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 73
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()));
            echo "\">/";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["type"], "salary_type", array())), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>No. of Vacancies</label>
                                <input type=\"text\" placeholder=\"Vacancies\" name=\"vacancies\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Last Date</label>
                                <input type=\"text\" placeholder=\"Last Date\" name=\"last_date\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Skills</label>
                                <input type=\"text\" id=\"tags\" name=\"skills\" value=\"software ,laravel, html\" class=\"form-control\" data-role=\"tagsinput\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Detials</label>
                                <textarea name=\"job_description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Specification</label>
                                <textarea name=\"job_specification\" id=\"ckeditor\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Technical Guidance</label>
                                <textarea name=\"tech_guidance\" id=\"ckeditor1\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <input type=\"submit\" name=\"post\" value=\"Publish Job\" class=\"btn btn-default pull-right\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    // line 126
    public function block_footer($context, array $blocks = array())
    {
        // line 127
        echo "    ";
        $this->loadTemplate("post_job.twig", "post_job.twig", 127, "138631810")->display($context);
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
        return array (  220 => 127,  217 => 126,  164 => 75,  153 => 73,  149 => 72,  134 => 59,  123 => 57,  119 => 56,  109 => 48,  98 => 46,  94 => 45,  85 => 38,  74 => 36,  70 => 35,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
                        <h3>Post A job</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                    <form class=\"row\" action=\"/dashboard/postjob\" method=\"post\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Title</label>
                                <input type=\"text\" placeholder=\"Job Title\" name=\"title\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Location</label>
                                <input type=\"text\" placeholder=\"Job Location\" name=\"location\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Category</label>
                                <select class=\"questions-category form-control\" name=\"category\">
                                    {% for cat in job_categories %}
                                        <option value=\"{{ cat.id|e }}\">{{ cat.job_category|e }}</option>    
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Type</label>
                                <select name=\"job_type\" class=\"questions-category form-control\">
                                    {% for type in jobType %}
                                        <option value=\"{{ type.id|e }}\">{{ type.job_type|e }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Experience</label>
                                <select name=\"experience\" class=\"questions-category form-control\">
                                    {% for exp in jobExperience %}
                                        <option value=\"{{exp.id|e}}\">{{exp.job_experience|e}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopaddingright\">
                            <div class=\"form-group\">
                                <label>Offered Salary</label>
                                <input type=\"text\" placeholder=\"Offered Salary\" name=\"salary\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Duration</label>
                                <select name=\"salary_type\" class=\"questions-category form-control\">
                                    {% for type in salaryType %}
                                        <option value=\"{{ type.id|e }}\">/{{ type.salary_type|capitalize }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>No. of Vacancies</label>
                                <input type=\"text\" placeholder=\"Vacancies\" name=\"vacancies\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Last Date</label>
                                <input type=\"text\" placeholder=\"Last Date\" name=\"last_date\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Skills</label>
                                <input type=\"text\" id=\"tags\" name=\"skills\" value=\"software ,laravel, html\" class=\"form-control\" data-role=\"tagsinput\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Detials</label>
                                <textarea name=\"job_description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Specification</label>
                                <textarea name=\"job_specification\" id=\"ckeditor\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Technical Guidance</label>
                                <textarea name=\"tech_guidance\" id=\"ckeditor1\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <input type=\"submit\" name=\"post\" value=\"Publish Job\" class=\"btn btn-default pull-right\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}

{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <!-- FOR THIS PAGE ONLY -->
            <script type=\"text/javascript\" src=\"../../js/jquery.tagsinput.min.js\"></script>
            <script type=\"text/javascript\">
            jQuery(document).ready(function(){
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
                CKEDITOR.replace('ckeditor');
                CKEDITOR.replace('ckeditor1');
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "post_job.twig", "/home/frescihp/public_html/getwork/application/views/post_job.twig");
    }
}


/* post_job.twig */
class __TwigTemplate_c939be4b72a3fbed060f7c632e42a5a87d8f70581717e5863a35fcf88c99c38d_138631810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "post_job.twig", 127);
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

    // line 128
    public function block_customScripts($context, array $blocks = array())
    {
        // line 129
        echo "            <!-- FOR THIS PAGE ONLY -->
            <script type=\"text/javascript\" src=\"../../js/jquery.tagsinput.min.js\"></script>
            <script type=\"text/javascript\">
            jQuery(document).ready(function(){
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
                CKEDITOR.replace('ckeditor');
                CKEDITOR.replace('ckeditor1');
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
        return array (  433 => 129,  430 => 128,  220 => 127,  217 => 126,  164 => 75,  153 => 73,  149 => 72,  134 => 59,  123 => 57,  119 => 56,  109 => 48,  98 => 46,  94 => 45,  85 => 38,  74 => 36,  70 => 35,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
                        <h3>Post A job</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                    <form class=\"row\" action=\"/dashboard/postjob\" method=\"post\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Title</label>
                                <input type=\"text\" placeholder=\"Job Title\" name=\"title\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Location</label>
                                <input type=\"text\" placeholder=\"Job Location\" name=\"location\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Category</label>
                                <select class=\"questions-category form-control\" name=\"category\">
                                    {% for cat in job_categories %}
                                        <option value=\"{{ cat.id|e }}\">{{ cat.job_category|e }}</option>    
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Type</label>
                                <select name=\"job_type\" class=\"questions-category form-control\">
                                    {% for type in jobType %}
                                        <option value=\"{{ type.id|e }}\">{{ type.job_type|e }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Experience</label>
                                <select name=\"experience\" class=\"questions-category form-control\">
                                    {% for exp in jobExperience %}
                                        <option value=\"{{exp.id|e}}\">{{exp.job_experience|e}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopaddingright\">
                            <div class=\"form-group\">
                                <label>Offered Salary</label>
                                <input type=\"text\" placeholder=\"Offered Salary\" name=\"salary\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                <label>Duration</label>
                                <select name=\"salary_type\" class=\"questions-category form-control\">
                                    {% for type in salaryType %}
                                        <option value=\"{{ type.id|e }}\">/{{ type.salary_type|capitalize }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>No. of Vacancies</label>
                                <input type=\"text\" placeholder=\"Vacancies\" name=\"vacancies\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Last Date</label>
                                <input type=\"text\" placeholder=\"Last Date\" name=\"last_date\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Skills</label>
                                <input type=\"text\" id=\"tags\" name=\"skills\" value=\"software ,laravel, html\" class=\"form-control\" data-role=\"tagsinput\">
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Detials</label>
                                <textarea name=\"job_description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Job Specification</label>
                                <textarea name=\"job_specification\" id=\"ckeditor\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <label>Technical Guidance</label>
                                <textarea name=\"tech_guidance\" id=\"ckeditor1\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <input type=\"submit\" name=\"post\" value=\"Publish Job\" class=\"btn btn-default pull-right\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}

{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <!-- FOR THIS PAGE ONLY -->
            <script type=\"text/javascript\" src=\"../../js/jquery.tagsinput.min.js\"></script>
            <script type=\"text/javascript\">
            jQuery(document).ready(function(){
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
                CKEDITOR.replace('ckeditor');
                CKEDITOR.replace('ckeditor1');
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "post_job.twig", "/home/frescihp/public_html/getwork/application/views/post_job.twig");
    }
}
