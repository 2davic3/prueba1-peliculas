<?php
    
    namespace App\Controllers;
    use App\Models\CategoriaModel;

    class Categoria extends BaseController{

        public function show($id){
            $categoriaModel = new CategoriaModel();

                    
            echo view('categoria/show',[
                "categoria" => $categoriaModel->find($id)
            ]);

        }

        public function create(){

            $categoriaModel = new CategoriaModel();
            $categoriaModel->insert([
                'Titulo'=>$this->request->getPost('Titulo')
            ]);

            echo "Creado";
           // var_dump($this->request->getPost('Titulo'));
           
        }

        public function edit($id){
            $categoriaModel = new CategoriaModel();

            echo view('categoria/edit', [
                'categoria' =>$categoriaModel->find($id)
            ]);
        }

        public function update($id){

            $categoriaModel = new CategoriaModel();

            $categoriaModel->update($id,[
                'Titulo' => $this->request->getPost('Titulo')

            ]);

            echo 'update';
        }

        public function delete($id){

            $categoriaModel = new CategoriaModel();

            $categoriaModel->delete($id);

            echo 'Delete';
        }

        public function new(){
            echo view('categoria/new',[
                'categoria' =>[
                    'titulo' => ''
                ]
            ]);
        }


        public function index(){


            $categoriaModel = new CategoriaModel();

          
            $data=[
                'nombreVariableVista' =>$categoriaModel->findAll(),

            ];
            echo view('categoria/index',$data);
        }
    }
?>