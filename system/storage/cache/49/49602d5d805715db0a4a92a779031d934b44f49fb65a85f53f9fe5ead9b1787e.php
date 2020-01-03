<?php

/* default/template/extension/module/carousel.twig */
class __TwigTemplate_5ab8149fda53a03e0fb2125c46105fefec258c0bb34853db3b38bd3dbfbe1c85 extends Twig_Template
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
        echo "<div class=\"carousel swiper-viewport\">
  <div id=\"carousel";
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
  <div class=\"swiper-pagination carousel";
        // line 9
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('#carousel";
        // line 16
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
    mode: 'horizontal',
    slidesPerView: 5,
    pagination: '.carousel";
        // line 19
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
    paginationClickable: true,
    nextButton: '.carousel .swiper-button-next',
    prevButton: '.carousel .swiper-button-prev',
    autoplay: 2500,
    loop: true
  });
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  68 => 16,  58 => 9,  54 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="carousel swiper-viewport">*/
/*   <div id="carousel{{ module }}" class="swiper-container">*/
/*     <div class="swiper-wrapper">*/
/*       {% for banner in banners %}*/
/*       <div class="swiper-slide text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/*   <div class="swiper-pagination carousel{{ module }}"></div>*/
/*   <div class="swiper-pager">*/
/*     <div class="swiper-button-next"></div>*/
/*     <div class="swiper-button-prev"></div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('#carousel{{ module }}').swiper({*/
/*     mode: 'horizontal',*/
/*     slidesPerView: 5,*/
/*     pagination: '.carousel{{ module }}',*/
/*     paginationClickable: true,*/
/*     nextButton: '.carousel .swiper-button-next',*/
/*     prevButton: '.carousel .swiper-button-prev',*/
/*     autoplay: 2500,*/
/*     loop: true*/
/*   });*/
/* //--></script>*/
/* */
