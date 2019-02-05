<?php

class JupilerLeague extends SplHeap
{
    /**
     * We modify the abstract method compare so we can sort our
     * rankings using the values of a given array
     */
    public function compare($array1, $array2)
    {
        $values1 = array_values($array1);
        $values2 = array_values($array2);
        if ($values1[0] === $values2[0]) return 0;
        return $values1[0] < $values2[0] ? -1 : 1;
    }
}

// Let's populate our heap here (data of 2009)
$heap = new JupilerLeague();
$heap->insert(['AA Gent' => 15]);
$heap->insert(['Anderlecht' => 20]);
$heap->insert(['Cercle Brugge' => 11]);
$heap->insert(['Charleroi' => 12]);
$heap->insert(['Club Brugge' => 21]);
$heap->insert(['G. Beerschot' => 15]);
$heap->insert(['Kortrijk' => 10]);
$heap->insert(['KV Mechelen' => 18]);
$heap->insert(['Lokeren' => 10]);
$heap->insert(['Moeskroen' => 7]);
$heap->insert(['Racing Genk' => 11]);
$heap->insert(['Roeselare' => 6]);
$heap->insert(['Standard' => 20]);
$heap->insert(['STVV' => 17]);
$heap->insert(['Westerlo' => 10]);
$heap->insert(['Zulte Waregem' => 15]);

// For displaying the ranking we move up to the first node
$heap->top();

// Then we iterate through each node for displaying the result
while ($heap->valid()) {
    list ($team, $score) = each ($heap->current());
    echo $team . ': ' . $score . PHP_EOL;
    $heap->next();
}

