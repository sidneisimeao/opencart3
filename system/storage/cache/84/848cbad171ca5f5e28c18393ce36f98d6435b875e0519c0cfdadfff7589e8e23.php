<?php

/* install/step_2.twig */
class __TwigTemplate_ae3b82860cbd6a070eb854205610a1831b3625e80b76ca71fd37eab5303b59e7 extends Twig_Template
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
        <h1 class=\"pull-left\">2
          <small>/4</small>
        </h1>
        <h3>
          ";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "<br>
          <small>";
        // line 11
        echo (isset($context["text_step_2"]) ? $context["text_step_2"] : null);
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <p>";
        // line 27
        echo (isset($context["text_install_php"]) ? $context["text_install_php"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 32
        echo (isset($context["text_setting"]) ? $context["text_setting"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 33
        echo (isset($context["text_current"]) ? $context["text_current"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 34
        echo (isset($context["text_required"]) ? $context["text_required"] : null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 35
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 40
        echo (isset($context["text_version"]) ? $context["text_version"] : null);
        echo "</td>
                <td>";
        // line 41
        echo (isset($context["php_version"]) ? $context["php_version"] : null);
        echo "</td>
                <td>5.6+</td>
                <td class=\"text-center\">
                  ";
        // line 44
        if ((isset($context["version"]) ? $context["version"] : null)) {
            // line 45
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 47
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 49
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 52
        echo (isset($context["text_global"]) ? $context["text_global"] : null);
        echo "</td>
                <td>
                  ";
        // line 54
        if ((isset($context["register_globals"]) ? $context["register_globals"] : null)) {
            // line 55
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 57
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 58
        echo "</td>
                <td>";
        // line 59
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 61
        if ( !(isset($context["register_globals"]) ? $context["register_globals"] : null)) {
            // line 62
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 64
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 66
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 69
        echo (isset($context["text_magic"]) ? $context["text_magic"] : null);
        echo "</td>
                <td>
                  ";
        // line 71
        if ((isset($context["magic_quotes_gpc"]) ? $context["magic_quotes_gpc"] : null)) {
            // line 72
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 74
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 76
        echo "                </td>
                <td>";
        // line 77
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 79
        if ( !(isset($context["error_magic_quotes_gpc"]) ? $context["error_magic_quotes_gpc"] : null)) {
            // line 80
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 82
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 84
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 87
        echo (isset($context["text_file_upload"]) ? $context["text_file_upload"] : null);
        echo "</td>
                <td>
                  ";
        // line 89
        if ((isset($context["file_uploads"]) ? $context["file_uploads"] : null)) {
            // line 90
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 92
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 94
        echo "                </td>
                <td>";
        // line 95
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 97
        if ((isset($context["file_uploads"]) ? $context["file_uploads"] : null)) {
            // line 98
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 100
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 102
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 105
        echo (isset($context["text_session"]) ? $context["text_session"] : null);
        echo "</td>
                <td>
                  ";
        // line 107
        if ((isset($context["session_auto_start"]) ? $context["session_auto_start"] : null)) {
            // line 108
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 110
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 112
        echo "                </td>
                <td>";
        // line 113
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 115
        if ( !(isset($context["session_auto_start"]) ? $context["session_auto_start"] : null)) {
            // line 116
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 118
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 120
        echo "                </td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 125
        echo (isset($context["text_install_extension"]) ? $context["text_install_extension"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 130
        echo (isset($context["text_extension"]) ? $context["text_extension"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 131
        echo (isset($context["text_current"]) ? $context["text_current"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 132
        echo (isset($context["text_required"]) ? $context["text_required"] : null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 133
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 138
        echo (isset($context["text_db"]) ? $context["text_db"] : null);
        echo "</td>
                <td>
                  ";
        // line 140
        if ((isset($context["db"]) ? $context["db"] : null)) {
            // line 141
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 143
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 145
        echo "                </td>
                <td>";
        // line 146
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 148
        if ((isset($context["db"]) ? $context["db"] : null)) {
            // line 149
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 151
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 153
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 156
        echo (isset($context["text_gd"]) ? $context["text_gd"] : null);
        echo "</td>
                <td>
                  ";
        // line 158
        if ((isset($context["gd"]) ? $context["gd"] : null)) {
            // line 159
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 161
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 162
        echo "</td>
                <td>";
        // line 163
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 165
        if ((isset($context["gd"]) ? $context["gd"] : null)) {
            // line 166
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 168
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 170
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 173
        echo (isset($context["text_curl"]) ? $context["text_curl"] : null);
        echo "</td>
                <td>
                  ";
        // line 175
        if ((isset($context["curl"]) ? $context["curl"] : null)) {
            // line 176
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 178
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 180
        echo "                </td>
                <td>";
        // line 181
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 183
        if ((isset($context["curl"]) ? $context["curl"] : null)) {
            // line 184
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 186
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 188
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 191
        echo (isset($context["text_openssl"]) ? $context["text_openssl"] : null);
        echo "</td>
                <td>
                  ";
        // line 193
        if ((isset($context["openssl"]) ? $context["openssl"] : null)) {
            // line 194
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 196
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 198
        echo "                </td>
                <td>";
        // line 199
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 201
        if ((isset($context["openssl"]) ? $context["openssl"] : null)) {
            // line 202
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 204
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 206
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 209
        echo (isset($context["text_zlib"]) ? $context["text_zlib"] : null);
        echo "</td>
                <td>
                  ";
        // line 211
        if ((isset($context["zlib"]) ? $context["zlib"] : null)) {
            // line 212
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 214
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 216
        echo "                </td>
                <td>";
        // line 217
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 219
        if ((isset($context["zlib"]) ? $context["zlib"] : null)) {
            // line 220
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 222
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 224
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 227
        echo (isset($context["text_zip"]) ? $context["text_zip"] : null);
        echo "</td>
                <td>
                  ";
        // line 229
        if ((isset($context["zip"]) ? $context["zip"] : null)) {
            // line 230
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 232
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 234
        echo "                </td>
                <td>";
        // line 235
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 237
        if ((isset($context["zip"]) ? $context["zip"] : null)) {
            // line 238
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 240
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 242
        echo "                </td>
              </tr>
              ";
        // line 244
        if ( !(isset($context["iconv"]) ? $context["iconv"] : null)) {
            // line 245
            echo "              <tr>
                <td>";
            // line 246
            echo (isset($context["text_mbstring"]) ? $context["text_mbstring"] : null);
            echo "</td>
                <td>
                  ";
            // line 248
            if ((isset($context["mbstring"]) ? $context["mbstring"] : null)) {
                // line 249
                echo "                  ";
                echo (isset($context["text_on"]) ? $context["text_on"] : null);
                echo "
                  ";
            } else {
                // line 251
                echo "                  ";
                echo (isset($context["text_off"]) ? $context["text_off"] : null);
                echo "
                  ";
            }
            // line 253
            echo "                </td>
                <td>";
            // line 254
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "</td>
                <td class=\"text-center\">
                  ";
            // line 256
            if ((isset($context["mbstring"]) ? $context["mbstring"] : null)) {
                // line 257
                echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
            } else {
                // line 259
                echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
            }
            // line 261
            echo "                </td>
              </tr>
              ";
        }
        // line 264
        echo "            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 267
        echo (isset($context["text_install_file"]) ? $context["text_install_file"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td><b>";
        // line 272
        echo (isset($context["text_file"]) ? $context["text_file"] : null);
        echo "</b></td>
                <td><b>";
        // line 273
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 278
        echo (isset($context["catalog_config"]) ? $context["catalog_config"] : null);
        echo "</td>
                <td>
                  ";
        // line 280
        if ( !(isset($context["error_catalog_config"]) ? $context["error_catalog_config"] : null)) {
            // line 281
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 283
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_catalog_config"]) ? $context["error_catalog_config"] : null);
            echo "</span>
                  ";
        }
        // line 285
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 288
        echo (isset($context["admin_config"]) ? $context["admin_config"] : null);
        echo "</td>
                <td>
                  ";
        // line 290
        if ( !(isset($context["error_admin_config"]) ? $context["error_admin_config"] : null)) {
            // line 291
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 293
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_admin_config"]) ? $context["error_admin_config"] : null);
            echo "</span>
                  ";
        }
        // line 295
        echo "                </td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 301
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 303
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\"/>
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 308
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "</div>
  </div>
</div>
";
        // line 311
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "install/step_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 311,  704 => 308,  696 => 303,  689 => 301,  681 => 295,  675 => 293,  669 => 291,  667 => 290,  662 => 288,  657 => 285,  651 => 283,  645 => 281,  643 => 280,  638 => 278,  630 => 273,  626 => 272,  618 => 267,  613 => 264,  608 => 261,  604 => 259,  600 => 257,  598 => 256,  593 => 254,  590 => 253,  584 => 251,  578 => 249,  576 => 248,  571 => 246,  568 => 245,  566 => 244,  562 => 242,  558 => 240,  554 => 238,  552 => 237,  547 => 235,  544 => 234,  538 => 232,  532 => 230,  530 => 229,  525 => 227,  520 => 224,  516 => 222,  512 => 220,  510 => 219,  505 => 217,  502 => 216,  496 => 214,  490 => 212,  488 => 211,  483 => 209,  478 => 206,  474 => 204,  470 => 202,  468 => 201,  463 => 199,  460 => 198,  454 => 196,  448 => 194,  446 => 193,  441 => 191,  436 => 188,  432 => 186,  428 => 184,  426 => 183,  421 => 181,  418 => 180,  412 => 178,  406 => 176,  404 => 175,  399 => 173,  394 => 170,  390 => 168,  386 => 166,  384 => 165,  379 => 163,  376 => 162,  370 => 161,  364 => 159,  362 => 158,  357 => 156,  352 => 153,  348 => 151,  344 => 149,  342 => 148,  337 => 146,  334 => 145,  328 => 143,  322 => 141,  320 => 140,  315 => 138,  307 => 133,  303 => 132,  299 => 131,  295 => 130,  287 => 125,  280 => 120,  276 => 118,  272 => 116,  270 => 115,  265 => 113,  262 => 112,  256 => 110,  250 => 108,  248 => 107,  243 => 105,  238 => 102,  234 => 100,  230 => 98,  228 => 97,  223 => 95,  220 => 94,  214 => 92,  208 => 90,  206 => 89,  201 => 87,  196 => 84,  192 => 82,  188 => 80,  186 => 79,  181 => 77,  178 => 76,  172 => 74,  166 => 72,  164 => 71,  159 => 69,  154 => 66,  150 => 64,  146 => 62,  144 => 61,  139 => 59,  136 => 58,  130 => 57,  124 => 55,  122 => 54,  117 => 52,  112 => 49,  108 => 47,  104 => 45,  102 => 44,  96 => 41,  92 => 40,  84 => 35,  80 => 34,  76 => 33,  72 => 32,  64 => 27,  60 => 26,  56 => 24,  48 => 20,  46 => 19,  35 => 11,  31 => 10,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h1 class="pull-left">2*/
/*           <small>/4</small>*/
/*         </h1>*/
/*         <h3>*/
/*           {{ heading_title }}<br>*/
/*           <small>{{ text_step_2 }}</small>*/
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
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <p>{{ text_install_php }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td width="35%"><b>{{ text_setting }}</b></td>*/
/*                 <td width="25%"><b>{{ text_current }}</b></td>*/
/*                 <td width="25%"><b>{{ text_required }}</b></td>*/
/*                 <td width="15%" class="text-center"><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_version }}</td>*/
/*                 <td>{{ php_version }}</td>*/
/*                 <td>5.6+</td>*/
/*                 <td class="text-center">*/
/*                   {% if version %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_global }}</td>*/
/*                 <td>*/
/*                   {% if register_globals %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if not register_globals %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_magic }}</td>*/
/*                 <td>*/
/*                   {% if magic_quotes_gpc %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if not error_magic_quotes_gpc %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_file_upload }}</td>*/
/*                 <td>*/
/*                   {% if file_uploads %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if file_uploads %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_session }}</td>*/
/*                 <td>*/
/*                   {% if session_auto_start %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if not session_auto_start %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <p>{{ text_install_extension }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td width="35%"><b>{{ text_extension }}</b></td>*/
/*                 <td width="25%"><b>{{ text_current }}</b></td>*/
/*                 <td width="25%"><b>{{ text_required }}</b></td>*/
/*                 <td width="15%" class="text-center"><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_db }}</td>*/
/*                 <td>*/
/*                   {% if db %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if db %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_gd }}</td>*/
/*                 <td>*/
/*                   {% if gd %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if gd %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_curl }}</td>*/
/*                 <td>*/
/*                   {% if curl %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if curl %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_openssl }}</td>*/
/*                 <td>*/
/*                   {% if openssl %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if openssl %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_zlib }}</td>*/
/*                 <td>*/
/*                   {% if zlib %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if zlib %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_zip }}</td>*/
/*                 <td>*/
/*                   {% if zip %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if zip %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               {% if not iconv %}*/
/*               <tr>*/
/*                 <td>{{ text_mbstring }}</td>*/
/*                 <td>*/
/*                   {% if mbstring %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if mbstring %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               {% endif %}*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <p>{{ text_install_file }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td><b>{{ text_file }}</b></td>*/
/*                 <td><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ catalog_config }}</td>*/
/*                 <td>*/
/*                   {% if not error_catalog_config %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_catalog_config }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ admin_config }}</td>*/
/*                 <td>*/
/*                   {% if not error_admin_config %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_admin_config }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
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
