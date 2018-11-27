<?php

/* all_companies.twig */
class __TwigTemplate_eae605f5e99fba3017add19aa1d08632a85ce095b52bc0df506e1b108db09b85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "all_companies.twig", 1);
        $this->blocks = array(
            'metatags' => array($this, 'block_metatags'),
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_metatags($context, array $blocks = array())
    {
        // line 3
        echo "    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Look for most recent Construction Jobs in London across over top organizations. Look and apply to most appropriate employment opportunities\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Search Construction Jobs in Top Companies | Post Free Jobs UK</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<section class=\"categories\">
    <div class=\"companies-top col-lg-12 col-md-12 col-sm-12\"><h1>Top Companies</h1></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black\">
                        
                        <p>Search jobs through a list of Leading companies.</p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <div id=\"cats-masonry\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
            // line 30
            echo "                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <a href=\"/home/companyinfo/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "user_id_fk", array()));
            echo "\">
                                    <div class=\"company-list-box\">
                                        <span class=\"company-list-img\">
                                        \t<img src=\"/uploads/";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($context["org"], "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["org"], "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"railway jobs london\">
                                        </span>
                                        <div class=\"company-list-box-detail\">
                                            <h5> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "company_name", array()), "html", null, true);
            echo " </h5>
                                            <p>";
            // line 38
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["org"], "address", array()) . " ") . $this->getAttribute($context["org"], "city", array())) . " ") . $this->getAttribute($context["org"], "provience", array())), "html", null, true);
            echo " </p>
                                            ";
            // line 40
            echo "                                        </div>
                                    </div>
                                </a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        ";
        // line 50
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "all_companies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  108 => 45,  98 => 40,  94 => 38,  90 => 37,  84 => 34,  78 => 31,  75 => 30,  71 => 29,  55 => 15,  52 => 14,  47 => 12,  44 => 11,  33 => 3,  30 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"Look for most recent Construction Jobs in London across over top organizations. Look and apply to most appropriate employment opportunities\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Search Construction Jobs in Top Companies | Post Free Jobs UK</title>
{% endblock %}
{% block content %}

<section class=\"categories\">
    <div class=\"companies-top col-lg-12 col-md-12 col-sm-12\"><h1>Top Companies</h1></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black\">
                        
                        <p>Search jobs through a list of Leading companies.</p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <div id=\"cats-masonry\">
                        {% for org in companies %}
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <a href=\"/home/companyinfo/{{ org.user_id_fk|e }}\">
                                    <div class=\"company-list-box\">
                                        <span class=\"company-list-img\">
                                        \t<img src=\"/uploads/{{ org.logo|default('logo.jpg') }}\" class=\"img-responsive\" alt=\"railway jobs london\">
                                        </span>
                                        <div class=\"company-list-box-detail\">
                                            <h5> {{ org.company_name }} </h5>
                                            <p>{{ org.address~\" \"~org.city~\" \"~org.provience }} </p>
                                            {# <div class=\"ratings\"> <i class=\"fa fa-star color\"></i> <i class=\"fa fa-star color\"></i> <i class=\"fa fa-star color\"></i> <i class=\"fa fa-star-half-full color\"></i> <i class=\"fa fa-star-o\"></i><span class=\"badge\"> 4.5</span> </div> #}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        {% endfor %}
                        {# <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"load-more-btn\">
                                <button class=\"btn-default\"> Load More <i class=\"fa fa-refresh\"></i> </button>
                            </div>
                        </div> #}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "all_companies.twig", "/home/getwork/public_html/application/views/all_companies.twig");
    }
}
