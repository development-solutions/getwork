<?php

/* addcourse.twig */
class __TwigTemplate_a39110422bba6526aebfcc1cae9bbae4c856a2c882f452e65497d11e1463eac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "addcourse.twig", 1);
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
        $this->loadTemplate("employer_navigation.twig", "addcourse.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
        \t<div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                ";
        // line 13
        $this->loadTemplate("employer_sidebar.twig", "addcourse.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Add Course</p>
                    </div>
                    <div class=\"profile-edit row\">
                        <form method=\"post\" action=\"/dashboard/addcourse\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Course Title :<span class=\"required\"></span></label>
                                    <input type=\"text\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "html", null, true);
        echo "\" name=\"title\" placeholder=\"Course Title\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "title", array());
        echo "\">
                                </div>
                            </div>                           
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Qualification Required</label>
                                    <input type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "qualification", array()), "html", null, true);
        echo "\" name=\"qualification\" placeholder=\"Qualification\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "qualification", array());
        echo "\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group cstm-select\">
                                    <label>Course Type</label>
                                    <select name=\"course_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 35
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "course_type", array());
        echo "\">
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseType"]) ? $context["courseType"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 37
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["course"], "id", array()) == $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "course_type_fk", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "course_type", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Course Duration</label>
                                    <input type=\"text\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "duration", array()), "html", null, true);
        echo "\" name=\"duration\" placeholder=\"Duration\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "duration", array());
        echo "\">
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12 nopaddingright\">
                                <div class=\"form-group\">
                                    <label>Price</label>
                                    <input type=\"text\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "price", array()), "html", null, true);
        echo "\" name=\"price\" placeholder=\"Course Price\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "price", array());
        echo "\">   
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12 nopaddingleft\">
                                <div class=\"form-group cstm-select\">
                                    <label>Price Type</label>
                                    <select name=\"price_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 57
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "price_type", array());
        echo "\">
                                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["priceType"]) ? $context["priceType"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 59
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["price"], "id", array()) == $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "price_type_fk", array()))) {
                echo "selected";
            }
            echo " >/";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["price"], "price_type", array())), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                    </select>  
                                </div>
                            </div>
                             <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group cstm-select\">
                                    <label>Category</label>
                                    <select name=\"category\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 67
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "category", array());
        echo "\">
                                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 69
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["category"], "id", array()) == $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "category_fk", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "course_category", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    
                                    </select>
                                </div>
                            </div>                           
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Course description</label>
                                    <textarea id=\"ckeditor\" name=\"description\" placeholder=\"Course Description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 77
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "description", array());
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "description", array()), "html", null, true);
        echo "</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                ";
        // line 81
        if ((isset($context["verified"]) ? $context["verified"] : null)) {
            // line 82
            echo "                                    <input class=\"btn btn-default pull-right\" value=\"Add Course\" name=\"add\" type=\"submit\"/>
                                ";
        } else {
            // line 84
            echo "                                    <a href=\"javascript:void(0)\" onclick=\"alert('Please verify email to add Course.')\" class=\"btn btn-default pull-right\">Add Course</a>
                                ";
        }
        // line 86
        echo "                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 94
        if (((isset($context["verified"]) ? $context["verified"] : null) == 0)) {
            // line 95
            echo "    <script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\",
            \"extendedTimeOut\": \"0\",
            \"timeOut\": \"0\",
        }
        toastr.error(\"Please verify your email to add course.\");
    },500);
    </script>
";
        }
    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        // line 112
        echo "    ";
        $this->loadTemplate("addcourse.twig", "addcourse.twig", 112, "1779830944")->display($context);
    }

    public function getTemplateName()
    {
        return "addcourse.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 112,  249 => 111,  230 => 95,  228 => 94,  218 => 86,  214 => 84,  210 => 82,  208 => 81,  199 => 77,  190 => 70,  175 => 69,  171 => 68,  167 => 67,  159 => 61,  144 => 59,  140 => 58,  136 => 57,  125 => 51,  114 => 45,  106 => 39,  91 => 37,  87 => 36,  83 => 35,  72 => 29,  61 => 23,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
        \t<div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Add Course</p>
                    </div>
                    <div class=\"profile-edit row\">
                        <form method=\"post\" action=\"/dashboard/addcourse\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Course Title :<span class=\"required\"></span></label>
                                    <input type=\"text\" value=\"{{ fields.title }}\" name=\"title\" placeholder=\"Course Title\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.title|raw }}\">
                                </div>
                            </div>                           
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Qualification Required</label>
                                    <input type=\"text\" value=\"{{ fields.qualification }}\" name=\"qualification\" placeholder=\"Qualification\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.qualification|raw }}\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group cstm-select\">
                                    <label>Course Type</label>
                                    <select name=\"course_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.course_type|raw }}\">
                                        {% for course in courseType %}
                                            <option value=\"{{ course.id }}\" {% if course.id == fields.course_type_fk %}selected{% endif %}>{{ course.course_type }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Course Duration</label>
                                    <input type=\"text\" value=\"{{ fields.duration }}\" name=\"duration\" placeholder=\"Duration\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.duration|raw }}\">
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12 nopaddingright\">
                                <div class=\"form-group\">
                                    <label>Price</label>
                                    <input type=\"text\" value=\"{{ fields.price }}\" name=\"price\" placeholder=\"Course Price\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.price|raw }}\">   
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12 nopaddingleft\">
                                <div class=\"form-group cstm-select\">
                                    <label>Price Type</label>
                                    <select name=\"price_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.price_type|raw }}\">
                                        {% for price in priceType %}
                                            <option value=\"{{ price.id }}\" {% if price.id == fields.price_type_fk %}selected{% endif %} >/{{ price.price_type|capitalize }}</option>
                                        {% endfor %}
                                    </select>  
                                </div>
                            </div>
                             <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group cstm-select\">
                                    <label>Category</label>
                                    <select name=\"category\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.category|raw }}\">
                                        {% for category in categories %}
                                            <option value=\"{{ category.id }}\" {% if category.id == fields.category_fk %}selected{% endif %}>{{ category.course_category }}</option>
                                        {% endfor %}    
                                    </select>
                                </div>
                            </div>                           
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Course description</label>
                                    <textarea id=\"ckeditor\" name=\"description\" placeholder=\"Course Description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.description|raw }}\">{{ fields.description }}</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                {% if verified %}
                                    <input class=\"btn btn-default pull-right\" value=\"Add Course\" name=\"add\" type=\"submit\"/>
                                {% else %}
                                    <a href=\"javascript:void(0)\" onclick=\"alert('Please verify email to add Course.')\" class=\"btn btn-default pull-right\">Add Course</a>
                                {% endif %}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% if verified == 0 %}
    <script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\",
            \"extendedTimeOut\": \"0\",
            \"timeOut\": \"0\",
        }
        toastr.error(\"Please verify your email to add course.\");
    },500);
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
                   CKEDITOR.replace(\"ckeditor\");
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "addcourse.twig", "/home/getwork/public_html/application/views/addcourse.twig");
    }
}


