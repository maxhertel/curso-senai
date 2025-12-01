    <?php

        // =================== CLASSE ======================
        class Pessoa
        {
            private string $idUnico;
            private string $nomeCompleto = '';
            private float $altura;  // altura em cm
            private float $peso;
            private int $idade;
            private string $genero;
            //PERGUNTA 1:
            public function __construct(
                $nomeCompleto = '',
                $altura = 0,
                $peso = 0,
                $idade = 0,
                $genero = 'I'
                )
            {
                $this->setNome($nomeCompleto);
                $this->setAltura($altura);
                $this->atribuirValorPeso($peso);
                $this->setIdade($idade);
                $this->setGenero($genero);
            }


            // ============= SETTERS ================

            public function setNome($nome): void
            {
                if (str_contains(strtolower($nome), 'select')) {
                    echo "ERRO: Entrada inválida detectada!<br>";
                    $nome = 'Indefinido';
                }else{
                    $this->nomeCompleto = $nome;
                }
                
            }

            public function setAltura($altura): void
            {
                $this->altura = $this->validarAltura($altura);
            }

            private function validarAltura($altura): int
            {
                if (is_null($altura)) {
                    return 0;
                }

                $altura = (float)$altura;

                // Converte de metros para centímetros
                if ($altura < 3) {
                    $altura = $altura * 100;
                }

                return (int)$altura;
            }

            public function atribuirValorPeso($peso): void
            {
                $this->peso = (float)$peso;
            }

            public function setIdade($idade): void
            {
                if ($idade >= 0) {
                    $this->idade = (int)$idade ?? 0;
                } else {
                    $this->idade = 0;
                    echo "ERRO: Idade inválida!<br>";
                }
            }
            //PERGUNTA 2:
            public function setGenero($genero): void
            {
                $genero = strtoupper($genero);
                //array em php
                $validos = ['I', 'M', 'F'];

                if (!in_array($genero, $validos)) {
                    echo "ERRO: Gênero inválido!<br>";
                    $this->genero = 'I';
                    return;
                }

                $this->genero = $genero;
            }

            // =========== LÓGICA =============

            public function imc(): string
            {
                // Converte a altura de cm para metros antes do cálculo
                $alturaMetros = $this->altura / 100;

                if ($alturaMetros <= 0) return "0";

                return number_format($this->peso / ($alturaMetros * $alturaMetros), 2, ',', '.');
            }

            public function exibir(): void
            {
                
                echo "Nome: $this->nomeCompleto <br>";
                echo "Altura: $this->altura cm <br>";
                echo "Peso: $this->peso kg <br>";
                echo "Idade: $this->idade anos <br>";
                echo "Gênero: $this->genero <br>";
                echo "IMC: " . $this->imc() . "<br>";
            }


            //a funcao estatiaca permite eu usar apenas a funcao de uma class e ignoraro tdo resto
            public static function exibirLinhasDaTabela(): void
            {
                $arquivo = __DIR__ . '/../pessoas.csv';
                $arqPessoas = fopen($arquivo,'r');
                //PERGUNTA5:
                while (($linha = fgetcsv($arqPessoas,1000,";")) !== false) {
                    //ele mosta detalhes de uma array ou variavel
                    //var_dump($linha[0]);
                    echo '<tr>';
                        echo '<td >'. $linha[0].'</td>';
                        echo '<td >'. $linha[1],'</td>';
                        echo '<td >'. $linha[2].'</td>';
                        echo '<td >'. $linha[3].'</td>';
                        echo '<td >'. $linha[4].'</td>';     
                    echo '</tr>';               
                }
                fclose($arqPessoas);


             
            }
            //PERGUNTA 3:
            //
            //
            public function salvarCSV() : void {
                $arquivo = __DIR__ . '/../pessoas.csv';

                $dados = [
                    $this->nomeCompleto,
                    $this->altura,
                    $this->peso,
                    $this->idade,
                    $this->genero,
                ];

                $arqPessoas = fopen($arquivo,'a');

                if($arqPessoas){
                    fputcsv($arqPessoas,$dados,';');
                    fclose($arqPessoas);
                }

            }
        }
?>