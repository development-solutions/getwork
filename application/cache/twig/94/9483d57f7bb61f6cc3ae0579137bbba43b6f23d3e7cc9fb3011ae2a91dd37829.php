<?php

/* employer_jobs.twig */
class __TwigTemplate_c187a035eae29969fca4d82e9af1b2ed98ddf3ea972b637212c5f26bd8e62aef extends Twig_Template
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
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"panel\">
                        <div class=\"dashboard-logo-sidebar\">
                            <img class=\"img-responsive center-block\" src=\"../../images/company/logo1.jpg\" alt=\"Image\">
                        </div>
                        <div class=\"text-center dashboard-logo-sidebar-title\">
                            <h4>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo "</h4>
                        </div>
                    </div>
                    ";
        // line 22
        $this->loadTemplate("employer_sidebar.twig", "employer_jobs.twig", 22)->display($context);
        // line 23
        echo "                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Active jobs</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 30
            echo "                            <div class=\"job-box job-box-2\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm\">
                                    <div class=\"comp-logo\">
                                        <a href=\"/dashboard/single/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()));
            echo "\"><img src=\"../../images/company/5.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </a>
                                    </div>

                                </div>
                                <div class=\"col-md-10 col-sm-10 col-xs-12\">
                                    <div class=\"job-title-box\">
                                        <a href=\"/dashboard/single/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()));
            echo "\">
                                            <div class=\"job-title\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", array()));
            echo "</div>
                                        </a>
                                        <a href=\"#\"><span class=\"comp-name\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()));
            echo "</span></a>
                                        <a href=\"\" class=\"job-type jt-full-time-color\">
                                            <i class=\"fa fa-clock-o\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "job_type", array()));
            echo "
                                        </a>
                                    </div>
                                    <div class=\"expire-job-box\">                                
                                        <span class=\"pull-right\">
                                            <a href=\"/dashboard/edit_job/";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\"> Edit job</a>
                                            <a data-id=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()));
            echo "\" href=\"javascript:void(0);\" onclick=\"window.dashboard.deletejob(this)\" class=\"btn btn-danger\"> Delete job</a>
                                        </span>
                                    </div>
                                    <p>";
            // line 53
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["job"], "description", array()), 0, 150), "html", null, true);
            echo "...<a href=\"/dashboard/single/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()));
            echo "\">Read More</a></p>
                                </div>
                                <div class=\"job-salary\">
                                    <i class=\"fa fa-money\"></i> ";
            // line 56
            echo twig_escape_filter($this->env, ((twig_escape_filter($this->env, $this->getAttribute($context["job"], "salary", array())) . "/") . $this->getAttribute($context["job"], "salary_type", array())), "html", null, true);
            echo "
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        $this->loadTemplate("employer_jobs.twig", "employer_jobs.twig", 86, "1202612172")->display($context);
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
        return array (  168 => 86,  165 => 85,  138 => 60,  128 => 56,  120 => 53,  114 => 50,  110 => 49,  102 => 44,  97 => 42,  92 => 40,  88 => 39,  79 => 33,  74 => 30,  70 => 29,  62 => 23,  60 => 22,  54 => 19,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"panel\">
                        <div class=\"dashboard-logo-sidebar\">
                            <img class=\"img-responsive center-block\" src=\"../../images/company/logo1.jpg\" alt=\"Image\">
                        </div>
                        <div class=\"text-center dashboard-logo-sidebar-title\">
                            <h4>{{ user.company_name }}</h4>
                        </div>
                    </div>
                    {% include 'employer_sidebar.twig' %}
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Active jobs</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        {% for job in jobs %}
                            <div class=\"job-box job-box-2\">
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
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
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
                    </div>
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
{% endblock %}", "employer_jobs.twig", "/home/frescihp/public_html/getwork/application/views/employer_jobs.twig");
    }
}


/* employer_jobs.twig */
class __TwigTemplate_c187a035eae29969fca4d82e9af1b2ed98ddf3ea972b637212c5f26bd8e62aef_1202612172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "employer_jobs.twig", 86);
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

    // line 87
    public function block_customScripts($context, array $blocks = array())
    {
        // line 88
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
        return array (  319 => 88,  316 => 87,  168 => 86,  165 => 85,  138 => 60,  128 => 56,  120 => 53,  114 => 50,  110 => 49,  102 => 44,  97 => 42,  92 => 40,  88 => 39,  79 => 33,  74 => 30,  70 => 29,  62 => 23,  60 => 22,  54 => 19,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"panel\">
                        <div class=\"dashboard-logo-sidebar\">
                            <img class=\"img-responsive center-block\" src=\"../../images/company/logo1.jpg\" alt=\"Image\">
                        </div>
                        <div class=\"text-center dashboard-logo-sidebar-title\">
                            <h4>{{ user.company_name }}</h4>
                        </div>
                    </div>
                    {% include 'employer_sidebar.twig' %}
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Active jobs</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        {% for job in jobs %}
                            <div class=\"job-box job-box-2\">
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
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
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
                    </div>
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
{% endblock %}", "employer_jobs.twig", "/home/frescihp/public_html/getwork/application/views/employer_jobs.twig");
    }
}
