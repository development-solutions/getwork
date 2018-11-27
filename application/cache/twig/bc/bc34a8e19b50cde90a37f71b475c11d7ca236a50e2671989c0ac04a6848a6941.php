<?php

/* applicants_search.twig */
class __TwigTemplate_467467b6d50bffc098fe47b3287535000a92624d91fb1d4189c9124001e2f715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["candidates"]) ? $context["candidates"] : null)) == 0)) {
            // line 6
            echo "                    <div class=\"col-md-8 col-sm-12 col-xs-12\">
                        <h4 class=\"search-result-text\">No Candidate Found !</h4>
                    </div>
                ";
        }
        // line 10
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidates"]) ? $context["candidates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 11
            echo "                \t<div class=\"profile-content\">
                        <div class=\"card\">
                            <div class=\"firstinfo\">
                                <a href=\"/home/profile/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
            echo "\"><img src=\"/uploads/";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["candidate"], "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["candidate"], "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle img-responsive\" /></a>
                                <div class=\"profileinfo\">
                                    <h1> <a href=\"/home/profile/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
            echo "\"> ";
            echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "first_name", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "last_name", array()))), "html", null, true);
            echo " </a></h1>
                                    <h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "trade", array()), "html", null, true);
            echo "</h3>
                                    ";
            // line 18
            if (($this->getAttribute($context["candidate"], "about_me", array()) != (isset($context["empty"]) ? $context["empty"] : null))) {
                // line 19
                echo "                                        <p class=\"bio\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["candidate"], "about_me", array()), 0, 120), "html", null, true);
                echo "...
                                        <a href=\"/home/profile/";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                echo "\">Read More</a>
                                        </p>
                                    ";
            }
            // line 23
            echo "                                    <div class=\"profile-skills\">
                                        ";
            // line 24
            $context["skills"] = twig_split_filter($this->env, $this->getAttribute($context["candidate"], "skills", array()), ",");
            // line 25
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 26
                echo "                                            ";
                if (($context["skill"] != null)) {
                    // line 27
                    echo "                                    \t       <span> ";
                    echo twig_escape_filter($this->env, $context["skill"], "html", null, true);
                    echo " </span>
                                            ";
                }
                // line 29
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                                    </div>
                                    <div class=\"hire-btn\">
                                        ";
            // line 32
            if ($this->getAttribute($context["candidate"], "shortlisted", array())) {
                // line 33
                echo "                                    \t   <a href=\"javascript:void(0);\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                echo "\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-primary cstm-btn\" ><i class=\"fa fa-filter\"></i> Shortlisted</a>
                                        ";
            } else {
                // line 35
                echo "                                            <a href=\"javascript:void(0);\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                echo "\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-default\" ><i class=\"fa fa-filter\"></i> Shortlist</a>
                                        ";
            }
            // line 37
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <div class=\"pagination-box clearfix\">
                        <div class=\"cstm-pagination pagination\">
                            ";
        // line 46
        echo (isset($context["links"]) ? $context["links"] : null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "applicants_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  127 => 43,  116 => 37,  110 => 35,  104 => 33,  102 => 32,  98 => 30,  92 => 29,  86 => 27,  83 => 26,  78 => 25,  76 => 24,  73 => 23,  67 => 20,  62 => 19,  60 => 18,  56 => 17,  50 => 16,  43 => 14,  38 => 11,  33 => 10,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
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
        </div>
    </div>
</div>", "applicants_search.twig", "/home/getwork/public_html/application/views/applicants_search.twig");
    }
}
