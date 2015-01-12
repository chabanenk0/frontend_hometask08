<?php

/* index.html.twig */
class __TwigTemplate_c8ae4dfa5c4ca73ba3cf88a4b69dc291085b5f62a4209c09d2ab9b26b364be2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Geekhub page!!!";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<!-- это обычный комментарий html. Он будет выведен, но браузером проигнорируется -->

    <p><strong>Geekhub</strong> - це проект, що надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення. На відміну від традиційної освіти, викладачі GeekHub працюють з новітніми технологіями у провідних софтверних компаніях, тому слухачі GeekHub отримують тільки актуальні знання. Якщо ти зацікавлений — запрошуємо ознайомитись з деталями проекту, та зареєструватися слухачем!</p>
    <h2>Наши курсы</h2>
    <div class=\"courses\">
        <!-- Это пример цикла для массива данных о каждом курсе
        фрагмент шаблона, находящийся в цикле, будет несколько раз вставлен в результирующий html-файл,
        но каждый раз - со своими данными -->
         ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 23
            echo "                <div class=\"course\">
                    <!-- Это пример вывода содержимого массива или обьекта: переменная.поле -->
                    <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "alt", array()), "html", null, true);
            echo "\" />
                    <h3>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
            echo " </h3>
                    <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "description", array()), "html", null, true);
            echo "</p>
                    ";
            // line 30
            echo "                </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                <div class=\"clear\"></div>
        <!-- конец цикла -->
    </div>
    <div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  70 => 30,  66 => 27,  62 => 26,  56 => 25,  52 => 23,  48 => 22,  38 => 14,  35 => 12,  29 => 10,);
    }
}
