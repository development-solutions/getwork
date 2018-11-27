<?php

/* job_list.twig */
class __TwigTemplate_d97d948ef1667b455749bd4bfca890fc00e80b2ae6da8c3e2049fd61154771aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "job_list.twig", 1);
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
    <meta name=\"description\" content=\"Initiate your job seek out and Get your ideal Jobs at getwork.construction, Come across Reviews and Salaries • Fresh Job Postings Everyday • simple Resume Upload Services\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Get Work - Jobs | Find Best Jobs UK | Post Free Jobs Online</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<section class=\"breadcrumb-search parallex job-list\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"window.common.getJobTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                 <input id=\"autocomplete\" autocomplete=\"off\" onFocus=\"window.common.geolocate()\" type=\"text\" class=\"form-control\" name=\"location\" placeholder=\"Search Location\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "\">
                                <i class=\"icon-map-pin\"></i>
                            </div>
                        </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"jobSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
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
                    <h4 class=\"search-result-text\">
                        ";
        // line 56
        if ((((isset($context["keyword"]) ? $context["keyword"] : null) != (isset($context["empty"]) ? $context["empty"] : null)) || ((isset($context["location"]) ? $context["location"] : null) != (isset($context["empty"]) ? $context["empty"] : null)))) {
            // line 57
            echo "                            ";
            echo twig_escape_filter($this->env, (((isset($context["totalResult"]) ? $context["totalResult"] : null) . " ") . (isset($context["keyword"]) ? $context["keyword"] : null)), "html", null, true);
            echo " jobs
                            ";
            // line 58
            if (((isset($context["location"]) ? $context["location"] : null) != (isset($context["empty"]) ? $context["empty"] : null))) {
                echo " in ";
            }
            // line 59
            echo "                            ";
            echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
            echo "
                        ";
        } elseif ((twig_length_filter($this->env,         // line 60
(isset($context["jobs"]) ? $context["jobs"] : null)) == 0)) {
            // line 61
            echo "                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">No Job Found !</h4>
                            </div>
                        ";
        }
        // line 65
        echo "                    </h4>
                    ";
        // line 67
        echo "                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"all-jobs-list-box\">
                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 71
            echo "                            <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                <div class=\"job-title-box\">
                                    ";
            // line 73
            $context["url"] = (($this->getAttribute($context["job"], "url", array())) ? ($this->getAttribute($context["job"], "url", array())) : (("/home/jobdetails/" . $this->getAttribute($context["job"], "id", array()))));
            // line 74
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" target=\"_blank\">
                                        <div class=\"job-title\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", array()), "html", null, true);
            echo "</div>
                                    </a>
                                    <a href=\"#\"><span class=\"job-type comp-name\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company_name", array()), "html", null, true);
            echo "</span></a>
                                </div>

                                <div class=\"job-list-section col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"all-jobs-list-box-onsite col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"all-jobs-list-box-PO col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> ";
            // line 85
            echo twig_escape_filter($this->env, ((twig_escape_filter($this->env, $this->getAttribute($context["job"], "salary", array())) . "/") . $this->getAttribute($context["job"], "salary_type", array())), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"all-jobs-list-box-call col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/";
            // line 88
            echo twig_escape_filter($this->env, (($this->getAttribute($context["job"], "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["job"], "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
            echo "\" alt=\"logo Construction jobs in UK\"></div>
                                    </div>  
                                    <div class=\"all-jobs-list-box-operator col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "job_type", array()), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"all-jobs-list-box-application col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-user\"></i> ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "applications", array()));
            echo " applications</p>
                                    </div>
                                </div>

                                <div class=\"job-list-content col-md-9 col-sm-9 col-xs-12\">
                                    <p>";
            // line 99
            echo twig_slice($this->env, $this->getAttribute($context["job"], "description", array()), 0, 150);
            echo "...<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">Read More</a></p>
                                    <div class=\"expire-job-box\">
                                        <span class=\"expire-date\"> This job will Expire on <strong>
                                            ";
            // line 102
            $context["last_date"] = (($this->getAttribute($context["job"], "last_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["job"], "last_date", array()), "d M, Y")) : ("NA"));
            // line 103
            echo "                                            ";
            echo twig_escape_filter($this->env, (isset($context["last_date"]) ? $context["last_date"] : null), "html", null, true);
            echo "</strong></span>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                ";
        // line 112
        echo (isset($context["links"]) ? $context["links"] : null);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Salary Range</span></div>
                            <div class=\"form-group cstm-select salary-range\">
                                <label>From: <span class=\"required\"></span></label>
                                <select name=\"minsalary\" class=\" form-control\">
                                    <option value=\"\">£ Any</option>
                                    <option value=\"10000\" ";
        // line 125
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 10000)) {
            echo " selected ";
        }
        echo " >Up to £10,000</option>
                                    <option value=\"12000\" ";
        // line 126
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 12000)) {
            echo " selected ";
        }
        echo " >£12,000</option>
                                    <option value=\"14000\" ";
        // line 127
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 14000)) {
            echo " selected ";
        }
        echo " >£14,000</option>
                                    <option value=\"16000\" ";
        // line 128
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 16000)) {
            echo " selected ";
        }
        echo " >£16,000</option>
                                    <option value=\"18000\" ";
        // line 129
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 18000)) {
            echo " selected ";
        }
        echo " >£18,000</option>
                                    <option value=\"20000\" ";
        // line 130
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 20000)) {
            echo " selected ";
        }
        echo " >£20,000</option>
                                    <option value=\"22000\" ";
        // line 131
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 22000)) {
            echo " selected ";
        }
        echo " >£22,000</option>
                                    <option value=\"24000\" ";
        // line 132
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 24000)) {
            echo " selected ";
        }
        echo " >£24,000</option>
                                    <option value=\"26000\" ";
        // line 133
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 26000)) {
            echo " selected ";
        }
        echo " >£26,000</option>
                                    <option value=\"28000\" ";
        // line 134
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 28000)) {
            echo " selected ";
        }
        echo " >£28,000</option>
                                    <option value=\"30000\" ";
        // line 135
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 30000)) {
            echo " selected ";
        }
        echo " >£30,000</option>
                                    <option value=\"32000\" ";
        // line 136
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 32000)) {
            echo " selected ";
        }
        echo " >£32,000</option>
                                    <option value=\"34000\" ";
        // line 137
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 34000)) {
            echo " selected ";
        }
        echo " >£34,000</option>
                                    <option value=\"36000\" ";
        // line 138
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 36000)) {
            echo " selected ";
        }
        echo " >£36,000</option>
                                    <option value=\"38000\" ";
        // line 139
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 38000)) {
            echo " selected ";
        }
        echo " >£38,000</option>
                                    <option value=\"40000\" ";
        // line 140
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 40000)) {
            echo " selected ";
        }
        echo " >£40,000</option>
                                    <option value=\"42000\" ";
        // line 141
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 42000)) {
            echo " selected ";
        }
        echo " >£42,000</option>
                                    <option value=\"44000\" ";
        // line 142
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 44000)) {
            echo " selected ";
        }
        echo " >£44,000</option>
                                    <option value=\"46000\" ";
        // line 143
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 46000)) {
            echo " selected ";
        }
        echo " >£46,000</option>
                                    <option value=\"48000\" ";
        // line 144
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 48000)) {
            echo " selected ";
        }
        echo " >£48,000</option>
                                    <option value=\"50000\" ";
        // line 145
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 50000)) {
            echo " selected ";
        }
        echo " >£50,000</option>
                                    <option value=\"55000\" ";
        // line 146
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 55000)) {
            echo " selected ";
        }
        echo " >£55,000</option>
                                    <option value=\"60000\" ";
        // line 147
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 60000)) {
            echo " selected ";
        }
        echo " >£60,000</option>
                                    <option value=\"65000\" ";
        // line 148
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 65000)) {
            echo " selected ";
        }
        echo " >£65,000</option>
                                    <option value=\"70000\" ";
        // line 149
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 70000)) {
            echo " selected ";
        }
        echo " >£70,000</option>
                                    <option value=\"75000\" ";
        // line 150
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 75000)) {
            echo " selected ";
        }
        echo " >£75,000</option>
                                    <option value=\"80000\" ";
        // line 151
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 80000)) {
            echo " selected ";
        }
        echo " >£80,000</option>
                                    <option value=\"85000\" ";
        // line 152
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 85000)) {
            echo " selected ";
        }
        echo " >£85,000</option>
                                    <option value=\"90000\" ";
        // line 153
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 90000)) {
            echo " selected ";
        }
        echo " >£90,000</option>
                                    <option value=\"95000\" ";
        // line 154
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 95000)) {
            echo " selected ";
        }
        echo " >£95,000</option>
                                    <option value=\"100000\" ";
        // line 155
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 100000)) {
            echo " selected ";
        }
        echo " >£100,000+</option>
                                </select>
                            </div>
                            <div class=\"form-group cstm-select salary-range\">
                                <label>To: <span class=\"required\"></span></label>
                                <select name=\"maxsalary\" class=\" form-control\">
                                    <option value=\"\">£ Any</option>
                                    <option value=\"10000\" ";
        // line 162
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 10000)) {
            echo " selected ";
        }
        echo " >Up to £10,000</option>
                                    <option value=\"12000\" ";
        // line 163
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 12000)) {
            echo " selected ";
        }
        echo " >£12,000</option>
                                    <option value=\"14000\" ";
        // line 164
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 14000)) {
            echo " selected ";
        }
        echo " >£14,000</option>
                                    <option value=\"16000\" ";
        // line 165
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 16000)) {
            echo " selected ";
        }
        echo " >£16,000</option>
                                    <option value=\"18000\" ";
        // line 166
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 18000)) {
            echo " selected ";
        }
        echo " >£18,000</option>
                                    <option value=\"20000\" ";
        // line 167
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 20000)) {
            echo " selected ";
        }
        echo " >£20,000</option>
                                    <option value=\"22000\" ";
        // line 168
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 22000)) {
            echo " selected ";
        }
        echo " >£22,000</option>
                                    <option value=\"24000\" ";
        // line 169
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 24000)) {
            echo " selected ";
        }
        echo " >£24,000</option>
                                    <option value=\"26000\" ";
        // line 170
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 26000)) {
            echo " selected ";
        }
        echo " >£26,000</option>
                                    <option value=\"28000\" ";
        // line 171
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 28000)) {
            echo " selected ";
        }
        echo " >£28,000</option>
                                    <option value=\"30000\" ";
        // line 172
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 30000)) {
            echo " selected ";
        }
        echo " >£30,000</option>
                                    <option value=\"32000\" ";
        // line 173
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 32000)) {
            echo " selected ";
        }
        echo " >£32,000</option>
                                    <option value=\"34000\" ";
        // line 174
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 34000)) {
            echo " selected ";
        }
        echo " >£34,000</option>
                                    <option value=\"36000\" ";
        // line 175
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 36000)) {
            echo " selected ";
        }
        echo " >£36,000</option>
                                    <option value=\"38000\" ";
        // line 176
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 38000)) {
            echo " selected ";
        }
        echo " >£38,000</option>
                                    <option value=\"40000\" ";
        // line 177
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 40000)) {
            echo " selected ";
        }
        echo " >£40,000</option>
                                    <option value=\"42000\" ";
        // line 178
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 42000)) {
            echo " selected ";
        }
        echo " >£42,000</option>
                                    <option value=\"44000\" ";
        // line 179
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 44000)) {
            echo " selected ";
        }
        echo " >£44,000</option>
                                    <option value=\"46000\" ";
        // line 180
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 46000)) {
            echo " selected ";
        }
        echo " >£46,000</option>
                                    <option value=\"48000\" ";
        // line 181
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 48000)) {
            echo " selected ";
        }
        echo " >£48,000</option>
                                    <option value=\"50000\" ";
        // line 182
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 50000)) {
            echo " selected ";
        }
        echo " >£50,000</option>
                                    <option value=\"55000\" ";
        // line 183
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 55000)) {
            echo " selected ";
        }
        echo " >£55,000</option>
                                    <option value=\"60000\" ";
        // line 184
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 60000)) {
            echo " selected ";
        }
        echo " >£60,000</option>
                                    <option value=\"65000\" ";
        // line 185
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 65000)) {
            echo " selected ";
        }
        echo " >£65,000</option>
                                    <option value=\"70000\" ";
        // line 186
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 70000)) {
            echo " selected ";
        }
        echo " >£70,000</option>
                                    <option value=\"75000\" ";
        // line 187
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 75000)) {
            echo " selected ";
        }
        echo " >£75,000</option>
                                    <option value=\"80000\" ";
        // line 188
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 80000)) {
            echo " selected ";
        }
        echo " >£80,000</option>
                                    <option value=\"85000\" ";
        // line 189
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 85000)) {
            echo " selected ";
        }
        echo " >£85,000</option>
                                    <option value=\"90000\" ";
        // line 190
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 90000)) {
            echo " selected ";
        }
        echo " >£90,000</option>
                                    <option value=\"95000\" ";
        // line 191
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 95000)) {
            echo " selected ";
        }
        echo " >£95,000</option>
                                    <option value=\"100000\" ";
        // line 192
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 100000)) {
            echo " selected ";
        }
        echo " >£100,000+</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Job Categories</span></div>
                            <ul class=\"categories-module job-cats\">
                                ";
        // line 199
        $context["selectedCats"] = twig_split_filter($this->env, (isset($context["searchCategories"]) ? $context["searchCategories"] : null), ",");
        // line 200
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if (($this->getAttribute($context["cat"], "id", array()) != 1)) {
                // line 201
                echo "                                    <li><input type=\"checkbox\" ";
                if (twig_in_filter($this->getAttribute($context["cat"], "id", array()), (isset($context["selectedCats"]) ? $context["selectedCats"] : null))) {
                    echo " checked ";
                }
                echo " name=\"jobcat\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
                echo "\"> <a href=\"\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "job_category", array()), "html", null, true);
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "jobsCount", array()), "html", null, true);
                echo ")</span> </a> </li>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                            </ul>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Job Types</span></div>
                            <ul class=\"categories-module job-type\">
                                ";
        // line 208
        $context["selectedTypes"] = twig_split_filter($this->env, (isset($context["searchJobtype"]) ? $context["searchJobtype"] : null), ",");
        // line 209
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobTypes"]) ? $context["jobTypes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 210
            echo "                                    <li><input type=\"checkbox\" ";
            if (twig_in_filter($this->getAttribute($context["type"], "id", array()), (isset($context["selectedTypes"]) ? $context["selectedTypes"] : null))) {
                echo " checked ";
            }
            echo " name=\"jobtype\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\"> <a href=\"\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "job_type", array()), "html", null, true);
            echo "<span>(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "jobsCount", array()), "html", null, true);
            echo ")</span> </a> </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                            </ul>
                        </div>
                        ";
        // line 259
        echo "                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 266
    public function block_footer($context, array $blocks = array())
    {
        // line 267
        echo "    ";
        $this->loadTemplate("job_list.twig", "job_list.twig", 267, "125944044")->display($context);
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
        return array (  699 => 267,  696 => 266,  686 => 259,  682 => 212,  665 => 210,  660 => 209,  658 => 208,  651 => 203,  633 => 201,  627 => 200,  625 => 199,  613 => 192,  607 => 191,  601 => 190,  595 => 189,  589 => 188,  583 => 187,  577 => 186,  571 => 185,  565 => 184,  559 => 183,  553 => 182,  547 => 181,  541 => 180,  535 => 179,  529 => 178,  523 => 177,  517 => 176,  511 => 175,  505 => 174,  499 => 173,  493 => 172,  487 => 171,  481 => 170,  475 => 169,  469 => 168,  463 => 167,  457 => 166,  451 => 165,  445 => 164,  439 => 163,  433 => 162,  421 => 155,  415 => 154,  409 => 153,  403 => 152,  397 => 151,  391 => 150,  385 => 149,  379 => 148,  373 => 147,  367 => 146,  361 => 145,  355 => 144,  349 => 143,  343 => 142,  337 => 141,  331 => 140,  325 => 139,  319 => 138,  313 => 137,  307 => 136,  301 => 135,  295 => 134,  289 => 133,  283 => 132,  277 => 131,  271 => 130,  265 => 129,  259 => 128,  253 => 127,  247 => 126,  241 => 125,  225 => 112,  219 => 108,  207 => 103,  205 => 102,  197 => 99,  189 => 94,  183 => 91,  177 => 88,  171 => 85,  165 => 82,  157 => 77,  152 => 75,  147 => 74,  145 => 73,  141 => 71,  137 => 70,  132 => 67,  129 => 65,  123 => 61,  121 => 60,  116 => 59,  112 => 58,  107 => 57,  105 => 56,  80 => 34,  68 => 25,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"Initiate your job seek out and Get your ideal Jobs at getwork.construction, Come across Reviews and Salaries • Fresh Job Postings Everyday • simple Resume Upload Services\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Get Work - Jobs | Find Best Jobs UK | Post Free Jobs Online</title>
{% endblock %}
{% block content %}

<section class=\"breadcrumb-search parallex job-list\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"window.common.getJobTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"{{ keyword }}\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                 <input id=\"autocomplete\" autocomplete=\"off\" onFocus=\"window.common.geolocate()\" type=\"text\" class=\"form-control\" name=\"location\" placeholder=\"Search Location\" value=\"{{ location }}\">
                                <i class=\"icon-map-pin\"></i>
                            </div>
                        </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"jobSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
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
                    <h4 class=\"search-result-text\">
                        {% if keyword != empty or location != empty %}
                            {{ totalResult ~ \" \" ~keyword }} jobs
                            {% if location != empty %} in {% endif %}
                            {{ location }}
                        {% elseif jobs|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">No Job Found !</h4>
                            </div>
                        {% endif %}
                    </h4>
                    {# <h4 class=\"search-result-text\">Showing 4 of 4 available job(s)</h4> #}
                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"all-jobs-list-box\">
                        {% for job in jobs %}
                            <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                <div class=\"job-title-box\">
                                    {% set url = job.url ? job.url : \"/home/jobdetails/\"~job.id %}
                                    <a href=\"{{ url }}\" target=\"_blank\">
                                        <div class=\"job-title\">{{ job.title }}</div>
                                    </a>
                                    <a href=\"#\"><span class=\"job-type comp-name\">{{ job.company_name }}</span></a>
                                </div>

                                <div class=\"job-list-section col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"all-jobs-list-box-onsite col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> {{ job.location }}</p>
                                    </div>
                                    <div class=\"all-jobs-list-box-PO col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ job.salary|e ~\"/\"~ job.salary_type }}</p>
                                    </div>
                                    <div class=\"all-jobs-list-box-call col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/{{ job.logo|default('logo.jpg') }}\" alt=\"logo Construction jobs in UK\"></div>
                                    </div>  
                                    <div class=\"all-jobs-list-box-operator col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{job.job_type }}</p>
                                    </div>
                                    <div class=\"all-jobs-list-box-application col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-user\"></i> {{ job.applications|e }} applications</p>
                                    </div>
                                </div>

                                <div class=\"job-list-content col-md-9 col-sm-9 col-xs-12\">
                                    <p>{{ job.description|slice(0,150)|raw }}...<a href=\"{{ url }}\">Read More</a></p>
                                    <div class=\"expire-job-box\">
                                        <span class=\"expire-date\"> This job will Expire on <strong>
                                            {% set last_date = job.last_date?job.last_date|date(\"d M, Y\"):\"NA\" %}
                                            {{ last_date }}</strong></span>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                {{ links|raw }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Salary Range</span></div>
                            <div class=\"form-group cstm-select salary-range\">
                                <label>From: <span class=\"required\"></span></label>
                                <select name=\"minsalary\" class=\" form-control\">
                                    <option value=\"\">£ Any</option>
                                    <option value=\"10000\" {% if searchMinSalary == 10000 %} selected {% endif %} >Up to £10,000</option>
                                    <option value=\"12000\" {% if searchMinSalary == 12000 %} selected {% endif %} >£12,000</option>
                                    <option value=\"14000\" {% if searchMinSalary == 14000 %} selected {% endif %} >£14,000</option>
                                    <option value=\"16000\" {% if searchMinSalary == 16000 %} selected {% endif %} >£16,000</option>
                                    <option value=\"18000\" {% if searchMinSalary == 18000 %} selected {% endif %} >£18,000</option>
                                    <option value=\"20000\" {% if searchMinSalary == 20000 %} selected {% endif %} >£20,000</option>
                                    <option value=\"22000\" {% if searchMinSalary == 22000 %} selected {% endif %} >£22,000</option>
                                    <option value=\"24000\" {% if searchMinSalary == 24000 %} selected {% endif %} >£24,000</option>
                                    <option value=\"26000\" {% if searchMinSalary == 26000 %} selected {% endif %} >£26,000</option>
                                    <option value=\"28000\" {% if searchMinSalary == 28000 %} selected {% endif %} >£28,000</option>
                                    <option value=\"30000\" {% if searchMinSalary == 30000 %} selected {% endif %} >£30,000</option>
                                    <option value=\"32000\" {% if searchMinSalary == 32000 %} selected {% endif %} >£32,000</option>
                                    <option value=\"34000\" {% if searchMinSalary == 34000 %} selected {% endif %} >£34,000</option>
                                    <option value=\"36000\" {% if searchMinSalary == 36000 %} selected {% endif %} >£36,000</option>
                                    <option value=\"38000\" {% if searchMinSalary == 38000 %} selected {% endif %} >£38,000</option>
                                    <option value=\"40000\" {% if searchMinSalary == 40000 %} selected {% endif %} >£40,000</option>
                                    <option value=\"42000\" {% if searchMinSalary == 42000 %} selected {% endif %} >£42,000</option>
                                    <option value=\"44000\" {% if searchMinSalary == 44000 %} selected {% endif %} >£44,000</option>
                                    <option value=\"46000\" {% if searchMinSalary == 46000 %} selected {% endif %} >£46,000</option>
                                    <option value=\"48000\" {% if searchMinSalary == 48000 %} selected {% endif %} >£48,000</option>
                                    <option value=\"50000\" {% if searchMinSalary == 50000 %} selected {% endif %} >£50,000</option>
                                    <option value=\"55000\" {% if searchMinSalary == 55000 %} selected {% endif %} >£55,000</option>
                                    <option value=\"60000\" {% if searchMinSalary == 60000 %} selected {% endif %} >£60,000</option>
                                    <option value=\"65000\" {% if searchMinSalary == 65000 %} selected {% endif %} >£65,000</option>
                                    <option value=\"70000\" {% if searchMinSalary == 70000 %} selected {% endif %} >£70,000</option>
                                    <option value=\"75000\" {% if searchMinSalary == 75000 %} selected {% endif %} >£75,000</option>
                                    <option value=\"80000\" {% if searchMinSalary == 80000 %} selected {% endif %} >£80,000</option>
                                    <option value=\"85000\" {% if searchMinSalary == 85000 %} selected {% endif %} >£85,000</option>
                                    <option value=\"90000\" {% if searchMinSalary == 90000 %} selected {% endif %} >£90,000</option>
                                    <option value=\"95000\" {% if searchMinSalary == 95000 %} selected {% endif %} >£95,000</option>
                                    <option value=\"100000\" {% if searchMinSalary == 100000 %} selected {% endif %} >£100,000+</option>
                                </select>
                            </div>
                            <div class=\"form-group cstm-select salary-range\">
                                <label>To: <span class=\"required\"></span></label>
                                <select name=\"maxsalary\" class=\" form-control\">
                                    <option value=\"\">£ Any</option>
                                    <option value=\"10000\" {% if searchMaxSalary == 10000 %} selected {% endif %} >Up to £10,000</option>
                                    <option value=\"12000\" {% if searchMaxSalary == 12000 %} selected {% endif %} >£12,000</option>
                                    <option value=\"14000\" {% if searchMaxSalary == 14000 %} selected {% endif %} >£14,000</option>
                                    <option value=\"16000\" {% if searchMaxSalary == 16000 %} selected {% endif %} >£16,000</option>
                                    <option value=\"18000\" {% if searchMaxSalary == 18000 %} selected {% endif %} >£18,000</option>
                                    <option value=\"20000\" {% if searchMaxSalary == 20000 %} selected {% endif %} >£20,000</option>
                                    <option value=\"22000\" {% if searchMaxSalary == 22000 %} selected {% endif %} >£22,000</option>
                                    <option value=\"24000\" {% if searchMaxSalary == 24000 %} selected {% endif %} >£24,000</option>
                                    <option value=\"26000\" {% if searchMaxSalary == 26000 %} selected {% endif %} >£26,000</option>
                                    <option value=\"28000\" {% if searchMaxSalary == 28000 %} selected {% endif %} >£28,000</option>
                                    <option value=\"30000\" {% if searchMaxSalary == 30000 %} selected {% endif %} >£30,000</option>
                                    <option value=\"32000\" {% if searchMaxSalary == 32000 %} selected {% endif %} >£32,000</option>
                                    <option value=\"34000\" {% if searchMaxSalary == 34000 %} selected {% endif %} >£34,000</option>
                                    <option value=\"36000\" {% if searchMaxSalary == 36000 %} selected {% endif %} >£36,000</option>
                                    <option value=\"38000\" {% if searchMaxSalary == 38000 %} selected {% endif %} >£38,000</option>
                                    <option value=\"40000\" {% if searchMaxSalary == 40000 %} selected {% endif %} >£40,000</option>
                                    <option value=\"42000\" {% if searchMaxSalary == 42000 %} selected {% endif %} >£42,000</option>
                                    <option value=\"44000\" {% if searchMaxSalary == 44000 %} selected {% endif %} >£44,000</option>
                                    <option value=\"46000\" {% if searchMaxSalary == 46000 %} selected {% endif %} >£46,000</option>
                                    <option value=\"48000\" {% if searchMaxSalary == 48000 %} selected {% endif %} >£48,000</option>
                                    <option value=\"50000\" {% if searchMaxSalary == 50000 %} selected {% endif %} >£50,000</option>
                                    <option value=\"55000\" {% if searchMaxSalary == 55000 %} selected {% endif %} >£55,000</option>
                                    <option value=\"60000\" {% if searchMaxSalary == 60000 %} selected {% endif %} >£60,000</option>
                                    <option value=\"65000\" {% if searchMaxSalary == 65000 %} selected {% endif %} >£65,000</option>
                                    <option value=\"70000\" {% if searchMaxSalary == 70000 %} selected {% endif %} >£70,000</option>
                                    <option value=\"75000\" {% if searchMaxSalary == 75000 %} selected {% endif %} >£75,000</option>
                                    <option value=\"80000\" {% if searchMaxSalary == 80000 %} selected {% endif %} >£80,000</option>
                                    <option value=\"85000\" {% if searchMaxSalary == 85000 %} selected {% endif %} >£85,000</option>
                                    <option value=\"90000\" {% if searchMaxSalary == 90000 %} selected {% endif %} >£90,000</option>
                                    <option value=\"95000\" {% if searchMaxSalary == 95000 %} selected {% endif %} >£95,000</option>
                                    <option value=\"100000\" {% if searchMaxSalary == 100000 %} selected {% endif %} >£100,000+</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Job Categories</span></div>
                            <ul class=\"categories-module job-cats\">
                                {% set selectedCats = searchCategories|split(\",\") %}
                                {% for cat in categories if cat.id != 1 %}
                                    <li><input type=\"checkbox\" {% if cat.id in selectedCats %} checked {% endif %} name=\"jobcat\" value=\"{{ cat.id }}\"> <a href=\"\"> {{ cat.job_category }}<span>({{ cat.jobsCount }})</span> </a> </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Job Types</span></div>
                            <ul class=\"categories-module job-type\">
                                {% set selectedTypes = searchJobtype|split(\",\") %}
                                {% for type in jobTypes %}
                                    <li><input type=\"checkbox\" {% if type.id in selectedTypes %} checked {% endif %} name=\"jobtype\" value=\"{{ type.id }}\"> <a href=\"\"> {{ type.job_type }}<span>({{ type.jobsCount }})</span> </a> </li>
                                {% endfor %}
                            </ul>
                        </div>
                        {# <div class=\"widget\">
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

                jQuery(\"input[name='jobSearch']\").on(\"click\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]   = jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"location\"]  = jQuery(\"input[name='location']\").val().trim();
                    searchData[\"minsalary\"] = jQuery(\".salary-range select[name='minsalary']\").val();
                    searchData[\"maxsalary\"] = jQuery(\".salary-range select[name='maxsalary']\").val();
                    searchData[\"jobcat\"]      = jQuery(\"input[name='jobcat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    searchData[\"jobtype\"]     = jQuery(\"input[name='jobtype']:checked\").map(function(){ return \$(this).val(); }).get().join();

                    window.common.jobSearch(searchData);
                });

                jQuery(\".categories-list-page\").on(\"click\",\"input[name='jobcat'], input[name='jobtype']\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]   = jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"location\"]  = jQuery(\"input[name='location']\").val().trim();
                    searchData[\"minsalary\"] = jQuery(\".salary-range select[name='minsalary']\").val();
                    searchData[\"maxsalary\"] = jQuery(\".salary-range select[name='maxsalary']\").val();
                    searchData[\"jobcat\"]      = jQuery(\"input[name='jobcat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    searchData[\"jobtype\"]     = jQuery(\"input[name='jobtype']:checked\").map(function(){ return \$(this).val(); }).get().join();

                    window.common.jobSearch(searchData);
                });

                jQuery(\".categories-list-page\").on(\"change\",\"select[name='minsalary'], select[name='maxsalary']\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]   = jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"location\"]  = jQuery(\"input[name='location']\").val().trim();
                    searchData[\"minsalary\"] = jQuery(\".salary-range select[name='minsalary']\").val();
                    searchData[\"maxsalary\"] = jQuery(\".salary-range select[name='maxsalary']\").val();
                    searchData[\"jobcat\"]      = jQuery(\"input[name='jobcat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    searchData[\"jobtype\"]     = jQuery(\"input[name='jobtype']:checked\").map(function(){ return \$(this).val(); }).get().join();

                    window.common.jobSearch(searchData);
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "job_list.twig", "/home/getwork/public_html/application/views/job_list.twig");
    }
}


/* job_list.twig */
class __TwigTemplate_d97d948ef1667b455749bd4bfca890fc00e80b2ae6da8c3e2049fd61154771aa_125944044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "job_list.twig", 267);
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

    // line 268
    public function block_customScripts($context, array $blocks = array())
    {
        // line 269
        echo "            <script>

                jQuery(\"input[name='jobSearch']\").on(\"click\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]   = jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"location\"]  = jQuery(\"input[name='location']\").val().trim();
                    searchData[\"minsalary\"] = jQuery(\".salary-range select[name='minsalary']\").val();
                    searchData[\"maxsalary\"] = jQuery(\".salary-range select[name='maxsalary']\").val();
                    searchData[\"jobcat\"]      = jQuery(\"input[name='jobcat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    searchData[\"jobtype\"]     = jQuery(\"input[name='jobtype']:checked\").map(function(){ return \$(this).val(); }).get().join();

                    window.common.jobSearch(searchData);
                });

                jQuery(\".categories-list-page\").on(\"click\",\"input[name='jobcat'], input[name='jobtype']\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]   = jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"location\"]  = jQuery(\"input[name='location']\").val().trim();
                    searchData[\"minsalary\"] = jQuery(\".salary-range select[name='minsalary']\").val();
                    searchData[\"maxsalary\"] = jQuery(\".salary-range select[name='maxsalary']\").val();
                    searchData[\"jobcat\"]      = jQuery(\"input[name='jobcat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    searchData[\"jobtype\"]     = jQuery(\"input[name='jobtype']:checked\").map(function(){ return \$(this).val(); }).get().join();

                    window.common.jobSearch(searchData);
                });

                jQuery(\".categories-list-page\").on(\"change\",\"select[name='minsalary'], select[name='maxsalary']\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]   = jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"location\"]  = jQuery(\"input[name='location']\").val().trim();
                    searchData[\"minsalary\"] = jQuery(\".salary-range select[name='minsalary']\").val();
                    searchData[\"maxsalary\"] = jQuery(\".salary-range select[name='maxsalary']\").val();
                    searchData[\"jobcat\"]      = jQuery(\"input[name='jobcat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    searchData[\"jobtype\"]     = jQuery(\"input[name='jobtype']:checked\").map(function(){ return \$(this).val(); }).get().join();

                    window.common.jobSearch(searchData);
                });
            </script>
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
        return array (  1068 => 269,  1065 => 268,  699 => 267,  696 => 266,  686 => 259,  682 => 212,  665 => 210,  660 => 209,  658 => 208,  651 => 203,  633 => 201,  627 => 200,  625 => 199,  613 => 192,  607 => 191,  601 => 190,  595 => 189,  589 => 188,  583 => 187,  577 => 186,  571 => 185,  565 => 184,  559 => 183,  553 => 182,  547 => 181,  541 => 180,  535 => 179,  529 => 178,  523 => 177,  517 => 176,  511 => 175,  505 => 174,  499 => 173,  493 => 172,  487 => 171,  481 => 170,  475 => 169,  469 => 168,  463 => 167,  457 => 166,  451 => 165,  445 => 164,  439 => 163,  433 => 162,  421 => 155,  415 => 154,  409 => 153,  403 => 152,  397 => 151,  391 => 150,  385 => 149,  379 => 148,  373 => 147,  367 => 146,  361 => 145,  355 => 144,  349 => 143,  343 => 142,  337 => 141,  331 => 140,  325 => 139,  319 => 138,  313 => 137,  307 => 136,  301 => 135,  295 => 134,  289 => 133,  283 => 132,  277 => 131,  271 => 130,  265 => 129,  259 => 128,  253 => 127,  247 => 126,  241 => 125,  225 => 112,  219 => 108,  207 => 103,  205 => 102,  197 => 99,  189 => 94,  183 => 91,  177 => 88,  171 => 85,  165 => 82,  157 => 77,  152 => 75,  147 => 74,  145 => 73,  141 => 71,  137 => 70,  132 => 67,  129 => 65,  123 => 61,  121 => 60,  116 => 59,  112 => 58,  107 => 57,  105 => 56,  80 => 34,  68 => 25,  56 => 15,  53 => 14,  48 => 12,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"Initiate your job seek out and Get your ideal Jobs at getwork.construction, Come across Reviews and Salaries • Fresh Job Postings Everyday • simple Resume Upload Services\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Get Work - Jobs | Find Best Jobs UK | Post Free Jobs Online</title>
{% endblock %}
{% block content %}

<section class=\"breadcrumb-search parallex job-list\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-8 col-sm-12 col-md-offset-2 col-xs-12 nopadding\">
                    <div class=\"search-form-contaner\">
                        <form method=\"post\" class=\"form-inline\">
                            <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                                <div class=\"form-group\">                                
                                    <input type=\"text\" autocomplete=\"off\" onkeyup=\"window.common.getJobTitle(this.value)\" class=\"form-control\" name=\"keyword\" placeholder=\"Search Keyword\" value=\"{{ keyword }}\">
                                    <i class=\"icon-magnifying-glass\"></i>
                                </div>                            
                                <div id=\"keywords\">
                                    <ul class=\"drop-down-multilevel effect-fade\"></ul>
                                </div>
                            </div>
                            <div class=\"col-md-5 col-sm-5 col-xs-12 nopadding\">
                            <div class=\"form-group\">
                                 <input id=\"autocomplete\" autocomplete=\"off\" onFocus=\"window.common.geolocate()\" type=\"text\" class=\"form-control\" name=\"location\" placeholder=\"Search Location\" value=\"{{ location }}\">
                                <i class=\"icon-map-pin\"></i>
                            </div>
                        </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 nopadding\">
                                <div class=\"form-group form-action\">
                                    <input type=\"button\" name=\"jobSearch\" value=\"Search\" class=\"btn btn-default btn-search-submit\" />
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
                    <h4 class=\"search-result-text\">
                        {% if keyword != empty or location != empty %}
                            {{ totalResult ~ \" \" ~keyword }} jobs
                            {% if location != empty %} in {% endif %}
                            {{ location }}
                        {% elseif jobs|length == 0 %}
                            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                <h4 class=\"search-result-text\">No Job Found !</h4>
                            </div>
                        {% endif %}
                    </h4>
                    {# <h4 class=\"search-result-text\">Showing 4 of 4 available job(s)</h4> #}
                </div>
                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"all-jobs-list-box\">
                        {% for job in jobs %}
                            <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                                <div class=\"job-title-box\">
                                    {% set url = job.url ? job.url : \"/home/jobdetails/\"~job.id %}
                                    <a href=\"{{ url }}\" target=\"_blank\">
                                        <div class=\"job-title\">{{ job.title }}</div>
                                    </a>
                                    <a href=\"#\"><span class=\"job-type comp-name\">{{ job.company_name }}</span></a>
                                </div>

                                <div class=\"job-list-section col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"all-jobs-list-box-onsite col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> {{ job.location }}</p>
                                    </div>
                                    <div class=\"all-jobs-list-box-PO col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ job.salary|e ~\"/\"~ job.salary_type }}</p>
                                    </div>
                                    <div class=\"all-jobs-list-box-call col-md-4 col-sm-4 col-xs-12\">
                                        <div class=\"joblistlogo\"><img src=\"/uploads/{{ job.logo|default('logo.jpg') }}\" alt=\"logo Construction jobs in UK\"></div>
                                    </div>  
                                    <div class=\"all-jobs-list-box-operator col-md-4 col-sm-4 col-xs-12\">
                                        <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{job.job_type }}</p>
                                    </div>
                                    <div class=\"all-jobs-list-box-application col-md-4 col-sm-4 col-xs-12\">
                                        <p><i class=\"fa fa-user\"></i> {{ job.applications|e }} applications</p>
                                    </div>
                                </div>

                                <div class=\"job-list-content col-md-9 col-sm-9 col-xs-12\">
                                    <p>{{ job.description|slice(0,150)|raw }}...<a href=\"{{ url }}\">Read More</a></p>
                                    <div class=\"expire-job-box\">
                                        <span class=\"expire-date\"> This job will Expire on <strong>
                                            {% set last_date = job.last_date?job.last_date|date(\"d M, Y\"):\"NA\" %}
                                            {{ last_date }}</strong></span>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"pagination-box clearfix\">
                            <div class=\"cstm-pagination pagination\">
                                {{ links|raw }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <aside>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Salary Range</span></div>
                            <div class=\"form-group cstm-select salary-range\">
                                <label>From: <span class=\"required\"></span></label>
                                <select name=\"minsalary\" class=\" form-control\">
                                    <option value=\"\">£ Any</option>
                                    <option value=\"10000\" {% if searchMinSalary == 10000 %} selected {% endif %} >Up to £10,000</option>
                                    <option value=\"12000\" {% if searchMinSalary == 12000 %} selected {% endif %} >£12,000</option>
                                    <option value=\"14000\" {% if searchMinSalary == 14000 %} selected {% endif %} >£14,000</option>
                                    <option value=\"16000\" {% if searchMinSalary == 16000 %} selected {% endif %} >£16,000</option>
                                    <option value=\"18000\" {% if searchMinSalary == 18000 %} selected {% endif %} >£18,000</option>
                                    <option value=\"20000\" {% if searchMinSalary == 20000 %} selected {% endif %} >£20,000</option>
                                    <option value=\"22000\" {% if searchMinSalary == 22000 %} selected {% endif %} >£22,000</option>
                                    <option value=\"24000\" {% if searchMinSalary == 24000 %} selected {% endif %} >£24,000</option>
                                    <option value=\"26000\" {% if searchMinSalary == 26000 %} selected {% endif %} >£26,000</option>
                                    <option value=\"28000\" {% if searchMinSalary == 28000 %} selected {% endif %} >£28,000</option>
                                    <option value=\"30000\" {% if searchMinSalary == 30000 %} selected {% endif %} >£30,000</option>
                                    <option value=\"32000\" {% if searchMinSalary == 32000 %} selected {% endif %} >£32,000</option>
                                    <option value=\"34000\" {% if searchMinSalary == 34000 %} selected {% endif %} >£34,000</option>
                                    <option value=\"36000\" {% if searchMinSalary == 36000 %} selected {% endif %} >£36,000</option>
                                    <option value=\"38000\" {% if searchMinSalary == 38000 %} selected {% endif %} >£38,000</option>
                                    <option value=\"40000\" {% if searchMinSalary == 40000 %} selected {% endif %} >£40,000</option>
                                    <option value=\"42000\" {% if searchMinSalary == 42000 %} selected {% endif %} >£42,000</option>
                                    <option value=\"44000\" {% if searchMinSalary == 44000 %} selected {% endif %} >£44,000</option>
                                    <option value=\"46000\" {% if searchMinSalary == 46000 %} selected {% endif %} >£46,000</option>
                                    <option value=\"48000\" {% if searchMinSalary == 48000 %} selected {% endif %} >£48,000</option>
                                    <option value=\"50000\" {% if searchMinSalary == 50000 %} selected {% endif %} >£50,000</option>
                                    <option value=\"55000\" {% if searchMinSalary == 55000 %} selected {% endif %} >£55,000</option>
                                    <option value=\"60000\" {% if searchMinSalary == 60000 %} selected {% endif %} >£60,000</option>
                                    <option value=\"65000\" {% if searchMinSalary == 65000 %} selected {% endif %} >£65,000</option>
                                    <option value=\"70000\" {% if searchMinSalary == 70000 %} selected {% endif %} >£70,000</option>
                                    <option value=\"75000\" {% if searchMinSalary == 75000 %} selected {% endif %} >£75,000</option>
                                    <option value=\"80000\" {% if searchMinSalary == 80000 %} selected {% endif %} >£80,000</option>
                                    <option value=\"85000\" {% if searchMinSalary == 85000 %} selected {% endif %} >£85,000</option>
                                    <option value=\"90000\" {% if searchMinSalary == 90000 %} selected {% endif %} >£90,000</option>
                                    <option value=\"95000\" {% if searchMinSalary == 95000 %} selected {% endif %} >£95,000</option>
                                    <option value=\"100000\" {% if searchMinSalary == 100000 %} selected {% endif %} >£100,000+</option>
                                </select>
                            </div>
                            <div class=\"form-group cstm-select salary-range\">
                                <label>To: <span class=\"required\"></span></label>
                                <select name=\"maxsalary\" class=\" form-control\">
                                    <option value=\"\">£ Any</option>
                                    <option value=\"10000\" {% if searchMaxSalary == 10000 %} selected {% endif %} >Up to £10,000</option>
                                    <option value=\"12000\" {% if searchMaxSalary == 12000 %} selected {% endif %} >£12,000</option>
                                    <option value=\"14000\" {% if searchMaxSalary == 14000 %} selected {% endif %} >£14,000</option>
                                    <option value=\"16000\" {% if searchMaxSalary == 16000 %} selected {% endif %} >£16,000</option>
                                    <option value=\"18000\" {% if searchMaxSalary == 18000 %} selected {% endif %} >£18,000</option>
                                    <option value=\"20000\" {% if searchMaxSalary == 20000 %} selected {% endif %} >£20,000</option>
                                    <option value=\"22000\" {% if searchMaxSalary == 22000 %} selected {% endif %} >£22,000</option>
                                    <option value=\"24000\" {% if searchMaxSalary == 24000 %} selected {% endif %} >£24,000</option>
                                    <option value=\"26000\" {% if searchMaxSalary == 26000 %} selected {% endif %} >£26,000</option>
                                    <option value=\"28000\" {% if searchMaxSalary == 28000 %} selected {% endif %} >£28,000</option>
                                    <option value=\"30000\" {% if searchMaxSalary == 30000 %} selected {% endif %} >£30,000</option>
                                    <option value=\"32000\" {% if searchMaxSalary == 32000 %} selected {% endif %} >£32,000</option>
                                    <option value=\"34000\" {% if searchMaxSalary == 34000 %} selected {% endif %} >£34,000</option>
                                    <option value=\"36000\" {% if searchMaxSalary == 36000 %} selected {% endif %} >£36,000</option>
                                    <option value=\"38000\" {% if searchMaxSalary == 38000 %} selected {% endif %} >£38,000</option>
                                    <option value=\"40000\" {% if searchMaxSalary == 40000 %} selected {% endif %} >£40,000</option>
                                    <option value=\"42000\" {% if searchMaxSalary == 42000 %} selected {% endif %} >£42,000</option>
                                    <option value=\"44000\" {% if searchMaxSalary == 44000 %} selected {% endif %} >£44,000</option>
                                    <option value=\"46000\" {% if searchMaxSalary == 46000 %} selected {% endif %} >£46,000</option>
                                    <option value=\"48000\" {% if searchMaxSalary == 48000 %} selected {% endif %} >£48,000</option>
                                    <option value=\"50000\" {% if searchMaxSalary == 50000 %} selected {% endif %} >£50,000</option>
                                    <option value=\"55000\" {% if searchMaxSalary == 55000 %} selected {% endif %} >£55,000</option>
                                    <option value=\"60000\" {% if searchMaxSalary == 60000 %} selected {% endif %} >£60,000</option>
                                    <option value=\"65000\" {% if searchMaxSalary == 65000 %} selected {% endif %} >£65,000</option>
                                    <option value=\"70000\" {% if searchMaxSalary == 70000 %} selected {% endif %} >£70,000</option>
                                    <option value=\"75000\" {% if searchMaxSalary == 75000 %} selected {% endif %} >£75,000</option>
                                    <option value=\"80000\" {% if searchMaxSalary == 80000 %} selected {% endif %} >£80,000</option>
                                    <option value=\"85000\" {% if searchMaxSalary == 85000 %} selected {% endif %} >£85,000</option>
                                    <option value=\"90000\" {% if searchMaxSalary == 90000 %} selected {% endif %} >£90,000</option>
                                    <option value=\"95000\" {% if searchMaxSalary == 95000 %} selected {% endif %} >£95,000</option>
                                    <option value=\"100000\" {% if searchMaxSalary == 100000 %} selected {% endif %} >£100,000+</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Job Categories</span></div>
                            <ul class=\"categories-module job-cats\">
                                {% set selectedCats = searchCategories|split(\",\") %}
                                {% for cat in categories if cat.id != 1 %}
                                    <li><input type=\"checkbox\" {% if cat.id in selectedCats %} checked {% endif %} name=\"jobcat\" value=\"{{ cat.id }}\"> <a href=\"\"> {{ cat.job_category }}<span>({{ cat.jobsCount }})</span> </a> </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"widget\">
                            <div class=\"widget-heading\"><span class=\"title\">Job Types</span></div>
                            <ul class=\"categories-module job-type\">
                                {% set selectedTypes = searchJobtype|split(\",\") %}
                                {% for type in jobTypes %}
                                    <li><input type=\"checkbox\" {% if type.id in selectedTypes %} checked {% endif %} name=\"jobtype\" value=\"{{ type.id }}\"> <a href=\"\"> {{ type.job_type }}<span>({{ type.jobsCount }})</span> </a> </li>
                                {% endfor %}
                            </ul>
                        </div>
                        {# <div class=\"widget\">
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

                jQuery(\"input[name='jobSearch']\").on(\"click\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]   = jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"location\"]  = jQuery(\"input[name='location']\").val().trim();
                    searchData[\"minsalary\"] = jQuery(\".salary-range select[name='minsalary']\").val();
                    searchData[\"maxsalary\"] = jQuery(\".salary-range select[name='maxsalary']\").val();
                    searchData[\"jobcat\"]      = jQuery(\"input[name='jobcat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    searchData[\"jobtype\"]     = jQuery(\"input[name='jobtype']:checked\").map(function(){ return \$(this).val(); }).get().join();

                    window.common.jobSearch(searchData);
                });

                jQuery(\".categories-list-page\").on(\"click\",\"input[name='jobcat'], input[name='jobtype']\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]   = jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"location\"]  = jQuery(\"input[name='location']\").val().trim();
                    searchData[\"minsalary\"] = jQuery(\".salary-range select[name='minsalary']\").val();
                    searchData[\"maxsalary\"] = jQuery(\".salary-range select[name='maxsalary']\").val();
                    searchData[\"jobcat\"]      = jQuery(\"input[name='jobcat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    searchData[\"jobtype\"]     = jQuery(\"input[name='jobtype']:checked\").map(function(){ return \$(this).val(); }).get().join();

                    window.common.jobSearch(searchData);
                });

                jQuery(\".categories-list-page\").on(\"change\",\"select[name='minsalary'], select[name='maxsalary']\",function(e){
                    var searchData = new Object();
                    searchData[\"keyword\"]   = jQuery(\"input[name='keyword']\").val().trim();
                    searchData[\"location\"]  = jQuery(\"input[name='location']\").val().trim();
                    searchData[\"minsalary\"] = jQuery(\".salary-range select[name='minsalary']\").val();
                    searchData[\"maxsalary\"] = jQuery(\".salary-range select[name='maxsalary']\").val();
                    searchData[\"jobcat\"]      = jQuery(\"input[name='jobcat']:checked\").map(function(){ return \$(this).val(); }).get().join();
                    searchData[\"jobtype\"]     = jQuery(\"input[name='jobtype']:checked\").map(function(){ return \$(this).val(); }).get().join();

                    window.common.jobSearch(searchData);
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "job_list.twig", "/home/getwork/public_html/application/views/job_list.twig");
    }
}
