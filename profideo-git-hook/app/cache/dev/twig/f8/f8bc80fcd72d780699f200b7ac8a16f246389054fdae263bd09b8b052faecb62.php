<?php

/* base.html.twig */
class __TwigTemplate_ac5c7b49ed6314485b9762b2fdfbd23a2aa66f27597357b5600a20833216c135 extends Twig_Template
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
        $__internal_8917497a578f4c2d32080ba6f7f9b09fa32f9bd803c3f50ebdd7be3c85f72ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8917497a578f4c2d32080ba6f7f9b09fa32f9bd803c3f50ebdd7be3c85f72ef5->enter($__internal_8917497a578f4c2d32080ba6f7f9b09fa32f9bd803c3f50ebdd7be3c85f72ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_8917497a578f4c2d32080ba6f7f9b09fa32f9bd803c3f50ebdd7be3c85f72ef5->leave($__internal_8917497a578f4c2d32080ba6f7f9b09fa32f9bd803c3f50ebdd7be3c85f72ef5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d847b06e2c382357375bdbb56f37102ca8c955de5c6748aa8269788d1a472f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d847b06e2c382357375bdbb56f37102ca8c955de5c6748aa8269788d1a472f3->enter($__internal_2d847b06e2c382357375bdbb56f37102ca8c955de5c6748aa8269788d1a472f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d847b06e2c382357375bdbb56f37102ca8c955de5c6748aa8269788d1a472f3->leave($__internal_2d847b06e2c382357375bdbb56f37102ca8c955de5c6748aa8269788d1a472f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c820b9883d4e4e2560814a2d7ad54001d7bfef1c6326d2618574bc32b28dc112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c820b9883d4e4e2560814a2d7ad54001d7bfef1c6326d2618574bc32b28dc112->enter($__internal_c820b9883d4e4e2560814a2d7ad54001d7bfef1c6326d2618574bc32b28dc112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\"/>
        ";
        
        $__internal_c820b9883d4e4e2560814a2d7ad54001d7bfef1c6326d2618574bc32b28dc112->leave($__internal_c820b9883d4e4e2560814a2d7ad54001d7bfef1c6326d2618574bc32b28dc112_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb558194e4b3c585038a7c44a09235fcc03b86facb0b1d6f70c36be008fa0ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb558194e4b3c585038a7c44a09235fcc03b86facb0b1d6f70c36be008fa0ac2->enter($__internal_bb558194e4b3c585038a7c44a09235fcc03b86facb0b1d6f70c36be008fa0ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb558194e4b3c585038a7c44a09235fcc03b86facb0b1d6f70c36be008fa0ac2->leave($__internal_bb558194e4b3c585038a7c44a09235fcc03b86facb0b1d6f70c36be008fa0ac2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e714342ce16158341196bb12aa18fee1898a1a6e1d456250359769f73bbc1545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e714342ce16158341196bb12aa18fee1898a1a6e1d456250359769f73bbc1545->enter($__internal_e714342ce16158341196bb12aa18fee1898a1a6e1d456250359769f73bbc1545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e714342ce16158341196bb12aa18fee1898a1a6e1d456250359769f73bbc1545->leave($__internal_e714342ce16158341196bb12aa18fee1898a1a6e1d456250359769f73bbc1545_prof);

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
        return array (  96 => 13,  85 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/profideo/workspace/carsonbot/app/Resources/views/base.html.twig");
    }
}
