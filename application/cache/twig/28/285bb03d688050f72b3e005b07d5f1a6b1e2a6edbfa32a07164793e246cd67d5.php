<?php

/* footer.twig */
class __TwigTemplate_04efd9f6d9fd560d3d30127b57201eae06846b6d31e94d90185958ebef5c9053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'customScripts' => array($this, 'block_customScripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fixed-footer\">
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3 col-xs-12\">
                    <div class=\"footer_block\"> <a href=\"index.html\" class=\"f_logo\"><img src=\"http://frescoserver.com/getwork/images/logo.png\" class=\"img-responsive\" alt=\"logo\"></a>
                        <p>Aoluptas sit aspernatur aut odit aut fugit, sed elits quias horisa hinoe magni  magni dolores eos qui ratione volust luptatem sequised .</p>
                        <div class=\"social-bar\">
                            <ul>
                                <li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-pinterest\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-behance\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-instagram\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-2 col-xs-12\">
                    <div class=\"footer_block\">
                        <h4>Hot Links</h4>
                        <ul class=\"footer-links\">
                            <li> <a href=\"#\">Home</a> </li>
                            <li> <a href=\"#\">About Us</a> </li>
                            <li> <a href=\"#\">Privacy</a> </li>
                            <li> <a href=\"#\">Contact Us</a> </li>
                            <li> <a href=\"#\">Term & Conditions</a> </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-4 col-xs-12\">
                    <div class=\"footer_block dark_gry\">
                        <h4>Recent Posts</h4>
                        <ul class=\"recentpost\">
                            <li> <span><a class=\"plus\" href=\"#\"><img src=\"http://frescoserver.com/getwork/images/footer/1.png\" alt=\"\" /><i>+</i></a></span>
                                <p><a href=\"#\">Fusce gravida tortor felis, ac dictum risus sagittis</a></p>
                                <h3>Sep 15, 2016</h3>
                            </li>
                            <li> <span><a class=\"plus\" href=\"#\"><img src=\"http://frescoserver.com/getwork/images/footer/2.png\" alt=\"\" /><i>+</i></a></span>
                                <p><a href=\"#\">Fusce gravida tortor felis, ac dictum risus sagittis</a></p>
                                <h3>Fab 10, 2016</h3>
                            </li>
                            <li> <span><a class=\"plus\" href=\"#\"><img src=\"http://frescoserver.com/getwork/images/footer/3.png\" alt=\"\" /><i>+</i></a></span>
                                <p><a href=\"#\">Fusce gravida tortor felis, ac dictum risus sagittis</a></p>
                                <h3>Fab 10, 2016</h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 col-xs-12\">
                    <div class=\"footer_block\">
                        <h4>Contact Information</h4>
                        <ul class=\"personal-info\">
                            <li><i class=\"fa fa-map-marker\"></i> 3rd Floor,Link Arcade Model Town, BBL, USA.</li>
                            <li><i class=\"fa fa-envelope\"></i> Support@domain.com</li>
                            <li><i class=\"fa fa-phone\"></i> (0092)+ 124 45 78 678 </li>
                            <li><i class=\"fa fa-clock-o\"></i> Mon - Sun: 8:00 - 16:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class=\"footer-bottom-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"footer-bottom\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <p>Copyright ©2016  - Opportunities Job Directory Template - All rights Reserved. Made By <a href=\"http://themeforest.net/user/scriptsbundle\"> ScriptsBundle </a></p>
                                <p>Reproduction of material from scriptsBundle without permission is strictly prohibited. </p>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm\">
                                <ul class=\"footer-menu\">
                                    <li> <a href=\"#\">Jobs in australia</a> </li>
                                    <li> <a href=\"#\">Jobs in malaysia</a> </li>
                                    <li> <a href=\"#\">Jobs in england</a> </li>
                                    <li> <a href=\"#\">Jobs in saudi arabia</a> </li>
                                    <li> <a href=\"#\">Jobs in south africa</a> </li>
                                    <li> <a href=\"#\">Jobs in saudi Pakistan</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class=\"modal add-resume-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\">
    <div class=\"modal-dialog modal-md\" role=\"document\">
        <div class=\"modal-content\">
            <form action=\"/dashboard/resumeUpload\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add New Resume</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"input-group image-preview form-group\">
                        <input type=\"text\" class=\"form-control image-preview-filename\" disabled=\"disabled\">
                        <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                            <span class=\"glyphicon glyphicon-remove\"></span> Clear
                        </button>
                        <div class=\"btn btn-default image-preview-input\">
                            <span class=\"glyphicon glyphicon-folder-open\"></span>
                            <span class=\"image-preview-input-title\">Browse</span>
                            <input type=\"file\" accept=\"file_extension\" name=\"resume\" />
                        </div>
                        </span>
                    </div>
                    <p>Only pdf and doc files are accepted</p>
                </div>
                <div class=\"modal-footer\">
                    <input class=\"btn btn-default\" type=\"submit\" value=\"save resume\" />
                </div>
            </form>
        </div>
    </div>
</div>

<a href=\"#\" class=\"scrollup\"><i class=\"fa fa-chevron-up\"></i></a>


<!-- JAVASCRIPT JS  --> 
<script type=\"text/javascript\" src=\"../../js/jquery-2.2.3.min.js\"></script> 

<!-- BOOTSTRAP CORE JS --> 
<script type=\"text/javascript\" src=\"../../js/bootstrap.min.js\"></script> 

<!-- JQUERY SELECT --> 
<script type=\"text/javascript\" src=\"../../js/select2.min.js\"></script> 

<!-- MEGA MENU --> 
<script type=\"text/javascript\" src=\"../../js/mega_menu.min.js\"></script> 

<!-- JQUERY EASING --> 
<script type=\"text/javascript\" src=\"../../js/easing.js\"></script> 

<!-- JQUERY COUNTERUP --> 
<script type=\"text/javascript\" src=\"../../js/counterup.js\"></script> 

<!-- JQUERY WAYPOINT --> 
<script type=\"text/javascript\" src=\"../../js/waypoints.min.js\"></script> 

<!-- JQUERY REVEAL --> 
<script type=\"text/javascript\" src=\"../../js/footer-reveal.min.js\"></script> 

<!-- Owl Carousel --> 
<script type=\"text/javascript\" src=\"../../js/owl-carousel.js\"></script> 

<!-- TOASTER JS -->
    <script type=\"text/javascript\" src=\"../../js/toastr.min.js\"></script>

<!-- CORE JS --> 
";
        // line 160
        echo "
<!-- Custom JS -->
<script type=\"text/javascript\" src=\"../../js/common.js\"></script>
<script type=\"text/javascript\" src=\"../../js/profile.js\"></script>
<script type=\"text/javascript\" src=\"../../js/jScript.js\"></script>

<!--Google Places API -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDFnraxihJRC6oMPZwR59NtfFVMQmOg4qY&libraries=places&callback=window.common.initAutocomplete\"
        async defer></script>

";
        // line 170
        $this->displayBlock('customScripts', $context, $blocks);
    }

    public function block_customScripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  192 => 170,  180 => 160,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fixed-footer\">
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3 col-xs-12\">
                    <div class=\"footer_block\"> <a href=\"index.html\" class=\"f_logo\"><img src=\"http://frescoserver.com/getwork/images/logo.png\" class=\"img-responsive\" alt=\"logo\"></a>
                        <p>Aoluptas sit aspernatur aut odit aut fugit, sed elits quias horisa hinoe magni  magni dolores eos qui ratione volust luptatem sequised .</p>
                        <div class=\"social-bar\">
                            <ul>
                                <li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-pinterest\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-behance\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-instagram\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-2 col-xs-12\">
                    <div class=\"footer_block\">
                        <h4>Hot Links</h4>
                        <ul class=\"footer-links\">
                            <li> <a href=\"#\">Home</a> </li>
                            <li> <a href=\"#\">About Us</a> </li>
                            <li> <a href=\"#\">Privacy</a> </li>
                            <li> <a href=\"#\">Contact Us</a> </li>
                            <li> <a href=\"#\">Term & Conditions</a> </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-4 col-xs-12\">
                    <div class=\"footer_block dark_gry\">
                        <h4>Recent Posts</h4>
                        <ul class=\"recentpost\">
                            <li> <span><a class=\"plus\" href=\"#\"><img src=\"http://frescoserver.com/getwork/images/footer/1.png\" alt=\"\" /><i>+</i></a></span>
                                <p><a href=\"#\">Fusce gravida tortor felis, ac dictum risus sagittis</a></p>
                                <h3>Sep 15, 2016</h3>
                            </li>
                            <li> <span><a class=\"plus\" href=\"#\"><img src=\"http://frescoserver.com/getwork/images/footer/2.png\" alt=\"\" /><i>+</i></a></span>
                                <p><a href=\"#\">Fusce gravida tortor felis, ac dictum risus sagittis</a></p>
                                <h3>Fab 10, 2016</h3>
                            </li>
                            <li> <span><a class=\"plus\" href=\"#\"><img src=\"http://frescoserver.com/getwork/images/footer/3.png\" alt=\"\" /><i>+</i></a></span>
                                <p><a href=\"#\">Fusce gravida tortor felis, ac dictum risus sagittis</a></p>
                                <h3>Fab 10, 2016</h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 col-xs-12\">
                    <div class=\"footer_block\">
                        <h4>Contact Information</h4>
                        <ul class=\"personal-info\">
                            <li><i class=\"fa fa-map-marker\"></i> 3rd Floor,Link Arcade Model Town, BBL, USA.</li>
                            <li><i class=\"fa fa-envelope\"></i> Support@domain.com</li>
                            <li><i class=\"fa fa-phone\"></i> (0092)+ 124 45 78 678 </li>
                            <li><i class=\"fa fa-clock-o\"></i> Mon - Sun: 8:00 - 16:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class=\"footer-bottom-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"footer-bottom\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <p>Copyright ©2016  - Opportunities Job Directory Template - All rights Reserved. Made By <a href=\"http://themeforest.net/user/scriptsbundle\"> ScriptsBundle </a></p>
                                <p>Reproduction of material from scriptsBundle without permission is strictly prohibited. </p>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm\">
                                <ul class=\"footer-menu\">
                                    <li> <a href=\"#\">Jobs in australia</a> </li>
                                    <li> <a href=\"#\">Jobs in malaysia</a> </li>
                                    <li> <a href=\"#\">Jobs in england</a> </li>
                                    <li> <a href=\"#\">Jobs in saudi arabia</a> </li>
                                    <li> <a href=\"#\">Jobs in south africa</a> </li>
                                    <li> <a href=\"#\">Jobs in saudi Pakistan</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class=\"modal add-resume-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\">
    <div class=\"modal-dialog modal-md\" role=\"document\">
        <div class=\"modal-content\">
            <form action=\"/dashboard/resumeUpload\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add New Resume</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"input-group image-preview form-group\">
                        <input type=\"text\" class=\"form-control image-preview-filename\" disabled=\"disabled\">
                        <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                            <span class=\"glyphicon glyphicon-remove\"></span> Clear
                        </button>
                        <div class=\"btn btn-default image-preview-input\">
                            <span class=\"glyphicon glyphicon-folder-open\"></span>
                            <span class=\"image-preview-input-title\">Browse</span>
                            <input type=\"file\" accept=\"file_extension\" name=\"resume\" />
                        </div>
                        </span>
                    </div>
                    <p>Only pdf and doc files are accepted</p>
                </div>
                <div class=\"modal-footer\">
                    <input class=\"btn btn-default\" type=\"submit\" value=\"save resume\" />
                </div>
            </form>
        </div>
    </div>
