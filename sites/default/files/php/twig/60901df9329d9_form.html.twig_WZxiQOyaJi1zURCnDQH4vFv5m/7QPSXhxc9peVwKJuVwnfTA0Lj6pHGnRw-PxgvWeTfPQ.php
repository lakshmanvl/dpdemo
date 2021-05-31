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

/* themes/custom/hnl_theme/templates/form.html.twig */
class __TwigTemplate_a7be93f826b189a2a90416bc3b965febc5214b90ae53da4d94874bebaaa67b9d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "if" => 17];
        $filters = ["escape" => 13, "render" => 17];
        $functions = ["url" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'render'],
                ['url']
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
        // line 13
        echo "<form";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
</form>
";
        // line 16
        $context["url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>");
        // line 17
        if (twig_in_filter("user/login", $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["url"] ?? null))))) {
            // line 18
            echo "<div style=\"width: 58%;\">
<a href=\"/user/register\">Create Account</a>
<a href=\"/forgotpassword\" style=\"float:right\">Forgot Password?</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/hnl_theme/templates/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  67 => 17,  65 => 16,  60 => 14,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a 'form' element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 */
#}
<form{{ attributes }}>
  {{ children }}
</form>
{% set url = url('<current>') %}
{% if 'user/login' in url|render|render %}
<div style=\"width: 58%;\">
<a href=\"/user/register\">Create Account</a>
<a href=\"/forgotpassword\" style=\"float:right\">Forgot Password?</a>
</div>
{% endif %}
", "themes/custom/hnl_theme/templates/form.html.twig", "/var/www/html/drupal8/themes/custom/hnl_theme/templates/form.html.twig");
    }
}
