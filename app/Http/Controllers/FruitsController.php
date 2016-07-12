<?php
    /**
     * Created by PhpStorm.
     * User: OluwadamilolaAdebayo
     * Date: 6/30/16
     * Time: 11:36 AM
     */

    namespace Tdd\Http\Controllers;

    use Tdd\Fruit;
    use Dingo\Api\Routing\Helpers;
    use Tdd\Transformers\FruitsTransformers;

    class FruitsController extends Controller {
        use Helpers;

        protected $fruitTransformer;

        public function __construct(FruitsTransformers $fruitsTransformer){
            $this->fruitTransformer = $fruitsTransformer;
        }

        public function index(){
            $fruits = Fruit::all();

            return $this->collection($fruits,$this->fruitTransformer);
        }
    }