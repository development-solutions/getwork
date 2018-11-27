<?php

/* job_list.twig */
class __TwigTemplate_881854e924ae70e375508f0c132548cad8f043b7187bf008737fcc3b064ad26e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "job_list.twig", 1);
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
<section class=\"breadcrumb-search parallex\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form action=\"/home/jobs\" method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" onkeyup=\"window.common.getJobTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                 <input id=\"autocomplete\" onFocus=\"window.common.geolocate()\" type=\"text\" class=\"form-control\" name=\"location\" placeholder=\"Search Location\" value=\"\">
                                <i class=\"icon-map-pin\"></i>
                            </div>
                        </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"submit\" name=\"search\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
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
                    <h4 class=\"search-result-text\">Showing 4 of 4 available job(s)</h4>
                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"all-jobs-list-box\">
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 49
            echo "                            <div class=\"job-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm\">
                                    <div class=\"comp-logo\">
                                        <a href=\"\"> <img src=\"../../images/company/1.png\" class=\"img-responsive\" alt=\"scriptsbundle\"></a>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"job-title-box\">
                                        <a href=\"#\">
                                            <div class=\"job-title\"> ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", array()), "html", null, true);
            echo "</div>
                                        </a>
                                        <a href=\"#\"><span class=\"comp-name\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company_name", array()), "html", null, true);
            echo "</span></a>
                                    </div>
                                </div>

                                <div class=\"col-md-2 col-sm-3 col-xs-6\">
                                    <a href=\"#\">
                                        <div class=\"job-type jt-remote-color\">
                                            <i class=\"fa fa-clock-o\"></i> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "job_type", array()), "html", null, true);
            echo "
                                        </div>
                                    </a>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"/home/jobdetails/";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-custom\">Details</a>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
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
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Hot Categories</span></div>
                            <ul class=\"categories-module\">
                                <li> <a href=\"\"> Computer and IT <span>(1021)</span> </a> </li>
                                <li> <a href=\"\"> Construction / Facilities <span>(54)</span> </a> </li>
                                <li> <a href=\"\"> Telecommunications<span>(13)</span> </a> </li>
                                <li> <a href=\"\"> Real Estate<span>(23)</span> </a> </li>
                                <li> <a href=\"\"> Healthcare <span>(42)</span> </a> </li>
                            </ul>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Hot Jobs</span></div>
                            <ul class=\"related-post\">
                                <li>
                                    <a href=\"#\">Assistant Manager Procurement </a>
                                    <span><i class=\"fa fa-map-marker\"></i>Managgo, WC </span>
                                    <span><i class=\"fa fa-calendar\"></i>March 22, 2015 - Apr 07, 2016 </span>
                                </li>
                                <li>
                                    <a href=\"#\">Marketing Professionals Required</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                    <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015 - Aug 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Mobile App Programmers </a>
                                    <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                    <span><i class=\"fa fa-calendar\"></i>Feb 01, 2015 - March 09, 2016 </span>
                                </li>
                                <li>
                                    <a href=\"#\">General Compliance Officer</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Arlington, VA </span>
                                    <span><i class=\"fa fa-calendar\"></i>Jun 01, 2015 - Feb 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Call Centre Manager</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Managgo, WC  </span>
                                    <span><i class=\"fa fa-calendar\"></i>Feb 01, 2015 - March 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Assistant Manager Audit</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Heling, WC </span>
                                    <span><i class=\"fa fa-calendar\"></i>Aug 01, 2015 - Sep 09, 2016 </span>
                                </li>
                                <li>
                                    <a href=\"#\">Telesales Agent (UK Dialing)</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Somro, New </span>
                                    <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015 - Nov 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Assistant Brand Manager</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Heritage, VA </span>
                                    <span><i class=\"fa fa-calendar\"></i>Dec 01, 2015 - May 09, 2016</span>
                                </li>
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "job_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 76,  115 => 72,  107 => 67,  97 => 60,  92 => 58,  81 => 49,  77 => 48,  31 => 4,  28 => 3,  11 => 1,);
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

