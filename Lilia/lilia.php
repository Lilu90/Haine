<?php


//abstract class Employee {
//    protected $name;
//    private static $types = array('minion', 'cluedup', 'wellconnected');
//
//    static function  recruit($name) {
//        $num = rand(1, count(self::$types))-1;
//        $class = self::$types[$num];
//        return new $class( $name );
//    }
//
//    function  __construct($name)
//    {
//        $this->name = $name;
//    }
//    abstract function fire();
//}
//
//class Minion extends Employee {
//    function fire()
//    {
//        print "{$this->name}: I Will clear my desk\n";
//    }
//}
//
//class NastyBoss {
//    private $employees = array();
//    function addEmployee( Employee $employee) {
//        $this->employees[] = $employee;
//    }
//
//    function projectFails() {
//        if(count( $this->employees) ) {
//            $emp = array_pop( $this->employees );
//            $emp->fire();
//        }
//    }
//}
//
//class CluedUp extends Employee {
//    function fire()
//    {
//        print "{$this->name}: I'll  call my lawyer\n";
//    }
//}
//
//class WellConnected extends Employee {
//    function fire() {
//        print "{$this->name}: I Will call my dad\n";
//    }
//}
//
//
//
//class Preferences {
//    private $props = array();
//    private static $instance;
//
//    private function __construct() {}
//
//    public static function getInstance() {
//        if (empty(self::$instance)) {
//            self::$instance = new Preferences();
//        }
//        return self::$instance;
//    }
//
//    public function setProperty( $key, $val) {
//        $this->props[$key] = $val;
//    }
//
//    public function getProperty($key) {
//        return $this->props[$key];
//    }
//}
//
//$pref = Preferences::getInstance();
//$pref->setProperty("name", "matt");
//
//unset( $pref );
//$pref2 = Preferences::getInstance();
//print $pref2->getProperty("name") . "\n";



//abstract class Unit {
//    abstract function bombardStrenght();
//}
//
//class Archer extends Unit {
//    function bombardStrength()
//    {
//        return 4;
//    }
//}
//
//class LaserCannounUnit extends Unit {
//    function bombardStrength()
//    {
//        return 44;
//    }
//}







//abstract class Unit {
//    abstract function addUnit( Unit $unit);
//    abstract function removeUnit( Unit $unit);
//    abstract function bombardStrength();
//}
//
//class Army extends Unit {
//    private $units = array();
//
//    function addUnit(Unit $unit) {
//        if (in_array( $unit, $this->units, true)) {
//            return;
//        }
//        $this->units[] = $unit;
//    }
//
//    function removeUnit(Unit $unit)
//    {
//        $this->units = array_udiff( $this->units, array( $unit),function ( $a, $b ) {
//            return ($a === $b)?0:1;
//        });
//    }
//
//    function bombardStrength()
//    {
//        $ret = 0;
//        foreach ( $this->units as $unit ) {
//            $ret += $unit->bombardStrength();
//        }
//        return $ret;
//    }
//}
//
////class UnitException extends Unit {}
//
//abstract class Unit {
//    abstract function bombardStrenght();
//
//    function addUnit(Unit $unit) {
//        throw new UnitException(get_class($this). "is a leaf");
//    }
//
//    function removeUnit(Unit $unit)
//    {
//        throw new UnitException( get_class($this). "is a leaf");
//    }
//}
//
//
//
//
//$main_army = new Army();
////$main_army->addUnit( new Archer());
//$main_army->addUnit( new LaserCannonUnit());
//
//
//$sub_army = new Army();
//$sub_army->addUnit( new Archer());
//$sub_army->addUnit( new Archer());
//$sub_army->addUnit( new Archer());

//$main_army->addUnit( $sub_army);
//
//print "attacking with strength : {$main_army->bombardStrength()}\n ";


//abstract class Unit {
//    function getComposite() {
//        return null;
//    }
//    abstract function bombardStrength();
//}
//
//
//
//
//
//abstract class CompositeUnit extends Unit {
//    private $units = [];
//
//    function getComposite() {
//        return $this;
//    }
//     protected function units() {
//        return $this->units;
//     }
//
//     function removeUnit(Unit $unit)
//     {
//         $this->units = array_udiff( $this->units, array( $unit),function ( $a, $b ) {
//             return ($a === $b)?0:1;
//         });
//     }
//
//     function addUnit(Unit $unit)
//     {
//         if( in_array( $unit, $this->units(),true)) {
//             return;
//         }
//         $this->units[] = $unit;
//     }
//}
//
//class UnitScript {
//    static function joinExisting(Unit $newUnit, Unit $occupyingUnit) {
//        $comp;
//
//        if (! is_null( $comp = $occupyingUnit->getComposite())) {
//            $comp = new Army();
//            $comp->addUnit($occupyingUnit);
//            $comp->addUnit($newUnit);
//        }
//        return $comp;
//    }
//}
//
//class TroopCarrier {
//    function addUnit() {
//        if( $unit instanceof Cavalry) {
//            throw new UnitException("Can't get a horse the vehicle");
//        }
//        super::addUnit( $unit );
//    }
//    function bombardStrength() {
//        return o;
//    }
//}

