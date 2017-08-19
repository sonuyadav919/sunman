<?php

/* C:\xampp\htdocs\sunman/themes/sunman/pages/home.htm */
class __TwigTemplate_6719a0b82244f03425271d1fccf8f61652d23ef19813b0641085b437455b6a03 extends Twig_Template
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
        echo "<div class=\"header\" id=\"head\">
\t<div class=\"container\">
\t\t<div class=\"header-top\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"/\"><img alt=\"\" src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.png");
        echo "\"></a>
\t\t\t</div>
      <!-- header -->
\t\t\t";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "      <!-- header end -->
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t<div class=\"index-banner\">
\t\t\t<div class=\"wmuSlider example1\">
\t\t\t\t<div class=\"wmuSliderWrapper\">
\t\t\t\t\t<article style=\"position: absolute; width: 100%; opacity: 0;\">
\t\t\t\t\t\t<div class=\"banner-wrap\">
\t\t\t\t\t\t\t<div class=\"banner_center\">
\t\t\t\t\t\t\t\t<h1>hello world,</h1>
\t\t\t\t\t\t\t\t<h2>i am <span>graphic & web designer</span></h2>
\t\t\t\t\t\t\t\t<h2>from morocco</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article style=\"position: relative; width: 100%; opacity: 1;\">
\t\t\t\t\t\t<div class=\"banner-wrap\">
\t\t\t\t\t\t\t<div class=\"banner_center\">
\t\t\t\t\t\t\t\t<h1>Content here,</h1>
\t\t\t\t\t\t\t\t<h2>Lorem <span>graphic & designer</span></h2>
\t\t\t\t\t\t\t\t<h2>Contrary</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article style=\"position: absolute; width: 100%; opacity: 0;\">
\t\t\t\t\t\t<div class=\"banner-wrap\">
\t\t\t\t\t\t\t<div class=\"banner_center\">
\t\t\t\t\t\t\t\t<h1>Lorem Ipsum ,</h1>
\t\t\t\t\t\t\t\t<h2>Contrary to <span>& designer</span></h2>
\t\t\t\t\t\t\t\t<h2>reproduced below</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"content\">
  <!-- services content -->
  ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contents/services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "  <!-- end services content -->

  <!-- work section -->
  ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contents/work"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "  <!-- end work section -->

  <!-- about section -->
  ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contents/about"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "  <!-- end about section -->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sunman/themes/sunman/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 59,  96 => 58,  91 => 55,  87 => 54,  82 => 51,  78 => 50,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header\" id=\"head\">
\t<div class=\"container\">
\t\t<div class=\"header-top\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"/\"><img alt=\"\" src=\"{{ 'assets/images/logo.png'|theme }}\"></a>
\t\t\t</div>
      <!-- header -->
\t\t\t{% partial 'site/header' %}
      <!-- header end -->
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t<div class=\"index-banner\">
\t\t\t<div class=\"wmuSlider example1\">
\t\t\t\t<div class=\"wmuSliderWrapper\">
\t\t\t\t\t<article style=\"position: absolute; width: 100%; opacity: 0;\">
\t\t\t\t\t\t<div class=\"banner-wrap\">
\t\t\t\t\t\t\t<div class=\"banner_center\">
\t\t\t\t\t\t\t\t<h1>hello world,</h1>
\t\t\t\t\t\t\t\t<h2>i am <span>graphic & web designer</span></h2>
\t\t\t\t\t\t\t\t<h2>from morocco</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article style=\"position: relative; width: 100%; opacity: 1;\">
\t\t\t\t\t\t<div class=\"banner-wrap\">
\t\t\t\t\t\t\t<div class=\"banner_center\">
\t\t\t\t\t\t\t\t<h1>Content here,</h1>
\t\t\t\t\t\t\t\t<h2>Lorem <span>graphic & designer</span></h2>
\t\t\t\t\t\t\t\t<h2>Contrary</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article style=\"position: absolute; width: 100%; opacity: 0;\">
\t\t\t\t\t\t<div class=\"banner-wrap\">
\t\t\t\t\t\t\t<div class=\"banner_center\">
\t\t\t\t\t\t\t\t<h1>Lorem Ipsum ,</h1>
\t\t\t\t\t\t\t\t<h2>Contrary to <span>& designer</span></h2>
\t\t\t\t\t\t\t\t<h2>reproduced below</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"content\">
  <!-- services content -->
  {% partial 'contents/services' %}
  <!-- end services content -->

  <!-- work section -->
  {% partial 'contents/work' %}
  <!-- end work section -->

  <!-- about section -->
  {% partial 'contents/about' %}
  <!-- end about section -->
</div>", "C:\\xampp\\htdocs\\sunman/themes/sunman/pages/home.htm", "");
    }
}
