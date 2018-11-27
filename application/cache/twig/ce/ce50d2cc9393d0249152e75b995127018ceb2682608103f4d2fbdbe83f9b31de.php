<?php

/* courses.twig */
class __TwigTemplate_ddc4555b73033f4ea6c154b2fe322c647a3e77731b3747cfd90a00192703432e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "courses.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "courses.twig", 4)->display($context);
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
        $this->loadTemplate("employer_sidebar.twig", "courses.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Added Courses</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : null)) == 0)) {
            // line 20
            echo "                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">You have 0 active course.</h4>
                            </div>
                        ";
        }
        // line 24
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 25
            echo "                            <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                <div class=\"job-title-box\">
                                    <a href=\"/home/courseinfo/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\">
                                        <div class=\"job-title\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</div>
                                    </a>
                                    <a href=\"#\"><span class=\"job-type comp-name\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "company_name", array()), "html", null, true);
            echo "</span></a>
                                </div>
                                ";
            // line 32
            if (($this->getAttribute($context["course"], "approved", array()) == 0)) {
                // line 33
                echo "                                    <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-document\"></i>  Awating</span></div>
                                ";
            } elseif (($this->getAttribute(            // line 34
$context["course"], "approved", array()) ==  -1)) {
                // line 35
                echo "                                    <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-document\"></i>  Disapproved</span></div>
                                ";
            }
            // line 37
            echo "                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "course_type", array()), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, ((twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array())) . "/") . $this->getAttribute($context["course"], "price_type", array())), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
            echo "\" alt=\"logo Courses in construction\"></div>
                                    </div>  
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "duration", array()), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <a href=\"\"><p><i class=\"fa fa-tags\"></i> ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "course_category", array()));
            echo "</p></a>
                                    </div>
                                </div>
                                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                    <p>";
            // line 55
            echo twig_slice($this->env, $this->getAttribute($context["course"], "description", array()), 0, 150);
            echo "...</p>
                                    <p><a href=\"/home/courseinfo/";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i> Read More</a> 
                                    ";
            // line 60
            echo "                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"expire-job-box\">                                
                                        <span class=\"pull-right\">
                                            <a href=\"/dashboard/edit_course/";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\"> Edit Course</a>
                                            <a data-id=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()));
            echo "\" href=\"javascript:void(0);\" onclick=\"window.dashboard.delCourse(this)\" class=\"btn btn-danger\"> Delete Course</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 94
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                    </div>
                    ";
        // line 113
        echo "                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "courses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 113,  166 => 95,  160 => 94,  151 => 65,  147 => 64,  141 => 60,  137 => 56,  133 => 55,  126 => 51,  120 => 48,  114 => 45,  108 => 42,  102 => 39,  98 => 37,  94 => 35,  92 => 34,  89 => 33,  87 => 32,  82 => 30,  77 => 28,  73 => 27,  69 => 25,  64 => 24,  58 => 20,  56 => 19,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                        <p class=\"title\">Added Courses</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        {% if courses|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">You have 0 active course.</h4>
                            </div>
                        {% endif %}
                        {% for course in courses %}
                            <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                <div class=\"job-title-box\">
                                    <a href=\"/home/courseinfo/{{ course.id }}\">
                                        <div class=\"job-title\">{{ course.title }}</div>
                                    </a>
                                    <a href=\"#\"><span class=\"job-type comp-name\">{{ course.company_name }}</span></a>
                                </div>
                                {% if course.approved == 0 %}
                                    <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-document\"></i>  Awating</span></div>
                                {% elseif course.approved == -1 %}
                                    <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-document\"></i>  Disapproved</span></div>
                                {% endif %}
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i> {{ course.course_type }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ course.price|e ~\"/\"~ course.price_type }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/{{ course.logo|default('logo.jpg') }}\" alt=\"logo Courses in construction\"></div>
                                    </div>  
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{course.duration }}</p>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                        <a href=\"\"><p><i class=\"fa fa-tags\"></i> {{ course.course_category|e }}</p></a>
                                    </div>
                                </div>
                                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                    <p>{{ course.description|slice(0,150)|raw }}...</p>
                                    <p><a href=\"/home/courseinfo/{{ course.id }}\"><i class=\"fa fa-eye\"></i> Read More</a> 
                                    {# <div class=\"expire-job-box\">
                                        <span class=\"expire-date\"> This job will Expire on <strong>{{ job.last_date|date(\"d M, Y\") }}</strong></span>
                                    </div> #}
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"expire-job-box\">                                
                                        <span class=\"pull-right\">
                                            <a href=\"/dashboard/edit_course/{{ course.id}}\" class=\"btn btn-default\"> Edit Course</a>
                                            <a data-id=\"{{ course.id|e }}\" href=\"javascript:void(0);\" onclick=\"window.dashboard.delCourse(this)\" class=\"btn btn-danger\"> Delete Course</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {# <div class=\"job-box job-box-2 expire-box ribbon-content\">
                                <div class=\"job-title-box\">
                                    <a href=\"#\"><div class=\"job-title\">{{ course.title}}</div></a>
                                    <div class=\"courselogo\"><img src=\"/images/logo.png\" alt=\"logo London jobs\"></div>
                                    <a href=\"#\"><strong><h4> {{ course.price }}</h4></strong></a>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <a href=\"#\" class=\"job-type jt-full-time-color\"><i class=\"fa fa-clock-o\"></i> {{ course.course_type}}</a>
                                        <p><strong>Study Method</strong> Classroom</p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Location</strong> Central London, London </p>
                                        <p><strong>Duration</strong> 3 Years, Full-time </p>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <p>{{ course.description|slice(0,100) }}...</p>
                                    </div>
                                    <p><a href=\"\"><i class=\"fa fa-eye\"></i> Read More</a>
                                        <a href=\"\"><i class=\"fa fa-envelope\"></i> Enquire Now</a></p>
                                </div>
                                <div class=\"expire-job-box\">
                                    <span class=\"expire-date\">This job will Expire on <strong>12 Aug, 2016</strong></span>
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
{% endblock %}", "courses.twig", "/home/getwork/public_html/application/views/courses.twig");
    }
}
