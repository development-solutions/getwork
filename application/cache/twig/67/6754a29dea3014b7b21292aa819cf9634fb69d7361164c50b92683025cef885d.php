<?php

/* employer_navigation.twig */
class __TwigTemplate_b80fb9118b516862d80957d595f55a66ad4559c4006642a7f471e086ca797f86 extends Twig_Template
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
<div class=\"cstm-loader\">
    <div class=\"spinner-img\"> <img alt=\"Opportunities Preloader\" src=\"../../images/loader.gif\" />
    </div>
</div>
<nav id=\"menu-1\" class=\"mega-menu fa-change-black\" data-color=\"\"> 
    <div class=\"container\">
        <section class=\"menu-list-items\"> 
            <ul class=\"menu-logo\">
                <li> <a href=\"/\"> <img src=\"../../images/getworklogo.png\" alt=\"logo\" class=\"img-responsive\"> </a> </li>
            </ul>
            <ul class=\"menu-links pull-right\">
                <li> <a href=\"/\"> Home </a></li>
                <li><a href=\"javascript:void(0)\"> Course <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                    <ul class=\"drop-down-multilevel\">
                        <li><a href=\"/home/courses\">Find Courses</a></li>
                        <li><a href=\"/dashboard/addcourse\">Add Course</a></li>                    
                    </ul>
                </li>
                <li><a href=\"javascript:void(0)\"> Jobs <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                    <ul class=\"drop-down-multilevel\">
                        <li><a href=\"/home/jobs\">Find jobs</a></li>
                        <li><a href=\"/home/categories\">Job categories</a></li>
                        <li><a href=\"/home/companies\">All companies</a></li>
                    </ul>
                </li>
                <li><a href=\"javascript:void(0)\"> Employer <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                    <ul class=\"drop-down-multilevel\">
                        <li><a href=\"/home/candidates\">Find CV</a></li>
                        <li><a href=\"/dashboard/postjob\">Post a Job</a></li>
                    </ul>
                </li>
                <li><a href=\"javascript:void(0)\"> Candidate <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                    <ul class=\"drop-down-multilevel\">
                        <li><a href=\"/home/candidates\">All Candidates</a></li>
                    </ul>
                </li>
                <li> <a href=\"/home/contactus\"> Contact </a></li>
                <li class=\"no-bg\"><a href=\"/dashboard/postjob\" class=\"p-job\"><i class=\"fa fa-plus-square\"></i> Post a Job</a></li>
                <li class=\"profile-pic hoverTrigger\">
                    <a href=\"javascript:void(0)\"> <img src=\"/uploads/";
        // line 45
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()), "html", null, true);
        echo "</span><i class=\"fa fa-angle-down fa-indicator\"></i> <div class=\"mobileTriggerButton\"></div></a>
                    <ul class=\"drop-down-multilevel left-side effect-fade\" style=\"transition: all 400ms ease 0s;\">
                        <li><a href=\"/dashboard\"><i class=\"fa fa-user\"></i> My Profile</a></li>
                        <li><a href=\"/dashboard/inbox\"><i class=\"fa fa-mail-forward\"></i> Inbox</a></li>
                        <li><a href=\"/dashboard/settings\"><i class=\"fa fa-gear\"></i> Account Setting</a></li>
                        <li><a href=\"/logout\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>
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
        return array (  65 => 45,  19 => 1,);
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
<div class=\"cstm-loader\">
    <div class=\"spinner-img\"> <img alt=\"Opportunities Preloader\" src=\"../../images/loader.gif\" />
    </div>
</div>
<nav id=\"menu-1\" class=\"mega-menu fa-change-black\" data-color=\"\"> 
    <div class=\"container\">
        <section class=\"menu-list-items\"> 
            <ul class=\"menu-logo\">
                <li> <a href=\"/\"> <img src=\"../../images/getworklogo.png\" alt=\"logo\" class=\"img-responsive\"> </a> </li>
            </ul>
            <ul class=\"menu-links pull-right\">
                <li> <a href=\"/\"> Home </a></li>
                <li><a href=\"javascript:void(0)\"> Course <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                    <ul class=\"drop-down-multilevel\">
                        <li><a href=\"/home/courses\">Find Courses</a></li>
                        <li><a href=\"/dashboard/addcourse\">Add Course</a></li>                    
                    </ul>
                </li>
                <li><a href=\"javascript:void(0)\"> Jobs <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                    <ul class=\"drop-down-multilevel\">
                        <li><a href=\"/home/jobs\">Find jobs</a></li>
                        <li><a href=\"/home/categories\">Job categories</a></li>
                        <li><a href=\"/home/companies\">All companies</a></li>
                    </ul>
                </li>
                <li><a href=\"javascript:void(0)\"> Employer <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                    <ul class=\"drop-down-multilevel\">
                        <li><a href=\"/home/candidates\">Find CV</a></li>
                        <li><a href=\"/dashboard/postjob\">Post a Job</a></li>
                    </ul>
                </li>
                <li><a href=\"javascript:void(0)\"> Candidate <i class=\"fa fa-angle-down fa-indicator\"></i></a> 
                    <ul class=\"drop-down-multilevel\">
                        <li><a href=\"/home/candidates\">All Candidates</a></li>
                    </ul>
                </li>
                <li> <a href=\"/home/contactus\"> Contact </a></li>
                <li class=\"no-bg\"><a href=\"/dashboard/postjob\" class=\"p-job\"><i class=\"fa fa-plus-square\"></i> Post a Job</a></li>
                <li class=\"profile-pic hoverTrigger\">
                    <a href=\"javascript:void(0)\"> <img src=\"/uploads/{{ user.logo|default('logo.jpg') }}\" alt=\"user-img\" class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">{{user.first_name}} {{user.last_name}}</span><i class=\"fa fa-angle-down fa-indicator\"></i> <div class=\"mobileTriggerButton\"></div></a>
                    <ul class=\"drop-down-multilevel left-side effect-fade\" style=\"transition: all 400ms ease 0s;\">
                        <li><a href=\"/dashboard\"><i class=\"fa fa-user\"></i> My Profile</a></li>
                        <li><a href=\"/dashboard/inbox\"><i class=\"fa fa-mail-forward\"></i> Inbox</a></li>
                        <li><a href=\"/dashboard/settings\"><i class=\"fa fa-gear\"></i> Account Setting</a></li>
                        <li><a href=\"/logout\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>
</nav>
<div class=\"clearfix\"></div>", "employer_navigation.twig", "/home/getwork/public_html/application/views/employer_navigation.twig");
    }
}
