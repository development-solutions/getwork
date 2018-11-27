<?php

/* job_details.twig */
class __TwigTemplate_8154fd0ef10163f247404eab8d4d49d9fe546b77c6181653a9f853b5c11d1bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "job_details.twig", 1);
        $this->blocks = array(
            'metatags' => array($this, 'block_metatags'),
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_metatags($context, array $blocks = array())
    {
        // line 3
        echo "    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"See the newest Vacancies in the Construction Sector Across the United Kingdom. Be ready to induce out of the dumper and work along with alternative ground workers\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Get Construction Jobs in London Online | London Jobs</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<section class=\"single-job-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"single-job-page\">
                        <div class=\"job-short-detail\">
                            <div class=\"heading-inner\">
                                <p class=\"title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "title", array()), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                                <dl>
                                    <dt>Job Type:</dt>
                                    <dd>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "job_type", array()));
        echo "</dd>

                                    <dt>Job Experience:</dt>
                                    <dd>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "job_experience", array()), "html", null, true);
        echo "</dd>

                                    <dt>Posted On:</dt>
                                    <dd>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "date", array()), "d M, Y"), "html", null, true);
        echo "</dd>

                                    <dt>Last Date:</dt>
                                    <dd>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "last_date", array()), "d M, Y"), "html", null, true);
        echo "</dd>

                                    <dt>No. of Vacancies:</dt>
                                    <dd>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "vacancies", array()));
        echo "</dd>

                                    <dt>Location(s):</dt>
                                    <dd>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "location", array()), "html", null, true);
        echo "</dd>

                                    <dt>Expected Salary:</dt>
                                    <dd><i class=\"fa fa-gbp\"></i> ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "salary", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "salary_type", array()), "html", null, true);
        echo "</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"heading-inner\">
                            <p class=\"title\">Job description</p>
                        </div>
                        <div class=\"job-desc job-detail-boxes\">
                            <p>";
        // line 56
        echo $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "description", array());
        echo "</p>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            ";
        // line 64
        if ((isset($context["applied"]) ? $context["applied"] : null)) {
            // line 65
            echo "                                <a data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
            echo "\" href=\"javascript:void(0);\" onclick=\"window.profile.applyJob(this)\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Applied</a>    
                            ";
        } elseif ((        // line 66
(isset($context["logged_in"]) ? $context["logged_in"] : null) && ((isset($context["userType"]) ? $context["userType"] : null) == 2))) {
            // line 67
            echo "                                <a data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
            echo "\" href=\"javascript:void(0);\" onclick=\"window.profile.applyJob(this)\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Apply For Position</a>
                            ";
        } elseif ((        // line 68
(isset($context["logged_in"]) ? $context["logged_in"] : null) && ((isset($context["userType"]) ? $context["userType"] : null) == 3))) {
            // line 69
            echo "                                ";
            if ((isset($context["myJob"]) ? $context["myJob"] : null)) {
                // line 70
                echo "                                    <a href=\"/dashboard/edit_job/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-default\">Edit Job</a>
                                ";
            }
            // line 72
            echo "                            ";
        } else {
            // line 73
            echo "                                <a href=\"/login\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Apply For Position</a>
                            ";
        }
        // line 75
        echo "                            ";
        if ((isset($context["bookmark"]) ? $context["bookmark"] : null)) {
            // line 76
            echo "                                <a data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
            echo "\" onclick=\"window.profile.bookmarkJob(this)\" class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Bookmarked</a>
                            ";
        } elseif ((        // line 77
(isset($context["logged_in"]) ? $context["logged_in"] : null) && ((isset($context["userType"]) ? $context["userType"] : null) == 2))) {
            // line 78
            echo "                                <a data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
            echo "\" onclick=\"window.profile.bookmarkJob(this)\" class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Bookmark This Job</a>
                            ";
        } elseif ((        // line 79
(isset($context["logged_in"]) ? $context["logged_in"] : null) && ((isset($context["userType"]) ? $context["userType"] : null) == 3))) {
            // line 80
            echo "                                ";
            if ((isset($context["myJob"]) ? $context["myJob"] : null)) {
                // line 81
                echo "                                    <a href=\"javascript:void(0)\" class=\"btn btn-danger\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
                echo "\" onclick=\"window.dashboard.deljobsingle(this)\"> Delete Job</a>
                                ";
            }
            // line 83
            echo "                            ";
        } else {
            // line 84
            echo "                                <a href=\"/login\" class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Bookmark This Job</a>
                            ";
        }
        // line 86
        echo "                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"/uploads/";
        // line 89
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Construction jobs in London\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "company_name", array()));
        echo "</td>
                                    </tr>
                                    ";
        // line 105
        echo "                                    <tr>
                                        <th>Website:</th>
                                        <td>";
        // line 107
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "website", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "website", array()), "NA")) : ("NA")), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>";
        // line 111
        echo twig_escape_filter($this->env, ((((twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "address", array())) . " ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "city", array()))) . " ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "country", array()))), "html", null, true);
        echo "</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </aside>
                    ";
        // line 145
        echo "                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "job_details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 145,  230 => 111,  223 => 107,  219 => 105,  214 => 95,  205 => 89,  200 => 86,  196 => 84,  193 => 83,  187 => 81,  184 => 80,  182 => 79,  177 => 78,  175 => 77,  170 => 76,  167 => 75,  163 => 73,  160 => 72,  154 => 70,  151 => 69,  149 => 68,  144 => 67,  142 => 66,  137 => 65,  135 => 64,  124 => 56,  110 => 47,  104 => 44,  98 => 41,  92 => 38,  86 => 35,  80 => 32,  74 => 29,  66 => 24,  55 => 15,  52 => 14,  47 => 12,  44 => 11,  33 => 3,  30 => 2,  11 => 1,);
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
{% block metatags %}
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"See the newest Vacancies in the Construction Sector Across the United Kingdom. Be ready to induce out of the dumper and work along with alternative ground workers\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Get Construction Jobs in London Online | London Jobs</title>
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
                                <p class=\"title\">{{ job.title }}</p>
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
                                    <dd><i class=\"fa fa-gbp\"></i> {{ job.salary }} / {{ job.salary_type }}</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"heading-inner\">
                            <p class=\"title\">Job description</p>
                        </div>
                        <div class=\"job-desc job-detail-boxes\">
                            <p>{{ job.description|raw }}</p>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            {% if applied %}
                                <a data-id=\"{{ job.id }}\" href=\"javascript:void(0);\" onclick=\"window.profile.applyJob(this)\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Applied</a>    
                            {% elseif logged_in and userType == 2 %}
                                <a data-id=\"{{ job.id }}\" href=\"javascript:void(0);\" onclick=\"window.profile.applyJob(this)\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Apply For Position</a>
                            {% elseif logged_in and userType == 3 %}
                                {% if myJob %}
                                    <a href=\"/dashboard/edit_job/{{ job.id}}\" class=\"btn btn-default\">Edit Job</a>
                                {% endif %}
                            {% else %}
                                <a href=\"/login\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Apply For Position</a>
                            {% endif %}
                            {% if bookmark %}
                                <a data-id=\"{{ job.id }}\" onclick=\"window.profile.bookmarkJob(this)\" class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Bookmarked</a>
                            {% elseif logged_in and userType == 2 %}
                                <a data-id=\"{{ job.id }}\" onclick=\"window.profile.bookmarkJob(this)\" class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Bookmark This Job</a>
                            {% elseif logged_in and userType == 3 %}
                                {% if myJob %}
                                    <a href=\"javascript:void(0)\" class=\"btn btn-danger\" data-id=\"{{ job.id }}\" onclick=\"window.dashboard.deljobsingle(this)\"> Delete Job</a>
                                {% endif %}
                            {% else %}
                                <a href=\"/login\" class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Bookmark This Job</a>
                            {% endif %}
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"/uploads/{{ job.logo|default('logo.jpg') }}\" class=\"img-responsive\" alt=\"Construction jobs in London\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ job.company_name|e }}</td>
                                    </tr>
                                    {# <tr>
                                        <th>Email:</th>
                                        <td>{{ job.email|e }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <td>{{ job.phone|e }}</td>
                                    </tr> #}
                                    <tr>
                                        <th>Website:</th>
                                        <td>{{ job.website|default(\"NA\") }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>{{ job.address|e ~\" \"~job.city|e ~\" \"~job.country|e }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </aside>
                    {# <div class=\"single-job-map\">
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
                    </div> #}
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "job_details.twig", "/home/getwork/public_html/application/views/job_details.twig");
    }
}
