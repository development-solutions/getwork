<?php

/* payment.twig */
class __TwigTemplate_16e0a1ba04acb57920016fe5265be90357ae67701017220e4ca31f03ec715389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "payment.twig", 1);
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
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Payment</p>
                    </div>
                    <div class=\"col-md-9 col-sm-12 col-xs-12 nopadding\">
                        <!-- The first line of code specifies the URL for our test environment.-->

                        <form action=\"https://secure-test.worldpay.com/wcc/purchase\" method=POST>

                        <!-- This next line contains the testMode parameter - it specifies that the submission is a test submission -->
                        <input type=\"hidden\" name=\"testMode\" value=\"100\">

                        <!-- This next line contains a mandatory parameter. Put your Installation ID inside the quotes after value= -->
                        <input type=\"hidden\" name=\"instId\" value=\"1162921\">

                        <!-- Another mandatory parameter. Put your own reference identifier for the item purchased inside the quotes after value= -->
                        <input type=\"hidden\" name=\"cartId\" value=\"30\">

                        <!-- Another mandatory parameter. Put the total cost of the item inside the quotes after value= -->
                        <input type=\"hidden\" name=\"amount\" value=\"20\">

                        <!-- Another mandatory parameter. Put the code for the purchase currency inside the quotes after value= -->
                        <input type=\"hidden\" name=\"currency\" value=\"GBP\">

                        <!-- This creates the button. When it is selected in the browser, the form submits the purchase details to us. -->
                        <input type=submit value=\" Buy This \">

                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
    
<section class=\"dashboard-body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"heading-inner first-heading\">
                        <p class=\"title\">Payment</p>
                    </div>
                    <div class=\"col-md-9 col-sm-12 col-xs-12 nopadding\">
                        <!-- The first line of code specifies the URL for our test environment.-->

                        <form action=\"https://secure-test.worldpay.com/wcc/purchase\" method=POST>

                        <!-- This next line contains the testMode parameter - it specifies that the submission is a test submission -->
                        <input type=\"hidden\" name=\"testMode\" value=\"100\">

                        <!-- This next line contains a mandatory parameter. Put your Installation ID inside the quotes after value= -->
                        <input type=\"hidden\" name=\"instId\" value=\"1162921\">

                        <!-- Another mandatory parameter. Put your own reference identifier for the item purchased inside the quotes after value= -->
                        <input type=\"hidden\" name=\"cartId\" value=\"30\">

                        <!-- Another mandatory parameter. Put the total cost of the item inside the quotes after value= -->
                        <input type=\"hidden\" name=\"amount\" value=\"20\">

                        <!-- Another mandatory parameter. Put the code for the purchase currency inside the quotes after value= -->
                        <input type=\"hidden\" name=\"currency\" value=\"GBP\">

                        <!-- This creates the button. When it is selected in the browser, the form submits the purchase details to us. -->
                        <input type=submit value=\" Buy This \">

                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "payment.twig", "/home/getwork/public_html/application/views/payment.twig");
    }
}
