<?php

/* candidates.twig */
class __TwigTemplate_2dba62ffcdc626f80c6d359bf3f0c38d5e51e4743918420c08cd65c0d68b4340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "candidates.twig", 1);
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
    <meta name=\"description\" content=\"Seek Jobs through a many of leading top organizations on Getwork.Construction. This website help  you to look for a lot of construction Jobs Online\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Search Construction Jobs in Top Companies | Construction Jobs</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
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
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"\" class=\"form-control\" name=\"keyword\" placeholder=\"Search candidate with skill or trade\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>   
                                <span class=\"search-eg\">e.g. crane supervisor, plumber, SMSTP, PTS, site manager</span>
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"candidateSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
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
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    ";
        // line 50
        if ((twig_length_filter($this->env, (isset($context["candidates"]) ? $context["candidates"] : null)) == 0)) {
            // line 51
            echo "                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">No Candidate Found !</h4>
                        </div>
                    ";
        }
        // line 55
        echo "                    ";
        $context["limit"] = ((((isset($context["role"]) ? $context["role"] : null) == 3)) ? (twig_length_filter($this->env, (isset($context["candidates"]) ? $context["candidates"] : null))) : (10));
        // line 56
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["candidates"]) ? $context["candidates"] : null), 0, (isset($context["limit"]) ? $context["limit"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 57
            echo "                    \t<div class=\"profile-content\">
                            <div class=\"card\">
                                <div class=\"firstinfo\">
                                    ";
            // line 60
            if (((isset($context["role"]) ? $context["role"] : null) == 3)) {
                // line 61
                echo "                                        <a href=\"/home/profile/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                echo "\"><img src=\"/uploads/";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["candidate"], "profile_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["candidate"], "profile_image", array()), "profile.jpg")) : ("profile.jpg")), "html", null, true);
                echo "\" alt=\"find best London jobs\" class=\"img-circle img-responsive\" /></a>
                                    ";
            } else {
                // line 63
                echo "                                        <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\"><img src=\"/uploads/profile.jpg\" alt=\"search Jobs in London\" class=\"img-circle img-responsive\" /></a>
                                    ";
            }
            // line 65
            echo "                                    <div class=\"profileinfo\">
                                        ";
            // line 66
            if (((isset($context["role"]) ? $context["role"] : null) == 3)) {
                // line 67
                echo "                                            <h1> <a href=\"/home/profile/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                echo "\"> ";
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "first_name", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "last_name", array()))), "html", null, true);
                echo " </a></h1>
                                        ";
            } else {
                // line 69
                echo "                                            <h1> <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\"> ";
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "first_name", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["candidate"], "last_name", array()))), "html", null, true);
                echo " </a></h1>
                                        ";
            }
            // line 71
            echo "                                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "trade", array()), "html", null, true);
            echo "</h3>
                                        ";
            // line 72
            if (($this->getAttribute($context["candidate"], "about_me", array()) != (isset($context["empty"]) ? $context["empty"] : null))) {
                // line 73
                echo "                                            <p class=\"bio\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["candidate"], "about_me", array()), 0, 120), "html", null, true);
                echo "...
                                            ";
                // line 74
                if (((isset($context["role"]) ? $context["role"] : null) == 3)) {
                    // line 75
                    echo "                                                <a href=\"/home/profile/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                    echo "\">Read More</a>
                                            ";
                } else {
                    // line 77
                    echo "                                                <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\">Read More</a>
                                            ";
                }
                // line 79
                echo "                                            </p>
                                        ";
            }
            // line 81
            echo "                                        <div class=\"profile-skills\">
                                            ";
            // line 82
            $context["skills"] = twig_split_filter($this->env, $this->getAttribute($context["candidate"], "skills", array()), ",");
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t\t<ul>
                                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 85
                echo "                                                ";
                if (($context["skill"] != null)) {
                    // line 86
                    echo "                                        \t       <li> ";
                    echo twig_escape_filter($this->env, $context["skill"], "html", null, true);
                    echo " </li>
                                                ";
                }
                // line 88
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
                                        </div>
                                        <div class=\"hire-btn\">
                                            ";
            // line 92
            if (((isset($context["role"]) ? $context["role"] : null) == 3)) {
                // line 93
                echo "                                                ";
                if ($this->getAttribute($context["candidate"], "shortlisted", array())) {
                    // line 94
                    echo "                                            \t   <a href=\"javascript:void(0);\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                    echo "\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-primary cstm-btn\" ><i class=\"fa fa-filter\"></i> Shortlisted</a>
                                                ";
                } else {
                    // line 96
                    echo "                                                    <a href=\"javascript:void(0);\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["candidate"], "user_id_fk", array()));
                    echo "\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-default\" ><i class=\"fa fa-filter\"></i> Shortlist</a>
                                                ";
                }
                // line 98
                echo "                                            ";
            }
            // line 99
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
        // line 105
        echo "                    ";
        if ((isset($context["role"]) ? $context["role"] : null)) {
            // line 106
            echo "                        <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                            <div class=\"pagination-box clearfix\">
                                <div class=\"cstm-pagination pagination\">
                                    ";
            // line 109
            echo (isset($context["links"]) ? $context["links"] : null);
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        } else {
            // line 114
            echo "                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"load-more-btn\">
                                <button onclick=\"loaduser()\" class=\"btn-default\"> Load more </button>
                            </div>
                        </div>
                    ";
        }
        // line 120
        echo "                </div>
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">By Trades</span></div>
                            <ul class=\"categories-module\">
                                ";
        // line 126
        $context["selectedCats"] = twig_split_filter($this->env, (isset($context["searchCategories"]) ? $context["searchCategories"] : null), ",");
        // line 127
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if (($this->getAttribute($context["cat"], "id", array()) != 1)) {
                // line 128
                echo "                                    <li><input type=\"checkbox\" ";
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
        // line 130
        echo "                            </ul>
                        </div>
                        ";
        // line 177
        echo "                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 184
    public function block_footer($context, array $blocks = array())
    {
        // line 185
        echo "    ";
        $this->loadTemplate("candidates.twig", "candidates.twig", 185, "1253670682")->display($context);
    }

    public function getTemplateName()
    {
        return "candidates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 185,  313 => 184,  303 => 177,  299 => 130,  281 => 128,  275 => 127,  273 => 126,  265 => 120,  257 => 114,  249 => 109,  244 => 106,  241 => 105,  230 => 99,  227 => 98,  221 => 96,  215 => 94,  212 => 93,  210 => 92,  205 => 89,  199 => 88,  193 => 86,  190 => 85,  186 => 84,  183 => 83,  181 => 82,  178 => 81,  174 => 79,  170 => 77,  164 => 75,  162 => 74,  157 => 73,  155 => 72,  150 => 71,  144 => 69,  136 => 67,  134 => 66,  131 => 65,  127 => 63,  119 => 61,  117 => 60,  112 => 57,  107 => 56,  104 => 55,  98 => 51,  96 => 50,  68 => 25,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"Seek Jobs through a many of leading top organizations on Getwork.Construction. This website help  you to look for a lot of construction Jobs Online\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Search Construction Jobs in Top Companies | Construction Jobs</title>
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
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"\" class=\"form-control\" name=\"keyword\" placeholder=\"Search candidate with skill or trade\" value=\"{{ keyword }}\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>   
                                <span class=\"search-eg\">e.g. crane supervisor, plumber, SMSTP, PTS, site manager</span>
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"candidateSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
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
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    {% if candidates|length == 0 %}
                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">No Candidate Found !</h4>
                        </div>
                    {% endif %}
                    {% set limit =  role == 3 ? candidates|length : 10 %}
                    {% for candidate in candidates|slice(0,limit) %}
                    \t<div class=\"profile-content\">
                            <div class=\"card\">
                                <div class=\"firstinfo\">
                                    {% if role == 3 %}
                                        <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\"><img src=\"/uploads/{{ candidate.profile_image|default('profile.jpg') }}\" alt=\"find best London jobs\" class=\"img-circle img-responsive\" /></a>
                                    {% else %}
                                        <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\"><img src=\"/uploads/profile.jpg\" alt=\"search Jobs in London\" class=\"img-circle img-responsive\" /></a>
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
\t\t\t\t\t\t\t\t\t\t\t<ul>
                                            {% for skill in skills %}
                                                {% if skill != null %}
                                        \t       <li> {{ skill }} </li>
                                                {% endif %}
                                            {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
                                        </div>
                                        <div class=\"hire-btn\">
                                            {% if role == 3 %}
                                                {% if candidate.shortlisted %}
                                            \t   <a href=\"javascript:void(0);\" data-id=\"{{ candidate.user_id_fk|e }}\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-primary cstm-btn\" ><i class=\"fa fa-filter\"></i> Shortlisted</a>
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
    </div>
</section>
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script>

                function loaduser(){
                    toastr.options = {
                        \"closeButton\": true,
                        \"positionClass\": \"toast-top-center\",
                        \"progressBar\": true,
                        \"showMethod\": \"fadeIn\",
                        \"hideMethod\": \"fadeOut\",
                        \"extendedTimeOut\": \"0\",
                        \"timeOut\": \"0\",
                    }
                    toastr.warning(\"Please login to view more users.\");
                }
                jQuery(\"input[name='candidateSearch']\").on(\"click\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]       =   jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"candidateCat\"]  =   jQuery(\"input[name='candidatecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.candidateSearch(searchData);
                });
                
                jQuery(\".categories-list-page\").on(\"click\",\"input[name='candidatecat']\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]       =   jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"candidateCat\"]  =   jQuery(\"input[name='candidatecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.candidateSearch(searchData);
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "candidates.twig", "/home/getwork/public_html/application/views/candidates.twig");
    }
}


/* candidates.twig */
class __TwigTemplate_2dba62ffcdc626f80c6d359bf3f0c38d5e51e4743918420c08cd65c0d68b4340_1253670682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "candidates.twig", 185);
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

    // line 186
    public function block_customScripts($context, array $blocks = array())
    {
        // line 187
        echo "            <script>

                function loaduser(){
                    toastr.options = {
                        \"closeButton\": true,
                        \"positionClass\": \"toast-top-center\",
                        \"progressBar\": true,
                        \"showMethod\": \"fadeIn\",
                        \"hideMethod\": \"fadeOut\",
                        \"extendedTimeOut\": \"0\",
                        \"timeOut\": \"0\",
                    }
                    toastr.warning(\"Please login to view more users.\");
                }
                jQuery(\"input[name='candidateSearch']\").on(\"click\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]       =   jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"candidateCat\"]  =   jQuery(\"input[name='candidatecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.candidateSearch(searchData);
                });
                
                jQuery(\".categories-list-page\").on(\"click\",\"input[name='candidatecat']\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]       =   jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"candidateCat\"]  =   jQuery(\"input[name='candidatecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.candidateSearch(searchData);
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "candidates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 187,  590 => 186,  316 => 185,  313 => 184,  303 => 177,  299 => 130,  281 => 128,  275 => 127,  273 => 126,  265 => 120,  257 => 114,  249 => 109,  244 => 106,  241 => 105,  230 => 99,  227 => 98,  221 => 96,  215 => 94,  212 => 93,  210 => 92,  205 => 89,  199 => 88,  193 => 86,  190 => 85,  186 => 84,  183 => 83,  181 => 82,  178 => 81,  174 => 79,  170 => 77,  164 => 75,  162 => 74,  157 => 73,  155 => 72,  150 => 71,  144 => 69,  136 => 67,  134 => 66,  131 => 65,  127 => 63,  119 => 61,  117 => 60,  112 => 57,  107 => 56,  104 => 55,  98 => 51,  96 => 50,  68 => 25,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"Seek Jobs through a many of leading top organizations on Getwork.Construction. This website help  you to look for a lot of construction Jobs Online\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Search Construction Jobs in Top Companies | Construction Jobs</title>
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
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"\" class=\"form-control\" name=\"keyword\" placeholder=\"Search candidate with skill or trade\" value=\"{{ keyword }}\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>   
                                <span class=\"search-eg\">e.g. crane supervisor, plumber, SMSTP, PTS, site manager</span>
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"candidateSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
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
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    {% if candidates|length == 0 %}
                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">No Candidate Found !</h4>
                        </div>
                    {% endif %}
                    {% set limit =  role == 3 ? candidates|length : 10 %}
                    {% for candidate in candidates|slice(0,limit) %}
                    \t<div class=\"profile-content\">
                            <div class=\"card\">
                                <div class=\"firstinfo\">
                                    {% if role == 3 %}
                                        <a href=\"/home/profile/{{ candidate.user_id_fk|e }}\"><img src=\"/uploads/{{ candidate.profile_image|default('profile.jpg') }}\" alt=\"find best London jobs\" class=\"img-circle img-responsive\" /></a>
                                    {% else %}
                                        <a href=\"javascript:void(0)\" onclick=\"alert('Sign up as employer to see details')\"><img src=\"/uploads/profile.jpg\" alt=\"search Jobs in London\" class=\"img-circle img-responsive\" /></a>
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
\t\t\t\t\t\t\t\t\t\t\t<ul>
                                            {% for skill in skills %}
                                                {% if skill != null %}
                                        \t       <li> {{ skill }} </li>
                                                {% endif %}
                                            {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
                                        </div>
                                        <div class=\"hire-btn\">
                                            {% if role == 3 %}
                                                {% if candidate.shortlisted %}
                                            \t   <a href=\"javascript:void(0);\" data-id=\"{{ candidate.user_id_fk|e }}\" onclick=\"window.dashboard.shortlist(this)\" class=\"btn-primary cstm-btn\" ><i class=\"fa fa-filter\"></i> Shortlisted</a>
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
    </div>
</section>
{% endblock %}
{% block footer %}
    {% embed \"footer.twig\" %}
        {% block customScripts %}
            <script>

                function loaduser(){
                    toastr.options = {
                        \"closeButton\": true,
                        \"positionClass\": \"toast-top-center\",
                        \"progressBar\": true,
                        \"showMethod\": \"fadeIn\",
                        \"hideMethod\": \"fadeOut\",
                        \"extendedTimeOut\": \"0\",
                        \"timeOut\": \"0\",
                    }
                    toastr.warning(\"Please login to view more users.\");
                }
                jQuery(\"input[name='candidateSearch']\").on(\"click\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]       =   jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"candidateCat\"]  =   jQuery(\"input[name='candidatecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.candidateSearch(searchData);
                });
                
                jQuery(\".categories-list-page\").on(\"click\",\"input[name='candidatecat']\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]       =   jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"candidateCat\"]  =   jQuery(\"input[name='candidatecat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    window.common.candidateSearch(searchData);
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "candidates.twig", "/home/getwork/public_html/application/views/candidates.twig");
    }
}
