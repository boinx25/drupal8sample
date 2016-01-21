<?php

/* {# inline_template_start #}<div class="col-xs-12 col-sm-12 hero">
<img class="hero-image" src="{{ field_hero_image }}" />
</div> */
class __TwigTemplate_12a3fc39ec0d145915a5fe6f2f30a0c16b46aab23e5271a997113e81d87e2c70 extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-12 hero\">
<img class=\"hero-image\" src=\"";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_hero_image"]) ? $context["field_hero_image"] : null), "html", null, true));
        echo "\" />
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-xs-12 col-sm-12 hero\">
<img class=\"hero-image\" src=\"{{ field_hero_image }}\" />
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 2,  45 => 1,);
    }
}
/* {# inline_template_start #}<div class="col-xs-12 col-sm-12 hero">*/
/* <img class="hero-image" src="{{ field_hero_image }}" />*/
/* </div>*/
