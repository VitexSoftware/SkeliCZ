<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SkeliCZ;

/**
 * Description of FacebookWall
 *
 * @author vitex
 */
class FacebookWall extends \Ease\Html\Div
{

    public function __construct($content = 'Skeli', $properties = null)
    {
        $properties['class']           = 'fb-page';
        
        $properties['data-href']      = 'https://www.facebook.com/SKELIjedeSVOU/';
        $properties['data-tabs']                  = 'timeline,events,messages';
        $properties['data-width']                 = 600;
        $properties['data-small-header']          = 'true';
        $properties['data-adapt-container-width']      = 'true';
        $properties['data-hide-cover']      = 'false';
        $properties['data-show-facepile']      = 'true';
        
        parent::__construct(new \Ease\Html\Div('<blockquote cite = "https://www.facebook.com/SKELIjedeSVOU/"><a href = "https://www.facebook.com/SKELIjedeSVOU/">Skeli</a></blockquote>',
            ['class' => 'fb-xfbml-parse-ignore']), $properties);
    }

    public function finalize()
    {
        \Ease\Shared::webPage()->addJavaScript('
  window.fbAsyncInit = function() {
    FB.init({
      appId      : \'186287018435097\',
      xfbml      : true,
      version    : \'v2.6\'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/cs_CZ/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, \'script\', \'facebook-jssdk\'));            ');
    }
}