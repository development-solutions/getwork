<?php

/* employer_settings.twig */
class __TwigTemplate_b960a77c0c222eb5f7b1ba42b8466c4fa738a05e9c702383dbbb20e3283e2cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "employer_settings.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
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

    // line 3
    public function block_navigation($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("employer_navigation.twig", "employer_settings.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                ";
        // line 13
        $this->loadTemplate("employer_sidebar.twig", "employer_settings.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Update Password</p>
                    </div>
                    <div class=\"col-md-9 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <form method=\"post\" action=\"/dashboard/updatePassword\">
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Current Password <span class=\"required\">*</span></label>
                                        <input type=\"password\" name=\"current_password\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 24
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "current_password", array());
        echo "\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>New Password <span class=\"required\">*</span></label>
                                        <input type=\"password\" name=\"new_password\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 30
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "new_password", array());
        echo "\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Confirm Password <span class=\"required\">*</span></label>
                                        <input type=\"password\" name=\"con_password\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 36
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "con_password", array());
        echo "\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <input class=\"btn btn-default pull-right\" name=\"update\" type=\"submit\" value=\"Update Password\" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 50
        if (((isset($context["message"]) ? $context["message"] : null) != (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 51
            echo "<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.";
            // line 60
            echo (isset($context["alert"]) ? $context["alert"] : null);
            echo "(\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null));
            echo "\",{timeOut: 5000});
    },200);
</script>
";
        }
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $this->loadTemplate("employer_settings.twig", "employer_settings.twig", 66, "1378326843")->display($context);
    }

    public function getTemplateName()
    {
        return "employer_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 66,  121 => 65,  110 => 60,  99 => 51,  97 => 50,  80 => 36,  71 => 30,  62 => 24,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Update Password</p>
                    </div>
                    <div class=\"col-md-9 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <form method=\"post\" action=\"/dashboard/updatePassword\">
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Current Password <span class=\"required\">*</span></label>
                                        <input type=\"password\" name=\"current_password\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.current_password|raw }}\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>New Password <span class=\"required\">*</span></label>
                                        <input type=\"password\" name=\"new_password\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.new_password|raw }}\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Confirm Password <span class=\"required\">*</span></label>
                                        <input type=\"password\" name=\"con_password\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.con_password|raw }}\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <input class=\"btn btn-default pull-right\" name=\"update\" type=\"submit\" value=\"Update Password\" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% if message != empty %}
<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.{{ alert|raw }}(\"{{ message|e }}\",{timeOut: 5000});
    },200);
</script>
{% endif %}
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\">
                jQuery(document).ready(function(){
                   {% if errors|length > 0 %}
                        jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                   {% endif %}
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "employer_settings.twig", "/home/getwork/public_html/application/views/employer_settings.twig");
    }
}


/* employer_settings.twig */
class __TwigTemplate_b960a77c0c222eb5f7b1ba42b8466c4fa738a05e9c702383dbbb20e3283e2cba_1378326843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "employer_settings.twig", 66);
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

    // line 67
    public function block_customScripts($context, array $blocks = array())
    {
        // line 68
        echo "            <script type=\"text/javascript\">
                jQuery(document).ready(function(){
                   ";
        // line 70
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 71
            echo "                        jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                   ";
        }
        // line 73
        echo "                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "employer_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 73,  267 => 71,  265 => 70,  261 => 68,  258 => 67,  124 => 66,  121 => 65,  110 => 60,  99 => 51,  97 => 50,  80 => 36,  71 => 30,  62 => 24,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Update Password</p>
                    </div>
                    <div class=\"col-md-9 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <form method=\"post\" action=\"/dashboard/updatePassword\">
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Current Password <span class=\"required\">*</span></label>
                                        <input type=\"password\" name=\"current_password\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.current_password|raw }}\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>New Password <span class=\"required\">*</span></label>
                                        <input type=\"password\" name=\"new_password\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.new_password|raw }}\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Confirm Password <span class=\"required\">*</span></label>
                                        <input type=\"password\" name=\"con_password\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.con_password|raw }}\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <input class=\"btn btn-default pull-right\" name=\"update\" type=\"submit\" value=\"Update Password\" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% if message != empty %}
<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.{{ alert|raw }}(\"{{ message|e }}\",{timeOut: 5000});
    },200);
</script>
{% endif %}
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script type=\"text/javascript\">
                jQuery(document).ready(function(){
                   {% if errors|length > 0 %}
                        jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                   {% endif %}
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "employer_settings.twig", "/home/getwork/public_html/application/views/employer_settings.twig");
    }
}
