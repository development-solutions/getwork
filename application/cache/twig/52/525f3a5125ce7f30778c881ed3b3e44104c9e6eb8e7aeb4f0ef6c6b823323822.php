<?php

/* /admin/featuredjobs.twig */
class __TwigTemplate_6262ea034b350fad5330e1dc017e30e8cce5ed24c89cea54a9274cdcd06cd82b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "/admin/featuredjobs.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<section class=\"dashboard-body admin\">
    <div class=\"containers\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                   <div class=\"profile-nav\">
                        <div class=\"panel\">
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li>
                                    <a href=\"/admin\"><i class=\"fa fa-user\"></i> Dashboard</a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"/admin/joblist\"><i class=\"fa fa-user\"></i> Jobs</a>
                                </li>
                                <li>
                                    <a href=\"/admin/featuredjobs\"> <i class=\"fa fa-edit\"></i> Featured Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-9 col-sm-9 col-xs-12 employrlist\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Featured Job List</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <a href=\"/admin/featuredsingle_job\">
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
                                \t<a href=\"\" class=\"btn btn-danger\"> Hide job</a>
                                </span>
                            </div>
                            <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-trophy\"></i>  Featured</span></div>
                        </div>
                    </div>
                    ";
        // line 67
        echo "                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "/admin/featuredjobs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 67,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}

<section class=\"dashboard-body admin\">
    <div class=\"containers\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                   <div class=\"profile-nav\">
                        <div class=\"panel\">
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li>
                                    <a href=\"/admin\"><i class=\"fa fa-user\"></i> Dashboard</a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"/admin/joblist\"><i class=\"fa fa-user\"></i> Jobs</a>
                                </li>
                                <li>
                                    <a href=\"/admin/featuredjobs\"> <i class=\"fa fa-edit\"></i> Featured Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-9 col-sm-9 col-xs-12 employrlist\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Featured Job List</p>
                    </div>
                    <div class=\"all-jobs-list-box2\">
                        <div class=\"job-box job-box-2 expire-box ribbon-content\">
                            <div class=\"job-title-box\">
                                <a href=\"/admin/featuredsingle_job\">
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
                                \t<a href=\"\" class=\"btn btn-danger\"> Hide job</a>
                                </span>
                            </div>
                            <div class=\"ribbon base\"><span class=\"feature\"> <i class=\"icon-trophy\"></i>  Featured</span></div>
                        </div>
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

{% endblock %}
", "/admin/featuredjobs.twig", "/home/frescihp/public_html/getwork/application/views/admin/featuredjobs.twig");
    }
}