//
//
//abstract class Tile {
//    abstract function getWealthFactor();
//}
//class Plains extends Tile {
//    private $wealthfactor = 2;
//    function getWealthFactor()
//    {
//        return $this->wealthfactor;
//    }
//}
//
//abstract class TileDecorator extends Tile {
//    protected $title;
//    function __construct( Tile $tile) {
//        $this->title = $tile;
//    }
//}
//
//class DiamondDecorator extends Plains {
//    function getWealthFactor()
//    {
//        return parent::getWealthFactor() + 2;
//    }
//}
//
//class PollutionDecorator extends TileDecorator {
//    function getWealthFactor()
//    {
//        return $this->title->getWealthFactor() - 4;
//    }
//}

//$title = new Plains();
//print $title->getWealthFactor();
//
//$title = new DiamondDecorator( new Plains() );
//print $title->getWealthFactor();
//
//$title = new PollutionDecorator( new DiamondDecorator( new Plains()));
//print $title->getWealthFactor();

//class RequestHelper{}
//
//abstract class ProcessRequest {
//    abstract function process( RequestHelper $req);
//}
//
//class MainProcess extends ProcessRequest {
//    function process(RequestHelper $req)
//    {
//        print __CLASS__.": doing something useful with request\n";
//    }
//}
//
//abstract class DecorateProcess extends ProcessRequest {
//    protected $processrequest;
//    function  __construct( ProcessRequest $pr) {
//        $this->processrequest = $pr;
//    }
//}
//
//class LogRequest extends DecorateProcess {
//    function process(RequestHelper $req)
//    {
//        print __CLASS__.": logging request\n";
//        $this->processrequest->process( $req);
//    }
//}
//
//class AuthenticateRequest extends DecorateProcess {
//    function process(RequestHelper $req)
//    {
//        print __CLASS__." authenticating request\n";
//        $this->processrequest->process( $req);
//    }
//}
//
//class StructureRequest extends DecorateProcess {
//    function process(RequestHelper $req)
//    {
//        print __CLASS__.": structuring request data\n";
//        $this->processrequest->process($req);
//    }
//}
//
////$process = new AuthenticateRequest( new StructureRequest( new LogRequest( new MainProcess())));
////$process->process( new RequestHelper() );
//
//
//function getProductFileLines( $file) {
//    return file( $file);
//}
//
//function getProductObjectFromId( $id, $producename) {
//    return new Product( $id, $producename);
//}
//
//function getNameFromLine( $line) {
//    if ( preg_match("/.*-(.*)\s\d+/", $line, $array)) {
//        return str_replace('_', '',$array[1] );
//    }
//    return '';
//}
//
//function getIDFromLine( $line) {
//    if (preg_match("/^(\d{1,3})-/", $line, $array)) {
//        return $array[1];
//    }
//    return -1;
//}
//
//class Product {
//    public $id;
//    public $name;
//    function __construct( $id, $name) {
//        $this->id = $id;
//        $this->name = $name;
//    }
//}
//
//$lines = getProductFileLines('test.txt');
//$objects = array();
//foreach ( $lines as $line) {
//    $id = getIDFromLine( $line);
//    $name = getNameFromLine( $line);
//    $objects[$id] = getProductObjectFromId( $id, $name);
//}
//
//
//class ProductFacede {
//    private $products = array();
//
//    function __construct( $file) {
//        $this->file = $file;
//        $this->compile();
//    }
//
//    private function compile() {
//        $lines = getProductFileLines( $this->file);
//        foreach ( $lines as $line) {
//            $id = getProductFileLines( $line);
//            $name =getProductFileLines( $lines);
//            $this->products[$id] = getProductObjectFromId( $id, $name);
//        }
//    }
//
//    function getProducts() {
//        return $this->products;
//    }
//
//    function getProduct( $id) {
//        if( isset($this->products[$id])) {
//            return $this->products[$id];
//        }
//        return null;
//    }
//}
//
//$facede = new ProductFacede('test.txt');
//$facede->getProduct(234);

