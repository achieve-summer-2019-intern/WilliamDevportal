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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/forum/forum-list.html.twig */
class __TwigTemplate_8ba0d524668064e91db377782753d93307074903a1f472666c547ee639c2c1fe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 18, "if" => 20];
        $filters = ["escape" => 8, "t" => 11];
        $functions = ["range" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 't'],
                ['range']
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
        // line 7
        echo "
<table id=\"forum-";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["forum_id"] ?? null)), "html", null, true);
        echo "\" class=\"table\">
  <thead>
  <tr>
    <th>";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Forum"));
        echo "</th>
    <th>";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Topics"));
        echo "</th>
    <th>";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Posts"));
        echo "</th>
    <th>";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last post"));
        echo "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forums"] ?? null));
        foreach ($context['_seq'] as $context["child_id"] => $context["forum"]) {
            // line 19
            echo "    <tr id=\"forum-list-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["child_id"]), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "zebra", [])), "html", null, true);
            echo "\">
      <td ";
            // line 20
            if (($this->getAttribute($context["forum"], "is_container", []) == true)) {
                // line 21
                echo "colspan=\"4\" class=\"container\"";
            } else {
                // line 23
                echo "class=\"forum-list__forum pt-4 pb-2\"";
            }
            // line 24
            echo ">
        ";
            // line 30
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["forum"], "depth", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["forum"], "depth", []) > 0)) {
                    echo "<div class=\"indented\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "          <div class=\"forum__icon forum-status-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "icon_class", [])), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "icon_title", [])), "html", null, true);
            echo "\">
            <span class=\"visually-hidden\">";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "icon_title", [])), "html", null, true);
            echo "</span>
          </div>
          <div class=\"d-flex align-items-center\">
            <h4 class=\"forum__name mr-2 mb-0\"><a href=\"";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "link", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "label", [])), "html", null, true);
            echo "</a></h4>
            ";
            // line 36
            if (($this->getAttribute($context["forum"], "new_topics", []) == true)) {
                // line 37
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "new_url", [])), "html", null, true);
                echo "\" class=\"badge badge-primary\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "new_text", [])), "html", null, true);
                echo "</a>
            ";
            }
            // line 39
            echo "          </div>
          ";
            // line 40
            if ($this->getAttribute($this->getAttribute($context["forum"], "description", []), "value", [])) {
                // line 41
                echo "            <div class=\"forum__description text-muted mt-1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["forum"], "description", []), "value", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 43
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["forum"], "depth", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["forum"], "depth", []) > 0)) {
                    echo "</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      </td>
      ";
            // line 45
            if (($this->getAttribute($context["forum"], "is_container", []) == false)) {
                // line 46
                echo "        <td class=\"forum__topics pt-4 pb-2\">
          ";
                // line 47
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "num_topics", [])), "html", null, true);
                echo "
        </td>
        <td class=\"forum__posts pt-4 pb-2\">";
                // line 49
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "num_posts", [])), "html", null, true);
                echo "</td>
        <td class=\"forum__last-reply pt-4 pb-2\">";
                // line 50
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "last_reply", [])), "html", null, true);
                echo "</td>
      ";
            }
            // line 52
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['child_id'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/forum/forum-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 54,  191 => 52,  186 => 50,  182 => 49,  177 => 47,  174 => 46,  172 => 45,  169 => 44,  157 => 43,  151 => 41,  149 => 40,  146 => 39,  138 => 37,  136 => 36,  130 => 35,  124 => 32,  117 => 31,  105 => 30,  102 => 24,  99 => 23,  96 => 21,  94 => 20,  87 => 19,  83 => 18,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  58 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/forum/forum-list.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/forum/forum-list.html.twig");
    }
}
