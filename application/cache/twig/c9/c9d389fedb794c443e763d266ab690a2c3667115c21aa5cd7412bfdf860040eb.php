<?php

/* employer_navigation.twig */
class __TwigTemplate_a0163a8e054dbd27917672007140a628a7e0f562555feed2351ec20350343b2a extends Twig_Template
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
        echo "<div id=\"spinner\" class=\"cstm-spinner\">
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
                    <li><a href=\"javascript:void(0)\">Add a Course</a></li>
                    <li><a href=\"javascript:void(0)\">Find a Course</a></li>
                </ul>
            </li>
            <li><a href=\"javascript:void(0)\"> Employer <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                <ul class=\"drop-down-multilevel\">
                    <li><a href=\"javascript:void(0)\">Post a Job</a></li>
                    <li><a href=\"javascript:void(0)\">Find Resume</a></li>
                    <li><a href=\"javascript:void(0)\">Dashboard</a></li>
                </ul>
            </li>
            <li> <a href=\"javascript:void(0)\"> Contact <i class=\"fa fa-angle-down fa-indicator\"></i></a></li>
            <li class=\"no-bg\"><a href=\"/dashboard/postjob\" class=\"p-job\"><i class=\"fa fa-plus-square\"></i> Post a Job</a></li>
            <li class=\"profile-pic hoverTrigger\">
                <a href=\"javascript:void(0)\"> <img src=\"../../images/admin.jpg\" alt=\"user-img\" class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()), "html", null, true);
        echo "</span><i class=\"fa fa-angle-down fa-indicator\"></i> <div class=\"mobileTriggerButton\"></div></a>
                <ul class=\"drop-down-multilevel left-side effect-fade\" style=\"transition: all 400ms ease 0s;\">
                    <li><a href=\"/dashboard\"><i class=\"fa fa-user\"></i> My Profile</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-mail-forward\"></i> Inbox</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-gear\"></i> Account Setting</a></li>
                    <li><a href=\"/logout\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </section>
</nav>
<div class=\"clearfix\"></div>";
    }

    public function getTemplateName()
    {
        return "employer_navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 29,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"spinner\" class=\"cstm-spinner\">
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
                    <li><a href=\"javascript:void(0)\">Add a Course</a></li>
                    <li><a href=\"javascript:void(0)\">Find a Course</a></li>
                </ul>
            </li>
            <li><a href=\"javascript:void(0)\"> Employer <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                <ul class=\"drop-down-multilevel\">
                    <li><a href=\"javascript:void(0)\">Post a Job</a></li>
                    <li><a href=\"javascript:void(0)\">Find Resume</a></li>
                    <li><a href=\"javascript:void(0)\">Dashboard</a></li>
                </ul>
            </li>
            <li> <a href=\"javascript:void(0)\"> Contact <i class=\"fa fa-angle-down fa-indicator\"></i></a></li>
            <li class=\"no-bg\"><a href=\"/dashboard/postjob\" class=\"p-job\"><i class=\"fa fa-plus-square\"></i> Post a Job</a></li>
            <li class=\"profile-pic hoverTrigger\">
                <a href=\"javascript:void(0)\"> <img src=\"../../images/admin.jpg\" alt=\"user-img\" class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">{{user.first_name}} {{user.last_name}}</span><i class=\"fa fa-angle-down fa-indicator\"></i> <div class=\"mobileTriggerButton\"></div></a>
                <ul class=\"drop-down-multilevel left-side effect-fade\" style=\"transition: all 400ms ease 0s;\">
                    <li><a href=\"/dashboard\"><i class=\"fa fa-user\"></i> My Profile</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-mail-forward\"></i> Inbox</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-gear\"></i> Account Setting</a></li>
                    <li><a href=\"/logout\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </section>
</nav>
<div class=\"clearfix\"></div>", "employer_navigation.twig", "/home/frescihp/public_html/getwork/application/views/employer_navigation.twig");
    }
}
