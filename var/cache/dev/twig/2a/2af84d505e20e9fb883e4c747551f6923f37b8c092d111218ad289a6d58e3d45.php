<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f8013b187e7a49949aa24d25b57f82dbf6736c4d0afe406f5b012001d79496f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da73562c029a32c9cf62a7e0f9c288a36d3e2bfe77f7eb117898e299d0cef64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da73562c029a32c9cf62a7e0f9c288a36d3e2bfe77f7eb117898e299d0cef64e->enter($__internal_da73562c029a32c9cf62a7e0f9c288a36d3e2bfe77f7eb117898e299d0cef64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_da1cb079adb677e9dc6f2c8877f8718f42a6838559c8138bef594e42655a9be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1cb079adb677e9dc6f2c8877f8718f42a6838559c8138bef594e42655a9be3->enter($__internal_da1cb079adb677e9dc6f2c8877f8718f42a6838559c8138bef594e42655a9be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da73562c029a32c9cf62a7e0f9c288a36d3e2bfe77f7eb117898e299d0cef64e->leave($__internal_da73562c029a32c9cf62a7e0f9c288a36d3e2bfe77f7eb117898e299d0cef64e_prof);

        
        $__internal_da1cb079adb677e9dc6f2c8877f8718f42a6838559c8138bef594e42655a9be3->leave($__internal_da1cb079adb677e9dc6f2c8877f8718f42a6838559c8138bef594e42655a9be3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e03d60cad0835d2c9c9278498003fa2c170950384b72500103e555c7735a873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e03d60cad0835d2c9c9278498003fa2c170950384b72500103e555c7735a873->enter($__internal_5e03d60cad0835d2c9c9278498003fa2c170950384b72500103e555c7735a873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0578eb146f1fd8d791f69c32d3c7642a204a44c914593c547602b556e328bd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0578eb146f1fd8d791f69c32d3c7642a204a44c914593c547602b556e328bd29->enter($__internal_0578eb146f1fd8d791f69c32d3c7642a204a44c914593c547602b556e328bd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0578eb146f1fd8d791f69c32d3c7642a204a44c914593c547602b556e328bd29->leave($__internal_0578eb146f1fd8d791f69c32d3c7642a204a44c914593c547602b556e328bd29_prof);

        
        $__internal_5e03d60cad0835d2c9c9278498003fa2c170950384b72500103e555c7735a873->leave($__internal_5e03d60cad0835d2c9c9278498003fa2c170950384b72500103e555c7735a873_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_785e3eb293f032369ff29ed4dc0a0f3f77920971322ad48b81e7ec468edd3009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785e3eb293f032369ff29ed4dc0a0f3f77920971322ad48b81e7ec468edd3009->enter($__internal_785e3eb293f032369ff29ed4dc0a0f3f77920971322ad48b81e7ec468edd3009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3634a04abc03c190cad857f44225a65a025c2539149f9e1d252da644a875b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3634a04abc03c190cad857f44225a65a025c2539149f9e1d252da644a875b21->enter($__internal_e3634a04abc03c190cad857f44225a65a025c2539149f9e1d252da644a875b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e3634a04abc03c190cad857f44225a65a025c2539149f9e1d252da644a875b21->leave($__internal_e3634a04abc03c190cad857f44225a65a025c2539149f9e1d252da644a875b21_prof);

        
        $__internal_785e3eb293f032369ff29ed4dc0a0f3f77920971322ad48b81e7ec468edd3009->leave($__internal_785e3eb293f032369ff29ed4dc0a0f3f77920971322ad48b81e7ec468edd3009_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce1e2bba1f7fbbc8c14a2a5211045a6c71b0b2ad2bc8fd9c1dee2fd69e04f99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1e2bba1f7fbbc8c14a2a5211045a6c71b0b2ad2bc8fd9c1dee2fd69e04f99d->enter($__internal_ce1e2bba1f7fbbc8c14a2a5211045a6c71b0b2ad2bc8fd9c1dee2fd69e04f99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3b88693c2a04acf0c2d3428d68cf6468389a5f6f097746c1c2eeea6c7891c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b88693c2a04acf0c2d3428d68cf6468389a5f6f097746c1c2eeea6c7891c5a->enter($__internal_e3b88693c2a04acf0c2d3428d68cf6468389a5f6f097746c1c2eeea6c7891c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e3b88693c2a04acf0c2d3428d68cf6468389a5f6f097746c1c2eeea6c7891c5a->leave($__internal_e3b88693c2a04acf0c2d3428d68cf6468389a5f6f097746c1c2eeea6c7891c5a_prof);

        
        $__internal_ce1e2bba1f7fbbc8c14a2a5211045a6c71b0b2ad2bc8fd9c1dee2fd69e04f99d->leave($__internal_ce1e2bba1f7fbbc8c14a2a5211045a6c71b0b2ad2bc8fd9c1dee2fd69e04f99d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
