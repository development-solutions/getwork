<?php

/* course_search.twig */
class __TwigTemplate_13fb183510d047cb7ea73e34d40339ffb5e72e90278a34f04d11cf090b8cc0b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                <h4 class=\"search-result-text\">
                    ";
        // line 6
        if (((isset($context["keyword"]) ? $context["keyword"] : null) != (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 7
            echo "                        showing ";
            echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : null)) . " ") . (isset($context["keyword"]) ? $context["keyword"] : null)), "html", null, true);
            echo " courses.
                    ";
        }
        // line 9
        echo "                </h4>
                ";
        // line 11
        echo "            </div>
            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                <div class=\"all-jobs-list-box\">
                    ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : null)) == 0)) {
            // line 15
            echo "                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">No Course Found !</h4>
                        </div>
                    ";
        }
        // line 19
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 20
            echo "                        <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                            <div class=\"job-title-box\">
                                <a href=\"/home/courseinfo/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\">
                                    <div class=\"job-title\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</div>
                                </a>
                                <a href=\"#\"><span class=\"job-type comp-name\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "company_name", array()), "html", null, true);
            echo "</span></a>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "course_type", array()), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> ";
            // line 32
            echo twig_escape_filter($this->env, ((twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array())) . "/") . $this->getAttribute($context["course"], "price_type", array())), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"joblistlogo\"><img src=\"/uploads/";
            // line 35
            echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
            echo "\" alt=\"Railway construction management logo\"></div>
                                </div>  
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "duration", array()), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <a href=\"\"><p><i class=\"fa fa-tags\"></i> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "course_category", array()));
            echo "</p></a>
                                </div>
                            </div>
                            <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                <p>";
            // line 45
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["course"], "description", array()), 0, 150), "html", null, true);
            echo "...</p>
                                <p><a href=\"/home/courseinfo/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i> Read More</a> 
                                ";
            // line 47
            if (((isset($context["userType"]) ? $context["userType"] : null) && ((isset($context["userType"]) ? $context["userType"] : null) == 2))) {
                // line 48
                echo "                                    <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo ")\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-envelope\"></i>  Enquire Now</a>
                                ";
            }
            // line 50
            echo "                                </p>
                                ";
            // line 54
            echo "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <div class=\"pagination-box clearfix\">
                        <div class=\"cstm-pagination pagination\">
                            ";
        // line 61
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
        // line 71
        $context["selectedCats"] = twig_split_filter($this->env, (isset($context["searchCategories"]) ? $context["searchCategories"] : null), ",");
        // line 72
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 73
            echo "                                <li><input type=\"checkbox\" ";
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
        // line 75
        echo "                        </ul>
                    </div>
                    <div class=\"widget\">
                        <div class=\"widget-heading\"><span class=\"title\">Course Types</span></div>
                        <ul class=\"categories-module job-type\">
                            ";
        // line 80
        $context["selectedTypes"] = twig_split_filter($this->env, (isset($context["searchCoursetype"]) ? $context["searchCoursetype"] : null), ",");
        // line 81
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseTypes"]) ? $context["courseTypes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 82
            echo "                                <li><input type=\"checkbox\" ";
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
        // line 84
        echo "                        </ul>
                    </div>
                    ";
        // line 131
        echo "                </aside>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "course_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 131,  207 => 84,  190 => 82,  185 => 81,  183 => 80,  176 => 75,  159 => 73,  154 => 72,  152 => 71,  139 => 61,  133 => 57,  125 => 54,  122 => 50,  116 => 48,  114 => 47,  110 => 46,  106 => 45,  99 => 41,  93 => 38,  87 => 35,  81 => 32,  75 => 29,  68 => 25,  63 => 23,  59 => 22,  55 => 20,  50 => 19,  44 => 15,  42 => 14,  37 => 11,  34 => 9,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
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
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i> {{ course.course_type }}</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ course.price|e ~\"/\"~ course.price_type }}</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"joblistlogo\"><img src=\"/uploads/{{ course.logo|default('logo.jpg') }}\" alt=\"Railway construction management logo\"></div>
                                </div>  
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{course.duration }}</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <a href=\"\"><p><i class=\"fa fa-tags\"></i> {{ course.course_category|e }}</p></a>
                                </div>
                            </div>
                            <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                <p>{{ course.description|raw|slice(0,150) }}...</p>
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
                        <ul class=\"categories-module job-type\">
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
</div>", "course_search.twig", "/home/getwork/public_html/application/views/course_search.twig");
    }
}