//
//abstract class Expression
//{
//    private static $keycount = 0;
//    private $key;
//
//    abstract function interpret(InterpreterContext $context);
//
//    function getKey()
//    {
//        if (!isset($this->key)) {
//            self::$keycount++;
//            $this->key = self::$keycount;
//        }
//        return $this->key;
//    }
//}
//
//class LiteralExpression extends Expression
//{
//    private $value;
//
//    function __construct($value)
//    {
//        $this->value = $value;
//    }
//
//    function interpret(InterpreterContext $context)
//    {
//        $context->replace($this, $this->value);
//    }
//}
//
//class InterpreterContext
//{
//    private $expressionstore = array();
//
//    function replace(Expression $exp, $value)
//    {
//        $this->expressionstore[$exp->getKey()] = $value;
//    }
//
//    function lookup(Expression $exp)
//    {
//        return $this->expressionstore[$exp->getKey()];
//    }
//}
//
//$context = new InterpreterContext();
//$literal = new LiteralExpression('four');
//$literal->interpret($context);
//print $context->lookup($literal) . "\n";
//
//
//class VariableExpression extends Expression {
//    private $name;
//    private $val;
//
//    function __construct( $name, $val=null ) {
//        $this->name = $name;
//        $this->val = $val;
//    }
//
//    function interpret(InterpreterContext $context)
//    {
//        if(! is_null( $this->val)) {
//            $context->replace( $this, $this->val);
//            $this->val = null;
//        }
//    }
//
//    function setValue($value) {
//        $this->val = $value;
//    }
//
//    function getKey()
//    {
//        return $this->name;
//    }
//}
//
//abstract class OperatorExpression extends Expression {
//    protected $l_op;
//    protected $r_op;
//
//    function __construct(Expression $l_op, Expression $r_op) {
//        $this->l_op = $l_op;
//        $this->r_op = $r_op;
//    }
//
//    function interpret( InterpreterContext $context) {
//        $this->l_op->interpret( $context);
//        $this->r_op->interpret( $context);
//        $result_l = $context->lookup( $this->l_op);
//        $result_r = $context->lookup( $this->r_op);
//        $this->doInterpret( $context, $result_l, $result_r);
//    }
//
//    protected abstract function doInterpret( InterpreterContext $context, $result_l, $result_r);
//}
//
//class EqualsExpression extends OperatorExpression {
//    protected function doInterpret( InterpreterContext $context, $result_l, $result_r) {
//        $context->replace( $this, $result_l == $result_r);
//    }
//}
//
//class BooleanOrExpression extends OperatorExpression {
//    protected function doInterpret(InterpreterContext $context, $result_l, $result_r) {
//        $context->replace( $this, $result_l || $result_r);
//    }
//}
//
//class BooleanAndExpression extends OperatorExpression {
//    protected function doInterpret(InterpreterContext $context, $result_l, $result_r) {
//        $context->replace( $this, $result_l && $result_r);
//    }
//}
//
//$context = new InterpreterContext();
//$input = new VariableExpression('input');
//$statement = new BooleanOrExpression(
//    new EqualsExpression( $input, new LiteralExpression('four')),
//    new EqualsExpression($input, new LiteralExpression('4'))
//);
//
//foreach (array("four", "4", "52") as $val) {
//    $input->setValue( $val);
//    print "$val:\n";
//    $statement->interpret( $context);
//    if ($context->lookup($statement)) {
//        print "top marks\n\n";
//    }else {
//        print "dunce hat on\n\n";
//    }
//}






//
//$context = new InterpreterContext();
//$myvar = new VariableExpression('input', 'four');
//$myvar->interpret($context);
//print $context->lookup($myvar). "\n";
//
//$newvar = new VariableExpression('input');
//$newvar->interpret($context);
//print $context->lookup($newvar). "\n";
//
//$myvar->setValue('five');
//$myvar->interpret($context);
//print $context->lookup($myvar). "\n";
//print $context->lookup($newvar). "\n";
//
//
//abstract class Question{
//    protected $prompt;
//    protected $marker;
//
//    function mark ($response) {
//        return $this->marker->mark($response);
//    }
//}
//
//abstract class Market {
//    protected $test;
//
//    function __construct( $test) {
//        $this->test = $test;
//    }
//
//    abstract function mark($response);
//}
//
//class MarkLogicMarker extends Market {
//    private $engine;
//    function __construct($test)
//    {
//        parent::__construct($test);
//        $test->engine = new MarkParse( $test);
//    }
//
//    function mark($response)
//    {
//        return $this->engine->evaluate( $response);
////        return true;
//    }
//}
//
//class MatchMarker extends Marker {
//    function mark( $response) {
//        return ($this->test == $response);
//    }
//}
//
//class RegexMarker extends Market {
//    function mark($response)
//    {
//        return (preg_match($this->test, $response));
//    }
//}
//
//$markers = array( new RegexMarker("/f.ve/"),
//                  new MatchMarker("five"),
//                  new MarkLogicMarker('$input equals "five"'));
//
//foreach ($markers as $marker) {
//    print get_class($marker). "\n";
//    $question = new TextQuestion("how many beans make five ", $marker);
//    foreach (array("five", "four") as $response) {
//        print "\tresponse: $response";
//
//        if ($question->mark($response)) {
//            print "well done\n";
//        }else {
//            print "never mind\n";
//        }
//    }
//}




$arr1 = array(1, 2, 3, 4, 5);

$filteredArray = array_reduce($arr1, function($resultatuTrecut, $el) {
    return $el + $resultatuTrecut;
});

print_r("");
print_r($filteredArray);
print_r("\n");

//$f1Result = array_map(function ($v) {
//    return ($v + 1);
//}, $arr1);
//
//$f2Result = array_map(function($v1,$v2) {
//    if ($v1 == $v2) return 1;
//    else return 0;
//}, $arr1, $arr2);
//
//print_r($f1Result);
//print_r($f2Result);



















?>
