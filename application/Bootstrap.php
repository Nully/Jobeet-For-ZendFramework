<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * Doctypeの設定
     *
     */
    protected function _initDoctype()
    {
        $view = $this->bootstrap("view")->getResource("view");
        $view->doctype("XHTML1_TRANSITIONAL");
    }


    /**
     * レイアウトで利用するCSSファイルやJavaScriptファイルの出力準備を行う
     *
     */
    protected function _initLayoutResources()
    {
        $view = $this->bootstrap("view")->getResource("view");
        $view->headLink(array(
            "rel"   => "stylesheet",
            "href"  => $view->baseUrl("/css/import.css"),
            "type"  => "text/css",
            "media" => "screen,projection,tv",
        ));

        $view->headTitle()->setSeparator(" | ")->append("Jobeet For ZendFramework");
    }
}

