<?php

/* employer_resume.twig */
class __TwigTemplate_1450d04d0f250576dada9691358c80c8ecfcb40f35cce38f2c4be316f9151594 extends Twig_Template
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
                ";
        // line 13
        $this->loadTemplate("employer_sidebar.twig", "employer_resume.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Shortlisted Candidates</p>
                    </div>
                    <div class=\"resume-list\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                ";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["resumes"]) ? $context["resumes"] : null)) == 0)) {
            // line 22
            echo "                                    <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                        <h4 class=\"search-result-text\">You haven't shortlisted any candidate yet.</h4>
                                    </div>
                                ";
        } else {
            // line 26
            echo "                                    <thead class=\"thead-inverse\">
                                        <tr>
                                            <th>Sr. #</th>
                                            <th>Applicant Name</th>
                                            <th>View Details</th>
                                            <th>Send Message</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                ";
        }
        // line 36
        echo "                                <tbody>
                                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resumes"]) ? $context["resumes"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["resume"]) {
            // line 38
            echo "                                        <tr>
                                            <th scope=\"row\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>
                                            <td>
                                                <h5>";
            // line 41
            echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["resume"], "first_name", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["resume"], "last_name", array()))), "html", null, true);
            echo "</h5></td>
                                            <td><a class=\"btn btn-primary\" href=\"/home/profile/";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["resume"], "applicant_id_fk", array()));
            echo "\"> View </a></td>
                                            <td><a class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"jQuery('#to').val(";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["resume"], "applicant_id_fk", array()));
            echo ")\" href=\"#\"> Message </a></td>
                                            <td><a data-id=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["resume"], "applicant_id_fk", array()), "html", null, true);
            echo "\" onclick=\"window.dashboard.removeShortlist(this)\" class=\"btn btn-danger\" href=\"javascript:void(0)\"> Delete </a></td>
                                        </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resume'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Send Message to Candidate</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"to\" type=\"hidden\" name=\"to\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.dashboard.sendMessage()\" class=\"btn btn-default btn-block\">Send Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
        return array (  135 => 47,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  101 => 39,  98 => 38,  81 => 37,  78 => 36,  66 => 26,  60 => 22,  58 => 21,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Shortlisted Candidates</p>
                    </div>
                    <div class=\"resume-list\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                {% if resumes|length == 0 %}
                                    <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                        <h4 class=\"search-result-text\">You haven't shortlisted any candidate yet.</h4>
                                    </div>
                                {% else %}
                                    <thead class=\"thead-inverse\">
                                        <tr>
                                            <th>Sr. #</th>
                                            <th>Applicant Name</th>
                                            <th>View Details</th>
                                            <th>Send Message</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                {% endif %}
                                <tbody>
                                    {% for resume in resumes %}
                                        <tr>
                                            <th scope=\"row\">{{ loop.index }}</th>
                                            <td>
                                                <h5>{{ resume.first_name|capitalize ~\" \"~resume.last_name|capitalize }}</h5></td>
                                            <td><a class=\"btn btn-primary\" href=\"/home/profile/{{ resume.applicant_id_fk|e }}\"> View </a></td>
                                            <td><a class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"jQuery('#to').val({{ resume.applicant_id_fk|e }})\" href=\"#\"> Message </a></td>
                                            <td><a data-id=\"{{ resume.applicant_id_fk }}\" onclick=\"window.dashboard.removeShortlist(this)\" class=\"btn btn-danger\" href=\"javascript:void(0)\"> Delete </a></td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Send Message to Candidate</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"to\" type=\"hidden\" name=\"to\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.dashboard.sendMessage()\" class=\"btn btn-default btn-block\">Send Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "employer_resume.twig", "/home/frescihp/public_html/getwork/application/views/employer_resume.twig");
    }
}