</div>

<a href=\"#\" class=\"scrollup\"><i class=\"fa fa-chevron-up\"></i></a>


<!-- JAVASCRIPT JS  --> 
<script type=\"text/javascript\" src=\"../../js/jquery-2.2.3.min.js\"></script> 

<!-- BOOTSTRAP CORE JS --> 
<script type=\"text/javascript\" src=\"../../js/bootstrap.min.js\"></script> 

<!-- JQUERY SELECT --> 
<script type=\"text/javascript\" src=\"../../js/select2.min.js\"></script> 

<!-- MEGA MENU --> 
<script type=\"text/javascript\" src=\"../../js/mega_menu.min.js\"></script> 

<!-- JQUERY EASING --> 
<script type=\"text/javascript\" src=\"../../js/easing.js\"></script> 

<!-- JQUERY COUNTERUP --> 
<script type=\"text/javascript\" src=\"../../js/counterup.js\"></script> 

<!-- JQUERY WAYPOINT --> 
<script type=\"text/javascript\" src=\"../../js/waypoints.min.js\"></script> 

<!-- JQUERY REVEAL --> 
<script type=\"text/javascript\" src=\"../../js/footer-reveal.min.js\"></script> 

<!-- Owl Carousel --> 
<script type=\"text/javascript\" src=\"../../js/owl-carousel.js\"></script> 

<!-- TOASTER JS -->
    <script type=\"text/javascript\" src=\"../../js/toastr.min.js\"></script>

<!-- CORE JS --> 
{# <script type=\"text/javascript\" src=\"http://frescoserver.com/getwork/js/custom.js\"></script> #}

<!-- Custom JS -->
<script type=\"text/javascript\" src=\"../../js/common.js\"></script>
<script type=\"text/javascript\" src=\"../../js/profile.js\"></script>
<script type=\"text/javascript\" src=\"../../js/jScript.js\"></script>

<!--Google Places API -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDFnraxihJRC6oMPZwR59NtfFVMQmOg4qY&libraries=places&callback=window.common.initAutocomplete\"
        async defer></script>

{% block customScripts %} {% endblock customScripts %}", "footer.twig", "/home/frescihp/public_html/getwork/application/views/footer.twig");
    }
}
