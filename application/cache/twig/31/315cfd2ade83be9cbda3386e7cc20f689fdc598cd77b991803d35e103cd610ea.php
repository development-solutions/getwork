<?php

/* applicant_sidebar.twig */
class __TwigTemplate_eddf5ba22ec707572d470ce2229bee78a98784a1687cf2412b343da08593e642 extends Twig_Template
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
        echo ((((isset($context["page"]) ? $context["page"] : null) == "profile")) ? ("active") : (""));
        echo "\">
                <a href=\"/profile\"> <i class=\"fa fa-user\"></i>Profile</a>
            </li>
            <li class=\"";
        // line 7
        echo ((((isset($context["page"]) ? $context["page"] : null) == "edit_profile")) ? ("active") : (""));
        echo "\">
                <a href=\"/profile/edit_profile\"> <i class=\"fa fa-edit\"></i>Edit Profile</a>
            </li>
            <li class=\"";
        // line 10
        echo ((((isset($context["page"]) ? $context["page"] : null) == "inbox")) ? ("active") : (""));
        echo "\">
                <a href=\"/profile/inbox\"> <i class=\"fa fa-file-o\"></i>Inbox </a>
            </li>
            <li class=\"";
        // line 13
        echo ((((isset($context["page"]) ? $context["page"] : null) == "jobs")) ? ("active") : (""));
        echo "\">
                <a href=\"/profile/jobs\"> <i class=\"fa  fa-list-ul\"></i> Jobs Applied</a>
            </li>
            <li class=\"";
        // line 16
        echo ((((isset($context["page"]) ? $context["page"] : null) == "followed")) ? ("active") : (""));
        echo "\">
                <a href=\"/profile/followed\"> <i class=\"fa  fa-bookmark-o\"></i> Followed Companies </a>
            </li>
            <li class=\"";
        // line 19
        echo ((((isset($context["page"]) ? $context["page"] : null) == "courses")) ? ("active") : (""));
        echo "\">
                <a href=\"/profile/courses\"> <i class=\"fa  fa-bookmark-o\"></i> My Courses </a>
            </li>
            <li class=\"";
        // line 22
        echo ((((isset($context["page"]) ? $context["page"] : null) == "setting")) ? ("active") : (""));
        echo "\">
                <a href=\"/profile/setting\"> <i class=\"fa  fa-bookmark-o\"></i> Account Settings </a>
            </li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "applicant_sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  54 => 19,  48 => 16,  42 => 13,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
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
            <li class=\"{{ page=='profile'?'active' }}\">
                <a href=\"/profile\"> <i class=\"fa fa-user\"></i>Profile</a>
            </li>
            <li class=\"{{ page=='edit_profile'?'active' }}\">
                <a href=\"/profile/edit_profile\"> <i class=\"fa fa-edit\"></i>Edit Profile</a>
            </li>
            <li class=\"{{ page=='inbox'?'active' }}\">
                <a href=\"/profile/inbox\"> <i class=\"fa fa-file-o\"></i>Inbox </a>
            </li>
            <li class=\"{{ page=='jobs'?'active' }}\">
                <a href=\"/profile/jobs\"> <i class=\"fa  fa-list-ul\"></i> Jobs Applied</a>
            </li>
            <li class=\"{{ page=='followed'?'active' }}\">
                <a href=\"/profile/followed\"> <i class=\"fa  fa-bookmark-o\"></i> Followed Companies </a>
            </li>
            <li class=\"{{ page=='courses'?'active' }}\">
                <a href=\"/profile/courses\"> <i class=\"fa  fa-bookmark-o\"></i> My Courses </a>
            </li>
            <li class=\"{{ page=='setting'?'active' }}\">
                <a href=\"/profile/setting\"> <i class=\"fa  fa-bookmark-o\"></i> Account Settings </a>
            </li>
        </ul>
    </div>
</div>", "applicant_sidebar.twig", "/home/frescihp/public_html/getwork/application/views/applicant_sidebar.twig");
    }
}
