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

                if(isset($data[$zona])){
                    $data[$zona]['id']+=$id;
                }else{
                    $data[$zona] = array(
                        'zona' => $rescate->zona,
                        'id' => $rescate->cantidad
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

        public function GraficoPie(){
            require_once 'Models/afectado.php';

            $circle = new Afectado();
            $circles = $circle->getAllPie();
            $array = array();

            while($pie = $circles->fetch_object()){
                $id = $pie->cantidades;
                $descripcion = $pie->descripcion;

                if(isset($array[$descripcion])){
                    $array[$descripcion]['id']+=$id;
                }else{
                    $array[$descripcion] = array(
                        'id' => $pie->cantidades,
                        'descripcion' => $pie->descripcion
                    );
                }
            }

            $array = array_values($array);

            return $array;
        }


        public function GraficoLine(){
            require_once 'Models/afectado.php';

            $line = new Afectado();
            $lines = $line->getAllLine();
            $array_line = array();

            while($row = $lines->fetch_object()){
                $id = $row->cantidades;
                $mes_anio = $row->mes_anio;
        
                if(isset($array_line[$mes_anio])){
                    $array_line[$mes_anio]['id'] += $id;
                } else {
                    $array_line[$mes_anio] = array(
                        'id' => $row->cantidades,
                        'mes_anio' => $row->mes_anio
                    );
                }
            }
            $array_line = array_values($array_line);

            return $array_line;
        }

    }


?>