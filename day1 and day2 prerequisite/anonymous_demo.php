<?php
$p = new IteratorAggregate(function() {
    yield 'apple';
    yield 'banana';
    yield 'cherry';
});
foreach ($p as $key => $value) {
    echo "Key: $key, Value: $value\n"; // Outputs: Key: 0, Value: apple; Key: 1, Value: banana; Key: 2, Value: cherry
}