<?php

/* calc.html */
class __TwigTemplate_b27f1d623989a77bb88f58a87f0eaffafca0f7bf53b381e689b6997104b06011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "calc.html", 1);
        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        echo " przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h2 class=\"content-head is-center\">Kalkulator kredytowy</h2>

<div class=\"pure-g\">
<div class=\"l-box-lrg pure-u-1 pure-u-med-2-5\">
\t<form class=\"pure-form pure-form-stacked\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["app_url"]) ? $context["app_url"] : null), "html", null, true);
        echo "/app/calc.php\" method=\"post\">
\t\t<fieldset>

\t\t\t<label for=\"id_x\">Kwota kredytu:</label>
\t\t\t<input id=\"id_x\" type=\"text\" placeholder=\"Kwota kredytu\" name=\"kwota\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["kwota"]) ? $context["kwota"] : null), "html", null, true);
        echo "\">

\t\t\t<label for=\"id_proc\">Na jaki procent:</label>
\t\t\t<input id=\"id_proc\" type=\"text\" placeholder=\"Na jaki procent\" name=\"procent\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["procent"]) ? $context["procent"] : null), "html", null, true);
        echo "\">

\t\t\t<label for=\"id_y\">Na ile lat: </label>
\t\t\t<input id=\"id_y\" type=\"text\" placeholder=\"Na ile lat\" name=\"lata\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["lata"]) ? $context["lata"] : null), "html", null, true);
        echo "\">
\t\t\t

\t\t\t<button type=\"submit\" class=\"pure-button\">Oblicz ratę</button>
\t\t</fieldset>
\t</form>
</div>

<div class=\"l-box-lrg pure-u-1 pure-u-med-3-5\">";
        // line 32
        if (array_key_exists("messages", $context)) {
            // line 33
            if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) > 0)) {
                // line 34
                ob_start();
                // line 35
                echo "\t\t<h4>Wystąpiły błędy: </h4>
\t\t<ol class=\"err\">";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 38
                    echo "\t\t\t<li>";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t\t</ol>";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            }
        }
        // line 46
        if (array_key_exists("infos", $context)) {
            // line 47
            if ((twig_length_filter($this->env, (isset($context["infos"]) ? $context["infos"] : null)) > 0)) {
                // line 48
                ob_start();
                // line 49
                echo "\t\t<h4>Wystąpiły informacje: </h4>
\t\t<ol class=\"inf\">";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) ? $context["infos"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 52
                    echo "\t\t\t<li>";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t</ol>";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            }
        }
        // line 59
        if (array_key_exists("result", $context)) {
            // line 60
            echo "\t<h4>Miesięczna rata :</h4>
\t<p class=\"res\">";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
            echo "
\t</p>";
        }
        // line 65
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "calc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 65,  132 => 62,  129 => 60,  127 => 59,  122 => 54,  114 => 52,  110 => 51,  107 => 49,  105 => 48,  103 => 47,  101 => 46,  96 => 40,  88 => 38,  84 => 37,  81 => 35,  79 => 34,  77 => 33,  75 => 32,  64 => 21,  58 => 18,  52 => 15,  45 => 11,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "main.html" %}*/
/* */
/* {% block footer %} przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <h2 class="content-head is-center">Kalkulator kredytowy</h2>*/
/* */
/* <div class="pure-g">*/
/* <div class="l-box-lrg pure-u-1 pure-u-med-2-5">*/
/* 	<form class="pure-form pure-form-stacked" action="{{app_url}}/app/calc.php" method="post">*/
/* 		<fieldset>*/
/* */
/* 			<label for="id_x">Kwota kredytu:</label>*/
/* 			<input id="id_x" type="text" placeholder="Kwota kredytu" name="kwota" value="{{kwota}}">*/
/* */
/* 			<label for="id_proc">Na jaki procent:</label>*/
/* 			<input id="id_proc" type="text" placeholder="Na jaki procent" name="procent" value="{{procent}}">*/
/* */
/* 			<label for="id_y">Na ile lat: </label>*/
/* 			<input id="id_y" type="text" placeholder="Na ile lat" name="lata" value="{{lata}}">*/
/* 			*/
/* */
/* 			<button type="submit" class="pure-button">Oblicz ratę</button>*/
/* 		</fieldset>*/
/* 	</form>*/
/* </div>*/
/* */
/* <div class="l-box-lrg pure-u-1 pure-u-med-3-5">*/
/* */
/* {# wyświeltenie listy błędów, jeśli istnieją #}*/
/* {% if messages is defined %}*/
/* 	{% if messages|length > 0 %} */
/* 		{% spaceless %}*/
/* 		<h4>Wystąpiły błędy: </h4>*/
/* 		<ol class="err">*/
/* 		{% for msg in messages %}*/
/* 			<li>{{ msg }}</li>*/
/* 		{% endfor %}*/
/* 		</ol>*/
/* 		{% endspaceless %}*/
/* 	{% endif %}*/
/* {% endif %}*/
/* */
/* {# wyświeltenie listy informacji, jeśli istnieją #}*/
/* {% if infos is defined %}*/
/* 	{% if infos|length > 0 %} */
/* 		{% spaceless %}*/
/* 		<h4>Wystąpiły informacje: </h4>*/
/* 		<ol class="inf">*/
/* 		{% for msg in infos %}*/
/* 			<li>{{ msg }}</li>*/
/* 		{% endfor %}*/
/* 		</ol>*/
/* 		{% endspaceless %}*/
/* 	{% endif %}*/
/* {% endif %}*/
/* */
/* {% if result is defined %}*/
/* 	<h4>Miesięczna rata :</h4>*/
/* 	<p class="res">*/
/* 	{{result}}*/
/* 	</p>*/
/* {% endif %}*/
/* */
/* </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
