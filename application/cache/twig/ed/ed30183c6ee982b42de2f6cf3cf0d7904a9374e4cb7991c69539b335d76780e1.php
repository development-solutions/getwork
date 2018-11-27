<?php

/* appilcant_resume.twig */
class __TwigTemplate_6d41d92497c3495f5a57a11eda9f536de0a82e9d1e8eda714c38f9bfa24a1fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "appilcant_resume.twig", 1);
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
        $this->loadTemplate("applicant_navigation.twig", "appilcant_resume.twig", 4)->display($context);
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
                            <img src=\"../images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"../images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
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
        $this->loadTemplate("applicant_sidebar.twig", "appilcant_resume.twig", 32)->display($context);
        // line 33
        echo "                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">My Resume</p>
                        <a href=\"javascript:void(0)\"><span class=\"pull-right add-button btn-default\" data-toggle=\"modal\" data-target=\".add-resume-modal\"> Add New Resume</span></a>
                    </div>
                    <div class=\"resume-list\">
                    \t<div class=\"table-responsive\">
                            <table class=\"table  table-striped\">
                                <thead class=\"thead-inverse\">
                                    <tr>
                                        <th>Sr. #</th>
                                        <th>Resume Title</th>
                                        <th>Download</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>
                                            <h5>Software Engineering</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>
                                            <h5>Graphic Designing</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>
                                            <h5>Front end Developer</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>
                                            <h5>IT Specialist</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                </tbody>
                            </table>
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
        return "appilcant_resume.twig";
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
                            <img src=\"../images/building.jpg\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"user-image\">
                            <img src=\"../images/users/profile-avatar.jpg\" class=\"img-responsive img-circle\" alt=\"\">
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
                        <p class=\"title\">My Resume</p>
                        <a href=\"javascript:void(0)\"><span class=\"pull-right add-button btn-default\" data-toggle=\"modal\" data-target=\".add-resume-modal\"> Add New Resume</span></a>
                    </div>
                    <div class=\"resume-list\">
                    \t<div class=\"table-responsive\">
                            <table class=\"table  table-striped\">
                                <thead class=\"thead-inverse\">
                                    <tr>
                                        <th>Sr. #</th>
                                        <th>Resume Title</th>
                                        <th>Download</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>
                                            <h5>Software Engineering</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>
                                            <h5>Graphic Designing</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>
                                            <h5>Front end Developer</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>
                                            <h5>IT Specialist</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                </tbody>
                            </table>
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

{% endblock %}", "appilcant_resume.twig", "/home/frescihp/public_html/getwork/application/views/appilcant_resume.twig");
    }
}
