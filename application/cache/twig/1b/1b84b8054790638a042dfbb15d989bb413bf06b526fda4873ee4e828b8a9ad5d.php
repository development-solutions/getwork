<?php

/* job_details.twig */
class __TwigTemplate_06a950cdd99c45df003a29bfb699847e50a7d52320718df3f316fd3eddb92d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "job_details.twig", 1);
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
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "job_type", array()));
        echo "</dd>

                                    <dt>Job Experience:</dt>
                                    <dd>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "job_experience", array()), "html", null, true);
        echo "</dd>

                                    <dt>Posted On:</dt>
                                    <dd>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "date", array()), "d M, Y"), "html", null, true);
        echo "</dd>

                                    <dt>Last Date:</dt>
                                    <dd>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "last_date", array()), "d M, Y"), "html", null, true);
        echo "</dd>

                                    <dt>No. of Vacancies:</dt>
                                    <dd>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "vacancies", array()));
        echo "</dd>

                                    <dt>Location(s):</dt>
                                    <dd>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "location", array()), "html", null, true);
        echo "</dd>

                                    <dt>Expected Salary:</dt>
                                    <dd>";
        // line 36
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
        // line 45
        echo $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "description", array());
        echo "</p>
                            <div class=\"heading-inner\">
                                <p class=\"title\">Job Specification:</p>
                            </div>
                            <ul class=\"desc-points\">
                                ";
        // line 50
        echo $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "specification", array());
        echo "
                                ";
        // line 54
        echo "                            </ul>

                            <div class=\"heading-inner\">
                                <p class=\"title\">Technical Guidance:</p>
                            </div>
                            <ul class=\"desc-points\">
                                ";
        // line 60
        echo $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "tech_guidance", array());
        echo "
                                ";
        // line 64
        echo "                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            ";
        // line 73
        echo "                            <a data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
        echo "\" href=\"javascript:void(0);\" onclick=\"window.profile.applyJob(this)\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Apply For Position</a>
                            <a class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Bookmark This Job</a>
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
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "company_name", array()));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "email", array()));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <td>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "phone", array()));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Website:</th>
                                        <td>";
        // line 96
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "website", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "website", array()), "NA")) : ("NA")), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>";
        // line 100
        echo twig_escape_filter($this->env, ((((twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "address", array())) . ", ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "city", array()))) . ", ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "country", array()))), "html", null, true);
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
        return array (  172 => 100,  165 => 96,  158 => 92,  151 => 88,  144 => 84,  129 => 73,  119 => 64,  115 => 60,  107 => 54,  103 => 50,  95 => 45,  83 => 36,  77 => 33,  71 => 30,  65 => 27,  59 => 24,  53 => 21,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
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
                            {# <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-upload\"></i>Apply For Position</a> #}
                            <a data-id=\"{{ job.id }}\" href=\"javascript:void(0);\" onclick=\"window.profile.applyJob(this)\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Apply For Position</a>
                            <a class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Bookmark This Job</a>
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"../../images/company/logo2.png\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ job.company_name|e }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{ job.email|e }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <td>{{ job.phone|e }}</td>
                                    </tr>
                                    <tr>
                                        <th>Website:</th>
                                        <td>{{ job.website|default(\"NA\") }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>{{ job.address|e ~\", \"~job.city|e ~\", \"~job.country|e }}</td>
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

{% endblock %}", "job_details.twig", "/home/frescihp/public_html/getwork/application/views/job_details.twig");
    }
}
