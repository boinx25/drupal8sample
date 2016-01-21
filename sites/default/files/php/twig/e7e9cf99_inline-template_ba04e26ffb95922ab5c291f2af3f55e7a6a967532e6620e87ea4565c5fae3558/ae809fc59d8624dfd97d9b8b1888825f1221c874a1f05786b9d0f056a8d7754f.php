<?php

/* {# inline_template_start #}<div class="col-xs-12 col-sm-12" style="background:url({{ field_hero_image }});">

</div> */
class __TwigTemplate_dea883befe215a5f8988eaa4b4c173ef10ac3f1f7e3f44dd99bac12de85ad977 extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-12\" style=\"background:url(";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_hero_image"]) ? $context["field_hero_image"] : null), "html", null, true));
        echo ");\">

</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-xs-12 col-sm-12\" style=\"background:url({{ field_hero_image }});\">

</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }
}
/* {# inline_template_start #}<div class="col-xs-12 col-sm-12" style="background:url({{ field_hero_image }});">*/
/* */
/* </div>*/
