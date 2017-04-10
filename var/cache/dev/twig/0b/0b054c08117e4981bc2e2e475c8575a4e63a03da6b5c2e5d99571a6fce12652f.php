<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c32123bc7dccf9b089e4f06070d22e869b418a2b59d2d47d58ebfff8f41661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e1c2b1ec525066449366ae069ca251980a5ec6ca48ad047c31e604eb65f13e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1c2b1ec525066449366ae069ca251980a5ec6ca48ad047c31e604eb65f13e1->enter($__internal_1e1c2b1ec525066449366ae069ca251980a5ec6ca48ad047c31e604eb65f13e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_001713bfd8bef9f387113ca00b2c8eb2b57111686144ab0fb4efb7237a3fc28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001713bfd8bef9f387113ca00b2c8eb2b57111686144ab0fb4efb7237a3fc28d->enter($__internal_001713bfd8bef9f387113ca00b2c8eb2b57111686144ab0fb4efb7237a3fc28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e1c2b1ec525066449366ae069ca251980a5ec6ca48ad047c31e604eb65f13e1->leave($__internal_1e1c2b1ec525066449366ae069ca251980a5ec6ca48ad047c31e604eb65f13e1_prof);

        
        $__internal_001713bfd8bef9f387113ca00b2c8eb2b57111686144ab0fb4efb7237a3fc28d->leave($__internal_001713bfd8bef9f387113ca00b2c8eb2b57111686144ab0fb4efb7237a3fc28d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c6601b993bcfca3f7f960d51cd860ffd20f8143d86f0e546b6f663c83a94dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6601b993bcfca3f7f960d51cd860ffd20f8143d86f0e546b6f663c83a94dd1->enter($__internal_4c6601b993bcfca3f7f960d51cd860ffd20f8143d86f0e546b6f663c83a94dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f0813b97cb92c3170e2bde1c6d8640c895a4328bbf1351a0654212252af29f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0813b97cb92c3170e2bde1c6d8640c895a4328bbf1351a0654212252af29f79->enter($__internal_f0813b97cb92c3170e2bde1c6d8640c895a4328bbf1351a0654212252af29f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f0813b97cb92c3170e2bde1c6d8640c895a4328bbf1351a0654212252af29f79->leave($__internal_f0813b97cb92c3170e2bde1c6d8640c895a4328bbf1351a0654212252af29f79_prof);

        
        $__internal_4c6601b993bcfca3f7f960d51cd860ffd20f8143d86f0e546b6f663c83a94dd1->leave($__internal_4c6601b993bcfca3f7f960d51cd860ffd20f8143d86f0e546b6f663c83a94dd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a8251d52455774e062661e426846892dd1f2db7a2bb12b9e19ffcbc2776aabb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8251d52455774e062661e426846892dd1f2db7a2bb12b9e19ffcbc2776aabb->enter($__internal_5a8251d52455774e062661e426846892dd1f2db7a2bb12b9e19ffcbc2776aabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a32911b86ea6dfa58056814f2ec924a9c773f5d7773cc268653eee6df6c69237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32911b86ea6dfa58056814f2ec924a9c773f5d7773cc268653eee6df6c69237->enter($__internal_a32911b86ea6dfa58056814f2ec924a9c773f5d7773cc268653eee6df6c69237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a32911b86ea6dfa58056814f2ec924a9c773f5d7773cc268653eee6df6c69237->leave($__internal_a32911b86ea6dfa58056814f2ec924a9c773f5d7773cc268653eee6df6c69237_prof);

        
        $__internal_5a8251d52455774e062661e426846892dd1f2db7a2bb12b9e19ffcbc2776aabb->leave($__internal_5a8251d52455774e062661e426846892dd1f2db7a2bb12b9e19ffcbc2776aabb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c8a6d055d68e1e25609fe1a831e2d768f8ea0a4b4edc14edd2fc0c0ed4a135d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8a6d055d68e1e25609fe1a831e2d768f8ea0a4b4edc14edd2fc0c0ed4a135d->enter($__internal_1c8a6d055d68e1e25609fe1a831e2d768f8ea0a4b4edc14edd2fc0c0ed4a135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_997d2b3fb138057500e4f87b533ca00363e981bbe07085403c55206db404f845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997d2b3fb138057500e4f87b533ca00363e981bbe07085403c55206db404f845->enter($__internal_997d2b3fb138057500e4f87b533ca00363e981bbe07085403c55206db404f845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_997d2b3fb138057500e4f87b533ca00363e981bbe07085403c55206db404f845->leave($__internal_997d2b3fb138057500e4f87b533ca00363e981bbe07085403c55206db404f845_prof);

        
        $__internal_1c8a6d055d68e1e25609fe1a831e2d768f8ea0a4b4edc14edd2fc0c0ed4a135d->leave($__internal_1c8a6d055d68e1e25609fe1a831e2d768f8ea0a4b4edc14edd2fc0c0ed4a135d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
