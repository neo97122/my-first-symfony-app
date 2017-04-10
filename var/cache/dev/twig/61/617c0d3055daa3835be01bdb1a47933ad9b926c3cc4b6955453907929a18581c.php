<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_d8882ec6daaf57d09a060d8484f36418e87e405dd912c3213ccabb386b80f035 extends Twig_Template
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
        $__internal_61c718b5bb5cca00b5db8302e4c47ad9244a77fe297d10a046710d5d8f0f16c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c718b5bb5cca00b5db8302e4c47ad9244a77fe297d10a046710d5d8f0f16c0->enter($__internal_61c718b5bb5cca00b5db8302e4c47ad9244a77fe297d10a046710d5d8f0f16c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        $__internal_3eff686d0d4abf4c325d79ac0a070860a4f67674fde2831785054c2139d5c723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eff686d0d4abf4c325d79ac0a070860a4f67674fde2831785054c2139d5c723->enter($__internal_3eff686d0d4abf4c325d79ac0a070860a4f67674fde2831785054c2139d5c723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
  <body>
    Hello World!
  </body>
</html>
";
        
        $__internal_61c718b5bb5cca00b5db8302e4c47ad9244a77fe297d10a046710d5d8f0f16c0->leave($__internal_61c718b5bb5cca00b5db8302e4c47ad9244a77fe297d10a046710d5d8f0f16c0_prof);

        
        $__internal_3eff686d0d4abf4c325d79ac0a070860a4f67674fde2831785054c2139d5c723->leave($__internal_3eff686d0d4abf4c325d79ac0a070860a4f67674fde2831785054c2139d5c723_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
  <body>
    Hello World!
  </body>
</html>
", "OCPlatformBundle:Default:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
