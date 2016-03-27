<?php

/**
 * SkeliCZ - Enter new addrese into database
 *
 * @package    SkeliCZ
 * @author     Vitex <vitex@hippy.cz>
 * @copyright  2009-2016 info@vitexsoftware.cz (G)
 */

namespace SkeliCZ;

require_once 'includes/SkeliInit.php';


$oPage->addItem(new PageTop(_('MC Skeli\'s lyrics')));

$oPage->addCss('body { background-image: url("images/skelilbackstudio.png"); background-position: left top;  background-repeat: no-repeat; }');

$myNav = $oPage->container->addItem(new \Ease\Html\Div(null, ['id' => "myNav", 'data-spy' => "affix", 'data-offset-top' => "60", 'data-offset-bottom' => "200"]));

$affixIndex = new \Ease\Html\UlTag(null, ['class' => "nav nav-tabs nav-stacked affix"]);
$affixIndex->addItemSmart(new \Ease\Html\ATag('#one', 'Tutorial One'), ['class' => 'active']);
$affixIndex->addItemSmart(new \Ease\Html\ATag('#two', 'Tutorial Two'));
$affixIndex->addItemSmart(new \Ease\Html\ATag('#three', 'Tutorial Three'));


$myNav->addItem(new \Ease\TWB\Col(3, $affixIndex));
$affixBody = $myNav->addItem(new \Ease\TWB\Col(9));

$affixBody->addItem(new \Ease\Html\H2Tag(_('Tutorial One'), ['id' => 'one']));
$affixBody->addItem(new \Ease\Html\PTag('  
Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus,
            dapibus nec turpis vel, semper malesuada ante. Vestibulum 
            id metus ac nisl bibendum scelerisque non non purus. Suspendisse 
            varius nibh non aliquet sagittis. In tincidunt orci sit amet 
            elementum vestibulum. Vivamus fermentum in arcu in aliquam. Quisque 
            aliquam porta odio in fringilla. Vivamus nisl leo, blandit at bibendum 
            eu, tristique eget risus. Integer aliquet quam ut elit suscipit, 
            id interdum neque porttitor. Integer faucibus ligula.'));

$affixBody->addItem(new \Ease\Html\PTag('Vestibulum quis quam ut magna consequat faucibus. 
            Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum 
            risus. Pellentesque viverra sagittis quam at mattis. Suspendisse
            potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.
            Phasellus auctor velit at lacus blandit, commodo iaculis justo
            viverra. Etiam vitae est arcu. Mauris vel congue dolor. Aliquam eget
            mi mi. Fusce quam tortor, commodo ac dui quis, bibendum viverra erat.
            Maecenas mattis lectus enim, quis tincidunt dui molestie euismod.
            Curabitur et diam tristique, accumsan nunc eu, hendrerit tellus.'));

$affixBody->addItem(new \Ease\Html\HrTag());
$affixBody->addItem(new \Ease\Html\H2Tag(_('Tutorial Two'), ['id' => 'two']));

$affixBody->addItem(new \Ease\Html\PTag('Nullam hendrerit justo non leo aliquet imperdiet. Etiam in 
            sagittis lectus. Suspendisse ultrices placerat accumsan. Mauris quis 
            dapibus orci. In dapibus velit blandit pharetra tincidunt. 
            Quisque non sapien nec lacus condimentum facilisis ut iaculis enim.
            Sed viverra interdum bibendum. Donec ac sollicitudin dolor. Sed 
            fringilla vitae lacus at rutrum. Phasellus congue vestibulum ligula sed consequat.'));

$affixBody->addItem(new \Ease\Html\PTag('Vestibulum consectetur scelerisque lacus, ac fermentum lorem 
            convallis sed. Nam odio tortor, dictum quis malesuada at, 
            pellentesque vitae orci. Vivamus elementum, felis eu auctor lobortis,
            diam velit egestas lacus, quis fermentum metus ante quis urna. Sed at 
            facilisis libero. Cum sociis natoque penatibus et magnis dis
            parturient montes, nascetur ridiculus mus. Vestibulum bibendum 
            blandit dolor. Nunc orci dolor, molestie nec nibh in, hendrerit
            tincidunt ante. Vivamus sem augue, hendrerit non sapien in, 
            mollis ornare augue.'));

$affixBody->addItem(new \Ease\Html\HrTag());

$affixBody->addItem(new \Ease\Html\H2Tag(_('Tutorial Three'), ['id' => 'three']));

$affixBody->addItem(new \Ease\Html\PTag('Integer pulvinar leo id risus pellentesque vestibulum. 
            Sed diam libero, sodales eget sapien vel, porttitor bibendum enim. 
            Donec sed nibh vitae lorem porttitor blandit in nec ante. 
            Pellentesque vitae metus ipsum. Phasellus sed nunc ac sem malesuada 
            condimentum. Etiam in aliquam lectus. Nam vel sapien diam. Donec
            pharetra id arcu eget blandit. Proin imperdiet mattis augue in
            porttitor. Quisque tempus enim id lobortis feugiat. Suspendisse 
            tincidunt risus quis dolor fringilla blandit. Ut sed sapien at purus
            lacinia porttitor. Nullam iaculis, felis a pretium ornare, dolor nisl
            semper tortor, vel sagittis lacus est consequat eros. Sed id pretium
            nisl. Curabitur dolor nisl, laoreet vitae aliquam id, tincidunt sit 
            amet mauris.'));

$affixBody->addItem(new \Ease\Html\PTag('Phasellus vitae suscipit justo. Mauris pharetra feugiat ante 
            id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus
            turpis at accumsan tincidunt. Phasellus risus risus,
            volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit 
            dolor eget ante rutrum adipiscing. Cras interdum ipsum mattis, 
            tempus mauris vel, semper ipsum. Duis sed dolor ut enim lobortis 
            pellentesque ultricies ac ligula. Pellentesque convallis  elit nisi, id 
            vulputate ipsum ullamcorper ut. Cras ac pulvinar purus, ac viverra est. Suspendisse 
            potenti. Integer pellentesque neque et elementum tempus. 
            Curabitur bibendum in ligula ut rhoncus.'));

$affixBody->addItem(new \Ease\Html\PTag('Quisque pharetra velit id velit iaculis pretium. Nullam a justo 
            sed ligula porta semper eu quis enim. Pellentesque pellentesque,
            metus at facilisis hendrerit, lectus velit facilisis leo, quis
            volutpat turpis arcu quis enim. Nulla viverra lorem elementum
            interdum ultricies. Suspendisse accumsan quam nec ante mollis tempus.
            Morbi vel accumsan diam, eget convallis tellus. Suspendisse potenti.'));




$oPage->addItem(new PageBottom());


$oPage->draw();

