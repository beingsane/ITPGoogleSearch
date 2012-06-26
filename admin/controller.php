<?php
/**
 * @package      ITPrism Components
 * @subpackage   ITPGoogleSearch
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2010 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * ITPGoogleSearch is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.controller' );

/**
 * Control Panel Controller
 *
 * @package     ITPrism Components
 * @subpackage  ITPGoogleSearch
  */
class ITPGoogleSearchController extends JController {
    
    public function __construct($config = array())  {
        parent::__construct($config);
    }

    public function display( ) {

        $document =& JFactory::getDocument();
        /** @var $document JDocumentHtml **/
        
        // Add component style
        $document->addStyleSheet(JURI::root() . 'media/com_itpgooglesearch/css/style.css', 'text/css');
        $document->addStyleSheet(JURI::root() . 'media/com_itpgooglesearch/css/bootstrap.min.css', 'text/css');
        
        $viewName      = JRequest::getCmd('view', 'cpanel');
        JRequest::setVar("view", $viewName);

        parent::display();
        return $this;
    }

}
