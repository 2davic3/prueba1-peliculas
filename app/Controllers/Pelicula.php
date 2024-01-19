<?php
    
    namespace App\Controllers;
    use App\Models\PeliculaModel;

    class Pelicula extends BaseController{

        public function show($id){
            $peliculaModel = new peliculaModel();

                    
            echo view('pelicula/show',[
                "pelicula" => $peliculaModel->find($id)
            ]);

        }

        public function create(){

            $peliculaModel = new PeliculaModel();
            $peliculaModel->insert([
                'Titulo'=>$this->request->getPost('Titulo'),
                'Descripcion'=>$this->request->getPost('Descripcion')
            ]);

            echo "Creado";
           // var_dump($this->request->getPost('Titulo'));
           
        }

        public function edit($id){
            $peliculaModel = new peliculaModel();

            echo view('pelicula/edit', [
                'pelicula' =>$peliculaModel->find($id)
            ]);
        }

        public function update($id){

            $peliculaModel = new peliculaModel();

            $peliculaModel->update($id,[
                'Titulo' => $this->request->getPost('Titulo'),
                'Descripcion' => $this->request->getPost('Descripcion')

            ]);

            echo 'update';
        }

        public function delete($id){

            $peliculaModel = new peliculaModel();

            $peliculaModel->delete($id);

            echo 'Delete';
        }

        public function new(){
            echo view('pelicula/new',[
                'pelicula' =>[
                    'titulo' => '',
                    'descripcion' => ''
                ]
            ]);
        }


        public function index(){


            $peliculaModel = new PeliculaModel();

          
            $data=[
                'nombreVariableVista' =>$peliculaModel->findAll(),

            ];
            echo view('pelicula/index',$data);
        }
    }
?>