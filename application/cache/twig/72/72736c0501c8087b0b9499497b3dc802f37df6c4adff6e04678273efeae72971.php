<?php

/* employer_featured_jobs.twig */
class __TwigTemplate_f69fcc0837b88b5e25adaa5c7d69a93c254b7f6d79b20692d0ea035764366096 extends Twig_Template
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
                ";
        // line 13
        $this->loadTemplate("employer_sidebar.twig", "employer_featured_jobs.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
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
        return array (  49 => 14,  47 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
