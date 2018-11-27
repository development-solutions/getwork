<?php

/* applicant_navigation.twig */
class __TwigTemplate_2f9137ff619fe972d7bda877cddb1d44a1826ec4901acb928683cac6e8315171 extends Twig_Template
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
        echo " <div id=\"spinner\">
    <div class=\"spinner-img\"> <img alt=\"Opportunities Preloader\" src=\"../../images/loader.gif\" />
        <h2>Please Wait.....</h2>
    </div>
</div>
<nav id=\"menu-1\" class=\"mega-menu fa-change-black\" data-color=\"\"> 
    <section class=\"menu-list-items\"> 
        <ul class=\"menu-logo\">
            <li> <a href=\"/\"> <img src=\"../../images/logo.png\" alt=\"logo\" class=\"img-responsive\"> </a> </li>
        </ul>
        <ul class=\"menu-links pull-right\">
            <li> <a href=\"/\"> Home <i class=\"fa fa-angle-down fa-indicator\"></i></a></li>
            <li><a href=\"javascript:void(0)\"> Course <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                <ul class=\"drop-down-multilevel\">
                    <li><a href=\"javascript:void(0)\">My Courses</a></li>
                    <li><a href=\"javascript:void(0)\">Find a Course</a></li>
                </ul>
            </li>
            <li><a href=\"javascript:void(0)\"> Jobs <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                <ul class=\"drop-down-multilevel\">
                    <li><a href=\"/home/jobs\">Find a job</a></li>
                    <li><a href=\"javascript:void(0)\">Job categories</a></li>
                </ul>
            </li>
            <li><a href=\"javascript:void(0)\"> Candidate <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                <ul class=\"drop-down-multilevel\">
                    <li><a href=\"/profile/resume\">Submit Resume</a></li>
                    <li><a href=\"/profile\">Candidate Dashboard</a></li>
                </ul>
            </li>
            <li> <a href=\"javascript:void(0)\"> Contact <i class=\"fa fa-angle-down fa-indicator\"></i></a></li>
            <li class=\"profile-pic hoverTrigger\">
\t\t\t    <a href=\"javascript:void(0)\"> <img src=\"../../images/admin.jpg\" alt=\"user-img\" class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()), "html", null, true);
        echo "</span><i class=\"fa fa-angle-down fa-indicator\"></i> <div class=\"mobileTriggerButton\"></div></a>
\t\t\t    <ul class=\"drop-down-multilevel left-side effect-fade\" style=\"transition: all 400ms ease 0s;\">
\t\t\t        <li><a href=\"/profile\"><i class=\"fa fa-user\"></i> My Profile</a></li>
\t\t\t        <li><a href=\"#\"><i class=\"fa fa-mail-forward\"></i> Inbox</a></li>
\t\t\t        <li><a href=\"#\"><i class=\"fa fa-gear\"></i> Account Setting</a></li>
\t\t\t        <li><a href=\"/logout\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
\t\t\t    </ul>
\t\t\t</li>
        </ul>
    </section>
</nav>
<div class=\"clearfix\"></div>";
    }

    public function getTemplateName()
    {
        return "applicant_navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 33,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <div id=\"spinner\">
    <div class=\"spinner-img\"> <img alt=\"Opportunities Preloader\" src=\"../../images/loader.gif\" />
        <h2>Please Wait.....</h2>
    </div>
</div>
<nav id=\"menu-1\" class=\"mega-menu fa-change-black\" data-color=\"\"> 
    <section class=\"menu-list-items\"> 
        <ul class=\"menu-logo\">
            <li> <a href=\"/\"> <img src=\"../../images/logo.png\" alt=\"logo\" class=\"img-responsive\"> </a> </li>
        </ul>
        <ul class=\"menu-links pull-right\">
            <li> <a href=\"/\"> Home <i class=\"fa fa-angle-down fa-indicator\"></i></a></li>
            <li><a href=\"javascript:void(0)\"> Course <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                <ul class=\"drop-down-multilevel\">
                    <li><a href=\"javascript:void(0)\">My Courses</a></li>
                    <li><a href=\"javascript:void(0)\">Find a Course</a></li>
                </ul>
            </li>
            <li><a href=\"javascript:void(0)\"> Jobs <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                <ul class=\"drop-down-multilevel\">
                    <li><a href=\"/home/jobs\">Find a job</a></li>
                    <li><a href=\"javascript:void(0)\">Job categories</a></li>
                </ul>
            </li>
            <li><a href=\"javascript:void(0)\"> Candidate <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                <ul class=\"drop-down-multilevel\">
                    <li><a href=\"/profile/resume\">Submit Resume</a></li>
                    <li><a href=\"/profile\">Candidate Dashboard</a></li>
                </ul>
            </li>
            <li> <a href=\"javascript:void(0)\"> Contact <i class=\"fa fa-angle-down fa-indicator\"></i></a></li>
            <li class=\"profile-pic hoverTrigger\">
\t\t\t    <a href=\"javascript:void(0)\"> <img src=\"../../images/admin.jpg\" alt=\"user-img\" class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">{{user.first_name}} {{user.last_name}}</span><i class=\"fa fa-angle-down fa-indicator\"></i> <div class=\"mobileTriggerButton\"></div></a>
\t\t\t    <ul class=\"drop-down-multilevel left-side effect-fade\" style=\"transition: all 400ms ease 0s;\">
\t\t\t        <li><a href=\"/profile\"><i class=\"fa fa-user\"></i> My Profile</a></li>
\t\t\t        <li><a href=\"#\"><i class=\"fa fa-mail-forward\"></i> Inbox</a></li>
\t\t\t        <li><a href=\"#\"><i class=\"fa fa-gear\"></i> Account Setting</a></li>
\t\t\t        <li><a href=\"/logout\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
\t\t\t    </ul>
\t\t\t</li>
        </ul>
    </section>
</nav>
<div class=\"clearfix\"></div>", "applicant_navigation.twig", "/home/frescihp/public_html/getwork/application/views/applicant_navigation.twig");
    }
}
