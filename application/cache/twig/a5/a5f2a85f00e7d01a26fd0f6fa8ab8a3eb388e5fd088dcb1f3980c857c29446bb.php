<?php

/* admin/admin_navigation.twig */
class __TwigTemplate_8d5f28e2fa7a8efba77b23a58d7664c8bbafa1ef3b4016da43ffc35d2aa58b6c extends Twig_Template
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
<div class=\"cstm-loader\">
    <div class=\"spinner-img\"> <img alt=\"Opportunities Preloader\" src=\"../../images/loader.gif\" />
    </div>
</div>
<nav id=\"menu-1\" class=\"mega-menu fa-change-black\" data-color=\"\"> 
    <section class=\"menu-list-items\"> 
        <ul class=\"menu-logo\">
            <li> <a href=\"/\"> <img src=\"../../images/logo.png\" alt=\"logo\" class=\"img-responsive\"> </a> </li>
        </ul>
        <ul class=\"menu-links pull-right\">
            <li class=\"profile-pic hoverTrigger\">
\t\t\t    <a href=\"javascript:void(0)\"> <img src=\"/uploads/";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()), "html", null, true);
        echo "</span><i class=\"fa fa-angle-down fa-indicator\"></i> <div class=\"mobileTriggerButton\"></div></a>
\t\t\t    <ul class=\"drop-down-multilevel left-side effect-fade\" style=\"transition: all 400ms ease 0s;\">
\t\t\t        <li><a href=\"/admin\"><i class=\"fa fa-user\"></i> Dashboard</a></li>
\t\t\t        <li><a href=\"/admin\"><i class=\"fa fa-gear\"></i> Account Setting</a></li>
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
        return "admin/admin_navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  19 => 1,);
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
<div class=\"cstm-loader\">
    <div class=\"spinner-img\"> <img alt=\"Opportunities Preloader\" src=\"../../images/loader.gif\" />
    </div>
</div>
<nav id=\"menu-1\" class=\"mega-menu fa-change-black\" data-color=\"\"> 
    <section class=\"menu-list-items\"> 
        <ul class=\"menu-logo\">
            <li> <a href=\"/\"> <img src=\"../../images/logo.png\" alt=\"logo\" class=\"img-responsive\"> </a> </li>
        </ul>
        <ul class=\"menu-links pull-right\">
            <li class=\"profile-pic hoverTrigger\">
\t\t\t    <a href=\"javascript:void(0)\"> <img src=\"/uploads/{{ user.profile_image|default('profile.jpg') }}\" alt=\"user-img\" class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">{{user.first_name}} {{user.last_name}}</span><i class=\"fa fa-angle-down fa-indicator\"></i> <div class=\"mobileTriggerButton\"></div></a>
\t\t\t    <ul class=\"drop-down-multilevel left-side effect-fade\" style=\"transition: all 400ms ease 0s;\">
\t\t\t        <li><a href=\"/admin\"><i class=\"fa fa-user\"></i> Dashboard</a></li>
\t\t\t        <li><a href=\"/admin\"><i class=\"fa fa-gear\"></i> Account Setting</a></li>
\t\t\t        <li><a href=\"/logout\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
\t\t\t    </ul>
\t\t\t</li>
        </ul>
    </section>
</nav>
<div class=\"clearfix\"></div>", "admin/admin_navigation.twig", "/home/frescihp/public_html/getwork/application/views/admin/admin_navigation.twig");
    }
}
