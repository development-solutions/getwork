<?php

/* register.twig */
class __TwigTemplate_93a96d1e6aeb8f7d99f7daacab8b5b4e86878c0daa6349e9ca987d0b36793ed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "register.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<section class=\"login-page light-blue cat-tabs cstm-cat-tab\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container\">
                    <div class=\"loginbox\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\"> 
                                <!-- Tabs -->
                                <ul class=\"nav panel-tabs\">
                                    <li class=\"";
        // line 15
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : null) == "applicant")) ? ("active") : (""));
        echo "\"> <a href=\"#tab1\" data-toggle=\"tab\"><i class=\"icofont icon-profile-male\"></i><span class=\"hidden-xs hidden-sm\">I am Candidate</span></a> </li>
                                    <li class=\"";
        // line 16
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : null) == "employer")) ? ("active") : (""));
        echo "\"> <a href=\"#tab2\" data-toggle=\"tab\"><i class=\"icofont icon-briefcase\"></i><span class=\"hidden-xs hidden-sm\">I am Employer</span></a> </li>
                                </ul>
                            </div>
                        </div>
                         <div class=\"panel-body\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane ";
        // line 22
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : null) == "applicant")) ? ("active") : (""));
        echo " tab-pane animated fadeInLeft\" id=\"tab1\" >
                                    <form action=\"/register\" method=\"post\">
                                        <input type=\"hidden\" name=\"acType\" value=\"applicant\" />
                                        <div class=\"loginbox-title\">Sign Up using social accounts</div>
                                        <ul class=\"social-network social-circle onwhite\">
                                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                        <div class=\"loginbox-or\">
                                            <div class=\"or-line\"></div>
                                            <div class=\"or\">OR</div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>First Name: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">";
        // line 38
        echo $this->getAttribute((isset($context["app_errors"]) ? $context["app_errors"] : null), "error_fname", array());
        echo "</div>
                                            <input name=\"first_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Last Name: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">";
        // line 43
        echo $this->getAttribute((isset($context["app_errors"]) ? $context["app_errors"] : null), "error_lname", array());
        echo "</div>
                                            <input name=\"last_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Specialism: <span class=\"required\"></span></label>
                                            <select class=\"select-category form-control\">
                                                <option label=\"Select Option\"></option>
                                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["job_categories"]) ? $context["job_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 51
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "job_category", array()));
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Email: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">";
        // line 57
        echo $this->getAttribute((isset($context["app_errors"]) ? $context["app_errors"] : null), "error_email", array());
        echo "</div>
                                            <input name=\"email\" placeholder=\"\" class=\"form-control\" type=\"email\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Password: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">";
        // line 62
        echo $this->getAttribute((isset($context["app_errors"]) ? $context["app_errors"] : null), "error_password", array());
        echo "</div>
                                            <input name=\"password\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "password", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Confirm Password: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">";
        // line 67
        echo $this->getAttribute((isset($context["app_errors"]) ? $context["app_errors"] : null), "error_passconf", array());
        echo "</div>
                                            <input name=\"passconf\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "passconf", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"loginbox-forgot\">
                                            <input type=\"checkbox\"> I accept <a href=\"\">Term and consitions?</a>
                                        </div>
                                        <div class=\"loginbox-submit\">
                                            <input class=\"btn btn-default btn-block\" name=\"register\" value=\"Register\" type=\"submit\">
                                        </div>
                                        <div class=\"loginbox-signup\"> Already have account <a href=\"/login\">Sign in</a> </div>
                                    </form>
                                </div>
                                <div class=\"tab-pane ";
        // line 79
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : null) == "employer")) ? ("active") : (""));
        echo " tab-pane animated fadeInRight\" id=\"tab2\" >
                                    <form action=\"/register\" method=\"post\">
                                        <input type=\"hidden\" name=\"acType\" value=\"employer\" />
                                        <div class=\"form-group\">
                                            <label>First Name: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">";
        // line 84
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_fname", array());
        echo "</div>
                                            <input name=\"first_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "first_name", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Last Name: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">";
        // line 89
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_lname", array());
        echo "</div>
                                            <input name=\"last_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "last_name", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Organization Name: <span class=\"required\"></span></label>
                                            <div class=\"register_error\">";
        // line 94
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_org_name", array());
        echo "</div>
                                            <input name=\"company_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "company_name", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Email: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">";
        // line 99
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_email", array());
        echo "</div>
                                            <input name=\"email\" placeholder=\"\" class=\"form-control\" type=\"email\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "email", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Password: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">";
        // line 104
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_password", array());
        echo "</div>
                                            <input name=\"password\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "password", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Confirm Password: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">";
        // line 109
        echo $this->getAttribute((isset($context["emp_errors"]) ? $context["emp_errors"] : null), "error_passconf", array());
        echo "</div>
                                            <input name=\"passconf\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "passconf", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"loginbox-forgot\">
                                            <input type=\"checkbox\"> I accept <a href=\"\">Term and consitions?</a>
                                        </div>
                                        <div class=\"loginbox-submit\">
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
        return array (  228 => 110,  224 => 109,  217 => 105,  213 => 104,  206 => 100,  202 => 99,  195 => 95,  191 => 94,  184 => 90,  180 => 89,  173 => 85,  169 => 84,  161 => 79,  147 => 68,  143 => 67,  136 => 63,  132 => 62,  125 => 58,  121 => 57,  115 => 53,  104 => 51,  100 => 50,  91 => 44,  87 => 43,  80 => 39,  76 => 38,  57 => 22,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}

