<?php

/* /admin/job_details.twig */
class __TwigTemplate_097ea25361ce40fbe22d0939ee61adacddfc7d69054242a271798ec8d70cc639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "/admin/job_details.twig", 1);
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
        $this->loadTemplate("admin/admin_navigation.twig", "/admin/job_details.twig", 4)->display($context);
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
                                    <dd><i class=\"fa fa-gbp\"></i> ";
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
                        </div>

                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            <a href=\"javascript:void(0)\" data-id=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
        echo "\" onclick=\"window.su.approveJob(this)\" class=\"btn btn-info cstm-btn\"> Approve job</a>
                            <a href=\"javascript:void(0)\" onclick=\"jQuery('#jobid').val(";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
        echo ")\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-danger\"> Disapprove job</a>
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"/uploads/";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "company_name", array()));
        echo "</td>
                                    </tr>
                                    ";
        // line 78
        echo "                                    <tr>
                                        <th>Website:</th>
                                        <td>";
        // line 80
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "website_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "website_url", array()), "NA")) : ("NA")), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>";
        // line 84
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
<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Equery About Course</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"jobid\" type=\"hidden\" name=\"jobid\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" readonly=\"true\" name=\"subject\" value=\"Job disapproved\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.su.disapproveJob()\" class=\"btn btn-default btn-block\">Submit</button>
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

    // line 154
    public function block_footer($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        $this->loadTemplate("/admin/job_details.twig", "/admin/job_details.twig", 155, "387709990")->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/job_details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 155,  226 => 154,  152 => 84,  145 => 80,  141 => 78,  136 => 68,  127 => 62,  120 => 58,  116 => 57,  105 => 49,  93 => 40,  87 => 37,  81 => 34,  75 => 31,  69 => 28,  63 => 25,  57 => 22,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
    {% include 'admin/admin_navigation.twig' %}
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
                                    <dd><i class=\"fa fa-gbp\"></i> {{ job.salary }} / Month</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"heading-inner\">
                            <p class=\"title\">Job Description</p>
                        </div>
                        <div class=\"job-desc job-detail-boxes\">
                            <p>{{ job.description|raw }}</p>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            <a href=\"javascript:void(0)\" data-id=\"{{ job.id }}\" onclick=\"window.su.approveJob(this)\" class=\"btn btn-info cstm-btn\"> Approve job</a>
                            <a href=\"javascript:void(0)\" onclick=\"jQuery('#jobid').val({{ job.id }})\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-danger\"> Disapprove job</a>
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"/uploads/{{ job.logo|default('logo.jpg') }}\" class=\"img-responsive\" alt=\"\">
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
                                        <td>{{ job.website_url|default(\"NA\") }}</td>
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
<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Equery About Course</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"jobid\" type=\"hidden\" name=\"jobid\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" readonly=\"true\" name=\"subject\" value=\"Job disapproved\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.su.disapproveJob()\" class=\"btn btn-default btn-block\">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\" src=\"/js/suser.js\"></script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "/admin/job_details.twig", "/home/frescihp/public_html/getwork/application/views/admin/job_details.twig");
    }
}


/* /admin/job_details.twig */
class __TwigTemplate_097ea25361ce40fbe22d0939ee61adacddfc7d69054242a271798ec8d70cc639_387709990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "/admin/job_details.twig", 155);
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

    // line 156
    public function block_customScripts($context, array $blocks = array())
    {
        // line 157
        echo "            <script type=\"text/javascript\" src=\"/js/suser.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "/admin/job_details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 157,  446 => 156,  229 => 155,  226 => 154,  152 => 84,  145 => 80,  141 => 78,  136 => 68,  127 => 62,  120 => 58,  116 => 57,  105 => 49,  93 => 40,  87 => 37,  81 => 34,  75 => 31,  69 => 28,  63 => 25,  57 => 22,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
    {% include 'admin/admin_navigation.twig' %}
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
                                    <dd><i class=\"fa fa-gbp\"></i> {{ job.salary }} / Month</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"heading-inner\">
                            <p class=\"title\">Job Description</p>
                        </div>
                        <div class=\"job-desc job-detail-boxes\">
                            <p>{{ job.description|raw }}</p>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            <a href=\"javascript:void(0)\" data-id=\"{{ job.id }}\" onclick=\"window.su.approveJob(this)\" class=\"btn btn-info cstm-btn\"> Approve job</a>
                            <a href=\"javascript:void(0)\" onclick=\"jQuery('#jobid').val({{ job.id }})\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-danger\"> Disapprove job</a>
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"/uploads/{{ job.logo|default('logo.jpg') }}\" class=\"img-responsive\" alt=\"\">
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
                                        <td>{{ job.website_url|default(\"NA\") }}</td>
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
<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Equery About Course</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"jobid\" type=\"hidden\" name=\"jobid\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" readonly=\"true\" name=\"subject\" value=\"Job disapproved\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.su.disapproveJob()\" class=\"btn btn-default btn-block\">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\" src=\"/js/suser.js\"></script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "/admin/job_details.twig", "/home/frescihp/public_html/getwork/application/views/admin/job_details.twig");
    }
}
