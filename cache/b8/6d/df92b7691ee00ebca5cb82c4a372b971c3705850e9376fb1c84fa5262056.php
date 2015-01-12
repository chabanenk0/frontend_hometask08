<?php

/* layout.html.twig */
class __TwigTemplate_b86ddf92b7691ee00ebca5cb82c4a372b971c3705850e9376fb1c84fa5262056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headercontent' => array($this, 'block_headercontent'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <!-- Содержание титула тут сделано блоком - чтобы в других шаблонах можно было легко вставить туда другой текст -->
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"frontend/styles/styles.css\" />
</head>

<body>

<div class=\"header-wrapper\">
    <div class=\"header\">
        <h1>
            <img class=\"logo\" src=\"frontend/images/logo.png\" alt=\"Geekhub logo\" />
        </h1>
        <ul class=\"social-links\">
            <li>
                <a href=\"#\"><img src=\"images/facebook.gif\" alt=\"facebook link\" /></a>
            </li>
            <li>
                <a href=\"#\"><img src=\"images/vk.gif\" alt=\"vk link\" /></a>
            </li>
            <li>
                <a href=\"#\"><img src=\"images/twitter.gif\" alt=\"twitter link\" /></a>
            </li>
            <li>
                <a href=\"#\"><img src=\"images/youtube.gif\" alt=\"youtube link\" /></a>
            </li>
        </ul>
        <!-- Поскольку код для меню в хедере и в футере оказался одинаковым,
             я его вынес в отдельный шаблон и буду подключать там, где его уместно вставить -->
        ";
        // line 33
        $this->env->loadTemplate("menu.html.twig")->display($context);
        // line 34
        echo "    </div>
    ";
        // line 35
        $this->displayBlock('headercontent', $context, $blocks);
        // line 42
        echo "</div>
<div class=\"wrapper\">
<div class=\"content\">
    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "</div>
<div class=\"pre-footer\">
    <div class=\"facebook-block\">

    </div>
    <div class=\"certificates\">
        <a href=\"#\">
            <img src=\"images/certificates.png\" alt=\"certificates\" />
        </a>
    </div>
    <div class=\"sponsors\">
        <h3>Наши спонсоры</h3>
        <ul>
            <li>
                <a href=\"#\">
                    <img src=\"images/dim_evangelie_logo.png\" alt=\"Дім Євангеліє\">
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <img src=\"images/master_of_code_logo.png\" alt=\"Master of code\">
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <img src=\"images/sergium_logo.png\" alt=\"Sergium\">
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <img src=\"images/sponsor_logo4.png\" alt=\"sponsor\">
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <img src=\"images/sponsor_logo5.png\" alt=\"sponsor5\">
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
<div class=\"footer\">
    ";
        // line 92
        $this->env->loadTemplate("menu.html.twig")->display($context);
        // line 93
        echo "    <span class=\"copyright\">
        &copy copyright 2014
    </span>
</div>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Page title ";
    }

    // line 35
    public function block_headercontent($context, array $blocks = array())
    {
        // line 36
        echo "    <div class=\"register\">
        <p>Реєстрація на другий сезон відкрита!</p>
        <a href=\"#\">Зареєструватися</a>

    </div>
    ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "        <!-- Это пример блока. Его содержание можно поменять в другом шаблоне,
             который будет базироваться на этом -->
    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 46,  148 => 45,  139 => 36,  136 => 35,  130 => 6,  120 => 93,  118 => 92,  73 => 49,  71 => 45,  66 => 42,  64 => 35,  61 => 34,  59 => 33,  29 => 6,  22 => 1,);
    }
}
