<?php

/* job_single.twig */
class __TwigTemplate_51bdb39075ba6cbe9d4f79b4973cf926ab8cde27bf42e7faaba4d1e1a41722ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "job_single.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "job_single.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"single-job-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"single-job-page\">
                        <div class=\"job-short-detail\">
                            <div class=\"heading-inner\">
                                <p class=\"title\">Job Details</p>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                                <dl>
                                    <dt>Job Type:</dt>
                                    <dd>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "job_type", array()));
        echo "</dd>

                                    <dt>Job Experience:</dt>
                                    <dd>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "job_experience", array()), "html", null, true);
        echo "</dd>

                                    <dt>Posted On:</dt>
                                    <dd>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "date", array()), "d M, Y"), "html", null, true);
        echo "</dd>

                                    <dt>Last Date:</dt>
                                    <dd>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "last_date", array()), "d M, Y"), "html", null, true);
        echo "</dd>

                                    <dt>No. of Vacancies:</dt>
                                    <dd>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "vacancies", array()));
        echo "</dd>

                                    <dt>Location(s):</dt>
                                    <dd>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "location", array()), "html", null, true);
        echo "</dd>

                                    <dt>Expected Salary:</dt>
                                    <dd>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "salary", array()), "html", null, true);
        echo " / Month</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"heading-inner\">
                            <p class=\"title\">Job Description</p>
                        </div>
                        <div class=\"job-desc job-detail-boxes\">
                            <p>";
        // line 49
        echo $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "description", array());
        echo "</p>
                            <div class=\"heading-inner\">
                                <p class=\"title\">Job Specification:</p>
                            </div>
                            <ul class=\"desc-points\">
                                ";
        // line 54
        echo $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "specification", array());
        echo "
                                ";
        // line 58
        echo "                            </ul>

                            <div class=\"heading-inner\">
                                <p class=\"title\">Technical Guidance:</p>
                            </div>
                            <ul class=\"desc-points\">
                                ";
        // line 64
        echo $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "tech_guidance", array());
        echo "
                                ";
        // line 68
        echo "                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            <a href=\"/dashboard/edit_job/";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-default\">Edit Job</a>
                            <a href=\"javascript:void(0)\" class=\"btn btn-danger\" data-id=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
        echo "\" onclick=\"window.dashboard.deljobsingle(this)\"> Delete Job</a>
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"../../images/company/logo2.png\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Website:</th>
                                        <td>";
        // line 99
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "website", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "website", array()), "NA")) : ("NA")), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>";
        // line 103
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()) . ", ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array())) . ", ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", array())), "html", null, true);
        echo "</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </aside>
                    <div class=\"single-job-map\">
                        <div id=\"map-contact\"></div>
                    </div>
                    <div class=\"widget\">
                        <div class=\"widget-heading\"><span class=\"title\">Featured Jobs</span></div>
                        <ul class=\"related-post\">
                            <li>
                                <a href=\"#\">Assistant Manager Procurement </a>
                                <span><i class=\"fa fa-map-marker\"></i>Managgo, WC </span>
                                <span><i class=\"fa fa-calendar\"></i>March 22, 2015 - Apr 07, 2016 </span>
                            </li>
                            <li>
                                <a href=\"#\">Marketing Professionals Required</a>
                                <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015 - Aug 09, 2016</span>
                            </li>
                            <li>
                                <a href=\"#\">Mobile App Programmers </a>
                                <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                <span><i class=\"fa fa-calendar\"></i>Feb 01, 2015 - March 09, 2016 </span>
                            </li>
                            <li>
                                <a href=\"#\">General Compliance Officer</a>
                                <span><i class=\"fa fa-map-marker\"></i>Arlington, VA </span>
                                <span><i class=\"fa fa-calendar\"></i>Jun 01, 2015 - Feb 09, 2016</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    // line 145
    public function block_footer($context, array $blocks = array())
    {
        // line 146
        echo "    ";
        $this->loadTemplate("job_single.twig", "job_single.twig", 146, "1310726095")->display($context);
    }

    public function getTemplateName()
    {
        return "job_single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 146,  229 => 145,  184 => 103,  177 => 99,  170 => 95,  163 => 91,  156 => 87,  143 => 77,  139 => 76,  129 => 68,  125 => 64,  117 => 58,  113 => 54,  105 => 49,  93 => 40,  87 => 37,  81 => 34,  75 => 31,  69 => 28,  63 => 25,  57 => 22,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"single-job-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"single-job-page\">
                        <div class=\"job-short-detail\">
                            <div class=\"heading-inner\">
                                <p class=\"title\">Job Details</p>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                                <dl>
                                    <dt>Job Type:</dt>
                                    <dd>{{ job.job_type|e }}</dd>

                                    <dt>Job Experience:</dt>
                                    <dd>{{ job.job_experience }}</dd>

                                    <dt>Posted On:</dt>
                                    <dd>{{ job.date|date(\"d M, Y\")}}</dd>

                                    <dt>Last Date:</dt>
                                    <dd>{{ job.last_date|date(\"d M, Y\") }}</dd>

                                    <dt>No. of Vacancies:</dt>
                                    <dd>{{ job.vacancies|e }}</dd>

                                    <dt>Location(s):</dt>
                                    <dd>{{ job.location }}</dd>

                                    <dt>Expected Salary:</dt>
                                    <dd>{{ job.salary }} / Month</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"heading-inner\">
                            <p class=\"title\">Job Description</p>
                        </div>
                        <div class=\"job-desc job-detail-boxes\">
                            <p>{{ job.description|raw }}</p>
                            <div class=\"heading-inner\">
                                <p class=\"title\">Job Specification:</p>
                            </div>
                            <ul class=\"desc-points\">
                                {{ job.specification|raw }}
                                {# <li>
                                    <i class=\"fa fa-caret-right \"></i> Being a garment merchandiser, you should be capable of executing all related merchandising activities.
                                </li> #}
                            </ul>

                            <div class=\"heading-inner\">
                                <p class=\"title\">Technical Guidance:</p>
                            </div>
                            <ul class=\"desc-points\">
                                {{ job.tech_guidance|raw }}
                                {# <li>
                                    <i class=\"fa fa-caret-right \"></i> you should be capable of executing all related merchandising activities of the given orders or the customers.
                                </li> #}
                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            <a href=\"/dashboard/edit_job/{{ job.id}}\" class=\"btn btn-default\">Edit Job</a>
                            <a href=\"javascript:void(0)\" class=\"btn btn-danger\" data-id=\"{{ job.id }}\" onclick=\"window.dashboard.deljobsingle(this)\"> Delete Job</a>
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"../../images/company/logo2.png\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ user.company_name|e }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{ user.email|e }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <td>{{ user.phone|e }}</td>
                                    </tr>
                                    <tr>
                                        <th>Website:</th>
                                        <td>{{ user.website|default(\"NA\") }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>{{ user.address~\", \"~user.city~\", \"~user.country }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </aside>
                    <div class=\"single-job-map\">
                        <div id=\"map-contact\"></div>
                    </div>
                    <div class=\"widget\">
                        <div class=\"widget-heading\"><span class=\"title\">Featured Jobs</span></div>
                        <ul class=\"related-post\">
                            <li>
                                <a href=\"#\">Assistant Manager Procurement </a>
                                <span><i class=\"fa fa-map-marker\"></i>Managgo, WC </span>
                                <span><i class=\"fa fa-calendar\"></i>March 22, 2015 - Apr 07, 2016 </span>
                            </li>
                            <li>
                                <a href=\"#\">Marketing Professionals Required</a>
                                <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015 - Aug 09, 2016</span>
                            </li>
                            <li>
                                <a href=\"#\">Mobile App Programmers </a>
                                <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                <span><i class=\"fa fa-calendar\"></i>Feb 01, 2015 - March 09, 2016 </span>
                            </li>
                            <li>
                                <a href=\"#\">General Compliance Officer</a>
                                <span><i class=\"fa fa-map-marker\"></i>Arlington, VA </span>
                                <span><i class=\"fa fa-calendar\"></i>Jun 01, 2015 - Feb 09, 2016</span>
                            </li>
                        </ul>
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
{% endblock %}", "job_single.twig", "/home/frescihp/public_html/getwork/application/views/job_single.twig");
    }
}


/* job_single.twig */
class __TwigTemplate_51bdb39075ba6cbe9d4f79b4973cf926ab8cde27bf42e7faaba4d1e1a41722ec_1310726095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "job_single.twig", 146);
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

    // line 147
    public function block_customScripts($context, array $blocks = array())
    {
        // line 148
        echo "            <script type=\"text/javascript\" src=\"../../js/dashboard.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "job_single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 148,  440 => 147,  232 => 146,  229 => 145,  184 => 103,  177 => 99,  170 => 95,  163 => 91,  156 => 87,  143 => 77,  139 => 76,  129 => 68,  125 => 64,  117 => 58,  113 => 54,  105 => 49,  93 => 40,  87 => 37,  81 => 34,  75 => 31,  69 => 28,  63 => 25,  57 => 22,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"single-job-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"single-job-page\">
                        <div class=\"job-short-detail\">
                            <div class=\"heading-inner\">
                                <p class=\"title\">Job Details</p>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                                <dl>
                                    <dt>Job Type:</dt>
                                    <dd>{{ job.job_type|e }}</dd>

                                    <dt>Job Experience:</dt>
                                    <dd>{{ job.job_experience }}</dd>

                                    <dt>Posted On:</dt>
                                    <dd>{{ job.date|date(\"d M, Y\")}}</dd>

                                    <dt>Last Date:</dt>
                                    <dd>{{ job.last_date|date(\"d M, Y\") }}</dd>

                                    <dt>No. of Vacancies:</dt>
                                    <dd>{{ job.vacancies|e }}</dd>

                                    <dt>Location(s):</dt>
                                    <dd>{{ job.location }}</dd>

                                    <dt>Expected Salary:</dt>
                                    <dd>{{ job.salary }} / Month</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"heading-inner\">
                            <p class=\"title\">Job Description</p>
                        </div>
                        <div class=\"job-desc job-detail-boxes\">
                            <p>{{ job.description|raw }}</p>
                            <div class=\"heading-inner\">
                                <p class=\"title\">Job Specification:</p>
                            </div>
                            <ul class=\"desc-points\">
                                {{ job.specification|raw }}
                                {# <li>
                                    <i class=\"fa fa-caret-right \"></i> Being a garment merchandiser, you should be capable of executing all related merchandising activities.
                                </li> #}
                            </ul>

                            <div class=\"heading-inner\">
                                <p class=\"title\">Technical Guidance:</p>
                            </div>
                            <ul class=\"desc-points\">
                                {{ job.tech_guidance|raw }}
                                {# <li>
                                    <i class=\"fa fa-caret-right \"></i> you should be capable of executing all related merchandising activities of the given orders or the customers.
                                </li> #}
                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            <a href=\"/dashboard/edit_job/{{ job.id}}\" class=\"btn btn-default\">Edit Job</a>
                            <a href=\"javascript:void(0)\" class=\"btn btn-danger\" data-id=\"{{ job.id }}\" onclick=\"window.dashboard.deljobsingle(this)\"> Delete Job</a>
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"../../images/company/logo2.png\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ user.company_name|e }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{ user.email|e }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <td>{{ user.phone|e }}</td>
                                    </tr>
                                    <tr>
                                        <th>Website:</th>
                                        <td>{{ user.website|default(\"NA\") }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>{{ user.address~\", \"~user.city~\", \"~user.country }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </aside>
                    <div class=\"single-job-map\">
                        <div id=\"map-contact\"></div>
                    </div>
                    <div class=\"widget\">
                        <div class=\"widget-heading\"><span class=\"title\">Featured Jobs</span></div>
                        <ul class=\"related-post\">
                            <li>
                                <a href=\"#\">Assistant Manager Procurement </a>
                                <span><i class=\"fa fa-map-marker\"></i>Managgo, WC </span>
                                <span><i class=\"fa fa-calendar\"></i>March 22, 2015 - Apr 07, 2016 </span>
                            </li>
                            <li>
                                <a href=\"#\">Marketing Professionals Required</a>
                                <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015 - Aug 09, 2016</span>
                            </li>
                            <li>
                                <a href=\"#\">Mobile App Programmers </a>
                                <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                <span><i class=\"fa fa-calendar\"></i>Feb 01, 2015 - March 09, 2016 </span>
                            </li>
                            <li>
                                <a href=\"#\">General Compliance Officer</a>
                                <span><i class=\"fa fa-map-marker\"></i>Arlington, VA </span>
                                <span><i class=\"fa fa-calendar\"></i>Jun 01, 2015 - Feb 09, 2016</span>
                            </li>
                        </ul>
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
{% endblock %}", "job_single.twig", "/home/frescihp/public_html/getwork/application/views/job_single.twig");
    }
}
