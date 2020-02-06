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

/* home/index.html.twig */
class __TwigTemplate_a02ab178acc998936ff8f071aae0fe3630365733fe15badd200ee75a65de4a9a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "My Tasks | MyBestPro";
        
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
        echo "
<div class=\"jumbotron p-0 pt-4\">
    <div class=\"container\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"col\">
                <label for=\"search\">Filtrer par statut</label>
            </div>
            <div class=\"col\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "status", [], "any", false, false, false, 15), 'row');
        echo "
            </div>
            <div class=\"col\">
                <button class=\"btn btn-outline-info btn-sm\">Recherche</button>
            </div>
        </div>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
<div class=\"container mt-4\">
    <h1 class=\"row justify-content-center\">Tâches</h1>
    <table class=\"table table-hover\">
        <thead>
        <tr class=\"table-dark\">
            <th>Titre</th>
            <th>Déscription</th>
            <th>Statut</th>
            <th>Création</th>
            <th>Modification</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 39
            echo "            <tr class=\"";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 39), "terminée")) {
                echo "table-success";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 39), "en cours")) {
                echo "table-warning";
            }
            echo "\">
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["task"], "createdAt", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "createdAt", [], "any", false, false, false, 43), "d/m/Y à H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                <td> ";
            // line 44
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "createdAt", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, $context["task"], "updatedAt", [], "any", false, false, false, 44))) {
                // line 45
                echo "                        Pas encore modifier
                    ";
            } else {
                // line 47
                echo "                        ";
                ((twig_get_attribute($this->env, $this->source, $context["task"], "updatedAt", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "updatedAt", [], "any", false, false, false, 47), "d/m/Y à H:i"), "html", null, true))) : (print ("")));
                echo "</td>
                    ";
            }
            // line 49
            echo "                <td>
                    <a class=\"btn btn-outline-primary\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <tr>
                <td colspan=\"7\">Aucune tache trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>

    <div class=\"row justify-content-end\">
        <a class=\"btn btn-primary mr-5\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_new");
        echo "\">Create new</a>
    </div>

    <div class=\"pagination row justify-content-center\">
        ";
        // line 66
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 66, $this->source); })()));
        echo "
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 66,  200 => 62,  194 => 58,  185 => 54,  176 => 50,  173 => 49,  167 => 47,  163 => 45,  161 => 44,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  136 => 39,  131 => 38,  111 => 21,  102 => 15,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Tasks | MyBestPro{% endblock %}

{% block body %}

<div class=\"jumbotron p-0 pt-4\">
    <div class=\"container\">
        {{ form_start(form) }}
        <div class=\"form-row\">
            <div class=\"col\">
                <label for=\"search\">Filtrer par statut</label>
            </div>
            <div class=\"col\">
                {{ form_row(form.status) }}
            </div>
            <div class=\"col\">
                <button class=\"btn btn-outline-info btn-sm\">Recherche</button>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
</div>
<div class=\"container mt-4\">
    <h1 class=\"row justify-content-center\">Tâches</h1>
    <table class=\"table table-hover\">
        <thead>
        <tr class=\"table-dark\">
            <th>Titre</th>
            <th>Déscription</th>
            <th>Statut</th>
            <th>Création</th>
            <th>Modification</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        {% for task in tasks %}
            <tr class=\"{% if task.status == 'terminée' %}table-success{% elseif task.status == 'en cours' %}table-warning{% endif %}\">
                <td>{{ task.title }}</td>
                <td>{{ task.description }}</td>
                <td>{{ task.status }}</td>
                <td>{{ task.createdAt ? task.createdAt|date('d/m/Y à H:i') : '' }}</td>
                <td> {% if task.createdAt == task.updatedAt %}
                        Pas encore modifier
                    {% else %}
                        {{ task.updatedAt ? task.updatedAt|date('d/m/Y à H:i') : '' }}</td>
                    {% endif %}
                <td>
                    <a class=\"btn btn-outline-primary\" href=\"{{ path('tasks_edit', {'id': task.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">Aucune tache trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"row justify-content-end\">
        <a class=\"btn btn-primary mr-5\" href=\"{{ path('tasks_new') }}\">Create new</a>
    </div>

    <div class=\"pagination row justify-content-center\">
        {{ knp_pagination_render(tasks) }}
    </div>
</div>

{% endblock %}
", "home/index.html.twig", "/var/www/html/my_tasks/templates/home/index.html.twig");
    }
}
