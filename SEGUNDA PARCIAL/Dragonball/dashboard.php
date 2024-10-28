<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard - Torneo de Artes Marciales</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #e0e4e7; /* Gris azulado claro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Estilos del contenedor principal */
        .dashboard-container {
            width: 80%;
            max-width: 1000px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            justify-items: center;
        }

        /* Estilos de las fichas */
        .card {
            width: 100%;
            background-color: #f0f5f9; /* Fondo gris azulado */
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            margin: 10px 0;
            color: #5a6d7c; /* Azul grisáceo */
        }

        .card p {
            color: #7d8c96; /* Gris azulado más oscuro */
        }

        /* Botón en cada ficha */
        .card a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #7aa0c4; /* Azul grisáceo */
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .card a:hover {
            background-color: #5a6d7c; /* Azul grisáceo más oscuro */
        }

        /* Contenedor de la frase de Akira Toriyama */
        .quote-container {
            grid-column: span 2;
            background-color: #dbe3ea; /* Gris claro azulado */
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .quote-container p {
            font-style: italic;
            color: #5a6d7c;
            font-size: 18px;
        }

        /* Contenedor de bienvenida */
        .welcome-container {
            grid-column: span 2;
            background-color: #f0f5f9;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .welcome-container h2 {
            color: #5a6d7c;
        }

        /* Ajustes para dispositivos pequeños */
        @media (max-width: 600px) {
            .dashboard-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <!-- Ficha de Perfil de Personaje -->
    <div class="card">
        <h3>Perfil de Personajes</h3>
        <p>Gestiona tu personaje, entrena y mejora tus atributos.</p>
        <a href="dashboardCharacters.php">Ver Perfil</a>
    </div>

    <!-- Ficha de Torneos del Dragón -->
    <div class="card">
        <h3>Torneos del Dragón</h3>
        <p>Participa en torneos épicos y enfrenta a otros guerreros.</p>
        <a href="dashboardTournaments.php">Ver Torneos</a>
    </div>

    <!-- Ficha de Tabla de Clasificaciones -->
    <div class="card">
        <h3>Tabla de Clasificaciones</h3>
        <p>Consulta la lista de los guerreros más poderosos.</p>
        <a href="leaderboard.php">Ver Clasificaciones</a>
    </div>

    <!-- Ficha de Cerrar Sesión -->
    <div class="card">
        <h3>Cerrar Sesión</h3>
        <p>Sal de la aplicación y vuelve más tarde.</p>
        <a href="logout.php">Cerrar Sesión</a>
    </div>

    <!-- Contenedor de la frase de Akira Toriyama -->
    <div class="quote-container">
        <p>"El trabajo duro supera al talento natural cuando el talento natural no trabaja duro."</p>
    </div>

    <!-- Contenedor de bienvenida -->
    <div class="welcome-container">
        <h2>¡Bienvenido al Torneo de Artes Marciales!</h2>
        <p>Prepárate para vivir una experiencia épica y demostrar que eres el mejor guerrero.</p>
    </div>
</div>

</body>
</html>
