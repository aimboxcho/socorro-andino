<?php 

    class Chartjs{

        public function Grafico1(){
            require_once 'Models/afectado.php';

            $rescate = new Afectado();
            $rescates = $rescate->getAllChart();
            $data = array();

            while($rescate = $rescates->fetch_object()){

                $id = $rescate->cantidad;
                $zona = $rescate->zona;
                $tipo_rescate = $rescate->tipo_rescate;

                if(isset($data[$zona])){
                    $data[$zona]['id']+=$id;
                }else{
                    $data[$zona] = array(
                        'zona' => $rescate->zona,
                        'id' => $rescate->cantidad,
                        'tipo_rescate' => $rescate->tipo_rescate
                    );
                }
            }

            $data = array_values($data);

            return $data;
        }

        public function Grafico2(){
            require_once 'Models/afectado.php';

            $rescatedate = new Afectado();
            $rescatedates = $rescatedate->getAllChart2();
            $datadate = array();
            

            while($rescate = $rescatedates->fetch_object()){

                $id = $rescate->cantidades;
                $tipo_rescate = $rescate->tipo_rescate;

                if(isset($datadate[$tipo_rescate])){
                    $datadate[$tipo_rescate]['id']+=$id;
                }else{
                    $datadate[$tipo_rescate] = array(
                        'id' => $rescate->cantidades,
                        'tipo_rescate' => $rescate->tipo_rescate
                    );
                }
            }

            $datadate = array_values($datadate);

            return $datadate;
        }

    }


?>