<?php

/* applicant_message.twig */
class __TwigTemplate_15882df6f7bff4750b842dcfa50fda88c87f004b6f986be464401785e754434b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "applicant_message.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
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
    public function block_navigation($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("applicant_navigation.twig", "applicant_message.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard-body inbox-page\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                ";
        // line 13
        $this->loadTemplate("applicant_sidebar.twig", "applicant_message.twig", 13)->display($context);
        // line 14
        echo "                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\"> Messages List</p>
                    </div>
                    ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) == 0)) {
            // line 19
            echo "                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">You have 0 messages.</h4>
                        </div>
                    ";
        }
        // line 23
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 24
            echo "                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                <span class=\"glyphicon glyphicon-comment\"></span> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "company_name", array()), "html", null, true);
            echo "
                                <span class=\"badge\"> unread ";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute($context["msg"], "msgCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["msg"], "msgCount", array()), 0)) : (0)), "html", null, true);
            echo " </span>
                                <div class=\"btn-group pull-right\">
                                    <a type=\"button\" class=\"btn btn-primary btn-xs\" data-id=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "msg_from", array()), "html", null, true);
            echo "\" onclick=\"window.profile.loadMsg(this)\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                        <span class=\"glyphicon glyphicon-chevron-down\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"panel-collapse collapse\" id=\"collapse";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                <div class=\"panel-body\">
                                    <ul class=\"chat\"></ul>
                                </div>
                                <div class=\"panel-footer clearfix\">
                                    <textarea class=\"form-control\" rows=\"3\"></textarea>
                                    <span class=\"col-lg-12 col-md-12 col-xs-12\" style=\"margin-top: 10px\">
                                        <button data-id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "msg_from", array()), "html", null, true);
            echo "\" onclick=\"window.profile.sendMessage(this)\" class=\"btn btn-warning btn-lg pull-right\">Send</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                    ";
        // line 77
        echo "                    ";
        // line 94
        echo "                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "applicant_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 94,  137 => 77,  134 => 47,  114 => 41,  104 => 34,  94 => 29,  89 => 27,  85 => 26,  81 => 24,  63 => 23,  57 => 19,  55 => 18,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
    {% include 'applicant_navigation.twig' %}
{% endblock %}

{% block content %}

<section class=\"dashboard-body inbox-page\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                {% include 'applicant_sidebar.twig' %}
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\"> Messages List</p>
                    </div>
                    {% if messages|length == 0 %}
                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">You have 0 messages.</h4>
                        </div>
                    {% endif %}
                    {% for msg in messages %}
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                <span class=\"glyphicon glyphicon-comment\"></span> {{ msg.company_name}}
                                <span class=\"badge\"> unread {{ msg.msgCount|default(0) }} </span>
                                <div class=\"btn-group pull-right\">
                                    <a type=\"button\" class=\"btn btn-primary btn-xs\" data-id=\"{{ msg.msg_from }}\" onclick=\"window.profile.loadMsg(this)\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ loop.index }}\">
                                        <span class=\"glyphicon glyphicon-chevron-down\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"panel-collapse collapse\" id=\"collapse{{ loop.index }}\">
                                <div class=\"panel-body\">
                                    <ul class=\"chat\"></ul>
                                </div>
                                <div class=\"panel-footer clearfix\">
                                    <textarea class=\"form-control\" rows=\"3\"></textarea>
                                    <span class=\"col-lg-12 col-md-12 col-xs-12\" style=\"margin-top: 10px\">
                                        <button data-id=\"{{ msg.msg_from }}\" onclick=\"window.profile.sendMessage(this)\" class=\"btn btn-warning btn-lg pull-right\">Send</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                    {# <div class=\"all-jobs-list-box2\">
                        {% if messages|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">You have 0 messages.</h4>
                            </div>
                        {% endif %}
                        {% for msg in messages %}
                            <div class=\"job-box job-box-2\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"job-title-box\">
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"job-title\"> {{ msg.subject }}</div>
                                        </a>
                                        <a href=\"javascript:void(0)\"><span class=\"comp-name\"><i class=\"fa fa-calendar\"></i> {{ msg.date|date(\"d M Y\") }}</span></a>
                                        <a href=\"/home/companyinfo/{{ msg.from|e }}\" class=\"job-type jt-remote-color\">
                                            <i class=\"fa fa-user\"></i> {{ msg.company_name }}
                                        </a>
                                    </div>
                                    <p>{{ msg.message }}</p>
                                    <div class=\"expire-job-box\">                                
                                        <span class=\"pull-right\">
                                            <a onclick=\"jQuery('#to').val({{ msg.from|e }})\" class=\"btn btn-default btn-icon\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-reply\"></i> Reply</a>
                                            <a data-id=\"{{ msg.id|e }}\" href=\"javascript:void(0);\" onclick=\"window.profile.deleteMsg(this)\" class=\"btn btn-danger\"> Delete </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div> #}
                    {# <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <ul class=\"pagination\">
                                <li>
                                    <a href=\"#\" aria-label=\"Previous\"> <span aria-hidden=\"true\">«</span> </a>
                                </li>
                                <li class=\"active\"><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li><a href=\"#\">5</a></li>
                                <li>
                                    <a href=\"#\" aria-label=\"Next\"> <span aria-hidden=\"true\">»</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div> #}
                </div>
            </div>
        </div>
    </div>
</section>
{# <div class=\"modal fade apply-job-modal\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body contact-form-container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <div class=\"job-modal\">
                    <h2>Reply to Message</h2>
                </div>
                <form id=\"job-form\">
                    <input id=\"to\" type=\"hidden\" name=\"to\" value=\"\" />
                    <div class=\"row clearfix\">
                        <div class=\"column col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" placeholder=\"Subject\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" placeholder=\"Write your message\" required></textarea>
                            </div>
                        </div>
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"text-center\">
                                <button type=\"button\" onclick=\"window.profile.sendMessage()\" class=\"btn btn-default btn-block\">Send Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> #}
{% endblock %}", "applicant_message.twig", "/home/getwork/public_html/application/views/applicant_message.twig");
    }
}
