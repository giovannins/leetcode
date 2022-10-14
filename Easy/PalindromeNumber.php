<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
       if(strrev(intval($x)) == intval($x)) {
           return true;
       }
       return false;
    }
}
