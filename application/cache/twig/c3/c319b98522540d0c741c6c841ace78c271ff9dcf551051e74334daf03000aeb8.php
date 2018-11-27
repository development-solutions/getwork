<?php

/* applicant_edit.twig */
class __TwigTemplate_5cfca6f5bc052cd4957bf3b92d13d05690520772f5d536e7d4ab2ab3fd0bbe63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "applicant_edit.twig", 1);
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
        $this->loadTemplate("applicant_navigation.twig", "applicant_edit.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                ";
        // line 13
        $this->loadTemplate("applicant_sidebar.twig", "applicant_edit.twig", 13)->display($context);
        // line 14
        echo "                <form action=\"/profile/edit_profile\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>First Name <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "first_name", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"first_name\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_fname", array());
        echo "\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Last Name <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "last_name", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_name\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_lname", array());
        echo "\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Date of Birth <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "d_o_b", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form_date form-control\" type=\"text\" name=\"d_o_b\" data-date-format=\"dd-mm-yyyy\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Email <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "email", array()), "html", null, true);
        echo "\" readonly placeholder=\"\" class=\"form-control\" type=\"email\" name=\"email\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_email", array());
        echo "\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Phone <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "phone", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"phone\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Last Education <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "last_education", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_education\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "address", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"address\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>City <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "city", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"city\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Post Code <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "postcode", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"postcode\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>County <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "provience", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"provience\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Country <span class=\"required\"></span></label>
                                    <input value=\"";
        // line 84
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "country", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "country", array()), "United Kingdom")) : ("United Kingdom")), "html", null, true);
        echo "\" readonly=\"true\" class=\"form-control\" type=\"text\" name=\"country\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"input-group image-preview form-group\">
                                    <label>Profile Image: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"Upload Profile Image\" class=\"form-control image-preview-filename\" disabled=\"disabled\" data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 90
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_image", array());
        echo "\">
                                    <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                                        <span class=\"glyphicon glyphicon-remove\"></span> Clear
                                    </button>
                                    <div class=\"btn btn-default image-preview-input\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span>
                                        <span class=\"image-preview-input-title\">Browse</span>
                                        <input type=\"file\" accept=\"file_extension\" name=\"userfile\" />
                                    </div>
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>About yourself <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"about_me\">";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "about_me", array()), "html", null, true);
        echo "</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Educational Detail</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        ";
        // line 117
        if ((twig_length_filter($this->env, (isset($context["education"]) ? $context["education"] : null)) > 0)) {
            // line 118
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["education"]) ? $context["education"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["edu"]) {
                // line 119
                echo "                                <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"eduId[]\" value=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "id", array()));
                echo "\"/>
                                    ";
                // line 121
                if (($this->getAttribute($context["loop"], "index", array()) != 1)) {
                    // line 122
                    echo "                                        <span onclick=\"window.profile.deleteEdu(this)\" class=\"cstm-del-btn glyphicon glyphicon-remove-sign\" aria-hidden=\"true\"></span>
                                    ";
                }
                // line 124
                echo "                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Degree Title <span class=\"required\"></span></label>
                                            <input placeholder=\"Degree Title\" class=\"form-control\" type=\"text\" name=\"degree_title[]\" value=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "title", array()));
                echo "\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>University/College <span class=\"required\"></span></label>
                                            <input placeholder=\"University/College\" class=\"form-control\" type=\"text\" name=\"degree_college[]\" value=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "college", array()));
                echo "\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Degree start Date <span class=\"required\"></span></label>
                                            <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"degree_start_date[]\" value=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "start_date", array()));
                echo "\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Degree End Date <span class=\"required\"></span></label>
                                            <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"degree_end_date[]\" value=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "end_date", array()));
                echo "\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label>Description <span class=\"required\"></span></label>
                                            <textarea id=\"jbeditor";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"degree_description[]\">";
                echo $this->getAttribute($context["edu"], "description", array());
                echo "</textarea>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                        ";
        } else {
            // line 157
            echo "                            <div class=\"profile-edit row\">
                                <input type=\"hidden\" name=\"eduId[]\" value=\"\"/>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Degree Title <span class=\"required\"></span></label>
                                        <input placeholder=\"Degree Title\" class=\"form-control\" type=\"text\" name=\"degree_title[]\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>University/College <span class=\"required\"></span></label>
                                        <input placeholder=\"University/College\" class=\"form-control\" type=\"text\" name=\"degree_college[]\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Degree start Date <span class=\"required\"></span></label>
                                        <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"degree_start_date[]\" data-date-format=\"dd-mm-yyyy\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Degree End Date <span class=\"required\"></span></label>
                                        <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"degree_end_date[]\" data-date-format=\"dd-mm-yyyy\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"form-group\">
                                        <label>Description <span class=\"required\"></span></label>
                                        <textarea id=\"jbeditor\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"degree_description[]\"></textarea>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 191
        echo "                        <div class=\"col-md-12 col-sm-12\">
                            <a  onclick=\"window.profile.addEducationBlcok(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>        
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Job Experience</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        ";
        // line 199
        if ((twig_length_filter($this->env, (isset($context["experience"]) ? $context["experience"] : null)) > 0)) {
            // line 200
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) ? $context["experience"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
                // line 201
                echo "                                <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"expId[]\" value=\"";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "id", array()));
                echo "\"/>
                                    ";
                // line 203
                if (($this->getAttribute($context["loop"], "index", array()) != 1)) {
                    // line 204
                    echo "                                        <span onclick=\"window.profile.deleteExp(this)\" class=\"cstm-del-btn glyphicon glyphicon-remove-sign\" aria-hidden=\"true\"></span>
                                    ";
                }
                // line 206
                echo "                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Position <span class=\"required\"></span></label>
                                            <input placeholder=\"Position Title\" class=\"form-control\" type=\"text\" name=\"job_profile[]\" value=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "profile", array()));
                echo "\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Company <span class=\"required\"></span></label>
                                            <input placeholder=\"Company Name\" class=\"form-control\" type=\"text\" name=\"job_company[]\" value=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "company", array()));
                echo "\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job start Date <span class=\"required\"></span></label>
                                            <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"job_start_date[]\" value=\"";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "start_date", array()));
                echo "\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job End Date <span class=\"required\"></span></label>
                                            <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"job_end_date[]\" value=\"";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "end_date", array()));
                echo "\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label>Description <span class=\"required\"></span></label>
                                            <textarea id=\"exeditor";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"job_description[]\">";
                echo $this->getAttribute($context["exp"], "description", array());
                echo "</textarea>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "                        ";
        } else {
            // line 239
            echo "                            <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"expId[]\" value=\"\"/>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Position <span class=\"required\"></span></label>
                                            <input placeholder=\"Position Title\" class=\"form-control\" type=\"text\" name=\"job_profile[]\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Company <span class=\"required\"></span></label>
                                            <input placeholder=\"Company Name\" class=\"form-control\" type=\"text\" name=\"job_company[]\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job start Date <span class=\"required\"></span></label>
                                            <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"job_start_date[]\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job End Date <span class=\"required\"></span></label>
                                            <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"job_end_date[]\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label>Description <span class=\"required\"></span></label>
                                            <textarea id=\"exeditor\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"job_description[]\"></textarea>
                                        </div>
                                    </div>
                                </div>
                        ";
        }
        // line 273
        echo "                        <div class=\"col-md-12 col-sm-12\">
                            <a onclick=\"window.profile.addExperienceBlock(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Add Skills</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        ";
        // line 281
        if ((twig_length_filter($this->env, (isset($context["skills"]) ? $context["skills"] : null)) > 0)) {
            // line 282
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 283
                echo "                                <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"skillId[]\" value=\"";
                // line 284
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "id", array()));
                echo "\"/>
                                    ";
                // line 285
                if (($this->getAttribute($context["loop"], "index", array()) != 1)) {
                    // line 286
                    echo "                                        <span onclick=\"window.profile.deleteSkill(this)\" class=\"cstm-del-btn glyphicon glyphicon-remove-sign\" aria-hidden=\"true\"></span>
                                    ";
                }
                // line 288
                echo "                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Skill Name <span class=\"required\"></span></label>
                                            <input placeholder=\"Skill Name\" class=\"form-control\" type=\"text\" name=\"skill_name[]\" value=\"";
                // line 291
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()));
                echo "\">
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                        ";
        } else {
            // line 297
            echo "                            <div class=\"profile-edit row\">
                                <input type=\"hidden\" name=\"skillId[]\" value=\"\"/>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Skill Name <span class=\"required\"></span></label>
                                        <input placeholder=\"Skill Name\" class=\"form-control\" type=\"text\" name=\"skill_name[]\">
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 307
        echo "                        <div class=\"col-md-12 col-sm-12\">
                            <a onclick=\"window.profile.addSkillBlock(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Social Links</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Facebook <span class=\"required\"></span></label>
                                    <div class=\"register_error\">";
        // line 319
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "facebook", array());
        echo "</div>
                                    <input placeholder=\"Profile URL\" name=\"facebook_url\" value=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "facebook_url", array()), "html", null, true);
        echo "\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Twitter <span class=\"required\"></span></label>
                                    <div class=\"register_error\">";
        // line 326
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "twitter", array());
        echo "</div>
                                    <input placeholder=\"Profile URL\" name=\"twitter_url\" value=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "twitter_url", array()), "html", null, true);
        echo "\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>LinkedIn <span class=\"required\"></span></label>
                                    <div class=\"register_error\">";
        // line 333
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "linkedin", array());
        echo "</div>
                                    <input placeholder=\"Profile URL\" name=\"linkedin_url\" value=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "linkedin_url", array()), "html", null, true);
        echo "\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Google Pluse <span class=\"required\"></span></label>
                                    <div class=\"register_error\">";
        // line 340
        echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "googleplus", array());
        echo "</div>
                                    <input placeholder=\"Profile URL\" name=\"googleplus_url\" value=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "googleplus_url", array()), "html", null, true);
        echo "\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                        <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"Save Profile\" name=\"edit\" />
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
";
        // line 355
        if (((isset($context["message"]) ? $context["message"] : null) == "success")) {
            // line 356
            echo "<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.success(\"Profile updated successfully!\",{timeOut: 5000});
    },1000);
