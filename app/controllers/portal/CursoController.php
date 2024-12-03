<?php 
    namespace app\controllers\portal;

    use app\controllers\ContainerController;

    class CursoController extends ContainerController {
        public function index() {

        }

        public function show($request) {
            $this->view([
                'title' => 'Curso',
                'curso' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quos inventore! Adipisci nam veritatis ipsum iure perferendis consequuntur impedit placeat. Reiciendis, aut. Unde, libero dolore? Perferendis necessitatibus rem odit quo.',
            ], 'portal.curso');

        }

        public function create() {

        }

        public function store() {

        }

        public function edit($id) {

        }

        
    }
?>