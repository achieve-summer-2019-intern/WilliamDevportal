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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig */
class __TwigTemplate_0ddb88596898b538b436314469ab0a7a37af438bdd097d3694c660a7a0c0eba7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "embed" => 18];
        $filters = ["clean_class" => 16];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
                ['clean_class'],
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

    protected function doGetParent(array $context)
    {
        // line 14
        return "apigee-entity--app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("apigee-entity--app.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        $context["tab_suffix"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["entity"] ?? null), "name", [])));
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", 18, "1424973001")->display(twig_array_merge($context, ["utility_classes" =>         // line 19
($context["classes"] ?? null), "title" => $this->getAttribute(        // line 20
($context["entity"] ?? null), "label", [])]));
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  74 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  54 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig");
    }
}


/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig */
class __TwigTemplate_0ddb88596898b538b436314469ab0a7a37af438bdd097d3694c660a7a0c0eba7___1424973001 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 29, "for" => 51];
        $filters = ["escape" => 24, "t" => 32, "without" => 68];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'without'],
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

    protected function doGetParent(array $context)
    {
        // line 18
        return "@apigee-kickstart/card/collapsible-card.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@apigee-kickstart/card/collapsible-card.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", 18);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_header($context, array $blocks = [])
    {
        // line 24
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "status", [])), "html", null, true);
        echo "
        ";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "            <ul class=\"nav nav-tabs--secondary mb-4\">
                ";
        // line 29
        if (($this->getAttribute(($context["content"] ?? null), "callbackUrl", []) || $this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "primary_wrapper", []))) {
            // line 30
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"keys-tab-";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\" data-toggle=\"tab\" href=\"#keys-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\">
                            ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Keys"));
            echo "
                        </a>
                    </li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "secondary_wrapper", [])) {
            // line 38
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"products-tab-";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\" data-toggle=\"tab\" href=\"#products-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\">
                            ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Products"));
            echo "
                        </a>
                    </li>
                ";
        }
        // line 44
        echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"details-tab-";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
        echo "\" data-toggle=\"tab\" href=\"#details-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
        echo "\">
                        ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Details"));
        echo "
                    </a>
                </li>

                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional_tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 52
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "url", [])), "html", null, true);
            echo "\" class=\"nav-link\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "title", [])), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </ul>

            <div class=\"tab-content\">
                ";
        // line 59
        if (($this->getAttribute(($context["content"] ?? null), "callbackUrl", []) || $this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "primary_wrapper", []))) {
            // line 60
            echo "                    <div class=\"tab-pane show active\" id=\"keys-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\">
                        ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "callbackUrl", [])), "html", null, true);
            echo "
                        ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "primary_wrapper", [])), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 65
        echo "
                ";
        // line 66
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "secondary_wrapper", [])) {
            // line 67
            echo "                    <div class=\"tab-pane\" id=\"products-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\">
                        ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "secondary_wrapper", [])), "title"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 71
        echo "
                <div class=\"tab-pane\" id=\"details-";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
        echo "\">
                    ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "status", "callbackUrl", "credentials"), "html", null, true);
        echo "
                </div>
            </div>

        ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 73,  290 => 72,  287 => 71,  281 => 68,  276 => 67,  274 => 66,  271 => 65,  265 => 62,  261 => 61,  256 => 60,  254 => 59,  249 => 56,  238 => 53,  235 => 52,  231 => 51,  224 => 47,  218 => 46,  214 => 44,  207 => 40,  201 => 39,  198 => 38,  196 => 37,  193 => 36,  186 => 32,  180 => 31,  177 => 30,  175 => 29,  172 => 28,  169 => 27,  162 => 24,  159 => 23,  149 => 18,  75 => 20,  74 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  54 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig");
    }
}