</script>
";
        }
    }

    // line 370
    public function block_footer($context, array $blocks = array())
    {
        // line 371
        echo "    ";
        $this->loadTemplate("applicant_edit.twig", "applicant_edit.twig", 371, "4009487")->display($context);
    }

    public function getTemplateName()
    {
        return "applicant_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 371,  653 => 370,  636 => 356,  634 => 355,  617 => 341,  613 => 340,  604 => 334,  600 => 333,  591 => 327,  587 => 326,  578 => 320,  574 => 319,  560 => 307,  548 => 297,  545 => 296,  526 => 291,  521 => 288,  517 => 286,  515 => 285,  511 => 284,  508 => 283,  490 => 282,  488 => 281,  478 => 273,  442 => 239,  439 => 238,  418 => 233,  409 => 227,  400 => 221,  391 => 215,  382 => 209,  377 => 206,  373 => 204,  371 => 203,  367 => 202,  364 => 201,  346 => 200,  344 => 199,  334 => 191,  298 => 157,  295 => 156,  274 => 151,  265 => 145,  256 => 139,  247 => 133,  238 => 127,  233 => 124,  229 => 122,  227 => 121,  223 => 120,  220 => 119,  202 => 118,  200 => 117,  186 => 106,  167 => 90,  158 => 84,  149 => 78,  140 => 72,  131 => 66,  122 => 60,  113 => 54,  104 => 48,  93 => 42,  84 => 36,  73 => 30,  62 => 24,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                {% include 'applicant_sidebar.twig' %}
                <form action=\"/profile/edit_profile\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>First Name <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.first_name}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"first_name\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.error_fname|raw }}\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Last Name <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.last_name}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_name\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.error_lname|raw }}\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Date of Birth <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.d_o_b}}\" placeholder=\"\" class=\"form_date form-control\" type=\"text\" name=\"d_o_b\" data-date-format=\"dd-mm-yyyy\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Email <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.email}}\" readonly placeholder=\"\" class=\"form-control\" type=\"email\" name=\"email\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.error_email|raw }}\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Phone <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.phone}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"phone\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Last Education <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.last_education}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_education\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.address}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"address\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>City <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.city}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"city\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Post Code <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.postcode}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"postcode\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>County <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.provience}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"provience\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Country <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.country|default('United Kingdom') }}\" readonly=\"true\" class=\"form-control\" type=\"text\" name=\"country\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"input-group image-preview form-group\">
                                    <label>Profile Image: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"Upload Profile Image\" class=\"form-control image-preview-filename\" disabled=\"disabled\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.error_image|raw }}\">
                                    <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                                        <span class=\"glyphicon glyphicon-remove\"></span> Clear
                                    </button>
                                    <div class=\"btn btn-default image-preview-input\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span>
                                        <span class=\"image-preview-input-title\">Browse</span>
                                        <input type=\"file\" accept=\"file_extension\" name=\"userfile\" />
                                    </div>
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>About yourself <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"about_me\">{{ fields.about_me}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Educational Detail</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        {% if education|length > 0 %}
                            {% for edu in education %}
                                <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"eduId[]\" value=\"{{edu.id|e}}\"/>
                                    {% if loop.index!=1 %}
                                        <span onclick=\"window.profile.deleteEdu(this)\" class=\"cstm-del-btn glyphicon glyphicon-remove-sign\" aria-hidden=\"true\"></span>
                                    {% endif %}
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Degree Title <span class=\"required\"></span></label>
                                            <input placeholder=\"Degree Title\" class=\"form-control\" type=\"text\" name=\"degree_title[]\" value=\"{{ edu.title|e }}\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>University/College <span class=\"required\"></span></label>
                                            <input placeholder=\"University/College\" class=\"form-control\" type=\"text\" name=\"degree_college[]\" value=\"{{ edu.college|e }}\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Degree start Date <span class=\"required\"></span></label>
                                            <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"degree_start_date[]\" value=\"{{ edu.start_date|e }}\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Degree End Date <span class=\"required\"></span></label>
                                            <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"degree_end_date[]\" value=\"{{ edu.end_date|e }}\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label>Description <span class=\"required\"></span></label>
                                            <textarea id=\"jbeditor{{ loop.index }}\"cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"degree_description[]\">{{ edu.description|raw }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        {% else %}
                            <div class=\"profile-edit row\">
                                <input type=\"hidden\" name=\"eduId[]\" value=\"\"/>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Degree Title <span class=\"required\"></span></label>
                                        <input placeholder=\"Degree Title\" class=\"form-control\" type=\"text\" name=\"degree_title[]\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>University/College <span class=\"required\"></span></label>
                                        <input placeholder=\"University/College\" class=\"form-control\" type=\"text\" name=\"degree_college[]\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Degree start Date <span class=\"required\"></span></label>
                                        <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"degree_start_date[]\" data-date-format=\"dd-mm-yyyy\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Degree End Date <span class=\"required\"></span></label>
                                        <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"degree_end_date[]\" data-date-format=\"dd-mm-yyyy\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"form-group\">
                                        <label>Description <span class=\"required\"></span></label>
                                        <textarea id=\"jbeditor\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"degree_description[]\"></textarea>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                        <div class=\"col-md-12 col-sm-12\">
                            <a  onclick=\"window.profile.addEducationBlcok(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>        
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Job Experience</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        {% if experience|length >0 %}
                            {% for exp in experience %}
                                <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"expId[]\" value=\"{{ exp.id|e }}\"/>
                                    {% if loop.index!=1 %}
                                        <span onclick=\"window.profile.deleteExp(this)\" class=\"cstm-del-btn glyphicon glyphicon-remove-sign\" aria-hidden=\"true\"></span>
                                    {% endif %}
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Position <span class=\"required\"></span></label>
                                            <input placeholder=\"Position Title\" class=\"form-control\" type=\"text\" name=\"job_profile[]\" value=\"{{ exp.profile|e }}\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Company <span class=\"required\"></span></label>
                                            <input placeholder=\"Company Name\" class=\"form-control\" type=\"text\" name=\"job_company[]\" value=\"{{ exp.company|e }}\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job start Date <span class=\"required\"></span></label>
                                            <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"job_start_date[]\" value=\"{{ exp.start_date|e }}\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job End Date <span class=\"required\"></span></label>
                                            <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"job_end_date[]\" value=\"{{ exp.end_date|e }}\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label>Description <span class=\"required\"></span></label>
                                            <textarea id=\"exeditor{{ loop.index }}\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"job_description[]\">{{ exp.description|raw }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        {% else %}
                            <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"expId[]\" value=\"\"/>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Position <span class=\"required\"></span></label>
                                            <input placeholder=\"Position Title\" class=\"form-control\" type=\"text\" name=\"job_profile[]\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Company <span class=\"required\"></span></label>
                                            <input placeholder=\"Company Name\" class=\"form-control\" type=\"text\" name=\"job_company[]\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job start Date <span class=\"required\"></span></label>
                                            <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"job_start_date[]\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job End Date <span class=\"required\"></span></label>
                                            <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"job_end_date[]\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label>Description <span class=\"required\"></span></label>
                                            <textarea id=\"exeditor\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"job_description[]\"></textarea>
                                        </div>
                                    </div>
                                </div>
                        {% endif %}
                        <div class=\"col-md-12 col-sm-12\">
                            <a onclick=\"window.profile.addExperienceBlock(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Add Skills</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        {% if skills|length >0 %}
                            {% for skill in skills %}
                                <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"skillId[]\" value=\"{{ skill.id|e }}\"/>
                                    {% if loop.index!=1 %}
                                        <span onclick=\"window.profile.deleteSkill(this)\" class=\"cstm-del-btn glyphicon glyphicon-remove-sign\" aria-hidden=\"true\"></span>
                                    {% endif %}
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Skill Name <span class=\"required\"></span></label>
                                            <input placeholder=\"Skill Name\" class=\"form-control\" type=\"text\" name=\"skill_name[]\" value=\"{{ skill.name|e }}\">
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        {% else %}
                            <div class=\"profile-edit row\">
                                <input type=\"hidden\" name=\"skillId[]\" value=\"\"/>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Skill Name <span class=\"required\"></span></label>
                                        <input placeholder=\"Skill Name\" class=\"form-control\" type=\"text\" name=\"skill_name[]\">
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                        <div class=\"col-md-12 col-sm-12\">
                            <a onclick=\"window.profile.addSkillBlock(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Social Links</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Facebook <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.facebook|raw }}</div>
                                    <input placeholder=\"Profile URL\" name=\"facebook_url\" value=\"{{ user.facebook_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Twitter <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.twitter|raw }}</div>
                                    <input placeholder=\"Profile URL\" name=\"twitter_url\" value=\"{{ user.twitter_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>LinkedIn <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.linkedin|raw }}</div>
                                    <input placeholder=\"Profile URL\" name=\"linkedin_url\" value=\"{{ user.linkedin_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Google Pluse <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.googleplus|raw }}</div>
                                    <input placeholder=\"Profile URL\" name=\"googleplus_url\" value=\"{{ user.googleplus_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                        <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"Save Profile\" name=\"edit\" />
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
{% if message=='success' %}
<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.success(\"Profile updated successfully!\",{timeOut: 5000});
    },1000);
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
                   jQuery(\"textarea[id^='jbeditor'],textarea[id^='exeditor']\").each(function(i,ele){
                       CKEDITOR.replace(ele.id);
                   });                   
                });
                jQuery(\"form\").on(\"submit\",function(){
                    var flag = true;
                    jQuery(\".form_date\").not(\".not-date\").each(function(i,ele){
                        var date = jQuery(ele).val();
                        if(date != \"\" && !window.common.dateFormat(date)){
                            alert(\"Please enter correct date format\");
                            flag = false;
                            jQuery(ele).focus();
                            return false;
                        }
                    });
                    return flag;
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "applicant_edit.twig", "/home/getwork/public_html/application/views/applicant_edit.twig");
    }
}


