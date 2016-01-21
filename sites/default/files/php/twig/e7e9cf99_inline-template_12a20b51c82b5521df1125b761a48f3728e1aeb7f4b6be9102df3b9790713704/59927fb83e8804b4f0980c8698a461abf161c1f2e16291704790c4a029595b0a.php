<?php

/* {# inline_template_start #}<div class="col-xs-12 col-sm-4 articles">
    <h1 class="title">{{ title }}</h1>
    <img class="image img-responsive" src="{{ field_image }}" />
    <p>{{ body }}</p>
    <p>Tags: {{ field_tags }}</p>
</div> */
class __TwigTemplate_a58300749596c8c26738ac9af75f18c3ad7bd49074732c31532d6ca7eb7c73bf extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"col-xs-12 col-sm-4 articles\">
    <h1 class=\"title\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h1>
    <img class=\"image img-responsive\" src=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "\" />
    <p>";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</p>
    <p>Tags: ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_tags"]) ? $context["field_tags"] : null), "html", null, true));
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-xs-12 col-sm-4 articles\">
    <h1 class=\"title\">{{ title }}</h1>
    <img class=\"image img-responsive\" src=\"{{ field_image }}\" />
    <p>{{ body }}</p>
    <p>Tags: {{ field_tags }}</p>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 5,  59 => 4,  55 => 3,  51 => 2,  48 => 1,);
    }
}
/* {# inline_template_start #}<div class="col-xs-12 col-sm-4 articles">*/
/*     <h1 class="title">{{ title }}</h1>*/
/*     <img class="image img-responsive" src="{{ field_image }}" />*/
/*     <p>{{ body }}</p>*/
/*     <p>Tags: {{ field_tags }}</p>*/
/* </div>*/
