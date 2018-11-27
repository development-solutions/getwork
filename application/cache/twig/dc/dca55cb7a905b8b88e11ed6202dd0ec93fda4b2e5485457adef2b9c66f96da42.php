<?php

/* /admin/courselist.twig */
class __TwigTemplate_7a6223ded97d5ea0da75cbe6cf9e7e62f2e07d7f355173136f562dcb483c85a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "/admin/courselist.twig", 1);
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
        $this->loadTemplate("admin/admin_navigation.twig", "/admin/courselist.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                ";
        // line 13
        $this->loadTemplate("admin/admin_sidebar.twig", "/admin/courselist.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Approve/Disapprove Courses</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : null)) == 0)) {
            // line 20
            echo "                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">There are no more courses to approve</h4>
                            </div>
                        ";
        }
        // line 24
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 25
            echo "                            <div class=\"job-box job-box-2 expire-box ribbon-content\">
                                <div class=\"job-title-box\">
                                    <a href=\"/admin/courseinfo/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\">
                                        <div class=\"job-title\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</div>
                                    </a>
                                    <a href=\"#\"><span class=\"comp-name\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "company_name", array()), "html", null, true);
            echo "</span></a>
                                    <a href=\"\" class=\"job-type jt-full-time-color\">
                                        <i class=\"fa fa-clock-o\"></i> Full time
                                    </a>
                                </div>
                                <div class=\"expire-job-box\">
                                    ";
            // line 37
            echo "                                    <span class=\"pull-right\">
                                        <a href=\"javascript:void(0)\" data-id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" onclick=\"window.su.approveCourse(this)\" class=\"btn btn-info\"> Approve Course</a>
                                        <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val(";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo ")\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-danger\"> Disapprove Course</a>
                                    </span>
                                </div>                            
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </div>
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
                                <input type=\"text\" class=\"form-control\" readonly=\"true\" name=\"subject\" value=\"Job disapproved\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.su.disapproveCourse()\" class=\"btn btn-default btn-block\">Submit</button>
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

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        $this->loadTemplate("/admin/courselist.twig", "/admin/courselist.twig", 82, "1754960843")->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/courselist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 82,  150 => 81,  110 => 44,  99 => 39,  95 => 38,  92 => 37,  83 => 30,  78 => 28,  74 => 27,  70 => 25,  65 => 24,  59 => 20,  57 => 19,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                {% include 'admin/admin_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Approve/Disapprove Courses</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        {% if courses|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">There are no more courses to approve</h4>
                            </div>
                        {% endif %}
                        {% for course in courses %}
                            <div class=\"job-box job-box-2 expire-box ribbon-content\">
                                <div class=\"job-title-box\">
                                    <a href=\"/admin/courseinfo/{{ course.id }}\">
                                        <div class=\"job-title\">{{ course.title}}</div>
                                    </a>
                                    <a href=\"#\"><span class=\"comp-name\">{{ course.company_name }}</span></a>
                                    <a href=\"\" class=\"job-type jt-full-time-color\">
                                        <i class=\"fa fa-clock-o\"></i> Full time
                                    </a>
                                </div>
                                <div class=\"expire-job-box\">
                                    {# <span class=\"expire-date\"> This job will Expire on <strong>{{ course.last_date|date(\"d M, Y\") }}</strong></span> #}
                                    <span class=\"pull-right\">
                                        <a href=\"javascript:void(0)\" data-id=\"{{ course.id }}\" onclick=\"window.su.approveCourse(this)\" class=\"btn btn-info\"> Approve Course</a>
                                        <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val({{ course.id }})\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-danger\"> Disapprove Course</a>
                                    </span>
                                </div>                            
                            </div>
                        {% endfor %}
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
                    <input id=\"courseid\" type=\"hidden\" name=\"courseid\" value=\"\" />
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
                                <button type=\"button\" onclick=\"window.su.disapproveCourse()\" class=\"btn btn-default btn-block\">Submit</button>
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
{% endblock %}", "/admin/courselist.twig", "/home/frescihp/public_html/getwork/application/views/admin/courselist.twig");
    }
}


/* /admin/courselist.twig */
class __TwigTemplate_7a6223ded97d5ea0da75cbe6cf9e7e62f2e07d7f355173136f562dcb483c85a6_1754960843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "/admin/courselist.twig", 82);
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

    // line 83
    public function block_customScripts($context, array $blocks = array())
    {
        // line 84
        echo "            <script type=\"text/javascript\" src=\"/js/suser.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "/admin/courselist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 84,  297 => 83,  153 => 82,  150 => 81,  110 => 44,  99 => 39,  95 => 38,  92 => 37,  83 => 30,  78 => 28,  74 => 27,  70 => 25,  65 => 24,  59 => 20,  57 => 19,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                {% include 'admin/admin_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Approve/Disapprove Courses</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        {% if courses|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">There are no more courses to approve</h4>
                            </div>
                        {% endif %}
                        {% for course in courses %}
                            <div class=\"job-box job-box-2 expire-box ribbon-content\">
                                <div class=\"job-title-box\">
                                    <a href=\"/admin/courseinfo/{{ course.id }}\">
                                        <div class=\"job-title\">{{ course.title}}</div>
                                    </a>
                                    <a href=\"#\"><span class=\"comp-name\">{{ course.company_name }}</span></a>
                                    <a href=\"\" class=\"job-type jt-full-time-color\">
                                        <i class=\"fa fa-clock-o\"></i> Full time
                                    </a>
                                </div>
                                <div class=\"expire-job-box\">
                                    {# <span class=\"expire-date\"> This job will Expire on <strong>{{ course.last_date|date(\"d M, Y\") }}</strong></span> #}
                                    <span class=\"pull-right\">
                                        <a href=\"javascript:void(0)\" data-id=\"{{ course.id }}\" onclick=\"window.su.approveCourse(this)\" class=\"btn btn-info\"> Approve Course</a>
                                        <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val({{ course.id }})\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-danger\"> Disapprove Course</a>
                                    </span>
                                </div>                            
                            </div>
                        {% endfor %}
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
                    <input id=\"courseid\" type=\"hidden\" name=\"courseid\" value=\"\" />
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
                                <button type=\"button\" onclick=\"window.su.disapproveCourse()\" class=\"btn btn-default btn-block\">Submit</button>
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
{% endblock %}", "/admin/courselist.twig", "/home/frescihp/public_html/getwork/application/views/admin/courselist.twig");
    }
}
