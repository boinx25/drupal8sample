<?php

/* {# inline_template_start #}<div class="col-xs-12 col-sm-12" style="background-image:url('{{ field_hero_image }}');">

</div> */
class __TwigTemplate_1a79f18719840d4a623cc6c437904abe612445ad8ce7d9afbe06d7f307bd0507 extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-12\" style=\"background-image:url('";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_hero_image"]) ? $context["field_hero_image"] : null), "html", null, true));
        echo "');\">

</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-xs-12 col-sm-12\" style=\"background-image:url('{{ field_hero_image }}');\">

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
/* {# inline_template_start #}<div class="col-xs-12 col-sm-12" style="background-image:url('{{ field_hero_image }}');">*/
/* */
/* </div>*/
