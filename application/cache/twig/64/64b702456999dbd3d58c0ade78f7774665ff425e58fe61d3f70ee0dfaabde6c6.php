<?php

/* course_list.twig */
class __TwigTemplate_bfae4248dfd91bb1702ed00ca2817d3eec4ec3683634d6a2d8b53197d4c1d426 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "course_list.twig", 1);
        $this->blocks = array(
            'metatags' => array($this, 'block_metatags'),
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_metatags($context, array $blocks = array())
    {
        // line 3
        echo "    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Learning with one of our best construction courses or online development courses with our professional experts training providers. getwork.construction\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Construction Courses in UK | Post Free Courses - Getwork.construction</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<section class=\"breadcrumb-search parallex course-list\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-10 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"window.common.getCourseTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"courseSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"categories-list-page light-grey\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <h4 class=\"search-result-text\">
                        ";
        // line 50
        if (((isset($context["keyword"]) ? $context["keyword"] : null) != (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 51
            echo "                            showing ";
            echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : null)) . " ") . (isset($context["keyword"]) ? $context["keyword"] : null)), "html", null, true);
            echo " courses.
                        ";
        }
        // line 53
        echo "                    </h4>
                    ";
        // line 55
        echo "                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"all-jobs-list-box\">
                        ";
        // line 58
        if ((twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : null)) == 0)) {
            // line 59
            echo "                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">No Course Found !</h4>
                            </div>
                        ";
        }
        // line 63
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 64
            echo "                            <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                <div class=\"job-title-box\">
                                    <a href=\"/home/courseinfo/";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\">
                                        <div class=\"job-title\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</div>
                                    </a>
                                    <a href=\"#\"><span class=\"job-type comp-name\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "company_name", array()), "html", null, true);
            echo "</span></a>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"all-course-list-box-onsite col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "course_type", array()), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"all-course-list-box-PO col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> ";
            // line 76
            echo twig_escape_filter($this->env, ((twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array())) . "/") . $this->getAttribute($context["course"], "price_type", array())), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"all-course-list-box-call col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/";
            // line 79
            echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
            echo "\" alt=\"Jobs in London logo\"></div>
                                    </div>  
                                    <div class=\"all-course-list-box-operator col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "duration", array()), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\" Plant-Courses col-md-4 col-sm-4 col-xs-12\">
                                        <a href=\"\"><p><i class=\"fa fa-tags\"></i> ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "course_category", array()));
            echo "</p></a>
                                    </div>
                                </div>
                                <div class=\"Courses-list-content col-md-9 col-sm-9 col-xs-12\">
                                    <div class=\"list-course-desc\">";
            // line 89
            echo $this->getAttribute($context["course"], "description", array());
            echo "...</div>
                                    <p><a href=\"/home/courseinfo/";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i> Read More</a> 
                                    ";
            // line 91
            if (((isset($context["userType"]) ? $context["userType"] : null) && ((isset($context["userType"]) ? $context["userType"] : null) == 2))) {
                // line 92
                echo "                                        <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo ")\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-envelope\"></i>  Enquire Now</a>
                                    ";
            }
            // line 94
            echo "                                    </p>
                                    ";
            // line 98
            echo "                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                ";
        // line 105
        echo (isset($context["links"]) ? $context["links"] : null);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Course Categories</span></div>
                            <ul class=\"categories-module\">
                                ";
        // line 115
        $context["selectedCats"] = twig_split_filter($this->env, (isset($context["searchCategories"]) ? $context["searchCategories"] : null), ",");
        // line 116
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 117
            echo "                                    <li><input type=\"checkbox\" ";
            if (twig_in_filter($this->getAttribute($context["cat"], "id", array()), (isset($context["selectedCats"]) ? $context["selectedCats"] : null))) {
                echo " checked ";
            }
            echo " name=\"coursecat\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\"> <a href=\"\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "course_category", array()), "html", null, true);
            echo "<span>(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "coursesCount", array()), "html", null, true);
            echo ")</span> </a> </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                            </ul>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Course Types</span></div>
                            <ul class=\"categories-module\">
                                ";
        // line 124
        $context["selectedTypes"] = twig_split_filter($this->env, (isset($context["searchCoursetype"]) ? $context["searchCoursetype"] : null), ",");
        // line 125
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseTypes"]) ? $context["courseTypes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 126
            echo "                                    <li><input type=\"checkbox\" ";
            if (twig_in_filter($this->getAttribute($context["type"], "id", array()), (isset($context["selectedTypes"]) ? $context["selectedTypes"] : null))) {
                echo " checked ";
            }
            echo " name=\"coursetype\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\"> <a href=\"\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "course_type", array()), "html", null, true);
            echo "<span>(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "coursesCount", array()), "html", null, true);
            echo ")</span> </a> </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                            </ul>
                        </div>
                        ";
        // line 175
        echo "                    </aside>
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
                    <input id=\"courseid\" type=\"hidden\" name=\"courseid\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.profile.queryCourse()\" class=\"btn btn-default btn-block\">Submit</button>
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

    // line 212
    public function block_footer($context, array $blocks = array())
    {
        // line 213
        echo "    ";
        $this->loadTemplate("course_list.twig", "course_list.twig", 213, "2131853714")->display($context);
    }

    public function getTemplateName()
    {
        return "course_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 213,  321 => 212,  281 => 175,  277 => 128,  260 => 126,  255 => 125,  253 => 124,  246 => 119,  229 => 117,  224 => 116,  222 => 115,  209 => 105,  203 => 101,  195 => 98,  192 => 94,  186 => 92,  184 => 91,  180 => 90,  176 => 89,  169 => 85,  163 => 82,  157 => 79,  151 => 76,  145 => 73,  138 => 69,  133 => 67,  129 => 66,  125 => 64,  120 => 63,  114 => 59,  112 => 58,  107 => 55,  104 => 53,  98 => 51,  96 => 50,  68 => 25,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"Learning with one of our best construction courses or online development courses with our professional experts training providers. getwork.construction\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Construction Courses in UK | Post Free Courses - Getwork.construction</title>
{% endblock %}
{% block content %}

<section class=\"breadcrumb-search parallex course-list\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-10 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"window.common.getCourseTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"{{ keyword }}\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"courseSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"categories-list-page light-grey\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <h4 class=\"search-result-text\">
                        {% if keyword != empty %}
                            showing {{ courses|length ~ \" \" ~keyword }} courses.
                        {% endif %}
                    </h4>
                    {# <h4 class=\"search-result-text\">Showing 4 of 4 available job(s)</h4> #}
                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"all-jobs-list-box\">
                        {% if courses|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">No Course Found !</h4>
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
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"all-course-list-box-onsite col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i> {{ course.course_type }}</p>
                                    </div>
                                    <div class=\"all-course-list-box-PO col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ course.price|e ~\"/\"~ course.price_type }}</p>
                                    </div>
                                    <div class=\"all-course-list-box-call col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/{{ course.logo|default('logo.jpg') }}\" alt=\"Jobs in London logo\"></div>
                                    </div>  
                                    <div class=\"all-course-list-box-operator col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{course.duration }}</p>
                                    </div>
                                    <div class=\" Plant-Courses col-md-4 col-sm-4 col-xs-12\">
                                        <a href=\"\"><p><i class=\"fa fa-tags\"></i> {{ course.course_category|e }}</p></a>
                                    </div>
                                </div>
                                <div class=\"Courses-list-content col-md-9 col-sm-9 col-xs-12\">
                                    <div class=\"list-course-desc\">{{ course.description|raw }}...</div>
                                    <p><a href=\"/home/courseinfo/{{ course.id }}\"><i class=\"fa fa-eye\"></i> Read More</a> 
                                    {% if userType and userType == 2 %}
                                        <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val({{ course.id }})\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-envelope\"></i>  Enquire Now</a>
                                    {% endif %}
                                    </p>
                                    {# <div class=\"expire-job-box\">
                                        <span class=\"expire-date\"> This job will Expire on <strong>{{ job.last_date|date(\"d M, Y\") }}</strong></span>
                                    </div> #}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                {{ links|raw }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Course Categories</span></div>
                            <ul class=\"categories-module\">
                                {% set selectedCats = searchCategories|split(\",\") %}
                                {% for cat in categories %}
                                    <li><input type=\"checkbox\" {% if cat.id in selectedCats %} checked {% endif %} name=\"coursecat\" value=\"{{ cat.id }}\"> <a href=\"\"> {{ cat.course_category }}<span>({{ cat.coursesCount }})</span> </a> </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Course Types</span></div>
                            <ul class=\"categories-module\">
                                {% set selectedTypes = searchCoursetype|split(\",\") %}
                                {% for type in courseTypes %}
                                    <li><input type=\"checkbox\" {% if type.id in selectedTypes %} checked {% endif %} name=\"coursetype\" value=\"{{ type.id }}\"> <a href=\"\"> {{ type.course_type }}<span>({{ type.coursesCount }})</span> </a> </li>
                                {% endfor %}
                            </ul>
                        </div>
                        {# <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Hot Jobs</span></div>
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
                                <li>
                                    <a href=\"#\">Call Centre Manager</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Managgo, WC  </span>
                                    <span><i class=\"fa fa-calendar\"></i>Feb 01, 2015 - March 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Assistant Manager Audit</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Heling, WC </span>
                                    <span><i class=\"fa fa-calendar\"></i>Aug 01, 2015 - Sep 09, 2016 </span>
                                </li>
                                <li>
                                    <a href=\"#\">Telesales Agent (UK Dialing)</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Somro, New </span>
                                    <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015 - Nov 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Assistant Brand Manager</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Heritage, VA </span>
                                    <span><i class=\"fa fa-calendar\"></i>Dec 01, 2015 - May 09, 2016</span>
                                </li>
                            </ul>
                        </div> #}
                    </aside>
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
                    <input id=\"courseid\" type=\"hidden\" name=\"courseid\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.profile.queryCourse()\" class=\"btn btn-default btn-block\">Submit</button>
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
            <script>
                jQuery(\"input[name='courseSearch']\").on(\"click\",function(){
                    var keyword = jQuery(\"input[name='keyword']\").val().trim();
                    var cats = jQuery(\"input[name='coursecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    var types = jQuery(\"input[name='coursetype']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.courseSearch(keyword,cats,types);
                });

                jQuery(\".categories-list-page\").on(\"click\",\"input[name='coursecat'], input[name='coursetype']\",function(){
                    var keyword = jQuery(\"input[name='keyword']\").val().trim();
                    var cats = jQuery(\"input[name='coursecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    var types = jQuery(\"input[name='coursetype']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.courseSearch(keyword,cats,types);
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "course_list.twig", "/home/getwork/public_html/application/views/course_list.twig");
    }
}


/* course_list.twig */
class __TwigTemplate_bfae4248dfd91bb1702ed00ca2817d3eec4ec3683634d6a2d8b53197d4c1d426_2131853714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "course_list.twig", 213);
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

    // line 214
    public function block_customScripts($context, array $blocks = array())
    {
        // line 215
        echo "            <script>
                jQuery(\"input[name='courseSearch']\").on(\"click\",function(){
                    var keyword = jQuery(\"input[name='keyword']\").val().trim();
                    var cats = jQuery(\"input[name='coursecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    var types = jQuery(\"input[name='coursetype']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.courseSearch(keyword,cats,types);
                });

                jQuery(\".categories-list-page\").on(\"click\",\"input[name='coursecat'], input[name='coursetype']\",function(){
                    var keyword = jQuery(\"input[name='keyword']\").val().trim();
                    var cats = jQuery(\"input[name='coursecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    var types = jQuery(\"input[name='coursetype']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.courseSearch(keyword,cats,types);
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "course_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  616 => 215,  613 => 214,  324 => 213,  321 => 212,  281 => 175,  277 => 128,  260 => 126,  255 => 125,  253 => 124,  246 => 119,  229 => 117,  224 => 116,  222 => 115,  209 => 105,  203 => 101,  195 => 98,  192 => 94,  186 => 92,  184 => 91,  180 => 90,  176 => 89,  169 => 85,  163 => 82,  157 => 79,  151 => 76,  145 => 73,  138 => 69,  133 => 67,  129 => 66,  125 => 64,  120 => 63,  114 => 59,  112 => 58,  107 => 55,  104 => 53,  98 => 51,  96 => 50,  68 => 25,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"Learning with one of our best construction courses or online development courses with our professional experts training providers. getwork.construction\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Construction Courses in UK | Post Free Courses - Getwork.construction</title>
{% endblock %}
{% block content %}

<section class=\"breadcrumb-search parallex course-list\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-10 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"window.common.getCourseTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"{{ keyword }}\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"courseSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"categories-list-page light-grey\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <h4 class=\"search-result-text\">
                        {% if keyword != empty %}
                            showing {{ courses|length ~ \" \" ~keyword }} courses.
                        {% endif %}
                    </h4>
                    {# <h4 class=\"search-result-text\">Showing 4 of 4 available job(s)</h4> #}
                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"all-jobs-list-box\">
                        {% if courses|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">No Course Found !</h4>
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
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"all-course-list-box-onsite col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i> {{ course.course_type }}</p>
                                    </div>
                                    <div class=\"all-course-list-box-PO col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ course.price|e ~\"/\"~ course.price_type }}</p>
                                    </div>
                                    <div class=\"all-course-list-box-call col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/{{ course.logo|default('logo.jpg') }}\" alt=\"Jobs in London logo\"></div>
                                    </div>  
                                    <div class=\"all-course-list-box-operator col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{course.duration }}</p>
                                    </div>
                                    <div class=\" Plant-Courses col-md-4 col-sm-4 col-xs-12\">
                                        <a href=\"\"><p><i class=\"fa fa-tags\"></i> {{ course.course_category|e }}</p></a>
                                    </div>
                                </div>
                                <div class=\"Courses-list-content col-md-9 col-sm-9 col-xs-12\">
                                    <div class=\"list-course-desc\">{{ course.description|raw }}...</div>
                                    <p><a href=\"/home/courseinfo/{{ course.id }}\"><i class=\"fa fa-eye\"></i> Read More</a> 
                                    {% if userType and userType == 2 %}
                                        <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val({{ course.id }})\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-envelope\"></i>  Enquire Now</a>
                                    {% endif %}
                                    </p>
                                    {# <div class=\"expire-job-box\">
                                        <span class=\"expire-date\"> This job will Expire on <strong>{{ job.last_date|date(\"d M, Y\") }}</strong></span>
                                    </div> #}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                {{ links|raw }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Course Categories</span></div>
                            <ul class=\"categories-module\">
                                {% set selectedCats = searchCategories|split(\",\") %}
                                {% for cat in categories %}
                                    <li><input type=\"checkbox\" {% if cat.id in selectedCats %} checked {% endif %} name=\"coursecat\" value=\"{{ cat.id }}\"> <a href=\"\"> {{ cat.course_category }}<span>({{ cat.coursesCount }})</span> </a> </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Course Types</span></div>
                            <ul class=\"categories-module\">
                                {% set selectedTypes = searchCoursetype|split(\",\") %}
                                {% for type in courseTypes %}
                                    <li><input type=\"checkbox\" {% if type.id in selectedTypes %} checked {% endif %} name=\"coursetype\" value=\"{{ type.id }}\"> <a href=\"\"> {{ type.course_type }}<span>({{ type.coursesCount }})</span> </a> </li>
                                {% endfor %}
                            </ul>
                        </div>
                        {# <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Hot Jobs</span></div>
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
                                <li>
                                    <a href=\"#\">Call Centre Manager</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Managgo, WC  </span>
                                    <span><i class=\"fa fa-calendar\"></i>Feb 01, 2015 - March 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Assistant Manager Audit</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Heling, WC </span>
                                    <span><i class=\"fa fa-calendar\"></i>Aug 01, 2015 - Sep 09, 2016 </span>
                                </li>
                                <li>
                                    <a href=\"#\">Telesales Agent (UK Dialing)</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Somro, New </span>
                                    <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015 - Nov 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Assistant Brand Manager</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Heritage, VA </span>
                                    <span><i class=\"fa fa-calendar\"></i>Dec 01, 2015 - May 09, 2016</span>
                                </li>
                            </ul>
                        </div> #}
                    </aside>
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
                    <input id=\"courseid\" type=\"hidden\" name=\"courseid\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.profile.queryCourse()\" class=\"btn btn-default btn-block\">Submit</button>
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
            <script>
                jQuery(\"input[name='courseSearch']\").on(\"click\",function(){
                    var keyword = jQuery(\"input[name='keyword']\").val().trim();
                    var cats = jQuery(\"input[name='coursecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    var types = jQuery(\"input[name='coursetype']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.courseSearch(keyword,cats,types);
                });

                jQuery(\".categories-list-page\").on(\"click\",\"input[name='coursecat'], input[name='coursetype']\",function(){
                    var keyword = jQuery(\"input[name='keyword']\").val().trim();
                    var cats = jQuery(\"input[name='coursecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    var types = jQuery(\"input[name='coursetype']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.courseSearch(keyword,cats,types);
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "course_list.twig", "/home/getwork/public_html/application/views/course_list.twig");
    }
}
