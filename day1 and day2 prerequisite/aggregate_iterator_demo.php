<?php
class MyCollection implements IteratorAggregate {
    private $items = [];

    public function add($item) {
        $this->items[] = $item;
    }

    public function getIterator() {
        return new ArrayIterator($this->items);
    }
}
$collection = new MyCollection();
$collection->add('apple');
$collection->add('banana');
$collection->add('cherry');
foreach ($collection as $item) {
    echo $item . "\n"; // Outputs: apple, banana, cherry
}