/* addcourse.twig */
class __TwigTemplate_a39110422bba6526aebfcc1cae9bbae4c856a2c882f452e65497d11e1463eac5_1779830944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "addcourse.twig", 112);
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

    // line 113
    public function block_customScripts($context, array $blocks = array())
    {
        // line 114
        echo "            <script type=\"text/javascript\">
                jQuery(document).ready(function(){
                   ";
        // line 116
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 117
            echo "                        jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                   ";
        }
        // line 119
        echo "                   CKEDITOR.replace(\"ckeditor\");
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "addcourse.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 119,  442 => 117,  440 => 116,  436 => 114,  433 => 113,  252 => 112,  249 => 111,  230 => 95,  228 => 94,  218 => 86,  214 => 84,  210 => 82,  208 => 81,  199 => 77,  190 => 70,  175 => 69,  171 => 68,  167 => 67,  159 => 61,  144 => 59,  140 => 58,  136 => 57,  125 => 51,  114 => 45,  106 => 39,  91 => 37,  87 => 36,  83 => 35,  72 => 29,  61 => 23,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
        \t<div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                {% include 'employer_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Add Course</p>
                    </div>
                    <div class=\"profile-edit row\">
                        <form method=\"post\" action=\"/dashboard/addcourse\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Course Title :<span class=\"required\"></span></label>
                                    <input type=\"text\" value=\"{{ fields.title }}\" name=\"title\" placeholder=\"Course Title\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.title|raw }}\">
                                </div>
                            </div>                           
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Qualification Required</label>
                                    <input type=\"text\" value=\"{{ fields.qualification }}\" name=\"qualification\" placeholder=\"Qualification\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.qualification|raw }}\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group cstm-select\">
                                    <label>Course Type</label>
                                    <select name=\"course_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.course_type|raw }}\">
                                        {% for course in courseType %}
                                            <option value=\"{{ course.id }}\" {% if course.id == fields.course_type_fk %}selected{% endif %}>{{ course.course_type }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Course Duration</label>
                                    <input type=\"text\" value=\"{{ fields.duration }}\" name=\"duration\" placeholder=\"Duration\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.duration|raw }}\">
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12 nopaddingright\">
                                <div class=\"form-group\">
                                    <label>Price</label>
                                    <input type=\"text\" value=\"{{ fields.price }}\" name=\"price\" placeholder=\"Course Price\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.price|raw }}\">   
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12 nopaddingleft\">
                                <div class=\"form-group cstm-select\">
                                    <label>Price Type</label>
                                    <select name=\"price_type\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.price_type|raw }}\">
                                        {% for price in priceType %}
                                            <option value=\"{{ price.id }}\" {% if price.id == fields.price_type_fk %}selected{% endif %} >/{{ price.price_type|capitalize }}</option>
                                        {% endfor %}
                                    </select>  
                                </div>
                            </div>
                             <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group cstm-select\">
                                    <label>Category</label>
                                    <select name=\"category\" class=\"questions-category form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.category|raw }}\">
                                        {% for category in categories %}
                                            <option value=\"{{ category.id }}\" {% if category.id == fields.category_fk %}selected{% endif %}>{{ category.course_category }}</option>
                                        {% endfor %}    
                                    </select>
                                </div>
                            </div>                           
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"form-group\">
                                    <label>Course description</label>
                                    <textarea id=\"ckeditor\" name=\"description\" placeholder=\"Course Description\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.description|raw }}\">{{ fields.description }}</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                {% if verified %}
                                    <input class=\"btn btn-default pull-right\" value=\"Add Course\" name=\"add\" type=\"submit\"/>
                                {% else %}
                                    <a href=\"javascript:void(0)\" onclick=\"alert('Please verify email to add Course.')\" class=\"btn btn-default pull-right\">Add Course</a>
                                {% endif %}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% if verified == 0 %}
    <script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\",
            \"extendedTimeOut\": \"0\",
            \"timeOut\": \"0\",
        }
        toastr.error(\"Please verify your email to add course.\");
    },500);
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
                   CKEDITOR.replace(\"ckeditor\");
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "addcourse.twig", "/home/getwork/public_html/application/views/addcourse.twig");
    }
}
