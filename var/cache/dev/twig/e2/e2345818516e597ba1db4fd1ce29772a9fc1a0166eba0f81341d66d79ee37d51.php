<?php

/* base.html.twig */
class __TwigTemplate_54760178e2afd20d65f9beb08cc368901cb954cbe7d422100dbffaa4bf820fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f402572b85d818a049e7154e156769b1a036e7b3a8692f27a9506867ca70553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f402572b85d818a049e7154e156769b1a036e7b3a8692f27a9506867ca70553->enter($__internal_7f402572b85d818a049e7154e156769b1a036e7b3a8692f27a9506867ca70553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ea28c132f5005bf07c9764d7c0ad39947b7bda0a65ed78ffbdfdd8d47483ed1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea28c132f5005bf07c9764d7c0ad39947b7bda0a65ed78ffbdfdd8d47483ed1d->enter($__internal_ea28c132f5005bf07c9764d7c0ad39947b7bda0a65ed78ffbdfdd8d47483ed1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7f402572b85d818a049e7154e156769b1a036e7b3a8692f27a9506867ca70553->leave($__internal_7f402572b85d818a049e7154e156769b1a036e7b3a8692f27a9506867ca70553_prof);

        
        $__internal_ea28c132f5005bf07c9764d7c0ad39947b7bda0a65ed78ffbdfdd8d47483ed1d->leave($__internal_ea28c132f5005bf07c9764d7c0ad39947b7bda0a65ed78ffbdfdd8d47483ed1d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_638098b7102d1a126c2ca4a030b532ead09fd7078857f5844ef3e60807e874b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638098b7102d1a126c2ca4a030b532ead09fd7078857f5844ef3e60807e874b8->enter($__internal_638098b7102d1a126c2ca4a030b532ead09fd7078857f5844ef3e60807e874b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b091c8c0c8f3982ed4419e15bbe4064d9616ab65a4ccee924cebd7a6474a29b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b091c8c0c8f3982ed4419e15bbe4064d9616ab65a4ccee924cebd7a6474a29b8->enter($__internal_b091c8c0c8f3982ed4419e15bbe4064d9616ab65a4ccee924cebd7a6474a29b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b091c8c0c8f3982ed4419e15bbe4064d9616ab65a4ccee924cebd7a6474a29b8->leave($__internal_b091c8c0c8f3982ed4419e15bbe4064d9616ab65a4ccee924cebd7a6474a29b8_prof);

        
        $__internal_638098b7102d1a126c2ca4a030b532ead09fd7078857f5844ef3e60807e874b8->leave($__internal_638098b7102d1a126c2ca4a030b532ead09fd7078857f5844ef3e60807e874b8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_faaf5961f796fbc7d6fc3aae0d5acfb8c8b27bb6a638a748aed95ea604e92eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faaf5961f796fbc7d6fc3aae0d5acfb8c8b27bb6a638a748aed95ea604e92eab->enter($__internal_faaf5961f796fbc7d6fc3aae0d5acfb8c8b27bb6a638a748aed95ea604e92eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9bf3409fa6db72ea89a06f02c31463877c9727ca931ce9487e53ca23d0a536ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf3409fa6db72ea89a06f02c31463877c9727ca931ce9487e53ca23d0a536ec->enter($__internal_9bf3409fa6db72ea89a06f02c31463877c9727ca931ce9487e53ca23d0a536ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9bf3409fa6db72ea89a06f02c31463877c9727ca931ce9487e53ca23d0a536ec->leave($__internal_9bf3409fa6db72ea89a06f02c31463877c9727ca931ce9487e53ca23d0a536ec_prof);

        
        $__internal_faaf5961f796fbc7d6fc3aae0d5acfb8c8b27bb6a638a748aed95ea604e92eab->leave($__internal_faaf5961f796fbc7d6fc3aae0d5acfb8c8b27bb6a638a748aed95ea604e92eab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb2c042e5ba061837ee1308277e9f52d310e388798ab5549bb7fdc572d8300cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2c042e5ba061837ee1308277e9f52d310e388798ab5549bb7fdc572d8300cb->enter($__internal_cb2c042e5ba061837ee1308277e9f52d310e388798ab5549bb7fdc572d8300cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d06163e1d9608f4b5c3fc8c6db4c51ea00488f96d37e036e5fec33cc72738e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06163e1d9608f4b5c3fc8c6db4c51ea00488f96d37e036e5fec33cc72738e4f->enter($__internal_d06163e1d9608f4b5c3fc8c6db4c51ea00488f96d37e036e5fec33cc72738e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d06163e1d9608f4b5c3fc8c6db4c51ea00488f96d37e036e5fec33cc72738e4f->leave($__internal_d06163e1d9608f4b5c3fc8c6db4c51ea00488f96d37e036e5fec33cc72738e4f_prof);

        
        $__internal_cb2c042e5ba061837ee1308277e9f52d310e388798ab5549bb7fdc572d8300cb->leave($__internal_cb2c042e5ba061837ee1308277e9f52d310e388798ab5549bb7fdc572d8300cb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5fa4c52833ecdc545fd69f12cf1c5300baef93db1df49ff4c7f8dfcaabd3412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5fa4c52833ecdc545fd69f12cf1c5300baef93db1df49ff4c7f8dfcaabd3412->enter($__internal_d5fa4c52833ecdc545fd69f12cf1c5300baef93db1df49ff4c7f8dfcaabd3412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57bbd555cfec4a0d1615c273f0c3621f22f2743b53b6c55309e31ebff6556277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bbd555cfec4a0d1615c273f0c3621f22f2743b53b6c55309e31ebff6556277->enter($__internal_57bbd555cfec4a0d1615c273f0c3621f22f2743b53b6c55309e31ebff6556277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_57bbd555cfec4a0d1615c273f0c3621f22f2743b53b6c55309e31ebff6556277->leave($__internal_57bbd555cfec4a0d1615c273f0c3621f22f2743b53b6c55309e31ebff6556277_prof);

        
        $__internal_d5fa4c52833ecdc545fd69f12cf1c5300baef93db1df49ff4c7f8dfcaabd3412->leave($__internal_d5fa4c52833ecdc545fd69f12cf1c5300baef93db1df49ff4c7f8dfcaabd3412_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
