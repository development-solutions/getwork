<?php

/* courseinfo.twig */
class __TwigTemplate_ac2ae8cec2fd166b7f475a980897ec69e2d8575d0c637c0de74098417db2f9aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "courseinfo.twig", 1);
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
    <meta name=\"description\" content=\"We also provide customised searches for Construction Industry Training courses. Post free courses today to create platform for quality talent\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Post free courses in Construction | Construction courses in UK</title>
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
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Price:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>";
        // line 32
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array())) {
            echo "<i class=\"fa fa-gbp\"></i> ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "POA")) : ("POA")), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "POA")) : ("POA")), "html", null, true);
            echo " ";
        }
        echo "</p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Duration:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p> ";
        // line 40
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "duration", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "duration", array()), "DOA")) : ("DOA")), "html", null, true);
        echo " </p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Qualification:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "qualification", array()), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Provided by:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "company_name", array()), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12 job-box job-box-2 expire-box ribbon-content\">
                            <h3>Description</h3>
                            <p>";
        // line 63
        echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "description", array());
        echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            ";
        // line 70
        if (((isset($context["userType"]) ? $context["userType"] : null) && ((isset($context["userType"]) ? $context["userType"] : null) == 2))) {
            // line 71
            echo "                                ";
            if ((isset($context["shortlisted"]) ? $context["shortlisted"] : null)) {
                // line 72
                echo "                                    <a data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                echo "\" href=\"javascript:void(0);\" onclick=\"window.profile.shortListCourse(this)\" class=\"btn btn-primary cstm-btn\"><i class=\"fa fa-upload\"></i>Shortlisted</a>
                                ";
            } else {
                // line 74
                echo "                                    <a data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                echo "\" href=\"javascript:void(0);\" onclick=\"window.profile.shortListCourse(this)\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Shortlist Course</a>
                                ";
            }
            // line 76
            echo "                                <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
            echo ")\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Enquire Now</a>
                            ";
        } elseif ((        // line 77
(isset($context["userType"]) ? $context["userType"] : null) && ((isset($context["userType"]) ? $context["userType"] : null) == 3))) {
            // line 78
            echo "                                ";
            if ((isset($context["myCourse"]) ? $context["myCourse"] : null)) {
                // line 79
                echo "                                    <a href=\"/dashboard/edit_course/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-default\">Edit Course</a>
                                ";
            }
            // line 81
            echo "                            ";
        } else {
            // line 82
            echo "                                <a href=\"javascript:void(0);\" onclick=\"alert('Please login to shortlist')\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Shortlisted</a>

                                <a href=\"javascript:void(0)\" onclick=\"alert('Please login for Enquiry')\" class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Enquire Now</a>
                            ";
        }
        // line 86
        echo "                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"/uploads/";
        // line 89
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Best Courses in construction\">
                            </div>
                            <div class=\"company-contact-detail\">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "company_name", array()));
        echo "</td>
                                    </tr>
                                    ";
        // line 105
        echo "                                    <tr>
                                        <th>Website:</th>
                                        <td>";
        // line 107
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "website_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "website_url", array()), "NA")) : ("NA")), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>";
        // line 111
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "address", array()) . " ") . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "city", array())) . " ") . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "provience", array())), "html", null, true);
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
<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Enquery About Course</h2>
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

    public function getTemplateName()
    {
        return "courseinfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 145,  210 => 111,  203 => 107,  199 => 105,  194 => 95,  185 => 89,  180 => 86,  174 => 82,  171 => 81,  165 => 79,  162 => 78,  160 => 77,  155 => 76,  149 => 74,  143 => 72,  140 => 71,  138 => 70,  128 => 63,  118 => 56,  107 => 48,  96 => 40,  77 => 32,  64 => 22,  55 => 15,  52 => 14,  47 => 12,  44 => 11,  33 => 3,  30 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"We also provide customised searches for Construction Industry Training courses. Post free courses today to create platform for quality talent\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Post free courses in Construction | Construction courses in UK</title>
{% endblock %}
{% block content %}

<section class=\"single-job-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">{{ course.title }}</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Price:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>{% if course.price %}<i class=\"fa fa-gbp\"></i> {{ course.price|default(\"POA\") }} {% else %} {{ course.price|default(\"POA\") }} {% endif %}</p>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p><strong>Duration:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p> {{ course.duration|default(\"DOA\") }} </p>
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
                                        <p><strong>Provided by:</strong></p>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <p>{{ course.company_name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12 job-box job-box-2 expire-box ribbon-content\">
                            <h3>Description</h3>
                            <p>{{ course.description|raw }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <aside>
                        <div class=\"apply-job\">
                            {% if userType and userType == 2 %}
                                {% if shortlisted %}
                                    <a data-id=\"{{ course.id }}\" href=\"javascript:void(0);\" onclick=\"window.profile.shortListCourse(this)\" class=\"btn btn-primary cstm-btn\"><i class=\"fa fa-upload\"></i>Shortlisted</a>
                                {% else %}
                                    <a data-id=\"{{ course.id }}\" href=\"javascript:void(0);\" onclick=\"window.profile.shortListCourse(this)\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Shortlist Course</a>
                                {% endif %}
                                <a href=\"javascript:void(0)\" onclick=\"jQuery('#courseid').val({{ course.id }})\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Enquire Now</a>
                            {% elseif userType and userType == 3 %}
                                {% if myCourse %}
                                    <a href=\"/dashboard/edit_course/{{ course.id }}\" class=\"btn btn-default\">Edit Course</a>
                                {% endif %}
                            {% else %}
                                <a href=\"javascript:void(0);\" onclick=\"alert('Please login to shortlist')\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>Shortlisted</a>

                                <a href=\"javascript:void(0)\" onclick=\"alert('Please login for Enquiry')\" class=\"btn btn-default bookmark\"><i class=\"fa fa-star\"></i> Enquire Now</a>
                            {% endif %}
                        </div>
                        <div class=\"company-detail\">
                            <div class=\"company-img\">
                                <img src=\"/uploads/{{ course.logo|default('logo.jpg') }}\" class=\"img-responsive\" alt=\"Best Courses in construction\">
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
                                        <td>{{ course.address~\" \"~course.city~\" \"~course.provience }}</td>
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
                    <h2>Enquery About Course</h2>
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
{% endblock %}", "courseinfo.twig", "/home/getwork/public_html/application/views/courseinfo.twig");
    }
}
