<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/header.html.twig */
class __TwigTemplate_c8dfd882429ff898149688dc246072066d4eb74dd47ed8211881b57794fb86a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<!-- Header Desktop -->
<header class=\"w-full px-2 lg:px-8 h-[60px] flex justify-between items-center shadow-md fixed bg-white z-50\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/succes-logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"h-full py-4\">
    <div class=\"flex flex-col gap-1 lg:hidden\" id=\"burger\">
        <div class=\"bg-success-black h-[4px] w-[30px] rounded-full\"></div>
        <div class=\"bg-success-black h-[4px] w-[30px] rounded-full\"></div>
        <div class=\"bg-success-black h-[4px] w-[30px] rounded-full\"></div>
    </div>

    <nav class=\"hidden lg:block\" id=\"nav\">
        <ul class=\"flex gap-12 font-medium\">
            <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"hover:text-success-orange duration-300\">Home</a></li>
            <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#about\" class=\"hover:text-success-orange duration-300\">About</a></li>
            <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#events\" class=\"hover:text-success-orange duration-300\">Events</a></li>
            <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#universities\" class=\"hover:text-success-orange duration-300\">Universities</a></li>
            <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_index");
        echo "\" class=\"hover:text-success-orange duration-300\">News</a></li>
            <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_index");
        echo "\" class=\"hover:text-success-orange  duration-300\">Medias</a></li>
        </ul>
    </nav>
    <div class=\"hidden lg:flex gap-4\">
        <a href=\"\" target=\"_blank\"  class=\"hover:text-success-orange  duration-300\"><i class=\"fab fa-linkedin fa-lg\"></i></a>
        <a href=\"https://www.facebook.com/project.success21\" target=\"_blank\"  class=\"hover:text-success-orange  duration-300\"><i class=\"fab fa-facebook fa-lg\"></i></a>
        <a href=\"https://www.tiktok.com/@project.success\" target=\"_blank\"  class=\"hover:text-success-orange  duration-300\"><i class=\"fab fa-tiktok fa-lg\"></i></a>
    </div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header Desktop -->
<header class=\"w-full px-2 lg:px-8 h-[60px] flex justify-between items-center shadow-md fixed bg-white z-50\">
    <img src=\"{{ asset('assets/images/succes-logo.png') }}\" alt=\"\" class=\"h-full py-4\">
    <div class=\"flex flex-col gap-1 lg:hidden\" id=\"burger\">
        <div class=\"bg-success-black h-[4px] w-[30px] rounded-full\"></div>
        <div class=\"bg-success-black h-[4px] w-[30px] rounded-full\"></div>
        <div class=\"bg-success-black h-[4px] w-[30px] rounded-full\"></div>
    </div>

    <nav class=\"hidden lg:block\" id=\"nav\">
        <ul class=\"flex gap-12 font-medium\">
            <li><a href=\"{{ path('home') }}\" class=\"hover:text-success-orange duration-300\">Home</a></li>
            <li><a href=\"{{ path('home') }}#about\" class=\"hover:text-success-orange duration-300\">About</a></li>
            <li><a href=\"{{ path('home') }}#events\" class=\"hover:text-success-orange duration-300\">Events</a></li>
            <li><a href=\"{{ path('home') }}#universities\" class=\"hover:text-success-orange duration-300\">Universities</a></li>
            <li><a href=\"{{ path('news_index') }}\" class=\"hover:text-success-orange duration-300\">News</a></li>
            <li><a href=\"{{ path('media_index') }}\" class=\"hover:text-success-orange  duration-300\">Medias</a></li>
        </ul>
    </nav>
    <div class=\"hidden lg:flex gap-4\">
        <a href=\"\" target=\"_blank\"  class=\"hover:text-success-orange  duration-300\"><i class=\"fab fa-linkedin fa-lg\"></i></a>
        <a href=\"https://www.facebook.com/project.success21\" target=\"_blank\"  class=\"hover:text-success-orange  duration-300\"><i class=\"fab fa-facebook fa-lg\"></i></a>
        <a href=\"https://www.tiktok.com/@project.success\" target=\"_blank\"  class=\"hover:text-success-orange  duration-300\"><i class=\"fab fa-tiktok fa-lg\"></i></a>
    </div>
</header>", "partials/header.html.twig", "/Users/canardev/Sites/404/success/SUCCESS/templates/partials/header.html.twig");
    }
}
