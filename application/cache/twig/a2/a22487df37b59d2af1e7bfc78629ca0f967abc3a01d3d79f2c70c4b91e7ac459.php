<?php

/* applicant_bookmarked.twig */
class __TwigTemplate_c723fb0a752ce10fbb640773f99e4dca36db41e722a96454bbece2ee2385ad56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "applicant_bookmarked.twig", 1);
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
        $this->loadTemplate("applicant_navigation.twig", "applicant_bookmarked.twig", 4)->display($context);
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
        $this->loadTemplate("applicant_sidebar.twig", "applicant_bookmarked.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Bookmarked Jobs</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["jobs"]) ? $context["jobs"] : null)) == 0)) {
            // line 20
            echo "                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">You have 0 Bookmarked jobs.</h4>
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

                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> ";
            // line 38
            echo twig_escape_filter($this->env, ((twig_escape_filter($this->env, $this->getAttribute($context["job"], "salary", array())) . "/") . $this->getAttribute($context["job"], "salary_type", array())), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute($context["job"], "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["job"], "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
            echo "\" alt=\"logo\"></div>
                                    </div>  
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "job_type", array()), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-user\"></i> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "applications", array()));
            echo " applications</p>
                                    </div>
                                </div>

                                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                    <p>";
            // line 52
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["job"], "description", array()), 0, 150), "html", null, true);
            echo "...<a href=\"/home/jobdetails/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\">Read More</a></p>
                                    <div class=\"expire-job-box\">
                                        <span class=\"expire-date\"> This job will Expire on <strong>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "last_date", array()), "d M, Y"), "html", null, true);
            echo "</strong></span>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"expire-job-box\">                                
                                        <span class=\"pull-right\">
                                            <a data-id=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()));
            echo "\" href=\"javascript:void(0);\" onclick=\"window.profile.delBookmark(this)\" class=\"btn btn-danger\"> Delete Bookmark</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </div>
                    ";
        // line 84
        echo "                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "applicant_bookmarked.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 84,  150 => 66,  138 => 60,  129 => 54,  122 => 52,  114 => 47,  108 => 44,  102 => 41,  96 => 38,  90 => 35,  82 => 30,  77 => 28,  73 => 27,  69 => 25,  64 => 24,  58 => 20,  56 => 19,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                {% include 'applicant_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Bookmarked Jobs</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        {% if jobs|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">You have 0 Bookmarked jobs.</h4>
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

                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> {{ job.location }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ job.salary|e ~\"/\"~ job.salary_type }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/{{ job.logo|default('logo.jpg') }}\" alt=\"logo\"></div>
                                    </div>  
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{job.job_type }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-user\"></i> {{ job.applications|e }} applications</p>
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
                                            <a data-id=\"{{ job.id|e }}\" href=\"javascript:void(0);\" onclick=\"window.profile.delBookmark(this)\" class=\"btn btn-danger\"> Delete Bookmark</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
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

{% endblock %}", "applicant_bookmarked.twig", "/home/getwork/public_html/application/views/applicant_bookmarked.twig");
    }
}
