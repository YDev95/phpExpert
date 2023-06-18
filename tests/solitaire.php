<?php

/**

 * Classes used to solve a peg-solitaire game using an

 * evolutionary algorithm.

 *

 * @author Rodolphe Courtier <courtier@stanfordalumni.org>

 * @copyright Rodolphe Courtier

 *

 */





/**

 * Stores the information needed to make a move

 */

class Move {

    public $row;

    public $col;

    public $direction;



    /**

     * Class constants for the different

     * directions so they can be referred

     * to by direction rather than some

     * arbitrary code number.

     */

    const NORTH = 0;

    const SOUTH = 1;

    const EAST = 2;

    const WEST = 3;



    /**

     * Constructor

     */

    function __construct($row, $col, $direction) {

        $this->row = $row;

        $this->col = $col;

        $this->direction = $direction;

    }

    

    function __clone() {

        foreach($this as $key => $val) {

            if(is_object($val) || (is_array($val))) {

                $this->{$key} = unserialize(serialize($val));

            }

        }

    }



    function __toString() {

        return "($this->row, $this->col) " . $this->directionName();

    }



    /**

     * Helper function for printing out the name of the direction

     */

    function directionName() {

        if($this->isMoving(Move::NORTH))

            return("North");

        elseif($this->isMoving(Move::SOUTH))

            return("South");

        elseif($this->isMoving(Move::EAST))

            return("East");

        else

            return("West");

    }



    /**

     * Method to check what direction a move is moving

     */

    function isMoving($direction) {

        if($direction == $this->direction)

            return True;

        return False;

    }

}





/**

 * Class that represents any spot on the game grid.

 */

class Spot {

    /**

     * Constants for the state of the spot. This is so their state

     * can be referred to by names rather than code numbers

     */

    const NOT_A_SPOT = False;

    const TAKEN = 1;

    const OPEN = 2;



    private $state = False;



    function __construct($state) {

        $this->state = $state;

    }



    function __clone() {

        foreach($this as $key => $val) {

            if(is_object($val) || (is_array($val))) {

                $this->{$key} = unserialize(serialize($val));

            }

        }

    }



    function isTaken() {

        if($this->state == Spot::TAKEN)

            return True;

        else

            return False;

    }



    function isClear() {

        if($this->state == Spot::OPEN)

            return True;

        else

            return False;

    }

     function isNotASpot() {

         if($this->state == Spot::NOT_A_SPOT)

             return True;

         else

             return False;

     }



    function take() {

        $this->state = Spot::TAKEN;

    }



    function clear() {

        $this->state = Spot::OPEN;

    }



    function __toString() {

        if($this->isTaken()) {

            return("1");

        } elseif($this->isClear()) {

            return("0");

        } else {

            return("-");

        }

    }

}



/**

 * Class that represents the state of the board via

 * a 2-d array of Spot objects. The state of the board

 * can be changed by using the apply() method with a

 * Move object as a paramter. The Board object also

 * figures out all of the possible moves that can be made

 * given it's current state.

 */

class Board {

    private $spots = array();

    private $s;



    function __construct($s) {

        $this->s = $s;

        foreach(explode("\n",$s) as $line){

            $row = array();

            // $spotr is for spot representation

            foreach(str_split($line) as $spotr) {

                if($spotr == '1') {

                    $spot = new Spot(Spot::TAKEN);

                } elseif ($spotr == '0') {

                    $spot = new Spot(Spot::OPEN);

                } elseif ($spotr == '-') {

                    $spot = new Spot(Spot::NOT_A_SPOT);

                } else {

                    continue;

                }

                $row[] = $spot;

            }

            $this->spots[] = $row;

        }

    }



    function __clone() {

        foreach($this as $key => $val) {

            if(is_object($val) || (is_array($val))) {

                $this->{$key} = unserialize(serialize($val));

            }

        }

    }



    function fitness() {

        $flat = $this->flatten();

        return(count(array_filter($flat, array($this,"_empty_spots"))));

    }



    function _empty_spots($spot) {

        return($spot->isClear());

    }



    function _filled_spots($spot) {

        return($spot->isTaken());

    }



    function __toString() {

        $flat = array();

        $s = "";

        foreach($this->spots as $array) {

            foreach($array as $spot) {

                $s .= $spot;

            }

            $s .= "\n";

        }

        return "$s";

    }



    function pp() {

        echo "<pre>" . $this . "</pre>";

    }



    function apply($move) {

        $row = $move->row;

        $col = $move->col;

        $this->spots[$row][$col]->clear();

        if($move->isMoving(Move::NORTH)) {

            $this->spots[$row-1][$col]->clear();

            $this->spots[$row-2][$col]->take();

        } elseif ($move->isMoving(Move::SOUTH)) {

            $this->spots[$row+1][$col]->clear();

            $this->spots[$row+2][$col]->take();

        } elseif ($move->isMoving(Move::EAST)) {

            $this->spots[$row][$col+1]->clear();

            $this->spots[$row][$col+2]->take();

        } elseif ($move->isMoving(Move::WEST)) {

            $this->spots[$row][$col-1]->clear();

            $this->spots[$row][$col-2]->take();

        } else {

            echo "This is trying to move in an invalid direction";

        }

    }



    function getValidMoves() {

        $validMoves = array();

        $flat = $this->flatten();

        $flat = array_filter($flat, array($this,"_filled_spots"));

        foreach($flat as $spot) {

            $spotMoves = $this->getValidMovesFrom($spot);

            if(count($spotMoves) > 0)

                $validMoves[] = $this->getValidMovesFrom($spot);

        }

        // flatten the array...

        $flat = array();

        foreach($validMoves as $move_a) {

            foreach($move_a as $move) {

                $flat[] = $move;

            }

        }

        return $flat;

    }



