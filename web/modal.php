<?php

namespace SkeliCZ;

require_once 'includes/SkeliInit.php';


$caution = 'Upozornění!

Vstupujete na stránky se sexuálním obsahem. Kliknutím na \'OK\' potvrzujete, že
';

$oPage->addItem("\n\n");
\Ease\TWB\Part::twBootstrapize();
        
//$oPage->addItem( new \Ease\TWB\Modal('caution',_('caution'),$caution,['show'=>true]) );


$oPage->addItem("\n\n".'<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>');

$oPage->draw();

