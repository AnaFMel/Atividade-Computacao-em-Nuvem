<?php
    session_start();

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }

    echo "<h2 class='center'>Carrinho de Compras</h2>";

    if (empty($_SESSION['carrinho'])) {
        echo "<p class='center'>O carrinho está vazio.</p>";
        echo "<div class='center'><img src='../img/empty.jpg' alt='Carrinho vazio' width='500'></div>";
    } else {
        echo "<ul>";
        foreach ($_SESSION['carrinho'] as $produto) {
            echo "<li>$produto</li>";
        }
        echo "</ul>";
    }
?>
