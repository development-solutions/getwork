<?php

/* employer_sidebar.twig */
class __TwigTemplate_83ee2cdf4177b00ee68f8d034c9466038a009e529a25f894111c24f94ee57560 extends Twig_Template
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
    ";
        // line 2
        if (((isset($context["page"]) ? $context["page"] : null) != "dashboard")) {
            // line 3
            echo "        <div class=\"panel\">
            <div class=\"dashboard-logo-sidebar\">
                <img class=\"img-responsive center-block\" src=\"/uploads/";
            // line 5
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
            echo "\" alt=\"Image Railway jobs\">
            </div>
            <div class=\"text-center dashboard-logo-sidebar-title\">
                <h4>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
            echo "</h4>
            </div>
        </div>
    ";
        }
        // line 12
        echo "    <div class=\"profile-nav\">
        <div class=\"panel\">
            <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"";
        // line 15
        echo ((((isset($context["page"]) ? $context["page"] : null) == "dashboard")) ? ("active") : (""));
        echo "\">
                    <a href=\"/dashboard\"> <i class=\"fa fa-user\"></i> Dashboard</a>
                </li>
                <li class=\"";
        // line 18
        echo ((((isset($context["page"]) ? $context["page"] : null) == "editProfile")) ? ("active") : (""));
        echo "\">
                    <a href=\"/dashboard/profile_edit\"> <i class=\"fa fa-edit\"></i> Edit Profile</a>
                </li>
                <li class=\"";
        // line 21
        echo ((((isset($context["page"]) ? $context["page"] : null) == "resume")) ? ("active") : (""));
        echo "\">
                    <a href=\"/dashboard/resume\"> <i class=\"fa fa-file-o\"></i>Shortlisted </a>
                </li>
                <li class=\"";
        // line 24
        echo ((((isset($context["page"]) ? $context["page"] : null) == "inbox")) ? ("active") : (""));
        echo "\">
                    <a href=\"/dashboard/inbox\"> <i class=\"fa fa-mail-forward\"></i>Inbox <span class=\"badge\">new ";
        // line 25
        echo twig_escape_filter($this->env, ((array_key_exists("unreadmsg", $context)) ? (_twig_default_filter((isset($context["unreadmsg"]) ? $context["unreadmsg"] : null), 0)) : (0)), "html", null, true);
        echo "</span></a>
                </li>
                <li class=\"";
        // line 27
        echo ((((isset($context["page"]) ? $context["page"] : null) == "jobs")) ? ("active") : (""));
        echo "\">
                    <a href=\"/dashboard/jobs\"> <i class=\"fa  fa-list-ul\"></i> Active Jobs</a>
                </li>
                <li class=\"";
        // line 30
        echo ((((isset($context["page"]) ? $context["page"] : null) == "courses")) ? ("active") : (""));
        echo "\">
                    <a href=\"/dashboard/courses\"> <i class=\"fa  fa-list-ul\"></i> Courses</a>
                </li>
                <li class=\"";
        // line 33
        echo ((((isset($context["page"]) ? $context["page"] : null) == "postjob")) ? ("active") : (""));
        echo "\">
                    <a href=\"/dashboard/postjob\"> <i class=\"fa fa-plus-square\"></i> Post Job</a>
                </li>
                <li class=\"";
        // line 36
        echo ((((isset($context["page"]) ? $context["page"] : null) == "addcourse")) ? ("active") : (""));
        echo "\">
                    <a href=\"/dashboard/addcourse\"> <i class=\"fa fa-plus-square\"></i> Add Course</a>
                </li>
                ";
        // line 42
        echo "                <li class=\"";
        echo ((((isset($context["page"]) ? $context["page"] : null) == "followers")) ? ("active") : (""));
        echo "\">
                    <a href=\"/dashboard/followers\"> <i class=\"fa  fa-bookmark-o\"></i> Followers </a>
                </li>
                <li class=\"";
        // line 45
        echo ((((isset($context["page"]) ? $context["page"] : null) == "settings")) ? ("active") : (""));
        echo "\">
                    <a href=\"/dashboard/settings\"> <i class=\"fa fa-gear\"></i> Account Setting </a>
                </li>
            </ul>
        </div>
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
        return array (  104 => 45,  97 => 42,  91 => 36,  85 => 33,  79 => 30,  73 => 27,  68 => 25,  64 => 24,  58 => 21,  52 => 18,  46 => 15,  41 => 12,  34 => 8,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
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
    {% if page != 'dashboard' %}
        <div class=\"panel\">
            <div class=\"dashboard-logo-sidebar\">
                <img class=\"img-responsive center-block\" src=\"/uploads/{{ user.logo|default('logo.jpg') }}\" alt=\"Image Railway jobs\">
            </div>
            <div class=\"text-center dashboard-logo-sidebar-title\">
                <h4>{{ user.company_name }}</h4>
            </div>
        </div>
    {% endif %}
    <div class=\"profile-nav\">
        <div class=\"panel\">
            <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"{{ page=='dashboard'?'active' }}\">
                    <a href=\"/dashboard\"> <i class=\"fa fa-user\"></i> Dashboard</a>
                </li>
                <li class=\"{{ page=='editProfile'?'active' }}\">
                    <a href=\"/dashboard/profile_edit\"> <i class=\"fa fa-edit\"></i> Edit Profile</a>
                </li>
                <li class=\"{{ page=='resume'?'active' }}\">
                    <a href=\"/dashboard/resume\"> <i class=\"fa fa-file-o\"></i>Shortlisted </a>
                </li>
                <li class=\"{{ page=='inbox'?'active' }}\">
                    <a href=\"/dashboard/inbox\"> <i class=\"fa fa-mail-forward\"></i>Inbox <span class=\"badge\">new {{ unreadmsg|default(0) }}</span></a>
                </li>
                <li class=\"{{ page=='jobs'?'active' }}\">
                    <a href=\"/dashboard/jobs\"> <i class=\"fa  fa-list-ul\"></i> Active Jobs</a>
                </li>
                <li class=\"{{ page=='courses'?'active' }}\">
                    <a href=\"/dashboard/courses\"> <i class=\"fa  fa-list-ul\"></i> Courses</a>
                </li>
                <li class=\"{{ page=='postjob'?'active' }}\">
                    <a href=\"/dashboard/postjob\"> <i class=\"fa fa-plus-square\"></i> Post Job</a>
                </li>
                <li class=\"{{ page=='addcourse'?'active' }}\">
                    <a href=\"/dashboard/addcourse\"> <i class=\"fa fa-plus-square\"></i> Add Course</a>
                </li>
                {# <li class=\"{{ page=='featuresJobs'?'active' }}\">
                    <a href=\"/dashboard/featured\"> <i class=\"fa  fa-list-alt\"></i> Featured Jobs</a>
                </li> #}
                <li class=\"{{ page=='followers'?'active' }}\">
                    <a href=\"/dashboard/followers\"> <i class=\"fa  fa-bookmark-o\"></i> Followers </a>
                </li>
                <li class=\"{{ page=='settings'?'active' }}\">
                    <a href=\"/dashboard/settings\"> <i class=\"fa fa-gear\"></i> Account Setting </a>
                </li>
            </ul>
        </div>
    </div>
</div>", "employer_sidebar.twig", "/home/getwork/public_html/application/views/employer_sidebar.twig");
    }
}
