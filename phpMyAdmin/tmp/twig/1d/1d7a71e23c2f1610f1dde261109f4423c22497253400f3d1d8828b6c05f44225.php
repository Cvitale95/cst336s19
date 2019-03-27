<?php

/* server/sub_page_header.twig */
class __TwigTemplate_e5a12560c5161ed9e202d37c31a479334c30f8d13643868221948bc07a0f90b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["header"] = ["variables" => ["image" => "s_vars", "text" => _gettext("Server variables and settings")], "engines" => ["image" => "b_engine", "text" => _gettext("Storage engines")], "plugins" => ["image" => "b_engine", "text" => _gettext("Plugins")], "binlog" => ["image" => "s_tbl", "text" => _gettext("Binary log")], "collations" => ["image" => "s_asci", "text" => _gettext("Character sets and collations")], "replication" => ["image" => "s_replication", "text" => _gettext("Replication")], "database_statistics" => ["image" => "s_db", "text" => _gettext("Databases statistics")], "databases" => ["image" => "s_db", "text" => _gettext("Databases")], "privileges" => ["image" => "b_usrlist", "text" => _gettext("Privileges")]];
        // line 40
        echo "<h2>
    ";
        // line 41
        if ((((isset($context["is_image"]) || array_key_exists("is_image", $context))) ? (_twig_default_filter((isset($context["is_image"]) ? $context["is_image"] : null), true)) : (true))) {
            // line 42
            echo "        ";
            echo PhpMyAdmin\Util::getImage($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), (isset($context["type"]) ? $context["type"] : null), [], "array"), "image", [], "array"));
            echo "
    ";
        } else {
            // line 44
            echo "        ";
            echo PhpMyAdmin\Util::getIcon($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), (isset($context["type"]) ? $context["type"] : null), [], "array"), "image", [], "array"));
            echo "
    ";
        }
        // line 46
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), (isset($context["type"]) ? $context["type"] : null), [], "array"), "text", [], "array"), "html", null, true);
        echo "
    ";
        // line 47
        echo (((isset($context["link"]) || array_key_exists("link", $context))) ? (PhpMyAdmin\Util::showMySQLDocu((isset($context["link"]) ? $context["link"] : null))) : (""));
        echo "
</h2>
";
    }

    public function getTemplateName()
    {
        return "server/sub_page_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 47,  38 => 46,  32 => 44,  26 => 42,  24 => 41,  21 => 40,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/sub_page_header.twig", "/home/ubuntu/workspace/phpMyAdmin/templates/server/sub_page_header.twig");
    }
}
