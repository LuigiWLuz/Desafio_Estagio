<html>
    <body >
        <pre>
        <?php
            $numero_verificado = 156;
            
            $anterior = 0;
            $atual = 1;
        
            while($anterior <= $numero_verificado){

           

                if($anterior == $numero_verificado){
                    echo "O numero pertence a sequencia";
                }
                else if($atual > $numero_verificado )
                {
                    echo "O numero não pertence a sequencia!";
                }
                $proximo = $anterior + $atual;
                $anterior = $atual;
                $atual = $proximo; 
        }
        ?>
    </body>
    </pre>
</html>