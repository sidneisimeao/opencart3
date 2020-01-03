<?php

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_7cb893c5705ca6173eef7e31660fb6a7e47ea23570b0763da88c329a1c16aeeb extends Twig_Template
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
        echo "<div class=\"slideshow swiper-viewport\">
  <div id=\"slideshow";
        // line 2
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"swiper-slide text-center\">";
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </div>
  </div>
  <div class=\"swiper-pagination slideshow";
        // line 9
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('#slideshow";
        // line 16
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
    mode: 'horizontal',
    slidesPerView: 1,
    pagination: '.slideshow";
        // line 19
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
    paginationClickable: true,
    nextButton: '.slideshow .swiper-button-next',
    prevButton: '.slideshow .swiper-button-prev',
    spaceBetween: 30,
    autoplay: \$('#slideshow";
        // line 24
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " img').length > 1 ? 2500 : 0,
    autoplayDisableOnInteraction: true,
    loop: true
  });
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  74 => 19,  68 => 16,  58 => 9,  54 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="slideshow swiper-viewport">*/
/*   <div id="slideshow{{ module }}" class="swiper-container">*/
/*     <div class="swiper-wrapper">*/
/*       {% for banner in banners %}*/
/*       <div class="swiper-slide text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/*   <div class="swiper-pagination slideshow{{ module }}"></div>*/
/*   <div class="swiper-pager">*/
/*     <div class="swiper-button-next"></div>*/
/*     <div class="swiper-button-prev"></div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('#slideshow{{ module }}').swiper({*/
/*     mode: 'horizontal',*/
/*     slidesPerView: 1,*/
/*     pagination: '.slideshow{{ module }}',*/
/*     paginationClickable: true,*/
/*     nextButton: '.slideshow .swiper-button-next',*/
/*     prevButton: '.slideshow .swiper-button-prev',*/
/*     spaceBetween: 30,*/
/*     autoplay: $('#slideshow{{ module }} img').length > 1 ? 2500 : 0,*/
/*     autoplayDisableOnInteraction: true,*/
/*     loop: true*/
/*   });*/
/* //--></script>*/
/* */
