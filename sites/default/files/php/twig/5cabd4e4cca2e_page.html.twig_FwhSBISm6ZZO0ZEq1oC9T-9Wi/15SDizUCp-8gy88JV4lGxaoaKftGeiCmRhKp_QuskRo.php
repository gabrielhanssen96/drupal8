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

/* themes/writer/templates/page.html.twig */
class __TwigTemplate_b20059fcae141bff8dcd9205093d8c1d9c7b5b3615dae36ca4770fc1fc45d960 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 91];
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
        // line 80
        echo "<div id=\"wrapper\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header", [])), "html", null, true);
        echo "
  <header role=\"banner\" id=\"site-header\">
  \t<div class=\"head-wrap clearfix\">
      ";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
      ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
        echo "
\t  </div>
  </header>

  ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "post_header", [])), "html", null, true);
        echo "

  ";
        // line 91
        if (($context["messages"] ?? null)) {
            // line 92
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 94
        echo "
  <main role=\"main\" class=\"main-content\">
  \t<a id=\"main-content\"></a>";
        // line 97
        echo "
    ";
        // line 98
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 99
            echo "      <div id=\"highlighted\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "</div>
    ";
        }
        // line 101
        echo "
    ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 103
        if (($context["title"] ?? null)) {
            // line 104
            echo "      <h1 class=\"title\" id=\"page-title\">
        ";
            // line 105
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
      </h1>
    ";
        }
        // line 108
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

    ";
        // line 110
        if (($context["tabs"] ?? null)) {
            // line 111
            echo "      <nav class=\"tabs\" role=\"navigation\">
        ";
            // line 112
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
            echo "
      </nav>
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

    ";
        // line 118
        if (($context["action_links"] ?? null)) {
            // line 119
            echo "      <nav class=\"action-links\">
        ";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
            echo "
      </nav>
    ";
        }
        // line 123
        echo "
    ";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
  </main>

  <footer class=\"page-footer\">
  \t";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
        echo "
  \t";
        // line 129
        if (($this->getAttribute(($context["page"] ?? null), "footer_left", []) || $this->getAttribute(($context["page"] ?? null), "footer_right", []))) {
            // line 130
            echo "  \t  <div class=\"foot-mid-wrap clearfix\">
\t\t    ";
            // line 131
            if ($this->getAttribute(($context["page"] ?? null), "footer_left", [])) {
                // line 132
                echo "\t\t      <aside role=\"complementary\" id=\"footer_left\">
\t\t        ";
                // line 133
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_left", [])), "html", null, true);
                echo "
\t\t      </aside>
\t\t    ";
            }
            // line 136
            echo "\t\t    ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_right", [])) {
                // line 137
                echo "\t\t\t    <aside role=\"complementary\" id=\"footer_right\">
\t\t\t      ";
                // line 138
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_right", [])), "html", null, true);
                echo "
\t\t\t    </aside>
\t\t    ";
            }
            // line 141
            echo "  \t\t</div>
  \t";
        }
        // line 143
        echo "  \t";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
        echo "
  \t<div class=\"foot-wrap clearfix\">
      ";
        // line 145
        if ($this->getAttribute(($context["page"] ?? null), "footer_message", [])) {
            // line 146
            echo "        <div class=\"foot-links\">
          ";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 150
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_message", [])) {
            // line 151
            echo "        <div class=\"footer-msg\">
          ";
            // line 152
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_message", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 155
        echo "    </div>
  </footer>
</div> <!-- end wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/writer/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 155,  228 => 152,  225 => 151,  222 => 150,  216 => 147,  213 => 146,  211 => 145,  205 => 143,  201 => 141,  195 => 138,  192 => 137,  189 => 136,  183 => 133,  180 => 132,  178 => 131,  175 => 130,  173 => 129,  169 => 128,  162 => 124,  159 => 123,  153 => 120,  150 => 119,  148 => 118,  143 => 116,  140 => 115,  134 => 112,  131 => 111,  129 => 110,  123 => 108,  117 => 105,  114 => 104,  112 => 103,  108 => 102,  105 => 101,  99 => 99,  97 => 98,  94 => 97,  90 => 94,  84 => 92,  82 => 91,  77 => 89,  70 => 85,  66 => 84,  60 => 81,  55 => 80,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/writer/templates/page.html.twig", "/var/www/vhosts/nightsession.de/httpdocs/themes/writer/templates/page.html.twig");
    }
}
