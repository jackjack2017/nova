<?php


namespace App\Generators;


class FormGenerator
{

    public function text($name, $value = null, $label = '', $options = [])
    {
        $options['class'] = isset($options['class']) ? $options['class'] . ' form-control ' : ' form-control ';
        return view('back.components.text', compact('name', 'value', 'options', 'label'))->render();
    }


    public function select($name, $available_values = [], $value = null, $label = '', $options = [])
    {
        $options['class'] = isset($options['class']) ? $options['class'] . ' form-control ' : ' form-control ';
        return view('back.components.select', compact('name', 'available_values', 'value', 'options', 'label'))->render();
    }

    public function textarea($name, $value = null, $label = '', $options = [])
    {
        $options['class'] = isset($options['class']) ? $options['class'] . ' form-control' : ' form-control ';
        return view('back.components.textarea', compact('name', 'value', 'options', 'label'))->render();
    }


    public function textareaWYSIHTML5($name, $value = null, $label = '', $options = [])
    {
        $options['class'] = isset($options['class']) ? $options['class'] . ' js-editor ' : ' js-editor ';
        return $this->textarea($name, $value, $label, $options);
    }

//    public function file($name, $label = '', $options = [])
//    {
//        return view('dashboard::components._file', compact('name', 'label', 'options'))->render();
//    }



    public function checkbox($name, $label, $value = null, $status = false, array $options = [])
    {
        $options['id'] = isset($options['id']) ? $options['id'] . ' ' . $name : $name;
        return view('back.components.checkbox', compact('name', 'label', 'value', 'status', 'options'))->render();
    }




}