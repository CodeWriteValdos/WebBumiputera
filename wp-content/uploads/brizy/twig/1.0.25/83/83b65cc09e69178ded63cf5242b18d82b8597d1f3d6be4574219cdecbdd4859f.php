<?php

/* page.html.twig */
class __TwigTemplate_58c2504b81ad20322dc51701cb22680400136e1def13d28e486c536b19df9b65 extends Twig_Template
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
        // line 1
        $context["assetsUrl"] = $this->getAttribute($this->getAttribute(($context["editorData"] ?? null), "urls", array()), "assets", array());
        // line 2
        ob_start();
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["assetsUrl"] ?? null), "html", null, true);
        echo "/editor/css/editor.css?ver=";
        echo twig_escape_filter($this->env, ($context["editorVersion"] ?? null), "html", null, true);
        echo "\">
        <style id=\"brz-ed-page-curtain-style\">@keyframes spin{100%{transform:rotate(360deg)}}.brz-ed-page-curtain{position:fixed;left:0;right:0;top:0;bottom:0;background-color:#141923;z-index:1000}.brz-ed-page-spinner,.brz-ed-page-spinner:after,.brz-ed-page-spinner:before{content:'';position:absolute;top:50%;left:50%;border:3px solid transparent;border-radius:50%;animation:spin 1s linear infinite}.brz-ed-page-spinner{width:100px;height:100px;margin:-50px 0 0 -50px;border-top-color:#22b0da;animation-duration:2.5s}.brz-ed-page-spinner:after{width:80px;height:80px;margin:-40px 0 0 -40px;border-right-color:#ed2164;animation-duration:2s}.brz-ed-page-spinner:before{width:60px;height:60px;margin:-30px 0 0 -30px;border-bottom-color:#fff}</style>
        <script src=\"https://cdn.polyfill.io/v2/polyfill.js?features=IntersectionObserver,IntersectionObserverEntry\" defer></script>
    </head>
    <body class=\"brz brz-ed\" style=\"margin: 0;\">
        <div class=\"brz-ed-page-curtain\"><div class=\"brz-ed-page-spinner\"></div></div>
        <iframe id=\"brz-ed-iframe\" class=\"brz-iframe brz-ed-iframe--desktop\" style=\"border: 0; width: 100%; min-height: 100vh; margin: 0 auto;\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["iframe_url"] ?? null), "html", null, true);
        echo "\"></iframe>
    </body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  34 => 9,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page.html.twig", "");
    }
}
