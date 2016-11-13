<?php

/* themes/Lexchange/templates/page.html.twig */
class __TwigTemplate_06b52a83c02f6cdf32150fcfc1cb4814929948e2a35257bea34ef20e5fc77784 extends Twig_Template
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
        $tags = array("if" => 112);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        echo "<!-- Offcanvas navigatie -->
<div id=\"wrapper\" class=\"header\">
    <div class=\"offcanvas\" id=\"offcanvas\">
        <!-- Offcanvas Header -->
        <section id=\"offcanvas__header\">
            <a id=\"offcanvas__navigation-toggle\" class=\"navigation-toggle\" href=\"#\" title=\"Close the offcanvas\" data-navtype=\"offcanvas-open\">
                <span>close</span>
            </a>

        </section>
        <!-- Offcanvas Navigation -->
        <nav id=\"offcanvas__navigation\">
              ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gebruikersmenu", array()), "html", null, true));
        echo "            
                <ul class=\"clearfix\">
                ";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
                 </ul>
        </nav><!-- End Offcanvas Navigation -->
    </div><!-- End Offcanvas -->

    <!-- Header Wrapper Navigatie-->
    <div class=\"grid__wrapper\" id=\"header-wrapper\">
        <div class=\"grid__container\">
            <div class=\"grid__row\">
                <div class=\"grid__column-bp1-12\">
                    <header id=\"header\">
                        <a id=\"header__navigation-toggle\" class=\"navigation-toggle\" href=\"#\" data-navtype=\"offcanvas-open\">
                            <span>Toggle</span>
                        </a><!-- End Navigation Toggle -->
                        <!-- Navigation -->
                        <nav id=\"header__navigation\">
                            <ul class=\"clearfix up\">
                               ";
        // line 79
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gebruikersmenu", array()), "html", null, true));
        echo "
                            </ul>
                            <ul class=\"clearfix\">
                                ";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "

                            </ul>

                        </nav>


                    </header>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navigation -->
</div>
<div class=\"layout-container\">
  <header role=\"banner\">
    ";
        // line 98
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </header>


  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 104
        echo "
    <div class=\"layout-content\">
      ";
        // line 106
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 108
        echo "

  </main>

  ";
        // line 112
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 113
            echo "  <hr>
    <footer role=\"contentinfo\">
      ";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 118
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/Lexchange/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 118,  135 => 115,  131 => 113,  129 => 112,  123 => 108,  119 => 106,  115 => 104,  107 => 98,  88 => 82,  82 => 79,  62 => 62,  57 => 60,  43 => 48,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <!-- Offcanvas navigatie -->*/
/* <div id="wrapper" class="header">*/
/*     <div class="offcanvas" id="offcanvas">*/
/*         <!-- Offcanvas Header -->*/
/*         <section id="offcanvas__header">*/
/*             <a id="offcanvas__navigation-toggle" class="navigation-toggle" href="#" title="Close the offcanvas" data-navtype="offcanvas-open">*/
/*                 <span>close</span>*/
/*             </a>*/
/* */
/*         </section>*/
/*         <!-- Offcanvas Navigation -->*/
/*         <nav id="offcanvas__navigation">*/
/*               {{ page.gebruikersmenu }}            */
/*                 <ul class="clearfix">*/
/*                 {{ page.primary_menu }}*/
/*                  </ul>*/
/*         </nav><!-- End Offcanvas Navigation -->*/
/*     </div><!-- End Offcanvas -->*/
/* */
/*     <!-- Header Wrapper Navigatie-->*/
/*     <div class="grid__wrapper" id="header-wrapper">*/
/*         <div class="grid__container">*/
/*             <div class="grid__row">*/
/*                 <div class="grid__column-bp1-12">*/
/*                     <header id="header">*/
/*                         <a id="header__navigation-toggle" class="navigation-toggle" href="#" data-navtype="offcanvas-open">*/
/*                             <span>Toggle</span>*/
/*                         </a><!-- End Navigation Toggle -->*/
/*                         <!-- Navigation -->*/
/*                         <nav id="header__navigation">*/
/*                             <ul class="clearfix up">*/
/*                                {{ page.gebruikersmenu }}*/
/*                             </ul>*/
/*                             <ul class="clearfix">*/
/*                                 {{ page.primary_menu }}*/
/* */
/*                             </ul>*/
/* */
/*                         </nav>*/
/* */
/* */
/*                     </header>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- End Navigation -->*/
/* </div>*/
/* <div class="layout-container">*/
/*   <header role="banner">*/
/*     {{ page.header }}*/
/*   </header>*/
/* */
/* */
/*   <main role="main">*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/* */
/*     <div class="layout-content">*/
/*       {{ page.content }}*/
/*     </div>{# /.layout-content #}*/
/* */
/* */
/*   </main>*/
/* */
/*   {% if page.footer %}*/
/*   <hr>*/
/*     <footer role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>{# /.layout-container #}*/
/* */
