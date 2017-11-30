<?php

App::uses('Component', 'Controller');
class CommonComponent extends Component {
    

    function c2Digit($digit) {        
        return str_pad($digit,2,'0',STR_PAD_LEFT);
    }



}