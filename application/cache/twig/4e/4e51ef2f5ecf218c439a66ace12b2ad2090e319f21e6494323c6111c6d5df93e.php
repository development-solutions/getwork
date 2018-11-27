<?php

/* job_search.twig */
class __TwigTemplate_0f16aaf77277e9f54d5cc4320cee118246ab60edf222d50d77e03a93cff12926 extends Twig_Template
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
                <h4 class=\"search-result-text\">
                    ";
        // line 6
        if ((((isset($context["keyword"]) ? $context["keyword"] : null) != (isset($context["empty"]) ? $context["empty"] : null)) || ((isset($context["location"]) ? $context["location"] : null) != (isset($context["empty"]) ? $context["empty"] : null)))) {
            // line 7
            echo "                        ";
            echo twig_escape_filter($this->env, (((isset($context["totalResult"]) ? $context["totalResult"] : null) . " ") . (isset($context["keyword"]) ? $context["keyword"] : null)), "html", null, true);
            echo " jobs
                        ";
            // line 8
            if (((isset($context["location"]) ? $context["location"] : null) != (isset($context["empty"]) ? $context["empty"] : null))) {
                echo " in ";
            }
            // line 9
            echo "                        ";
            echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
            echo "
                    ";
        } elseif ((twig_length_filter($this->env,         // line 10
(isset($context["jobs"]) ? $context["jobs"] : null)) == 0)) {
            // line 11
            echo "                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            <h4 class=\"search-result-text\">No Job Found !</h4>
                        </div>
                    ";
        }
        // line 15
        echo "                </h4>
                ";
        // line 17
        echo "            </div>
            <div class=\"col-md-8 col-sm-12 col-xs-12\">
                <div class=\"all-jobs-list-box\">
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 21
            echo "                        <div class=\"job-box job-box-2 expire-box ribbon-content cstm-job-box\">
                            <div class=\"job-title-box\">
                                ";
            // line 23
            $context["url"] = (($this->getAttribute($context["job"], "url", array())) ? ($this->getAttribute($context["job"], "url", array())) : (("/home/jobdetails/" . $this->getAttribute($context["job"], "id", array()))));
            // line 24
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
                                    <div class=\"job-title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", array()), "html", null, true);
            echo "</div>
                                </a>
                                <a href=\"#\"><span class=\"job-type comp-name\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company_name", array()), "html", null, true);
            echo "</span></a>
                            </div>

                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> ";
            // line 35
            echo twig_escape_filter($this->env, ((twig_escape_filter($this->env, $this->getAttribute($context["job"], "salary", array())) . "/") . $this->getAttribute($context["job"], "salary_type", array())), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"joblistlogo\"><img src=\"/uploads/";
            // line 38
            echo twig_escape_filter($this->env, (($this->getAttribute($context["job"], "logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["job"], "logo", array()), "logo.jpg")) : ("logo.jpg")), "html", null, true);
            echo "\" alt=\"Construction jobs logo\"></div>
                                </div>  
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "job_type", array()), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p><i class=\"fa fa-user\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "applications", array()));
            echo " applications</p>
                                </div>
                            </div>

                            <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                <p>";
            // line 49
            echo twig_slice($this->env, $this->getAttribute($context["job"], "description", array()), 0, 150);
            echo "...<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">Read More</a></p>
                                <div class=\"expire-job-box\">
                                    <span class=\"expire-date\"> This job will Expire on <strong>";
            // line 51
            $context["last_date"] = (($this->getAttribute($context["job"], "last_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["job"], "last_date", array()), "d M, Y")) : ("NA"));
            // line 52
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
        // line 57
        echo "                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                    <div class=\"pagination-box clearfix\">
                        <div class=\"cstm-pagination pagination\">
                            ";
        // line 61
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
        // line 74
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 10000)) {
            echo " selected ";
        }
        echo " >Up to £10,000</option>
                                <option value=\"12000\" ";
        // line 75
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 12000)) {
            echo " selected ";
        }
        echo " >£12,000</option>
                                <option value=\"14000\" ";
        // line 76
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 14000)) {
            echo " selected ";
        }
        echo " >£14,000</option>
                                <option value=\"16000\" ";
        // line 77
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 16000)) {
            echo " selected ";
        }
        echo " >£16,000</option>
                                <option value=\"18000\" ";
        // line 78
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 18000)) {
            echo " selected ";
        }
        echo " >£18,000</option>
                                <option value=\"20000\" ";
        // line 79
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 20000)) {
            echo " selected ";
        }
        echo " >£20,000</option>
                                <option value=\"22000\" ";
        // line 80
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 22000)) {
            echo " selected ";
        }
        echo " >£22,000</option>
                                <option value=\"24000\" ";
        // line 81
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 24000)) {
            echo " selected ";
        }
        echo " >£24,000</option>
                                <option value=\"26000\" ";
        // line 82
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 26000)) {
            echo " selected ";
        }
        echo " >£26,000</option>
                                <option value=\"28000\" ";
        // line 83
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 28000)) {
            echo " selected ";
        }
        echo " >£28,000</option>
                                <option value=\"30000\" ";
        // line 84
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 30000)) {
            echo " selected ";
        }
        echo " >£30,000</option>
                                <option value=\"32000\" ";
        // line 85
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 32000)) {
            echo " selected ";
        }
        echo " >£32,000</option>
                                <option value=\"34000\" ";
        // line 86
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 34000)) {
            echo " selected ";
        }
        echo " >£34,000</option>
                                <option value=\"36000\" ";
        // line 87
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 36000)) {
            echo " selected ";
        }
        echo " >£36,000</option>
                                <option value=\"38000\" ";
        // line 88
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 38000)) {
            echo " selected ";
        }
        echo " >£38,000</option>
                                <option value=\"40000\" ";
        // line 89
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 40000)) {
            echo " selected ";
        }
        echo " >£40,000</option>
                                <option value=\"42000\" ";
        // line 90
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 42000)) {
            echo " selected ";
        }
        echo " >£42,000</option>
                                <option value=\"44000\" ";
        // line 91
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 44000)) {
            echo " selected ";
        }
        echo " >£44,000</option>
                                <option value=\"46000\" ";
        // line 92
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 46000)) {
            echo " selected ";
        }
        echo " >£46,000</option>
                                <option value=\"48000\" ";
        // line 93
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 48000)) {
            echo " selected ";
        }
        echo " >£48,000</option>
                                <option value=\"50000\" ";
        // line 94
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 50000)) {
            echo " selected ";
        }
        echo " >£50,000</option>
                                <option value=\"55000\" ";
        // line 95
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 55000)) {
            echo " selected ";
        }
        echo " >£55,000</option>
                                <option value=\"60000\" ";
        // line 96
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 60000)) {
            echo " selected ";
        }
        echo " >£60,000</option>
                                <option value=\"65000\" ";
        // line 97
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 65000)) {
            echo " selected ";
        }
        echo " >£65,000</option>
                                <option value=\"70000\" ";
        // line 98
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 70000)) {
            echo " selected ";
        }
        echo " >£70,000</option>
                                <option value=\"75000\" ";
        // line 99
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 75000)) {
            echo " selected ";
        }
        echo " >£75,000</option>
                                <option value=\"80000\" ";
        // line 100
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 80000)) {
            echo " selected ";
        }
        echo " >£80,000</option>
                                <option value=\"85000\" ";
        // line 101
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 85000)) {
            echo " selected ";
        }
        echo " >£85,000</option>
                                <option value=\"90000\" ";
        // line 102
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 90000)) {
            echo " selected ";
        }
        echo " >£90,000</option>
                                <option value=\"95000\" ";
        // line 103
        if (((isset($context["searchMinSalary"]) ? $context["searchMinSalary"] : null) == 95000)) {
            echo " selected ";
        }
        echo " >£95,000</option>
                                <option value=\"100000\" ";
        // line 104
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
        // line 111
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 10000)) {
            echo " selected ";
        }
        echo " >Up to £10,000</option>
                                <option value=\"12000\" ";
        // line 112
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 12000)) {
            echo " selected ";
        }
        echo " >£12,000</option>
                                <option value=\"14000\" ";
        // line 113
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 14000)) {
            echo " selected ";
        }
        echo " >£14,000</option>
                                <option value=\"16000\" ";
        // line 114
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 16000)) {
            echo " selected ";
        }
        echo " >£16,000</option>
                                <option value=\"18000\" ";
        // line 115
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 18000)) {
            echo " selected ";
        }
        echo " >£18,000</option>
                                <option value=\"20000\" ";
        // line 116
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 20000)) {
            echo " selected ";
        }
        echo " >£20,000</option>
                                <option value=\"22000\" ";
        // line 117
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 22000)) {
            echo " selected ";
        }
        echo " >£22,000</option>
                                <option value=\"24000\" ";
        // line 118
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 24000)) {
            echo " selected ";
        }
        echo " >£24,000</option>
                                <option value=\"26000\" ";
        // line 119
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 26000)) {
            echo " selected ";
        }
        echo " >£26,000</option>
                                <option value=\"28000\" ";
        // line 120
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 28000)) {
            echo " selected ";
        }
        echo " >£28,000</option>
                                <option value=\"30000\" ";
        // line 121
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 30000)) {
            echo " selected ";
        }
        echo " >£30,000</option>
                                <option value=\"32000\" ";
        // line 122
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 32000)) {
            echo " selected ";
        }
        echo " >£32,000</option>
                                <option value=\"34000\" ";
        // line 123
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 34000)) {
            echo " selected ";
        }
        echo " >£34,000</option>
                                <option value=\"36000\" ";
        // line 124
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 36000)) {
            echo " selected ";
        }
        echo " >£36,000</option>
                                <option value=\"38000\" ";
        // line 125
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 38000)) {
            echo " selected ";
        }
        echo " >£38,000</option>
                                <option value=\"40000\" ";
        // line 126
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 40000)) {
            echo " selected ";
        }
        echo " >£40,000</option>
                                <option value=\"42000\" ";
        // line 127
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 42000)) {
            echo " selected ";
        }
        echo " >£42,000</option>
                                <option value=\"44000\" ";
        // line 128
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 44000)) {
            echo " selected ";
        }
        echo " >£44,000</option>
                                <option value=\"46000\" ";
        // line 129
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 46000)) {
            echo " selected ";
        }
        echo " >£46,000</option>
                                <option value=\"48000\" ";
        // line 130
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 48000)) {
            echo " selected ";
        }
        echo " >£48,000</option>
                                <option value=\"50000\" ";
        // line 131
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 50000)) {
            echo " selected ";
        }
        echo " >£50,000</option>
                                <option value=\"55000\" ";
        // line 132
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 55000)) {
            echo " selected ";
        }
        echo " >£55,000</option>
                                <option value=\"60000\" ";
        // line 133
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 60000)) {
            echo " selected ";
        }
        echo " >£60,000</option>
                                <option value=\"65000\" ";
        // line 134
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 65000)) {
            echo " selected ";
        }
        echo " >£65,000</option>
                                <option value=\"70000\" ";
        // line 135
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 70000)) {
            echo " selected ";
        }
        echo " >£70,000</option>
                                <option value=\"75000\" ";
        // line 136
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 75000)) {
            echo " selected ";
        }
        echo " >£75,000</option>
                                <option value=\"80000\" ";
        // line 137
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 80000)) {
            echo " selected ";
        }
        echo " >£80,000</option>
                                <option value=\"85000\" ";
        // line 138
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 85000)) {
            echo " selected ";
        }
        echo " >£85,000</option>
                                <option value=\"90000\" ";
        // line 139
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 90000)) {
            echo " selected ";
        }
        echo " >£90,000</option>
                                <option value=\"95000\" ";
        // line 140
        if (((isset($context["searchMaxSalary"]) ? $context["searchMaxSalary"] : null) == 95000)) {
            echo " selected ";
        }
        echo " >£95,000</option>
                                <option value=\"100000\" ";
        // line 141
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
        // line 148
        $context["selectedCats"] = twig_split_filter($this->env, (isset($context["searchCategories"]) ? $context["searchCategories"] : null), ",");
        // line 149
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if (($this->getAttribute($context["cat"], "id", array()) != 1)) {
                // line 150
                echo "                                <li><input type=\"checkbox\" ";
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
        // line 152
        echo "                        </ul>
                    </div>
                    <div class=\"widget\">
                        <div class=\"widget-heading\"><span class=\"title\">Job Types</span></div>
                        <ul class=\"categories-module job-type\">
                            ";
        // line 157
        $context["selectedTypes"] = twig_split_filter($this->env, (isset($context["searchJobtype"]) ? $context["searchJobtype"] : null), ",");
        // line 158
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobTypes"]) ? $context["jobTypes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 159
            echo "                                <li><input type=\"checkbox\" ";
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
        // line 161
        echo "                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "job_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 161,  585 => 159,  580 => 158,  578 => 157,  571 => 152,  553 => 150,  547 => 149,  545 => 148,  533 => 141,  527 => 140,  521 => 139,  515 => 138,  509 => 137,  503 => 136,  497 => 135,  491 => 134,  485 => 133,  479 => 132,  473 => 131,  467 => 130,  461 => 129,  455 => 128,  449 => 127,  443 => 126,  437 => 125,  431 => 124,  425 => 123,  419 => 122,  413 => 121,  407 => 120,  401 => 119,  395 => 118,  389 => 117,  383 => 116,  377 => 115,  371 => 114,  365 => 113,  359 => 112,  353 => 111,  341 => 104,  335 => 103,  329 => 102,  323 => 101,  317 => 100,  311 => 99,  305 => 98,  299 => 97,  293 => 96,  287 => 95,  281 => 94,  275 => 93,  269 => 92,  263 => 91,  257 => 90,  251 => 89,  245 => 88,  239 => 87,  233 => 86,  227 => 85,  221 => 84,  215 => 83,  209 => 82,  203 => 81,  197 => 80,  191 => 79,  185 => 78,  179 => 77,  173 => 76,  167 => 75,  161 => 74,  145 => 61,  139 => 57,  127 => 52,  125 => 51,  118 => 49,  110 => 44,  104 => 41,  98 => 38,  92 => 35,  86 => 32,  78 => 27,  73 => 25,  68 => 24,  66 => 23,  62 => 21,  58 => 20,  53 => 17,  50 => 15,  44 => 11,  42 => 10,  37 => 9,  33 => 8,  28 => 7,  26 => 6,  19 => 1,);
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
                                <a href=\"{{ url }}\">
                                    <div class=\"job-title\">{{ job.title }}</div>
                                </a>
                                <a href=\"#\"><span class=\"job-type comp-name\">{{ job.company_name }}</span></a>
                            </div>

                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> {{ job.location }}</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i> {{ job.salary|e ~\"/\"~ job.salary_type }}</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"joblistlogo\"><img src=\"/uploads/{{ job.logo|default('logo.jpg') }}\" alt=\"Construction jobs logo\"></div>
                                </div>  
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p class=\"jt-full-time-color\"> <i class=\"fa fa-clock-o\"></i> {{job.job_type }}</p>
                                </div>
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <p><i class=\"fa fa-user\"></i> {{ job.applications|e }} applications</p>
                                </div>
                            </div>

                            <div class=\"col-md-9 col-sm-9 col-xs-12\">
                                <p>{{ job.description|slice(0,150)|raw }}...<a href=\"{{ url }}\">Read More</a></p>
                                <div class=\"expire-job-box\">
                                    <span class=\"expire-date\"> This job will Expire on <strong>{% set last_date = job.last_date?job.last_date|date(\"d M, Y\"):\"NA\" %}
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
                </aside>
            </div>
        </div>
    </div>
</div>", "job_search.twig", "/home/getwork/public_html/application/views/job_search.twig");
    }
}
