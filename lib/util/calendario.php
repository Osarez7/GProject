<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of  this
 *
 * @author jint
 */
class Calendario {

    var $di = 1;
    var $me;
    var $an;
    var $fechaActual;
    var $diaMes;
    var $diaSemana;
    var $meses = array(1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio",
        7 => "Julio", 8 => "Agosto", 9 => "Setiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre");

    function __construct() {

        $this->calcularFechas(date("Y"), date("n"));
    }

    public function calcularFechas($anio, $mes) {

        $this->an = $anio;
        $this->me = $mes;
        $this->fechaActual = mktime(0, 0, 0, $this->me, $this->di, $this->an);
        $this->diaMes = date("t", $this->fechaActual);
        $this->diaSemana = date("w", mktime(0, 0, 0, $this->me, $this->di, $this->an));
    }

    public function setMes($mes) {

        $this->me = $mes;
    }

    public function setAnio($anio) {

        $this->an = $anio;
    }

    
    
    
    public function cambiarMes($mes, $anio, $direccion) {

        if (is_int($mes)) {


            if ($direccion == 'siguiente') {
                if ($mes == 12) {
                    
                    $mes = 1;
                    $anio+=1;
                    
                } else {
                    $mes +=1;
                }

            } else if ($direccion == 'anterior') {

                if ($mes == 1) {

                    $mes = 12;
                    $anio-=1;
                } else {
                    $mes -=1;
                }
            }


            $this->calcularFechas($anio, $mes);
        }
    }

    function mostrar_mes() {
        /* $this->diaMes = date("t", $this->fechaActual);
          echo "<table border='1' cellpadding='3' cellspacing='0'>\n";
          echo "<tr>";
          echo "<td colspan='7' align='center'>".$this->meses[$this->me]."</td>";
          echo "</tr>\n";
          echo "<tr><td align='center'>D</td>";
          echo "<td align='center'>L</td>";
          echo "<td align='center'>M</td>";
          echo "<td align='center'>M</td>";
          echo "<td align='center'>J</td>";
          echo "<td align='center'>V</td>";
          echo "<td align='center'>S</td></tr>\n";
          $this->diaSemana = date("w", mktime(0, 0, 0, $this->me, 1, $this->an));
          if ($this->diaSemana != 0) {
          echo "<tr>";
          for ($i = 0;$i < $this->diaSemana;$i++) {
          echo "<td> </td>";
          }
          }

          for ($i = 1;$i<= $this->diaMes;$i++) {
          $this->diaSemana = date("w", mktime(0, 0, 0, $this->me, $i, $this->an));
          if ($this->diaSemana == 0) {
          echo "</tr><tr>";
          }
          echo "<td align='center'>".$i."</td>";
          if ($this->diaSemana == 6) {
          echo "</tr>\n";
          }
          }

          for ($i = $this->diaSemana;$i < 6;$i++) {
          echo "<td> ";
          }
          echo "</table>";

         */
    }

}

?>
