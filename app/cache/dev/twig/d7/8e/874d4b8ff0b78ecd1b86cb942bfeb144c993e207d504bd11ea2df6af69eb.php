<?php

/* TyreTyreBundle:Default:detail.html.twig */
class __TwigTemplate_d78e874d4b8ff0b78ecd1b86cb942bfeb144c993e207d504bd11ea2df6af69eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TyreTyreBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TyreTyreBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .table {
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
       
        

    </style>
";
    }

    // line 27
    public function block_container($context, array $blocks = array())
    {
        // line 28
        echo "
    <h1>Product details</h1>
<div class=\"container\" >
            <a style=\"font-size:18px;\"href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("tyre_tyre_search");
        echo "\">
                <img src=\"http://www.unibay.com/images/tpl/search.png\"> New Search
            </a></br></br>
          <table class=\"table\">
    <tr>
        <th style=\"text-align:center\">Product Title</th>
        <th style=\"text-align:center\">Product Name</th>
        <th style=\"text-align:center\">Product Image</th>
        <th style=\"text-align:center\">Product Price</th>
    </tr>
    ";
        // line 41
        if (((twig_length_filter($this->env, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))) == 0) && (twig_length_filter($this->env, (isset($context["xml_result"]) ? $context["xml_result"] : $this->getContext($context, "xml_result"))) == 0))) {
            // line 42
            echo "        <tr>
        <p style=\"color:red;font-size:18px;\"><img src=\"http://www.pclogger.net/img/error.png\">No matching results found!</p>
        </tr>
    ";
        } else {
            // line 45
            echo "    
       ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 47
                echo "                <tr>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getManufacturer"), "html", null, true);
                echo "</td>
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getName"), "html", null, true);
                echo "</td>
                    <td style=\"text-align:center\"><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getProductImage"), "html", null, true);
                echo "\">
                            <img src=\"http://www.medialabasia.in/images/jpg-icon.png\">
                        </a></td>
                    <td style=\"text-align:center\">";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getPrice"), "html", null, true);
                echo "</td>
                </tr>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    
       
  

       
            ";
            // line 61
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["xml_result"]) ? $context["xml_result"] : $this->getContext($context, "xml_result")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 62
                echo "                <tr>
                    <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "manufacturer"), "html", null, true);
                echo "</td>
                    <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "</td>
                    <td style=\"text-align:center\"><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "product_image"), "html", null, true);
                echo "\">
                            <img src=\"http://www.medialabasia.in/images/jpg-icon.png\">
                        </a></td>
                    <td style=\"text-align:center\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "       
       ";
        }
        // line 72
        echo "  
    </table>
</div>
        ";
    }

    public function getTemplateName()
    {
        return "TyreTyreBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 72,  158 => 71,  149 => 68,  143 => 65,  139 => 64,  135 => 63,  132 => 62,  128 => 61,  121 => 56,  112 => 53,  106 => 50,  102 => 49,  98 => 48,  95 => 47,  91 => 46,  88 => 45,  82 => 42,  80 => 41,  67 => 31,  62 => 28,  59 => 27,  32 => 3,  29 => 2,);
    }
}
