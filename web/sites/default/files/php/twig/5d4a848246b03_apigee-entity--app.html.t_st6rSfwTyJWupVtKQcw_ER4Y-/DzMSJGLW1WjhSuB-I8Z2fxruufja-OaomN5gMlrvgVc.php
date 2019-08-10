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

/* apigee-entity--app.html.twig */
class __TwigTemplate_cfdadcffa0f1ee14a359585a589396e2a77a8861eaa7b85a9154cbbdd39199d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 43, "set" => 44, "block" => 50];
        $filters = ["clean_class" => 46, "escape" => 53, "t" => 58, "without" => 89];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['clean_class', 'escape', 't', 'without'],
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
        // line 42
        echo "
";
        // line 43
        if (twig_in_filter($this->getAttribute(($context["entity"] ?? null), "getEntityTypeId", []), [0 => "developer_app", 1 => "team_app"])) {
            // line 44
            echo "  ";
            $context["classes"] = [0 => "apigee-entity--app", 1 => ("apigee-entity--app--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 46
($context["view_mode"] ?? null))))];
        }
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 51
        echo "  ";
        $context["tab_suffix"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["entity"] ?? null), "name", [])));
        // line 52
        echo "
  <div";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    <ul class=\"nav nav-tabs--secondary mb-4\">
      ";
        // line 55
        if (($this->getAttribute(($context["content"] ?? null), "callbackUrl", []) || $this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "primary_wrapper", []))) {
            // line 56
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link active\" id=\"keys-tab-";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\" data-toggle=\"tab\" href=\"#keys-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\">
            ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Keys"));
            echo "
          </a>
        </li>
      ";
        }
        // line 62
        echo "
      ";
        // line 63
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "secondary_wrapper", [])) {
            // line 64
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" id=\"products-tab-";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\" data-toggle=\"tab\" href=\"#products-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\">
            ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Products"));
            echo "
          </a>
        </li>
      ";
        }
        // line 70
        echo "
      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"details-tab-";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
        echo "\" data-toggle=\"tab\" href=\"#details-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
        echo "\">
          ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Details"));
        echo "
        </a>
      </li>
    </ul>

    <div class=\"tab-content\">
      ";
        // line 79
        if (($this->getAttribute(($context["content"] ?? null), "callbackUrl", []) || $this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "primary_wrapper", []))) {
            // line 80
            echo "        <div class=\"tab-pane show active\" id=\"keys-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "status", [])), "html", null, true);
            echo "
          ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "callbackUrl", [])), "html", null, true);
            echo "
          ";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "primary_wrapper", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 86
        echo "
      ";
        // line 87
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "secondary_wrapper", [])) {
            // line 88
            echo "        <div class=\"tab-pane\" id=\"products-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 89
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "secondary_wrapper", [])), "title"), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 92
        echo "
      <div class=\"tab-pane\" id=\"details-";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "status", "callbackUrl", "credentials"), "html", null, true);
        echo "
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "apigee-entity--app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 94,  184 => 93,  181 => 92,  175 => 89,  170 => 88,  168 => 87,  165 => 86,  159 => 83,  155 => 82,  151 => 81,  146 => 80,  144 => 79,  135 => 73,  129 => 72,  125 => 70,  118 => 66,  112 => 65,  109 => 64,  107 => 63,  104 => 62,  97 => 58,  91 => 57,  88 => 56,  86 => 55,  81 => 53,  78 => 52,  75 => 51,  69 => 50,  66 => 49,  63 => 46,  61 => 44,  59 => 43,  56 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "apigee-entity--app.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app.html.twig");
    }
}
