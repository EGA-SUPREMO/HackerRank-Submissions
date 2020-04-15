<?php

class SinglyLinkedListNode {
    public $data;
    public $next;

    public function __construct($node_data)
    {
        $this->data = $node_data;
        $this->next = null;
    }
}

class SinglyLinkedList {
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function insertNode($node_data)
    {
        $node = new SinglyLinkedListNode($node_data);

        if (is_null($this->head)) {
            $this->head = $node;
        } else {
            $this->tail->next = $node;
        }

        $this->tail = $node;
    }
}

function printSinglyLinkedList($node, $sep, $fptr)
{
    while (!is_null($node)) {
        fwrite($fptr, $node->data);

        $node = $node->next;

        if (!is_null($node)) {
            fwrite($fptr, $sep);
        }
    }
}

// Complete the deleteNode function below.

/*
 * For your reference:
 *
 * SinglyLinkedListNode {
 *     int data;
 *     SinglyLinkedListNode next;
 * }
 *
 */
function deleteNode($llist, $position) {
    $itenerLlist = $llist;

    if (0 > $position-1){
        $llist = $llist->next;
    } else 
        for($i = 0; $i<$position-1; $i++) {
            $itenerLlist = $itenerLlist -> next;
        }

    $nodeWillDeleted = $itenerLlist -> next;
    $itenerLlist -> next  = $nodeWillDeleted -> next;

    return $llist;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$llist = new SinglyLinkedList();

fscanf($stdin, "%d\n", $llist_count);

for ($i = 0; $i < $llist_count; $i++) {
    fscanf($stdin, "%d\n", $llist_item);
    $llist->insertNode($llist_item);
}

fscanf($stdin, "%d\n", $position);

$llist1 = deleteNode($llist->head, $position);

printSinglyLinkedList($llist1, " ", $fptr);
fwrite($fptr, "\n");

fclose($stdin);
fclose($fptr);
