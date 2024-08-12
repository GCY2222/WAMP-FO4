

        <?php
      echo $_REQUEST['contra'];
      //  echo "<br>";
        if ($_REQUEST['contra']=="markito") 
        {
            echo "contrasenia es correcta";

        }
        else
        {
            echo "la contrasenia no es correcta";
        }

      echo $_REQUEST['cedula'];
      function validarCedula($cedula) {
        // Verificar longitud
        if (strlen($cedula) != 7) {
            return "La cédula está mal escrita";
        }
        
        // Definir multiplicadores
        $multiplicadores = [2, 9, 8, 7, 6, 3, 4];
        $suma = 0;
        
        // Calcular la suma ponderada
        for ($i = 0; $i < 7; $i++) {
            $digito = (int)$cedula[$i];
            $suma += $digito * $multiplicadores[$i];
        }
        
        // Calcular la diferencia para la decena
        $difDecena = 10 - ($suma % 10);
        if ($difDecena == 10) {
            $difDecena = 0;
        }
        
        // Retornar los resultados
        return [
            'resultado' => $suma,
            'diferencia' => $difDecena
        ];
    }
