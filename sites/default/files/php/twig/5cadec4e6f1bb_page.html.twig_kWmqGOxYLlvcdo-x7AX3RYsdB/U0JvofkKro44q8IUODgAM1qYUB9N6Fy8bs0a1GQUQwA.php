<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/creative_responsive_theme/templates/layout/page.html.twig */
class __TwigTemplate_2410878232835da7b738be102e31378c34fb96985f0f3ff488f05379c6212076 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 67];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-md-3\">
        ";
        // line 67
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 68
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 70
        echo "      </div>

      ";
        // line 72
        if (($context["show_social_icon"] ?? null)) {
            // line 73
            echo "        <div class=\"col-sm-8 col-md-9\">
          <div class=\"social-media\">
            ";
            // line 75
            if (($context["facebook_url"] ?? null)) {
                // line 76
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
            }
            // line 78
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 79
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
            }
            // line 81
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 82
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
            }
            // line 84
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 85
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
            }
            // line 87
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 88
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
            }
            // line 90
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 91
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 93
            echo "          </div>
        </div>
      ";
        }
        // line 96
        echo "    </div>

    <div class=\"row\">
      <div class=\"navbar-header col-md-12\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button> 

          ";
        // line 108
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 109
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          ";
        }
        // line 111
        echo "        </nav>
      </div>
    </div>
  </div>
</header>
<!--End Header & Navbar -->


<div class=\"container main-menuwrap\">
  
</div>



<!-- Banner -->
  ";
        // line 126
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", []))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 135
        echo "  <!-- End Banner -->


<!--Highlighted-->
  ";
        // line 139
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 140
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 143
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 148
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 152
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 153
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
                // line 154
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 160
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 161
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                    // line 162
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                    echo "
            ";
                }
                // line 164
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 167
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 168
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                    // line 169
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                    echo "
            ";
                }
                // line 171
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 174
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 175
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                    // line 176
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                    echo "
            ";
                }
                // line 178
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 185
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 189
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 190
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 194
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 199
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 208
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 209
            echo "        <div class=\"row\">
          ";
            // line 210
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 213
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 217
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 222
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 223
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 224
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " >
            ";
            // line 225
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 229
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 232
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 233
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 234
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 235
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 239
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 242
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 243
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 244
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 245
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 249
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 255
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 256
            echo "      <div class=\"row\">
        ";
            // line 257
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 260
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->









<!-- start: Footer -->
";
        // line 274
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])))) {
            // line 275
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 281
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 282
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 283
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          ";
            }
            // line 285
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 289
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 290
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 291
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          ";
            }
            // line 293
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 297
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 298
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 299
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          ";
            }
            // line 301
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 307
        echo "<!--End Footer -->

<!-- Start Footer Menu -->
";
        // line 310
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 311
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 315
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
        </div>
        
      </div>
    </div>
  </div>
";
        }
        // line 322
        echo "<!-- End Footer Menu -->

";
        // line 324
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 325
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 331
            if (($context["copyright_text"] ?? null)) {
                echo "        
          <p>";
                // line 332
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null)), "html", null, true);
                echo "</p>        
        ";
            }
            // line 334
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 338
            if (($context["show_credit_link"] ?? null)) {
                // line 339
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 343
            echo "      <!-- End Credit link -->
            
    </div>
  </div>
</div>
";
        }
        // line 349
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/creative_responsive_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 349,  567 => 343,  561 => 339,  559 => 338,  553 => 334,  548 => 332,  544 => 331,  536 => 325,  534 => 324,  530 => 322,  520 => 315,  514 => 311,  512 => 310,  507 => 307,  499 => 301,  493 => 299,  491 => 298,  487 => 297,  481 => 293,  475 => 291,  473 => 290,  469 => 289,  463 => 285,  457 => 283,  455 => 282,  451 => 281,  443 => 275,  441 => 274,  425 => 260,  419 => 257,  416 => 256,  414 => 255,  406 => 249,  399 => 245,  395 => 244,  392 => 243,  390 => 242,  385 => 239,  378 => 235,  374 => 234,  371 => 233,  369 => 232,  364 => 229,  357 => 225,  353 => 224,  350 => 223,  348 => 222,  340 => 217,  334 => 213,  328 => 210,  325 => 209,  323 => 208,  312 => 199,  304 => 194,  298 => 190,  296 => 189,  290 => 185,  281 => 178,  275 => 176,  273 => 175,  269 => 174,  264 => 171,  258 => 169,  256 => 168,  252 => 167,  247 => 164,  241 => 162,  239 => 161,  235 => 160,  227 => 154,  225 => 153,  221 => 152,  215 => 148,  207 => 143,  202 => 140,  200 => 139,  194 => 135,  186 => 130,  179 => 126,  162 => 111,  156 => 109,  154 => 108,  140 => 96,  135 => 93,  129 => 91,  126 => 90,  120 => 88,  117 => 87,  111 => 85,  108 => 84,  102 => 82,  99 => 81,  93 => 79,  90 => 78,  84 => 76,  82 => 75,  78 => 73,  76 => 72,  72 => 70,  66 => 68,  64 => 67,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/creative_responsive_theme/templates/layout/page.html.twig", "C:\\Users\\KTH65T-DOS5W\\Sites\\devdesktop\\drupal-demo\\themes\\creative_responsive_theme\\templates\\layout\\page.html.twig");
    }
}
