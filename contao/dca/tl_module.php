<?php

// show module id
$GLOBALS['TL_DCA']['tl_module']['list']['sorting']['child_record_callback'] = function ($row) {
    return '<div class="tl_content_left">' . $row['name'] . ' <span style="color:#999;padding-left:3px">[' . $GLOBALS['TL_LANG']['FMD'][$row['type']][0] . ' | ID:' . $row['id'] . "]</span></div>\n";
};