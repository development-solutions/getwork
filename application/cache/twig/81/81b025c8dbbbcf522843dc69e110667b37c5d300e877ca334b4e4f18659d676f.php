<?php

/* disclaimer.twig */
class __TwigTemplate_c45b3b45991482422732637b73f636bec3fd97b3942460f98ae03acec7569003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "disclaimer.twig", 1);
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
    <meta name=\"description\" content=\"GetWork Construction is not responsible for the validity of the Candidate Profile and/ or any information submitted by candidate for construction jobs\">
    <meta name=\"author\" content=\"GetWork\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title>Disclaimer - GetWork.construction | Construction jobs in UK</title>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "\t<section class=\"contact-us light-grey\">
\t                    <div class=\"disclaimer-header\"><h1>Disclaimer</h1></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"Heading-title black Disclaimer\">
                            
                            <p>
                            \t<ul>
                                   
                            \t\t<li><p>(4:1) GetWork Construction is not responsible for the validity of the Candidate Profile and/ or any information submitted by the candidate.</p> </li>
                            \t\t<li><p>(4:2) GetWork Construction is not responsible and cannot guarantee receipt of communications between Employer and Candidate, nor can we guarantee that when received, either party will read or action the communications.</p></li>
                            \t\t<li><p>(4:3) GetWork Construction are not liable or responsible for any third party content or resources such as links to other sites and resources which are provided by third parties posted by other users of the website along with GetWork Construction services, job vacancy advertisements and display advertising on the GetWork Construction website, these third party services are provided for your information only and do not constitute advice, you access them at your own risk.</p></li>
                            \t\t<li><p>(4:4) Unless expressly stated in writing by us or required by law, we give no warranties of any kind in relation to the materials on the website and in the services. </p></li>
                            \t\t<li><p>(4:5) GetWork Construction accept no liability for loss or damage suffered by action or actions taken by you as a result of relying on any information provided on the website and or in the services provided on our website.</p></li>
                            \t\t<li><p>(4:6) GetWork Construction endeavor to provide you with a trouble free visit to our website, however we cannot guarantee that all of the website and services will be fully functional at all times.</p>
                            \t\t\t<p>GetWork Construction does monitor the website and services and try to fix bugs as quickly as possible, however we do not guarantee that the website and services will run error free and/or free from viruses.</p>
                            \t\t</li>
                            \t\t<li><p>(4:7) Nothing in these General Terms affects any liability which GetWork Construction may have for death or personal injury arising from our negligence, fraud or any other liability which cannot be excluded or limited by law.</p></li>
                              
                            \t</ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



























\t";
    }

    public function getTemplateName()
    {
        return "disclaimer.twig";
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
    <meta name=\"description\" content=\"GetWork Construction is not responsible for the validity of the Candidate Profile and/ or any information submitted by candidate for construction jobs\">
    <meta name=\"author\" content=\"GetWork\">
{% endblock %}
{% block title %}
    <title>Disclaimer - GetWork.construction | Construction jobs in UK</title>
{% endblock %}
{% block content %}
\t<section class=\"contact-us light-grey\">
\t                    <div class=\"disclaimer-header\"><h1>Disclaimer</h1></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"Heading-title black Disclaimer\">
                            
                            <p>
                            \t<ul>
                                   
                            \t\t<li><p>(4:1) GetWork Construction is not responsible for the validity of the Candidate Profile and/ or any information submitted by the candidate.</p> </li>
                            \t\t<li><p>(4:2) GetWork Construction is not responsible and cannot guarantee receipt of communications between Employer and Candidate, nor can we guarantee that when received, either party will read or action the communications.</p></li>
                            \t\t<li><p>(4:3) GetWork Construction are not liable or responsible for any third party content or resources such as links to other sites and resources which are provided by third parties posted by other users of the website along with GetWork Construction services, job vacancy advertisements and display advertising on the GetWork Construction website, these third party services are provided for your information only and do not constitute advice, you access them at your own risk.</p></li>
                            \t\t<li><p>(4:4) Unless expressly stated in writing by us or required by law, we give no warranties of any kind in relation to the materials on the website and in the services. </p></li>
                            \t\t<li><p>(4:5) GetWork Construction accept no liability for loss or damage suffered by action or actions taken by you as a result of relying on any information provided on the website and or in the services provided on our website.</p></li>
                            \t\t<li><p>(4:6) GetWork Construction endeavor to provide you with a trouble free visit to our website, however we cannot guarantee that all of the website and services will be fully functional at all times.</p>
                            \t\t\t<p>GetWork Construction does monitor the website and services and try to fix bugs as quickly as possible, however we do not guarantee that the website and services will run error free and/or free from viruses.</p>
                            \t\t</li>
                            \t\t<li><p>(4:7) Nothing in these General Terms affects any liability which GetWork Construction may have for death or personal injury arising from our negligence, fraud or any other liability which cannot be excluded or limited by law.</p></li>
                              
                            \t</ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



























\t{% endblock %}", "disclaimer.twig", "/home/getwork/public_html/application/views/disclaimer.twig");
    }
}
