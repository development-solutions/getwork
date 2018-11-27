<?php

/* applicant_followed.twig */
class __TwigTemplate_b6615a62074cc37827757b53d3fbc3e023d7c3e7497444e8338cc1c91c4a8f29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "applicant_followed.twig", 1);
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
        $this->loadTemplate("applicant_navigation.twig", "applicant_followed.twig", 4)->display($context);
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
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <div class=\"profile-card\">
                        <div class=\"banner\">
                            <img src=\"../../images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"../../images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                        </div>
                        <div class=\"card-body\">
                            <h3>";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array())), "html", null, true);
        echo "</h3>
                            <span class=\"title\">A web Designer</span>
                        </div>
                        <ul class=\"social-network social-circle onwhite\">
                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                    ";
        // line 32
        $this->loadTemplate("applicant_sidebar.twig", "applicant_followed.twig", 32)->display($context);
        // line 33
        echo "                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">My Followings</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"company-list\">
                            <div class=\"company-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"\">
                                        <div class=\"company-list-img\"><img src=\"../../images/company/s5.png\" alt=\"\" class=\"img-responsive\"></div>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"company-list-name\">
                                        <a href=\"\"><h5>Confidential Agency Pvt. Ltd.</h5> </a>
                                        <p>Backbone Street, Bolly Street, Vatnaam</p>
                                    </div>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-left\">Totle Jobs (449)</span>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                </div>
                            </div>
                            <div class=\"company-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"\">
                                        <div class=\"company-list-img\"><img src=\"../../images/company/s5.png\" alt=\"\" class=\"img-responsive\"></div>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"company-list-name\">
                                        <a href=\"\"><h5>Confidential Agency Pvt. Ltd.</h5> </a>
                                        <p>Backbone Street, Bolly Street, Vatnaam</p>
                                    </div>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-left\">Totle Jobs (449)</span>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                </div>
                            </div>
                            <div class=\"company-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"\">
                                        <div class=\"company-list-img\"><img src=\"../../images/company/s5.png\" alt=\"\" class=\"img-responsive\"></div>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"company-list-name\">
                                        <a href=\"\"><h5>Confidential Agency Pvt. Ltd.</h5> </a>
                                        <p>Backbone Street, Bolly Street, Vatnaam</p>
                                    </div>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-left\">Totle Jobs (449)</span>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                </div>
                            </div>
                            <div class=\"company-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"\">
                                        <div class=\"company-list-img\"><img src=\"../../images/company/s5.png\" alt=\"\" class=\"img-responsive\"></div>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"company-list-name\">
                                        <a href=\"\"><h5>Confidential Agency Pvt. Ltd.</h5> </a>
                                        <p>Backbone Street, Bolly Street, Vatnaam</p>
                                    </div>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-left\">Totle Jobs (449)</span>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                </div>
                            </div>
                            <div class=\"company-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"\">
                                        <div class=\"company-list-img\"><img src=\"../../images/company/s5.png\" alt=\"\" class=\"img-responsive\"></div>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"company-list-name\">
                                        <a href=\"\"><h5>Confidential Agency Pvt. Ltd.</h5> </a>
                                        <p>Backbone Street, Bolly Street, Vatnaam</p>
                                    </div>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-left\">Totle Jobs (449)</span>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <ul class=\"pagination\">
                                <li>
                                    <a href=\"#\" aria-label=\"Previous\"> <span aria-hidden=\"true\">Previous</span> </a>
                                </li>
                                <li class=\"active\"><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li>
                                    <a href=\"#\" aria-label=\"Next\"> <span aria-hidden=\"true\">Next</span> </a>
                                </li>
                            </ul>
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
        return "applicant_followed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 33,  71 => 32,  56 => 22,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
    {% include 'applicant_navigation.twig' %}
{% endblock %}

{% block content %}

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <div class=\"profile-card\">
                        <div class=\"banner\">
                            <img src=\"../../images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"../../images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
                        </div>
                        <div class=\"card-body\">
                            <h3>{{user.first_name|capitalize}} {{user.last_name|capitalize}}</h3>
                            <span class=\"title\">A web Designer</span>
                        </div>
                        <ul class=\"social-network social-circle onwhite\">
                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                    {% include 'applicant_sidebar.twig' %}
                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">My Followings</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"company-list\">
                            <div class=\"company-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"\">
                                        <div class=\"company-list-img\"><img src=\"../../images/company/s5.png\" alt=\"\" class=\"img-responsive\"></div>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"company-list-name\">
                                        <a href=\"\"><h5>Confidential Agency Pvt. Ltd.</h5> </a>
                                        <p>Backbone Street, Bolly Street, Vatnaam</p>
                                    </div>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-left\">Totle Jobs (449)</span>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                </div>
                            </div>
                            <div class=\"company-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"\">
                                        <div class=\"company-list-img\"><img src=\"../../images/company/s5.png\" alt=\"\" class=\"img-responsive\"></div>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"company-list-name\">
                                        <a href=\"\"><h5>Confidential Agency Pvt. Ltd.</h5> </a>
                                        <p>Backbone Street, Bolly Street, Vatnaam</p>
                                    </div>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-left\">Totle Jobs (449)</span>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                </div>
                            </div>
                            <div class=\"company-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"\">
                                        <div class=\"company-list-img\"><img src=\"../../images/company/s5.png\" alt=\"\" class=\"img-responsive\"></div>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"company-list-name\">
                                        <a href=\"\"><h5>Confidential Agency Pvt. Ltd.</h5> </a>
                                        <p>Backbone Street, Bolly Street, Vatnaam</p>
                                    </div>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-left\">Totle Jobs (449)</span>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                </div>
                            </div>
                            <div class=\"company-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"\">
                                        <div class=\"company-list-img\"><img src=\"../../images/company/s5.png\" alt=\"\" class=\"img-responsive\"></div>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"company-list-name\">
                                        <a href=\"\"><h5>Confidential Agency Pvt. Ltd.</h5> </a>
                                        <p>Backbone Street, Bolly Street, Vatnaam</p>
                                    </div>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-left\">Totle Jobs (449)</span>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                </div>
                            </div>
                            <div class=\"company-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"\">
                                        <div class=\"company-list-img\"><img src=\"../../images/company/s5.png\" alt=\"\" class=\"img-responsive\"></div>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"company-list-name\">
                                        <a href=\"\"><h5>Confidential Agency Pvt. Ltd.</h5> </a>
                                        <p>Backbone Street, Bolly Street, Vatnaam</p>
                                    </div>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-left\">Totle Jobs (449)</span>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-6 nopadding\">
                                    <span class=\"pull-right\">New Jobs <span class=\"badge\">(10)</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <ul class=\"pagination\">
                                <li>
                                    <a href=\"#\" aria-label=\"Previous\"> <span aria-hidden=\"true\">Previous</span> </a>
                                </li>
                                <li class=\"active\"><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li>
                                    <a href=\"#\" aria-label=\"Next\"> <span aria-hidden=\"true\">Next</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "applicant_followed.twig", "/home/frescihp/public_html/getwork/application/views/applicant_followed.twig");
    }
}
