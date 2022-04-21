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

/* partials/footer.html.twig */
class __TwigTemplate_c36c20b9e33b7b3169d8050b79043ec841ac903eceecd39e8b6648ddc7e1acba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
<footer class=\"w-full h-auto bg-success-black text-white py-8 flex flex-col justify-center items-center gap-12\">
    <div class=\"w-11/12 lg:w-9/12 flex flex-col lg:flex-row lg:justify-between\">
        <div>
            <h2 class=\"font-bold text-xl pb-4 text-success-orange\">Navigation</h2>
            <ul>
                <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"hover:text-success-orange duration-300\">Home</a></li>
                <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#about\" class=\"hover:text-success-orange duration-300\">About</a></li>
                <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#events\" class=\"hover:text-success-orange duration-300\">Events</a></li>
                <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#universities\" class=\"hover:text-success-orange duration-300\">Universities</a></li>
                <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_index");
        echo "\" class=\"hover:text-success-orange duration-300\">News</a></li>
                <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_index");
        echo "\" class=\"hover:text-success-orange  duration-300\">Medias</a></li>
            </ul>
        </div>
        <div class=\"flex flex-col items-center\">
            <h2 class=\"font-bold text-xl pb-4 text-success-orange\">Contact Us</h2>
            <form action=\"\" class=\"flex flex-col justify-center gap-4\">
                <table>
                    <tr>
                        <td class=\"pr-2\"><label for=\"name\">Name & Lastname</label></td>
                        <td><input type=\"text\" name=\"name\"></td>
                    </tr>
                    <tr>
                        <td class=\"pr-2\"><label for=\"email\">Email</label></td>
                        <td><input type=\"email\" name=\"email\"></td>
                    </tr>
                    <tr>
                        <td class=\"pr-2\"><label for=\"phone\">Phone Number</label></td>
                        <td><input type=\"number\" name=\"phone\"></td>
                    </tr>
                </table>
                <button type=\"submit\" class=\"bg-success-orange font-medium p-2 duration-300\">Submit</button>
            </form>
        </div>
        <div>
            <h2 class=\"font-bold text-xl pb-4 text-success-orange\">Stay informed</h2>
            <ul>
                <li><a href=\"\"  target=\"_blank\" class=\"hover:text-success-orange duration-300 flex lg:flex-row-reverse gap-2\"><i class=\"fab fa-linkedin fa-lg\"></i>LinkedIn</a></li>
                <li><a href=\"https://www.facebook.com/project.success21\" target=\"_blank\" class=\"hover:text-success-orange duration-300 flex lg:flex-row-reverse gap-2\"><i class=\"fab fa-facebook fa-lg\"></i>FaceBook</a></li>
                <li><a href=\"https://www.tiktok.com/@project.success\"  target=\"_blank\" class=\"hover:text-success-orange duration-300 flex lg:flex-row-reverse gap-2\"><i class=\"fab fa-tiktok fa-lg\"></i>TikTok</a></li>
            </ul>
        </div>
    </div>
    <p>Made with ❤️ by <a href=\"https://www.iim.fr\" target=\"_blank\" class=\"underline font-medium\">404 Devinci 🦖</a></p>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer class=\"w-full h-auto bg-success-black text-white py-8 flex flex-col justify-center items-center gap-12\">
    <div class=\"w-11/12 lg:w-9/12 flex flex-col lg:flex-row lg:justify-between\">
        <div>
            <h2 class=\"font-bold text-xl pb-4 text-success-orange\">Navigation</h2>
            <ul>
                <li><a href=\"{{ path('home') }}\" class=\"hover:text-success-orange duration-300\">Home</a></li>
                <li><a href=\"{{ path('home') }}#about\" class=\"hover:text-success-orange duration-300\">About</a></li>
                <li><a href=\"{{ path('home') }}#events\" class=\"hover:text-success-orange duration-300\">Events</a></li>
                <li><a href=\"{{ path('home') }}#universities\" class=\"hover:text-success-orange duration-300\">Universities</a></li>
                <li><a href=\"{{ path('news_index') }}\" class=\"hover:text-success-orange duration-300\">News</a></li>
                <li><a href=\"{{ path('media_index') }}\" class=\"hover:text-success-orange  duration-300\">Medias</a></li>
            </ul>
        </div>
        <div class=\"flex flex-col items-center\">
            <h2 class=\"font-bold text-xl pb-4 text-success-orange\">Contact Us</h2>
            <form action=\"\" class=\"flex flex-col justify-center gap-4\">
                <table>
                    <tr>
                        <td class=\"pr-2\"><label for=\"name\">Name & Lastname</label></td>
                        <td><input type=\"text\" name=\"name\"></td>
                    </tr>
                    <tr>
                        <td class=\"pr-2\"><label for=\"email\">Email</label></td>
                        <td><input type=\"email\" name=\"email\"></td>
                    </tr>
                    <tr>
                        <td class=\"pr-2\"><label for=\"phone\">Phone Number</label></td>
                        <td><input type=\"number\" name=\"phone\"></td>
                    </tr>
                </table>
                <button type=\"submit\" class=\"bg-success-orange font-medium p-2 duration-300\">Submit</button>
            </form>
        </div>
        <div>
            <h2 class=\"font-bold text-xl pb-4 text-success-orange\">Stay informed</h2>
            <ul>
                <li><a href=\"\"  target=\"_blank\" class=\"hover:text-success-orange duration-300 flex lg:flex-row-reverse gap-2\"><i class=\"fab fa-linkedin fa-lg\"></i>LinkedIn</a></li>
                <li><a href=\"https://www.facebook.com/project.success21\" target=\"_blank\" class=\"hover:text-success-orange duration-300 flex lg:flex-row-reverse gap-2\"><i class=\"fab fa-facebook fa-lg\"></i>FaceBook</a></li>
                <li><a href=\"https://www.tiktok.com/@project.success\"  target=\"_blank\" class=\"hover:text-success-orange duration-300 flex lg:flex-row-reverse gap-2\"><i class=\"fab fa-tiktok fa-lg\"></i>TikTok</a></li>
            </ul>
        </div>
    </div>
    <p>Made with ❤️ by <a href=\"https://www.iim.fr\" target=\"_blank\" class=\"underline font-medium\">404 Devinci 🦖</a></p>
</footer>", "partials/footer.html.twig", "/Users/canardev/Sites/404/success/SUCCESS/templates/partials/footer.html.twig");
    }
}
