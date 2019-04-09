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

/* themes/writer/templates/block--system-branding-block.html.twig */
class __TwigTemplate_e0cd37005d018406c129e9f99ccd0da97b9c1fa0e22262083ffdf2027e95428d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/writer/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 19];
        $filters = ["t" => 21];
        $functions = ["path" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t'],
                ['path']
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

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        // line 19
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 20
            echo "    <div class=\"logo-wrap\">
      <a href=\"";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\" id=\"logo\">
        <img src=\"";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" />
      </a>
    </div>
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 28
            echo "    <hgroup class=\"site-name-wrap\">
      ";
            // line 29
            if (($context["site_name"] ?? null)) {
                // line 30
                echo "        <h1 id=\"site-name\">
          <a href=\"";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
        </h1>
      ";
            }
            // line 34
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 35
                echo "        <h2 id=\"site-slogan\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</h2>
      ";
            }
            // line 37
            echo "    </hgroup>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/writer/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 37,  112 => 35,  109 => 34,  101 => 31,  98 => 30,  96 => 29,  93 => 28,  91 => 27,  88 => 26,  79 => 22,  73 => 21,  70 => 20,  67 => 19,  64 => 18,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/writer/templates/block--system-branding-block.html.twig", "/var/www/vhosts/nightsession.de/httpdocs/themes/writer/templates/block--system-branding-block.html.twig");
    }
}
