<?php

/* applicant_jobs.twig */
class __TwigTemplate_614551e73192b61028c25172d3e05f660c873ea292eda64e2eef547cbacc1638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "applicant_jobs.twig", 1);
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
        $this->loadTemplate("applicant_navigation.twig", "applicant_jobs.twig", 4)->display($context);
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
                    <div class=\"profile-card\">
                        <div class=\"banner\">
                            <img src=\"../../images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"../../images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                        </div>
                        <div class=\"card-body\">
                            <h3>";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array())), "html", null, true);
        echo "</h3>
                            <span class=\"title\">A web Designer</span>
                        </div>
                        <ul class=\"social-network social-circle onwhite\">
                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                    ";
        // line 32
        $this->loadTemplate("applicant_sidebar.twig", "applicant_jobs.twig", 32)->display($context);
        // line 33
        echo "                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Job applied</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 40
            echo "                            <div class=\"job-box job-box-2\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm\">
                                    <div class=\"comp-logo\">
                                        <a href=\"/home/jobdetails/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()));
            echo "\"><img src=\"../../images/company/5.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </a>
                                    </div>

                                </div>
                                <div class=\"col-md-10 col-sm-10 col-xs-12\">
                                    <div class=\"job-title-box\">
                                        <a href=\"/home/jobdetails/";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()));
            echo "\">
                                            <div class=\"job-title\"> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", array()));
            echo "</div>
                                        </a>
                                        <a href=\"#\"><span class=\"comp-name\">";
            // line 52
            echo $this->getAttribute($context["job"], "address", array());
            echo " </span></a>
                                        <a href=\"\" class=\"job-type jt-full-time-color\">
                                            <i class=\"fa fa-clock-o\"></i> ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "job_type", array()));
            echo "
                                        </a>
                                    </div>
                                    <p>";
            // line 57
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["job"], "description", array()), 0, 150), "html", null, true);
            echo "....<a href=\"/home/jobdetails/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()));
            echo "\">Read More</a> </p>
                                </div>
                                <div class=\"job-salary\">
                                    <i class=\"fa fa-money\"></i> ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "salary", array()));
            echo "
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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

    public function getTemplateName()
    {
        return "applicant_jobs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 64,  127 => 60,  119 => 57,  113 => 54,  108 => 52,  103 => 50,  99 => 49,  90 => 43,  85 => 40,  81 => 39,  73 => 33,  71 => 32,  56 => 22,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"profile-card\">
                        <div class=\"banner\">
                            <img src=\"../../images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"../../images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                        </div>
                        <div class=\"card-body\">
                            <h3>{{user.first_name|capitalize}} {{user.last_name|capitalize}}</h3>
                            <span class=\"title\">A web Designer</span>
                        </div>
                        <ul class=\"social-network social-circle onwhite\">
                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                    {% include 'applicant_sidebar.twig' %}
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Job applied</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        {% for job in jobs %}
                            <div class=\"job-box job-box-2\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm\">
                                    <div class=\"comp-logo\">
                                        <a href=\"/home/jobdetails/{{ job.id|e }}\"><img src=\"../../images/company/5.png\" class=\"img-responsive\" alt=\"scriptsbundle\"> </a>
                                    </div>

                                </div>
                                <div class=\"col-md-10 col-sm-10 col-xs-12\">
                                    <div class=\"job-title-box\">
                                        <a href=\"/home/jobdetails/{{ job.id|e }}\">
                                            <div class=\"job-title\"> {{ job.title|e }}</div>
                                        </a>
                                        <a href=\"#\"><span class=\"comp-name\">{{ job.address|raw }} </span></a>
                                        <a href=\"\" class=\"job-type jt-full-time-color\">
                                            <i class=\"fa fa-clock-o\"></i> {{ job.job_type|e }}
                                        </a>
                                    </div>
                                    <p>{{ job.description|slice(0,150) }}....<a href=\"/home/jobdetails/{{ job.id|e }}\">Read More</a> </p>
                                </div>
                                <div class=\"job-salary\">
                                    <i class=\"fa fa-money\"></i> {{ job.salary|e }}
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

{% endblock %}", "applicant_jobs.twig", "/home/frescihp/public_html/getwork/application/views/applicant_jobs.twig");
    }
}
