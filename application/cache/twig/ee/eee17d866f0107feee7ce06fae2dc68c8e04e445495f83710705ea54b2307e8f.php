<?php

/* candidates_search.twig */
class __TwigTemplate_929bf51a365d8c1758c63bdcc86f6517229a52224830fa432f86e60c11e60816 extends Twig_Template
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
            <div class=\"col-md-8 col-sm-12 col-xs-12\">
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
        $context["limit"] = ((((isset($context["role"]) ? $context["role"] : null) == 3)) ? (twig_length_filter($this->env, (isset($context["candidates"]) ? $context["candidates"] : null))) : (10));
        // line 11
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["candidates"]) ? $context["candidates"] : null), 0, (isset($context["limit"]) ? $context["limit"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 12
            echo "                    <div class=\"profile-content\">
                        <div class=\"card\">
                            <div class=\"firstinfo\">
                                ";
            // line 15
            if (((isset($context["role"]) ? $context["role"] : null) == 3)) {
                // line 16
                echo "                                    <a href=\"/home/profile/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                echo "\"><img src=\"/uploads/";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["candidate"], "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["candidate"], "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
                echo "\" alt=\"\" class=\"img-circle img-responsive\" /></a>
                                ";
            } else {
                // line 18
                echo "                                    <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\"><img src=\"/uploads/profile.jpg\" alt=\"\" class=\"img-circle img-responsive\" /></a>
                                ";
            }
            // line 20
            echo "                                <div class=\"profileinfo\">
                                    ";
            // line 21
            if (((isset($context["role"]) ? $context["role"] : null) == 3)) {
                // line 22
                echo "                                        <h1> <a href=\"/home/profile/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                echo "\"> ";
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "first_name", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "last_name", array()))), "html", null, true);
                echo " </a></h1>
                                    ";
            } else {
                // line 24
                echo "                                        <h1> <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\"> ";
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "first_name", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "last_name", array()))), "html", null, true);
                echo " </a></h1>
                                    ";
            }
            // line 26
            echo "                                    <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "trade", array()), "html", null, true);
            echo "</h3>
                                    ";
            // line 27
            if (($this->getAttribute($context["candidate"], "about_me", array()) != (isset($context["empty"]) ? $context["empty"] : null))) {
                // line 28
                echo "                                        <p class=\"bio\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["candidate"], "about_me", array()), 0, 120), "html", null, true);
                echo "...
                                        ";
                // line 29
                if (((isset($context["role"]) ? $context["role"] : null) == 3)) {
                    // line 30
                    echo "                                            <a href=\"/home/profile/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                    echo "\">Read More</a>
                                        ";
                } else {
                    // line 32
                    echo "                                            <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\">Read More</a>
                                        ";
                }
                // line 34
                echo "                                        </p>
                                    ";
            }
            // line 36
            echo "                                    <div class=\"profile-skills\">
                                        ";
            // line 37
            $context["skills"] = twig_split_filter($this->env, $this->getAttribute($context["candidate"], "skills", array()), ",");
            // line 38
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 39
                echo "                                            ";
                if (($context["skill"] != null)) {
                    // line 40
                    echo "                                               <span> ";
                    echo twig_escape_filter($this->env, $context["skill"], "html", null, true);
                    echo " </span>
                                            ";
                }
                // line 42
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                                    </div>
                                    <div class=\"hire-btn\">
                                        ";
            // line 45
            if (((isset($context["role"]) ? $context["role"] : null) == 3)) {
                // line 46
                echo "                                            ";
                if ($this->getAttribute($context["candidate"], "shortlisted", array())) {
                    // line 47
                    echo "                                               <a href=\"javascript:void(0);\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                    echo "\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-primary cstm-btn\" ><i class=\"fa fa-filter\"></i> Shortlisted</a>
                                            ";
                } else {
                    // line 49
                    echo "                                                <a href=\"javascript:void(0);\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                    echo "\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-default\" ><i class=\"fa fa-filter\"></i> Shortlist</a>
                                            ";
                }
                // line 51
                echo "                                        ";
            }
            // line 52
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
        // line 58
        echo "                ";
        if ((isset($context["role"]) ? $context["role"] : null)) {
            // line 59
            echo "                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                ";
            // line 62
            echo (isset($context["links"]) ? $context["links"] : null);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 67
            echo "                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"load-more-btn\">
                            <button onclick=\"loaduser()\" class=\"btn-default\"> Load more </button>
                        </div>
                    </div>
                ";
        }
        // line 73
        echo "            </div>
            <div class=\"col-md-4 col-sm-12 col-xs-12\">
                <aside>
                    <div class=\"widget\">
                        <div class=\"widget-heading\"><span class=\"title\">By Trades</span></div>
                        <ul class=\"categories-module\">
                            ";
        // line 79
        $context["selectedCats"] = twig_split_filter($this->env, (isset($context["searchCategories"]) ? $context["searchCategories"] : null), ",");
        // line 80
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if (($this->getAttribute($context["cat"], "id", array()) != 1)) {
                // line 81
                echo "                                <li><input type=\"checkbox\" ";
                if (twig_in_filter($this->getAttribute($context["cat"], "id", array()), (isset($context["selectedCats"]) ? $context["selectedCats"] : null))) {
                    echo " checked ";
                }
                echo " name=\"candidatecat\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
                echo "\"> <a href=\"\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "job_category", array()), "html", null, true);
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "userCount", array()), "html", null, true);
                echo ")</span> </a> </li>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                        </ul>
                    </div>
                    ";
        // line 130
        echo "                </aside>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "candidates_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 130,  225 => 83,  207 => 81,  201 => 80,  199 => 79,  191 => 73,  183 => 67,  175 => 62,  170 => 59,  167 => 58,  156 => 52,  153 => 51,  147 => 49,  141 => 47,  138 => 46,  136 => 45,  132 => 43,  126 => 42,  120 => 40,  117 => 39,  112 => 38,  110 => 37,  107 => 36,  103 => 34,  99 => 32,  93 => 30,  91 => 29,  86 => 28,  84 => 27,  79 => 26,  73 => 24,  65 => 22,  63 => 21,  60 => 20,  56 => 18,  48 => 16,  46 => 15,  41 => 12,  36 => 11,  33 => 10,  27 => 6,  25 => 5,  19 => 1,);
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
            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                {% if candidates|length == 0 %}
                    <div class=\"col-md-8 col-sm-12 col-xs-12\">
                        <h4 class=\"search-result-text\">No Candidate Found !</h4>
                    </div>
                {% endif %}
                {% set limit =  role == 3 ? candidates|length : 10 %}
                {% for candidate in candidates|slice(0,limit) %}
                    <div class=\"profile-content\">
                        <div class=\"card\">
                            <div class=\"firstinfo\">
                                {% if role == 3 %}
                                    <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\"><img src=\"/uploads/{{ candidate.profile_image|default('profile.jpg') }}\" alt=\"\" class=\"img-circle img-responsive\" /></a>
                                {% else %}
                                    <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\"><img src=\"/uploads/profile.jpg\" alt=\"\" class=\"img-circle img-responsive\" /></a>
                                {% endif %}
                                <div class=\"profileinfo\">
                                    {% if role == 3 %}
                                        <h1> <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\"> {{ candidate.first_name|capitalize ~\" \"~candidate.last_name|capitalize }} </a></h1>
                                    {% else %}
                                        <h1> <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\"> {{ candidate.first_name|capitalize ~\" \"~candidate.last_name|capitalize }} </a></h1>
                                    {% endif %}
                                    <h3>{{ candidate.trade }}</h3>
                                    {% if candidate.about_me != empty %}
                                        <p class=\"bio\">{{ candidate.about_me|raw|slice(0,120) }}...
                                        {% if role == 3 %}
                                            <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\">Read More</a>
                                        {% else %}
                                            <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\">Read More</a>
                                        {% endif %}
                                        </p>
                                    {% endif %}
                                    <div class=\"profile-skills\">
                                        {% set skills = candidate.skills|split(',') %}
                                        {% for skill in skills %}
                                            {% if skill != null %}
                                               <span> {{ skill }} </span>
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                    <div class=\"hire-btn\">
                                        {% if role == 3 %}
                                            {% if candidate.shortlisted %}
                                               <a href=\"javascript:void(0);\" data-id=\"{{ candidate.user_id_fk|e }}\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-primary cstm-btn\" ><i class=\"fa fa-filter\"></i> Shortlisted</a>
                                            {% else %}
                                                <a href=\"javascript:void(0);\" data-id=\"{{ candidate.user_id_fk|e }}\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-default\" ><i class=\"fa fa-filter\"></i> Shortlist</a>
                                            {% endif %}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
                {% if role %}
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                {{ links|raw }}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"load-more-btn\">
                            <button onclick=\"loaduser()\" class=\"btn-default\"> Load more </button>
                        </div>
                    </div>
                {% endif %}
            </div>
            <div class=\"col-md-4 col-sm-12 col-xs-12\">
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
                    {# <div class=\"widget\">
                        <div class=\"widget-heading\"><span class=\"title\">Latest Articles</span></div>
                        <ul class=\"related-post\">
                            <li>
                                <a href=\"#\">Assistant Manager Procurement </a>
                                <span><i class=\"fa fa-map-marker\"></i>Managgo, WC </span>
                                <span><i class=\"fa fa-calendar\"></i>March 22, 2015 </span>
                            </li>
                            <li>
                                <a href=\"#\">Marketing Professionals Required</a>
                                <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015</span>
                            </li>
                            <li>
                                <a href=\"#\">Mobile App Programmers </a>
                                <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                <span><i class=\"fa fa-calendar\"></i> - March 09, 2016 </span>
                            </li>
                            <li>
                                <a href=\"#\">General Compliance Officer</a>
                                <span><i class=\"fa fa-map-marker\"></i>Arlington, VA </span>
                                <span><i class=\"fa fa-calendar\"></i>Feb 09, 2016</span>
                            </li>
                            <li>
                                <a href=\"#\">Call Centre Manager</a>
                                <span><i class=\"fa fa-map-marker\"></i>Managgo, WC  </span>
                                <span><i class=\"fa fa-calendar\"></i> March 09, 2016</span>
                            </li>
                            <li>
                                <a href=\"#\">Assistant Manager Audit</a>
                                <span><i class=\"fa fa-map-marker\"></i>Heling, WC </span>
                                <span><i class=\"fa fa-calendar\"></i>Aug 01, 2015 - </span>
                            </li>
                            <li>
                                <a href=\"#\">Telesales Agent (UK Dialing)</a>
                                <span><i class=\"fa fa-map-marker\"></i>Somro, New </span>
                                <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015</span>
                            </li>
                            <li>
                                <a href=\"#\">Assistant Brand Manager</a>
                                <span><i class=\"fa fa-map-marker\"></i>Heritage, VA </span>
                                <span><i class=\"fa fa-calendar\"></i>May 09, 2016</span>
                            </li>
                        </ul>
                    </div> #}
                </aside>
            </div>
        </div>
    </div>
</div>", "candidates_search.twig", "/home/getwork/public_html/application/views/candidates_search.twig");
    }
}
