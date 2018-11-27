<?php

/* register.twig */
class __TwigTemplate_ad64fe75d63eb29fc51917003ab3c202e21cf3eb08cac752db4442634e848182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "register.twig", 1);
        $this->blocks = array(
            'metatags' => array($this, 'block_metatags'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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

    // line 2
    public function block_metatags($context, array $blocks = array())
    {
        // line 3
        echo "    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Do you know there are many online vacancies where you can apply? All construction employments are available with no investment. No expense required.\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Get Work Online | Railway jobs in UK | Find Jobs in London</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<section class=\"login-page light-blue cat-tabs cstm-cat-tab\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container cstm-width-60\">
                    <div class=\"loginbox\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\"> 
                                <!-- Tabs -->
                                <ul class=\"nav panel-tabs\">
                                    <li class=\"";
        // line 26
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : null) == "applicant")) ? ("active") : (""));
        echo "\"> <a href=\"#tab1\" data-toggle=\"tab\"><i class=\"icofont icon-profile-male\"></i><span class=\"hidden-xs hidden-sm\">I am Candidate</span></a> </li>
                                    <li class=\"";
        // line 27
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : null) == "employer")) ? ("active") : (""));
        echo "\"> <a href=\"#tab2\" data-toggle=\"tab\"><i class=\"icofont icon-briefcase\"></i><span class=\"hidden-xs hidden-sm\">I am Employer</span></a> </li>
                                </ul>
                            </div>
                        </div>
                         <div class=\"panel-body\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane ";
        // line 33
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : null) == "applicant")) ? ("active") : (""));
        echo " tab-pane animated fadeInLeft\" id=\"tab1\" >
                                    <form action=\"/register\" method=\"post\" onsubmit=\"return window.common.validate(this)\">
                                        <input type=\"hidden\" name=\"acType\" value=\"applicant\" />
                                        <div class=\"loginbox-title\">Sign Up using social accounts</div>
                                        <ul class=\"social-network social-circle onwhite\">
                                            ";
        // line 41
        echo "                                            <li><a onclick=\"InWithLinkedIn()\" href=\"javascript:void(0)\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                        <div class=\"loginbox-or\">
                                            <div class=\"or-line\"></div>
                                            <div class=\"or\">OR</div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>First Name: <span class=\"required\">*</span></label>
                                                <input name=\"first_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["app_errors"]) ? $context["app_errors"] : null), "error_fname", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Last Name: <span class=\"required\">*</span></label>
                                                <input name=\"last_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["app_errors"]) ? $context["app_errors"] : null), "error_lname", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group cstm-select\">
                                                <label>Select your trade: <span class=\"required\"></span></label>
                                                <select name=\"trade\" class=\"select-category form-control\">
                                                    <option label=\"Select Option\"></option>
                                                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["job_categories"]) ? $context["job_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 65
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "job_category", array()));
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Email: <span class=\"required\">*</span></label>
                                                <input name=\"email\" placeholder=\"\" class=\"form-control\" type=\"email\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["app_errors"]) ? $context["app_errors"] : null), "error_email", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Password: <span class=\"required\">*</span></label>
                                                <input name=\"password\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "password", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["app_errors"]) ? $context["app_errors"] : null), "error_password", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Confirm Password: <span class=\"required\">*</span></label>
                                                <input name=\"passconf\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "passconf", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["app_errors"]) ? $context["app_errors"] : null), "error_passconf", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"loginbox-forgot\">
                                            <input name=\"tnc\" type=\"checkbox\"> I accept <a href=\"/home/termsnconditions\" target=\"_blank\">Terms and conditions</a>
                                        </div>
                                        <div class=\"registerbox-submit\">
                                            <input class=\"btn btn-default btn-block\" name=\"register\" value=\"Register\" type=\"submit\">
                                        </div>
                                        <div class=\"loginbox-signup\"> Already have account <a href=\"/login\">Sign in</a> </div>
                                    </form>
                                </div>
                                <div class=\"tab-pane ";
        // line 97
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : null) == "employer")) ? ("active") : (""));
        echo " tab-pane animated fadeInRight\" id=\"tab2\" >
                                    <form action=\"/register\" method=\"post\" onsubmit=\"return window.common.validate(this)\">
                                        <input type=\"hidden\" name=\"acType\" value=\"employer\" />
                                        <div class=\"loginbox-title\">Sign Up using social accounts</div>
                                        <ul class=\"social-network social-circle onwhite\">
                                            ";
        // line 105
        echo "                                            <li><a onclick=\"InWithLinkedInEmp()\" href=\"javascript:void(0)\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                        <div class=\"loginbox-or\">
                                            <div class=\"or-line\"></div>
                                            <div class=\"or\">OR</div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>First Name: <span class=\"required\">*</span></label>
                                                <input name=\"first_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "first_name", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_fname", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Last Name: <span class=\"required\">*</span></label>
                                                <input name=\"last_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "last_name", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_lname", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Company Name: <span class=\"required\"></span></label>
                                                <input name=\"company_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "company_name", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_org_name", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Email: <span class=\"required\">*</span></label>
                                                <input name=\"email\" placeholder=\"\" class=\"form-control\" type=\"email\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "email", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_email", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Password: <span class=\"required\">*</span></label>
                                                <input name=\"password\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "password", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_password", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Confirm Password: <span class=\"required\">*</span></label>
                                                <input name=\"passconf\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "passconf", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_passconf", array());
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"loginbox-forgot\">
                                            <input name=\"tnc\" type=\"checkbox\"> I accept <a href=\"/home/termsnconditions\" target=\"_blank\">Terms and conditions</a>
                                        </div>
                                        <div class=\"registerbox-submit\">
                                            <input class=\"btn btn-default btn-block\" name=\"register\" value=\"Register\" type=\"submit\">
                                        </div>
                                        <div class=\"loginbox-signup\"> Already have account <a href=\"/login\">Sign in</a> </div>
                                    </form>
                                </div>
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

    // line 165
    public function block_footer($context, array $blocks = array())
    {
        // line 166
        echo "    ";
        $this->loadTemplate("register.twig", "register.twig", 166, "22303671")->display($context);
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 166,  288 => 165,  261 => 144,  250 => 138,  239 => 132,  228 => 126,  217 => 120,  206 => 114,  195 => 105,  187 => 97,  170 => 85,  159 => 79,  148 => 73,  140 => 67,  129 => 65,  125 => 64,  112 => 56,  101 => 50,  90 => 41,  82 => 33,  73 => 27,  69 => 26,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
{% block metatags %}
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Do you know there are many online vacancies where you can apply? All construction employments are available with no investment. No expense required.\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Get Work Online | Railway jobs in UK | Find Jobs in London</title>
{% endblock %}
{% block content %}

<section class=\"login-page light-blue cat-tabs cstm-cat-tab\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container cstm-width-60\">
                    <div class=\"loginbox\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\"> 
                                <!-- Tabs -->
                                <ul class=\"nav panel-tabs\">
                                    <li class=\"{{ activeTab=='applicant'?'active' }}\"> <a href=\"#tab1\" data-toggle=\"tab\"><i class=\"icofont icon-profile-male\"></i><span class=\"hidden-xs hidden-sm\">I am Candidate</span></a> </li>
                                    <li class=\"{{ activeTab=='employer'?'active' }}\"> <a href=\"#tab2\" data-toggle=\"tab\"><i class=\"icofont icon-briefcase\"></i><span class=\"hidden-xs hidden-sm\">I am Employer</span></a> </li>
                                </ul>
                            </div>
                        </div>
                         <div class=\"panel-body\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane {{ activeTab=='applicant'?'active' }} tab-pane animated fadeInLeft\" id=\"tab1\" >
                                    <form action=\"/register\" method=\"post\" onsubmit=\"return window.common.validate(this)\">
                                        <input type=\"hidden\" name=\"acType\" value=\"applicant\" />
                                        <div class=\"loginbox-title\">Sign Up using social accounts</div>
                                        <ul class=\"social-network social-circle onwhite\">
                                            {# <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li> #}
                                            <li><a onclick=\"InWithLinkedIn()\" href=\"javascript:void(0)\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                        <div class=\"loginbox-or\">
                                            <div class=\"or-line\"></div>
                                            <div class=\"or\">OR</div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>First Name: <span class=\"required\">*</span></label>
                                                <input name=\"first_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ user.first_name }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ app_errors.error_fname|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Last Name: <span class=\"required\">*</span></label>
                                                <input name=\"last_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ user.last_name }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ app_errors.error_lname|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group cstm-select\">
                                                <label>Select your trade: <span class=\"required\"></span></label>
                                                <select name=\"trade\" class=\"select-category form-control\">
                                                    <option label=\"Select Option\"></option>
                                                    {% for cat in job_categories %}
                                                        <option value=\"{{ cat.id|e }}\">{{ cat.job_category|e }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Email: <span class=\"required\">*</span></label>
                                                <input name=\"email\" placeholder=\"\" class=\"form-control\" type=\"email\" value=\"{{ user.email }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ app_errors.error_email|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Password: <span class=\"required\">*</span></label>
                                                <input name=\"password\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ user.password }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ app_errors.error_password|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Confirm Password: <span class=\"required\">*</span></label>
                                                <input name=\"passconf\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ user.passconf }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ app_errors.error_passconf|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"loginbox-forgot\">
                                            <input name=\"tnc\" type=\"checkbox\"> I accept <a href=\"/home/termsnconditions\" target=\"_blank\">Terms and conditions</a>
                                        </div>
                                        <div class=\"registerbox-submit\">
                                            <input class=\"btn btn-default btn-block\" name=\"register\" value=\"Register\" type=\"submit\">
                                        </div>
                                        <div class=\"loginbox-signup\"> Already have account <a href=\"/login\">Sign in</a> </div>
                                    </form>
                                </div>
                                <div class=\"tab-pane {{ activeTab=='employer'?'active' }} tab-pane animated fadeInRight\" id=\"tab2\" >
                                    <form action=\"/register\" method=\"post\" onsubmit=\"return window.common.validate(this)\">
                                        <input type=\"hidden\" name=\"acType\" value=\"employer\" />
                                        <div class=\"loginbox-title\">Sign Up using social accounts</div>
                                        <ul class=\"social-network social-circle onwhite\">
                                            {# <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li> #}
                                            <li><a onclick=\"InWithLinkedInEmp()\" href=\"javascript:void(0)\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                        <div class=\"loginbox-or\">
                                            <div class=\"or-line\"></div>
                                            <div class=\"or\">OR</div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>First Name: <span class=\"required\">*</span></label>
                                                <input name=\"first_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ emp.first_name }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_fname|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Last Name: <span class=\"required\">*</span></label>
                                                <input name=\"last_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ emp.last_name }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_lname|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Company Name: <span class=\"required\"></span></label>
                                                <input name=\"company_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ emp.company_name }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_org_name|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Email: <span class=\"required\">*</span></label>
                                                <input name=\"email\" placeholder=\"\" class=\"form-control\" type=\"email\" value=\"{{ emp.email }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_email|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Password: <span class=\"required\">*</span></label>
                                                <input name=\"password\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ emp.password }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_password|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Confirm Password: <span class=\"required\">*</span></label>
                                                <input name=\"passconf\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ emp.passconf }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_passconf|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"loginbox-forgot\">
                                            <input name=\"tnc\" type=\"checkbox\"> I accept <a href=\"/home/termsnconditions\" target=\"_blank\">Terms and conditions</a>
                                        </div>
                                        <div class=\"registerbox-submit\">
                                            <input class=\"btn btn-default btn-block\" name=\"register\" value=\"Register\" type=\"submit\">
                                        </div>
                                        <div class=\"loginbox-signup\"> Already have account <a href=\"/login\">Sign in</a> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock content %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\">
                var dataObj = new Object();
                jQuery(document).ready(function(){
                   {% if app_errors|length > 0 %}
                        jQuery(\"#tab1 [data-toggle='tooltip']\").tooltip(\"show\");
                        jQuery(\"#tab1 [data-toggle='tooltip']\").unbind(\"onmouseover onmouseleave onmouseleave\");
                   {% elseif emp_errors|length > 0 %}
                        jQuery(\"#tab2 [data-toggle='tooltip']\").tooltip(\"show\");
                        jQuery(\"#tab2 [data-toggle='tooltip']\").unbind(\"onmouseover onmouseleave onmouseleave\");
                   {% endif %}
                });

                function InWithLinkedIn(){
                    dataObj[\"acType\"]   = \"applicant\";
                    IN.User.authorize(getProfileData);
                }

                function InWithLinkedInEmp(){
                    dataObj[\"acType\"]   = \"employer\";
                    IN.User.authorize(getProfileData);
                }

                // Handle the successful return from the API call
                function onSuccess(data) {
                    IN.API.Raw(\"/people/~:(id,num-connections,picture-url,email-address)\").result(function(res){
                        dataObj[\"first_name\"] = data.firstName;
                        dataObj[\"last_name\"] = data.lastName;
                        dataObj[\"email\"] = res.emailAddress;
                        window.common.regUser(dataObj);
                    }).error(onError);
                }

                // Handle an error response from the API call
                function onError(error) {
                    console.log(error);
                }

                // Use the API call wrapper to request the member's basic profile data
                function getProfileData() {
                    IN.API.Raw(\"/people/~\").result(onSuccess).error(onError);
                }

            </script>
            <script type=\"text/javascript\" src=\"//platform.linkedin.com/in.js\">
                api_key: 81jxohii7xcfyd
                authorize: true
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "register.twig", "/home/getwork/public_html/application/views/register.twig");
    }
}


/* register.twig */
class __TwigTemplate_ad64fe75d63eb29fc51917003ab3c202e21cf3eb08cac752db4442634e848182_22303671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "register.twig", 166);
        $this->blocks = array(
            'customScripts' => array($this, 'block_customScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "footer.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 167
    public function block_customScripts($context, array $blocks = array())
    {
        // line 168
        echo "            <script type=\"text/javascript\">
                var dataObj = new Object();
                jQuery(document).ready(function(){
                   ";
        // line 171
        if ((twig_length_filter($this->env, (isset($context["app_errors"]) ? $context["app_errors"] : null)) > 0)) {
            // line 172
            echo "                        jQuery(\"#tab1 [data-toggle='tooltip']\").tooltip(\"show\");
                        jQuery(\"#tab1 [data-toggle='tooltip']\").unbind(\"onmouseover onmouseleave onmouseleave\");
                   ";
        } elseif ((twig_length_filter($this->env,         // line 174
(isset($context["emp_errors"]) ? $context["emp_errors"] : null)) > 0)) {
            // line 175
            echo "                        jQuery(\"#tab2 [data-toggle='tooltip']\").tooltip(\"show\");
                        jQuery(\"#tab2 [data-toggle='tooltip']\").unbind(\"onmouseover onmouseleave onmouseleave\");
                   ";
        }
        // line 178
        echo "                });

                function InWithLinkedIn(){
                    dataObj[\"acType\"]   = \"applicant\";
                    IN.User.authorize(getProfileData);
                }

                function InWithLinkedInEmp(){
                    dataObj[\"acType\"]   = \"employer\";
                    IN.User.authorize(getProfileData);
                }

                // Handle the successful return from the API call
                function onSuccess(data) {
                    IN.API.Raw(\"/people/~:(id,num-connections,picture-url,email-address)\").result(function(res){
                        dataObj[\"first_name\"] = data.firstName;
                        dataObj[\"last_name\"] = data.lastName;
                        dataObj[\"email\"] = res.emailAddress;
                        window.common.regUser(dataObj);
                    }).error(onError);
                }

                // Handle an error response from the API call
                function onError(error) {
                    console.log(error);
                }

                // Use the API call wrapper to request the member's basic profile data
                function getProfileData() {
                    IN.API.Raw(\"/people/~\").result(onSuccess).error(onError);
                }

            </script>
            <script type=\"text/javascript\" src=\"//platform.linkedin.com/in.js\">
                api_key: 81jxohii7xcfyd
                authorize: true
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 178,  581 => 175,  579 => 174,  575 => 172,  573 => 171,  568 => 168,  565 => 167,  291 => 166,  288 => 165,  261 => 144,  250 => 138,  239 => 132,  228 => 126,  217 => 120,  206 => 114,  195 => 105,  187 => 97,  170 => 85,  159 => 79,  148 => 73,  140 => 67,  129 => 65,  125 => 64,  112 => 56,  101 => 50,  90 => 41,  82 => 33,  73 => 27,  69 => 26,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
{% block metatags %}
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Do you know there are many online vacancies where you can apply? All construction employments are available with no investment. No expense required.\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Get Work Online | Railway jobs in UK | Find Jobs in London</title>
{% endblock %}
{% block content %}

<section class=\"login-page light-blue cat-tabs cstm-cat-tab\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container cstm-width-60\">
                    <div class=\"loginbox\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\"> 
                                <!-- Tabs -->
                                <ul class=\"nav panel-tabs\">
                                    <li class=\"{{ activeTab=='applicant'?'active' }}\"> <a href=\"#tab1\" data-toggle=\"tab\"><i class=\"icofont icon-profile-male\"></i><span class=\"hidden-xs hidden-sm\">I am Candidate</span></a> </li>
                                    <li class=\"{{ activeTab=='employer'?'active' }}\"> <a href=\"#tab2\" data-toggle=\"tab\"><i class=\"icofont icon-briefcase\"></i><span class=\"hidden-xs hidden-sm\">I am Employer</span></a> </li>
                                </ul>
                            </div>
                        </div>
                         <div class=\"panel-body\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane {{ activeTab=='applicant'?'active' }} tab-pane animated fadeInLeft\" id=\"tab1\" >
                                    <form action=\"/register\" method=\"post\" onsubmit=\"return window.common.validate(this)\">
                                        <input type=\"hidden\" name=\"acType\" value=\"applicant\" />
                                        <div class=\"loginbox-title\">Sign Up using social accounts</div>
                                        <ul class=\"social-network social-circle onwhite\">
                                            {# <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li> #}
                                            <li><a onclick=\"InWithLinkedIn()\" href=\"javascript:void(0)\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                        <div class=\"loginbox-or\">
                                            <div class=\"or-line\"></div>
                                            <div class=\"or\">OR</div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>First Name: <span class=\"required\">*</span></label>
                                                <input name=\"first_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ user.first_name }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ app_errors.error_fname|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Last Name: <span class=\"required\">*</span></label>
                                                <input name=\"last_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ user.last_name }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ app_errors.error_lname|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group cstm-select\">
                                                <label>Select your trade: <span class=\"required\"></span></label>
                                                <select name=\"trade\" class=\"select-category form-control\">
                                                    <option label=\"Select Option\"></option>
                                                    {% for cat in job_categories %}
                                                        <option value=\"{{ cat.id|e }}\">{{ cat.job_category|e }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Email: <span class=\"required\">*</span></label>
                                                <input name=\"email\" placeholder=\"\" class=\"form-control\" type=\"email\" value=\"{{ user.email }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ app_errors.error_email|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Password: <span class=\"required\">*</span></label>
                                                <input name=\"password\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ user.password }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ app_errors.error_password|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Confirm Password: <span class=\"required\">*</span></label>
                                                <input name=\"passconf\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ user.passconf }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ app_errors.error_passconf|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"loginbox-forgot\">
                                            <input name=\"tnc\" type=\"checkbox\"> I accept <a href=\"/home/termsnconditions\" target=\"_blank\">Terms and conditions</a>
                                        </div>
                                        <div class=\"registerbox-submit\">
                                            <input class=\"btn btn-default btn-block\" name=\"register\" value=\"Register\" type=\"submit\">
                                        </div>
                                        <div class=\"loginbox-signup\"> Already have account <a href=\"/login\">Sign in</a> </div>
                                    </form>
                                </div>
                                <div class=\"tab-pane {{ activeTab=='employer'?'active' }} tab-pane animated fadeInRight\" id=\"tab2\" >
                                    <form action=\"/register\" method=\"post\" onsubmit=\"return window.common.validate(this)\">
                                        <input type=\"hidden\" name=\"acType\" value=\"employer\" />
                                        <div class=\"loginbox-title\">Sign Up using social accounts</div>
                                        <ul class=\"social-network social-circle onwhite\">
                                            {# <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li> #}
                                            <li><a onclick=\"InWithLinkedInEmp()\" href=\"javascript:void(0)\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                        <div class=\"loginbox-or\">
                                            <div class=\"or-line\"></div>
                                            <div class=\"or\">OR</div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>First Name: <span class=\"required\">*</span></label>
                                                <input name=\"first_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ emp.first_name }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_fname|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Last Name: <span class=\"required\">*</span></label>
                                                <input name=\"last_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ emp.last_name }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_lname|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Company Name: <span class=\"required\"></span></label>
                                                <input name=\"company_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ emp.company_name }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_org_name|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Email: <span class=\"required\">*</span></label>
                                                <input name=\"email\" placeholder=\"\" class=\"form-control\" type=\"email\" value=\"{{ emp.email }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_email|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Password: <span class=\"required\">*</span></label>
                                                <input name=\"password\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ emp.password }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_password|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <div class=\"form-group\">
                                                <label>Confirm Password: <span class=\"required\">*</span></label>
                                                <input name=\"passconf\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ emp.passconf }}\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ emp_errors.error_passconf|raw }}\">
                                            </div>
                                        </div>
                                        <div class=\"loginbox-forgot\">
                                            <input name=\"tnc\" type=\"checkbox\"> I accept <a href=\"/home/termsnconditions\" target=\"_blank\">Terms and conditions</a>
                                        </div>
                                        <div class=\"registerbox-submit\">
                                            <input class=\"btn btn-default btn-block\" name=\"register\" value=\"Register\" type=\"submit\">
                                        </div>
                                        <div class=\"loginbox-signup\"> Already have account <a href=\"/login\">Sign in</a> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock content %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\">
                var dataObj = new Object();
                jQuery(document).ready(function(){
                   {% if app_errors|length > 0 %}
                        jQuery(\"#tab1 [data-toggle='tooltip']\").tooltip(\"show\");
                        jQuery(\"#tab1 [data-toggle='tooltip']\").unbind(\"onmouseover onmouseleave onmouseleave\");
                   {% elseif emp_errors|length > 0 %}
                        jQuery(\"#tab2 [data-toggle='tooltip']\").tooltip(\"show\");
                        jQuery(\"#tab2 [data-toggle='tooltip']\").unbind(\"onmouseover onmouseleave onmouseleave\");
                   {% endif %}
                });

                function InWithLinkedIn(){
                    dataObj[\"acType\"]   = \"applicant\";
                    IN.User.authorize(getProfileData);
                }

                function InWithLinkedInEmp(){
                    dataObj[\"acType\"]   = \"employer\";
                    IN.User.authorize(getProfileData);
                }

                // Handle the successful return from the API call
                function onSuccess(data) {
                    IN.API.Raw(\"/people/~:(id,num-connections,picture-url,email-address)\").result(function(res){
                        dataObj[\"first_name\"] = data.firstName;
                        dataObj[\"last_name\"] = data.lastName;
                        dataObj[\"email\"] = res.emailAddress;
                        window.common.regUser(dataObj);
                    }).error(onError);
                }

                // Handle an error response from the API call
                function onError(error) {
                    console.log(error);
                }

                // Use the API call wrapper to request the member's basic profile data
                function getProfileData() {
                    IN.API.Raw(\"/people/~\").result(onSuccess).error(onError);
                }

            </script>
            <script type=\"text/javascript\" src=\"//platform.linkedin.com/in.js\">
                api_key: 81jxohii7xcfyd
                authorize: true
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "register.twig", "/home/getwork/public_html/application/views/register.twig");
    }
}
