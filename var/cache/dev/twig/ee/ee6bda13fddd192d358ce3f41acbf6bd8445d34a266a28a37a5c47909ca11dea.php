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

/* app/index.html.twig */
class __TwigTemplate_9f49b10cdc880e9bbc6c6e3781fe11b8c0bf8b439372a541d1277e0f3c1f679c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Success Project • Cartagena";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Hero Section -->
    <section style=\"background-image: url('./assets/images/cartagena.png')\" class=\"w-full h-screen bg-cover bg-no-repeat bg-center flex flex-col lg:flex-row justify-center items-center gap-12 p-8 lg:p-0\">
        <div class=\"bg-success-orange/50 backdrop-blur p-8 rounded-xl text-white text-center max-w-md\">
            <h2 class=\"text-4xl mb-4 font-bold\">SUCCESS Project</h2>
            <p class=\"text-lg mb-8\">Join the success community to become the better engineer you can be!</p>
            <a href=\"#about\" class=\"bg-success-white/50 rounded-lg p-4 hover:bg-success-orange/50 font-bold text-success-orange/80 hover:text-white  duration-300\">About us?</a>
        </div>
        <h2 class=\"text-6xl lg:text-8xl font-bold text-white opacity-75 \">Cartagena</h2>
    </section>

    <!-- About us Section -->
    <section class=\"relative mb-16 lg:mb-[200px]\" id=\"about\">
        <h2 class=\"text-success-white/90 font-bold text-8xl lg:text-10xl\">About</h2>
        <h3 class=\"text-success-orange -mt-8 mb-8 w-9/12 mx-auto\">About us</h3>

        <div class=\"rounded-full w-[220px] h-[220px] bg-success-orange absolute top-16 -left-[140px] -z-10\"></div>

        <div class=\"w-11/12 lg:w-9/12 mx-auto flex flex-col gap-16\">

            <div class=\"flex flex-col gap-6 lg:flex-row lg:justify-between\">
                <h4 class=\"font-bold text-4xl lg:w-3/12\">What is project SUCCESS?</h4>
                <div class=\"lg:text-right lg:w-1/2\">
                    <p class=\"font-bold text-lg mb-4\">Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum</p>
                    <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum mattis fusceut persecenas. Eros mus</p>
                </div>
            </div>

            <div class=\"flex flex-col-reverse gap-4 lg:gap-0 lg:flex-row lg:justify-between items-center\">
                <div class=\"lg:w-1/2\">
                    <p class=\"font-bold text-lg mb-4\">Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum</p>
                    <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum mattis fusceut persecenas. Eros mus</p>
                </div>
                <h4 class=\"font-bold text-4xl lg:w-3/12 lg:text-right\">Why is this project relevant?</h4>
            </div>

            <div class=\"flex flex-col gap-4 lg:gap-0 lg:flex-row justify-between items-center\">
                <h4 class=\"font-bold text-4xl\">Who will participate?</h4>
                <div class=\"lg:w-1/2\">
                    <p class=\"font-bold text-lg mb-4 lg:text-right\">Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum</p>
                    <p class=\"lg:text-right\">Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum mattis fusceut persecenas. Eros mus</p>
                </div>
            </div>

            <div class=\"hidden lg:flex flex-col justify-center gap-6 \">
                <div class=\"flex gap-10 justify-center relative\">
                    <div class=\"rounded-full w-[220px] h-[220px] bg-success-orange absolute -top-16 left-[160px] -z-10 flex-wrap\"></div>

                    <img src=\"./assets/images/cartagena2.png\" alt=\"\">
                    <img src=\"./assets/images/dresden2.png\" alt=\"\">
                    <img src=\"./assets/images/riga2.png\" alt=\"\">
                    <img src=\"./assets/images/paris2.png\" alt=\"\">
                </div>
                <p class=\"w-1/2 mx-auto text-center\">Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum mattis fusceut persecenas. Eros mus</p>
            </div>

        </div>
    </section>

    <!-- Events Section -->
    <section class=\"bg-success-black text-white pb-16 lg:pb-[200px]\" id=\"events\">
        <h2 class=\"text-black/25 font-bold text-8xl lg:text-10xl ml-auto justify-self-end\">Events</h2>
        <h3 class=\"text-success-orange -mt-8 mb-8 w-9/12 mx-auto\">Events</h3>
        <div class=\"w-9/12 mx-auto flex flex-col gap-16\">

            <div class=\"flex flex-col lg:flex-row lg:gap-16 items-center\">
                <img src=\"./assets/images/cartagena3.png\" alt=\"\" class=\"rounded-xl\">
                <div>
                    <h3 class=\"text-4xl font-bold\">Cartagena</h3>
                    <p class=\"text-success-orange\">April 2022</p>
                    <p class=\"text-xl font-bold\">Activity:</p>
                    <p>Digital Communication in the 21st Century</p>
                </div>
            </div>

            <div class=\"flex flex-col gap-12 lg:gap-0 lg:flex-row justify-between\">

                <div>
                    <img src=\"./assets/images/dresden3.png\" alt=\"\" class=\"rounded-xl\">
                    <div class=\"flex justify-between items-center\">
                        <h4 class=\"text-3xl font-bold lg:my-1\">Dresden</h4>
                        <p class=\"text-success-orange\">January 2023</p>
                    </div>
                    <p class=\"font-bold text-xl\">Activity:</p>
                    <p>English for Specific Purposes Career Panel</p>
                </div>

                <div class=\"lg:w-1/4\">
                    <img src=\"./assets/images/riga3.png\" alt=\"\" class=\"rounded-xl mx-auto\">
                    <div class=\"flex justify-between items-center\">
                        <h4 class=\"text-3xl font-bold lg:my-1\">Riga</h4>
                        <p class=\"text-success-orange\">October 2023</p>
                    </div>
                    <p class=\"font-bold text-xl\">Activity:</p>
                    <p>Virtual Simulation Platform for Improving / Practicing Communication Competences</p>
                </div>

                <div>
                    <img src=\"./assets/images/paris3.png\" alt=\"\" class=\"rounded-xl\">
                    <div class=\"flex justify-between items-center\">
                        <h4 class=\"text-3xl font-bold lg:my-1\">Paris</h4>
                        <p class=\"text-success-orange\">January 2024</p>
                    </div>
                    <p class=\"font-bold text-xl\">Activity:</p>
                    <p>English for Specific Purposes</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Universities Section -->
    <section class=\"mb-16 lg:mb-[200px]\" id=\"universities\">
        <h2 class=\"text-success-white/90 font-bold text-6xl lg:text-10xl\">Universities</h2>
        <h3 class=\"text-success-orange -mt-8 mb-8 text-center\">Project Participants</h3>
        <h4 class=\"text-2xl font-bold text-center\">Discover the participating universities</h4>
        <div class=\"w-9/12 mx-auto flex flex-wrap lg:mt-16 gap-6 justify-center\">

            <a class=\"w-[260px] flex justify-center items-center\" href=\"https://www.upct.es/\" target=\"_blank\">
                <img src=\"./assets/images/UPC.png\" alt=\"\" class=\"object-cover rounded-xl\">
            </a>

            <a class=\"w-[260px] flex justify-center items-center\" href=\"https://tu-dresden.de/\" target=\"_blank\">
                <img src=\"./assets/images/TUD.jpeg\" alt=\"\" class=\"object-cover rounded-xl\">
            </a>

            <a class=\"w-[260px] flex justify-center items-center\" href=\"https://www.devinci.fr/\" target=\"_blank\">
                <img src=\"./assets/images/PULV.png\" alt=\"\" class=\"object-cover rounded-xl\">
            </a>

            <a class=\"w-[260px] flex justify-center items-center\" href=\"https://www.rtu.lv/en\" target=\"_blank\">
                <img src=\"./assets/images/RTU.png\" alt=\"\" class=\"object-cover rounded-xl\">
            </a>

            <a class=\"w-[260px] flex justify-center items-center\" href=\"http://thepyramidgroup.biz/\" target=\"_blank\">
                <img src=\"./assets/images/TPG.png\" alt=\"\" class=\"object-cover rounded-xl\">
            </a>

        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Success Project • Cartagena{% endblock %}