<section class=\"login-page light-blue cat-tabs cstm-cat-tab\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"login-container\">
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
                                    <form action=\"/register\" method=\"post\">
                                        <input type=\"hidden\" name=\"acType\" value=\"applicant\" />
                                        <div class=\"loginbox-title\">Sign Up using social accounts</div>
                                        <ul class=\"social-network social-circle onwhite\">
                                            <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                                            <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin +\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                        <div class=\"loginbox-or\">
                                            <div class=\"or-line\"></div>
                                            <div class=\"or\">OR</div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>First Name: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">{{ app_errors.error_fname|raw }}</div>
                                            <input name=\"first_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ user.first_name }}\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Last Name: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">{{ app_errors.error_lname|raw }}</div>
                                            <input name=\"last_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ user.last_name }}\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Specialism: <span class=\"required\"></span></label>
                                            <select class=\"select-category form-control\">
                                                <option label=\"Select Option\"></option>
                                                {% for cat in job_categories %}
                                                    <option value=\"{{ cat.id|e }}\">{{ cat.job_category|e }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Email: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">{{ app_errors.error_email|raw }}</div>
                                            <input name=\"email\" placeholder=\"\" class=\"form-control\" type=\"email\" value=\"{{ user.email }}\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Password: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">{{ app_errors.error_password|raw }}</div>
                                            <input name=\"password\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ user.password }}\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Confirm Password: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">{{ app_errors.error_passconf|raw }}</div>
                                            <input name=\"passconf\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ user.passconf }}\">
                                        </div>
                                        <div class=\"loginbox-forgot\">
                                            <input type=\"checkbox\"> I accept <a href=\"\">Term and consitions?</a>
                                        </div>
                                        <div class=\"loginbox-submit\">
                                            <input class=\"btn btn-default btn-block\" name=\"register\" value=\"Register\" type=\"submit\">
                                        </div>
                                        <div class=\"loginbox-signup\"> Already have account <a href=\"/login\">Sign in</a> </div>
                                    </form>
                                </div>
                                <div class=\"tab-pane {{ activeTab=='employer'?'active' }} tab-pane animated fadeInRight\" id=\"tab2\" >
                                    <form action=\"/register\" method=\"post\">
                                        <input type=\"hidden\" name=\"acType\" value=\"employer\" />
                                        <div class=\"form-group\">
                                            <label>First Name: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">{{ emp_errors.error_fname|raw }}</div>
                                            <input name=\"first_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ emp.first_name }}\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Last Name: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">{{ emp_errors.error_lname|raw }}</div>
                                            <input name=\"last_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ emp.last_name }}\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Organization Name: <span class=\"required\"></span></label>
                                            <div class=\"register_error\">{{ emp_errors.error_org_name|raw }}</div>
                                            <input name=\"company_name\" placeholder=\"\" class=\"form-control\" type=\"text\" value=\"{{ emp.company_name }}\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Email: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">{{ emp_errors.error_email|raw }}</div>
                                            <input name=\"email\" placeholder=\"\" class=\"form-control\" type=\"email\" value=\"{{ emp.email }}\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Password: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">{{ emp_errors.error_password|raw }}</div>
                                            <input name=\"password\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ emp.password }}\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Confirm Password: <span class=\"required\">*</span></label>
                                            <div class=\"register_error\">{{ emp_errors.error_passconf|raw }}</div>
                                            <input name=\"passconf\" placeholder=\"\" class=\"form-control\" type=\"password\" value=\"{{ emp.passconf }}\">
                                        </div>
                                        <div class=\"loginbox-forgot\">
                                            <input type=\"checkbox\"> I accept <a href=\"\">Term and consitions?</a>
                                        </div>
                                        <div class=\"loginbox-submit\">
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

{% endblock content %}", "register.twig", "/home/frescihp/public_html/getwork/application/views/register.twig");
    }
}
