<?php

/* applicant_sidebar.twig */
class __TwigTemplate_4f7f7bfe33680d71b6f65e1b4290188e7d91b4982e1595e7ae7b8aa5e2dd0a4e extends Twig_Template
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
        if (((isset($context["page"]) ? $context["page"] : null) != "profile")) {
            // line 3
            echo "        <div class=\"profile-card\">
            ";
            // line 7
            echo "            <div class=\"user-image\">
                <img src=\"/uploads/";
            // line 8
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
            echo "\" class=\"img-responsive img-circle\" alt=\"Construction management jobs\">
            </div>
            <div class=\"card-body\">
                <h3>";
            // line 11
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array())), "html", null, true);
            echo "</h3>
                <span class=\"title\">";
            // line 12
            echo "</span>
            </div>
            <ul class=\"social-network social-circle onwhite\">
                <li><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "facebook_url", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "twitter_url", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "linkedin_url", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                <li><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "googleplus_url", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
            </ul>
        </div>
    ";
        }
        // line 22
        echo "    <div class=\"profile-nav\">
        <div class=\"panel\">
            <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"";
        // line 25
        echo ((((isset($context["page"]) ? $context["page"] : null) == "profile")) ? ("active") : (""));
        echo "\">
                    <a href=\"/profile\"> <i class=\"fa fa-user\"></i> Dashboard</a>
                </li>
                <li class=\"";
        // line 28
        echo ((((isset($context["page"]) ? $context["page"] : null) == "edit_profile")) ? ("active") : (""));
        echo "\">
                    <a href=\"/profile/edit_profile\"> <i class=\"fa fa-edit\"></i>Edit Profile</a>
                </li>
                <li class=\"";
        // line 31
        echo ((((isset($context["page"]) ? $context["page"] : null) == "inbox")) ? ("active") : (""));
        echo "\">
                    <a href=\"/profile/inbox\"> <i class=\"fa fa-file-o\"></i>Inbox <span class=\"badge\">new ";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("unreadmsg", $context)) ? (_twig_default_filter((isset($context["unreadmsg"]) ? $context["unreadmsg"] : null), 0)) : (0)), "html", null, true);
        echo "</span></a>
                </li>
                <li class=\"";
        // line 34
        echo ((((isset($context["page"]) ? $context["page"] : null) == "jobs")) ? ("active") : (""));
        echo "\">
                    <a href=\"/profile/jobs\"> <i class=\"fa  fa-list-ul\"></i> Jobs Applied</a>
                </li>
                <li class=\"";
        // line 37
        echo ((((isset($context["page"]) ? $context["page"] : null) == "followed")) ? ("active") : (""));
        echo "\">
                    <a href=\"/profile/followed\"> <i class=\"fa  fa-bookmark-o\"></i> Followed Companies </a>
                </li>
                <li class=\"";
        // line 40
        echo ((((isset($context["page"]) ? $context["page"] : null) == "bookmarked")) ? ("active") : (""));
        echo "\">
                    <a href=\"/profile/bookmarked\"> <i class=\"fa  fa-bookmark-o\"></i> Bookmarked </a>
                </li>
                <li class=\"";
        // line 43
        echo ((((isset($context["page"]) ? $context["page"] : null) == "courses")) ? ("active") : (""));
        echo "\">
                    <a href=\"/profile/courses\"> <i class=\"fa  fa-bookmark-o\"></i> My Courses </a>
                </li>
                <li class=\"";
        // line 46
        echo ((((isset($context["page"]) ? $context["page"] : null) == "settings")) ? ("active") : (""));
        echo "\">
                    <a href=\"/profile/settings\"> <i class=\"fa  fa-bookmark-o\"></i> Account Settings </a>
                </li>
            </ul>
        </div>
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
        return array (  116 => 46,  110 => 43,  104 => 40,  98 => 37,  92 => 34,  87 => 32,  83 => 31,  77 => 28,  71 => 25,  66 => 22,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  42 => 12,  36 => 11,  30 => 8,  27 => 7,  24 => 3,  22 => 2,  19 => 1,);
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
    {% if page != 'profile' %}
        <div class=\"profile-card\">
            {# <div class=\"banner\">
                <img src=\"../../images/building.jpg\" alt=\"jobs in london england\" class=\"img-responsive\">
            </div> #}
            <div class=\"user-image\">
                <img src=\"/uploads/{{ user.profile_image|default('profile.jpg') }}\" class=\"img-responsive img-circle\" alt=\"Construction management jobs\">
            </div>
            <div class=\"card-body\">
                <h3>{{user.first_name|capitalize}} {{user.last_name|capitalize}}</h3>
                <span class=\"title\">{# A web Designer #}</span>
            </div>
            <ul class=\"social-network social-circle onwhite\">
                <li><a href=\"{{ user.facebook_url }}\" target=\"_blank\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"{{ user.twitter_url }}\" target=\"_blank\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"{{ user.linkedin_url }}\" target=\"_blank\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                <li><a href=\"{{ user.googleplus_url }}\" target=\"_blank\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
            </ul>
        </div>
    {% endif %}
    <div class=\"profile-nav\">
        <div class=\"panel\">
            <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"{{ page=='profile'?'active' }}\">
                    <a href=\"/profile\"> <i class=\"fa fa-user\"></i> Dashboard</a>
                </li>
                <li class=\"{{ page=='edit_profile'?'active' }}\">
                    <a href=\"/profile/edit_profile\"> <i class=\"fa fa-edit\"></i>Edit Profile</a>
                </li>
                <li class=\"{{ page=='inbox'?'active' }}\">
                    <a href=\"/profile/inbox\"> <i class=\"fa fa-file-o\"></i>Inbox <span class=\"badge\">new {{ unreadmsg|default(0) }}</span></a>
                </li>
                <li class=\"{{ page=='jobs'?'active' }}\">
                    <a href=\"/profile/jobs\"> <i class=\"fa  fa-list-ul\"></i> Jobs Applied</a>
                </li>
                <li class=\"{{ page=='followed'?'active' }}\">
                    <a href=\"/profile/followed\"> <i class=\"fa  fa-bookmark-o\"></i> Followed Companies </a>
                </li>
                <li class=\"{{ page=='bookmarked'?'active' }}\">
                    <a href=\"/profile/bookmarked\"> <i class=\"fa  fa-bookmark-o\"></i> Bookmarked </a>
                </li>
                <li class=\"{{ page=='courses'?'active' }}\">
                    <a href=\"/profile/courses\"> <i class=\"fa  fa-bookmark-o\"></i> My Courses </a>
                </li>
                <li class=\"{{ page=='settings'?'active' }}\">
                    <a href=\"/profile/settings\"> <i class=\"fa  fa-bookmark-o\"></i> Account Settings </a>
                </li>
            </ul>
        </div>
    </div>
</div>", "applicant_sidebar.twig", "/home/getwork/public_html/application/views/applicant_sidebar.twig");
    }
}