<section class=\"breadcrumb-search parallex\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form action=\"/home/jobs\" method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" onkeyup=\"window.common.getJobTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                 <input id=\"autocomplete\" onFocus=\"window.common.geolocate()\" type=\"text\" class=\"form-control\" name=\"location\" placeholder=\"Search Location\" value=\"\">
                                <i class=\"icon-map-pin\"></i>
                            </div>
                        </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"submit\" name=\"search\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
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
                    <h4 class=\"search-result-text\">Showing 4 of 4 available job(s)</h4>
                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"all-jobs-list-box\">
                        {% for job in jobs %}
                            <div class=\"job-box\">
                                <div class=\"col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm\">
                                    <div class=\"comp-logo\">
                                        <a href=\"\"> <img src=\"../../images/company/1.png\" class=\"img-responsive\" alt=\"scriptsbundle\"></a>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12 nopadding\">
                                    <div class=\"job-title-box\">
                                        <a href=\"#\">
                                            <div class=\"job-title\"> {{ job.title }}</div>
                                        </a>
                                        <a href=\"#\"><span class=\"comp-name\">{{ job.company_name }}</span></a>
                                    </div>
                                </div>

                                <div class=\"col-md-2 col-sm-3 col-xs-6\">
                                    <a href=\"#\">
                                        <div class=\"job-type jt-remote-color\">
                                            <i class=\"fa fa-clock-o\"></i> {{ job.job_type }}
                                        </div>
                                    </a>
                                </div>
                                <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                    <a href=\"/home/jobdetails/{{ job.id }}\" class=\"btn btn-primary btn-custom\">Details</a>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
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
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Hot Categories</span></div>
                            <ul class=\"categories-module\">
                                <li> <a href=\"\"> Computer and IT <span>(1021)</span> </a> </li>
                                <li> <a href=\"\"> Construction / Facilities <span>(54)</span> </a> </li>
                                <li> <a href=\"\"> Telecommunications<span>(13)</span> </a> </li>
                                <li> <a href=\"\"> Real Estate<span>(23)</span> </a> </li>
                                <li> <a href=\"\"> Healthcare <span>(42)</span> </a> </li>
                            </ul>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Hot Jobs</span></div>
                            <ul class=\"related-post\">
                                <li>
                                    <a href=\"#\">Assistant Manager Procurement </a>
                                    <span><i class=\"fa fa-map-marker\"></i>Managgo, WC </span>
                                    <span><i class=\"fa fa-calendar\"></i>March 22, 2015 - Apr 07, 2016 </span>
                                </li>
                                <li>
                                    <a href=\"#\">Marketing Professionals Required</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                    <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015 - Aug 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Mobile App Programmers </a>
                                    <span><i class=\"fa fa-map-marker\"></i>Homelando, New Vage </span>
                                    <span><i class=\"fa fa-calendar\"></i>Feb 01, 2015 - March 09, 2016 </span>
                                </li>
                                <li>
                                    <a href=\"#\">General Compliance Officer</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Arlington, VA </span>
                                    <span><i class=\"fa fa-calendar\"></i>Jun 01, 2015 - Feb 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Call Centre Manager</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Managgo, WC  </span>
                                    <span><i class=\"fa fa-calendar\"></i>Feb 01, 2015 - March 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Assistant Manager Audit</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Heling, WC </span>
                                    <span><i class=\"fa fa-calendar\"></i>Aug 01, 2015 - Sep 09, 2016 </span>
                                </li>
                                <li>
                                    <a href=\"#\">Telesales Agent (UK Dialing)</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Somro, New </span>
                                    <span><i class=\"fa fa-calendar\"></i>Sep 01, 2015 - Nov 09, 2016</span>
                                </li>
                                <li>
                                    <a href=\"#\">Assistant Brand Manager</a>
                                    <span><i class=\"fa fa-map-marker\"></i>Heritage, VA </span>
                                    <span><i class=\"fa fa-calendar\"></i>Dec 01, 2015 - May 09, 2016</span>
                                </li>
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "job_list.twig", "/home/frescihp/public_html/getwork/application/views/job_list.twig");
    }
}
