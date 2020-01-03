<?php

/* install/step_3.twig */
class __TwigTemplate_0453ed4928d6132bf6e63c3f1e170630eb0a0e4d2e01d426e17766bd8420d2a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">3
          <small>/4</small>
        </h1>
        <h3>
          ";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "<br>
          <small>";
        // line 11
        echo (isset($context["text_step_3"]) ? $context["text_step_3"] : null);
        echo "</small>
        </h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\"/></div>
      </div>
    </div>
  </header>
  ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 24
        echo "  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <p>";
        // line 27
        echo (isset($context["text_db_connection"]) ? $context["text_db_connection"] : null);
        echo "</p>
        <fieldset>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-driver\">";
        // line 30
        echo (isset($context["entry_db_driver"]) ? $context["entry_db_driver"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"db_driver\" id=\"input-db-driver\" class=\"form-control\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["drivers"]) ? $context["drivers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
            // line 34
            echo "                ";
            if (((isset($context["db_driver"]) ? $context["db_driver"] : null) == $this->getAttribute($context["driver"], "value", array()))) {
                // line 35
                echo "                <option value=\"";
                echo $this->getAttribute($context["driver"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["driver"], "text", array());
                echo "</option>
                ";
            } else {
                // line 37
                echo "                <option value=\"";
                echo $this->getAttribute($context["driver"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["driver"], "text", array());
                echo "</option>
                ";
            }
            // line 39
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['driver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-hostname\">";
        // line 44
        echo (isset($context["entry_db_hostname"]) ? $context["entry_db_hostname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_hostname\" value=\"";
        // line 46
        echo (isset($context["db_hostname"]) ? $context["db_hostname"] : null);
        echo "\" id=\"input-db-hostname\" class=\"form-control\"/>
              ";
        // line 47
        if ((isset($context["error_db_hostname"]) ? $context["error_db_hostname"] : null)) {
            // line 48
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_db_hostname"]) ? $context["error_db_hostname"] : null);
            echo "</div>
              ";
        }
        // line 50
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-username\">";
        // line 53
        echo (isset($context["entry_db_username"]) ? $context["entry_db_username"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_username\" value=\"";
        // line 55
        echo (isset($context["db_username"]) ? $context["db_username"] : null);
        echo "\" id=\"input-db-username\" class=\"form-control\"/>
              ";
        // line 56
        if ((isset($context["error_db_username"]) ? $context["error_db_username"] : null)) {
            // line 57
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_db_username"]) ? $context["error_db_username"] : null);
            echo "</div>
              ";
        }
        // line 59
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-password\">";
        // line 62
        echo (isset($context["entry_db_password"]) ? $context["entry_db_password"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"db_password\" value=\"";
        // line 64
        echo (isset($context["db_password"]) ? $context["db_password"] : null);
        echo "\" id=\"input-db-password\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-database\">";
        // line 68
        echo (isset($context["entry_db_database"]) ? $context["entry_db_database"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_database\" value=\"";
        // line 70
        echo (isset($context["db_database"]) ? $context["db_database"] : null);
        echo "\" id=\"input-db-database\" class=\"form-control\"/>
              ";
        // line 71
        if ((isset($context["error_db_database"]) ? $context["error_db_database"] : null)) {
            // line 72
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_db_database"]) ? $context["error_db_database"] : null);
            echo "</div>
              ";
        }
        // line 74
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-port\">";
        // line 77
        echo (isset($context["entry_db_port"]) ? $context["entry_db_port"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_port\" value=\"";
        // line 79
        echo (isset($context["db_port"]) ? $context["db_port"] : null);
        echo "\" id=\"input-db-port\" class=\"form-control\"/>
              ";
        // line 80
        if ((isset($context["error_db_port"]) ? $context["error_db_port"] : null)) {
            // line 81
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_db_port"]) ? $context["error_db_port"] : null);
            echo "</div>
              ";
        }
        // line 83
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-prefix\">";
        // line 86
        echo (isset($context["entry_db_prefix"]) ? $context["entry_db_prefix"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_prefix\" value=\"";
        // line 88
        echo (isset($context["db_prefix"]) ? $context["db_prefix"] : null);
        echo "\" id=\"input-db-prefix\" class=\"form-control\"/>
              ";
        // line 89
        if ((isset($context["error_db_prefix"]) ? $context["error_db_prefix"] : null)) {
            // line 90
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_db_prefix"]) ? $context["error_db_prefix"] : null);
            echo "</div>
              ";
        }
        // line 92
        echo "            </div>
          </div>
        </fieldset>
        <p>";
        // line 95
        echo (isset($context["text_db_administration"]) ? $context["text_db_administration"] : null);
        echo "</p>
        <fieldset>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-username\">";
        // line 98
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"username\" value=\"";
        // line 100
        echo (isset($context["username"]) ? $context["username"] : null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
              ";
        // line 101
        if ((isset($context["error_username"]) ? $context["error_username"] : null)) {
            // line 102
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_username"]) ? $context["error_username"] : null);
            echo "</div>
              ";
        }
        // line 104
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 107
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"password\" value=\"";
        // line 109
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
              ";
        // line 110
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 111
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
              ";
        }
        // line 113
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 116
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 118
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              ";
        // line 119
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 120
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 122
        echo "            </div>
          </div>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 126
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 128
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\"/>
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 133
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "</div>
  </div>
</div>
";
        // line 136
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "install/step_3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 136,  321 => 133,  313 => 128,  306 => 126,  300 => 122,  294 => 120,  292 => 119,  288 => 118,  283 => 116,  278 => 113,  272 => 111,  270 => 110,  266 => 109,  261 => 107,  256 => 104,  250 => 102,  248 => 101,  244 => 100,  239 => 98,  233 => 95,  228 => 92,  222 => 90,  220 => 89,  216 => 88,  211 => 86,  206 => 83,  200 => 81,  198 => 80,  194 => 79,  189 => 77,  184 => 74,  178 => 72,  176 => 71,  172 => 70,  167 => 68,  160 => 64,  155 => 62,  150 => 59,  144 => 57,  142 => 56,  138 => 55,  133 => 53,  128 => 50,  122 => 48,  120 => 47,  116 => 46,  111 => 44,  105 => 40,  99 => 39,  91 => 37,  83 => 35,  80 => 34,  76 => 33,  70 => 30,  64 => 27,  60 => 26,  56 => 24,  48 => 20,  46 => 19,  35 => 11,  31 => 10,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h1 class="pull-left">3*/
/*           <small>/4</small>*/
/*         </h1>*/
/*         <h3>*/
/*           {{ heading_title }}<br>*/
/*           <small>{{ text_step_3 }}</small>*/
/*         </h3>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         <div id="logo" class="pull-right hidden-xs"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart"/></div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">*/
/*     <div class="col-sm-9">*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <p>{{ text_db_connection }}</p>*/
/*         <fieldset>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-db-driver">{{ entry_db_driver }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="db_driver" id="input-db-driver" class="form-control">*/
/*                 {% for driver in drivers %}*/
/*                 {% if db_driver == driver.value %}*/
/*                 <option value="{{ driver.value }}" selected="selected">{{ driver.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ driver.value }}">{{ driver.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-db-hostname">{{ entry_db_hostname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="db_hostname" value="{{ db_hostname }}" id="input-db-hostname" class="form-control"/>*/
/*               {% if error_db_hostname %}*/
/*               <div class="text-danger">{{ error_db_hostname }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-db-username">{{ entry_db_username }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="db_username" value="{{ db_username }}" id="input-db-username" class="form-control"/>*/
/*               {% if error_db_username %}*/
/*               <div class="text-danger">{{ error_db_username }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-db-password">{{ entry_db_password }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="password" name="db_password" value="{{ db_password }}" id="input-db-password" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-db-database">{{ entry_db_database }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="db_database" value="{{ db_database }}" id="input-db-database" class="form-control"/>*/
/*               {% if error_db_database %}*/
/*               <div class="text-danger">{{ error_db_database }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-db-port">{{ entry_db_port }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="db_port" value="{{ db_port }}" id="input-db-port" class="form-control"/>*/
/*               {% if error_db_port %}*/
/*               <div class="text-danger">{{ error_db_port }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-db-prefix">{{ entry_db_prefix }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="db_prefix" value="{{ db_prefix }}" id="input-db-prefix" class="form-control"/>*/
/*               {% if error_db_prefix %}*/
/*               <div class="text-danger">{{ error_db_prefix }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <p>{{ text_db_administration }}</p>*/
/*         <fieldset>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-username">{{ entry_username }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="username" value="{{ username }}" id="input-username" class="form-control"/>*/
/*               {% if error_username %}*/
/*               <div class="text-danger">{{ error_username }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="password" value="{{ password }}" id="input-password" class="form-control"/>*/
/*               {% if error_password %}*/
/*               <div class="text-danger">{{ error_password }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control"/>*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary"/>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*     <div class="col-sm-3">{{ column_left }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
