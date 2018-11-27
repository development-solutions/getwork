<?php

/* employer_featured_jobs.twig */
class __TwigTemplate_9f348179b347592fa4d3a348af5f18f6e2691dd30f9d568273b9391e613e42ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "employer_featured_jobs.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "employer_featured_jobs.twig", 4)->display($context);
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
                    <div class=\"panel\">
                        <div class=\"dashboard-logo-sidebar\">
                            <img class=\"img-responsive center-block\" src=\"../../images/company/logo1.jpg\" alt=\"Image\">
                        </div>
                        <div class=\"text-center dashboard-logo-sidebar-title\">
                            <h4>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo "</h4>
                        </div>
                    </div>
                    ";
        // line 22
        $this->loadTemplate("employer_sidebar.twig", "employer_featured_jobs.twig", 22)->display($context);
        // line 23
        echo "                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Your Featured Jobs</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <a href=\"#\">
                                    <div class=\"job-title\"> Technical Documentation Specialist</div>
                                </a>
                                <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. United States </span></a>
                                <a href=\"\" class=\"job-type jt-full-time-color\">
                                    <i class=\"fa fa-clock-o\"></i> Full time
                                </a>
                            </div>
                            <div class=\"expire-job-box\">
                                <span class=\"expire-date\"> This job will Expire on <strong>12 Aug, 2016</strong></span>
                                <span class=\"pull-right\">
                           \t\t<a href=\"\" class=\"btn btn-default\"> Edit job</a>
                            \t<a href=\"\" class=\"btn btn-danger\"> Delete job</a>
                           </span>
                            </div>
                            <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-trophy\"></i>  Featured</span></div>
                        </div>
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <a href=\"#\">
                                    <div class=\"job-title\"> Assistant Engineer (IT/Networks)</div>
                                </a>
                                <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. United States </span></a>
                                <a href=\"\" class=\"job-type jt-part-time-color\">
                                    <i class=\"fa fa-clock-o\"></i> Part Time
                                </a>
                            </div>
                            <div class=\"expire-job-box\">
                                <span class=\"expire-date\"> This job will Expire on <strong>12 Aug, 2016</strong></span>
                                <span class=\"pull-right\">
                            <a href=\"\" class=\"btn btn-info\"> Edit job</a>
                            <a href=\"\" class=\"btn btn-danger\"> Delete job</a>
                       </span>
                            </div>
                            <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-trophy\"></i>  Featured</span></div>
                        </div>
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <a href=\"#\">
                                    <div class=\"job-title\"> Technical Network Director (IT/Networks)</div>
                                </a>
                                <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. United States </span></a>
                                <a href=\"\" class=\"job-type jt-remote-color\">
                                    <i class=\"fa fa-clock-o\"></i> Remote
                                </a>
                            </div>
                            <div class=\"expire-job-box\">
                                <span class=\"expire-date\"> This job will Expire on <strong>12 Aug, 2016</strong></span>
                                <span class=\"pull-right\">
                            <a href=\"\" class=\"btn btn-info\"> Edit job</a>
                            <a href=\"\" class=\"btn btn-danger\"> Delete job</a>
                       </span>
                            </div>
                            <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-trophy\"></i>  Featured</span></div>
                        </div>
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <a href=\"#\">
                                    <div class=\"job-title\"> Technical Documentation Specialist</div>
                                </a>
                                <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. United States </span></a>
                                <a href=\"\" class=\"job-type jt-full-time-color\">
                                    <i class=\"fa fa-clock-o\"></i> Full time
                                </a>
                            </div>
                            <div class=\"expire-job-box\">
                                <span class=\"expire-date\"> This job will Expire on <strong>12 Aug, 2016</strong></span>
                                <span class=\"pull-right\">
                            <a href=\"\" class=\"btn btn-info\"> Edit job</a>
                            <a href=\"\" class=\"btn btn-danger\"> Delete job</a>
                       </span>
                            </div>
                            <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-trophy\"></i>  Featured</span></div>
                        </div>
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
        return "employer_featured_jobs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  59 => 22,  53 => 19,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"panel\">
                        <div class=\"dashboard-logo-sidebar\">
                            <img class=\"img-responsive center-block\" src=\"../../images/company/logo1.jpg\" alt=\"Image\">
                        </div>
                        <div class=\"text-center dashboard-logo-sidebar-title\">
                            <h4>{{ user.company_name }}</h4>
                        </div>
                    </div>
                    {% include 'employer_sidebar.twig' %}
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Your Featured Jobs</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <a href=\"#\">
                                    <div class=\"job-title\"> Technical Documentation Specialist</div>
                                </a>
                                <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. United States </span></a>
                                <a href=\"\" class=\"job-type jt-full-time-color\">
                                    <i class=\"fa fa-clock-o\"></i> Full time
                                </a>
                            </div>
                            <div class=\"expire-job-box\">
                                <span class=\"expire-date\"> This job will Expire on <strong>12 Aug, 2016</strong></span>
                                <span class=\"pull-right\">
                           \t\t<a href=\"\" class=\"btn btn-default\"> Edit job</a>
                            \t<a href=\"\" class=\"btn btn-danger\"> Delete job</a>
                           </span>
                            </div>
                            <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-trophy\"></i>  Featured</span></div>
                        </div>
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <a href=\"#\">
                                    <div class=\"job-title\"> Assistant Engineer (IT/Networks)</div>
                                </a>
                                <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. United States </span></a>
                                <a href=\"\" class=\"job-type jt-part-time-color\">
                                    <i class=\"fa fa-clock-o\"></i> Part Time
                                </a>
                            </div>
                            <div class=\"expire-job-box\">
                                <span class=\"expire-date\"> This job will Expire on <strong>12 Aug, 2016</strong></span>
                                <span class=\"pull-right\">
                            <a href=\"\" class=\"btn btn-info\"> Edit job</a>
                            <a href=\"\" class=\"btn btn-danger\"> Delete job</a>
                       </span>
                            </div>
                            <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-trophy\"></i>  Featured</span></div>
                        </div>
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <a href=\"#\">
                                    <div class=\"job-title\"> Technical Network Director (IT/Networks)</div>
                                </a>
                                <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. United States </span></a>
                                <a href=\"\" class=\"job-type jt-remote-color\">
                                    <i class=\"fa fa-clock-o\"></i> Remote
                                </a>
                            </div>
                            <div class=\"expire-job-box\">
                                <span class=\"expire-date\"> This job will Expire on <strong>12 Aug, 2016</strong></span>
                                <span class=\"pull-right\">
                            <a href=\"\" class=\"btn btn-info\"> Edit job</a>
                            <a href=\"\" class=\"btn btn-danger\"> Delete job</a>
                       </span>
                            </div>
                            <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-trophy\"></i>  Featured</span></div>
                        </div>
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <a href=\"#\">
                                    <div class=\"job-title\"> Technical Documentation Specialist</div>
                                </a>
                                <a href=\"#\"><span class=\"comp-name\">conversi Pvt. Ltd. United States </span></a>
                                <a href=\"\" class=\"job-type jt-full-time-color\">
                                    <i class=\"fa fa-clock-o\"></i> Full time
                                </a>
                            </div>
                            <div class=\"expire-job-box\">
                                <span class=\"expire-date\"> This job will Expire on <strong>12 Aug, 2016</strong></span>
                                <span class=\"pull-right\">
                            <a href=\"\" class=\"btn btn-info\"> Edit job</a>
                            <a href=\"\" class=\"btn btn-danger\"> Delete job</a>
                       </span>
                            </div>
                            <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-trophy\"></i>  Featured</span></div>
                        </div>
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

{% endblock %}", "employer_featured_jobs.twig", "/home/frescihp/public_html/getwork/application/views/employer_featured_jobs.twig");
    }
}
