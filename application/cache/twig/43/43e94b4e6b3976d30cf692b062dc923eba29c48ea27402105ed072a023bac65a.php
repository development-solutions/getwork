<?php

/* employer_sidebar.twig */
class __TwigTemplate_96801b3b64f7e18cefda73c6a782c0c8103d24fa53ab0f84c0fdbc53537cfcdf extends Twig_Template
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
        echo "<div class=\"profile-nav\">
    <div class=\"panel\">
        <ul class=\"nav nav-pills nav-stacked\">
            <li class=\"";
        // line 4
        echo ((((isset($context["page"]) ? $context["page"] : null) == "dashboard")) ? ("active") : (""));
        echo "\">
                <a href=\"/dashboard\"> <i class=\"fa fa-user\"></i> Dashboard</a>
            </li>
            <li class=\"";
        // line 7
        echo ((((isset($context["page"]) ? $context["page"] : null) == "editProfile")) ? ("active") : (""));
        echo "\">
                <a href=\"/dashboard/profile_edit\"> <i class=\"fa fa-edit\"></i> Edit Profile</a>
            </li>
            <li class=\"";
        // line 10
        echo ((((isset($context["page"]) ? $context["page"] : null) == "resume")) ? ("active") : (""));
        echo "\">
                <a href=\"/dashboard/resume\"> <i class=\"fa fa-file-o\"></i>Resume </a>
            </li>
            <li class=\"";
        // line 13
        echo ((((isset($context["page"]) ? $context["page"] : null) == "jobs")) ? ("active") : (""));
        echo "\">
                <a href=\"/dashboard/jobs\"> <i class=\"fa  fa-list-ul\"></i> Active Jobs</a>
            </li>
            <li class=\"";
        // line 16
        echo ((((isset($context["page"]) ? $context["page"] : null) == "featuresJobs")) ? ("active") : (""));
        echo "\">
                <a href=\"/dashboard/featured\"> <i class=\"fa  fa-list-alt\"></i> Featured Jobs</a>
            </li>
            <li class=\"";
        // line 19
        echo ((((isset($context["page"]) ? $context["page"] : null) == "followers")) ? ("active") : (""));
        echo "\">
                <a href=\"/dashboard/followers\"> <i class=\"fa  fa-bookmark-o\"></i> Followers </a>
            </li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "employer_sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  48 => 16,  42 => 13,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"profile-nav\">
    <div class=\"panel\">
        <ul class=\"nav nav-pills nav-stacked\">
            <li class=\"{{ page=='dashboard'?'active' }}\">
                <a href=\"/dashboard\"> <i class=\"fa fa-user\"></i> Dashboard</a>
            </li>
            <li class=\"{{ page=='editProfile'?'active' }}\">
                <a href=\"/dashboard/profile_edit\"> <i class=\"fa fa-edit\"></i> Edit Profile</a>
            </li>
            <li class=\"{{ page=='resume'?'active' }}\">
                <a href=\"/dashboard/resume\"> <i class=\"fa fa-file-o\"></i>Resume </a>
            </li>
            <li class=\"{{ page=='jobs'?'active' }}\">
                <a href=\"/dashboard/jobs\"> <i class=\"fa  fa-list-ul\"></i> Active Jobs</a>
            </li>
            <li class=\"{{ page=='featuresJobs'?'active' }}\">
                <a href=\"/dashboard/featured\"> <i class=\"fa  fa-list-alt\"></i> Featured Jobs</a>
            </li>
            <li class=\"{{ page=='followers'?'active' }}\">
                <a href=\"/dashboard/followers\"> <i class=\"fa  fa-bookmark-o\"></i> Followers </a>
            </li>
        </ul>
    </div>
</div>", "employer_sidebar.twig", "/home/frescihp/public_html/getwork/application/views/employer_sidebar.twig");
    }
}