    private function getValidMovesFrom($spot) {

        $validMoves = array();

        $coords = $this->indexOf($spot);

        $row = $coords[0];

        $col = $coords[1];

        if( !( is_numeric($row) && is_numeric($col)) ) {

            return $validMoves;

        }

        if( $this->spots[$row][$col]->isNotASpot()) {

            return $validMoves;

        }

        if( isset($this->spots[$row-1]) &&

            isset($this->spots[$row-2]) &&

            $this->spots[$row-1][$col]->isTaken() &&

            $this->spots[$row-2][$col]->isClear() ) {

                $validMoves[] = new Move($row,$col, Move::NORTH);

            }

        if( isset($this->spots[$row+1]) &&

            isset($this->spots[$row+2]) &&

            $this->spots[$row+1][$col]->isTaken() &&

            $this->spots[$row+2][$col]->isClear() ) {

                $validMoves[] = new Move($row,$col, Move::SOUTH);

            }

        if( isset($this->spots[$row][$col+1]) &&

            isset($this->spots[$row][$col+2]) &&

            $this->spots[$row][$col+1]->isTaken() &&

            $this->spots[$row][$col+2]->isClear() ) {

                $validMoves[] = new Move($row,$col, Move::EAST);

            }

        if( isset($this->spots[$row][$col-1]) &&

            isset($this->spots[$row][$col-2]) &&

            $this->spots[$row][$col-1]->isTaken() &&

            $this->spots[$row][$col-2]->isClear() ) {

                $validMoves[] = new Move($row,$col, Move::WEST);

            }

        return $validMoves;

    }



    private function indexOf($spot) {

        for($row = 0; $row < count($this->spots); $row++) {

            // I would use array_search but it uses == and not

            // === to compare objects D:<

            for($col = 0; $col < count($this->spots[$row]); $col++) {

                if($spot === $this->spots[$row][$col]) {

                    return array($row, $col);

                }

            }

        }

        return False;

    }



    private function flatten() {

        $flat = array();

        foreach($this->spots as $array) {

            foreach($array as $spot) {

                $flat[] = $spot;

            }

        }

        return($flat);

    }

}



/**

 * Class to store an instance of a game, e.g. current board state

 * and a list of moves to apply

 *

 * The current implementation is a little confusing, but it works for

 * the algorithm.

 */

class Game {

    // If these are public, it's for debugging purposes

    public $board;

    public $moves = array();

    private $s;



    function __construct($s) {

        $this->s = $s;

    }



    function __clone() {

        foreach($this as $key => $val) {

            if(is_object($val) || (is_array($val))) {

                $this->{$key} = unserialize(serialize($val));

            }

        }

    }



    function __toString() {

        return "$this->board";

    }



    function fitness() {

        return $this->board->fitness();

    }



    function canStillMove() {

        return(count($this->board->getValidMoves()) > 0);

    }



    function play() {

        $this->board = new Board($this->s);

        foreach($this->moves as $move) {

            $this->board->apply($move);

        }

        while($this->canStillMove()) {

            $moves = $this->board->getValidMoves();

            $key = rand(0, (count($moves) - 1));

            $move = $moves[$key];

            $this->moves[] = $move;

            $this->board->apply($move);

        }

    }



    function clip() {

        $clipSize = rand(1,rand(0, count($this->moves)));

        $this->moves = array_slice($this->moves, 0, $clipSize);

    }

}



class PegSolitaire {

    private $games = array();

    private $s;

    private $genSize = 100;

    private $pop = 10;

    private $gen = 0;

    function __construct($s) {

        $this->s = $s;

    }



    function init() {

        $this->gen = 1;

        for($i = 0; $i < $this->genSize; $i++) {

            $game = new Game($this->s);

            $game->play();

            $this->games[] = $game;

        }

        $this->cull();

        $this->printGeneration();

    }



    /**

     * This function expects an array of Games with Moves as paramters.

     * It will play out each of the games and then cull them.

     */

    function set($games) {

        $this->gen = 1;

        foreach($games as $game) {

            $game->play();

            $this->games[] = $game;

        }

        $this->cull();

        $this->printGeneration();

    }



    function evolve() {

        $this->gen++;

        $new = array();

        foreach($this->games as $g) {

            for($i = 0; $i < ($this->pop - 1); $i++) {

                $t = clone $g;

                $t->clip();

                $t->play();

                $new[] = $t;

            }

            $new[] = $g;

        }

        $this->games = $new;

        $this->cull();

        $this->printGeneration();

    }

    function solve() {

        $this->init();

        while( !($this->isThereAWinner()) && $this->gen < 2 ){

            $this->evolve();

        }

    }



    function printGeneration() {

        echo "\nGeneration " . $this->gen . ": ";

        foreach($this->games as $game) {

            echo $game->fitness() . " ";

        }

    }



    private function cull() {

        usort($this->games, array($this,"fit_sort"));

        $this->games = array_slice($this->games, 0, $this->pop);

    }



    private function fit_sort($a, $b) {

        if($a->fitness() == $b->fitness()) {

            return 0;

        } elseif ($a->fitness() > $b->fitness()) {

            return -1;

        } else {

            return 1;

        }

    }



    private function isThereAWinner() {

        foreach($this->games as $game) {

            if($game->fitness() == 32) {

                return True;

            }

        }

        return False;

    }

}



?>