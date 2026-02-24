<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/mon_theme/templates/menu--main.html.twig */
class __TwigTemplate_7b720ed521552cf436ab18d967bce6e5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<header class=\"site-header\">
  <div class=\"header-container\">
    <div class=\"header-left\">
      <a href=\"/\" class=\"logo-link\">
        <img src=\"/themes/custom/mon_theme/logo.jpg\" alt=\"Logo\" class=\"site-logo\">
      </a>
    </div>

    <nav class=\"header-nav\">
      ";
        // line 10
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 11
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 11, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "
    </nav>

    <div class=\"header-right\">
      <span class=\"header-icon\">🔍</span>
      <span class=\"header-icon\">💬</span>
      <div class=\"lang-selector\">
        <img src=\"https://flagcdn.com/w20/fr.png\" alt=\"FR\">
        <span class=\"arrow-down\">▾</span>
      </div>
    </div>
  </div>
</header>


";
        // line 26
        if ((($tmp =  !($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 27), "html", null, true);
            yield "
";
        }
        // line 29
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "is_front", "page"]);        yield from [];
    }

    // line 30
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "  ";
            $macros["menus"] = $this;
            // line 32
            yield "  <ul class=\"nav-list\">
    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                yield "      <li class=\"nav-item\">
        ";
                // line 35
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "          <button class=\"nav-link-toggle\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 36), "html", null, true);
                    yield " <span class=\"arrow\">▾</span></button>
          <div class=\"dropdown-panel\">
            <div class=\"dropdown-inner\">
              <div class=\"promo-content\">
                <h2 class=\"promo-title\">Some long text in to the 2 lines</h2>
                <a href=\"#\" class=\"promo-link\">Here is the link →</a>
              </div>
              <div class=\"software-grid\">
                ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 44));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                        // line 45
                        yield "                  <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "url", [], "any", false, false, true, 45), "html", null, true);
                        yield "\" class=\"software-card\">

\t\t\t";
                        // line 47
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "image_url", [], "any", false, false, true, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 48
                            yield "        <div class=\"card-image\">
          <img src=\"";
                            // line 49
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "image_url", [], "any", false, false, true, 49), "html", null, true);
                            yield "\" alt=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "title", [], "any", false, false, true, 49), "html", null, true);
                            yield "\">
        </div>
      ";
                        }
                        // line 52
                        yield "                    <div class=\"card-info\">
                      <span class=\"card-name\">";
                        // line 53
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "title", [], "any", false, false, true, 53), "html", null, true);
                        yield "</span>
                      <p class=\"card-desc\">";
                        // line 54
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "description", [], "any", false, false, true, 54), "html", null, true);
                        yield "</p>
                      <span class=\"card-more\">Voir plus ></span>
                    </div>
                  </a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['sub_item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    yield "              </div>
            </div>
          </div>
        ";
                } else {
                    // line 63
                    yield "          <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 63), "html", null, true);
                    yield "\" class=\"nav-link-simple\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 63), "html", null, true);
                    yield "</a>
        ";
                }
                // line 65
                yield "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "  </ul>
";
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/mon_theme/templates/menu--main.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  194 => 67,  187 => 65,  179 => 63,  173 => 59,  162 => 54,  158 => 53,  155 => 52,  147 => 49,  144 => 48,  142 => 47,  136 => 45,  132 => 44,  120 => 36,  118 => 35,  115 => 34,  111 => 33,  108 => 32,  105 => 31,  91 => 30,  84 => 29,  78 => 27,  76 => 26,  57 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/mon_theme/templates/menu--main.html.twig", "/var/www/html/web/themes/custom/mon_theme/templates/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 10, "if" => 26, "macro" => 30, "for" => 33];
        static $filters = ["escape" => 27];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'macro', 'for'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
