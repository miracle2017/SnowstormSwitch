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
     * 启用插件方法,如果启用失败,直接抛出异常
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate(){
        Typecho_Plugin::factory('Widget_Archive')->footer = array('SnowstormSwitch_Plugin', 'render');
        return _t('插件已激活，现在可以对插件进行设置！');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}
     
    
     /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){}
     
     /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 设置参数，并加入脚部
     *
     * @access public
     * @return void
     */
    public static function render()
    {
        echo '<button style="position: absolute; top: 1px; right: 1px" onclick="snowstormToggle($(this))">下雪on</button><script>function snowstormToggle(e){if(snowStorm.disabed){snowStorm.resume();$(this).innerText("下雪OFF")}else{snowStorm.stop();$(this).innerText("下雪ON")}}</script>';
    }
}
