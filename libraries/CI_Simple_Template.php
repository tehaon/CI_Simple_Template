<?php

class CI_Simple_Template
{
    protected $_data = array();
    protected $_template;
    protected $_CI;
    protected $_css = array();
    protected $_js = array();

    public function __construct()
    {
        $this->_CI = get_instance();
    }

    public function set($name, $value)
    {
        $this->_data[$name] = $value;
    }

    public function arrSet(array $array)
    {
        foreach ($array as $key => $val) {
            $this->set($key, $val);
        }
    }

    public function render($view, array $data = array())
    {
        $this->set('contents', $this->_CI->load->view($view, $data, TRUE));
        return $this->_CI->load->view($this->getTemplateName(), $this->_data);
    }

    public function template($template)
    {
        $this->_template = $template;
    }

    public function addJS($path)
    {
        $this->_js[] = $path;
    }

    public function addCSS($path)
    {
        $this->_css[] = $path;
    }

    public function getTemplateName()
    {
        return (!empty($this->_template)) ?
            $this->_CI->config->item('CI_SIMPLE_TEMPLATE_TEMPLATES_PATH') . $this->_template :
            $this->_CI->config->item('CI_SIMPLE_TEMPLATE_TEMPLATES_PATH') . $this->_CI->config->item('CI_SIMPLE_TEMPLATE_DEFAULT_TEMPLATE');
    }

    public function getCSS()
    {
        return $this->_css;
    }

    public function getJS()
    {
        return $this->_js;
    }
}