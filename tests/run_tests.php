<?php

function call($url) {
    return json_decode(file_get_contents($url), true);
}

$base = "http://localhost:8000/index.php";

// Test Add
$res = call("$base?action=add&title=Test1");
if (!isset($res['id'])) {
    echo "FAIL: Add Task\n";
    exit(1);
}

// Test List
$res = call("$base?action=list");
if (count($res) == 0) {
    echo "FAIL: List Task\n";
    exit(1);
}

// Test Update
$res = call("$base?action=update&id=1&status=completed");
if (!isset($res['success'])) {
    echo "FAIL: Update Task\n";
    exit(1);
}

// Test Delete
$res = call("$base?action=delete&id=1");
if (!isset($res['success'])) {
    echo "FAIL: Delete Task\n";
    exit(1);
}

echo "ALL TESTS PASSED\n";
