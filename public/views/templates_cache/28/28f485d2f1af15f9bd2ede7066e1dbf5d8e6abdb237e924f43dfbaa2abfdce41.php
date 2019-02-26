<?php

/* index.html */
class __TwigTemplate_047865003017007978a4a4dbea472a8c99668e576bd5045871cf281e9fd6edcd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Index file</title>
</head>
<body>
";
        // line 8
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, strip_tags(($context["the"] ?? null))), "html", null, true);
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, strip_tags(($context["go"] ?? null))), "html", null, true);
        echo "
</br>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ",
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", null, "Europe/Paris"), "html", null, true);
        echo "
";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i", "Europe/Paris"), "html", null, true);
        echo "

greeting = 'Hello ' %}
";
        // line 19
        $context["name"] = "Fabien";
        // line 20
        echo "
";
        // line 21
        echo twig_escape_filter($this->env, (($context["greeting"] ?? null) . twig_lower_filter($this->env, ($context["name"] ?? null))), "html", null, true);
        echo "   ";
        // line 22
        echo "
";
        // line 24
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($context["greeting"] ?? null) . ($context["name"] ?? null))), "html", null, true);
        echo " ";
        // line 25
        echo "
";
        // line 26
        if ((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = "Fabien") && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "F") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) {
        }
        // line 28
        echo "
";
        // line 29
        if ((is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = "Fabien") && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "n") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 === substr($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, -strlen($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))))) {
        }
        // line 31
        echo "
";
        // line 32
        if (preg_match("/^[\\d\\.]+\$/", ($context["phone"] ?? null))) {
        }
        // line 34
        echo "
<input type=\"text\" nam=\"username\" value=\"\" size=\"\" />
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  95 => 32,  92 => 31,  89 => 29,  86 => 28,  83 => 26,  80 => 25,  77 => 24,  74 => 22,  71 => 21,  68 => 20,  66 => 19,  60 => 16,  56 => 15,  53 => 14,  45 => 12,  41 => 11,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/application/public/views/templates/index.html");
    }
}
