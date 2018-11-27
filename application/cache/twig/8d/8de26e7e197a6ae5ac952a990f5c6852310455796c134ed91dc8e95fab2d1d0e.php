<?php

/* all_companies.twig */
class __TwigTemplate_cdfbc63a76c6cc66f8a9e57ba8e50a28c90e59fae20f87f860b9cd3c32f3f9b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "all_companies.twig", 1);
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
<section class=\"categories\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black\">
                        <h1>Top Companies</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <div id=\"cats-masonry\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
            // line 18
            echo "                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <a href=\"#\">
                                    <div class=\"company-list-box\">
                                        <span class=\"company-list-img\">
                                        \t<img src=\"../../images/company-logo/1.png\" class=\"img-responsive\" alt=\"\">
                                        </span>
                                        <div class=\"company-list-box-detail\">
                                            <h5> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "company_name", array()), "html", null, true);
            echo " </h5>
                                            <p>";
            // line 26
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["org"], "address", array()) . ", ") . $this->getAttribute($context["org"], "city", array())) . ", ") . $this->getAttribute($context["org"], "provience", array())), "html", null, true);
            echo " </p>
                                            ";
            // line 28
            echo "                                        </div>
                                    </div>
                                </a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"load-more-btn\">
                                <button class=\"btn-default\"> Load More <i class=\"fa fa-refresh\"></i> </button>
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
        return "all_companies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  67 => 28,  63 => 26,  59 => 25,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
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

<section class=\"categories\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"Heading-title black\">
                        <h1>Top Companies</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <div id=\"cats-masonry\">
                        {% for org in companies %}
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <a href=\"#\">
                                    <div class=\"company-list-box\">
                                        <span class=\"company-list-img\">
                                        \t<img src=\"../../images/company-logo/1.png\" class=\"img-responsive\" alt=\"\">
                                        </span>
                                        <div class=\"company-list-box-detail\">
                                            <h5> {{ org.company_name }} </h5>
                                            <p>{{ org.address~\", \"~org.city~\", \"~org.provience }} </p>
                                            {# <div class=\"ratings\"> <i class=\"fa fa-star color\"></i> <i class=\"fa fa-star color\"></i> <i class=\"fa fa-star color\"></i> <i class=\"fa fa-star-half-full color\"></i> <i class=\"fa fa-star-o\"></i><span class=\"badge\"> 4.5</span> </div> #}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        {% endfor %}
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"load-more-btn\">
                                <button class=\"btn-default\"> Load More <i class=\"fa fa-refresh\"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "all_companies.twig", "/home/frescihp/public_html/getwork/application/views/all_companies.twig");
    }
}
