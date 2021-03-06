<?php

/* aboutus.twig */
class __TwigTemplate_628a58fd5fa818a8aa4348d2fcba74e4c4f8ba3cdfd836b5e5fd3f2df16903aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "aboutus.twig", 1);
        $this->blocks = array(
            'metatags' => array($this, 'block_metatags'),
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_metatags($context, array $blocks = array())
    {
        // line 3
        echo "    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Getwork.construction provide a totally free service for candidates searching Construction jobs and courses, with no hidden charges.\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Getwork.Construction - Construction Jobs & Vacancies | Search Job</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<section class=\"job-breadcrumb\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-7 co-xs-12 text-left\">
                        <h3>About us</h3>
                    </div>
                    <div class=\"col-md-6 col-sm-5 co-xs-12 text-right\">
                        <div class=\"bread\">
                            <ol class=\"breadcrumb\">
                                <li><a href=\"#\">Home</a> </li>
                                <li class=\"active\">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"about-us\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    \t<div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"Heading-title-left black small-heading\">
                                <h3>Want to know about us?</h3>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <p>Getwork.construction is a unique website, wholly owned by SSK Business Services ltd, that has been specifically set up to connect candidates with employers operating solely within the Construction Industry . </p>

<p>Getwork Construction website contains the following features:<br>

1. Candidates, search for jobs. <br>
2. Employers, advertise for Tradespeople and Professionals. <br>
3. Training and qualification courses. <br>

We aim to provide a single platform for employment across the whole of the Construction Industry workforce, from labourers right through to upper management. We also provide customised searches for training and qualification courses specific to construction. </p></div>
<div class=\"col-md-6 col-sm-12 col-xs-12 hidden-sm\"> <img src=\"../images/aboutus/about-us2.png\" alt=\"Construction\" class=\"img-responsive\"> </div>
<div class=\"col-md-12 col-sm-12 col-xs-12\">
<h2>Terms and conditions for Candidates, Employers and Course providers.</h2>
<h3>Candidates.</h3>
<p>Getwork.construction cannot guarantee successful job applications for candidates. We provide a totally free service for candidates searching jobs and courses, with no hidden charges.</p>
<h3>Employers.</h3>
<p>Employers can post job vacancies on getwork.construction website at no charge for a period of 12 months. After 12 months has passed from registration date, fees will be applied (notifications will be sent by email).</p>
<h3>Courses.</h3>
<p>Companies can post courses on getwork.construction website at no charge for a period on 12 months. After 12 months has passed from registration date, fees will be applied (notifications will be sent by email). It is the responsibility of the course provider to ensure that information provided about your courses is true, accurate and legal under the laws of the United Kingdom.</br>
Getwork construction accept no responsibility for the validity or content of the courses advertised on getwork.construction website.</br>
Getwork.construction do not receive monies for course booking fees, if you wish to book a course, please contact and pay the course providers directly. It is the responsibility of the course applicant to research the courses offered by the advertisers, getwork.construction will accept no responsibilities for bogus, unwarranted, unlawful or misleading information displayed in the copy or content of any advertised courses.Should you encounter any bogus, illegal or misleading information, please report this to us immediately. 
</p>
<p>You can contact us via email on sales@getwork.construction or surinder@sskservices.co.uk
For any kind of privacy issues, please contact us by phone 03330124302.
</p>
<p>Thank you for your co-operation.</p>                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        ";
    }

    public function getTemplateName()
    {
        return "aboutus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  52 => 14,  47 => 12,  44 => 11,  33 => 3,  30 => 2,  11 => 1,);
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
    <meta name=\"description\" content=\"Getwork.construction provide a totally free service for candidates searching Construction jobs and courses, with no hidden charges.\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Getwork.Construction - Construction Jobs & Vacancies | Search Job</title>
{% endblock %}
{% block content %}

<section class=\"job-breadcrumb\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-7 co-xs-12 text-left\">
                        <h3>About us</h3>
                    </div>
                    <div class=\"col-md-6 col-sm-5 co-xs-12 text-right\">
                        <div class=\"bread\">
                            <ol class=\"breadcrumb\">
                                <li><a href=\"#\">Home</a> </li>
                                <li class=\"active\">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"about-us\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    \t<div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"Heading-title-left black small-heading\">
                                <h3>Want to know about us?</h3>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <p>Getwork.construction is a unique website, wholly owned by SSK Business Services ltd, that has been specifically set up to connect candidates with employers operating solely within the Construction Industry . </p>

<p>Getwork Construction website contains the following features:<br>

1. Candidates, search for jobs. <br>
2. Employers, advertise for Tradespeople and Professionals. <br>
3. Training and qualification courses. <br>

We aim to provide a single platform for employment across the whole of the Construction Industry workforce, from labourers right through to upper management. We also provide customised searches for training and qualification courses specific to construction. </p></div>
<div class=\"col-md-6 col-sm-12 col-xs-12 hidden-sm\"> <img src=\"../images/aboutus/about-us2.png\" alt=\"Construction\" class=\"img-responsive\"> </div>
<div class=\"col-md-12 col-sm-12 col-xs-12\">
<h2>Terms and conditions for Candidates, Employers and Course providers.</h2>
<h3>Candidates.</h3>
<p>Getwork.construction cannot guarantee successful job applications for candidates. We provide a totally free service for candidates searching jobs and courses, with no hidden charges.</p>
<h3>Employers.</h3>
<p>Employers can post job vacancies on getwork.construction website at no charge for a period of 12 months. After 12 months has passed from registration date, fees will be applied (notifications will be sent by email).</p>
<h3>Courses.</h3>
<p>Companies can post courses on getwork.construction website at no charge for a period on 12 months. After 12 months has passed from registration date, fees will be applied (notifications will be sent by email). It is the responsibility of the course provider to ensure that information provided about your courses is true, accurate and legal under the laws of the United Kingdom.</br>
Getwork construction accept no responsibility for the validity or content of the courses advertised on getwork.construction website.</br>
Getwork.construction do not receive monies for course booking fees, if you wish to book a course, please contact and pay the course providers directly. It is the responsibility of the course applicant to research the courses offered by the advertisers, getwork.construction will accept no responsibilities for bogus, unwarranted, unlawful or misleading information displayed in the copy or content of any advertised courses.Should you encounter any bogus, illegal or misleading information, please report this to us immediately. 
</p>
<p>You can contact us via email on sales@getwork.construction or surinder@sskservices.co.uk
For any kind of privacy issues, please contact us by phone 03330124302.
</p>
<p>Thank you for your co-operation.</p>                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        {# <section class=\"testimoniial-section light-grey\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"Heading-title black\">
                            <h1>Our Success Stories</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                        </div>
                    </div>
                    <div class=\"owl-testimonial-2\">
                        <div class=\"single_testimonial\">
                            <h4>Just fabulous</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                            <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <img src=\"../images/aboutus/2s.jpg\" alt=\"Jobs in London\">
                            <h3 class=\"\">Emily Copper</h3>
                        </div>
                        <div class=\"single_testimonial\">
                            <h4>Awesome ! Loving It</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                            <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <img src=\"../images/aboutus/3s.jpg\" alt=\"Construction courses in UK\">
                            <h3 class=\"\">Hania Sheikh</h3>
                        </div>
                        <div class=\"single_testimonial\">
                            <h4>Very quick and Fast</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                            <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <img src=\"../images/aboutus/6s.jpg\" alt=\" Post free jobs\">
                            <h3 class=\"\">Arslan Tariq</h3>
                        </div>
                        <div class=\"single_testimonial\">
                            <h4>Just fabulous</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                            <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <img src=\"../images/aboutus/7s.jpg\" alt=\"Construction management\">
                            <h3 class=\"\">Humayun Sarfraz</h3>
                        </div>
                        <div class=\"single_testimonial\">
                            <h4>Very quick and Fast</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                            <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <img src=\"../images/aboutus/1s.jpg\" alt=\"Jobs in London\">
                            <h3 class=\"\">Muhammad Umair</h3>
                        </div>
                        <div class=\"single_testimonial\">
                            <h4>Awesome ! Loving It</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                            <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <img src=\"../images/aboutus/3s.jpg\" alt=\"London jobs\">
                            <h3 class=\"\">Hania Sheikh</h3>
                        </div>
                        <div class=\"single_testimonial\">
                            <h4>Just fabulous</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                            <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <img src=\"../images/aboutus/4s.jpg\" alt=\"Railway jobs\">
                            <h3 class=\"\">Justin Shapes</h3>
                        </div>
                        <div class=\"single_testimonial\">
                            <h4>Awesome ! Loving It</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                            <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <img src=\"../images/aboutus/3s.jpg\" alt=\"Construction courses\">
                            <h3 class=\"\">Hania Sheikh</h3>
                        </div>
                        <div class=\"single_testimonial\">
                            <h4>Very quick and Fast</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                            <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <img src=\"../images/aboutus/6s.jpg\" alt=\"Post free courses\">
                            <h3 class=\"\">Mark Hales</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"Heading-title black\">
                            <h1>Meet Our Team Members</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"team-member\">
                            <div class=\"team-img col-pic1\"> <img src=\"../images/aboutus/team/1.png\" alt=\"team member Construction\" class=\"img-responsive\">
                                <div class=\"team-intro light-txt\">
                                    <h5>Jhon Smith</h5>
                                    <span>founder &amp; ceo</span> </div>
                            </div>
                            <div class=\"team-hover\">
                                <div class=\"desk\">
                                    <h4>Hi There !</h4>
                                    <p>I love to my work and being an entrepreneur.</p>
                                </div>
                                <div class=\"s-link\"> <a href=\"#\"><i class=\"fa fa-facebook\"></i></a> <a href=\"#\"><i class=\"fa fa-twitter\"></i></a> <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"team-member\">
                            <div class=\"team-img col-pic1\"> <img src=\"../images/aboutus/team/2.png\" alt=\"team member Construction management\" class=\"img-responsive\">
                                <div class=\"team-intro light-txt\">
                                    <h5>Emilly Copper</h5>
                                    <span>HR Manager</span> </div>
                            </div>
                            <div class=\"team-hover\">
                                <div class=\"desk\">
                                    <h4>Hi There !</h4>
                                    <p>I love to introduce myself as a hardcore Web Designer.</p>
                                </div>
                                <div class=\"s-link\"> <a href=\"#\"><i class=\"fa fa-facebook\"></i></a> <a href=\"#\"><i class=\"fa fa-twitter\"></i></a> <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"team-member\">
                            <div class=\"team-img\"> <img src=\"../images/aboutus/team/3.png\" alt=\"team member Post courses\" class=\"img-responsive\">
                                <div class=\"team-intro light-txt\">
                                    <h5>James Anderson</h5>
                                    <span>Marketing Manager</span> </div>
                            </div>
                            <div class=\"team-hover\">
                                <div class=\"desk\">
                                    <h4>I love to design</h4>
                                    <p>I love to introduce myself as a hardcore Web Designer.</p>
                                </div>
                                <div class=\"s-link\"> <a href=\"#\"><i class=\"fa fa-facebook\"></i></a> <a href=\"#\"><i class=\"fa fa-twitter\"></i></a> <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"team-member\">
                            <div class=\"team-img col-pic1\"> <img src=\"../images/aboutus/team/4.png\" alt=\"team member Railway jobs\" class=\"img-responsive\">
                                <div class=\"team-intro light-txt\">
                                    <h5>Marinton Smith</h5>
                                    <span>UI/UX Expert</span> </div>
                            </div>
                            <div class=\"team-hover\">
                                <div class=\"desk\">
                                    <h4>Hi There !</h4>
                                    <p>I love to introduce myself as a hardcore Web Designer.</p>
                                </div>
                                <div class=\"s-link\"> <a href=\"#\"><i class=\"fa fa-facebook\"></i></a> <a href=\"#\"><i class=\"fa fa-twitter\"></i></a> <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


 #}
{% endblock %}", "aboutus.twig", "/home/getwork/public_html/application/views/aboutus.twig");
    }
}
