<?php

/* default/homepage.html.twig */
class __TwigTemplate_5967dc4fecef59b38cc63c92dcb9c9f4c1813e45b5ab32cc1bce8648cc01e4d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7daee239b38533897c5b3624674e00a6677a28d85917aafc13aa714039f81831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7daee239b38533897c5b3624674e00a6677a28d85917aafc13aa714039f81831->enter($__internal_7daee239b38533897c5b3624674e00a6677a28d85917aafc13aa714039f81831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7daee239b38533897c5b3624674e00a6677a28d85917aafc13aa714039f81831->leave($__internal_7daee239b38533897c5b3624674e00a6677a28d85917aafc13aa714039f81831_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1489146041c7819a53aae02fb35beee9f7bc01800d86d989de3f9246bcb91021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1489146041c7819a53aae02fb35beee9f7bc01800d86d989de3f9246bcb91021->enter($__internal_1489146041c7819a53aae02fb35beee9f7bc01800d86d989de3f9246bcb91021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-6 col-xs-offset-3\">
                <div class=\"text-center page-header\">
                    <div>
                        <img src=\"https://pbs.twimg.com/media/B6dVMHzCYAASEhm.jpg\" />
                    </div>

                    <h1>Carson: The Issue Butler</h1>

                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Repository</th>
                                <th>Needs Review issues &amp; pull requests</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repositories"]) ? $context["repositories"] : $this->getContext($context, "repositories")));
        foreach ($context['_seq'] as $context["_key"] => $context["repository"]) {
            // line 23
            echo "                                <tr>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["repository"], "vendor", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repository"], "name", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["repository"], "needsReviewUrl", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-default\">Needs Review Issues</a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repository'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_1489146041c7819a53aae02fb35beee9f7bc01800d86d989de3f9246bcb91021->leave($__internal_1489146041c7819a53aae02fb35beee9f7bc01800d86d989de3f9246bcb91021_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  74 => 26,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-6 col-xs-offset-3\">
                <div class=\"text-center page-header\">
                    <div>
                        <img src=\"https://pbs.twimg.com/media/B6dVMHzCYAASEhm.jpg\" />
                    </div>

                    <h1>Carson: The Issue Butler</h1>

                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Repository</th>
                                <th>Needs Review issues &amp; pull requests</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for repository in repositories %}
                                <tr>
                                    <td>{{ repository.vendor }}/{{ repository.name }}</td>
                                    <td>
                                        <a href=\"{{ repository.needsReviewUrl }}\" class=\"btn btn-xs btn-default\">Needs Review Issues</a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "default/homepage.html.twig", "/home/profideo/workspace/carsonbot/app/Resources/views/default/homepage.html.twig");
    }
}