{% block body %}
    <!-- Hero Section -->
    <section style=\"background-image: url('./assets/images/cartagena.png')\" class=\"w-full h-screen bg-cover bg-no-repeat bg-center flex flex-col lg:flex-row justify-center items-center gap-12 p-8 lg:p-0\">
        <div class=\"bg-success-orange/50 backdrop-blur p-8 rounded-xl text-white text-center max-w-md\">
            <h2 class=\"text-4xl mb-4 font-bold\">SUCCESS Project</h2>
            <p class=\"text-lg mb-8\">Join the success community to become the better engineer you can be!</p>
            <a href=\"#about\" class=\"bg-success-white/50 rounded-lg p-4 hover:bg-success-orange/50 font-bold text-success-orange/80 hover:text-white  duration-300\">About us?</a>
        </div>
        <h2 class=\"text-6xl lg:text-8xl font-bold text-white opacity-75 \">Cartagena</h2>
    </section>

    <!-- About us Section -->
    <section class=\"relative mb-16 lg:mb-[200px]\" id=\"about\">
        <h2 class=\"text-success-white/90 font-bold text-8xl lg:text-10xl\">About</h2>
        <h3 class=\"text-success-orange -mt-8 mb-8 w-9/12 mx-auto\">About us</h3>

        <div class=\"rounded-full w-[220px] h-[220px] bg-success-orange absolute top-16 -left-[140px] -z-10\"></div>

        <div class=\"w-11/12 lg:w-9/12 mx-auto flex flex-col gap-16\">

            <div class=\"flex flex-col gap-6 lg:flex-row lg:justify-between\">
                <h4 class=\"font-bold text-4xl lg:w-3/12\">What is project SUCCESS?</h4>
                <div class=\"lg:text-right lg:w-1/2\">
                    <p class=\"font-bold text-lg mb-4\">Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum</p>
                    <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum mattis fusceut persecenas. Eros mus</p>
                </div>
            </div>

            <div class=\"flex flex-col-reverse gap-4 lg:gap-0 lg:flex-row lg:justify-between items-center\">
                <div class=\"lg:w-1/2\">
                    <p class=\"font-bold text-lg mb-4\">Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum</p>
                    <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum mattis fusceut persecenas. Eros mus</p>
                </div>
                <h4 class=\"font-bold text-4xl lg:w-3/12 lg:text-right\">Why is this project relevant?</h4>
            </div>

            <div class=\"flex flex-col gap-4 lg:gap-0 lg:flex-row justify-between items-center\">
                <h4 class=\"font-bold text-4xl\">Who will participate?</h4>
                <div class=\"lg:w-1/2\">
                    <p class=\"font-bold text-lg mb-4 lg:text-right\">Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum</p>
                    <p class=\"lg:text-right\">Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum mattis fusceut persecenas. Eros mus</p>
                </div>
            </div>

            <div class=\"hidden lg:flex flex-col justify-center gap-6 \">
                <div class=\"flex gap-10 justify-center relative\">
                    <div class=\"rounded-full w-[220px] h-[220px] bg-success-orange absolute -top-16 left-[160px] -z-10 flex-wrap\"></div>

                    <img src=\"./assets/images/cartagena2.png\" alt=\"\">
                    <img src=\"./assets/images/dresden2.png\" alt=\"\">
                    <img src=\"./assets/images/riga2.png\" alt=\"\">
                    <img src=\"./assets/images/paris2.png\" alt=\"\">
                </div>
                <p class=\"w-1/2 mx-auto text-center\">Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum mattis fusceut persecenas. Eros mus</p>
            </div>

        </div>
    </section>

    <!-- Events Section -->
    <section class=\"bg-success-black text-white pb-16 lg:pb-[200px]\" id=\"events\">
        <h2 class=\"text-black/25 font-bold text-8xl lg:text-10xl ml-auto justify-self-end\">Events</h2>
        <h3 class=\"text-success-orange -mt-8 mb-8 w-9/12 mx-auto\">Events</h3>
        <div class=\"w-9/12 mx-auto flex flex-col gap-16\">

            <div class=\"flex flex-col lg:flex-row lg:gap-16 items-center\">
                <img src=\"./assets/images/cartagena3.png\" alt=\"\" class=\"rounded-xl\">
                <div>
                    <h3 class=\"text-4xl font-bold\">Cartagena</h3>
                    <p class=\"text-success-orange\">April 2022</p>
                    <p class=\"text-xl font-bold\">Activity:</p>
                    <p>Digital Communication in the 21st Century</p>
                </div>
            </div>

            <div class=\"flex flex-col gap-12 lg:gap-0 lg:flex-row justify-between\">

                <div>
                    <img src=\"./assets/images/dresden3.png\" alt=\"\" class=\"rounded-xl\">
                    <div class=\"flex justify-between items-center\">
                        <h4 class=\"text-3xl font-bold lg:my-1\">Dresden</h4>
                        <p class=\"text-success-orange\">January 2023</p>
                    </div>
                    <p class=\"font-bold text-xl\">Activity:</p>
                    <p>English for Specific Purposes Career Panel</p>
                </div>

                <div class=\"lg:w-1/4\">
                    <img src=\"./assets/images/riga3.png\" alt=\"\" class=\"rounded-xl mx-auto\">
                    <div class=\"flex justify-between items-center\">
                        <h4 class=\"text-3xl font-bold lg:my-1\">Riga</h4>
                        <p class=\"text-success-orange\">October 2023</p>
                    </div>
                    <p class=\"font-bold text-xl\">Activity:</p>
                    <p>Virtual Simulation Platform for Improving / Practicing Communication Competences</p>
                </div>

                <div>
                    <img src=\"./assets/images/paris3.png\" alt=\"\" class=\"rounded-xl\">
                    <div class=\"flex justify-between items-center\">
                        <h4 class=\"text-3xl font-bold lg:my-1\">Paris</h4>
                        <p class=\"text-success-orange\">January 2024</p>
                    </div>
                    <p class=\"font-bold text-xl\">Activity:</p>
                    <p>English for Specific Purposes</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Universities Section -->
    <section class=\"mb-16 lg:mb-[200px]\" id=\"universities\">
        <h2 class=\"text-success-white/90 font-bold text-6xl lg:text-10xl\">Universities</h2>
        <h3 class=\"text-success-orange -mt-8 mb-8 text-center\">Project Participants</h3>
        <h4 class=\"text-2xl font-bold text-center\">Discover the participating universities</h4>
        <div class=\"w-9/12 mx-auto flex flex-wrap lg:mt-16 gap-6 justify-center\">

            <a class=\"w-[260px] flex justify-center items-center\" href=\"https://www.upct.es/\" target=\"_blank\">
                <img src=\"./assets/images/UPC.png\" alt=\"\" class=\"object-cover rounded-xl\">
            </a>

            <a class=\"w-[260px] flex justify-center items-center\" href=\"https://tu-dresden.de/\" target=\"_blank\">
                <img src=\"./assets/images/TUD.jpeg\" alt=\"\" class=\"object-cover rounded-xl\">
            </a>

            <a class=\"w-[260px] flex justify-center items-center\" href=\"https://www.devinci.fr/\" target=\"_blank\">
                <img src=\"./assets/images/PULV.png\" alt=\"\" class=\"object-cover rounded-xl\">
            </a>

            <a class=\"w-[260px] flex justify-center items-center\" href=\"https://www.rtu.lv/en\" target=\"_blank\">
                <img src=\"./assets/images/RTU.png\" alt=\"\" class=\"object-cover rounded-xl\">
            </a>

            <a class=\"w-[260px] flex justify-center items-center\" href=\"http://thepyramidgroup.biz/\" target=\"_blank\">
                <img src=\"./assets/images/TPG.png\" alt=\"\" class=\"object-cover rounded-xl\">
            </a>

        </div>
    </section>
{% endblock %}
", "app/index.html.twig", "/Users/canardev/Sites/404/success/SUCCESS/templates/app/index.html.twig");
    }
}
