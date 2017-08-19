<?php

/* C:\xampp\htdocs\sunman/themes/sunman/layouts/default.htm */
class __TwigTemplate_12b2f31b9630e60a92aed700a2b81ced193997d14c267b59b5a06222384d0d51 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
<title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo " - SUNMAN</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"sunman\" />
<script type=\"application/x-javascript\">
      addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
 </script>
<link href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.css");
        echo "\" rel='stylesheet' type='text/css'/>
<link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
\t    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
<link href='//fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type=\"text/javascript\" src=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/move-top.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/easing.js");
        echo "\"></script>
 <script type=\"text/javascript\">
\t\tjQuery(document).ready(function(\$) {
\t\t\t\$(\".scroll\").click(function(event){
\t\t\t\tevent.preventDefault();
\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1200);
\t\t\t});
\t\t});
\t</script>
\t <!------ Light Box ------>
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/swipebox.css");
        echo "\">
    <script src=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.swipebox.min.js");
        echo "\"></script>
    <script type=\"text/javascript\">
\t\tjQuery(function(\$) {
\t\t\t\$(\".swipebox\").swipebox();
\t\t});
\t</script>
    <!------ Eng Light Box ------>

";
        // line 37
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 38
        echo "</head>
<body>



<!-- content -->
";
        // line 44
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 45
        echo "
<!-- content end -->

<!-- footer -->
";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "<!-- footer end -->



<script src=\"";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.wmuSlider.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.mixitup.min.js");
        echo "\"></script>
<script>
\$(\"span.menu\").click(function(){
  \$(\".top-menu ul\").slideToggle(\"slow\" , function(){
  });
});

\$('.example1').wmuSlider();

\$(function () {

  var filterList = {

    init: function () {

      // MixItUp plugin
      // http://mixitup.io
      \$('#portfoliolist').mixitup({
        targetSelector: '.portfolio',
        filterSelector: '.filter',
        effects: ['fade'],
        easing: 'snap',
        // call the hover effect
        onMixEnd: filterList.hoverEffect()
      });

    },

    hoverEffect: function () {

      // Simple parallax effect
      \$('#portfoliolist .portfolio').hover(
        function () {
          \$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
          \$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
        },
        function () {
          \$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
          \$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
        }
      );
    }
  };

  // Run the show!
  filterList.init();

  \$(document).ready(function() {
    /*
    var defaults = {
        containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear'
    };
    */

    \$().UItoTop({ easingType: 'easeOutQuart' });

  });

});

</script>


";
        // line 121
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 122
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 123
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sunman/themes/sunman/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 123,  190 => 122,  183 => 121,  114 => 55,  110 => 54,  104 => 50,  100 => 49,  94 => 45,  92 => 44,  84 => 38,  81 => 37,  70 => 29,  66 => 28,  53 => 18,  49 => 17,  43 => 14,  38 => 12,  34 => 11,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
<title>{{ this.page.title }} - SUNMAN</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"sunman\" />
<script type=\"application/x-javascript\">
      addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
 </script>
<link href=\"{{ 'assets/css/bootstrap.css'|theme }}\" rel='stylesheet' type='text/css'/>
<link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
\t    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"{{'assets/js/jquery.min.js'|theme}}\"></script>
<link href='//fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type=\"text/javascript\" src=\"{{ 'assets/js/move-top.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/easing.js'|theme }}\"></script>
 <script type=\"text/javascript\">
\t\tjQuery(document).ready(function(\$) {
\t\t\t\$(\".scroll\").click(function(event){
\t\t\t\tevent.preventDefault();
\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1200);
\t\t\t});
\t\t});
\t</script>
\t <!------ Light Box ------>
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/swipebox.css'|theme }}\">
    <script src=\"{{ 'assets/js/jquery.swipebox.min.js'|theme }}\"></script>
    <script type=\"text/javascript\">
\t\tjQuery(function(\$) {
\t\t\t\$(\".swipebox\").swipebox();
\t\t});
\t</script>
    <!------ Eng Light Box ------>

{% styles %}
</head>
<body>



<!-- content -->
{% page %}

<!-- content end -->

<!-- footer -->
{% partial 'site/footer' %}
<!-- footer end -->



<script src=\"{{'assets/js/jquery.wmuSlider.js'|theme}}\"></script>
<script type=\"text/javascript\" src=\"{{'assets/js/jquery.mixitup.min.js'|theme}}\"></script>
<script>
\$(\"span.menu\").click(function(){
  \$(\".top-menu ul\").slideToggle(\"slow\" , function(){
  });
});

\$('.example1').wmuSlider();

\$(function () {

  var filterList = {

    init: function () {

      // MixItUp plugin
      // http://mixitup.io
      \$('#portfoliolist').mixitup({
        targetSelector: '.portfolio',
        filterSelector: '.filter',
        effects: ['fade'],
        easing: 'snap',
        // call the hover effect
        onMixEnd: filterList.hoverEffect()
      });

    },

    hoverEffect: function () {

      // Simple parallax effect
      \$('#portfoliolist .portfolio').hover(
        function () {
          \$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
          \$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
        },
        function () {
          \$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
          \$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
        }
      );
    }
  };

  // Run the show!
  filterList.init();

  \$(document).ready(function() {
    /*
    var defaults = {
        containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear'
    };
    */

    \$().UItoTop({ easingType: 'easeOutQuart' });

  });

});

</script>


{% framework extras %}
{% scripts %}

</body>
</html>", "C:\\xampp\\htdocs\\sunman/themes/sunman/layouts/default.htm", "");
    }
}
