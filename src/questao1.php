<?php

$resposta = strtolower(trim((string) readline("É mamífero? (s/n): ")));

if ($resposta === "s") {

    $resposta = strtolower(trim((string) readline("É quadrúpede? (s/n): ")));

    if ($resposta === "s") {

        $resposta = strtolower(trim((string) readline("É carnívoro? (s/n): ")));

        if ($resposta === "s") {
            echo "Então o animal escolhido foi leão.";
        } elseif ($resposta === "n") {
            echo "Então o animal escolhido foi cavalo.";
        } else {
            echo "Animal não identificado.";
        }

    } elseif ($resposta === "n") {

        $resposta = strtolower(trim((string) readline("É bípede? (s/n): ")));

        if ($resposta === "s") {

            $resposta = strtolower(trim((string) readline("É onívoro? (s/n): ")));

            if ($resposta === "s") {
                echo "Então o animal escolhido foi homem.";
            } elseif ($resposta === "n") {
                echo "Então o animal escolhido foi macaco.";
            } else {
                echo "Animal não identificado.";
            }

        } elseif ($resposta === "n") {

            $resposta = strtolower(trim((string) readline("É voador? (s/n): ")));

            if ($resposta === "s") {
                echo "Então o animal escolhido foi morcego.";
            } elseif ($resposta === "n") {

                $resposta = strtolower(trim((string) readline("É aquático? (s/n): ")));

                if ($resposta === "s") {
                    echo "Então o animal escolhido foi baleia.";
                } elseif ($resposta === "n") {
                    echo "Animal não identificado.";
                } else {
                    echo "Animal não identificado.";
                }

            } else {
                echo "Animal não identificado.";
            }

        } else {
            echo "Animal não identificado.";
        }

    } else {
        echo "Animal não identificado.";
    }

} elseif ($resposta === "n") {

    $resposta = strtolower(trim((string) readline("É ave? (s/n): ")));

    if ($resposta === "s") {

        $resposta = strtolower(trim((string) readline("É voadora? (s/n): ")));

        if ($resposta === "n") {

            $resposta = strtolower(trim((string) readline("É tropical? (s/n): ")));

            if ($resposta === "s") {
                echo "Então o animal escolhido foi avestruz.";
            } elseif ($resposta === "n") {

                $resposta = strtolower(trim((string) readline("É polar? (s/n): ")));

                if ($resposta === "s") {
                    echo "Então o animal escolhido foi pinguim.";
                } elseif ($resposta === "n") {
                    echo "Animal não identificado.";
                } else {
                    echo "Animal não identificado.";
                }

            } else {
                echo "Animal não identificado.";
            }

        } elseif ($resposta === "s") {

            $resposta = strtolower(trim((string) readline("É nadadora? (s/n): ")));

            if ($resposta === "s") {
                echo "Então o animal escolhido foi pato.";
            } elseif ($resposta === "n") {

                $resposta = strtolower(trim((string) readline("É de rapina? (s/n): ")));

                if ($resposta === "s") {
                    echo "Então o animal escolhido foi águia.";
                } elseif ($resposta === "n") {
                    echo "Animal não identificado.";
                } else {
                    echo "Animal não identificado.";
                }

            } else {
                echo "Animal não identificado.";
            }

        } else {
            echo "Animal não identificado.";
        }

    } elseif ($resposta === "n") {

        $resposta = strtolower(trim((string) readline("É réptil? (s/n): ")));

        if ($resposta === "s") {

            $resposta = strtolower(trim((string) readline("Tem casco? (s/n): ")));

            if ($resposta === "s") {
                echo "Então o animal escolhido foi tartaruga.";
            } elseif ($resposta === "n") {

                $resposta = strtolower(trim((string) readline("É carnívoro? (s/n): ")));

                if ($resposta === "s") {
                    echo "Então o animal escolhido foi crocodilo.";
                } elseif ($resposta === "n") {

                    $resposta = strtolower(trim((string) readline("Tem patas? (s/n): ")));

                    if ($resposta === "n") {
                        echo "Então o animal escolhido foi cobra.";
                    } elseif ($resposta === "s") {
                        echo "Animal não identificado.";
                    } else {
                        echo "Animal não identificado.";
                    }

                } else {
                    echo "Animal não identificado.";
                }

            } else {
                echo "Animal não identificado.";
            }

        } elseif ($resposta === "n") {
            echo "Animal não identificado.";
        } else {
            echo "Animal não identificado.";
        }

    } else {
        echo "Animal não identificado.";
    }

} else {
    echo "Resposta inválida. Digite apenas s ou n.";
}


?>