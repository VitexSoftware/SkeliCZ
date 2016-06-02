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
class FBLike extends \Ease\Html\Div
{

    public function __construct($content = null, $properties = null)
    {
        $properties['class']           = 'fb-like';
        $properties['data-share']      = 'true';
        $properties['data-width']      = '450';
        $properties['data-show-faces'] = 'true';
        parent::__construct($content, $properties);
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