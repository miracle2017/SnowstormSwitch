<?php
/**
 * @package SnowstormSwitch
 * @author miracle2017
 * @version 1.0.0
 * @link https://github.com/miracle2017/SnowstormSwitch
 */
class SnowstormSwitch_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 设置参数，并加入脚部
     *
     * @access public
     * @return void
     */
    public static function SnowstormSwitch()
    {
        echo '<button style="position: absolute; top: 1px; right: 1px" onclick="snowstormToggle($(this))">下雪on</button><script>function snowstormToggle(e){if(snowStorm.disabed){snowStorm.resume();$(this).innerText("下雪OFF")}else{snowStorm.stop();$(this).innerText("下雪ON")}}</script>';
    }
}