/* applicant_edit.twig */
class __TwigTemplate_5cfca6f5bc052cd4957bf3b92d13d05690520772f5d536e7d4ab2ab3fd0bbe63_4009487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("footer.twig", "applicant_edit.twig", 371);
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

    // line 372
    public function block_customScripts($context, array $blocks = array())
    {
        // line 373
        echo "            <script type=\"text/javascript\">
                jQuery(document).ready(function(){
                   ";
        // line 375
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 376
            echo "                        jQuery(\"[data-toggle='tooltip']\").tooltip(\"show\");
                   ";
        }
        // line 378
        echo "                   jQuery(\"textarea[id^='jbeditor'],textarea[id^='exeditor']\").each(function(i,ele){
                       CKEDITOR.replace(ele.id);
                   });                   
                });
                jQuery(\"form\").on(\"submit\",function(){
                    var flag = true;
                    jQuery(\".form_date\").not(\".not-date\").each(function(i,ele){
                        var date = jQuery(ele).val();
                        if(date != \"\" && !window.common.dateFormat(date)){
                            alert(\"Please enter correct date format\");
                            flag = false;
                            jQuery(ele).focus();
                            return false;
                        }
                    });
                    return flag;
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "applicant_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1124 => 378,  1120 => 376,  1118 => 375,  1114 => 373,  1111 => 372,  656 => 371,  653 => 370,  636 => 356,  634 => 355,  617 => 341,  613 => 340,  604 => 334,  600 => 333,  591 => 327,  587 => 326,  578 => 320,  574 => 319,  560 => 307,  548 => 297,  545 => 296,  526 => 291,  521 => 288,  517 => 286,  515 => 285,  511 => 284,  508 => 283,  490 => 282,  488 => 281,  478 => 273,  442 => 239,  439 => 238,  418 => 233,  409 => 227,  400 => 221,  391 => 215,  382 => 209,  377 => 206,  373 => 204,  371 => 203,  367 => 202,  364 => 201,  346 => 200,  344 => 199,  334 => 191,  298 => 157,  295 => 156,  274 => 151,  265 => 145,  256 => 139,  247 => 133,  238 => 127,  233 => 124,  229 => 122,  227 => 121,  223 => 120,  220 => 119,  202 => 118,  200 => 117,  186 => 106,  167 => 90,  158 => 84,  149 => 78,  140 => 72,  131 => 66,  122 => 60,  113 => 54,  104 => 48,  93 => 42,  84 => 36,  73 => 30,  62 => 24,  50 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                {% include 'applicant_sidebar.twig' %}
                <form action=\"/profile/edit_profile\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Edit Profile</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>First Name <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.first_name}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"first_name\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.error_fname|raw }}\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Last Name <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.last_name}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_name\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.error_lname|raw }}\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Date of Birth <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.d_o_b}}\" placeholder=\"\" class=\"form_date form-control\" type=\"text\" name=\"d_o_b\" data-date-format=\"dd-mm-yyyy\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Email <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.email}}\" readonly placeholder=\"\" class=\"form-control\" type=\"email\" name=\"email\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.error_email|raw }}\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Phone <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.phone}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"phone\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Last Education <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.last_education}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"last_education\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.address}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"address\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>City <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.city}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"city\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Post Code <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.postcode}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"postcode\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>County <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.provience}}\" placeholder=\"\" class=\"form-control\" type=\"text\" name=\"provience\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Country <span class=\"required\"></span></label>
                                    <input value=\"{{ fields.country|default('United Kingdom') }}\" readonly=\"true\" class=\"form-control\" type=\"text\" name=\"country\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"input-group image-preview form-group\">
                                    <label>Profile Image: <span class=\"required\"></span></label>
                                    <input type=\"text\" placeholder=\"Upload Profile Image\" class=\"form-control image-preview-filename\" disabled=\"disabled\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{{ errors.error_image|raw }}\">
                                    <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                                        <span class=\"glyphicon glyphicon-remove\"></span> Clear
                                    </button>
                                    <div class=\"btn btn-default image-preview-input\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span>
                                        <span class=\"image-preview-input-title\">Browse</span>
                                        <input type=\"file\" accept=\"file_extension\" name=\"userfile\" />
                                    </div>
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>About yourself <span class=\"required\"></span></label>
                                    <textarea cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"about_me\">{{ fields.about_me}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Educational Detail</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        {% if education|length > 0 %}
                            {% for edu in education %}
                                <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"eduId[]\" value=\"{{edu.id|e}}\"/>
                                    {% if loop.index!=1 %}
                                        <span onclick=\"window.profile.deleteEdu(this)\" class=\"cstm-del-btn glyphicon glyphicon-remove-sign\" aria-hidden=\"true\"></span>
                                    {% endif %}
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Degree Title <span class=\"required\"></span></label>
                                            <input placeholder=\"Degree Title\" class=\"form-control\" type=\"text\" name=\"degree_title[]\" value=\"{{ edu.title|e }}\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>University/College <span class=\"required\"></span></label>
                                            <input placeholder=\"University/College\" class=\"form-control\" type=\"text\" name=\"degree_college[]\" value=\"{{ edu.college|e }}\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Degree start Date <span class=\"required\"></span></label>
                                            <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"degree_start_date[]\" value=\"{{ edu.start_date|e }}\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Degree End Date <span class=\"required\"></span></label>
                                            <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"degree_end_date[]\" value=\"{{ edu.end_date|e }}\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label>Description <span class=\"required\"></span></label>
                                            <textarea id=\"jbeditor{{ loop.index }}\"cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"degree_description[]\">{{ edu.description|raw }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        {% else %}
                            <div class=\"profile-edit row\">
                                <input type=\"hidden\" name=\"eduId[]\" value=\"\"/>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Degree Title <span class=\"required\"></span></label>
                                        <input placeholder=\"Degree Title\" class=\"form-control\" type=\"text\" name=\"degree_title[]\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>University/College <span class=\"required\"></span></label>
                                        <input placeholder=\"University/College\" class=\"form-control\" type=\"text\" name=\"degree_college[]\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Degree start Date <span class=\"required\"></span></label>
                                        <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"degree_start_date[]\" data-date-format=\"dd-mm-yyyy\">
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Degree End Date <span class=\"required\"></span></label>
                                        <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"degree_end_date[]\" data-date-format=\"dd-mm-yyyy\">
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"form-group\">
                                        <label>Description <span class=\"required\"></span></label>
                                        <textarea id=\"jbeditor\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"degree_description[]\"></textarea>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                        <div class=\"col-md-12 col-sm-12\">
                            <a  onclick=\"window.profile.addEducationBlcok(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>        
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Job Experience</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        {% if experience|length >0 %}
                            {% for exp in experience %}
                                <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"expId[]\" value=\"{{ exp.id|e }}\"/>
                                    {% if loop.index!=1 %}
                                        <span onclick=\"window.profile.deleteExp(this)\" class=\"cstm-del-btn glyphicon glyphicon-remove-sign\" aria-hidden=\"true\"></span>
                                    {% endif %}
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Position <span class=\"required\"></span></label>
                                            <input placeholder=\"Position Title\" class=\"form-control\" type=\"text\" name=\"job_profile[]\" value=\"{{ exp.profile|e }}\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Company <span class=\"required\"></span></label>
                                            <input placeholder=\"Company Name\" class=\"form-control\" type=\"text\" name=\"job_company[]\" value=\"{{ exp.company|e }}\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job start Date <span class=\"required\"></span></label>
                                            <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"job_start_date[]\" value=\"{{ exp.start_date|e }}\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job End Date <span class=\"required\"></span></label>
                                            <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"job_end_date[]\" value=\"{{ exp.end_date|e }}\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label>Description <span class=\"required\"></span></label>
                                            <textarea id=\"exeditor{{ loop.index }}\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"job_description[]\">{{ exp.description|raw }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        {% else %}
                            <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"expId[]\" value=\"\"/>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Position <span class=\"required\"></span></label>
                                            <input placeholder=\"Position Title\" class=\"form-control\" type=\"text\" name=\"job_profile[]\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Company <span class=\"required\"></span></label>
                                            <input placeholder=\"Company Name\" class=\"form-control\" type=\"text\" name=\"job_company[]\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job start Date <span class=\"required\"></span></label>
                                            <input placeholder=\"Pick Date\" class=\"form_date form-control\" type=\"text\" name=\"job_start_date[]\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Job End Date <span class=\"required\"></span></label>
                                            <input placeholder=\" Pick Date\" class=\"form_date not-date form-control\" type=\"text\" name=\"job_end_date[]\" data-date-format=\"dd-mm-yyyy\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label>Description <span class=\"required\"></span></label>
                                            <textarea id=\"exeditor\" cols=\"6\" rows=\"8\" placeholder=\"\" class=\"form-control\" name=\"job_description[]\"></textarea>
                                        </div>
                                    </div>
                                </div>
                        {% endif %}
                        <div class=\"col-md-12 col-sm-12\">
                            <a onclick=\"window.profile.addExperienceBlock(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Add Skills</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        {% if skills|length >0 %}
                            {% for skill in skills %}
                                <div class=\"profile-edit row\">
                                    <input type=\"hidden\" name=\"skillId[]\" value=\"{{ skill.id|e }}\"/>
                                    {% if loop.index!=1 %}
                                        <span onclick=\"window.profile.deleteSkill(this)\" class=\"cstm-del-btn glyphicon glyphicon-remove-sign\" aria-hidden=\"true\"></span>
                                    {% endif %}
                                    <div class=\"col-md-12 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label>Skill Name <span class=\"required\"></span></label>
                                            <input placeholder=\"Skill Name\" class=\"form-control\" type=\"text\" name=\"skill_name[]\" value=\"{{ skill.name|e }}\">
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        {% else %}
                            <div class=\"profile-edit row\">
                                <input type=\"hidden\" name=\"skillId[]\" value=\"\"/>
                                <div class=\"col-md-12 col-sm-12\">
                                    <div class=\"form-group\">
                                        <label>Skill Name <span class=\"required\"></span></label>
                                        <input placeholder=\"Skill Name\" class=\"form-control\" type=\"text\" name=\"skill_name[]\">
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                        <div class=\"col-md-12 col-sm-12\">
                            <a onclick=\"window.profile.addSkillBlock(this)\" class=\"btn btn-default pull-right\"> Add More <i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Social Links</p>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"profile-edit row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Facebook <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.facebook|raw }}</div>
                                    <input placeholder=\"Profile URL\" name=\"facebook_url\" value=\"{{ user.facebook_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Twitter <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.twitter|raw }}</div>
                                    <input placeholder=\"Profile URL\" name=\"twitter_url\" value=\"{{ user.twitter_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>LinkedIn <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.linkedin|raw }}</div>
                                    <input placeholder=\"Profile URL\" name=\"linkedin_url\" value=\"{{ user.linkedin_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <div class=\"form-group\">
                                    <label>Google Pluse <span class=\"required\"></span></label>
                                    <div class=\"register_error\">{{ errors.googleplus|raw }}</div>
                                    <input placeholder=\"Profile URL\" name=\"googleplus_url\" value=\"{{ user.googleplus_url }}\" class=\"form-control\" type=\"text\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                        <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"Save Profile\" name=\"edit\" />
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
{% if message=='success' %}
<script type=\"text/javascript\">
    setTimeout(function(){
        toastr.options = {
            \"closeButton\": true,
            \"positionClass\": \"toast-top-center\",
            \"progressBar\": true,
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }
        toastr.success(\"Profile updated successfully!\",{timeOut: 5000});
    },1000);
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
                   jQuery(\"textarea[id^='jbeditor'],textarea[id^='exeditor']\").each(function(i,ele){
                       CKEDITOR.replace(ele.id);
                   });                   
                });
                jQuery(\"form\").on(\"submit\",function(){
                    var flag = true;
                    jQuery(\".form_date\").not(\".not-date\").each(function(i,ele){
                        var date = jQuery(ele).val();
                        if(date != \"\" && !window.common.dateFormat(date)){
                            alert(\"Please enter correct date format\");
                            flag = false;
                            jQuery(ele).focus();
                            return false;
                        }
                    });
                    return flag;
                });
            </script>
        {% endblock customScripts%}
    {% endembed %}
{% endblock %}", "applicant_edit.twig", "/home/getwork/public_html/application/views/applicant_edit.twig");
    }
}
