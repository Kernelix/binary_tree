<?php

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {

        if(!$root->val || $root->val == 1 && !$root->right && !$root->left) {
             return array($root->val);
        }

        $result = [];
        $result = $this->inOrder($root);      
        return $result;
    }

    function inOrder($node) {
    if ($node === null) return [];
    
    $result = [];
    $result = array_merge($result, $this->inOrder($node->left)); // Рекурсия влево до предела до листа и возврат в узел
    $result[] = $node->val; // Текущий узел
    $result = array_merge($result, $this->inOrder($node->right)); // Рекурсия вправо до листа
    
    
    return $result;
    }
}
