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

$oPage->addCss('
.carousel img {
    min-width: 100%;
    height: 500px;
}
');

$oPage->addItem(new PageTop(_('MC Skeli\'s gallery')));

$carousel = new \Ease\TWB\Carousel('Gallery',['data-ride'=>'carousel']);

$images = [
    ['1150412_614418731923277_1626868206_n.jpg', 'Skero & Babar', 'Skerodaktyl Ganjadont & Bababraptor Rumosaur'],
    ['1493312_674494649249679_1025386667_o.jpg', 'Red Eyes', 'As usualy'],
    ['150079_1216687674503_6582761_n.jpg', 'Sport fan', ''],
    ['171936_3858466267033_1636739221_o.jpg', '', ''],
    ['179187_431464006886079_1705215449_n.jpg', '', ''],
    ['252745_3311095463105_763452461_n.jpg', '', ''],
    ['286124_3766115598324_2062063020_o.jpg', '', ''],
    ['307086_3311094463080_95769068_n.jpg', '', ''],
    ['334777_3766115358318_1042320477_o.jpg', '', ''],
    ['38159_1331011322239_3216803_n.jpg', '', ''],
    ['388957_299655023400312_1987740958_n.jpg', '', ''],
    ['549725_3475235046492_1641007239_n.jpg', '', ''],
    ['620656_3766114918307_575625563_o.jpg', '', ''],
    ['621272_3858464987001_1946676758_o.jpg', '', ''],
    ['66221_1207076394227_8102535_n.jpg', '', ''],
    ['737031_4041429801007_891191056_o.jpg', '', ''],
    ['882024_604228412939291_2139698337_o.jpg', '', '']
];

foreach ($images as $slide) {
    $carousel->addSlide(new \Ease\Html\ImgTag('images/gallery/' . $slide[0]), $slide[1], $slide[2]);
}

$oPage->container->addItem($carousel);

$oPage->addItem(new PageBottom());


$oPage->draw();

