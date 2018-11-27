<?php

/* employer_followers.twig */
class __TwigTemplate_9d81c106bdac627fe33e4a66edaaf741c680b474c4bdb978fd79aa8260b36664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "employer_followers.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
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
    public function block_navigation($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("employer_navigation.twig", "employer_followers.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"panel\">
                        <div class=\"dashboard-logo-sidebar\">
                            <img class=\"img-responsive center-block\" src=\"../../images/company/logo1.jpg\" alt=\"Image\">
                        </div>
                        <div class=\"text-center dashboard-logo-sidebar-title\">
                            <h4>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_name", array()), "html", null, true);
        echo "</h4>
                        </div>
                    </div>
                    ";
        // line 22
        $this->loadTemplate("employer_sidebar.twig", "employer_followers.twig", 22)->display($context);
        // line 23
        echo "                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"follower-section\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"\" id=\"followers\">
                                <ul class=\"list-group list-group-dividered list-group-full\">
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-online\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/1.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Willard Wood</a></div>
                                                <small>@heavybutterfly920</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-away\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/2.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Ronnie Ellis</a></div>
                                                <small>@kingronnie24</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-busy\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/3.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Gwendolyn Wheeler</a></div>
                                                <small>@perttygirl66</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-off\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/4.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Daniel Russell</a></div>
                                                <small>@danieltiger08</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-off\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/5.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Daniel Russell</a></div>
                                                <small>@danieltiger08</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"\" id=\"followers\">
                                <ul class=\"list-group list-group-dividered list-group-full\">
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-online\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/1.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Willard Wood</a></div>
                                                <small>@heavybutterfly920</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-away\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/2.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Ronnie Ellis</a></div>
                                                <small>@kingronnie24</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-busy\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/3.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Gwendolyn Wheeler</a></div>
                                                <small>@perttygirl66</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-off\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/4.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Daniel Russell</a></div>
                                                <small>@danieltiger08</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-off\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/5.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Daniel Russell</a></div>
                                                <small>@danieltiger08</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "employer_followers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  59 => 22,  53 => 19,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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

{% block navigation %}
    {% include 'employer_navigation.twig' %}
{% endblock %}

{% block content %}

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"panel\">
                        <div class=\"dashboard-logo-sidebar\">
                            <img class=\"img-responsive center-block\" src=\"../../images/company/logo1.jpg\" alt=\"Image\">
                        </div>
                        <div class=\"text-center dashboard-logo-sidebar-title\">
                            <h4>{{ user.company_name }}</h4>
                        </div>
                    </div>
                    {% include 'employer_sidebar.twig' %}
                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"follower-section\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"\" id=\"followers\">
                                <ul class=\"list-group list-group-dividered list-group-full\">
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-online\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/1.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Willard Wood</a></div>
                                                <small>@heavybutterfly920</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-away\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/2.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Ronnie Ellis</a></div>
                                                <small>@kingronnie24</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-busy\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/3.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Gwendolyn Wheeler</a></div>
                                                <small>@perttygirl66</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-off\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/4.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Daniel Russell</a></div>
                                                <small>@danieltiger08</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-off\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/5.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Daniel Russell</a></div>
                                                <small>@danieltiger08</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"\" id=\"followers\">
                                <ul class=\"list-group list-group-dividered list-group-full\">
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-online\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/1.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Willard Wood</a></div>
                                                <small>@heavybutterfly920</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-away\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/2.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Ronnie Ellis</a></div>
                                                <small>@kingronnie24</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-busy\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/3.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Gwendolyn Wheeler</a></div>
                                                <small>@perttygirl66</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-off\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/4.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Daniel Russell</a></div>
                                                <small>@danieltiger08</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"media\">
                                            <div class=\"media-left\">
                                                <a class=\"avatar avatar-off\" href=\"javascript:void(0)\">
                                                    <img src=\"images/users/5.jpg\" class=\"img-responsive\" alt=\"\">
                                                    <i></i>
                                                </a>
                                            </div>
                                            <div class=\"media-body\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" class=\"btn btn-default btn-sm\">Hire</button>
                                                </div>
                                                <div><a class=\"name\" href=\"javascript:void(0)\">Daniel Russell</a></div>
                                                <small>@danieltiger08</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "employer_followers.twig", "/home/frescihp/public_html/getwork/application/views/employer_followers.twig");
    }
}
