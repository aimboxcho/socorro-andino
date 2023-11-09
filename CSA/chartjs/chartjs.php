<?php 

    class Chartjs{

        public function Grafico1(){
            require_once 'Models/afectado.php';

            $rescate = new Afectado();
            $rescates = $rescate->getAllChart();
            $data = array();

            $data = [];
            while ($row = $rescates->fetch_assoc()) {
                $data[] = [
                    'zona' => $row['zona'],
                    'cantidad' => $row['cantidad']
                ];
            }

            return $data;
        }

        public function Grafico2(){
            require_once 'Models/afectado.php';

            $rescatedate = new Afectado();
            $rescatedates = $rescatedate->getAllChart2();
            $data = array();

            $data = [];
            while ($row = $rescatedates->fetch_assoc()) {
                $data[] = [
                    'tipo_rescate' => $row['tipo_rescate'],
                    'cantidades' => $row['cantidades']
                ];
            }

            return $data;
        }

        public function GraficoPie(){
            require_once 'Models/afectado.php';

            $circle = new Afectado();
            $circles = $circle->getAllPie();
            $data = array();

            $data = [];
            while ($row = $circles->fetch_assoc()) {
                $data[] = [
                    'descripcion' => $row['descripcion'],
                    'cantidades' => $row['cantidades']
                ];
            }

            return $data;
        }



        public function GraficoLine(){
            require_once 'Models/afectado.php';

            $line = new Afectado();
            $lines = $line->getAllLine();
            $array = array();

            $array = [];
            while ($row = $lines->fetch_assoc()) {
                $array[] = [
                    'mes_anio' => $row['mes_anio'],
                    'cantidades' => $row['cantidades']
                ];
            }

            return $array;
        }

    }


?>