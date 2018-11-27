<?php

/* applicants.twig */
class __TwigTemplate_0fbba81df0a444cb7bb32cf242f7981862229bed6e119c4fcf4d700318e23ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "applicants.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "applicants.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"breadcrumb-search parallex candidate-list\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-10 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"applicantSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"categories-list-page light-grey\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 42
        if ((twig_length_filter($this->env, (isset($context["candidates"]) ? $context["candidates"] : null)) == 0)) {
            // line 43
            echo "                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">No Candidate Found !</h4>
                        </div>
                    ";
        }
        // line 47
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidates"]) ? $context["candidates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 48
            echo "                    \t<div class=\"profile-content\">
                            <div class=\"card\">
                                <div class=\"firstinfo\">
                                    <a href=\"/home/profile/";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
            echo "\"><img src=\"/uploads/";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["candidate"], "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["candidate"], "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle img-responsive\" /></a>
                                    <div class=\"profileinfo\">
                                        <h1> <a href=\"/home/profile/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
            echo "\"> ";
            echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "first_name", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "last_name", array()))), "html", null, true);
            echo " </a></h1>
                                        <h3>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "trade", array()), "html", null, true);
            echo "</h3>
                                        ";
            // line 55
            if (($this->getAttribute($context["candidate"], "about_me", array()) != (isset($context["empty"]) ? $context["empty"] : null))) {
                // line 56
                echo "                                            <p class=\"bio\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["candidate"], "about_me", array()), 0, 120), "html", null, true);
                echo "...
                                            <a href=\"/home/profile/";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                echo "\">Read More</a>
                                            </p>
                                        ";
            }
            // line 60
            echo "                                        <div class=\"profile-skills\">
                                            ";
            // line 61
            $context["skills"] = twig_split_filter($this->env, $this->getAttribute($context["candidate"], "skills", array()), ",");
            // line 62
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 63
                echo "                                                ";
                if (($context["skill"] != null)) {
                    // line 64
                    echo "                                        \t       <span> ";
                    echo twig_escape_filter($this->env, $context["skill"], "html", null, true);
                    echo " </span>
                                                ";
                }
                // line 66
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                                        </div>
                                        <div class=\"hire-btn\">
                                            ";
            // line 69
            if ($this->getAttribute($context["candidate"], "shortlisted", array())) {
                // line 70
                echo "                                        \t   <a href=\"javascript:void(0);\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                echo "\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-primary cstm-btn\" ><i class=\"fa fa-filter\"></i> Shortlisted</a>
                                            ";
            } else {
                // line 72
                echo "                                                <a href=\"javascript:void(0);\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                echo "\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-default\" ><i class=\"fa fa-filter\"></i> Shortlist</a>
                                            ";
            }
            // line 74
            echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                ";
        // line 83
        echo (isset($context["links"]) ? $context["links"] : null);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 101
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    // line 106
    public function block_footer($context, array $blocks = array())
    {
        // line 107
        echo "    ";
        $this->loadTemplate("applicants.twig", "applicants.twig", 107, "1087063933")->display($context);
    }

    public function getTemplateName()
    {
        return "applicants.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 107,  203 => 106,  195 => 101,  187 => 83,  182 => 80,  171 => 74,  165 => 72,  159 => 70,  157 => 69,  153 => 67,  147 => 66,  141 => 64,  138 => 63,  133 => 62,  131 => 61,  128 => 60,  122 => 57,  117 => 56,  115 => 55,  111 => 54,  105 => 53,  98 => 51,  93 => 48,  88 => 47,  82 => 43,  80 => 42,  53 => 18,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"breadcrumb-search parallex candidate-list\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-10 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"{{ keyword }}\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"applicantSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"categories-list-page light-grey\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    {% if candidates|length == 0 %}
                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">No Candidate Found !</h4>
                        </div>
                    {% endif %}
                    {% for candidate in candidates %}
                    \t<div class=\"profile-content\">
                            <div class=\"card\">
                                <div class=\"firstinfo\">
                                    <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\"><img src=\"/uploads/{{ candidate.profile_image|default('profile.jpg') }}\" alt=\"\" class=\"img-circle img-responsive\" /></a>
                                    <div class=\"profileinfo\">
                                        <h1> <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\"> {{ candidate.first_name|capitalize ~\" \"~candidate.last_name|capitalize }} </a></h1>
                                        <h3>{{ candidate.trade }}</h3>
                                        {% if candidate.about_me != empty %}
                                            <p class=\"bio\">{{ candidate.about_me|raw|slice(0,120) }}...
                                            <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\">Read More</a>
                                            </p>
                                        {% endif %}
                                        <div class=\"profile-skills\">
                                            {% set skills = candidate.skills|split(',') %}
                                            {% for skill in skills %}
                                                {% if skill != null %}
                                        \t       <span> {{ skill }} </span>
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                        <div class=\"hire-btn\">
                                            {% if candidate.shortlisted %}
                                        \t   <a href=\"javascript:void(0);\" data-id=\"{{ candidate.user_id_fk|e }}\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-primary cstm-btn\" ><i class=\"fa fa-filter\"></i> Shortlisted</a>
                                            {% else %}
                                                <a href=\"javascript:void(0);\" data-id=\"{{ candidate.user_id_fk|e }}\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-default\" ><i class=\"fa fa-filter\"></i> Shortlist</a>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                {{ links|raw }}
                            </div>
                        </div>
                    </div>
                </div>
                {# <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">By Trades</span></div>
                            <ul class=\"categories-module\">
                                {% set selectedCats = searchCategories|split(\",\") %}
                                {% for cat in categories if cat.id != 1 %}
                                    <li><input type=\"checkbox\" {% if cat.id in selectedCats %} checked {% endif %} name=\"candidatecat\" value=\"{{ cat.id }}\"> <a href=\"\"> {{ cat.job_category }}<span>({{ cat.userCount }})</span> </a> </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </aside>
                </div> #}
            </div>
        </div>
    </div>
</section>
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script>
                jQuery(\"input[name='applicantSearch']\").on(\"click\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]       =   jQuery(\"input[name='keyword']\").val().trim();
                    window.dashboard.applicantSearch(searchData,{{job_id|e}});
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "applicants.twig", "/home/getwork/public_html/application/views/applicants.twig");
    }
}


/* applicants.twig */
class __TwigTemplate_0fbba81df0a444cb7bb32cf242f7981862229bed6e119c4fcf4d700318e23ba2_1087063933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "applicants.twig", 107);
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

    // line 108
    public function block_customScripts($context, array $blocks = array())
    {
        // line 109
        echo "            <script>
                jQuery(\"input[name='applicantSearch']\").on(\"click\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]       =   jQuery(\"input[name='keyword']\").val().trim();
                    window.dashboard.applicantSearch(searchData,";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["job_id"]) ? $context["job_id"] : null));
        echo ");
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "applicants.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 113,  384 => 109,  381 => 108,  206 => 107,  203 => 106,  195 => 101,  187 => 83,  182 => 80,  171 => 74,  165 => 72,  159 => 70,  157 => 69,  153 => 67,  147 => 66,  141 => 64,  138 => 63,  133 => 62,  131 => 61,  128 => 60,  122 => 57,  117 => 56,  115 => 55,  111 => 54,  105 => 53,  98 => 51,  93 => 48,  88 => 47,  82 => 43,  80 => 42,  53 => 18,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"breadcrumb-search parallex candidate-list\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-10 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"{{ keyword }}\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"applicantSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"categories-list-page light-grey\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    {% if candidates|length == 0 %}
                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">No Candidate Found !</h4>
                        </div>
                    {% endif %}
                    {% for candidate in candidates %}
                    \t<div class=\"profile-content\">
                            <div class=\"card\">
                                <div class=\"firstinfo\">
                                    <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\"><img src=\"/uploads/{{ candidate.profile_image|default('profile.jpg') }}\" alt=\"\" class=\"img-circle img-responsive\" /></a>
                                    <div class=\"profileinfo\">
                                        <h1> <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\"> {{ candidate.first_name|capitalize ~\" \"~candidate.last_name|capitalize }} </a></h1>
                                        <h3>{{ candidate.trade }}</h3>
                                        {% if candidate.about_me != empty %}
                                            <p class=\"bio\">{{ candidate.about_me|raw|slice(0,120) }}...
                                            <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\">Read More</a>
                                            </p>
                                        {% endif %}
                                        <div class=\"profile-skills\">
                                            {% set skills = candidate.skills|split(',') %}
                                            {% for skill in skills %}
                                                {% if skill != null %}
                                        \t       <span> {{ skill }} </span>
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                        <div class=\"hire-btn\">
                                            {% if candidate.shortlisted %}
                                        \t   <a href=\"javascript:void(0);\" data-id=\"{{ candidate.user_id_fk|e }}\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-primary cstm-btn\" ><i class=\"fa fa-filter\"></i> Shortlisted</a>
                                            {% else %}
                                                <a href=\"javascript:void(0);\" data-id=\"{{ candidate.user_id_fk|e }}\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-default\" ><i class=\"fa fa-filter\"></i> Shortlist</a>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                {{ links|raw }}
                            </div>
                        </div>
                    </div>
                </div>
                {# <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">By Trades</span></div>
                            <ul class=\"categories-module\">
                                {% set selectedCats = searchCategories|split(\",\") %}
                                {% for cat in categories if cat.id != 1 %}
                                    <li><input type=\"checkbox\" {% if cat.id in selectedCats %} checked {% endif %} name=\"candidatecat\" value=\"{{ cat.id }}\"> <a href=\"\"> {{ cat.job_category }}<span>({{ cat.userCount }})</span> </a> </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </aside>
                </div> #}
            </div>
        </div>
    </div>
</section>
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script>
                jQuery(\"input[name='applicantSearch']\").on(\"click\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]       =   jQuery(\"input[name='keyword']\").val().trim();
                    window.dashboard.applicantSearch(searchData,{{job_id|e}});
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "applicants.twig", "/home/getwork/public_html/application/views/applicants.twig");
    }
}
