<?php

/* {# inline_template_start #}<div class="col-xs-12 col-sm-12" style="height:500px;">

</div> */
class __TwigTemplate_9577e49ee3c23d7dbdf7d70b027bea0f3f20d45744c254d2103ec17b70bf97f2 extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-12\" style=\"height:500px;\">

</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-xs-12 col-sm-12\" style=\"height:500px;\">

</div>";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }
}
/* {# inline_template_start #}<div class="col-xs-12 col-sm-12" style="height:500px;">*/
/* */
/* </div>*/
