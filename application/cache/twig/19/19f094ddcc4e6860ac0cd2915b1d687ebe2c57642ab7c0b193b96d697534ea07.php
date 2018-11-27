<?php

/* employer_jobs.twig */
class __TwigTemplate_8c79af1acc86e0f009a5016b8f1304b4c60c2ac729e153cf9fd3e998cc4f844d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "employer_jobs.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "employer_jobs.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                ";
        // line 13
        $this->loadTemplate("employer_sidebar.twig", "employer_jobs.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Active jobs</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["jobs"]) ? $context["jobs"] : null)) == 0)) {
            // line 20
            echo "                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">You have 0 active jobs.</h4>
                            </div>
                        ";
        }
        // line 24
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 25
            echo "                            <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                <div class=\"job-title-box\">
                                    <a href=\"/home/jobdetails/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\">
                                        <div class=\"job-title\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", array()), "html", null, true);
            echo "</div>
                                    </a>
                                    <a href=\"#\"><span class=\"job-type comp-name\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company_name", array()), "html", null, true);
            echo "</span></a>
                                </div>
                                ";
            // line 32
            if (($this->getAttribute($context["job"], "approved", array()) == 0)) {
                // line 33
                echo "                                    <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-document\"></i>  Awating</span></div>
                                ";
            } elseif (($this->getAttribute(            // line 34
$context["job"], "approved", array()) ==  -1)) {
                // line 35
                echo "                                    <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-document\"></i>  Disapproved</span></div>
                                ";
            }
            // line 37
            echo "                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, ((twig_escape_filter($this->env, $this->getAttribute($context["job"], "salary", array())) . "/") . $this->getAttribute($context["job"], "salary_type", array())), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
            echo "\" alt=\"logo\"></div>
                                    </div>  
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "job_type", array()), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <a href=\"/dashboard/job_applicants/";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()));
            echo "\"><p><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "applications", array()));
            echo " applications</p></a>
                                    </div>
                                </div>

                                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                    <p>";
            // line 56
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["job"], "description", array()), 0, 150), "html", null, true);
            echo "...<a href=\"/home/jobdetails/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\">Read More</a></p>
                                    <div class=\"expire-job-box\">
                                        <span class=\"expire-date\"> This job will Expire on <strong>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "last_date", array()), "d M, Y"), "html", null, true);
            echo "</strong></span>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"expire-job-box\">                                
                                        <span class=\"pull-right\">
                                            <a href=\"/dashboard/edit_job/";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\"> Edit job</a>
                                            <a data-id=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()));
            echo "\" href=\"javascript:void(0);\" onclick=\"window.dashboard.deletejob(this)\" class=\"btn btn-danger\"> Delete job</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 100
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                    </div>
                    ";
        // line 119
        echo "                </div>
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
        $this->loadTemplate("employer_jobs.twig", "employer_jobs.twig", 127, "1704177406")->display($context);
    }

    public function getTemplateName()
    {
        return "employer_jobs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 127,  184 => 126,  175 => 119,  172 => 101,  166 => 100,  157 => 65,  153 => 64,  144 => 58,  137 => 56,  127 => 51,  121 => 48,  115 => 45,  109 => 42,  103 => 39,  99 => 37,  95 => 35,  93 => 34,  90 => 33,  88 => 32,  83 => 30,  78 => 28,  74 => 27,  70 => 25,  65 => 24,  59 => 20,  57 => 19,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Active jobs</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        {% if jobs|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">You have 0 active jobs.</h4>
                            </div>
                        {% endif %}
                        {% for job in jobs %}
                            <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                <div class=\"job-title-box\">
                                    <a href=\"/home/jobdetails/{{ job.id }}\">
                                        <div class=\"job-title\">{{ job.title }}</div>
                                    </a>
                                    <a href=\"#\"><span class=\"job-type comp-name\">{{ job.company_name }}</span></a>
                                </div>
                                {% if job.approved == 0 %}
                                    <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-document\"></i>  Awating</span></div>
                                {% elseif job.approved == -1 %}
                                    <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-document\"></i>  Disapproved</span></div>
                                {% endif %}
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> {{ job.location }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ job.salary|e ~\"/\"~ job.salary_type }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/{{ user.logo|default('logo.jpg') }}\" alt=\"logo\"></div>
                                    </div>  
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{job.job_type }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <a href=\"/dashboard/job_applicants/{{job.id|e}}\"><p><i class=\"fa fa-user\"></i> {{ job.applications|e }} applications</p></a>
                                    </div>
                                </div>

                                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                    <p>{{ job.description|raw|slice(0,150) }}...<a href=\"/home/jobdetails/{{ job.id }}\">Read More</a></p>
                                    <div class=\"expire-job-box\">
                                        <span class=\"expire-date\"> This job will Expire on <strong>{{ job.last_date|date(\"d M, Y\") }}</strong></span>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"expire-job-box\">                                
                                        <span class=\"pull-right\">
                                            <a href=\"/dashboard/edit_job/{{ job.id}}\" class=\"btn btn-default\"> Edit job</a>
                                            <a data-id=\"{{ job.id|e }}\" href=\"javascript:void(0);\" onclick=\"window.dashboard.deletejob(this)\" class=\"btn btn-danger\"> Delete job</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {# <div class=\"job-box job-box-2\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm\">
                                    <div class=\"comp-logo\">
                                        <a href=\"/dashboard/single/{{ job.id|e }}\"><img src=\"../../images/company/5.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </a>
                                    </div>

                                </div>
                                <div class=\"col-md-10 col-sm-10 col-xs-12\">
                                    <div class=\"job-title-box\">
                                        <a href=\"/dashboard/single/{{ job.id|e }}\">
                                            <div class=\"job-title\">{{ job.title|e}}</div>
                                        </a>
                                        <a href=\"#\"><span class=\"comp-name\">{{ job.location|e }}</span></a>
                                        <a href=\"\" class=\"job-type jt-full-time-color\">
                                            <i class=\"fa fa-clock-o\"></i> {{ job.job_type|e }}
                                        </a>
                                    </div>
                                    <div class=\"expire-job-box\">                                
                                        <span class=\"pull-right\">
                                            <a href=\"/dashboard/edit_job/{{ job.id}}\" class=\"btn btn-default\"> Edit job</a>
                                            <a data-id=\"{{ job.id|e }}\" href=\"javascript:void(0);\" onclick=\"window.dashboard.deletejob(this)\" class=\"btn btn-danger\"> Delete job</a>
                                        </span>
                                    </div>
                                    <p>{{ job.description|raw|slice(0,150) }}...<a href=\"/dashboard/single/{{ job.id|e }}\">Read More</a></p>
                                </div>
                                <div class=\"job-salary\">
                                    <i class=\"fa fa-money\"></i> {{ job.salary|e ~\"/\"~ job.salary_type }}
                                </div>
                            </div> #}
                        {% endfor %}
                    </div>
                    {# <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <ul class=\"pagination\">
                                <li>
                                    <a href=\"#\" aria-label=\"Previous\"> <span aria-hidden=\"true\">«</span> </a>
                                </li>
                                <li class=\"active\"><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li><a href=\"#\">5</a></li>
                                <li>
                                    <a href=\"#\" aria-label=\"Next\"> <span aria-hidden=\"true\">»</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div> #}
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}

{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\" src=\"../../js/dashboard.js\"></script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "employer_jobs.twig", "/home/getwork/public_html/application/views/employer_jobs.twig");
    }
}


/* employer_jobs.twig */
class __TwigTemplate_8c79af1acc86e0f009a5016b8f1304b4c60c2ac729e153cf9fd3e998cc4f844d_1704177406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "employer_jobs.twig", 127);
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
        echo "            <script type=\"text/javascript\" src=\"../../js/dashboard.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "employer_jobs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 129,  376 => 128,  187 => 127,  184 => 126,  175 => 119,  172 => 101,  166 => 100,  157 => 65,  153 => 64,  144 => 58,  137 => 56,  127 => 51,  121 => 48,  115 => 45,  109 => 42,  103 => 39,  99 => 37,  95 => 35,  93 => 34,  90 => 33,  88 => 32,  83 => 30,  78 => 28,  74 => 27,  70 => 25,  65 => 24,  59 => 20,  57 => 19,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Active jobs</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        {% if jobs|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">You have 0 active jobs.</h4>
                            </div>
                        {% endif %}
                        {% for job in jobs %}
                            <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                <div class=\"job-title-box\">
                                    <a href=\"/home/jobdetails/{{ job.id }}\">
                                        <div class=\"job-title\">{{ job.title }}</div>
                                    </a>
                                    <a href=\"#\"><span class=\"job-type comp-name\">{{ job.company_name }}</span></a>
                                </div>
                                {% if job.approved == 0 %}
                                    <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-document\"></i>  Awating</span></div>
                                {% elseif job.approved == -1 %}
                                    <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-document\"></i>  Disapproved</span></div>
                                {% endif %}
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> {{ job.location }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ job.salary|e ~\"/\"~ job.salary_type }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/{{ user.logo|default('logo.jpg') }}\" alt=\"logo\"></div>
                                    </div>  
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{job.job_type }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <a href=\"/dashboard/job_applicants/{{job.id|e}}\"><p><i class=\"fa fa-user\"></i> {{ job.applications|e }} applications</p></a>
                                    </div>
                                </div>

                                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                    <p>{{ job.description|raw|slice(0,150) }}...<a href=\"/home/jobdetails/{{ job.id }}\">Read More</a></p>
                                    <div class=\"expire-job-box\">
                                        <span class=\"expire-date\"> This job will Expire on <strong>{{ job.last_date|date(\"d M, Y\") }}</strong></span>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"expire-job-box\">                                
                                        <span class=\"pull-right\">
                                            <a href=\"/dashboard/edit_job/{{ job.id}}\" class=\"btn btn-default\"> Edit job</a>
                                            <a data-id=\"{{ job.id|e }}\" href=\"javascript:void(0);\" onclick=\"window.dashboard.deletejob(this)\" class=\"btn btn-danger\"> Delete job</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {# <div class=\"job-box job-box-2\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm\">
                                    <div class=\"comp-logo\">
                                        <a href=\"/dashboard/single/{{ job.id|e }}\"><img src=\"../../images/company/5.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </a>
                                    </div>

                                </div>
                                <div class=\"col-md-10 col-sm-10 col-xs-12\">
                                    <div class=\"job-title-box\">
                                        <a href=\"/dashboard/single/{{ job.id|e }}\">
                                            <div class=\"job-title\">{{ job.title|e}}</div>
                                        </a>
                                        <a href=\"#\"><span class=\"comp-name\">{{ job.location|e }}</span></a>
                                        <a href=\"\" class=\"job-type jt-full-time-color\">
                                            <i class=\"fa fa-clock-o\"></i> {{ job.job_type|e }}
                                        </a>
                                    </div>
                                    <div class=\"expire-job-box\">                                
                                        <span class=\"pull-right\">
                                            <a href=\"/dashboard/edit_job/{{ job.id}}\" class=\"btn btn-default\"> Edit job</a>
                                            <a data-id=\"{{ job.id|e }}\" href=\"javascript:void(0);\" onclick=\"window.dashboard.deletejob(this)\" class=\"btn btn-danger\"> Delete job</a>
                                        </span>
                                    </div>
                                    <p>{{ job.description|raw|slice(0,150) }}...<a href=\"/dashboard/single/{{ job.id|e }}\">Read More</a></p>
                                </div>
                                <div class=\"job-salary\">
                                    <i class=\"fa fa-money\"></i> {{ job.salary|e ~\"/\"~ job.salary_type }}
                                </div>
                            </div> #}
                        {% endfor %}
                    </div>
                    {# <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <ul class=\"pagination\">
                                <li>
                                    <a href=\"#\" aria-label=\"Previous\"> <span aria-hidden=\"true\">«</span> </a>
                                </li>
                                <li class=\"active\"><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li><a href=\"#\">5</a></li>
                                <li>
                                    <a href=\"#\" aria-label=\"Next\"> <span aria-hidden=\"true\">»</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div> #}
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}

{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\" src=\"../../js/dashboard.js\"></script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "employer_jobs.twig", "/home/getwork/public_html/application/views/employer_jobs.twig");
    }
}
