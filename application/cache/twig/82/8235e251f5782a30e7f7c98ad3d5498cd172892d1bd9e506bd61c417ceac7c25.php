<?php

/* /admin/courseinfo.twig */
class __TwigTemplate_4e18488ce9a9cd361d77d736d4713c050b284bb5cab3403c61e83532403dea5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "/admin/courseinfo.twig", 1);
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
        $this->loadTemplate("admin/admin_navigation.twig", "/admin/courseinfo.twig", 4)->display($context);
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
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Course Detail</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <div class=\"courselogo\"><img src=\"/images/logo.png\" alt=\"logo\"></div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Price:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Duration:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "duration", array()), "html", null, true);
        echo " </p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Qualification:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "qualification", array()), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Awarded by:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "company_name", array()), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12 job-box job-box-2 expire-box ribbon-content\">
                            <h3>Description</h3>
                            <p>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "description", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            <a href=\"javascript:void(0)\" data-id=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\" onclick=\"window.su.approveCourse(this)\" class=\"btn btn-info cstm-btn\"> Approve Course</a>
                            <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val(";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo ")\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-danger\"> Disapprove Course</a>
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"/uploads/";
        // line 69
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "company_name", array()));
        echo "</td>
                                    </tr>
                                    ";
        // line 85
        echo "                                    <tr>
                                        <th>Website:</th>
                                        <td>";
        // line 87
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "website_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "website_url", array()), "NA")) : ("NA")), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "address", array()));
        echo "</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </aside>
                    ";
        // line 125
        echo "                </div>
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

    // line 161
    public function block_footer($context, array $blocks = array())
    {
        // line 162
        echo "    ";
        $this->loadTemplate("/admin/courseinfo.twig", "/admin/courseinfo.twig", 162, "220788163")->display($context);
    }

    public function getTemplateName()
    {
        return "/admin/courseinfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 162,  198 => 161,  159 => 125,  150 => 91,  143 => 87,  139 => 85,  134 => 75,  125 => 69,  118 => 65,  114 => 64,  104 => 57,  94 => 50,  83 => 42,  72 => 34,  61 => 26,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Course Detail</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <div class=\"courselogo\"><img src=\"/images/logo.png\" alt=\"logo\"></div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Price:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>{{ course.price }}</p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Duration:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p> {{ course.duration }} </p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Qualification:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>{{ course.qualification }}</p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Awarded by:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>{{ course.company_name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12 job-box job-box-2 expire-box ribbon-content\">
                            <h3>Description</h3>
                            <p>{{ course.description }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            <a href=\"javascript:void(0)\" data-id=\"{{ course.id }}\" onclick=\"window.su.approveCourse(this)\" class=\"btn btn-info cstm-btn\"> Approve Course</a>
                            <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val({{ course.id }})\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-danger\"> Disapprove Course</a>
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"/uploads/{{ course.logo|default('logo.jpg') }}\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ course.company_name|e }}</td>
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
                                        <td>{{ course.website_url|default(\"NA\") }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>{{ course.address|e }}</td>
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
{% endblock %}", "/admin/courseinfo.twig", "/home/getwork/public_html/application/views/admin/courseinfo.twig");
    }
}


/* /admin/courseinfo.twig */
class __TwigTemplate_4e18488ce9a9cd361d77d736d4713c050b284bb5cab3403c61e83532403dea5c_220788163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "/admin/courseinfo.twig", 162);
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

    // line 163
    public function block_customScripts($context, array $blocks = array())
    {
        // line 164
        echo "            <script type=\"text/javascript\" src=\"/js/suser.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "/admin/courseinfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 164,  425 => 163,  201 => 162,  198 => 161,  159 => 125,  150 => 91,  143 => 87,  139 => 85,  134 => 75,  125 => 69,  118 => 65,  114 => 64,  104 => 57,  94 => 50,  83 => 42,  72 => 34,  61 => 26,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Course Detail</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <div class=\"courselogo\"><img src=\"/images/logo.png\" alt=\"logo\"></div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Price:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>{{ course.price }}</p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Duration:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p> {{ course.duration }} </p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Qualification:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>{{ course.qualification }}</p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Awarded by:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>{{ course.company_name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12 job-box job-box-2 expire-box ribbon-content\">
                            <h3>Description</h3>
                            <p>{{ course.description }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            <a href=\"javascript:void(0)\" data-id=\"{{ course.id }}\" onclick=\"window.su.approveCourse(this)\" class=\"btn btn-info cstm-btn\"> Approve Course</a>
                            <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val({{ course.id }})\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-danger\"> Disapprove Course</a>
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"/uploads/{{ course.logo|default('logo.jpg') }}\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ course.company_name|e }}</td>
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
                                        <td>{{ course.website_url|default(\"NA\") }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>{{ course.address|e }}</td>
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
{% endblock %}", "/admin/courseinfo.twig", "/home/getwork/public_html/application/views/admin/courseinfo.twig");
    }
}
