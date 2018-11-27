<?php

/* admin/admin_sidebar.twig */
class __TwigTemplate_201527c8d38ae18475e2e7ef8c163e4cb4a19a159724bde803957f4420e56797 extends Twig_Template
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
        echo "<div class=\"col-md-3 col-sm-3 col-xs-12\">
    <div class=\"profile-nav\">
        <div class=\"panel\">
            <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"";
        // line 5
        echo ((((isset($context["page"]) ? $context["page"] : null) == "dashboard")) ? ("active") : (""));
        echo "\">
                    <a href=\"/admin\"><i class=\"fa fa-user\"></i> Dashboard</a>
                </li>
                <li class=\"";
        // line 8
        echo ((((isset($context["page"]) ? $context["page"] : null) == "jobs")) ? ("active") : (""));
        echo "\">
                    <a href=\"/admin/jobs\"><i class=\"fa fa-user\"></i> Jobs</a>
                </li>
                <li class=\"";
        // line 11
        echo ((((isset($context["page"]) ? $context["page"] : null) == "courses")) ? ("active") : (""));
        echo "\">
                    <a href=\"/admin/courses\"><i class=\"fa fa-user\"></i> Courses</a>
                </li>
                <li class=\"";
        // line 14
        echo ((((isset($context["page"]) ? $context["page"] : null) == "candidates")) ? ("active") : (""));
        echo "\">
                    <a href=\"/admin/candidates\"><i class=\"fa fa-user\"></i> Candidates</a>
                </li>
                <li class=\"";
        // line 17
        echo ((((isset($context["page"]) ? $context["page"] : null) == "employers")) ? ("active") : (""));
        echo "\">
                    <a href=\"/admin/employers\"><i class=\"fa fa-user\"></i> Employers</a>
                </li>
                <li class=\"";
        // line 20
        echo ((((isset($context["page"]) ? $context["page"] : null) == "postjob")) ? ("active") : (""));
        echo "\">
                    <a href=\"/admin/postjob\"> <i class=\"fa fa-edit\"></i> Post job</a>
                </li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/admin_sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  49 => 17,  43 => 14,  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3 col-sm-3 col-xs-12\">
    <div class=\"profile-nav\">
        <div class=\"panel\">
            <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"{{ page=='dashboard'?'active' }}\">
                    <a href=\"/admin\"><i class=\"fa fa-user\"></i> Dashboard</a>
                </li>
                <li class=\"{{ page=='jobs'?'active' }}\">
                    <a href=\"/admin/jobs\"><i class=\"fa fa-user\"></i> Jobs</a>
                </li>
                <li class=\"{{ page=='courses'?'active' }}\">
                    <a href=\"/admin/courses\"><i class=\"fa fa-user\"></i> Courses</a>
                </li>
                <li class=\"{{ page=='candidates'?'active' }}\">
                    <a href=\"/admin/candidates\"><i class=\"fa fa-user\"></i> Candidates</a>
                </li>
                <li class=\"{{ page=='employers'?'active' }}\">
                    <a href=\"/admin/employers\"><i class=\"fa fa-user\"></i> Employers</a>
                </li>
                <li class=\"{{ page=='postjob'?'active' }}\">
                    <a href=\"/admin/postjob\"> <i class=\"fa fa-edit\"></i> Post job</a>
                </li>
            </ul>
        </div>
    </div>
</div>", "admin/admin_sidebar.twig", "/home/getwork/public_html/application/views/admin/admin_sidebar.twig");
    }
}
