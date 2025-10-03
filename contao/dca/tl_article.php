<?php

# Artikel-ID ausgeben
$GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'id';
$GLOBALS['TL_DCA']['tl_article']['list']['label']['format'] = '%s <span style="color:#999999;padding-left:3px;font-weight:normal;">[%s, ID: %s]</span>';