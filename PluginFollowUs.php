<?php
class PluginFollowUs{
  public function widget_section($data){
    wfPlugin::includeonce('icons/bootstrap_v1_8_1');
    $data = new PluginWfArray($data);
    if(!$data->get('data/links')){
      throw new Exception('Plugin '.__CLASS__.'::'.__FUNCTION__.' says: Param data/links is not set!');
    }
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $links = array();
    foreach($data->get('data/links') as $k => $v){
      $link = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__.'_link');
      $link->setByTag($v, 'rs', true);
      $links[] = $link->get();
    }
    $element->setByTag(array('links' => $links));
    wfDocument::renderElement($element);
  }
}