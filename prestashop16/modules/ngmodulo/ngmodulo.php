<?php
 
    if (!defined('_PS_VERSION_')){
        exit;
    }
 

    class NgModulo extends Module
    {


      public function __construct()
      {
          $this->name = 'ngmodulo';
          $this->tab = 'front_office_feactures';
          $this->version = '1.0.0';
          $this->author = 'Norberto Gonzalez Rendon';
          $this->bootstrap = true;
          $this->ps_versions_compliancy  = array('min' => '1.6', 'max' => _PS_VERSION_);
          parent::__construct(); 
          $this->displayName = $this->l('Example Module');
          $this->description = $this->l('Sample module for Prestashop module development course');     
      }


      public function install()
      {
          if (!parent::install()
          ||!Configuration::updateValue('NG_MODULO', 'http://urldemodulo.com')  
          ||!$this->registerHook('displayReassurance') 
          ||!$this->registerHook('actionCategoryAdd') 
          ||!$this->registerHook('ejemploCustomHook') 
          ||!$this->registerHook('diplayFooter') 
          ||!$this->registerHook('header') 
              !$this->installDb()
               ) {
                return false;
              }else{
                return true;
              }          
      }


      public function uninstall()
      {
          if (!parent::uninstall() ||
              !Configuration::deleteByName('NG_MODULO') 
              //!Db::getInstance()->execute('DROP  TABLE `'._DB_PREFIX.' presupuestos`')
              ){
                return false;
              }else{
                return true;
              }     
      }


      public function installDb()
      {
          return (Db::getInstance()->execute('
              CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'presupuestos` (
              `ìd_presupuestos` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `id_user` INT(11) UNSIGNED NOT NULL,
              `comments` TEXT NOT NULL,
              `date_add` DATETIME NOT NULL,
              PRIMARY KEY (`id_presupuestos`)
          ) ENGINE='._MYSQL_ENGINE_.' DEFAUL CHARSET=utf8;'));
      }


      public function getContent()
      {
          $this->smarty->assign('save', false);
          if (Tools::isSubmit('submitNgModulo'))
          {
              $myurl = Tools::getValue('exampleUrl');
              Configuration::updateValue('NG_MODULO', $myurl);
              $this->smarty->assign('save', true);
          }
          $urlvalue = Configuration::get('NG_MODULO');
          $this->smarty->assign('urlvalue', $urlvalue);
          return $this->display(__FILE__, 'configure.tpl') ;
      }


     public function hookActionCategoryAdd($params)
     {
         return $this->display(__FILE__, 'actionCategoryAdd.tpl');
     }
     

     public function hookEjemploCustomHook($params)
     {
         return 'Soy el nuevo hook';
     }


      public function hookDisplayFooter($params)
      {
          $myurlvalue = Configuration::get('NG_MODULO');
          $this->context->smarty->assign('myurlvalue', $myurlvalue);
          return $this->display(__FILE__, 'displayFooter.tpl');
      }

      
      public function hookDisplayReassurance($params)
      {
          return $this->display(__FILE__, 'displayReassurance.tpl');
      }

      
      public function hookHeader()
      {
          $this->context->controller-addJS($this->_path.'views/js/ngmodulo.js');
          $this->context->controller._addCSS($this->_path.'views/css/ngmodulo.css');
      }

    
    }