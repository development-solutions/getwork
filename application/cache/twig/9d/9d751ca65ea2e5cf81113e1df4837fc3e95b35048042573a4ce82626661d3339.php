<?php

/* employer_resume.twig */
class __TwigTemplate_a7772c3bc504ebd1fef3cc315e4c616dc1e3bc27e17587443f95d73e1e40466a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "employer_resume.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "employer_resume.twig", 4)->display($context);
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
        $this->loadTemplate("employer_sidebar.twig", "employer_resume.twig", 22)->display($context);
        // line 23
        echo "                </div>
                <div class=\"col-md-8 col-sm-8 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Resumes on Network Engineer Job</p>
                    </div>
                    <div class=\"resume-list\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead class=\"thead-inverse\">
                                    <tr>
                                        <th>Sr. #</th>
                                        <th>Applicant Name</th>
                                        <th>Remove</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>
                                            <h5>Arslan tariq</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>
                                            <h5>Emily Copper</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>
                                            <h5>Jhon Doe</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>
                                            <h5>Nethan Spikes</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                </tbody>
                            </table>
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
        return "employer_resume.twig";
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
                        <p class=\"title\">Resumes on Network Engineer Job</p>
                    </div>
                    <div class=\"resume-list\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead class=\"thead-inverse\">
                                    <tr>
                                        <th>Sr. #</th>
                                        <th>Applicant Name</th>
                                        <th>Remove</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>
                                            <h5>Arslan tariq</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>
                                            <h5>Emily Copper</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>
                                            <h5>Jhon Doe</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>
                                            <h5>Nethan Spikes</h5></td>
                                        <td><a class=\"btn btn-primary\" href=\"resume/sampleResume.pdf\"> Download </a></td>
                                        <td><a class=\"btn btn-danger\" href=\"\"> Delete </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "employer_resume.twig", "/home/frescihp/public_html/getwork/application/views/employer_resume.twig");
    }
}
