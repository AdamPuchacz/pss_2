<?php

/* main.html */
class __TwigTemplate_783ac3d81910d4a2f3f9260d82afa634b7cf9575d237b810a801c02ce874d392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"pl\">
<head>
    <meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("page_description", $context)) ? (_twig_default_filter((isset($context["page_description"]) ? $context["page_description"] : null), "Opis domyślny")) : ("Opis domyślny")), "html", null, true);
        echo "\">

    <title>";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter((isset($context["page_title"]) ? $context["page_title"] : null), "Tytuł domyślny")) : ("Tytuł domyślny")), "html", null, true);
        echo "</title>

\t<link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.4.2/pure.css\">

    <!--[if lte IE 8]>
        <link rel=\"stylesheet\" href=\"{\$app_url}/css/main-grid-old-ie.css\">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["app_url"]) ? $context["app_url"] : null), "html", null, true);
        echo "/css/main-grid.css\">
    <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel=\"stylesheet\" href=\"{\$app_url}/css/layouts/marketing-old-ie.css\">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["app_url"]) ? $context["app_url"] : null), "html", null, true);
        echo "/css/layouts/marketing.css\">
    <!--<![endif]-->

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["app_url"]) ? $context["app_url"] : null), "html", null, true);
        echo "/css/style.css\">";
        // line 27
        if ((isset($context["hide_intro"]) ? $context["hide_intro"] : null)) {
            // line 28
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["app_url"]) ? $context["app_url"] : null), "html", null, true);
            echo "/css/style_hide_intro.css\">";
        }
        // line 30
        echo "\t
\t<link rel=\"stylesheet\" href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">

\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["app_url"]) ? $context["app_url"] : null), "html", null, true);
        echo "/js/jquery.min.js\"></script>
\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["app_url"]) ? $context["app_url"] : null), "html", null, true);
        echo "/js/softscroll.js\"></script>

</head>
<body>

<div id=\"app_top\" class=\"header\">
    <div class=\"home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed\">
        <a class=\"pure-menu-heading\" href=\"\">";
        // line 41
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter((isset($context["page_title"]) ? $context["page_title"] : null), "Tytuł domyślny")) : ("Tytuł domyślny")), "html", null, true);
        echo "</a>
        <ul>
            <li class=\"pure-menu-selected\"><a href=\"#app_top\">Góra strony</a></li>
            <li><a href=\"#app_content\">Idź do formularza</a></li>
        </ul>
    </div>
</div>

<div class=\"splash-container\">
    <div class=\"splash\">
        <h1 class=\"splash-head\">";
        // line 51
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter((isset($context["page_title"]) ? $context["page_title"] : null), "Tytuł domyślny")) : ("Tytuł domyślny")), "html", null, true);
        echo "</h1>
        <p class=\"splash-subhead\">";
        // line 53
        echo twig_escape_filter($this->env, ((array_key_exists("page_description", $context)) ? (_twig_default_filter((isset($context["page_description"]) ? $context["page_description"] : null), "Opis domyślny")) : ("Opis domyślny")), "html", null, true);
        echo "
        </p>
        <p>
            <a href=\"#app_content\" class=\"pure-button pure-button-primary\">Idź do formularza</a>
        </p>
    </div>
</div>

<div class=\"content-wrapper\">

    <div id=\"app_content\" class=\"content\">";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "
    </div>

    <div class=\"footer l-box is-center\">
\t\t<p>";
        // line 71
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "\t\t</p>
        <p>Widok oparty na stylach i szablonie <a href=\"http://purecss.io/\" target=\"_blank\">Pure CSS Yahoo!</a>. (autor przykładu: Adam Puchałka)</p>
    </div>

</div>


</body>
</html>";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        echo " Domyślna treść zawartości ....";
    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        echo " Domyślna treść stopki ....";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 71,  141 => 65,  129 => 72,  127 => 71,  121 => 66,  119 => 65,  106 => 53,  102 => 51,  89 => 41,  79 => 34,  75 => 33,  70 => 30,  65 => 28,  63 => 27,  60 => 26,  54 => 23,  44 => 16,  33 => 8,  28 => 6,  21 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="pl">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 	<meta name="description" content="{{ page_description|default("Opis domyślny") }}">*/
/* */
/*     <title>{{ page_title|default("Tytuł domyślny") }}</title>*/
/* */
/* 	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">*/
/* */
/*     <!--[if lte IE 8]>*/
/*         <link rel="stylesheet" href="{$app_url}/css/main-grid-old-ie.css">*/
/*     <![endif]-->*/
/*     <!--[if gt IE 8]><!-->*/
/*         <link rel="stylesheet" href="{{app_url}}/css/main-grid.css">*/
/*     <!--<![endif]-->*/
/*   */
/*     <!--[if lte IE 8]>*/
/*         <link rel="stylesheet" href="{$app_url}/css/layouts/marketing-old-ie.css">*/
/*     <![endif]-->*/
/*     <!--[if gt IE 8]><!-->*/
/*         <link rel="stylesheet" href="{{app_url}}/css/layouts/marketing.css">*/
/*     <!--<![endif]-->*/
/* */
/*     <link rel="stylesheet" href="{{app_url}}/css/style.css">*/
/* {% if hide_intro %}*/
/*     <link rel="stylesheet" href="{{app_url}}/css/style_hide_intro.css">*/
/* {% endif %}*/
/* 	*/
/* 	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">*/
/* */
/* 	<script src="{{app_url}}/js/jquery.min.js"></script>*/
/* 	<script src="{{app_url}}/js/softscroll.js"></script>*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <div id="app_top" class="header">*/
/*     <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">*/
/*         <a class="pure-menu-heading" href="">{{ page_title|default("Tytuł domyślny") }}</a>*/
/*         <ul>*/
/*             <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>*/
/*             <li><a href="#app_content">Idź do formularza</a></li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="splash-container">*/
/*     <div class="splash">*/
/*         <h1 class="splash-head">{{ page_title|default("Tytuł domyślny") }}</h1>*/
/*         <p class="splash-subhead">*/
/*              {{ page_description|default("Opis domyślny") }}*/
/*         </p>*/
/*         <p>*/
/*             <a href="#app_content" class="pure-button pure-button-primary">Idź do formularza</a>*/
/*         </p>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="content-wrapper">*/
/* */
/*     <div id="app_content" class="content">*/
/* */
/* {% block content %} Domyślna treść zawartości .... {% endblock %}*/
/* */
/*     </div>*/
/* */
/*     <div class="footer l-box is-center">*/
/* 		<p>*/
/* {% block footer %} Domyślna treść stopki .... {% endblock %}*/
/* 		</p>*/
/*         <p>Widok oparty na stylach i szablonie <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (autor przykładu: Adam Puchałka)</p>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* */
/* </body>*/
/* </html>*/
